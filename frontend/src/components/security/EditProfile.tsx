import React, { useEffect, useState } from 'react';
import "../../styles/EditProfile.css";

type UserProfile = {
  firstName: string;
  lastName: string;
  phone: string;
  email: string;
  avatar: string | null;
};

const EditProfile: React.FC = () => {
    const [user, setUser] = useState<UserProfile | null>(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState<string | null>(null);
    const [saving, setSaving] = useState(false);
    const [success, setSuccess] = useState(false);

    const [firstName, setFirstName] = useState('');
    const [lastName, setLastName] = useState('');
    const [phone, setPhone] = useState('');
    const [email, setEmail] = useState('');
    const token  = localStorage.getItem('token');

  useEffect(() => {
    fetch('http://localhost:8000/api/profil', { 
        headers: {
          "Content-Type": "application/json",
          "Authorization": `Bearer ${token}`
        },
        credentials: 'include' 
    })
      .then(res => {
        if (!res.ok) throw new Error('Erreur de chargement du profil');
        return res.json();
      })
      .then((data: UserProfile) => {
        setUser(data);
        setFirstName(data.firstName);
        setLastName(data.lastName);
        setPhone(data.phone);
        setEmail(data.email);
      })
      .catch(err => setError(err.message))
      .finally(() => setLoading(false));
  }, []);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setSaving(true);
    setError(null);
    setSuccess(false);

    try {
      const res = await fetch('http://localhost:8000/api/profil', {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        credentials: 'include',
        body: JSON.stringify({ firstName, lastName, phone, email }),
      });
      if (!res.ok) {
        const data = await res.json();
        throw new Error(data.error || 'Erreur lors de la sauvegarde');
      }
      setSuccess(true);
      const updatedUser = await res.json();
      setUser(updatedUser);
    } catch (err: any) {
      setError(err.message);
    } finally {
      setSaving(false);
    }
  };

  if (loading) return <p className="loading">Chargement...</p>;
  if (error) return <p className="error">{error}</p>;
  if (!user) return <p className="error">Utilisateur non trouvé</p>;

  return (
    <div className="edit-profile-card">
      <h2>Edit Profil</h2>
      <form onSubmit={handleSubmit} className="edit-profile-form">
        <label> First Name 
          <input type="text" value={firstName} onChange={e => setFirstName(e.target.value)} required />
        </label>
        <label> Last Name
          <input  type="text" value={lastName} onChange={e => setLastName(e.target.value)} required />
        </label>
        <label> Phone
          <input type="tel" value={phone} onChange={e => setPhone(e.target.value)} />
        </label>
        <label>  Email  
            <input type="email" value={email} onChange={e => setEmail(e.target.value)} required  />
        </label>
        <button type="submit" disabled={saving}>
          {saving ? 'Enregistrement...' : 'Save'}
        </button>
      </form>
      {success && <p className="success">Profil mis à jour avec succès !</p>}
      {error && <p className="error">{error}</p>}
    </div>
  );
};

export default EditProfile;
