import React, { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";
import "../../styles/EditArticle.css";

type Category = {
  id: number;
  name: string;
};

type Article = {
  id: number;
  title: string;
  description: string;
  category: Category | null;
  createdAt: string;
};

const EditArticle: React.FC = () => {
  const { id } = useParams<{ id: string }>();
  const navigate = useNavigate();

  const [article, setArticle] = useState<Article | null>(null);
  const [categories, setCategories] = useState<Category[]>([]);
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");
  const [categoryId, setCategoryId] = useState<number | "">("");
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    if (!id) {
      setError("ID introuvable");
      setLoading(false);
      return;
    }
    fetch(`http://localhost:8000/article/${id}`)
      .then(res => {
        if (!res.ok) 
          throw new Error("Erreur lors du chargement");
        return res.json();
      })
      .then(data => {
        setArticle(data);
        setTitle(data.title);
        setDescription(data.description);
        setCategoryId(data.category ? data.category.id : "");
        setLoading(false);
      })
      .catch(err => {
        setError(err.message);
        setLoading(false);
      });
  }, [id]);

  useEffect(() => {
    fetch("http://localhost:8000/category")
      .then(res => {
        if (!res.ok) throw new Error("Erreur lors du chargement des catégories");
        return res.json();
      })
      .then(data => {
        setCategories(data);
      })
      .catch(err => {
        console.error(err);
      });
  }, []);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    if (!article) return;
    try {
      const res = await fetch(`http://localhost:8000/article/${article.id}`, {
        method: 'PUT',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ 
          title, 
          description,
          categoryId: categoryId === "" ? null : categoryId
        }),
      });
      if (!res.ok)
        throw new Error('Erreur lors de la mise à jour');
      navigate('/article');
    } catch (err: any) {
      alert(err.message);
    }
  };

  const handleCancel = () => {
    navigate("/article");
  }

  if (loading) return <p>Chargement...</p>;
  if (error) return <p>Erreur : {error}</p>;

  return (
    <div className="edit-article-container">
  <h1 className="edit-article-title">Edit Article</h1>
  <form onSubmit={handleSubmit} className="edit-article-form">
    <div>
      <label className="edit-article-label">Title :</label>
      <input type="text" value={title} onChange={e => setTitle(e.target.value)}  className="edit-article-input" required />
    </div>
    <div>
      <label className="edit-article-label">Description :</label>
      <textarea value={description} onChange={e => setDescription(e.target.value)} className="edit-article-textarea" rows={4}  required />
    </div>
    <div>
      <label className="edit-article-label">Catégory :</label>
      <select value={categoryId} onChange={e => setCategoryId(e.target.value === "" ? "" : parseInt(e.target.value))} className="edit-article-select" required >
        <option value="">-- Select Category --</option>
        {categories.map(cat => (  <option key={cat.id} value={cat.id}>{cat.name}</option> ))}
      </select>
    </div>
    <div className="edit-article-actions">
          <button type="submit" className="edit-article-button"> Save </button>
          <button type="button" className="edit-article-cancel"  onClick={handleCancel} > Cancel </button>
        </div>
  </form>
</div>

  );
};

export default EditArticle;
