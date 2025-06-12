import React, { useEffect, useState } from "react";
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import { Link } from 'react-router-dom';

interface UserProfile {
  id: number;
  email: string;
  firstName: string;
  lastName: string;
  avatar: string | null;
}

const Profil: React.FC = () => {
  const [user, setUser] = useState<UserProfile | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const token = localStorage.getItem("token");

    if (!token) {
      setError("Utilisateur non connecté.");
      setLoading(false);
      return;
    }

    fetch("http://localhost:8000/api/profil", {
      method: "GET",
      headers: {
        "Authorization": `Bearer ${token}`,
        "Content-Type": "application/json",
      },
    })
    .then(async (res) => {
        if (!res.ok) {
            const text = await res.text();
            console.log("Erreur fetch, response text:", text);
            try {
            const errData = JSON.parse(text);
            throw new Error(errData.message || "Erreur lors de la récupération du profil.");
            } catch {
            throw new Error("Erreur lors de la récupération du profil.");
            }
        }
        return res.json();
    })
    .then((data: UserProfile) => {
        setUser(data);
        setLoading(false);
    })
    .catch((err: Error) => {
        if (err.message.includes("Expired JWT Token")) {
            alert("Votre session a expiré, veuillez vous reconnecter.");
            localStorage.removeItem("token");
            window.location.href = "/";
            return;
        }
        setError(err.message);
        setLoading(false);
    });

  }, []);

  if (loading) return <div>Chargement...</div>;
  if (error) return <div style={{ color: "red" }}>Erreur : {error}</div>;
  if (!user) return null;

  return (
    <div className="text-center mb-9">
      <div className="dropdown">
        <div className="d-block text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          {user.avatar ? (
            <img src={`http://localhost:8000/uploads/avatars/${user.avatar}`} alt={`${user.firstName} ${user.lastName}`} style={{ width: "70px", height: "70px", borderRadius: "50%" }} />
          ) : (
            <img src={`http://localhost:8000/uploads/avatars/default.jpeg`}  alt="Default avatar" style={{ width: "70px", height: "70px", borderRadius: "50%" }} />
          )}
          <span className="d-block mt-1 text-white">{user.firstName} {user.lastName}</span>
        </div>
        <ul className="dropdown-menu">
          <li>
            <Link className="dropdown-item" to="/infoProfile">
              <i className="bi bi-person-lines-fill me-2"></i> Mon profil
            </Link>
          </li>
          <li>
            <Link className="dropdown-item" to="/editProfile">
              <i className="bi bi-gear me-2"></i> Paramètres
            </Link>
          </li>
        </ul>
      </div>
    </div>
  );
};

export default Profil;
