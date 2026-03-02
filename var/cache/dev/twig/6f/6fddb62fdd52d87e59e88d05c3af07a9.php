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

/* emails/urgent_request.html.twig */
class __TwigTemplate_a1561937610cfb938722e71fe80c6b59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/urgent_request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/urgent_request.html.twig"));

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

        yield "Demande Urgente";
        
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
    <div style=\"font-size: 60px; margin-bottom: 20px; animation: pulse 1s infinite;\">🚨</div>
    <h1 style=\"color: #dc2626; font-size: 28px; margin: 0 0 10px 0;\">URGENT : Votre don peut sauver une vie !</h1>
    <p style=\"color: #666; font-size: 16px; margin: 0;\">Bonjour ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donor"] ?? null), "prenom", [], "any", false, false, false, 9), "html", null, true);
        yield ",</p>
</div>

<div style=\"background: linear-gradient(135deg, #fef2f2, #fee2e2); border: 2px solid #dc2626; border-radius: 12px; padding: 24px; margin: 20px 0;\">
    <div style=\"text-align: center; margin-bottom: 16px;\">
        <span style=\"background: #dc2626; color: white; padding: 8px 20px; border-radius: 20px; font-weight: bold; font-size: 14px;\">
            ⚡ DEMANDE URGENTE
        </span>
    </div>
    
    <h2 style=\"color: #1a1a2e; font-size: 20px; margin: 0 0 16px 0; text-align: center;\">Un patient a besoin de votre aide immédiatement</h2>
    
    <table style=\"width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden;\">
        <tr>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; color: #666; width: 50%;\">Type de don</td>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">
                ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 25) == "sang")) {
            yield "🩸 Don de Sang";
        } else {
            yield "🫀 Don d'Organe";
        }
        // line 26
        yield "            </td>
        </tr>
        <tr>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; color: #666;\">Localisation</td>
            <td style=\"padding: 14px 16px; border-bottom: 1px solid #eee; text-align: right; font-weight: 600; color: #1a1a2e;\">📍 ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "region", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
        </tr>
        ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        <tr>
            <td style=\"padding: 14px 16px; color: #666;\">Groupe sanguin</td>
            <td style=\"padding: 14px 16px; text-align: right; font-weight: 700; color: #dc2626; font-size: 18px;\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
        </tr>
        ";
        }
        // line 38
        yield "    </table>
</div>

<div style=\"text-align: center; margin: 30px 0;\">
    <p style=\"color: #666; margin-bottom: 20px; font-size: 15px;\">Votre score de compatibilité : <strong style=\"color: #16a34a; font-size: 18px;\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["matchScore"] ?? null), "html", null, true);
        yield "%</strong></p>
    
    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("donneur_inscription");
        yield "\" 
       style=\"display: inline-block; background: linear-gradient(135deg, #dc2626, #b91c1c); color: white; padding: 18px 50px; text-decoration: none; border-radius: 8px; font-weight: 700; font-size: 18px; box-shadow: 0 4px 14px rgba(220, 38, 38, 0.4);\">
        🩸 JE VEUX DONNER MAINTENANT
    </a>
</div>

<div style=\"background: #dcfce7; border-left: 4px solid #16a34a; padding: 16px; border-radius: 8px; margin: 20px 0;\">
    <p style=\"margin: 0; color: #166534; font-size: 14px;\">
        <strong>✅ Pourquoi vous ?</strong> Votre groupe sanguin (";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donor"] ?? null), "groupeSanguin", [], "any", false, false, false, 52), "html", null, true);
        yield ") est compatible avec cette demande urgente.
    </p>
</div>

<div style=\"background: #fef3c7; border-left: 4px solid #f59e0b; padding: 16px; border-radius: 8px; margin: 20px 0;\">
    <p style=\"margin: 0; color: #92400e; font-size: 14px;\">
        <strong>⏰ Chaque seconde compte</strong> - Merci de répondre rapidement à cette demande urgente.
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
        return "emails/urgent_request.html.twig";
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
        return array (  175 => 52,  164 => 44,  159 => 42,  153 => 38,  147 => 35,  143 => 33,  141 => 32,  136 => 30,  130 => 26,  124 => 25,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/urgent_request.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\emails\\urgent_request.html.twig");
    }
}
