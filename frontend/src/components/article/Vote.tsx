import React, { useState } from 'react';
import "../../styles/Vote.css";

interface VoteProps {
  articleId: number;
  initialLikes: number;
  initialDislikes: number;
  initialUserVote: number;
  isAuthenticated: boolean;
  token: string | null;  
}

const Vote: React.FC<VoteProps> = ({ articleId,  initialLikes, initialDislikes, initialUserVote, isAuthenticated, token}) => {
  const [likes, setLikes] = useState(initialLikes);
  const [dislikes, setDislikes] = useState(initialDislikes);
  const [userVote, setUserVote] = useState(initialUserVote);

  const handleVote = async (value: number) => {
    if (!isAuthenticated) {
      alert('Veuillez vous connecter pour voter.');
      return;
    }
    if (!token) {
      console.error("Aucun token trouvé.");
      return;
    }
    const voteType = value === 1 ? "like" : "dislike";
    const newVote = userVote === value ? 0 : value;
    try {
      const response = await fetch(`http://localhost:8000/api/article/${articleId}/vote/${voteType}`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "Authorization": `Bearer ${token}`
        },
        body: JSON.stringify({ newVote })
      });

      if (!response.ok) {
        const errorText = await response.text();
        throw new Error(`HTTP error! status: ${response.status}, details: ${errorText}`);
      }

      const data = await response.json();
      console.log("Received data:", data);
      
      setLikes(data.likes);
      setDislikes(data.dislikes);
      setUserVote(data.userVote);
    } catch (error) {
      console.error("Erreur lors du vote:", error);
    }
  };

  return (
    <div className="vote-container">
      <button className={`vote-btn like ${userVote === 1 ? 'active' : ''}`} onClick={() => handleVote(1)} >
        <i className="bi bi-hand-thumbs-up"></i>
        <span className="like-count">{likes}</span>
      </button>
      <button className={`vote-btn dislike ${userVote === -1 ? 'active' : ''}`} onClick={() => handleVote(-1)} >
        <i className="bi bi-hand-thumbs-down"></i> 
        <span className="dislike-count">{dislikes}</span>
      </button>
    </div>
  );
};

export default Vote;
