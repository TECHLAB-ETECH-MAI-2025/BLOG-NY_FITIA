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

/* search/index.html.twig */
class __TwigTemplate_5c4f8c56bd4e3c5f9a9afe48b320a69f extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Résultats pour \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4 pb-2 border-bottom\">
        Résultats pour \"<span class=\"text-primary\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</span>\"
    </h1>

    ";
        // line 11
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <section class=\"mb-5\">
            <h2 class=\"h4 mb-3 d-flex align-items-center\">
                <i class=\"bi bi-file-text-fill text-primary me-2\"></i>
                Articles
            </h2>
            <div class=\"list-group\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 19
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                yield "\" 
                       class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                        ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 21), "html", null, true);
                yield "
                        <span class=\"badge bg-primary rounded-pill\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </span>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "            </div>
        </section>
    ";
        }
        // line 30
        yield "
    ";
        // line 31
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "        <section class=\"mb-5\">
            <h2 class=\"h4 mb-3 d-flex align-items-center\">
                <i class=\"bi bi-bookmarks-fill text-success me-2\"></i>
                Catégories
            </h2>
            <div class=\"d-flex flex-wrap gap-2\">
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 39
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" 
                       class=\"btn btn-outline-success btn-sm\">
                        ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41), "html", null, true);
                yield "
                        <i class=\"bi bi-chevron-right ms-1\"></i>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "            </div>
        </section>
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 49, $this->source); })())) && Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 49, $this->source); })())))) {
            // line 50
            yield "        <div class=\"alert alert-warning mt-4\">
            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            Aucun résultat trouvé pour votre recherche.
        </div>
    ";
        }
        // line 55
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "search/index.html.twig";
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
        return array (  199 => 55,  192 => 50,  190 => 49,  187 => 48,  182 => 45,  172 => 41,  166 => 39,  162 => 38,  154 => 32,  152 => 31,  149 => 30,  144 => 27,  132 => 21,  126 => 19,  122 => 18,  114 => 12,  112 => 11,  106 => 8,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultats pour \"{{ query }}\"{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4 pb-2 border-bottom\">
        Résultats pour \"<span class=\"text-primary\">{{ query }}</span>\"
    </h1>

    {% if articles is not empty %}
        <section class=\"mb-5\">
            <h2 class=\"h4 mb-3 d-flex align-items-center\">
                <i class=\"bi bi-file-text-fill text-primary me-2\"></i>
                Articles
            </h2>
            <div class=\"list-group\">
                {% for article in articles %}
                    <a href=\"{{ path('article_show', {id: article.id}) }}\" 
                       class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                        {{ article.title }}
                        <span class=\"badge bg-primary rounded-pill\">
                            <i class=\"bi bi-arrow-right\"></i>
                        </span>
                    </a>
                {% endfor %}
            </div>
        </section>
    {% endif %}

    {% if categories is not empty %}
        <section class=\"mb-5\">
            <h2 class=\"h4 mb-3 d-flex align-items-center\">
                <i class=\"bi bi-bookmarks-fill text-success me-2\"></i>
                Catégories
            </h2>
            <div class=\"d-flex flex-wrap gap-2\">
                {% for category in categories %}
                    <a href=\"{{ path('category_show', {id: category.id}) }}\" 
                       class=\"btn btn-outline-success btn-sm\">
                        {{ category.name }}
                        <i class=\"bi bi-chevron-right ms-1\"></i>
                    </a>
                {% endfor %}
            </div>
        </section>
    {% endif %}

    {% if articles is empty and categories is empty %}
        <div class=\"alert alert-warning mt-4\">
            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
            Aucun résultat trouvé pour votre recherche.
        </div>
    {% endif %}
</div>
{% endblock %}", "search/index.html.twig", "/home/eny-fiti/Documents/etech/blog/backend/templates/search/index.html.twig");
    }
}
