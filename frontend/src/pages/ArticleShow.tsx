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
  const [currentPage, setCurrentPage] = useState<number>(1);
  const [total, setTotal] = useState<number>(0);
  const limit = 6;
  const navigate = useNavigate();

  useEffect(() => {
      fetch(`http://localhost:8000/article?page=${currentPage}&limit=${limit}`)
      .then((res) => res.json())
      .then((data) => {
        setArticles(data.articles);
        setTotal(data.totalPages);
      })
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, [currentPage]);

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
    <div className="d-flex justify-content-center my-4">
      <nav>
        <ul className="pagination">
          <li className={`page-item ${currentPage === 1 ? "disabled" : ""}`}>
            <button className="page-link" onClick={() => setCurrentPage(currentPage - 1)}>  <i className="bi bi-arrow-left-short"></i>  </button>
          </li>
          {[...Array(total)].map((_, i) => (
            <li key={i + 1} className={`page-item ${currentPage === i + 1 ? "active" : ""}`}>
              <button className="page-link" onClick={() => setCurrentPage(i + 1)}>
                {i + 1}
              </button>
            </li>
          ))}
          <li className={`page-item ${currentPage === total ? "disabled" : ""}`}>
            <button className="page-link" onClick={() => setCurrentPage(currentPage + 1)}> <i className="bi bi-arrow-right-short"></i> </button>
          </li>
        </ul>
      </nav>
    </div>
</div>


  );
};

export default Article;
