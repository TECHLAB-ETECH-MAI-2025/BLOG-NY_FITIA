import React, { useEffect, useState } from "react";
import "../../styles/UserList.css";

type User = {
  id: number;
  email: string;

};

const UserList: React.FC = () => {
  const [users, setUsers] = useState<User[]>([]);
  const token = localStorage.getItem("token"); 
  if (!token) {
    console.error("Aucun token trouvé !");
    return;
  }

  useEffect(() => {
    fetch("http://localhost:8000/api/chat", {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
      .then((res) => res.json())
      .then((data) => setUsers(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

  return (
    <div className="chat-user-list">
      <h2 className="chat-title">Chat avec un utilisateur</h2>
      <div className="chat-user-grid">
        {users.map((user) => (
          <div key={user.id} className="chat-user-card-pro">
            <div className="card-header">
              <div className="avatar-pro">
                {user.email.charAt(0).toUpperCase()}
              </div>
              <div className="user-info">
                <h3 className="user-name">{user.email}</h3>
                <span className="user-role">En ligne / Hors ligne</span>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default UserList;
