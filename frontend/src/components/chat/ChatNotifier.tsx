import { useEffect, useState } from 'react';

function ChatNotifier() {
    const [newMessages, setNewMessages] = useState(false);
    const [count, setCount] = useState(0);
    const token = localStorage.getItem('token');

    useEffect(() => {
    const interval = setInterval(() => {
        fetch('http://localhost:8000/api/chat/unread', {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
            credentials: 'include',
        })
        .then(res => {
            if (!res.ok) {
            throw new Error('HTTP error ' + res.status);
            }
            return res.json();
        })
        .then(data => {
            setNewMessages(data.hasNewMessages);
            setCount(data.count);
        })
        .catch(e => console.error('Fetch error:', e));
    }, 5000);
    return () => clearInterval(interval);
    }, []);
    
    return (
        <div>
            <div>
            {newMessages && (
                <div className="notification-badge" style={{ color: 'red' }}>
                🔔 {count} nouveau{count > 1 ? 'x' : ''} message{count > 1 ? 's' : ''}
                </div>
            )}
            </div>
        </div>
  );
}

export default ChatNotifier;
