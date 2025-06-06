import React, { useEffect, useState } from "react";

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
    <div className="profil-container" style={{ display: "flex", alignItems: "center", gap: "10px" }}>
      {user.avatar ? (
        <img
          src={`http://localhost:8000/uploads/avatars/${user.avatar}`}
          alt={`${user.firstName} ${user.lastName}`}
          style={{ width: "40px", height: "40px", borderRadius: "50%" }}
        />
      ) : (
        <div style={{ width: "40px", 
            height: "40px",  
            borderRadius: "50%", 
            backgroundColor: "#ccc", 
            display: "flex", 
            alignItems: "center",
            justifyContent: "center",
            fontWeight: "bold",
            color: "#555",
          }}
        >
          {user.firstName[0].toUpperCase()}
        </div>
      )}
      <span>{user.firstName} {user.lastName}</span>
    </div>
  );
};

export default Profil;
