import React, { useEffect, useState, useRef } from 'react';
import { useParams } from 'react-router-dom';
import '../../styles/ChatWithUser.css';

interface Message {
  id: number;
  content: string;
  createdAt: string;
  senderId: number;
  receiverId: number;
  temp?: boolean;
}

interface User {
  id: number;
  email: string;
}

const ChatWithUser: React.FC = () => {
  const { id } = useParams<{ id: string }>();
  const [messages, setMessages] = useState<Message[]>([]);
  const [otherUser, setOtherUser] = useState<User | null>(null);
  const [currentUser, setCurrentUser] = useState<number | null>(null);
  const [newMessage, setNewMessage] = useState('');
  const messagesEndRef = useRef<HTMLDivElement>(null);
  const token = localStorage.getItem('token');

  const scrollToBottom = () => {
    if (messagesEndRef.current) {
      messagesEndRef.current.scrollIntoView({ behavior: 'smooth' });
    }
  };

  const fetchMessages = () => {
    fetch(`http://localhost:8000/api/chat/${id}`, {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
      .then((res) => {
        if (!res.ok) throw new Error(`Erreur ${res.status}`);
        return res.json();
      })
      .then((data) => {
        setMessages(data.messages);
        setOtherUser(data.otherUser);
        setCurrentUser(data.currentUserId);
      })
      .catch((err) => console.error('Erreur chargement messages:', err));
  };

  useEffect(() => {
    fetchMessages();
  }, [id]);

  useEffect(() => {
    scrollToBottom();
  }, [messages]);

  useEffect(() => {
    if (!currentUser || !otherUser) 
      return;

    const ids = [currentUser, otherUser.id].sort((a, b) => a - b);
    const topic = `http://localhost:3000/chat/${ids[0]}-${ids[1]}`;

    const mercureUrl = new URL('http://localhost:3000/.well-known/mercure');
    mercureUrl.searchParams.append('topic', topic);
    if (token) {
      mercureUrl.searchParams.append('jwt', token);
    }

    const eventSource = new EventSource(mercureUrl.toString(), { withCredentials: true });

    eventSource.onmessage = (event) => {
      try {
        const data: Message = JSON.parse(event.data);

        setMessages((prevMessages) => {
          const withoutTempDuplicates = prevMessages.filter(
            (m) =>
              !(
                m.temp &&
                m.content === data.content &&
                m.senderId === data.senderId
              )
          );
          if (withoutTempDuplicates.find((m) => m.id === data.id)) 
            return withoutTempDuplicates;
          return [...withoutTempDuplicates, data];
        });
      } catch (e) {
        console.error('Erreur parsing message Mercure', e);
      }
    };

    eventSource.onerror = (error) => {
      console.error('Erreur Mercure EventSource', error);
      eventSource.close();
    };

    return () => {
      eventSource.close();
    };
  }, [currentUser, otherUser]);

  const handleSend = () => {
    if (!newMessage.trim() || !otherUser || !currentUser) return;

    const tempMessage: Message = {
      id: Date.now(), // ID temporaire
      content: newMessage,
      senderId: currentUser,
      receiverId: otherUser.id,
      createdAt: new Date().toISOString(),
      temp: true,
    };

    setMessages((prevMessages) => [...prevMessages, tempMessage]);

    fetch('http://localhost:8000/api/chat/send', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${token}`,
      },
      body: JSON.stringify({
        content: newMessage,
        receiverId: otherUser.id,
      }),
    })
      .then((res) => {
        if (!res.ok) {
          return res.text().then((text) => {
            throw new Error(`Erreur ${res.status}: ${text}`);
          });
        }
        return res.json();
      })
      .then((savedMessage: Message) => {
        setMessages((prevMessages) =>
          prevMessages.map((msg) =>
            msg.temp &&
            msg.content === savedMessage.content &&
            msg.senderId === savedMessage.senderId
              ? savedMessage
              : msg
          )
        );
      })
      .catch((err) => {
        console.error('Erreur envoi:', err);
      });

    setNewMessage('');
  };

  return (
    <div className="chatWithUser">
      {otherUser ? (
        <>
          <h2>Chat avec {otherUser.email}</h2>
          <div className="chat-messages">
            {messages.map((msg) => {
              const isSent = msg.senderId === currentUser;
              return (
                <div
                  key={msg.id}
                  className={`message ${isSent ? 'sent' : 'received'}`}
                >
                  <p>{msg.content}</p>
                  <span className="timestamp">{msg.createdAt}</span>
                </div>
              );
            })}
            <div ref={messagesEndRef} />
          </div>
        </>
      ) : (
        <h2>Chargement...</h2>
      )}
      <div className="chat-send">
        <input
          type="text"
          value={newMessage}
          onChange={(e) => setNewMessage(e.target.value)}
          placeholder="Écrire un message..."
        />
        <button onClick={handleSend}>Envoyer</button>
      </div>
    </div>
  );
};

export default ChatWithUser;
