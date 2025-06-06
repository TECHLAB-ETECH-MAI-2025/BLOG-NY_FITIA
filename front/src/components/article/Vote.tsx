import React, { useState } from 'react';

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

  const handleVote = (value: number )=> {
    if (!isAuthenticated) {
      alert('Veuillez vous connecter pour voter.');
      return;
    }
    const voteType = value === 1 ? "like" : "dislike";
    const newVote = userVote === value ? 0 : value;
    if (!token) {
      console.error("Aucun token trouvé.");
      return;
    }
    fetch(`http://localhost:8000/article/${articleId}/vote/${voteType}`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Authorization": `Bearer ${token}` 
      },
      credentials: "include",
      body: JSON.stringify({newVote})
    })
      .then((res) => res.json())
      .then((data) => {
        setLikes(data.likes);
        setDislikes(data.dislikes);
        setUserVote(data.userVote);
      })
      .catch((err) => console.error("Erreur lors du vote :", err));
  };

  return (
    <div className="vote-container">
      <button className={`vote-btn like ${userVote === 1 ? 'active' : ''}`} onClick={() => handleVote(1)} >
        👍 <span className="like-count">{likes}</span>
      </button>
      <button className={`vote-btn dislike ${userVote === -1 ? "bg-red-500 text-white" : "bg-gray-100"}`} onClick={() => handleVote(-1)} >
        👎 <span className="dislike-count">{dislikes}</span>
      </button>
    </div>
  );
};

export default Vote;
