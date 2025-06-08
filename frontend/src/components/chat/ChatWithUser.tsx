import React, { useEffect, useState, useRef } from 'react';
import { useParams } from 'react-router-dom';
import '../../styles/ChatWithUser.css';

interface Message {
  id: number;
  content: string;
  createdAt: string;
  senderId: number;
  receiverId: number;
}

interface User {
  id: number;
  email: string;
}

const POLLING_INTERVAL_MS = 3000;

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

  useEffect(() => {
    scrollToBottom();
  }, [messages]);

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

    const intervalId = setInterval(() => {
      fetchMessages();
    }, POLLING_INTERVAL_MS);

    return () => clearInterval(intervalId);
  }, [id]);

  const handleSend = () => {
    if (!newMessage.trim())
        return;
    
    fetch('http://localhost:8000/api/chat/send', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${token}`,
      },
      body: JSON.stringify({
        content: newMessage,
        receiverId: otherUser?.id,
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
      .then(() => setNewMessage(''))
      .catch((err) => console.error('Erreur envoi:', err));
    console.log('Envoi Mess : ' + newMessage);
  };

  return (
    <div className="chatWithUser">
      {otherUser ? (
        <>
          <h2>Conversation avec {otherUser.email}</h2>
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
                    {new Date(msg.createdAt).toLocaleString()}
                  </span>
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
        <button onClick={handleSend}>Send</button>
      </div>
    </div>
  );
};

export default ChatWithUser;
