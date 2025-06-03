import { useState, useEffect } from 'react'
import './App.css'

type Article = {
  id: number;
  title: string;
  description: string;
  createdAt: string;
};

interface ArticleProps {
  title: string;
  description: string;
  createdAt: string;
}

function Compteur() {
  const [count, setCount] = useState(0);
  return (
    <div>
        <p>Compteur : {count}</p>
        <button onClick={() => setCount(count + 1)} >+</button>
        <button onClick={() => setCount(count - 1)} >-</button>
    </div>
  );
}

function Article({title, description, createdAt}: ArticleProps) {
  return (
    <article className="article-card">
      <h3 className="article-title">{title}</h3>
      <p className="article-description">{description}</p>
      <time className="article-date" dateTime={createdAt}>
        {new Date(createdAt).toLocaleDateString('fr-FR')}
      </time>
    </article>
  );
}

function App() {
  const [articles, setArticles] = useState<Article[]>([]);

  useEffect(() => {
    fetch('http://localhost:8000/home')
      .then((response) => response.json())
      .then((data: Article[]) => {
        setArticles(data);
      })
      .catch((error) => {
        console.error('Erreur lors de la récupération des articles :', error);
      });
  }, []);

    return (
    <div>
      <h1>Liste des article</h1>
      <ul>
        {articles.map((article) => (
          <li key={article.id}>
              <Article title={article.title} description={article.description} createdAt={article.createdAt}/>
          </li>
        ))}
      </ul>
      <Compteur/>
    </div>
  );
}



export default App
