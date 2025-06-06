import React, { useEffect, useState } from "react";
import {PencilIcon } from '@heroicons/react/24/outline';
import { useNavigate } from 'react-router-dom';
import DeleteArticle from "../components/category/Delete";

type Category = {
  id: number;
  name: string;
};

const Category: React.FC = () => {
  const [category, setCategory] = useState<Category[]>([]);
  const navigate = useNavigate();

  useEffect(() => {
    fetch("http://localhost:8000/category")
      .then((res) => res.json())
      .then((data) => setCategory(data))
      .catch((err) => console.error("Erreur lors du fetch :", err));
  }, []);

const onEdit = (id: number) => {
  navigate(`/categorie/${id}/edit`);
}  

const NewCategory = () => {
  navigate(`/categorie/New`);
} 

  return (
    <div className="p-4">
        <h1 className="text-2xl font-bold mb-4">Categorie depuis l'API</h1>
        <button className="btn btn-active" onClick={() => NewCategory()}>New Category</button>
        <div className="overflow-x-auto">
            <table className="min-w-full bg-white shadow-md rounded-md border">
                <thead className="bg-gray-200">
                    <tr>
                    <th className="py-2 px-4 text-left text-sm font-semibold">ID</th>
                    <th className="py-2 px-4 text-left text-sm font-semibold">Titre</th>
                    <th className="py-2 px-4 text-left text-sm font-semibold">Modifier</th>
                    <th className="py-2 px-4 text-left text-sm font-semibold">Supprimer</th>                    
                    </tr>
                </thead>
                <tbody>
                    {category.map(category => (
                    <tr key={category.id} className="border-t hover:bg-gray-100">
                        <td className="py-2 px-4 text-sm">{category.id}</td>
                        <td className="py-2 px-4 text-sm font-medium">{category.name}</td>
                        <td className="py-2 px-4 text-sm font-medium">
                          <button onClick={() => onEdit(category.id)}>
                            <PencilIcon className="w-[2vh] h-[2vh] text-yellow-500 hover:text-yellow-700" />
                          </button>
                        </td>
                        <td className="py-2 px-4 text-sm font-medium">
                          <DeleteArticle  id={category.id} onDeleted={(deletedId) => setCategory(prev => prev.filter(category => category.id !== deletedId)) }/>
                        </td>
                    </tr>
                    ))}
                </tbody>
            </table>
        </div>
    </div>
  );
};

export default Category;
