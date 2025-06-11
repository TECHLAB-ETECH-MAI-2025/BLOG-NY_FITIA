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
class __TwigTemplate_f429c8655d7783f8e48ae7b334a3bf3f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/index1.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const voteButtons = document.querySelectorAll('.vote-btn');

        voteButtons.forEach(button => {
            button.addEventListener('click', async function (e) {
                e.preventDefault();

                if (button.disabled) {
                    const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                    modal.show();
                    return;
                }

                const articleId = button.dataset.articleId;
                const voteType = button.dataset.voteType;

                try {
                    const response = await fetch(`/article/\${articleId}/vote/\${voteType}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        credentials: 'include'
                    });

                    const data = await response.json();

                    if (response.status === 401) {
                        throw new Error('Unauthorized');
                    }

                    if (!response.ok) {
                        throw new Error(data.message || 'Error');
                    }

                    const voteContainer = button.closest('.vote-container');
                    const likeBtn = voteContainer.querySelector('.vote-btn.like');
                    const dislikeBtn = voteContainer.querySelector('.vote-btn.dislike');

                    likeBtn.querySelector('.like-count').textContent = data.likes;
                    dislikeBtn.querySelector('.dislike-count').textContent = data.dislikes;

                    likeBtn.classList.toggle('active', data.userVote === 1);
                    dislikeBtn.classList.toggle('active', data.userVote === -1);
                } catch (error) {
                    console.error('Vote error:', error);
                    if (error.message === 'Unauthorized') {
                        const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                        modal.show();
                    } else {
                        alert('Une erreur est survenue : ' + error.message);
                    }
                }
            });
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "    <div class=\"container\">
        <div class=\"tete\">
            <h1>Bienvenue sur le Blog</h1>
            <p> Bonjour et bienvenue sur ce blog ! Installez-vous confortablement et explorez les articles à votre rythme.</p>
        </div>
        <br>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 84
            yield "        <div style=\"position: fixed; bottom: 0; background: white; padding: 10px; z-index: 1000;\">
            Statut connexion : ";
            // line 85
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("CONNECTÉ (" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "email", [], "any", false, false, false, 85)) . ")"), "html", null, true)) : ("NON CONNECTÉ"));
            yield "
            <br>Token session : ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", ["_security_main"], "method", false, false, false, 86), 0, 20) . "..."), "html", null, true);
            yield "
        </div>
            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <h5>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 91), "html", null, true);
            yield "</h5>
                        <small class=\"text-body-secondary\">Publié le : ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 92), "Y-m-d"), "html", null, true);
            yield "</small>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 95), "html", null, true);
            yield "</p>
                        <p class=\"text-muted\">
                            Catégorie :
                            ";
            // line 98
            $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categoryStatus", [], "any", false, false, false, 98);
            // line 99
            yield "
                            ";
            // line 100
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 100, $this->source); })()), "exists", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                                <span class=\"badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 103
                yield "                                <span class=\"badge bg-warning\">
                                    <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                    ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 108
            yield "                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_interact", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"comment-btn\">
                            <i class=\"bi bi-chat-dots\"></i>
                        </a>
                        <div class=\"vote-container\">
                            <button class=\"vote-btn like ";
            // line 115
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115) && CoreExtension::getAttribute($this->env, $this->source, $context["article"], "isLikedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115)], "method", false, false, false, 115))) {
                yield "active";
            }
            yield "\"
                                    data-article-id=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 116), "html", null, true);
            yield "\"
                                    data-vote-type=\"like\"
                                    ";
            // line 118
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield ">
                                    <i class=\"bi bi-hand-thumbs-up\"></i> 
                                    <span class=\"vote-count like-count\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "countLikes", [], "method", false, false, false, 120), "html", null, true);
            yield "</span>
                            </button>
                            <button class=\"vote-btn dislike ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122) && CoreExtension::getAttribute($this->env, $this->source, $context["article"], "isDislikedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122)], "method", false, false, false, 122))) {
                yield "active";
            }
            yield "\"
                                    data-article-id=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 123), "html", null, true);
            yield "\"
                                    data-vote-type=\"dislike\"
                                    ";
            // line 125
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield ">
                                    <i class=\"bi bi-hand-thumbs-down\"></i> 
                                    <span class=\"vote-count dislike-count\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "countDislikes", [], "method", false, false, false, 127), "html", null, true);
            yield "</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 133
        if (!$context['_iterated']) {
            // line 134
            yield "            <div class=\"col-12\">
                <p class=\"text-center\">Aucun article pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "        <div class=\"navigation d-flex justify-content-center\">
            ";
        // line 139
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 139, $this->source); })()), "pagination/bootstrap_v5.html.twig");
        yield "
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
        return array (  362 => 139,  359 => 138,  350 => 134,  348 => 133,  337 => 127,  332 => 125,  327 => 123,  321 => 122,  316 => 120,  311 => 118,  306 => 116,  300 => 115,  293 => 111,  288 => 108,  282 => 105,  278 => 103,  272 => 101,  270 => 100,  267 => 99,  265 => 98,  259 => 95,  253 => 92,  249 => 91,  241 => 86,  237 => 85,  234 => 84,  229 => 83,  220 => 76,  207 => 75,  133 => 12,  120 => 11,  107 => 8,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/article/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/index1.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const voteButtons = document.querySelectorAll('.vote-btn');

        voteButtons.forEach(button => {
            button.addEventListener('click', async function (e) {
                e.preventDefault();

                if (button.disabled) {
                    const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                    modal.show();
                    return;
                }

                const articleId = button.dataset.articleId;
                const voteType = button.dataset.voteType;

                try {
                    const response = await fetch(`/article/\${articleId}/vote/\${voteType}`, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        credentials: 'include'
                    });

                    const data = await response.json();

                    if (response.status === 401) {
                        throw new Error('Unauthorized');
                    }

                    if (!response.ok) {
                        throw new Error(data.message || 'Error');
                    }

                    const voteContainer = button.closest('.vote-container');
                    const likeBtn = voteContainer.querySelector('.vote-btn.like');
                    const dislikeBtn = voteContainer.querySelector('.vote-btn.dislike');

                    likeBtn.querySelector('.like-count').textContent = data.likes;
                    dislikeBtn.querySelector('.dislike-count').textContent = data.dislikes;

                    likeBtn.classList.toggle('active', data.userVote === 1);
                    dislikeBtn.classList.toggle('active', data.userVote === -1);
                } catch (error) {
                    console.error('Vote error:', error);
                    if (error.message === 'Unauthorized') {
                        const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                        modal.show();
                    } else {
                        alert('Une erreur est survenue : ' + error.message);
                    }
                }
            });
        });
    });
</script>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"tete\">
            <h1>Bienvenue sur le Blog</h1>
            <p> Bonjour et bienvenue sur ce blog ! Installez-vous confortablement et explorez les articles à votre rythme.</p>
        </div>
        <br>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        {% for article in articles %}
        <div style=\"position: fixed; bottom: 0; background: white; padding: 10px; z-index: 1000;\">
            Statut connexion : {{ app.user ? 'CONNECTÉ (' ~ app.user.email ~ ')' : 'NON CONNECTÉ' }}
            <br>Token session : {{ app.session.get('_security_main')|slice(0, 20) ~ '...' }}
        </div>
            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <h5>{{ article.title }}</h5>
                        <small class=\"text-body-secondary\">Publié le : {{ article.createdAt|date('Y-m-d') }}</small>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">{{ article.description }}</p>
                        <p class=\"text-muted\">
                            Catégorie :
                            {% set category = article.categoryStatus %}

                            {% if category.exists %}
                                <span class=\"badge bg-primary\">{{ category.name }}</span>
                            {% else %}
                                <span class=\"badge bg-warning\">
                                    <i class=\"bi bi-exclamation-triangle me-1\"></i>
                                    {{ category.name }}
                                </span>
                            {% endif %}
                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('article_interact', {'id': article.id}) }}\" class=\"comment-btn\">
                            <i class=\"bi bi-chat-dots\"></i>
                        </a>
                        <div class=\"vote-container\">
                            <button class=\"vote-btn like {% if app.user and article.isLikedBy(app.user) %}active{% endif %}\"
                                    data-article-id=\"{{ article.id }}\"
                                    data-vote-type=\"like\"
                                    {{ not app.user ? 'disabled' }}>
                                    <i class=\"bi bi-hand-thumbs-up\"></i> 
                                    <span class=\"vote-count like-count\">{{ article.countLikes() }}</span>
                            </button>
                            <button class=\"vote-btn dislike {% if app.user and article.isDislikedBy(app.user) %}active{% endif %}\"
                                    data-article-id=\"{{ article.id }}\"
                                    data-vote-type=\"dislike\"
                                    {{ not app.user ? 'disabled' }}>
                                    <i class=\"bi bi-hand-thumbs-down\"></i> 
                                    <span class=\"vote-count dislike-count\">{{ article.countDislikes() }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-center\">Aucun article pour le moment.</p>
            </div>
        {% endfor %}
        <div class=\"navigation d-flex justify-content-center\">
            {{ knp_pagination_render(articles, 'pagination/bootstrap_v5.html.twig') }}
        </div>
    </div>
{% endblock %}
", "article/index.html.twig", "/home/eny-fiti/Documents/etech/blog/backend/templates/article/index.html.twig");
    }
}
