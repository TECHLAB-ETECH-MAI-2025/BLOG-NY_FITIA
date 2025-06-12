import { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import "../../styles/SearchCategory.css";

interface Category {
  id: number;
  Name: string;
}

function CategoryShowOne() {
  const { id } = useParams<{ id: string }>();
  const [category, setCategory] = useState<Category | null>(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const token = localStorage.getItem('token');

  useEffect(() => {
    if (!id) return;

    setLoading(true);
    fetch(`http://localhost:8000/api/category/${id}`, {
      headers: {
        'Authorization': `Bearer ${token}`
      }
    })
      .then(res => {
        if (!res.ok) throw new Error("Catégorie introuvable");
        return res.json();
      })
      .then(data => {
        setCategory(data);
        setError(null);
      })
      .catch(err => {
        setError(err.message);
        setCategory(null);
      })
      .finally(() => setLoading(false));
  }, [id]);

  if (loading) return <div className="alert alert-info p-2">Chargement...</div>;
  if (error) return <div className="alert alert-danger p-2">Erreur : {error}</div>;
  if (!category) return <div>Aucune catégorie trouvée.</div>;

  return (
    <div className="category-container">
      <h3 className="category-title">Category Details</h3>
      <ul className="category-list">
        <li className="category-item">
          <span className="category-label">ID :</span>
          <span className="category-value">{category.id}</span>
        </li>
        <li className="category-item">
          <span className="category-label">Name :</span>
          <span className="category-value">{category.Name}</span>
        </li>
      </ul>
    </div>
  );
}

export default CategoryShowOne;
