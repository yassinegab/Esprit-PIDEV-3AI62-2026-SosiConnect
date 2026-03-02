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

/* emails/donor_match.html.twig */
class __TwigTemplate_b570916f85965136313664daef3330eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/donor_match.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/donor_match.html.twig"));

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

        yield "Match trouvé !";
        
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
    <div style=\"font-size: 60px; margin-bottom: 20px;\">🎯</div>
    <h1 style=\"color: #1a1a2e; font-size: 28px; margin: 0 0 10px 0;\">Une demande correspond à votre profil !</h1>
    <p style=\"color: #666; font-size: 16px; margin: 0;\">Bonjour ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donor"] ?? null), "prenom", [], "any", false, false, false, 9), "html", null, true);
        yield ",</p>
</div>

<div style=\"background: #f8f9fa; border-radius: 12px; padding: 24px; margin: 20px 0;\">
    <h2 style=\"color: #1a1a2e; font-size: 20px; margin: 0 0 16px 0;\">Détails de la demande</h2>
    
    <table style=\"width: 100%; border-collapse: collapse;\">
        <tr>
            <td style=\"padding: 12px 0; border-bottom: 1px solid #eee; color: #666;\">Type de don</td>
            <td style=\"padding: 12px 0; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">
                ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 19) == "sang")) {
            yield "🩸 Don de Sang";
        } else {
            yield "🫀 Don d'Organe";
        }
        // line 20
        yield "            </td>
        </tr>
        <tr>
            <td style=\"padding: 12px 0; border-bottom: 1px solid #eee; color: #666;\">Région</td>
            <td style=\"padding: 12px 0; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "region", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
        </tr>
        ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "        <tr>
            <td style=\"padding: 12px 0; border-bottom: 1px solid #eee; color: #666;\">Groupe sanguin requis</td>
            <td style=\"padding: 12px 0; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #dc2626;\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
        </tr>
        ";
        }
        // line 32
        yield "        <tr>
            <td style=\"padding: 12px 0; color: #666;\">Score de compatibilité</td>
            <td style=\"padding: 12px 0; text-align: right; font-weight: 700; color: #16a34a; font-size: 20px;\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["matchScore"] ?? null), "html", null, true);
        yield "%</td>
        </tr>
    </table>
</div>

<div style=\"text-align: center; margin: 30px 0;\">
    <p style=\"color: #666; margin-bottom: 20px;\">Vous êtes compatible avec cette demande de don. Votre générosité peut sauver des vies.</p>
    
    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("donneur_inscription");
        yield "\" 
       style=\"display: inline-block; background: linear-gradient(135deg, #dc2626, #ef4444); color: white; padding: 16px 40px; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 16px;\">
        Répondre à cette demande
    </a>
</div>

<div style=\"background: #fef3c7; border-left: 4px solid #f59e0b; padding: 16px; border-radius: 8px; margin: 20px 0;\">
    <p style=\"margin: 0; color: #92400e; font-size: 14px;\">
        <strong>💡 Rappel :</strong> Assurez-vous d'être en bonne santé et disponible avant de vous engager.
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
        return "emails/donor_match.html.twig";
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
        return array (  162 => 42,  151 => 34,  147 => 32,  141 => 29,  137 => 27,  135 => 26,  130 => 24,  124 => 20,  118 => 19,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/donor_match.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\emails\\donor_match.html.twig");
    }
}
