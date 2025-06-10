import React, { useEffect, useState } from "react";
import Vote from "../components/article/Vote";
import ArticleInteractModal from "../components/article/Comment";
import "../styles/Accueil.css";

type Article = {
  id: number;
  title: string;
  description: string;
  createdAt: string;
  category: { id: number; name: string } | null;
  likes: number;
  dislikes: number;
  userVote: number;
};

const Accueil: React.FC = () => {
  const [articles, setArticles] = useState<Article[]>([]);
  const [isAuthenticated, setIsAuthenticated] = useState<boolean>(false);
  const token = localStorage.getItem("token");
  const [activeArticleId, setActiveArticleId] = useState<number | null>(null);

  useEffect(() => {
    if (token) {
      setIsAuthenticated(true);
    }
    fetch("http://localhost:8000/home")
      .then((res) => res.json())
      .then((data) => setArticles(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

  const openCommentModal = (id: number) => {
    setActiveArticleId(id);
  };

  const closeCommentModal = () => {
    setActiveArticleId(null);
  };

  return (
    <div className="container">
      <div className="tete">
            <h1>Bienvenue sur le Blog</h1>
            <p> Bonjour et bienvenue sur ce blog ! Installez-vous confortablement et explorez les articles à votre rythme.</p>
      </div>
      <br/>
      <div className="row acc-shadw row-cols-1 row-cols-md-3 g-4" >
        {articles.map((article) => (
          <div key={article.id} className="col">
            <div className="card h-100" style={{ maxWidth: "100%" }}>
              <div className="card-header">
                <h5 className="card-title">{article.title}</h5>
                <small className="text-muted">Publie le : {article.createdAt}</small>
              </div>
              <div className="card-body ">
                <p className="card-text">{article.description}</p>
                <p className="text-muted">
                  <label htmlFor="">Category : .</label>
                  {article.category ? <span className="badge bg-primary">{article.category.name} </span>: <span className="badge bg-warning">
                    <i className="bi bi-exclamation-triangle me-1"></i>
                  </span>}
                </p>
              </div>
              <div className="card-footer">
                <div className="vote-container">
                  <button  className="btn btn-outline-secondary" onClick={() => openCommentModal(article.id)} title="Commenter" >
                    <i className="bi bi-chat-dots"></i>
                  </button>
                  <Vote
                    articleId={article.id}
                    initialLikes={article.likes}
                    initialDislikes={article.dislikes}
                    initialUserVote={article.userVote}
                    isAuthenticated={isAuthenticated}
                    token={token}
                  />
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
      {activeArticleId && (
        <ArticleInteractModal  articleId={activeArticleId} onClose={closeCommentModal} token={token}/>
      )}
    </div>
  );
};

export default Accueil;
