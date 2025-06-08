<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* includes/_menu.html.twig */
class __TwigTemplate_e80595476f8fe7bac54b6ced30779558 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_menu.html.twig"));

        // line 1
        yield "<div class=\"sidebar-sticky pt-3\">
    ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <div class=\"text-center mb-4\">
        <div class=\"dropdown\">
            <a href=\"#\" class=\"d-block text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"";
            // line 6
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "avatar", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "avatar", [], "any", false, false, false, 6))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true)));
            yield "\" 
                     class=\"rounded-circle mb-2\" 
                     width=\"80\" 
                     height=\"80\" 
                     alt=\"Photo profil\">
                <div class=\"text-white small\">";
            // line 11
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 11), "firstname", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "firstname", [], "any", false, false, false, 11)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "firstname", [], "any", false, false, false, 11), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true)));
            yield "</div>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-dark\">
                <li>
                    <a class=\"dropdown-item\" href=\"";
            // line 15
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                        <i class=\"bi bi-person-lines-fill me-2\"></i> Mon profil
                    </a>
                </li>
                <li>
                    <a class=\"dropdown-item\" href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile_edit");
            yield "\">
                        <i class=\"bi bi-gear me-2\"></i> Paramètres
                    </a>
                </li>
            </ul>
        </div>
    </div>
    ";
        }
        // line 28
        yield "
    <!-- Menu principal -->
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32) == "home")) ? ("active") : (""));
        yield "\">
                <i class=\"bi bi-house-door me-2\"></i> Accueil
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["_route"], "method", false, false, false, 37) == "article_show")) ? ("active") : (""));
        yield "\">
                <i class=\"bi bi-file-earmark-text me-2\"></i> Articles
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42)) && is_string($_v1 = "category_") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
                <i class=\"bi bi-bookmark me-2\"></i> Catégories
            </a>
        </li>
    </ul>
        <form action=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "\" method=\"get\" onsubmit=\"return validateSearch()\">
    <div class=\"input-group position-relative\">
        <input class=\"form-control\" type=\"text\" name=\"q\" id=\"searchInput\"
            placeholder=\"Rechercher...\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "get", ["q"], "method", false, false, false, 50), "html", null, true);
        yield "\" required autocomplete=\"off\">
        <button type=\"submit\" class=\"btn btn-outline-secondary\">
            <i class=\"bi bi-search\"></i>
        </button>

        ";
        // line 56
        yield "        <div id=\"searchResultats\" class=\"dropdown-menu show w-100 mt-1 p-2 shadow-sm\"
             style=\"display: none; max-height: 300px; overflow-y: auto;\">
            <!-- Résultats en direct s’affichent ici -->
        </div>
    </div>
</form>

<script>
    const searchInput = document.getElementById('searchInput');
    const resultsDiv = document.getElementById('searchResultats');
    let timeout;

    searchInput.addEventListener('input', function () {
        const query = this.value.trim();

        if (query.length < 2) {
            resultsDiv.style.display = 'none';
            resultsDiv.innerHTML = '';
            return;
        }

        clearTimeout(timeout);
        timeout = setTimeout(() => {
            fetch('";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_live");
        yield "?q=' + encodeURIComponent(query))
                .then(response => response.text())
                .then(html => {
                    resultsDiv.innerHTML = html;
                    resultsDiv.style.display = 'block';
                })
                .catch(() => {
                    resultsDiv.innerHTML = '<div class=\"text-danger\">Erreur de chargement</div>';
                    resultsDiv.style.display = 'block';
                });
        }, 300);
    });

    // Cacher suggestions quand on clique en dehors
    document.addEventListener('click', function (e) {
        if (!searchInput.contains(e.target) && !resultsDiv.contains(e.target)) {
            resultsDiv.style.display = 'none';
        }
    });
</script>

    </ul>

    <!-- Bouton Déconnexion en bas -->
    ";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "    <div class=\"mt-auto pt-3 border-top\">
        <a href=\"";
            // line 105
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-outline-danger btn-sm w-10 d-inline-flex align-items-center\">
            <i class=\"bi bi-box-arrow-right me-2\"></i> Logout
        </a>
    </div>
    ";
        }
        // line 110
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/_menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  207 => 110,  199 => 105,  196 => 104,  194 => 103,  167 => 79,  142 => 56,  134 => 50,  128 => 47,  118 => 42,  108 => 37,  98 => 32,  92 => 28,  81 => 20,  73 => 15,  66 => 11,  58 => 6,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"sidebar-sticky pt-3\">
    {% if app.user %}
    <div class=\"text-center mb-4\">
        <div class=\"dropdown\">
            <a href=\"#\" class=\"d-block text-decoration-none dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"{{ app.user.avatar ? asset('uploads/avatars/' ~ app.user.avatar) : asset('images/default-avatar.png') }}\" 
                     class=\"rounded-circle mb-2\" 
                     width=\"80\" 
                     height=\"80\" 
                     alt=\"Photo profil\">
                <div class=\"text-white small\">{{ app.user.firstname ?? app.user.email }}</div>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-dark\">
                <li>
                    <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">
                        <i class=\"bi bi-person-lines-fill me-2\"></i> Mon profil
                    </a>
                </li>
                <li>
                    <a class=\"dropdown-item\" href=\"{{ path('app_user_profile_edit') }}\">
                        <i class=\"bi bi-gear me-2\"></i> Paramètres
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {% endif %}

    <!-- Menu principal -->
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a href=\"{{ path('home') }}\" class=\"nav-link {{ app.request.get('_route') == 'home' ? 'active' : '' }}\">
                <i class=\"bi bi-house-door me-2\"></i> Accueil
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('article_show') }}\" class=\"nav-link {{ app.request.get('_route') == 'article_show' ? 'active' : '' }}\">
                <i class=\"bi bi-file-earmark-text me-2\"></i> Articles
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('category_show') }}\" class=\"nav-link {{ app.request.get('_route') starts with 'category_' ? 'active' : '' }}\">
                <i class=\"bi bi-bookmark me-2\"></i> Catégories
            </a>
        </li>
    </ul>
        <form action=\"{{ path('app_search') }}\" method=\"get\" onsubmit=\"return validateSearch()\">
    <div class=\"input-group position-relative\">
        <input class=\"form-control\" type=\"text\" name=\"q\" id=\"searchInput\"
            placeholder=\"Rechercher...\" value=\"{{ app.request.query.get('q') }}\" required autocomplete=\"off\">
        <button type=\"submit\" class=\"btn btn-outline-secondary\">
            <i class=\"bi bi-search\"></i>
        </button>

        {# Conteneur pour les suggestions #}
        <div id=\"searchResultats\" class=\"dropdown-menu show w-100 mt-1 p-2 shadow-sm\"
             style=\"display: none; max-height: 300px; overflow-y: auto;\">
            <!-- Résultats en direct s’affichent ici -->
        </div>
    </div>
</form>

<script>
    const searchInput = document.getElementById('searchInput');
    const resultsDiv = document.getElementById('searchResultats');
    let timeout;

    searchInput.addEventListener('input', function () {
        const query = this.value.trim();

        if (query.length < 2) {
            resultsDiv.style.display = 'none';
            resultsDiv.innerHTML = '';
            return;
        }

        clearTimeout(timeout);
        timeout = setTimeout(() => {
            fetch('{{ path('app_search_live') }}?q=' + encodeURIComponent(query))
                .then(response => response.text())
                .then(html => {
                    resultsDiv.innerHTML = html;
                    resultsDiv.style.display = 'block';
                })
                .catch(() => {
                    resultsDiv.innerHTML = '<div class=\"text-danger\">Erreur de chargement</div>';
                    resultsDiv.style.display = 'block';
                });
        }, 300);
    });

    // Cacher suggestions quand on clique en dehors
    document.addEventListener('click', function (e) {
        if (!searchInput.contains(e.target) && !resultsDiv.contains(e.target)) {
            resultsDiv.style.display = 'none';
        }
    });
</script>

    </ul>

    <!-- Bouton Déconnexion en bas -->
    {% if app.user %}
    <div class=\"mt-auto pt-3 border-top\">
        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger btn-sm w-10 d-inline-flex align-items-center\">
            <i class=\"bi bi-box-arrow-right me-2\"></i> Logout
        </a>
    </div>
    {% endif %}
</div>", "includes/_menu.html.twig", "/home/eny-fiti/Documents/etech/blog/back/templates/includes/_menu.html.twig");
    }
}
