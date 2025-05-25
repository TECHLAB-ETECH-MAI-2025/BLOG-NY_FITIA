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

/* user_profile/edit.html.twig */
class __TwigTemplate_dbe41b196a29441c46f543416a2008f2 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profile/edit.html.twig"));

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

        yield "Modifier mon profil - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h1 class=\"h4 mb-0\">
                        <i class=\"bi bi-pencil-square me-2\"></i>
                       Edit Profil
                    </h1>
                </div>
                
                <div class=\"card-body\">
                    ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 24
        yield "
                    
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 28, $this->source); })()), "firstname", [], "any", false, false, false, 28), 'row', ["label" => "First Name", "attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["app"] ?? null), "user", [], "any", false, true, false, 31), "firstName", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstName", [], "any", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "firstName", [], "any", false, false, false, 31)) : (""))]]);
        // line 33
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 36, $this->source); })()), "lastname", [], "any", false, false, false, 36), 'row', ["label" => "Last Name", "attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["app"] ?? null), "user", [], "any", false, true, false, 39), "lastName", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "lastName", [], "any", false, false, false, 39)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "lastName", [], "any", false, false, false, 39)) : (""))]]);
        // line 41
        yield "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'row', ["attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["app"] ?? null), "user", [], "any", false, true, false, 46), "email", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46)) : (""))]]);
        // line 48
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 51, $this->source); })()), "phone", [], "any", false, false, false, 51), 'row', ["label" => "Phone", "attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["app"] ?? null), "user", [], "any", false, true, false, 54), "phone", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "phone", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "phone", [], "any", false, false, false, 54)) : (""))]]);
        // line 56
        yield "
                            </div>
                        </div>
                        
                        <div class=\"mt-4 d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-check-circle me-2\"></i>
                                Save
                            </button>
                            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle me-2\"></i>
                                Cancel
                            </a>
                        </div>
                        
                    ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 71, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
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
        return "user_profile/edit.html.twig";
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
        return array (  170 => 71,  161 => 65,  150 => 56,  148 => 54,  147 => 51,  142 => 48,  140 => 46,  139 => 44,  134 => 41,  132 => 39,  131 => 36,  126 => 33,  124 => 31,  123 => 28,  117 => 24,  115 => 19,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/user_profile/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier mon profil - {{ parent() }}{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h1 class=\"h4 mb-0\">
                        <i class=\"bi bi-pencil-square me-2\"></i>
                       Edit Profil
                    </h1>
                </div>
                
                <div class=\"card-body\">
                    {{ form_start(editForm, {
                        'attr': {
                            'class': 'needs-validation',
                            'novalidate': 'novalidate'
                        }
                    }) }}
                    
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                {{ form_row(editForm.firstname, {
                                    'label': 'First Name',
                                    'attr': {
                                        'value': app.user.firstName ?? ''
                                    }
                                }) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(editForm.lastname, {
                                    'label': 'Last Name',
                                    'attr': {
                                        'value': app.user.lastName ?? ''
                                    }
                                }) }}
                            </div>
                            <div class=\"col-12\">
                                {{ form_row(editForm.email, {
                                    'attr': {
                                        'value': app.user.email ?? ''
                                    }
                                }) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(editForm.phone, {
                                    'label': 'Phone',
                                    'attr': {
                                        'value': app.user.phone ?? ''
                                    }
                                }) }}
                            </div>
                        </div>
                        
                        <div class=\"mt-4 d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-check-circle me-2\"></i>
                                Save
                            </button>
                            <a href=\"{{ path('app_user_profile') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle me-2\"></i>
                                Cancel
                            </a>
                        </div>
                        
                    {{ form_end(editForm) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "user_profile/edit.html.twig", "/home/eny-fiti/Documents/etech/blog/templates/user_profile/edit.html.twig");
    }
}
