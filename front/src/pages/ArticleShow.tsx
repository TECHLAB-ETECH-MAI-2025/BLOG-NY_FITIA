import React, { useEffect, useState } from "react";
import { PencilIcon } from '@heroicons/react/24/outline';
import { useNavigate } from 'react-router-dom';
import DeleteArticle from "../components/article/Delete";

type Article = {
  id: number;
  title: string;
  description: string;
  createdAt: string;
};

const Article: React.FC = () => {
  const [articles, setArticles] = useState<Article[]>([]);
  const navigate = useNavigate();

  useEffect(() => {
    fetch("http://localhost:8000/article")
      .then((res) => res.json())
      .then((data) => setArticles(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

  const onEdit = (id: number) => {
    navigate(`/article/${id}/edit`);
  };  
  
  const NewArticle = () => {
    navigate(`/article/New`);
  };

  return (
    <div className="p-4">
      <h1 className="text-2xl font-bold mb-4">Articles depuis l'API</h1>
        <button className="btn btn-active" onClick={() => NewArticle()}>New Article</button>
      <div className="overflow-x-auto">
        <table className="min-w-full bg-white shadow-md rounded-md border">
          <thead className="bg-gray-200">
            <tr>
              <th className="py-2 px-4 text-left text-sm font-semibold">ID</th>
              <th className="py-2 px-4 text-left text-sm font-semibold">Titre</th>
              <th className="py-2 px-4 text-left text-sm font-semibold">Description</th>
              <th className="py-2 px-4 text-left text-sm font-semibold">Créé à</th>
              <th className="py-2 px-4 text-left text-sm font-semibold">Modifier</th>
              <th className="py-2 px-4 text-left text-sm font-semibold">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            {articles.map(article => (
              <tr key={article.id} className="border-t hover:bg-gray-100">
                <td className="py-2 px-4 text-sm">{article.id}</td>
                <td className="py-2 px-4 text-sm font-medium">{article.title}</td>
                <td className="py-2 px-4 text-sm">{article.description}</td>
                <td className="py-2 px-4 text-xs text-gray-500">{article.createdAt}</td>
                <td className="py-2 px-4 text-sm font-medium">
                  <button onClick={() => onEdit(article.id)}>
                    <PencilIcon className="w-[2vh] h-[2vh] text-yellow-500 hover:text-yellow-700" />
                  </button>
                </td>
                <td className="py-2 px-4 text-sm font-medium">
                  <DeleteArticle  id={article.id} onDeleted={(deletedId) => setArticles(prev => prev.filter(article => article.id !== deletedId)) }/>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default Article;
