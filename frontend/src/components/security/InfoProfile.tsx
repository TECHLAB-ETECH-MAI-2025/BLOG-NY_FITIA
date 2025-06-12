import React, { useEffect, useState } from 'react';
import "../../styles/InfoProfile.css";

type User = {
    firstName: string;
    lastName: string;
    phone: string;
    email: string;
    avatar?: string | null;
};

const ProfileView: React.FC = () => {
    const [user, setUser] = useState<User | null>(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);
    const token = localStorage.getItem('token');

  useEffect(() => {
    fetch('http://localhost:8000/api/profil', {
        headers: {
          "Content-Type": "application/json",
          "Authorization": `Bearer ${token}`
        },
    })
      .then(res => {
        if (!res.ok) throw new Error('Erreur lors du chargement');
        return res.json();
      })
      .then(data => {
        setUser(data);
        setLoading(false);
      })
      .catch(err => {
        setError(err.message);
        setLoading(false);
      });
  }, []);

  if (loading) return <p>Chargement...</p>;
  if (error) return <p>Erreur : {error}</p>;
  if (!user) return <p>Aucun utilisateur trouvé</p>;

  return (
    <div className="profile-card">
      <div className="profile-image-wrapper">
        <img
          src={
            user.avatar && user.avatar.trim() !== ""
              ? `http://localhost:8000/uploads/avatars/${user.avatar}`
              : `http://localhost:8000/uploads/avatars/default.jpeg`
          }
          alt={`${user.firstName} ${user.lastName}`}
          className="profile-image"
          onError={(e) => {
            (e.target as HTMLImageElement).src = 'http://localhost:8000/uploads/avatars/default.jpeg';
          }}
        />
      </div>
      <div className="profile-info">
        <h2 className="profile-name">{user.firstName} {user.lastName}</h2>
        <p><strong>Téléphone :</strong> {user.phone}</p>
        <p><strong>Email :</strong> {user.email}</p>
      </div>
    </div>
  );
};

export default ProfileView;
