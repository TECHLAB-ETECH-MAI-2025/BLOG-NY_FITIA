import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";
import Login from "./components/security/Login";
import Layout from "./components/fixe/Layout";
import Accueil from "./pages/Accueil";
import Category from "./pages/CategorieShow";
import CategoryShowOne from "./components/category/CategoryShowOne";
import Article from "./pages/ArticleShow";
import ArticleShowOne from "./components/article/ArticleShowOne";
import EditCategory from "./components/category/Edit";
import EditArticle from "./components/article/Edit";
import AddArticle from "./components/article/New";
import AddCategory from "./components/category/New";
import UserList from "./components/chat/UserList";
import ChatWithUser from "./components/chat/ChatWithUser";
import Register from "./components/security/Register";
import ForgotPassword from "./components/security/ForgotPassword";
import ProfileView from "./components/security/InfoProfile";
import EditProfile from "./components/security/EditProfile";

function App() {
  return (
      <BrowserRouter>
      <Routes>
          <Route path="/login" element={<Login />} />
          <Route path="/register" element={<Register />} />
          <Route path="/forgot-password" element={<ForgotPassword />} />
          <Route path="/" element={<Layout />}>
              <Route path="accueil" element={<Accueil />} />
              <Route path="article" element={<Article />} />
              <Route path="article/:id" element={<ArticleShowOne />} />
              <Route path="categorie" element={<Category />} />
              <Route path="categorie/:id" element={<CategoryShowOne />} />
              <Route path="article/:id/edit" element={<EditArticle />} />
              <Route path="categorie/:id/edit" element={<EditCategory />} />
              <Route path="categorie/New" element={<AddCategory />} />
              <Route path="article/New" element={<AddArticle />} />
              <Route path="userList" element={<UserList />} />
              <Route path="infoProfile" element={<ProfileView />} />
              <Route path="editProfile" element={<EditProfile />} />
              <Route path="chat/:id" element={<ChatWithUser />} />
              <Route index element={<Navigate to="/accueil" replace />} />
          </Route>
          <Route path="*" element={<Navigate to="/login" replace />} />
        </Routes>
      </BrowserRouter>
  );
}
export default App;
