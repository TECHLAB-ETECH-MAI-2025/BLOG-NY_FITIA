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

/* @KnpPaginator/Pagination/twitter_bootstrap_v5_pagination.html.twig */
class __TwigTemplate_00756a1cc5bf8adcc307a4514623c54a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v5_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v5_pagination.html.twig"));

        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 1, $this->source); })()), "pageCount", [], "any", false, false, false, 1) > 1)) {
            // line 2
            yield "    <nav>
        <ul class=\"pagination justify-content-center\">
            ";
            // line 5
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "previousPage", [], "any", true, true, false, 5)) {
                // line 6
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 7, $this->source); })()), "previousPageUrl", [], "any", false, false, false, 7), "html", null, true);
                yield "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            ";
            } else {
                // line 12
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
                </li>
            ";
            }
            // line 16
            yield "
            ";
            // line 18
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "pagesInRange", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                yield "                ";
                if (($context["page"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "current", [], "any", false, false, false, 19))) {
                    // line 20
                    yield "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), "pageUrl", [$context["page"]], "method", false, false, false, 20), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a></li>
                ";
                } else {
                    // line 22
                    yield "                    <li class=\"page-item active\"><span class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span></li>
                ";
                }
                // line 24
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "
            ";
            // line 27
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "nextPage", [], "any", true, true, false, 27)) {
                // line 28
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })()), "nextPageUrl", [], "any", false, false, false, 29), "html", null, true);
                yield "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            ";
            } else {
                // line 34
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
                </li>
            ";
            }
            // line 38
            yield "        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v5_pagination.html.twig";
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
        return array (  128 => 38,  122 => 34,  114 => 29,  111 => 28,  108 => 27,  105 => 25,  99 => 24,  93 => 22,  85 => 20,  82 => 19,  77 => 18,  74 => 16,  68 => 12,  60 => 7,  57 => 6,  54 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pagination.pageCount > 1 %}
    <nav>
        <ul class=\"pagination justify-content-center\">
            {# Lien vers la page précédente #}
            {% if pagination.previousPage is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ pagination.previousPageUrl }}\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\" aria-hidden=\"true\">&laquo;</span>
                </li>
            {% endif %}

            {# Pages numérotées #}
            {% for page in pagination.pagesInRange %}
                {% if page != pagination.current %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ pagination.pageUrl(page) }}\">{{ page }}</a></li>
                {% else %}
                    <li class=\"page-item active\"><span class=\"page-link\">{{ page }}</span></li>
                {% endif %}
            {% endfor %}

            {# Lien vers la page suivante #}
            {% if pagination.nextPage is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ pagination.nextPageUrl }}\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\" aria-hidden=\"true\">&raquo;</span>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/twitter_bootstrap_v5_pagination.html.twig", "/home/eny-fiti/Documents/etech/blog/templates/bundles/KnpPaginatorBundle/Pagination/twitter_bootstrap_v5_pagination.html.twig");
    }
}
