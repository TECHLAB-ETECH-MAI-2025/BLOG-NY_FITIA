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

/* chat/conversation.html.twig */
class __TwigTemplate_40f1c275ae89f61b60df6567cbbcc471 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/conversation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/conversation.html.twig"));

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

        yield "Conversation avec ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/conversation.css"), "html", null, true);
        yield "\">
    <style>
      /* Quelques styles en ligne pour la démo, à extraire ensuite dans conversation.css si tu préfères */
      #messages {
        max-height: 400px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        padding: 1rem;
        background: #f8f9fa;
      }
      .message {
        margin-bottom: 0.75rem;
        max-width: 75%;
        word-wrap: break-word;
      }
      .message.sent {
        margin-left: auto;
        background: #d1e7dd;
        padding: 0.5rem 0.75rem;
        border-radius: 0.75rem 0.75rem 0 0.75rem;
      }
      .message.received {
        margin-right: auto;
        background: #ffffff;
        padding: 0.5rem 0.75rem;
        border-radius: 0.75rem 0.75rem 0.75rem 0;
      }
      .message-info {
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: 0.25rem;
        text-align: right;
      }
      /* Header */
      .chat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #dee2e6;
      }
      .chat-header .avatar-image,
      .chat-header .avatar-initials {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
      }
      .chat-header .avatar-initials {
        font-size: 1.25rem;
      }
      .chat-header .user-info h4 {
        margin-bottom: 0;
        font-weight: 600;
      }
      .chat-header .user-status {
        font-size: 0.875rem;
      }
      /* Formulaire */
      #send-message-form .form-group {
        display: flex;
      }
      #send-message-form textarea {
        flex-grow: 1;
        resize: none;
      }
      #send-message-form button {
        width: 48px;
        margin-left: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
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

        // line 86
        yield "    <div class=\"chat-container container py-3\" style=\"max-width: 600px;\">

        ";
        // line 89
        yield "        <div class=\"chat-header\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar-container me-3\">
                    ";
        // line 92
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 92, $this->source); })()), "avatar", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 93, $this->source); })()), "avatar", [], "any", false, false, false, 93))), "html", null, true);
            yield "\"
                             alt=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 94, $this->source); })()), "firstName", [], "any", false, false, false, 94), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 94, $this->source); })()), "lastName", [], "any", false, false, false, 94), "html", null, true);
            yield "\"
                             class=\"avatar-image\">
                    ";
        } else {
            // line 97
            yield "                        <div class=\"avatar-initials d-flex align-items-center justify-content-center bg-primary text-white fw-bold\">
                            ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 98, $this->source); })()), "firstName", [], "any", false, false, false, 98))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 98, $this->source); })()), "lastName", [], "any", false, false, false, 98))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 101
        yield "                </div>
                <div class=\"user-info\">
                    <h4>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 103, $this->source); })()), "firstName", [], "any", false, false, false, 103), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 103, $this->source); })()), "lastName", [], "any", false, false, false, 103), "html", null, true);
        yield "</h4>
                    <div class=\"user-status text-muted\">
                        ";
        // line 105
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 105, $this->source); })()), "isActiveNow", [], "method", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                            <span class=\"text-success\">🟢 En ligne</span>
                        ";
        } else {
            // line 108
            yield "                            <span class=\"text-muted\">🔴 Hors ligne</span>
                            ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 109, $this->source); })()), "lastActivityAt", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                                <small class=\"ms-1 text-muted\">Dernière activité : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 110, $this->source); })()), "lastActivityAt", [], "any", false, false, false, 110), "H:i"), "html", null, true);
                yield "</small>
                            ";
            }
            // line 112
            yield "                        ";
        }
        // line 113
        yield "                    </div>
                </div>
            </div>
            <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat");
        yield "\" class=\"btn-close\" aria-label=\"Fermer la conversation\"></a>
        </div>

        ";
        // line 120
        yield "        <div id=\"messages\">
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 122
            yield "                <div id=\"msg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 122), "html", null, true);
            yield "\"
                     class=\"message ";
            // line 123
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123))) {
                yield "sent";
            } else {
                yield "received";
            }
            yield "\">
                    <div>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 124));
            yield "</div>
                    <div class=\"message-info\">
                        ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 126), "H:i"), "html", null, true);
            yield "
                        ";
            // line 127
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 127), "id", [], "any", false, false, false, 127) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127))) {
                // line 128
                yield "                            ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isRead", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓✓") : ("✓"));
                yield "
                        ";
            }
            // line 130
            yield "                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 132
        if (!$context['_iterated']) {
            // line 133
            yield "                <p class=\"text-center fst-italic text-muted\">Aucun message pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "        </div>

        ";
        // line 138
        yield "        <form id=\"send-message-form\" class=\"mt-3\">
            <input type=\"hidden\" name=\"receiver_id\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "\">
            <div class=\"form-group mb-2\">
                <textarea id=\"message-input\"
                          name=\"content\"
                          required
                          placeholder=\"Tapez votre message...\"
                          rows=\"1\"
                          class=\"form-control shadow-sm\"></textarea>
                <button id=\"send-button\" type=\"submit\" class=\"btn btn-primary shadow-sm\">
                    <i class=\"bi bi-send\"></i>
                </button>
            </div>
        </form>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 156
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

        // line 157
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const messagesContainer = document.getElementById('messages');
        const messageInput      = document.getElementById('message-input');
        const sendButton        = document.getElementById('send-button');
        const sendForm          = document.getElementById('send-message-form');
        const currentUserId     = Number(";
        // line 164
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164));
        yield ");
        const otherUserId       = Number(";
        // line 165
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165));
        yield ");

        /**
         * Ajoute un nouveau message dans le DOM (évite les doublons grâce à l'ID)
         */
        function addMessage(message) {
            if (document.getElementById('msg-' + message.id)) {
                return; // déjà présent
            }

            const div = document.createElement('div');
            div.id = 'msg-' + message.id;
            div.className = 'message ' + (Number(message.sender) === currentUserId ? 'sent' : 'received');
            div.innerHTML = `
                <div>\${message.content}</div>
                <div class=\"message-info\">
                    \${new Date(message.createdAt).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}
                    \${Number(message.sender) === currentUserId ? (message.isRead ? '✓✓' : '✓') : ''}
                </div>
            `;
            messagesContainer.appendChild(div);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        /**
         * Récupère les messages via AJAX (polling)
         */
        function fetchMessages() {
            fetch('";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_get_messages", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
        yield "')
                .then(response => response.json())
                .then(data => {
                    data.forEach(msg => addMessage(msg));
                })
                .catch(err => {
                    console.error('Erreur lors de la récupération des messages :', err);
                });
        }

        /**
         * Soumet le message via AJAX
         */
        sendForm.addEventListener('submit', function(e) {
            e.preventDefault();

            sendButton.disabled = true;
            const formData = new FormData(sendForm);

            fetch('";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_send");
        yield "', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    addMessage(data);
                    messageInput.value = '';
                    messageInput.focus();
                }
                sendButton.disabled = false;
            })
            .catch(err => {
                alert('Erreur lors de l’envoi du message.');
                console.error(err);
                sendButton.disabled = false;
            });
        });

        // Chargement initial des messages + scroll en bas
        fetchMessages();
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

        // Polling : récupération toutes les 5 secondes
        setInterval(fetchMessages, 5000);
    });
    </script>
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
        return "chat/conversation.html.twig";
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
        return array (  452 => 212,  430 => 193,  399 => 165,  395 => 164,  384 => 157,  371 => 156,  344 => 139,  341 => 138,  337 => 135,  330 => 133,  328 => 132,  322 => 130,  316 => 128,  314 => 127,  310 => 126,  305 => 124,  297 => 123,  292 => 122,  287 => 121,  284 => 120,  278 => 116,  273 => 113,  270 => 112,  264 => 110,  262 => 109,  259 => 108,  255 => 106,  253 => 105,  246 => 103,  242 => 101,  235 => 98,  232 => 97,  224 => 94,  219 => 93,  217 => 92,  212 => 89,  208 => 86,  195 => 85,  108 => 8,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/chat/conversation.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Conversation avec {{ otherUser.email }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/conversation.css') }}\">
    <style>
      /* Quelques styles en ligne pour la démo, à extraire ensuite dans conversation.css si tu préfères */
      #messages {
        max-height: 400px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        padding: 1rem;
        background: #f8f9fa;
      }
      .message {
        margin-bottom: 0.75rem;
        max-width: 75%;
        word-wrap: break-word;
      }
      .message.sent {
        margin-left: auto;
        background: #d1e7dd;
        padding: 0.5rem 0.75rem;
        border-radius: 0.75rem 0.75rem 0 0.75rem;
      }
      .message.received {
        margin-right: auto;
        background: #ffffff;
        padding: 0.5rem 0.75rem;
        border-radius: 0.75rem 0.75rem 0.75rem 0;
      }
      .message-info {
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: 0.25rem;
        text-align: right;
      }
      /* Header */
      .chat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #dee2e6;
      }
      .chat-header .avatar-image,
      .chat-header .avatar-initials {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
      }
      .chat-header .avatar-initials {
        font-size: 1.25rem;
      }
      .chat-header .user-info h4 {
        margin-bottom: 0;
        font-weight: 600;
      }
      .chat-header .user-status {
        font-size: 0.875rem;
      }
      /* Formulaire */
      #send-message-form .form-group {
        display: flex;
      }
      #send-message-form textarea {
        flex-grow: 1;
        resize: none;
      }
      #send-message-form button {
        width: 48px;
        margin-left: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    </style>
{% endblock %}

{% block body %}
    <div class=\"chat-container container py-3\" style=\"max-width: 600px;\">

        {# --- Header (avatar + nom + statut) --- #}
        <div class=\"chat-header\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar-container me-3\">
                    {% if otherUser.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ otherUser.avatar) }}\"
                             alt=\"{{ otherUser.firstName }} {{ otherUser.lastName }}\"
                             class=\"avatar-image\">
                    {% else %}
                        <div class=\"avatar-initials d-flex align-items-center justify-content-center bg-primary text-white fw-bold\">
                            {{ otherUser.firstName|first|upper }}{{ otherUser.lastName|first|upper }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"user-info\">
                    <h4>{{ otherUser.firstName }} {{ otherUser.lastName }}</h4>
                    <div class=\"user-status text-muted\">
                        {% if otherUser.isActiveNow() %}
                            <span class=\"text-success\">🟢 En ligne</span>
                        {% else %}
                            <span class=\"text-muted\">🔴 Hors ligne</span>
                            {% if otherUser.lastActivityAt %}
                                <small class=\"ms-1 text-muted\">Dernière activité : {{ otherUser.lastActivityAt|date('H:i') }}</small>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>
            <a href=\"{{ path('app_chat') }}\" class=\"btn-close\" aria-label=\"Fermer la conversation\"></a>
        </div>

        {# --- Zone des messages --- #}
        <div id=\"messages\">
            {% for message in messages %}
                <div id=\"msg-{{ message.id }}\"
                     class=\"message {% if message.sender.id == currentUser.id %}sent{% else %}received{% endif %}\">
                    <div>{{ message.content|e }}</div>
                    <div class=\"message-info\">
                        {{ message.createdAt|date('H:i') }}
                        {% if message.sender.id == currentUser.id %}
                            {{ message.isRead ? '✓✓' : '✓' }}
                        {% endif %}
                    </div>
                </div>
            {% else %}
                <p class=\"text-center fst-italic text-muted\">Aucun message pour le moment.</p>
            {% endfor %}
        </div>

        {# --- Formulaire d'envoi --- #}
        <form id=\"send-message-form\" class=\"mt-3\">
            <input type=\"hidden\" name=\"receiver_id\" value=\"{{ otherUser.id }}\">
            <div class=\"form-group mb-2\">
                <textarea id=\"message-input\"
                          name=\"content\"
                          required
                          placeholder=\"Tapez votre message...\"
                          rows=\"1\"
                          class=\"form-control shadow-sm\"></textarea>
                <button id=\"send-button\" type=\"submit\" class=\"btn btn-primary shadow-sm\">
                    <i class=\"bi bi-send\"></i>
                </button>
            </div>
        </form>

    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const messagesContainer = document.getElementById('messages');
        const messageInput      = document.getElementById('message-input');
        const sendButton        = document.getElementById('send-button');
        const sendForm          = document.getElementById('send-message-form');
        const currentUserId     = Number({{ currentUser.id|json_encode|raw }});
        const otherUserId       = Number({{ otherUser.id|json_encode|raw }});

        /**
         * Ajoute un nouveau message dans le DOM (évite les doublons grâce à l'ID)
         */
        function addMessage(message) {
            if (document.getElementById('msg-' + message.id)) {
                return; // déjà présent
            }

            const div = document.createElement('div');
            div.id = 'msg-' + message.id;
            div.className = 'message ' + (Number(message.sender) === currentUserId ? 'sent' : 'received');
            div.innerHTML = `
                <div>\${message.content}</div>
                <div class=\"message-info\">
                    \${new Date(message.createdAt).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}
                    \${Number(message.sender) === currentUserId ? (message.isRead ? '✓✓' : '✓') : ''}
                </div>
            `;
            messagesContainer.appendChild(div);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        /**
         * Récupère les messages via AJAX (polling)
         */
        function fetchMessages() {
            fetch('{{ path('chat_get_messages', {'id': otherUser.id}) }}')
                .then(response => response.json())
                .then(data => {
                    data.forEach(msg => addMessage(msg));
                })
                .catch(err => {
                    console.error('Erreur lors de la récupération des messages :', err);
                });
        }

        /**
         * Soumet le message via AJAX
         */
        sendForm.addEventListener('submit', function(e) {
            e.preventDefault();

            sendButton.disabled = true;
            const formData = new FormData(sendForm);

            fetch('{{ path('chat_send') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    addMessage(data);
                    messageInput.value = '';
                    messageInput.focus();
                }
                sendButton.disabled = false;
            })
            .catch(err => {
                alert('Erreur lors de l’envoi du message.');
                console.error(err);
                sendButton.disabled = false;
            });
        });

        // Chargement initial des messages + scroll en bas
        fetchMessages();
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

        // Polling : récupération toutes les 5 secondes
        setInterval(fetchMessages, 5000);
    });
    </script>
{% endblock %}", "chat/conversation.html.twig", "/home/eny-fiti/Documents/etech/blog/back/templates/chat/conversation.html.twig");
    }
}
