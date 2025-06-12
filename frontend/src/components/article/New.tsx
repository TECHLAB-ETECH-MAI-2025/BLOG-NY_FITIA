import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";
import "../../styles/NewArticle.css";

const AddArticle: React.FC = () => {
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");
  const [categoryId, setCategoryId] = useState<number | null>(null);
  const [categories, setCategories] = useState<{ id: number; name: string }[]>([]);
  const [error, setError] = useState<string | null>(null);
  const navigate = useNavigate();

  useEffect(() => {
    fetch("http://localhost:8000/category")
      .then(res => res.json())
      .then(data => setCategories(data))
      .catch(err => setError("Erreur de chargement des catégories"));
  }, []);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setError(null);

    fetch("http://localhost:8000/article/new", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        title,
        description,
        category_id: categoryId,
      }),
    })
      .then(res => {
        if (!res.ok) {
          return res.text().then(text => {
            throw new Error(text || "Erreur lors de l'ajout");
          });
        }
        return res.json();
      })
      .then(() => {
        navigate("/article");
      })
      .catch(err => {
        setError(err.message);
      });
  };

  const handleCancel = () => {
    navigate("/categorie")
  }
  
  return (
    <div className="new-article-container">
      <h1 className="new-article-title">New Article</h1>
      <form onSubmit={handleSubmit} className="new-article-form">
        <div>
          <label className="new-article-label">Title:</label>
          <input
            type="text"
            value={title}
            onChange={e => setTitle(e.target.value)}
            className="new-article-input"
            required
          />
        </div>

        <div>
          <label className="new-article-label">Description :</label>
          <textarea
            value={description}
            onChange={e => setDescription(e.target.value)}
            className="new-article-textarea"
            required
          />
        </div>

        <div>
          <label className="new-article-label">Catégory :</label>
          <select
            value={categoryId || ""}
            onChange={e => setCategoryId(parseInt(e.target.value))}
            className="new-article-select"
            required
          >
            <option value="">Select Category</option>
            {categories.map(cat => (
              <option key={cat.id} value={cat.id}>
                {cat.name}
              </option>
            ))}
          </select>
        </div>

        {error && <p className="new-article-error">{error}</p>}

        <div className="new-article-actions">
          <button type="submit" className="new-article-button"> Add </button>
          <button type="button" className="new-article-cancel"  onClick={handleCancel} > Cancel </button>
        </div> 
    </form>
    </div>

  );
};

export default AddArticle;
