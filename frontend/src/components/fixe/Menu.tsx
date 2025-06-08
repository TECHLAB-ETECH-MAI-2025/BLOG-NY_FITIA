import "../../styles/Menu.css";

function Menu() {
    return (
        <div>
            <br/>
            <ul className="nav flex-column border-top border-bottom">
                <li className="nav-item"><a href="/accueil" className="nav-link"><i className="bi bi-house-door me-2"></i>Accueil</a></li>
                <li className="nav-item"><a href="/article" className="nav-link"><i className="bi bi-file-earmark-text me-2"></i> Article</a></li>
                <li className="nav-item"><a href="/categorie" className="nav-link"><i className="bi bi-bookmark me-2"></i>Categorie</a></li>
            </ul>
            <br/>
        </div>
    );
}

export default Menu;