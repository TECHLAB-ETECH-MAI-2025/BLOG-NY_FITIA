import { useState } from 'react';
import { Link } from 'react-router-dom';
import "../../styles/Register.css";

const RegisterForm = () => {
  const [email, setEmail] = useState('');
  const [firstName, setFirstName] = useState('');
  const [lastName, setLastName] = useState('');
  const [phone, setPhone] = useState('');
  const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');
  const [message, setMessage] = useState(null);
  const [errors, setErrors] = useState(null);

  const handleSubmit = async (e) => {
    e.preventDefault();
    setMessage(null);
    setErrors(null);

    if (password != confirmPassword)
    {
        setErrors("Passwords do not match");
        return ;
    }

    try {
        const response = await fetch('http://localhost:8000/api/register', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ firstName, lastName, phone, email, password }),
        });
        console.log('Oui');
        const data = await response.json();
        if (!response.ok) {
            setErrors(data.message || data.error || 'Erreur inconnue');
        } 
        else {
            setMessage(data.message || 'Inscription réussie');
            setFirstName('');
            setLastName('');
            setPhone('');
            setEmail('');
            setPassword('');
      }
    }
    catch (error) {
      setErrors('Erreur réseau');
    }
  };

  return (
    <div className="register-container">
      <form onSubmit={handleSubmit} className="form-box">
        <h2 className="text-center">Sign Up</h2>

        <div className="form-row">
          <div className="form-group half">
            <label>First Name</label>
            <input type="text" value={firstName} required onChange={e => setFirstName(e.target.value)} />
          </div>
          <div className="form-group half">
            <label>Last Name</label>
            <input type="text" value={lastName} required onChange={e => setLastName(e.target.value)} />
          </div>
        </div>

        <div className="form-row">
          <div className="form-group third">
            <label>Phone</label>
            <input type="tel" value={phone} required onChange={e => setPhone(e.target.value)} />
          </div>
          <div className="form-group two-thirds">
            <label>Email</label>
            <input type="email" value={email} required onChange={e => setEmail(e.target.value)} />
          </div>
        </div>

        <div className="form-group">
          <label>Password</label>
          <input type="password" value={password} required onChange={e => setPassword(e.target.value)} />
        </div>

        <div className="form-group">
          <label>Confirm Password</label>
          <input type="password" value={confirmPassword} required onChange={e => setConfirmPassword(e.target.value)} />
        </div>

        <button type="submit" className="btn-submit">Sign Up</button>

        <div className="text-center mt-2">
          <small>Already have an account? <Link to="/login">Sign In</Link></small>
        </div>

        {message && <div className="alert success">{message}</div>}
        {errors && <div className="alert error">{errors}</div>}
      </form>
    </div>

  );
};

export default RegisterForm;
