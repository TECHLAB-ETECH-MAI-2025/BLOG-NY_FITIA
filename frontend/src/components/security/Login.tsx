import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
import "../../styles/Login.css"
import { Link } from "react-router-dom";

function Login() {
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
                credentials: 'include',
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
        <div className="page_body container-fluid min-vh-100 d-flex align-items-center justify-content-center">
            <div className="col-md-6 col-lg-4">
                <div className="card rounded-4 border-0">
                    <div className="card-body p-5 rounded-4">
                        <h1 className="text-center mb-4  fw-bold">Sign In</h1><hr />
                        <form onSubmit={handleSubmit}>
                            <div className="mb-3">
                                <label htmlFor="email" className="form-label">Email</label>
                                <input type="email"  className="form-control form-control-lg rounded-pill" id="email" placeholder="exemple@mail.com"  value={email} onChange={(e) => setEmail(e.target.value)}  required />
                            </div>
                            <div className="mb-4">
                                <label htmlFor="password" className="form-label">Password</label>
                                <input type="password" className="form-control form-control-lg rounded-pill" id="password" placeholder="Your password"  value={password} onChange={(e) => setPassword(e.target.value)} required/>
                            </div>
                             <p><input type="checkbox" />  Remember Me</p>
                            <Link to="/forgot-password">Forgot Password?</Link>
                            <div className="d-grid">
                                <br/>
                                <button type="submit" className="btn btn-primary btn-lg rounded-pill shadow-sm"> Sign In  </button>
                            </div><br />
                            <p>You don't have an account ? <Link to="/register"> Sign Up</Link></p>
                        </form>
                        {message && ( <div className="alert alert-danger mt-4 text-center rounded-3" role="alert"> {message} </div> )}
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Login;
