import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";

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

  return (
    <div className="p-4 max-w-md mx-auto">
      <h1 className="text-2xl font-bold mb-4">New Article</h1>
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
            required
          />
        </div>
        <div>
          <label className="block mb-1 font-semibold">Catégorie :</label>
          <select value={categoryId || ""} onChange={e => setCategoryId(parseInt(e.target.value))}  required className="w-full border px-3 py-2 rounded" >
            <option value="">-- Choisir une catégorie --</option>
            {categories.map(cat => (
              <option key={cat.id} value={cat.id}>
                {cat.name}
              </option>
            ))}
          </select>
        </div>
        {error && <p className="text-red-600">{error}</p>}
        <button type="submit" className="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" > Add </button>
      </form>
    </div>
  );
};

export default AddArticle;
