import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import "../../styles/SearchArticle.css";

interface Comment {
  id: number;
  content: string;
  createdAt: string;
}

interface Category {
  id: number;
  name: string;
}

interface Article {
  id: number;
  title: string;
  description: string;
  createdAt: string;
  category: Category | null;
  comments: Comment[];
}

function ArticleShowOne() {
  const { id } = useParams<{ id: string }>();
  const [article, setArticle] = useState<Article | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const token = localStorage.getItem('token');

  useEffect(() => {
    if (!id) return;

    setLoading(true);
    fetch(`http://localhost:8000/api/article/${id}`, {
      headers: {
        'Authorization': `Bearer ${token}`
      }
    })
      .then(res => {
        if (!res.ok) throw new Error("Impossible de charger l'article");
        return res.json();
      })
      .then(data => {
        setArticle(data);
        setError(null);
      })
      .catch(err => {
        setError(err.message);
        setArticle(null);
      })
      .finally(() => setLoading(false));
  }, [id]);

  if (loading) return <div className="alert alert-info p-2">Chargement...</div>;
  if (error) return <div className="alert alert-danger p-2">Erreur : {error}</div>;
  if (!article) return <div>Aucun article trouvé.</div>;

  return (
    <div className="article-container">
      <h2 className="article-title">{article.title}</h2>
      <span className="article-meta">Published on {article.createdAt}</span>
      
      <p className="article-content">{article.description}</p>

      {article.category && (
        <div className="article-category">
          <strong>Catégory :</strong> {article.category.name}
        </div>
      )}

      <div className="comments-section">
        <h5 className="comments-title">Comments</h5>
        {article.comments.length > 0 ? (
          <ul className="comments-list">
            {article.comments.map((comment) => (
              <li key={comment.id} className="comment-item">
                <p className="comment-content">{comment.content}</p>
              </li>
            ))}
          </ul>
        ) : (
          <p className="no-comments">No comments.</p>
        )}
      </div>
    </div>
  );
}

export default ArticleShowOne;
