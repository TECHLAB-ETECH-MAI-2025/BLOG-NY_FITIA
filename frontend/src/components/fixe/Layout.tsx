import { Outlet } from "react-router-dom";
import Menu from "../fixe/Menu" ;
import Profil from "../fixe/Profil" ;
import "../../styles/Layout.css"
import Logout from "../security/Logout";
import MenuChat from "./MenuChat";
import Search from "./Search";

const Layout = () => {
    return (
        <div className="container-fluid">
            <div className="row">
                <aside className="col-md-3 col-lg-2 d-md-block sidebar">
                    <Profil />
                    <Menu/>
                    <Search/>
                    <Logout/>
                </aside>
                <main className="col-md-8 col-lg-9 main-content">
                    <Outlet />
                </main>
                <aside className="col-md-1 col-lg-1 d-md-block sidebar2">
                    <MenuChat/>
                </aside>
            </div>
        </div>
    );
};
export default Layout;
