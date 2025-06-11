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

    // line 84
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

        // line 85
        yield "    <div class=\"chat-container container py-3\" style=\"max-width: 600px;\">

        ";
        // line 88
        yield "        <div class=\"chat-header\">
            <div class=\"d-flex align-items-center\">
                <div class=\"avatar-container me-3\">
                    ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 91, $this->source); })()), "avatar", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 92, $this->source); })()), "avatar", [], "any", false, false, false, 92))), "html", null, true);
            yield "\"
                             alt=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 93, $this->source); })()), "firstName", [], "any", false, false, false, 93), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 93, $this->source); })()), "lastName", [], "any", false, false, false, 93), "html", null, true);
            yield "\"
                             class=\"avatar-image\">
                    ";
        } else {
            // line 96
            yield "                        <div class=\"avatar-initials d-flex align-items-center justify-content-center bg-primary text-white fw-bold\">
                            ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 97, $this->source); })()), "firstName", [], "any", false, false, false, 97))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 97, $this->source); })()), "lastName", [], "any", false, false, false, 97))), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 100
        yield "                </div>
                <div class=\"user-info\">
                    <h4>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 102, $this->source); })()), "firstName", [], "any", false, false, false, 102), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 102, $this->source); })()), "lastName", [], "any", false, false, false, 102), "html", null, true);
        yield "</h4>
                    <div class=\"user-status text-muted\">
                        ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 104, $this->source); })()), "isActiveNow", [], "method", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                            <span class=\"text-success\">🟢 En ligne</span>
                        ";
        } else {
            // line 107
            yield "                            <span class=\"text-muted\">🔴 Hors ligne</span>
                            ";
            // line 108
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 108, $this->source); })()), "lastActivityAt", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                                <small class=\"ms-1 text-muted\">Dernière activité : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 109, $this->source); })()), "lastActivityAt", [], "any", false, false, false, 109), "H:i"), "html", null, true);
                yield "</small>
                            ";
            }
            // line 111
            yield "                        ";
        }
        // line 112
        yield "                    </div>
                </div>
            </div>
            <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat");
        yield "\" class=\"btn-close\" aria-label=\"Fermer la conversation\"></a>
        </div>

        ";
        // line 119
        yield "        <div id=\"messages\">
            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 120, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 121
            yield "                <div id=\"msg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 121), "html", null, true);
            yield "\"
                     class=\"message ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122))) {
                yield "sent";
            } else {
                yield "received";
            }
            yield "\">
                    <div>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 123));
            yield "</div>
                    <div class=\"message-info\">
                        ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 125), "H:i"), "html", null, true);
            yield "
                        ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126))) {
                // line 127
                yield "                            ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isRead", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓✓") : ("✓"));
                yield "
                        ";
            }
            // line 129
            yield "                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 131
        if (!$context['_iterated']) {
            // line 132
            yield "                <p class=\"text-center fst-italic text-muted\">Aucun message pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "        </div>

        ";
        // line 137
        yield "        <form id=\"send-message-form\" class=\"mt-3\">
            <input type=\"hidden\" name=\"receiver_id\" value=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
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

    // line 155
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

        // line 156
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
        // line 163
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163));
        yield ");
        const otherUserId       = Number(";
        // line 164
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164));
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
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_get_messages", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192)]), "html", null, true);
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
        // line 211
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
        return array (  451 => 211,  429 => 192,  398 => 164,  394 => 163,  383 => 156,  370 => 155,  343 => 138,  340 => 137,  336 => 134,  329 => 132,  327 => 131,  321 => 129,  315 => 127,  313 => 126,  309 => 125,  304 => 123,  296 => 122,  291 => 121,  286 => 120,  283 => 119,  277 => 115,  272 => 112,  269 => 111,  263 => 109,  261 => 108,  258 => 107,  254 => 105,  252 => 104,  245 => 102,  241 => 100,  234 => 97,  231 => 96,  223 => 93,  218 => 92,  216 => 91,  211 => 88,  207 => 85,  194 => 84,  108 => 8,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
{% endblock %}", "chat/conversation.html.twig", "/home/eny-fiti/Documents/etech/blog/backend/templates/chat/conversation.html.twig");
    }
}
