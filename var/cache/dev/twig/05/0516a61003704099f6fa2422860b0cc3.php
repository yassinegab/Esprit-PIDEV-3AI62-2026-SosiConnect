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

/* emails/response_notification.html.twig */
class __TwigTemplate_a04b40373ffedfe66a0c6461f2b5b57c extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "emails/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/response_notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/response_notification.html.twig"));

        $this->parent = $this->load("emails/base.html.twig", 1);
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

        yield "Nouvelle réponse à votre demande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div style=\"text-align: center; margin-bottom: 30px;\">
    <div style=\"width: 80px; height: 80px; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px;\">
        🤝
    </div>
    <h2 style=\"color: #1f2937; margin-bottom: 10px;\">Quelqu'un veut vous aider !</h2>
    <p style=\"color: #6b7280;\">Une personne a répondu à votre demande de don</p>
</div>

<div style=\"background: #f8fafc; border-radius: 12px; padding: 24px; margin-bottom: 24px;\">
    <h3 style=\"color: #374151; margin-bottom: 16px;\">📋 Détails de votre demande</h3>
    <p style=\"margin-bottom: 8px;\"><strong>Type:</strong> ";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 16) == "sang")) ? ("🩸 Don de sang") : ("🫀 Don d'organe"));
        yield "</p>
    ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "        <p style=\"margin-bottom: 8px;\"><strong>Groupe sanguin:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
    ";
        }
        // line 20
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeOrgane", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "        <p style=\"margin-bottom: 8px;\"><strong>Organe:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeOrgane", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
    ";
        }
        // line 23
        yield "    <p style=\"margin-bottom: 8px;\"><strong>Région:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "region", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
</div>

<div style=\"background: linear-gradient(135deg, #ecfdf5, #d1fae5); border-radius: 12px; padding: 24px; margin-bottom: 24px; border-left: 4px solid #10b981;\">
    <h3 style=\"color: #065f46; margin-bottom: 16px;\">👤 Informations du donneur</h3>
    <p style=\"margin-bottom: 8px;\"><strong>Nom:</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "donneurNom", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
    <p style=\"margin-bottom: 8px;\"><strong>Email:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "donneurEmail", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
    <p style=\"margin-bottom: 8px;\"><strong>Téléphone:</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "donneurTelephone", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
    ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "donneurGroupeSanguin", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "        <p style=\"margin-bottom: 8px;\"><strong>Groupe sanguin:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "donneurGroupeSanguin", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
    ";
        }
        // line 34
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "message", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "        <p style=\"margin-top: 16px; padding-top: 16px; border-top: 1px solid #a7f3d0;\"><strong>Message:</strong><br><em>\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "message", [], "any", false, false, false, 35), "html", null, true);
            yield "\"</em></p>
    ";
        }
        // line 37
        yield "</div>

<div style=\"text-align: center;\">
    <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("demande_don_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" 
       style=\"display: inline-block; background: linear-gradient(135deg, #10b981, #059669); color: white; padding: 14px 32px; border-radius: 10px; text-decoration: none; font-weight: 600;\">
        Voir les détails →
    </a>
</div>

<p style=\"text-align: center; color: #9ca3af; font-size: 14px; margin-top: 24px;\">
    💡 Conseil : Contactez rapidement le donneur pour confirmer les détails.
</p>
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
        return "emails/response_notification.html.twig";
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
        return array (  176 => 40,  171 => 37,  165 => 35,  162 => 34,  156 => 32,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  133 => 23,  127 => 21,  124 => 20,  118 => 18,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/response_notification.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\emails\\response_notification.html.twig");
    }
}
