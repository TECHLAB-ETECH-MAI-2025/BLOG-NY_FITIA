import React, { useEffect, useState } from "react";
import { useNavigate } from 'react-router-dom';
import DeleteArticle from "../components/article/Delete";
import "../styles/ArticleShow.css";

type Article = {
  id: number;
  title: string;
  description: string;
  category: { id: number; name: string } | null;
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
    <div className="container-article">
  <div className="article-header">
    <h1><i className="bi bi-bookmarks-fill me-2"></i>All Articles</h1>
    <button onClick={NewArticle} className="btn-new-article">
      <i className="bi bi-plus-circle"></i> New Article
    </button>
  </div>

  <table className="article-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      {articles.length > 0 ? (
        articles.map(article => (
          <tr key={article.id}>
            <td>{article.id}</td>
            <td>{article.title}</td>
            <td>{article.description}</td>
            <td>{article.category ? article.category.name : <span className="no-article">Aucune</span>}</td>
            <td>
              <button onClick={() => onEdit(article.id)} className="btn btn-sm btn-warning">
                <i className="bi bi-pencil"></i>
              </button>
            </td>
            <td>
              <DeleteArticle id={article.id} onDeleted={(id) => setArticles(prev => prev.filter(a => a.id !== id))} />
            </td>
          </tr>
        ))
      ) : (
        <tr>
          <td className="no-article">Aucun article pour le moment.</td>
        </tr>
      )}
    </tbody>
  </table>
</div>


  );
};

export default Article;
