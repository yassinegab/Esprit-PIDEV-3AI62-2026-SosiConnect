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

/* emails/donation_confirmation.html.twig */
class __TwigTemplate_482be824a3d298318aaabfd7024c3f68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/donation_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/donation_confirmation.html.twig"));

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

        yield "Confirmation de votre don";
        
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
        yield "<div style=\"text-align: center; padding: 20px 0;\">
    <div style=\"font-size: 60px; margin-bottom: 20px;\">🩸</div>
    <h1 style=\"color: #1a1a2e; font-size: 28px; margin: 0 0 10px 0;\">Confirmation de votre déclaration</h1>
    <p style=\"color: #666; font-size: 16px; margin: 0;\">Bonjour ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recipientName"] ?? null), "html", null, true);
        yield ",</p>
</div>

<div style=\"background: #f8f9fa; border-radius: 12px; padding: 24px; margin: 20px 0;\">
    <p style=\"color: #1a1a2e; font-size: 16px; margin: 0 0 20px 0;\">
        Nous avons bien reçu votre déclaration de don. Merci pour votre générosité !
    </p>
    
    <h2 style=\"color: #1a1a2e; font-size: 20px; margin: 0 0 16px 0;\">Récapitulatif de votre déclaration</h2>
    
    <table style=\"width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden;\">
        <tr>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; color: #666;\">Type de don</td>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">
                ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeDon", [], "any", false, false, false, 23) == "sang")) {
            yield "🩸 Don de Sang";
        } else {
            yield "🫀 Don d'Organe";
        }
        // line 24
        yield "            </td>
        </tr>
        <tr>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; color: #666;\">Région</td>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "region", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; color: #666;\">Date du don</td>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "dateDon", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <td style=\"padding: 14px 16px; color: #666;\">Statut</td>
            <td style=\"padding: 14px 16px; text-align: right;\">
                <span style=\"background: #fef3c7; color: #92400e; padding: 4px 12px; border-radius: 20px; font-weight: 600; font-size: 12px;\">
                    ⏳ En attente de validation
                </span>
            </td>
        </tr>
    </table>
</div>

<div style=\"background: #dbeafe; border-left: 4px solid #3b82f6; padding: 16px; border-radius: 8px; margin: 20px 0;\">
    <p style=\"margin: 0; color: #1e40af; font-size: 14px;\">
        <strong>📋 Prochaine étape :</strong> Notre équipe va examiner votre déclaration. Vous recevrez une notification dès qu'elle sera validée.
    </p>
</div>

<div style=\"text-align: center; margin: 30px 0;\">
    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("don_history");
        yield "\" 
       style=\"display: inline-block; background: linear-gradient(135deg, #3b82f6, #2563eb); color: white; padding: 16px 40px; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 16px;\">
        Voir mon historique
    </a>
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
        return "emails/donation_confirmation.html.twig";
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
        return array (  164 => 52,  141 => 32,  134 => 28,  128 => 24,  122 => 23,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/donation_confirmation.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\emails\\donation_confirmation.html.twig");
    }
}
