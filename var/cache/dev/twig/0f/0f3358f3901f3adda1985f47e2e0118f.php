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

/* pagination/bootstrap_v5.html.twig */
class __TwigTemplate_ee4dd1a3f7170c771af22b4cd1f5853c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/bootstrap_v5.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/bootstrap_v5.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "<nav aria-label=\"Pagination\">
    <ul class=\"pagination justify-content-center\">
        ";
            // line 5
            yield "        <li class=\"page-item";
            if ((($tmp =  !array_key_exists("previous", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield "\">
            <a class=\"page-link\" 
               ";
            // line 7
            if (array_key_exists("previous", $context)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 7, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 7, $this->source); })())])), "html", null, true);
                yield "\"";
            }
            yield ">
                &laquo;
            </a>
        </li>

        ";
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                yield "            <li class=\"page-item";
                if (($context["page"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 14, $this->source); })()))) {
                    yield " active";
                }
                yield "\">
                <a class=\"page-link\" href=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 15, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 15, $this->source); })()) => $context["page"]])), "html", null, true);
                yield "\">
                    ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "
        ";
            // line 22
            yield "        <li class=\"page-item";
            if ((($tmp =  !array_key_exists("next", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield "\">
            <a class=\"page-link\" 
               ";
            // line 24
            if (array_key_exists("next", $context)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 24, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 24, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 24, $this->source); })())])), "html", null, true);
                yield "\"";
            }
            yield ">
                &raquo;
            </a>
        </li>
    </ul>
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
        return "pagination/bootstrap_v5.html.twig";
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
        return array (  111 => 24,  103 => 22,  100 => 20,  90 => 16,  86 => 15,  79 => 14,  74 => 13,  62 => 7,  54 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pageCount > 1 %}
<nav aria-label=\"Pagination\">
    <ul class=\"pagination justify-content-center\">
        {# Previous #}
        <li class=\"page-item{% if previous is not defined %} disabled{% endif %}\">
            <a class=\"page-link\" 
               {% if previous is defined %}href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\"{% endif %}>
                &laquo;
            </a>
        </li>

        {# Page numbers #}
        {% for page in pagesInRange %}
            <li class=\"page-item{% if page == current %} active{% endif %}\">
                <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">
                    {{ page }}
                </a>
            </li>
        {% endfor %}

        {# Next #}
        <li class=\"page-item{% if next is not defined %} disabled{% endif %}\">
            <a class=\"page-link\" 
               {% if next is defined %}href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\"{% endif %}>
                &raquo;
            </a>
        </li>
    </ul>
</nav>
{% endif %}", "pagination/bootstrap_v5.html.twig", "/home/nyfitia/Documents/Fitia/etech/projet/blog/templates/pagination/bootstrap_v5.html.twig");
    }
}
