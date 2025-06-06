import React, { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";

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

  if (loading) return <p>Chargement...</p>;
  if (error) return <p>Erreur : {error}</p>;

  return (
    <div className="p-4 max-w-md mx-auto">
      <h1 className="text-2xl font-bold mb-4">Modifier l'article</h1>
      <form onSubmit={handleSubmit} className="space-y-4">
        <div>
          <label className="block mb-1 font-semibold">Titre :</label>
          <input
            type="text"
            value={title}
            onChange={e => setTitle(e.target.value)}
            className="w-full border rounded px-3 py-2"
            required
          />
        </div>
        <div>
          <label className="block mb-1 font-semibold">Description :</label>
          <textarea
            value={description}
            onChange={e => setDescription(e.target.value)}
            className="w-full border rounded px-3 py-2"
            rows={4}
            required
          />
        </div>
        <div>
          <label className="block mb-1 font-semibold">Catégorie :</label>
          <select
            value={categoryId}
            onChange={e => setCategoryId(e.target.value === "" ? "" : parseInt(e.target.value))}
            className="w-full border px-3 py-2 rounded"
            required
          >
            <option value="">-- Choisir une catégorie --</option>
            {categories.map(cat => (
              <option key={cat.id} value={cat.id}>
                {cat.name}
              </option>
            ))}
          </select>
          </div>
        <button
          type="submit"
          className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
          Enregistrer
        </button>
      </form>
    </div>
  );
};

export default EditArticle;
