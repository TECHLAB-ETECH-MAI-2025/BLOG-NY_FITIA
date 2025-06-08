import React, { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";
import "../../styles/EditCategory.css";

type Category = {
  id: number;
  name: string;
};

const EditCategory: React.FC = () => {
  const { id } = useParams();
  const navigate = useNavigate();

  const [category, setCategory] = useState<Category | null>(null);
  const [name, setName] = useState("");
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    if (!id) return;
    fetch(`http://localhost:8000/category/${id}`)
      .then(res => {
        if (!res.ok) throw new Error("Erreur lors du chargement");
        return res.json();
      })
      .then(data => {
        setCategory(data);
        setName(data.Name);
        setLoading(false);
      })
      .catch(err => {
        setError(err.message);
        setLoading(false);
      });
  }, [id]);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!category?.id) return;

    fetch(`http://localhost:8000/category/${category.id}`, {
      method: "PUT",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ name }),
    })
      .then(res => {
        if (!res.ok) {
          return res.text();
        }
        return res.json();
      })
      .then(() => {
        navigate("/categorie");
      })
      .catch(err => {
        alert(err.message);
      });
  };

  if (loading) return <p>Chargement...</p>;
  if (error) return <p>Erreur : {error}</p>;

  const handleCancel = () => {
    navigate("/categorie");
  }
  return (
    <div className="edit-category-container">
      <h1 className="edit-category-title">Edit Category</h1>
      <form onSubmit={handleSubmit} className="edit-category-form">
        <div>
          <label className="edit-category-label">Name :</label>
          <input
            type="text"
            value={name}
            onChange={e => setName(e.target.value)}
            className="edit-category-input"
            required
          />
        </div>
       <div className="edit-category-actions">
          <button type="submit" className="edit-category-button"> Save </button>
          <button type="button" className="edit-category-cancel"  onClick={handleCancel} > Cancel </button>
        </div>
      </form>
    </div>

  );
};

export default EditCategory;
