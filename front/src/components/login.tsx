import React, { useState } from "react";

function Login() {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [message, setMessage] = useState('');

    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();

        try {
            const response = await fetch('http://localhost:8000/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password }),
            });

            const data = await response.json();

            if (response.ok) {
                setMessage('Connexion réussie');
                localStorage.setItem('token', data.token);
                console.log("Token reçu:", data.token);
            } else {
                setMessage(data.message || 'Erreur de connexion');
            }
        } catch (error) {
            console.error(error);
            setMessage('Erreur serveur');
        }
    };

    return (
        <div>
            <h2>Sign In</h2>
            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="boutonEmail">Email:</label>
                    <input
                        type="email"
                        id="boutonEmail"
                        value={email}
                        onChange={e => setEmail(e.target.value)}
                        required
                    />
                </div>
                <div>
                    <label htmlFor="boutonPassword">Password:</label>
                    <input
                        type="password"
                        id="boutonPassword"
                        value={password}
                        onChange={e => setPassword(e.target.value)}
                        required
                    />
                </div>
                <div>
                    <button type="submit">Sign In</button>
                </div>
                {message && <p>{message}</p>}
            </form>
        </div>
    );
}

export default Login;
