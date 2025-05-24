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
class __TwigTemplate_7b61b3a8ecc019223f959638ddc13fcb extends Template
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
            'body' => [$this, 'block_body'],
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
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 d-md-block sidebar collapse\">
            <div class=\"nav flex-column\">
                <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", ["_route"], "method", false, false, false, 6) == "home")) ? ("active") : (""));
        yield "\">
                    <i class=\"bi bi-house-door me-2\"></i> Accueil
                </a>
                <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", ["_route"], "method", false, false, false, 9) == "article_show")) ? ("active") : (""));
        yield "\">
                    <i class=\"bi bi-file-earmark-text me-2\"></i> Articles
                </a>
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        yield "\" class=\"nav-link\">
                    <i class=\"bi bi-bookmark me-2\"></i> Catégories
                </a>
                <a href=\"#\" class=\"nav-link\">
                    <i class=\"bi bi-chat-left-text me-2\"></i> Commentaires
                </a>
            </div>
        </div>

        <!-- Main content -->
        <main class=\"col-md-9 col-lg-10 main-content\">
            ";
        // line 23
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 24
        yield "        </main>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  101 => 23,  88 => 24,  86 => 23,  72 => 12,  64 => 9,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 d-md-block sidebar collapse\">
            <div class=\"nav flex-column\">
                <a href=\"{{ path('home') }}\" class=\"nav-link {{ app.request.get('_route') == 'home' ? 'active' }}\">
                    <i class=\"bi bi-house-door me-2\"></i> Accueil
                </a>
                <a href=\"{{ path('article_show') }}\" class=\"nav-link {{ app.request.get('_route') == 'article_show' ? 'active' }}\">
                    <i class=\"bi bi-file-earmark-text me-2\"></i> Articles
                </a>
                <a href=\"{{ path('category_index') }}\" class=\"nav-link\">
                    <i class=\"bi bi-bookmark me-2\"></i> Catégories
                </a>
                <a href=\"#\" class=\"nav-link\">
                    <i class=\"bi bi-chat-left-text me-2\"></i> Commentaires
                </a>
            </div>
        </div>

        <!-- Main content -->
        <main class=\"col-md-9 col-lg-10 main-content\">
            {% block body %}{% endblock %}
        </main>
    </div>
</div>", "includes/_menu.html.twig", "/home/eny-fiti/Documents/etech/blog/templates/includes/_menu.html.twig");
    }
}
