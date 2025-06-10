import React, { useEffect, useState } from "react";
import "../../styles/CommentArticle.css";

type Props = {
  articleId: number;
  onClose: () => void;
  token: string | null;
};

const ArticleInteractModal: React.FC<Props> = ({ articleId, onClose, token }) => {
  const [article, setArticle] = useState<any>(null);
  const [comment, setComment] = useState<string>("");
  const [comments, setComments] = useState<any[]>([]);

  useEffect(() => {
    console.log('Oui');
    fetch(`http://localhost:8000/api/article/${articleId}`, {
      method: "GET",
      headers: { Authorization: `Bearer ${token}` }
    })
    .then((res) => res.json())
    .then((data) => {
      setArticle(data);
      setComments(data.comments);
    });
  }, [articleId]);
  
  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    console.log('Non');
    
    fetch(`http://localhost:8000/api/article/${articleId}/comment`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Authorization: `Bearer ${token}`
      },
      body: JSON.stringify({ content: comment })
    })
      .then((res) => res.json())
      .then((newComment) => {
        setComments([...comments, newComment]);
        setComment("");
      });
  };

  if (!article) return null;

  return (
    <div className="modal-container">
      <div className="modal-content">
        <div className="modal-header">
          <h2 className="modal-title"><span> Title : </span> {article.title}</h2>
        </div>

        <div className="modal-body">
          <p><span> Description : </span>{article.description}</p>
          <div className="comment-section">
            <h4>All Comments</h4>
            <div className="comment-list">
              {comments.map((c, i) => (
                <div key={i} className="comment-item">
                  {c.content}
                </div>
              ))}
            </div>
          </div>
          <form onSubmit={handleSubmit} className="comment-form">
            <textarea
              className="comment-textarea"
              value={comment}
              onChange={(e) => setComment(e.target.value)}
              placeholder="Add comment..."
            />
            <div className="commentAct"> 
              <button type="submit" className="submit-btn"> Send </button>
              <button onClick={onClose} className="btn btn-danger bottom-close-btn"> Cancel </button>
            </div>
          </form>
        </div>

        
      </div>
    </div>
  );
};

export default ArticleInteractModal;
