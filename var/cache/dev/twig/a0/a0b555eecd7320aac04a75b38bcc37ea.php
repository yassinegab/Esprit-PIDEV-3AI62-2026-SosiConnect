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

/* Front_office/rendez_vous/show.html.twig */
class __TwigTemplate_0c36c25899aeec228e1deb5a792155f8 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_office/rendez_vous/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_office/rendez_vous/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Détails Rendez-vous #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div style=\"max-width: 900px; margin: 0 auto; background: white; border-radius: 16px; padding: 40px; box-shadow: var(--shadow-md);\">
    <h1 style=\"margin-bottom: 30px;\">📋 Détails du Rendez-vous #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    
    <div style=\"display: grid; gap: 20px;\">
        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>🏥 Hôpital:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "hopital", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "
        </div>
        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>👤 Patient:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "patient", [], "any", false, false, false, 14), "fullName", [], "any", false, false, false, 14), "html", null, true);
        yield "
        </div>
        ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "medecin", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>👨‍⚕️ Médecin:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "medecin", [], "any", false, false, false, 18), "fullName", [], "any", false, false, false, 18), "html", null, true);
            yield "
        </div>
        ";
        }
        // line 21
        yield "        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>📅 Date:</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "dateRendezVous", [], "any", false, false, false, 22), "d/m/Y à H:i"), "html", null, true);
        yield "
        </div>
        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>💻 Type:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "typeConsultation", [], "any", false, false, false, 25), "html", null, true);
        yield "
        </div>
        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>📊 Statut:</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "statut", [], "any", false, false, false, 28), "html", null, true);
        yield "
        </div>
        ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "notes", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <div style=\"padding: 16px; background: var(--bg-secondary); border-radius: 8px;\">
            <strong>📝 Notes:</strong><br>
            ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "notes", [], "any", false, false, false, 33), "html", null, true);
            yield "
        </div>
        ";
        }
        // line 36
        yield "    </div>

    <div style=\"margin-top: 30px; display: flex; gap: 12px;\">
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["rendez_vous"] ?? null), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
    </div>
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
        return "Front_office/rendez_vous/show.html.twig";
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
        return array (  176 => 42,  170 => 39,  165 => 36,  159 => 33,  155 => 31,  153 => 30,  148 => 28,  142 => 25,  136 => 22,  133 => 21,  127 => 18,  124 => 17,  122 => 16,  117 => 14,  111 => 11,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Front_office/rendez_vous/show.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\Front_office\\rendez_vous\\show.html.twig");
    }
}
