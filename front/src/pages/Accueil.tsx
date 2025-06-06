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
    <div className="p-4">
    <h1 className="text-2xl font-bold mb-4">Accueil</h1>
    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      {articles.map((article) => (
        <div key={article.id}  className="p-4 bg-white shadow-md rounded-md border">
          <h2 className="text-lg font-semibold">{article.title}</h2>
          <p className="text-sm text-gray-600">{article.description}</p>
          <p className="text-sm text-gray-600">
            Catégorie :{" "}
            {article.category ? (
              article.category.name
            ) : (
              <span className="italic text-gray-400">Aucune</span>
            )}
          </p>
          <p className="text-xs text-gray-400">Créé à : {article.createdAt}</p>
          <div className="card-footer mt-2">
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
        ))}
    </div>
  </div>

  );
};

export default Accueil;
