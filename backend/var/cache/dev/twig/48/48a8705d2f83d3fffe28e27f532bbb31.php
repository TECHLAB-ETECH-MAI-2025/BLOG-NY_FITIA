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

/* chat/index.html.twig */
class __TwigTemplate_07c2687e4185259a713eef97f011eae1 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

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

        yield "Messagerie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/index2.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <div class=\"messaging-container\">
        <div class=\"welcome-header\">
            <h1>Messagerie</h1>
        </div>
        <h2 class=\"h4 mb-4\">Discuter avec un utilisateur</h2>
        
        <div class=\"user-list\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            yield "                ";
            if (($context["user"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19))) {
                // line 20
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_with_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" class=\"user-card\">
                        <div class=\"user-card\">
                            <div class=\"user-avatar\">
                                ";
                // line 23
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 24))), "html", null, true);
                    yield "\" 
                                        alt=\"";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 25), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 25), "html", null, true);
                    yield "\"
                                        class=\"avatar-image\">
                                ";
                } else {
                    // line 28
                    yield "                                    <span class=\"avatar-initials\">
                                        ";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 29))), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 29))), "html", null, true);
                    yield "
                                    </span>
                                ";
                }
                // line 32
                yield "                                <span class=\"status-indicator ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActiveNow", [], "method", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "online";
                } else {
                    yield "offline";
                }
                yield "\"></span>
                            </div>
                            
                            <div class=\"user-info\">
                                <div class=\"user-name\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 36), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 36), "html", null, true);
                yield "</div>
                                <div class=\"user-email\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 37), "html", null, true);
                yield "</div>
                                <div class=\"user-status\" 
                                    id=\"user-status-";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39), "html", null, true);
                yield "\"
                                    data-user-id=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40), "html", null, true);
                yield "\"
                                    data-controller=\"user-status\">
                                    <span class=\"status-text\">
                                        ";
                // line 43
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActiveNow", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                                            <span class=\"text-success\">En ligne</span>
                                        ";
                } else {
                    // line 46
                    yield "                                            <span class=\"text-muted\">Hors ligne</span>
                                            ";
                    // line 47
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastActivityAt", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 48
                        yield "                                                <small class=\"last-seen\">Dernière activité: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastActivityAt", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
                        yield "</small>
                                            ";
                    }
                    // line 50
                    yield "                                        ";
                }
                // line 51
                yield "                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
            }
            // line 57
            yield "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            yield "                <div class=\"no-users\">
                    <i class=\"fas fa-user-friends fa-2x mb-3\"></i>
                    <p>Aucun autre utilisateur disponible pour le moment.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 88
        yield "
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
        return "chat/index.html.twig";
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
        return array (  289 => 88,  284 => 68,  271 => 67,  258 => 63,  248 => 58,  243 => 57,  235 => 51,  232 => 50,  226 => 48,  224 => 47,  221 => 46,  217 => 44,  215 => 43,  209 => 40,  205 => 39,  200 => 37,  194 => 36,  182 => 32,  175 => 29,  172 => 28,  164 => 25,  159 => 24,  157 => 23,  150 => 20,  147 => 19,  142 => 18,  133 => 11,  120 => 10,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Messagerie{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/index2.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"messaging-container\">
        <div class=\"welcome-header\">
            <h1>Messagerie</h1>
        </div>
        <h2 class=\"h4 mb-4\">Discuter avec un utilisateur</h2>
        
        <div class=\"user-list\">
            {% for user in users %}
                {% if user != app.user %}
                    <a href=\"{{ path('chat_with_user', {id: user.id}) }}\" class=\"user-card\">
                        <div class=\"user-card\">
                            <div class=\"user-avatar\">
                                {% if user.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" 
                                        alt=\"{{ user.firstName }} {{ user.lastName }}\"
                                        class=\"avatar-image\">
                                {% else %}
                                    <span class=\"avatar-initials\">
                                        {{ user.firstName|first|upper }}{{ user.lastName|first|upper }}
                                    </span>
                                {% endif %}
                                <span class=\"status-indicator {% if user.isActiveNow() %}online{% else %}offline{% endif %}\"></span>
                            </div>
                            
                            <div class=\"user-info\">
                                <div class=\"user-name\">{{ user.firstName }} {{ user.lastName }}</div>
                                <div class=\"user-email\">{{ user.email }}</div>
                                <div class=\"user-status\" 
                                    id=\"user-status-{{ user.id }}\"
                                    data-user-id=\"{{ user.id }}\"
                                    data-controller=\"user-status\">
                                    <span class=\"status-text\">
                                        {% if user.isActiveNow() %}
                                            <span class=\"text-success\">En ligne</span>
                                        {% else %}
                                            <span class=\"text-muted\">Hors ligne</span>
                                            {% if user.lastActivityAt %}
                                                <small class=\"last-seen\">Dernière activité: {{ user.lastActivityAt|date('d/m/Y H:i') }}</small>
                                            {% endif %}
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                {% endif %}
            {% else %}
                <div class=\"no-users\">
                    <i class=\"fas fa-user-friends fa-2x mb-3\"></i>
                    <p>Aucun autre utilisateur disponible pour le moment.</p>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Ajoutez Font Awesome si ce n'est pas déjà dans votre base.html.twig
    <script src=\"https://kit.fontawesome.com/your-code.js\" crossorigin=\"anonymous\"></script>
    <script>
        const url = new URL('http://localhost/.well-known/mercure');
        url.searchParams.append('topic', 'user/123/status'); // Remplace 123 par l’ID de l’utilisateur

        const eventSource = new EventSource(url);

        eventSource.onmessage = function(event) {
            const data = JSON.parse(event.data);
            const container = document.getElementById('user-status-' + data.userId);

            if (container) {
                container.innerHTML = data.status === 'online'
                    ? '<span class=\"text-success\">En ligne</span>'
                    : '<span class=\"text-muted\">Hors ligne</span><br><small class=\"last-seen\">Dernière activité: ' + data.lastActivityAt + '</small>';
            }
        };
    </script> #}

    {% endblock %}", "chat/index.html.twig", "/home/eny-fiti/Documents/etech/blog/back/templates/chat/index.html.twig");
    }
}
