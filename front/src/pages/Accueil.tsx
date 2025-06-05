import React, { useEffect, useState } from "react";

type Article = {
  id: number;
  title: string;
  description: string;
  createdAt: string;
};

const Accueil: React.FC = () => {
  const [articles, setArticles] = useState<Article[]>([]);

  useEffect(() => {
    fetch("http://localhost:8000/home")
      .then((res) => res.json())
      .then((data) => setArticles(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

  return (
    <div className="p-4">
      <h1 className="text-2xl font-bold mb-4">Articles depuis l'API</h1>
      <ul className="space-y-2">
        {articles.map((article) => (
          <li
            key={article.id}
            className="p-4 bg-white shadow-md rounded-md border"
          >
            <h2 className="text-lg font-semibold">{article.title}</h2>
            <p className="text-sm text-gray-600">{article.description}</p>
            <p className="text-xs text-gray-400">Créé à : {article.createdAt}</p>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Accueil;
