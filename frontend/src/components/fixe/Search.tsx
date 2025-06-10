import React, { useState, useEffect } from 'react';

function SearchLive() {
  const [query, setQuery] = useState('');
  const [articles, setArticles] = useState([]);
  const [categories, setCategories] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  useEffect(() => {
    if (query.length === 0) {
      setArticles([]);
      setCategories([]);
      return;
    }

    setLoading(true);
    fetch(`http://localhost:8000/api/search/live?q=${encodeURIComponent(query)}`)
      .then(res => {
        if (!res.ok) 
          throw new Error('Erreur serveur');
        return res.json();
      })
      .then(data => {
        setArticles(data.articles);
        setCategories(data.categories);
        setError(null);
      })
      .catch(err => {
        setError(err.message);
        setArticles([]);
        setCategories([]);
      })
      .finally(() => setLoading(false));
  }, [query]);

  return (
    <div className=' border-bottom'>
      <div >
        <input type="search" placeholder="Search..." value={query} onChange={(e) => setQuery(e.target.value)}/>
        {loading && <p>Chargement...</p>}
        {error && <p style={{ color: 'red' }}>Erreur : {error}</p>}

        {query.length > 0 && (
          <>
            {articles.length > 0 ? (
              <>
                <h3>Articles</h3>
                <ul>
                  {articles.map((a) => (
                    <li key={a.id}>{a.title} - {a.summary}</li>
                  ))}
                </ul>
              </>
            ) : (
              <p>Aucun article trouvé</p>
            )}

            {categories.length > 0 ? (
              <>
                <h3>Catégories</h3>
                <ul>
                  {categories.map((c) => (
                    <li key={c.id}>{c.name}</li>
                  ))}
                </ul>
              </>
            ) : (
              <p>Aucune catégorie trouvée</p>
            )}
          </>
        )}
        
      </div>
      <br />
    </div>
  );
}

export default SearchLive;
