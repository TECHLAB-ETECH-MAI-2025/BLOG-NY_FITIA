import React, { useEffect, useState } from "react";
import Vote from "../components/article/Vote";

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

  useEffect(() => {
    if (token) {
      setIsAuthenticated(true);
    }
    fetch("http://localhost:8000/home")
      .then((res) => res.json())
      .then((data) => setArticles(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

  return (
    <div className="container py-4">
      <h1 className="text-center mb-4">Accueil</h1>
      <div className="row">
        {articles.map((article) => (
          <div key={article.id} className="col-12 col-sm-6 col-lg-4 mb-4">
            <div className="card border-success h-100" style={{ maxWidth: "100%" }}>
              <div className="card-header bg-transparent border-primary">
                <h5 className="card-title">{article.title}</h5>
                <small className="text-muted">Créé à : {article.createdAt}</small>
              </div>
              <div className="card-body text-white">
                <p className="card-text">{article.description}</p>
                {article.category ? article.category.name : <span className="fst-italic text-muted">Aucune catégorie</span>}
              </div>
              <div className="card-footer bg-transparent border-success">
                <div className="mt-2">
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
    </div>
  );
};

export default Accueil;
