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
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);

  useEffect(() => {
    if (token) {
      setIsAuthenticated(true);
    }
    fetch(`http://localhost:8000/home?page=${currentPage}&limit=6`)
        .then((res) => res.json())
        .then((data) => {
          setArticles(data.items);
          setTotalPages(data.totalPages);
        })
        .catch((err) => console.error("Erreur lors du fetch :", err));
    }, [currentPage]);

  const openCommentModal = (id: number) => {
    setActiveArticleId(id);
  };

  const closeCommentModal = () => {
    setActiveArticleId(null);
  };

  return (
    <div>
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
      <div className="d-flex justify-content-center my-4">
      <nav>
        <ul className="pagination">
          <li className={`page-item ${currentPage === 1 ? "disabled" : ""}`}>
            <button className="page-link" onClick={() => setCurrentPage(currentPage - 1)}>  <i className="bi bi-arrow-left-short"></i>  </button>
          </li>
          {[...Array(totalPages)].map((_, i) => (
            <li key={i + 1} className={`page-item ${currentPage === i + 1 ? "active" : ""}`}>
              <button className="page-link" onClick={() => setCurrentPage(i + 1)}>
                {i + 1}
              </button>
            </li>
          ))}
          <li className={`page-item ${currentPage === totalPages ? "disabled" : ""}`}>
            <button className="page-link" onClick={() => setCurrentPage(currentPage + 1)}> <i className="bi bi-arrow-right-short"></i> </button>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  );
};

export default Accueil;
