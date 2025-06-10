import React from "react";

type Props = {
  id: number;
  onDeleted: (id: number) => void;
};

const DeleteCategory: React.FC<Props> = ({ id, onDeleted }) => {
  const handleDelete = () => {
    if (!window.confirm("Êtes-vous sûr de vouloir supprimer cette catégorie ?")) return;

    fetch(`http://localhost:8000/category/${id}`, {
      method: "DELETE",
    })
      .then(res => {
        if (!res.ok) {
          return res.text().then(text => {
            throw new Error(text || "Erreur lors de la suppression");
          });
        }
        onDeleted(id);
      })
      .catch(err => alert(err.message));
  };

  return (
    <button onClick={handleDelete} className="btn text-danger"><i className="bi bi-trash"></i></button>
  );
};

export default DeleteCategory;
