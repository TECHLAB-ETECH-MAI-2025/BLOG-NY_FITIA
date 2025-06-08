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
class __TwigTemplate_698ad810ea414662445f5377e5229c1d extends Template
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
                <div class=\"card-header editFond text-white\">
                    <h1 class=\"h4 mb-0\">
                        <i class=\"bi bi-pencil-square me-2\"></i>
                       Edit Profil
                    </h1>
                </div>
                <div class=\"card-body\">
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 23
        yield "
                    
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 27, $this->source); })()), "firstname", [], "any", false, false, false, 27), 'row', ["label" => "First Name", "attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["app"] ?? null), "user", [], "any", false, true, false, 30), "firstName", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30)) : (""))]]);
        // line 32
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 35, $this->source); })()), "lastname", [], "any", false, false, false, 35), 'row', ["label" => "Last Name", "attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["app"] ?? null), "user", [], "any", false, true, false, 38), "lastName", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "lastName", [], "any", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "lastName", [], "any", false, false, false, 38)) : (""))]]);
        // line 40
        yield "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'row', ["attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["app"] ?? null), "user", [], "any", false, true, false, 45), "email", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45)) : (""))]]);
        // line 47
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 50, $this->source); })()), "phone", [], "any", false, false, false, 50), 'row', ["label" => "Phone", "attr" => ["value" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["app"] ?? null), "user", [], "any", false, true, false, 53), "phone", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "phone", [], "any", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "phone", [], "any", false, false, false, 53)) : (""))]]);
        // line 55
        yield "
                            </div>
                        </div>
                        
                        <div class=\"mt-4 d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn editFond px-4\">
                                <i class=\"bi bi-check-circle me-2\"></i>
                                Save
                            </button>
                            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle me-2\"></i>
                                Cancel
                            </a>
                        </div>
                        
                    ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 70, $this->source); })()), 'form_end');
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
        return array (  169 => 70,  160 => 64,  149 => 55,  147 => 53,  146 => 50,  141 => 47,  139 => 45,  138 => 43,  133 => 40,  131 => 38,  130 => 35,  125 => 32,  123 => 30,  122 => 27,  116 => 23,  114 => 18,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
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
                <div class=\"card-header editFond text-white\">
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
                            <button type=\"submit\" class=\"btn editFond px-4\">
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
{% endblock %}", "user_profile/edit.html.twig", "/home/eny-fiti/Documents/etech/blog/back/templates/user_profile/edit.html.twig");
    }
}
