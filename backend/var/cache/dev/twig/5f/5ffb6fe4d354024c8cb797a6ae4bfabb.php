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

/* user_profile/avatar.html.twig */
class __TwigTemplate_e2180a6be481cfafe4da86496dfdd695 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profile/avatar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_profile/avatar.html.twig"));

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

        yield "Modifier mon avatar";
        
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
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"h5 mb-0\">Modifier mon avatar</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["uploadForm"]) || array_key_exists("uploadForm", $context) ? $context["uploadForm"] : (function () { throw new RuntimeError('Variable "uploadForm" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                        <div class=\"mb-4 text-center\">
                            <img src=\"";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true)));
        yield "\" 
                                 class=\"rounded-circle img-thumbnail mb-3\" 
                                 width=\"150\" 
                                 height=\"150\"
                                 alt=\"Avatar actuel\">
                        </div>
                        
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uploadForm"]) || array_key_exists("uploadForm", $context) ? $context["uploadForm"] : (function () { throw new RuntimeError('Variable "uploadForm" does not exist.', 23, $this->source); })()), "avatar", [], "any", false, false, false, 23), 'row');
        yield "
                        
                        <div class=\"mt-4 d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bi bi-upload me-2\"></i> Enregistrer
                            </button>
                            
                            ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "avatar", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                                <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteAvatarModal\">
                                    <i class=\"bi bi-trash me-2\"></i> Supprimer
                                </button>
                            ";
        }
        // line 35
        yield "                        </div>
                    ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["uploadForm"]) || array_key_exists("uploadForm", $context) ? $context["uploadForm"] : (function () { throw new RuntimeError('Variable "uploadForm" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "avatar", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "<div class=\"modal fade\" id=\"deleteAvatarModal\" tabindex=\"-1\" aria-labelledby=\"deleteAvatarModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteAvatarModalLabel\">Confirmer la suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-close=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Êtes-vous sûr de vouloir supprimer votre avatar ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_avatar_delete");
            yield "\" method=\"POST\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-avatar"), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-trash me-2\"></i> Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_profile/avatar.html.twig";
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
        return array (  177 => 58,  173 => 57,  159 => 45,  157 => 44,  146 => 36,  143 => 35,  137 => 31,  135 => 30,  125 => 23,  115 => 16,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier mon avatar{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"h5 mb-0\">Modifier mon avatar</h2>
                </div>
                <div class=\"card-body\">
                    {{ form_start(uploadForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
                        <div class=\"mb-4 text-center\">
                            <img src=\"{{ app.user.avatar ? asset('uploads/avatars/' ~ app.user.avatar) : asset('images/default-avatar.png') }}\" 
                                 class=\"rounded-circle img-thumbnail mb-3\" 
                                 width=\"150\" 
                                 height=\"150\"
                                 alt=\"Avatar actuel\">
                        </div>
                        
                        {{ form_row(uploadForm.avatar) }}
                        
                        <div class=\"mt-4 d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bi bi-upload me-2\"></i> Enregistrer
                            </button>
                            
                            {% if app.user.avatar %}
                                <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteAvatarModal\">
                                    <i class=\"bi bi-trash me-2\"></i> Supprimer
                                </button>
                            {% endif %}
                        </div>
                    {{ form_end(uploadForm) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
{% if app.user.avatar %}
<div class=\"modal fade\" id=\"deleteAvatarModal\" tabindex=\"-1\" aria-labelledby=\"deleteAvatarModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteAvatarModalLabel\">Confirmer la suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-close=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Êtes-vous sûr de vouloir supprimer votre avatar ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"{{ path('app_user_avatar_delete') }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-avatar') }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"bi bi-trash me-2\"></i> Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}", "user_profile/avatar.html.twig", "/home/eny-fiti/Documents/etech/blog/back/templates/user_profile/avatar.html.twig");
    }
}
