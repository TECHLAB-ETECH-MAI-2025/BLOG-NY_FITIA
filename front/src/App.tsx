import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";
import Connexion from "./components/security/Connexion";
import Layout from "./components/fixe/Layout";
import Accueil from "./pages/Accueil";
import Article from "./pages/ArticleShow";
import Categorie from "./pages/CategorieShow";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/Connexion" element={<Connexion />} />
        <Route path="/" element={<Layout />}>
          <Route path="accueil" element={<Accueil />} />
          <Route path="article" element={<Article />} />
          <Route path="categorie" element={<Categorie />} />
          <Route index element={<Navigate to="/accueil" replace />} />
        </Route>
        <Route path="*" element={<Navigate to="/login" replace />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
