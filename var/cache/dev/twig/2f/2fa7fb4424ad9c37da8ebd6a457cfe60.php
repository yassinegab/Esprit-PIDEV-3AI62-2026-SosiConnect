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

/* front/don/certificate_verify.html.twig */
class __TwigTemplate_c4924297c84d123c8947e4ec8fbb1ef3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/certificate_verify.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/certificate_verify.html.twig"));

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

        yield "Vérification du Certificat - Don #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.verify-container {
    max-width: 600px;
    margin: 80px auto;
    padding: 40px;
}
.verify-card {
    background: white;
    border-radius: 24px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.verify-header {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    padding: 40px;
    text-align: center;
}
.verify-icon {
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    margin: 0 auto 20px;
}
.verify-body {
    padding: 40px;
}
.detail-row {
    display: flex;
    justify-content: space-between;
    padding: 15px 0;
    border-bottom: 1px solid #f3f4f6;
}
.detail-label {
    color: #6b7280;
    font-weight: 500;
}
.detail-value {
    font-weight: 600;
    color: #1f2937;
}
.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 50px;
    font-weight: 600;
}
.status-validated {
    background: #dcfce7;
    color: #166534;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
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

        // line 69
        yield "<div class=\"verify-container\">
    <div class=\"verify-card\">
        <div class=\"verify-header\">
            <div class=\"verify-icon\">✓</div>
            <h1 style=\"margin: 0; font-size: 28px;\">Certificat Valide</h1>
            <p style=\"margin: 10px 0 0; opacity: 0.9;\">Ce certificat a été vérifié avec succès</p>
        </div>
        
        <div class=\"verify-body\">
            <div class=\"detail-row\">
                <span class=\"detail-label\">N° Certificat</span>
                <span class=\"detail-value\">CERT-";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "dateDon", [], "any", false, false, false, 80), "Y"), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeDon", [], "any", false, false, false, 80), 0, 3)), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%04d", CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "id", [], "any", false, false, false, 80)), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"detail-label\">Type de Don</span>
                <span class=\"detail-value\">
                    ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeDon", [], "any", false, false, false, 86) == "sang")) {
            // line 87
            yield "                        🩸 Don de Sang
                    ";
        } else {
            // line 89
            yield "                        🫀 Don d'Organe
                    ";
        }
        // line 91
        yield "                </span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"detail-label\">Date du Don</span>
                <span class=\"detail-value\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "dateDon", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"detail-label\">Lieu / Région</span>
                <span class=\"detail-value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "region", [], "any", false, false, false, 101), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-row\">
                <span class=\"detail-label\">Statut</span>
                <span class=\"status-badge status-validated\">
                    <span>✓</span> Validé
                </span>
            </div>
            
            ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeSanguin", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">Groupe Sanguin</span>
                <span class=\"detail-value\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeSanguin", [], "any", false, false, false, 114), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 117
        yield "            
            ";
        // line 118
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeOrgane", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "            <div class=\"detail-row\">
                <span class=\"detail-label\">Organe</span>
                <span class=\"detail-value\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeOrgane", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
            </div>
            ";
        }
        // line 124
        yield "            
            <div style=\"margin-top: 30px; padding: 20px; background: #f0fdf4; border-radius: 12px; text-align: center;\">
                <p style=\"margin: 0; color: #166534; font-size: 14px;\">
                    🔒 Ce certificat est authentique et a été émis par <strong>Wellness Connect</strong>
                </p>
            </div>
            
            <div style=\"margin-top: 20px; text-align: center;\">
                <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don");
        yield "\" style=\"color: #6b7280; text-decoration: none; font-size: 14px;\">
                    ← Retour au module Don
                </a>
            </div>
        </div>
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
        return "front/don/certificate_verify.html.twig";
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
        return array (  288 => 132,  278 => 124,  272 => 121,  268 => 119,  266 => 118,  263 => 117,  257 => 114,  253 => 112,  251 => 111,  238 => 101,  230 => 96,  223 => 91,  219 => 89,  215 => 87,  213 => 86,  200 => 80,  187 => 69,  174 => 68,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/certificate_verify.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\certificate_verify.html.twig");
    }
}
