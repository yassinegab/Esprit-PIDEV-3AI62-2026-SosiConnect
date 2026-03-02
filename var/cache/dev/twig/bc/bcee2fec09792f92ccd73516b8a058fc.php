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

/* emails/reminder.html.twig */
class __TwigTemplate_488a67c691ce3374214c1804da5b86f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reminder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reminder.html.twig"));

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

        yield "Rappel";
        
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
    <div style=\"font-size: 60px; margin-bottom: 20px;\">🔔</div>
    <h1 style=\"color: #1a1a2e; font-size: 28px; margin: 0 0 10px 0;\">
        ";
        // line 9
        if ((($context["type"] ?? null) == "donation_eligible")) {
            yield "Vous êtes éligible pour un nouveau don !";
        } else {
            yield "Complétez votre profil";
        }
        // line 10
        yield "    </h1>
    <p style=\"color: #666; font-size: 16px; margin: 0;\">Bonjour ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donor"] ?? null), "prenom", [], "any", false, false, false, 11), "html", null, true);
        yield ",</p>
</div>

";
        // line 14
        if ((($context["type"] ?? null) == "donation_eligible")) {
            // line 15
            yield "<div style=\"background: #dcfce7; border-radius: 12px; padding: 24px; margin: 20px 0;\">
    <div style=\"text-align: center; margin-bottom: 16px;\">
        <span style=\"font-size: 48px;\">✅</span>
    </div>
    <h2 style=\"color: #166534; font-size: 20px; margin: 0 0 12px 0; text-align: center;\">Vous pouvez donner à nouveau !</h2>
    <p style=\"color: #166534; font-size: 15px; margin: 0; text-align: center;\">
        Cela fait plus de 3 mois depuis votre dernier don. Vous êtes désormais éligible pour un nouveau don de sang.
    </p>
</div>

<div style=\"text-align: center; margin: 30px 0;\">
    <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("don_new");
            yield "\" 
       style=\"display: inline-block; background: linear-gradient(135deg, #dc2626, #b91c1c); color: white; padding: 18px 50px; text-decoration: none; border-radius: 8px; font-weight: 700; font-size: 18px; box-shadow: 0 4px 14px rgba(220, 38, 38, 0.4);\">
        🩸 Déclarer un nouveau don
    </a>
</div>

<div style=\"background: #f8f9fa; border-radius: 12px; padding: 24px; margin: 20px 0;\">
    <h3 style=\"color: #1a1a2e; font-size: 18px; margin: 0 0 12px 0;\">Votre profil</h3>
    <table style=\"width: 100%; border-collapse: collapse;\">
        <tr>
            <td style=\"padding: 10px 0; color: #666;\">Groupe sanguin</td>
            <td style=\"padding: 10px 0; text-align: right; font-weight: 600; color: #dc2626;\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donor"] ?? null), "groupeSanguin", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
        </tr>
        <tr>
            <td style=\"padding: 10px 0; color: #666;\">Âge</td>
            <td style=\"padding: 10px 0; text-align: right; font-weight: 600; color: #1a1a2e;\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donor"] ?? null), "age", [], "any", false, false, false, 41), "html", null, true);
            yield " ans</td>
        </tr>
    </table>
</div>
";
        } else {
            // line 46
            yield "<div style=\"background: #fef3c7; border-radius: 12px; padding: 24px; margin: 20px 0;\">
    <div style=\"text-align: center; margin-bottom: 16px;\">
        <span style=\"font-size: 48px;\">📝</span>
    </div>
    <h2 style=\"color: #92400e; font-size: 20px; margin: 0 0 12px 0; text-align: center;\">Complétez votre profil donneur</h2>
    <p style=\"color: #92400e; font-size: 15px; margin: 0; text-align: center;\">
        Un profil complet nous permet de mieux vous correspondre avec les demandes de don.
    </p>
</div>

<div style=\"text-align: center; margin: 30px 0;\">
    <a href=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("donneur_inscription");
            yield "\" 
       style=\"display: inline-block; background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 18px 50px; text-decoration: none; border-radius: 8px; font-weight: 700; font-size: 18px;\">
        Compléter mon profil
    </a>
</div>
";
        }
        // line 63
        yield "
<div style=\"background: #dbeafe; border-left: 4px solid #3b82f6; padding: 16px; border-radius: 8px; margin: 20px 0;\">
    <p style=\"margin: 0; color: #1e40af; font-size: 14px;\">
        <strong>💡 Le saviez-vous ?</strong> Un seul don de sang peut sauver jusqu'à 3 vies. Votre générosité fait la différence !
    </p>
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
        return "emails/reminder.html.twig";
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
        return array (  186 => 63,  177 => 57,  164 => 46,  156 => 41,  149 => 37,  135 => 26,  122 => 15,  120 => 14,  114 => 11,  111 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/reminder.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\emails\\reminder.html.twig");
    }
}
