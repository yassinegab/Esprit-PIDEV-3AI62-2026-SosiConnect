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

/* emails/urgence_notification.html.twig */
class __TwigTemplate_c58fd9de99d1800e5f1a13b24af02855 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/urgence_notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/urgence_notification.html.twig"));

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

        yield "🚨 Alerte Urgence";
        
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
    <div style=\"width: 80px; height: 80px; background: linear-gradient(135deg, #dc2626, #ef4444); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px; animation: pulse 1s infinite;\">
        🚨
    </div>
    <h2 style=\"color: #dc2626; margin-bottom: 10px;\">ALERTE URGENCE</h2>
    <p style=\"color: #6b7280;\">Bonjour ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contactName"] ?? null), "html", null, true);
        yield ", une urgence a été déclenchée !</p>
</div>

<div style=\"background: #fef2f2; border: 2px solid #dc2626; border-radius: 12px; padding: 24px; margin-bottom: 24px;\">
    <h3 style=\"color: #dc2626; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;\">
        📍 Localisation
    </h3>
    <p style=\"margin-bottom: 16px; color: #374151;\">
        Une personne a besoin d'aide à cet emplacement :
    </p>
    <a href=\"https://maps.google.com/?q=";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "latitude", [], "any", false, false, false, 21), "html", null, true);
        yield ",";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "longitude", [], "any", false, false, false, 21), "html", null, true);
        yield "\" 
       style=\"display: block; background: #dc2626; color: white; padding: 16px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: bold; font-size: 16px;\">
        🗺️ Voir sur Google Maps
    </a>
    <p style=\"margin-top: 12px; text-align: center; color: #6b7280; font-size: 14px;\">
        Coordonnées: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "latitude", [], "any", false, false, false, 26), 6), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "longitude", [], "any", false, false, false, 26), 6), "html", null, true);
        yield "
    </p>
</div>

<div style=\"background: #f8fafc; border-radius: 12px; padding: 24px; margin-bottom: 24px;\">
    <h3 style=\"color: #374151; margin-bottom: 16px;\">📋 Détails</h3>
    <p style=\"margin-bottom: 8px;\"><strong>📅 Date:</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "dateUrgence", [], "any", false, false, false, 32), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
    <p style=\"margin-bottom: 8px;\"><strong>📊 Statut:</strong> 
        <span style=\"background: #fef3c7; color: #92400e; padding: 4px 12px; border-radius: 20px; font-size: 14px;\">
            ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "statut", [], "any", false, false, false, 35), "html", null, true);
        yield "
        </span>
    </p>
    ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "message", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    <p style=\"margin-top: 16px;\"><strong>💬 Message:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["urgence"] ?? null), "message", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
    ";
        }
        // line 41
        yield "</div>

<div style=\"background: linear-gradient(135deg, #fef3c7, #fde68a); border-radius: 12px; padding: 24px; margin-bottom: 24px; border-left: 4px solid #f59e0b;\">
    <h3 style=\"color: #92400e; margin-bottom: 12px;\">⚠️ Instructions</h3>
    <ul style=\"color: #78350f; margin: 0; padding-left: 20px;\">
        <li style=\"margin-bottom: 8px;\">Réagissez rapidement si vous êtes à proximité</li>
        <li style=\"margin-bottom: 8px;\">Contactez les services d'urgence si nécessaire</li>
        <li style=\"margin-bottom: 8px;\">Partagez cette localisation avec d'autres personnes</li>
    </ul>
</div>

<div style=\"text-align: center;\">
    <p style=\"color: #dc2626; font-weight: bold; font-size: 18px;\">
        🆘 Merci de réagir rapidement !
    </p>
</div>

<style>
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
</style>
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
        return "emails/urgence_notification.html.twig";
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
        return array (  161 => 41,  155 => 39,  153 => 38,  147 => 35,  141 => 32,  130 => 26,  120 => 21,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/urgence_notification.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\emails\\urgence_notification.html.twig");
    }
}
