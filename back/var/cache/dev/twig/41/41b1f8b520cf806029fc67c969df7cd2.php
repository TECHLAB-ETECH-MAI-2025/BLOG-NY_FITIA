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

/* reset_password/email.html.twig */
class __TwigTemplate_5d29da78d5d42a1ee76b5547d02cf278 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        yield "<p>Bonjour,</p>

<p>Vous avez demandé une réinitialisation de mot de passe. Cliquez sur le lien ci-dessous :</p>

<p>
    <a href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetTokenUrl"]) || array_key_exists("resetTokenUrl", $context) ? $context["resetTokenUrl"] : (function () { throw new RuntimeError('Variable "resetTokenUrl" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
        Réinitialiser mon mot de passe
    </a>
</p>

<p>Si vous n'êtes pas à l'origine de cette demande, ignorez cet e-mail.</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/email.html.twig";
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
        return array (  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<p>Bonjour,</p>

<p>Vous avez demandé une réinitialisation de mot de passe. Cliquez sur le lien ci-dessous :</p>

<p>
    <a href=\"{{ resetTokenUrl }}\">
        Réinitialiser mon mot de passe
    </a>
</p>

<p>Si vous n'êtes pas à l'origine de cette demande, ignorez cet e-mail.</p>
", "reset_password/email.html.twig", "/home/eny-fiti/Documents/etech/blog/back/templates/reset_password/email.html.twig");
    }
}
