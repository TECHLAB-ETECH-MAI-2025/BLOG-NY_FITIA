import { useState } from 'react';
import "../../styles/Forgot.css";

function ForgotPassword() {
  const [email, setEmail] = useState('');
  const [message, setMessage] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
        const response = await fetch('http://localhost:8000/reset-password', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email }),
        });

        const data = await response.json();
        console.log("Réponse serveur:", data);

        if (response.ok) {
        setMessage(data.message || "Un e-mail de réinitialisation a été envoyé.");
        } else {
        setMessage(data.error || "Une erreur est survenue.");
        }
    } catch (error) {
        console.error("Erreur fetch:", error);
        setMessage("Erreur réseau ou serveur.");
    }
    };

  return (
    <div className="forgot-container">
      <h2>Forgot Password</h2>
      <form onSubmit={handleSubmit}>
        <input
          type="email"
          placeholder="Votre adresse e-mail"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
          required
        />
        <button type="submit">Envoyer</button>
      </form>
      {message && <p className="message">{message}</p>}
    </div>
  );
}

export default ForgotPassword;
