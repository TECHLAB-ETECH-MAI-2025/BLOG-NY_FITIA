import React from "react";
import { TrashIcon } from "@heroicons/react/24/solid"; 

type Props = {
  id: number;
  onDeleted: (id: number) => void;
};

const DeleteArticle: React.FC<Props> = ({ id, onDeleted }) => {

  const handleDelete = () => {
    if (!window.confirm("Êtes-vous sûr de vouloir supprimer cet article ?")) return;

    fetch(`http://localhost:8000/article/${id}`, {
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
    <button onClick={handleDelete}>
      <TrashIcon className="w-[2vh] h-[2vh] text-red-600 hover:text-red-800" />
    </button>
  );
};

export default DeleteArticle;
