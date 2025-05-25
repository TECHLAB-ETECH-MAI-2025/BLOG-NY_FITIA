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

/* base.html.twig */
class __TwigTemplate_7ce5957dc5bc4029e0891a843434a1e2 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">

        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 84
        yield "
        ";
        // line 85
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 89
        yield "    </head>
    <body>
        ";
        // line 91
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "get", ["_route"], "method", false, false, false, 91), ["app_login", "app_register", "app_forgot_password_request", "app_check_email"])) {
            // line 92
            yield "            <!-- Structure avec menu -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- Sidebar Menu -->
                    <div class=\"col-md-3 col-lg-2 d-md-block sidebar collapse\">
                        ";
            // line 97
            yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/_menu.html.twig");
            yield "
                    </div>
                    <main class=\"col-md-9 col-lg-10 main-content\">
                        ";
            // line 100
            yield from             $this->unwrap()->yieldBlock("body", $context, $blocks);
            yield "
                    </main>
                </div>
            </div>
        ";
        } else {
            // line 105
            yield "            <!-- Pages sans menu -->
            <div class=\"auth-container\">
                ";
            // line 107
            yield from             $this->unwrap()->yieldBlock("body", $context, $blocks);
            yield "
            </div>
        ";
        }
        // line 110
        yield "    </body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "            <style>
                .sidebar {
                    min-height: 100vh;
                    background:rgb(16, 44, 71);
                    padding-top: 20px;
                    border-right: 1px solid #dee2e6;
                    display: flex;
                    flex-direction: column;
                    align-items: center; /* Centre horizontalement */
                    text-align: center; /* Centre le texte */
                }

                .main-content {
                    padding: 20px;
                }
                .tit {
                    background-color: #002366;
                    color: white;
                    padding: 24px 0;
                    font-family: 'Georgia', serif;
                    font-size: 2.6rem;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    margin-bottom: 0;
                }
                .nav-link {
                    padding: 10px 15px;
                    margin-bottom: 5px;
                    border-radius: 4px;
                    color: white;
                }
                .nav-link:hover {
                    background-color: rgba(0,0,0,0.05);
                }
                .nav-link.active {
                    background-color: #0d6efd;
                    color: white !important;
                }

                .sidebar-sticky .rounded-circle {
                    object-fit: cover;
                    border: 3px solid var(--bs-primary);
                }

                .sidebar-sticky .dropdown-menu {
                    margin-top: 10px;
                    border: none;
                    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                }

                .sidebar-sticky .border-top {
                    border-color: rgba(255, 255, 255, 0.1) !important;
                    padding-top: 1rem;
                }

                .pagination {
                    margin: 20px 0;
                }
                .page-item.active .page-link {
                    background-color: #0d6efd;
                    border-color: #0d6efd;
                }
                .page-link {
                    color: #0d6efd;
                    padding: 0.375rem 0.75rem;
                }

                .shadow-blue {
                     box-shadow: 0 8px 15px rgba(16, 44, 71, 0.5);
                }       
            </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
            ";
        // line 87
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 88
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  271 => 87,  260 => 88,  258 => 87,  255 => 86,  242 => 85,  160 => 12,  147 => 11,  124 => 5,  111 => 110,  105 => 107,  101 => 105,  93 => 100,  87 => 97,  80 => 92,  78 => 91,  74 => 89,  72 => 85,  69 => 84,  67 => 11,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">

        {% block stylesheets %}
            <style>
                .sidebar {
                    min-height: 100vh;
                    background:rgb(16, 44, 71);
                    padding-top: 20px;
                    border-right: 1px solid #dee2e6;
                    display: flex;
                    flex-direction: column;
                    align-items: center; /* Centre horizontalement */
                    text-align: center; /* Centre le texte */
                }

                .main-content {
                    padding: 20px;
                }
                .tit {
                    background-color: #002366;
                    color: white;
                    padding: 24px 0;
                    font-family: 'Georgia', serif;
                    font-size: 2.6rem;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    margin-bottom: 0;
                }
                .nav-link {
                    padding: 10px 15px;
                    margin-bottom: 5px;
                    border-radius: 4px;
                    color: white;
                }
                .nav-link:hover {
                    background-color: rgba(0,0,0,0.05);
                }
                .nav-link.active {
                    background-color: #0d6efd;
                    color: white !important;
                }

                .sidebar-sticky .rounded-circle {
                    object-fit: cover;
                    border: 3px solid var(--bs-primary);
                }

                .sidebar-sticky .dropdown-menu {
                    margin-top: 10px;
                    border: none;
                    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                }

                .sidebar-sticky .border-top {
                    border-color: rgba(255, 255, 255, 0.1) !important;
                    padding-top: 1rem;
                }

                .pagination {
                    margin: 20px 0;
                }
                .page-item.active .page-link {
                    background-color: #0d6efd;
                    border-color: #0d6efd;
                }
                .page-link {
                    color: #0d6efd;
                    padding: 0.375rem 0.75rem;
                }

                .shadow-blue {
                     box-shadow: 0 8px 15px rgba(16, 44, 71, 0.5);
                }       
            </style>
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body>
        {% if app.request.get('_route') not in ['app_login', 'app_register', 'app_forgot_password_request', 'app_check_email'] %}
            <!-- Structure avec menu -->
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- Sidebar Menu -->
                    <div class=\"col-md-3 col-lg-2 d-md-block sidebar collapse\">
                        {{ include('includes/_menu.html.twig') }}
                    </div>
                    <main class=\"col-md-9 col-lg-10 main-content\">
                        {{ block('body') }}
                    </main>
                </div>
            </div>
        {% else %}
            <!-- Pages sans menu -->
            <div class=\"auth-container\">
                {{ block('body') }}
            </div>
        {% endif %}
    </body>

</html>", "base.html.twig", "/home/eny-fiti/Documents/etech/blog/templates/base.html.twig");
    }
}
