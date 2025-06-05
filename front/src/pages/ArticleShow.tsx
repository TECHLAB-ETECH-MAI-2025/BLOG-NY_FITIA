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
    fetch("http://localhost:8000/article")
      .then((res) => res.json())
      .then((data) => setArticles(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

  return (
    <div className="p-4">
        <h1 className="text-2xl font-bold mb-4">Articles depuis l'API</h1>
        <div className="overflow-x-auto">
            <table className="min-w-full bg-white shadow-md rounded-md border">
                <thead className="bg-gray-200">
                    <tr>
                    <th className="py-2 px-4 text-left text-sm font-semibold">ID</th>
                    <th className="py-2 px-4 text-left text-sm font-semibold">Titre</th>
                    <th className="py-2 px-4 text-left text-sm font-semibold">Description</th>
                    <th className="py-2 px-4 text-left text-sm font-semibold">Créé à</th>
                    </tr>
                </thead>
                <tbody>
                    {articles.map(article => (
                    <tr key={article.id} className="border-t hover:bg-gray-100">
                        <td className="py-2 px-4 text-sm">{article.id}</td>
                        <td className="py-2 px-4 text-sm font-medium">{article.title}</td>
                        <td className="py-2 px-4 text-sm">{article.description}</td>
                        <td className="py-2 px-4 text-xs text-gray-500">{article.createdAt}</td>
                    </tr>
                    ))}
                </tbody>
            </table>
        </div>
    </div>

  );
};

export default Accueil;
