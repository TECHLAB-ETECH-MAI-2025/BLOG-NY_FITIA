import { Outlet } from "react-router-dom";
import Deconnexion from "../security/Deconnexion" ;
import Menu from "../fixe/Menu" ;
import Profil from "../fixe/Profil" ;

const Layout = () => {
    return (
        <div className="flex h-screen">
            <aside className="w-60 bg-gray-200 p-4 sticky top-0 h-screen">
                <Profil />
                <Menu/>
                <Deconnexion/>
            </aside>
            <main className="flex-1 p-6 overflow-auto">
                <Outlet />
            </main>
            <aside className="w-60 bg-red-800 p-4 sticky top-0 h-screen">
                <p>Info</p>
                <ul>
                    <li>Message</li>
                </ul>
            </aside>
        </div>
    );
};
export default Layout;
