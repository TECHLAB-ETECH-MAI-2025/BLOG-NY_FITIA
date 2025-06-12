import React, { useEffect, useState, useRef } from 'react';
import { useParams } from 'react-router-dom';
import '../../styles/ChatWithUser.css';
import { FiSend } from 'react-icons/fi';

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
  firstName: string;
  lastName: string;
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

  // const { unreadMessages, setUnreadForUser, markMessagesAsRead } = useNotification();

  useEffect(() => {
    fetchMessages();
  //   if (id) {
  //   markMessagesAsRead(id);
  // }
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

        // if (data.receiverId === currentUser) {
        //   const senderKey = data.senderId.toString();
        //   setUnreadForUser(senderKey, (unreadMessages[senderKey] || 0) + 1);
        // }

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
      id: Date.now(),
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
    <div className="chat-container">
      {otherUser ? (
        <>
          <div className="chat-header">
            <h2 className="chat-title" >{otherUser.firstName} {otherUser.lastName}</h2>
          </div>
          <div className="chat-messages">
            {messages.map((msg) => {
              const isSent = msg.senderId === currentUser;
              return (
                <div
                  key={msg.id}
                  className={`message ${isSent ? 'sent' : 'received'}`}
                >
                  <p>{msg.content}</p>
                  <span className="timestamp">
                    {new Date(msg.createdAt).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}
                  </span>
                </div>
              );
            })}
            <div ref={messagesEndRef} />
          </div>
        </>
      ) : (
        <div className="loading-state">
          <h2>Chargement...</h2>
        </div>
      )}
      <div className="chat-send">
        <input
          type="text"
          value={newMessage}
          onChange={(e) => setNewMessage(e.target.value)}
          placeholder="Write a mess..."
          onKeyPress={(e) => e.key === 'Enter' && handleSend()}
        />
        <button onClick={handleSend}>
          <FiSend className="send-icon" />
          Send
        </button>
      </div>
    </div>
  );
};

export default ChatWithUser;
