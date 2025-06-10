import React from 'react';
import { useNavigate } from 'react-router-dom';
import "../../styles/Logout.css";

const Logout: React.FC = () => {
  const navigate = useNavigate();

  const handleLogout = () => {
    localStorage.removeItem('authToken');
    navigate('/login');
  };
  return (
    <div className="mt-auto pt-3 ">
      <button onClick={handleLogout} className="logout" >
        <i className="bi bi-box-arrow-right me-2"></i> Logout </button>
    </div>
  );
};

export default Logout;
