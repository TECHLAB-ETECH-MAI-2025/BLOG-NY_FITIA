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

/* article/index.html.twig */
class __TwigTemplate_801836bb11413f60fb457fa9f7528ee1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <style>
        h1 {
            background-color: #002366;
            color: white;
            padding: 24px 0;
            margin: 24px;
            font-family: 'Georgia', serif;
            font-size: 2.6rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
        }

        small {
            color: white;
            font-family: 'Georgia', serif;
            font-size: 0.6rem;
            letter-spacing: 2px;
        }

        span {
            color:  #002366;
            font-family: 'Georgia', serif, 'bold';
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        .card {
            border: 1px solid #dee2e6;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 1rem 1.25rem;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-header h5 {
            margin: 0;
            font-weight: 600;
            color: #343a40;
        }

        .card-body {
            font-size: 0.95rem;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 0.75rem 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .card-footer i {
            font-size: 1.2rem;
            margin-left: 8px;
            cursor: pointer;
            color:rgb(2, 25, 46);
            transition: color 0.3s;
        }

        .card-footer i:hover {
            color: #0d6efd;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "    <div class=\"container\">
        <h1>Mon Blog</h1>
        </br>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 95
            yield "            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <h5 >";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 98), "html", null, true);
            yield "</h5>
                        <small class=\"text-body-secondary\">Publié le : ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true);
            yield "</small>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
                        <p class=\"text-muted\">
                            Catégorie :
                            ";
            // line 105
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "                            ";
            } else {
                // line 107
                yield "                                <span class=\"text-muted\">Aucune catégorie</span>
                            ";
            }
            // line 109
            yield "                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_interact", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\" class=\"btn btn-sm\">
                            <i class=\"bi bi-chat-dots\"></i>
                        </a>
                        <i class=\"bi bi-hand-thumbs-up\"></i>
                        <i class=\"bi bi-hand-thumbs-down\"></i>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "            <p>Aucun article pour le moment.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "    </div>

 </div>
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
        return "article/index.html.twig";
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
        return array (  273 => 123,  266 => 121,  264 => 120,  251 => 112,  246 => 109,  242 => 107,  239 => 106,  237 => 105,  231 => 102,  225 => 99,  221 => 98,  216 => 95,  211 => 94,  205 => 90,  192 => 89,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/article/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    <style>
        h1 {
            background-color: #002366;
            color: white;
            padding: 24px 0;
            margin: 24px;
            font-family: 'Georgia', serif;
            font-size: 2.6rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
        }

        small {
            color: white;
            font-family: 'Georgia', serif;
            font-size: 0.6rem;
            letter-spacing: 2px;
        }

        span {
            color:  #002366;
            font-family: 'Georgia', serif, 'bold';
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        .card {
            border: 1px solid #dee2e6;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 1rem 1.25rem;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-header h5 {
            margin: 0;
            font-weight: 600;
            color: #343a40;
        }

        .card-body {
            font-size: 0.95rem;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 0.75rem 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .card-footer i {
            font-size: 1.2rem;
            margin-left: 8px;
            cursor: pointer;
            color:rgb(2, 25, 46);
            transition: color 0.3s;
        }

        .card-footer i:hover {
            color: #0d6efd;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Mon Blog</h1>
        </br>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        {% for article in articles %}
            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <h5 >{{ article.title }}</h5>
                        <small class=\"text-body-secondary\">Publié le : {{ article.createdAt|date('Y-m-d') }}</small>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">{{ article.description }}</p>
                        <p class=\"text-muted\">
                            Catégorie :
                            {% if article.category %}
                            {% else %}
                                <span class=\"text-muted\">Aucune catégorie</span>
                            {% endif %}
                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('article_interact', {'id': article.id}) }}\" class=\"btn btn-sm\">
                            <i class=\"bi bi-chat-dots\"></i>
                        </a>
                        <i class=\"bi bi-hand-thumbs-up\"></i>
                        <i class=\"bi bi-hand-thumbs-down\"></i>
                    </div>
                </div>
            </div>
        {% else %}
            <p>Aucun article pour le moment.</p>
        {% endfor %}
    </div>

 </div>
{% endblock %}", "article/index.html.twig", "/home/eny-fiti/Documents/etech/blog/templates/article/index.html.twig");
    }
}
