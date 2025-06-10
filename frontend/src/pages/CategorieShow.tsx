import React, { useEffect, useState } from "react";
import { useNavigate } from 'react-router-dom';
import "../styles/CategoryShow.css";
import DeleteCategory from "../components/category/Delete";

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
     <div className="category-container">
      <div className="category-header">
        <h1> <i className="bi bi-bookmarks-fill"></i>  All Categories</h1>
        <button className="btn btn-success category-btn" onClick={NewCategory}>
          <i className="bi bi-plus-circle"></i> New Category
        </button>
      </div>
      <div className="card category-card">
        <div className="card-body">
          <div className="table-responsive">
            <table className="table table-hover category-table">
              <thead className="table-thead">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                {category.length > 0 ? (
                  category.map((cat) => (
                    <tr key={cat.id}>
                      <td>{cat.id}</td>
                      <td>{cat.name}</td>
                      <td>
                        <div className="btn-group" role="group">
                          <button className="btn btn-warning btn-outline-secondary" onClick={() => onEdit(cat.id)} title="Edit" >
                            <i className="bi bi-pencil-fill"></i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <div className="btn-group" role="group">
                          <DeleteCategory id={cat.id} onDeleted={(deletedId) => setCategory((prev) => prev.filter((c) => c.id !== deletedId) ) } />
                        </div>
                      </td>
                    </tr>
                  ))
                ) : (
                  <tr>
                    <td className="category-empty">
                      <i className="bi bi-exclamation-circle me-2"></i> No categories found
                    </td>
                  </tr>
                )}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Category;
