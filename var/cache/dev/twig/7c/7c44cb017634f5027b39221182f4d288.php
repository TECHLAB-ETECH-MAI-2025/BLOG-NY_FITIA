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
    <style>
        h1 {
            background-color:rgb(16, 44, 71);
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

        .vote-container {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .vote-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .vote-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .vote-btn.like.active {
            color: #4CAF50;
            background-color: #e8f5e9;
        }

        .vote-btn.dislike.active {
            color: #f44336;
            background-color: #ffebee;
        }

        .vote-count {
            font-size: 0.9rem;
            min-width: 20px;
            text-align: center;
        }

        .comment-btn {
            color: rgb(2, 25, 46);
            transition: color 0.3s;
        }

        .comment-btn:hover {
            color: #0d6efd;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 127
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

        // line 128
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const voteButtons = document.querySelectorAll('.vote-btn');
            
            voteButtons.forEach(button => {
                button.addEventListener('click', async function(e) {
                    e.preventDefault();
                    
                    if (button.disabled) {
                        const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                        modal.show();
                        return;
                    }

                    const articleId = button.dataset.articleId;
                    const voteType = button.dataset.voteType;
                    const isActive = button.classList.contains('active');
                    
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

                        // Update UI
                        const voteContainer = button.closest('.vote-container');
                        const likeBtn = voteContainer.querySelector('.vote-btn.like');
                        const dislikeBtn = voteContainer.querySelector('.vote-btn.dislike');
                        
                        // Update counts
                        likeBtn.querySelector('.like-count').textContent = data.likes;
                        dislikeBtn.querySelector('.dislike-count').textContent = data.dislikes;
                        
                        // Update active states
                        likeBtn.classList.toggle('active', data.userVote === 1);
                        dislikeBtn.classList.toggle('active', data.userVote === -1);

                    } catch (error) {
                        console.error('Vote error:', error);
                        if (error.message === 'Unauthorized') {
                            const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                            modal.show();
                        } else {
                            alert('An error occurred: ' + error.message);
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

    // line 196
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

        // line 197
        yield "    <div class=\"container\">
        <h1>Mon Blog</h1>
        <br>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
        ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 201, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 202
            yield "        <div style=\"position: fixed; bottom: 0; background: white; padding: 10px; z-index: 1000;\">
            Statut connexion : ";
            // line 203
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("CONNECTÉ (" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "email", [], "any", false, false, false, 203)) . ")"), "html", null, true)) : ("NON CONNECTÉ"));
            yield "
            <br>Token session : ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "session", [], "any", false, false, false, 204), "get", ["_security_main"], "method", false, false, false, 204), 0, 20) . "..."), "html", null, true);
            yield "
        </div>
            <div class=\"col\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <h5>";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 209), "html", null, true);
            yield "</h5>
                        <small class=\"text-body-secondary\">Publié le : ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 210), "Y-m-d"), "html", null, true);
            yield "</small>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 213), "html", null, true);
            yield "</p>
                        <p class=\"text-muted\">
                            Catégorie :
                            ";
            // line 216
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 217
                yield "                            ";
            } else {
                // line 218
                yield "                                <span class=\"text-muted\">Aucune catégorie</span>
                            ";
            }
            // line 220
            yield "                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_interact", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 223)]), "html", null, true);
            yield "\" class=\"comment-btn\">
                            <i class=\"bi bi-chat-dots\"></i>
                        </a>
                        <div class=\"vote-container\">
                            <button class=\"vote-btn like ";
            // line 227
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "user", [], "any", false, false, false, 227) && CoreExtension::getAttribute($this->env, $this->source, $context["article"], "isLikedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "user", [], "any", false, false, false, 227)], "method", false, false, false, 227))) {
                yield "active";
            }
            yield "\"
                                    data-article-id=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 228), "html", null, true);
            yield "\"
                                    data-vote-type=\"like\"
                                    ";
            // line 230
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield ">
                                    <i class=\"bi bi-hand-thumbs-up\"></i> 
                                    <span class=\"vote-count like-count\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "countLikes", [], "method", false, false, false, 232), "html", null, true);
            yield "</span>
                            </button>
                            <button class=\"vote-btn dislike ";
            // line 234
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "user", [], "any", false, false, false, 234) && CoreExtension::getAttribute($this->env, $this->source, $context["article"], "isDislikedBy", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "user", [], "any", false, false, false, 234)], "method", false, false, false, 234))) {
                yield "active";
            }
            yield "\"
                                    data-article-id=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 235), "html", null, true);
            yield "\"
                                    data-vote-type=\"dislike\"
                                    ";
            // line 237
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield ">
                                    <i class=\"bi bi-hand-thumbs-down\"></i> 
                                    <span class=\"vote-count dislike-count\">";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "countDislikes", [], "method", false, false, false, 239), "html", null, true);
            yield "</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 245
        if (!$context['_iterated']) {
            // line 246
            yield "            <div class=\"col-12\">
                <p class=\"text-center\">Aucun article pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "        </div>
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
        return array (  460 => 250,  451 => 246,  449 => 245,  438 => 239,  433 => 237,  428 => 235,  422 => 234,  417 => 232,  412 => 230,  407 => 228,  401 => 227,  394 => 223,  389 => 220,  385 => 218,  382 => 217,  380 => 216,  374 => 213,  368 => 210,  364 => 209,  356 => 204,  352 => 203,  349 => 202,  344 => 201,  338 => 197,  325 => 196,  246 => 128,  233 => 127,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/article/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        h1 {
            background-color:rgb(16, 44, 71);
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

        .vote-container {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .vote-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .vote-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .vote-btn.like.active {
            color: #4CAF50;
            background-color: #e8f5e9;
        }

        .vote-btn.dislike.active {
            color: #f44336;
            background-color: #ffebee;
        }

        .vote-count {
            font-size: 0.9rem;
            min-width: 20px;
            text-align: center;
        }

        .comment-btn {
            color: rgb(2, 25, 46);
            transition: color 0.3s;
        }

        .comment-btn:hover {
            color: #0d6efd;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const voteButtons = document.querySelectorAll('.vote-btn');
            
            voteButtons.forEach(button => {
                button.addEventListener('click', async function(e) {
                    e.preventDefault();
                    
                    if (button.disabled) {
                        const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                        modal.show();
                        return;
                    }

                    const articleId = button.dataset.articleId;
                    const voteType = button.dataset.voteType;
                    const isActive = button.classList.contains('active');
                    
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

                        // Update UI
                        const voteContainer = button.closest('.vote-container');
                        const likeBtn = voteContainer.querySelector('.vote-btn.like');
                        const dislikeBtn = voteContainer.querySelector('.vote-btn.dislike');
                        
                        // Update counts
                        likeBtn.querySelector('.like-count').textContent = data.likes;
                        dislikeBtn.querySelector('.dislike-count').textContent = data.dislikes;
                        
                        // Update active states
                        likeBtn.classList.toggle('active', data.userVote === 1);
                        dislikeBtn.classList.toggle('active', data.userVote === -1);

                    } catch (error) {
                        console.error('Vote error:', error);
                        if (error.message === 'Unauthorized') {
                            const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                            modal.show();
                        } else {
                            alert('An error occurred: ' + error.message);
                        }
                    }
                });
            });
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Mon Blog</h1>
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
                            {% if article.category %}
                            {% else %}
                                <span class=\"text-muted\">Aucune catégorie</span>
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
        </div>
    </div>
{% endblock %}", "article/index.html.twig", "/home/eny-fiti/Documents/etech/blog/templates/article/index.html.twig");
    }
}
