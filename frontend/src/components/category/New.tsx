import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
import "../../styles/NewCategory.css";

const AddCategory: React.FC = () => {
  const [name, setName] = useState("");
  const [error, setError] = useState<string | null>(null);
  const navigate = useNavigate();

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setError(null);

    fetch("http://localhost:8000/category/new", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ name }),
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
        navigate("/categorie")
      })
      .catch(err => {
        setError(err.message);
      });
  };

  const handleCancel = () => {
    navigate("/categorie")
  }

  return (
    <div className="new-category-container">
  <h1>New Category</h1>
  <form onSubmit={handleSubmit} className="new-category-form">
    <div>
      <label className="new-category-label">Category Name :</label>
      <input type="text" value={name} onChange={(e) => setName(e.target.value)} className="new-category-input" required />
    </div>
    {error && <p className="new-category-error">{error}</p>}
    <div className="new-category-actions">
      <button type="submit" className="new-category-button"> Add </button>
      <button type="button" className="new-category-cancel"  onClick={handleCancel} > Cancel </button>
    </div>
  </form>
</div>
  );
};

export default AddCategory;
