import { useState, useEffect } from 'react';

function SearchLive() {
  const [query, setQuery] = useState('');
  const [articles, setArticles] = useState([]);
  const [categories, setCategories] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);
  const token = localStorage.getItem('token');

  useEffect(() => {
    if (query.length === 0) {
      setArticles([]);
      setCategories([]);
      return;
    }

    setLoading(true);
    fetch(`http://localhost:8000/api/search/live?q=${encodeURIComponent(query)}`, {
      headers: {
        'Authorization': `Bearer ${token}`
      }
    })
      .then(res => {
        if (!res.ok) 
          throw new Error('');
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
    <div className="search-container p-3 border-bottom">
      <div className="mb-3">
        <input
          type="search"
          className="form-control"
          placeholder="Search ....."
          value={query}
          onChange={(e) => setQuery(e.target.value)}
        />
      </div>

      {loading && <div className="alert alert-info p-2">Chargement...</div>}
      {error && <div className="alert alert-danger p-2"> Erreur : {error}</div>}

      {query.length > 0 && (
        <div className="search-results mt-3">
          {articles.length > 0 ? (
            <>
              <h5 className="text-primary">Articles trouvés</h5>
              <ul className="list-group mb-3">
                {articles.map((a) => (
                  <li key={a.id} className="list-group-item">
                      <strong>{a.title}</strong><br />
                      <small className="text-muted">{a.content}</small>
                  </li>
                ))}
              </ul>
            </>
          ) : (
            <p className="text-muted">Aucun article trouvé</p>
          )}

          {categories.length > 0 ? (
            <>
              <h5 className="text-success">Catégories trouvées</h5>
              <ul className="list-group">
                {categories.map((c) => (
                  <li key={c.id} className="list-group-item">
                        {c.name}
                  </li>
                ))}
              </ul>
            </>
          ) : (
            <p className="text-muted">Aucune catégorie trouvée</p>
          )}
        </div>
      )}
    </div>

  );
}

export default SearchLive;
