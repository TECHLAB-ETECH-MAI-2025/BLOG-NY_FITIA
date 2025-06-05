import React, { useState } from "react";
import { useNavigate } from "react-router-dom";

function Connexion() {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [message, setMessage] = useState('');
    const navigate = useNavigate();
    
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
                localStorage.setItem('token', data.token);
                navigate('/accueil')
            } 
            else {
                setMessage(data.message || 'Erreur de connexion');
            }
        } catch (error) {
            console.error(error);
            setMessage('Erreur serveur');
        }
    };
    return (
        <div className="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
            <h2 className="text-2xl font-semibold mb-6 text-center">Connexion</h2>
            <form onSubmit={handleSubmit} className="space-y-4">
                <div className="form-control">
                    <label htmlFor="boutonEmail" className="label">
                        <span className="label-text">Email :</span>
                    </label>
                    <input type="email" id="boutonEmail" value={email} onChange={e => setEmail(e.target.value)} required className="input input-bordered w-full" />
                </div>
                <div className="form-control">
                    <label htmlFor="boutonPassword" className="label">
                        <span className="label-text">Mot de Passe :</span>
                    </label>
                    <input type="password"  id="boutonPassword" value={password} onChange={e => setPassword(e.target.value)} required className="input input-bordered w-full" />
                </div>
                <div className="form-control mt-6">
                    <button type="submit" className="btn btn-primary w-full"> Se Connecter </button>
                </div>
            </form>
            {message && ( <p className="mt-4 text-center text-sm text-red-500">  {message} </p> )}
        </div>
    );
}
export default Connexion;
