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

/* Front_office/rendez_vous/index.html.twig */
class __TwigTemplate_f18d8b2a37ef1fa77cb9fc23d5d1a499 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_office/rendez_vous/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_office/rendez_vous/index.html.twig"));

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

        yield "Mes Rendez-vous";
        
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
    .rdv-container {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: var(--shadow-md);
    }
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid var(--border-color);
    }
    
    .page-header h1 {
        font-size: 28px;
        font-weight: 700;
        color: var(--text-primary);
    }
    
    .btn-new {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        color: white;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 102, 255, 0.3);
    }
    
    .btn-new:hover {
        transform: translateY(-2px);
        color: white;
    }
    
    .rdv-card {
        background: var(--bg-secondary);
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 16px;
        border-left: 4px solid var(--primary-color);
        transition: all 0.3s ease;
    }
    
    .rdv-card:hover {
        transform: translateX(4px);
        box-shadow: var(--shadow-md);
    }
    
    .rdv-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 16px;
    }
    
    .rdv-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 8px;
    }
    
    .rdv-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 12px;
        margin-bottom: 16px;
    }
    
    .info-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: var(--text-secondary);
    }
    
    .info-item i {
        color: var(--primary-color);
        width: 20px;
    }
    
    .badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .badge-waiting { background: rgba(255, 149, 0, 0.1); color: var(--warning-color); }
    .badge-confirmed { background: rgba(52, 199, 89, 0.1); color: var(--success-color); }
    .badge-completed { background: rgba(0, 102, 255, 0.1); color: var(--primary-color); }
    .badge-cancelled { background: rgba(255, 59, 48, 0.1); color: var(--danger-color); }
    
    .rdv-actions {
        display: flex;
        gap: 8px;
    }
    
    .btn-action {
        padding: 8px 16px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    
    .btn-view {
        background: var(--primary-light);
        color: var(--primary-color);
    }
    
    .btn-view:hover {
        background: var(--primary-color);
        color: white;
    }
    
    .btn-edit {
        background: rgba(255, 149, 0, 0.1);
        color: var(--warning-color);
    }
    
    .btn-edit:hover {
        background: var(--warning-color);
        color: white;
    }
    
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }
    
    .empty-state i {
        font-size: 64px;
        color: var(--text-secondary);
        opacity: 0.3;
        margin-bottom: 20px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
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

        // line 162
        yield "<div class=\"rdv-container\">
    <div class=\"page-header\">
        <h1>📅 Mes Rendez-vous</h1>
        <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous_new");
        yield "\" class=\"btn-new\">
            <i class=\"fas fa-plus\"></i>
            Nouveau rendez-vous
        </a>
    </div>

    ";
        // line 171
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rendez_vous"] ?? null)) > 0)) {
            // line 172
            yield "       ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rendez_vous"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
                // line 173
                yield "    <div class=\"rdv-card\">
        <div class=\"rdv-info\">
            <h3>";
                // line 175
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "titre", [], "any", true, true, false, 175) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "titre", [], "any", false, false, false, 175)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "titre", [], "any", false, false, false, 175), "html", null, true)) : ("Rendez-vous"));
                yield "</h3>
            <p><i class=\"fas fa-calendar\"></i> ";
                // line 176
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "dateHeure", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "dateHeure", [], "any", false, false, false, 176), "d/m/Y H:i"), "html", null, true)) : (""));
                yield "</p>
            ";
                // line 177
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "description", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 178
                    yield "                <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "description", [], "any", false, false, false, 178), "html", null, true);
                    yield "</p>
            ";
                }
                // line 180
                yield "        </div>
        <div class=\"rdv-actions\">
            <a href=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                yield "\" class=\"btn-action btn-view\">
                <i class=\"fas fa-eye\"></i> Voir
            </a>
            <a href=\"";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 185)]), "html", null, true);
                yield "\" class=\"btn-action btn-edit\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
        </div>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rdv'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            yield "          ";
        } else {
            // line 192
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-calendar-times\"></i>
            <h3>Aucun rendez-vous</h3>
            <p style=\"color: var(--text-secondary); margin: 16px 0;\">
                Vous n'avez pas encore de rendez-vous programmé
            </p>
            <a href=\"";
            // line 198
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez_vous_new");
            yield "\" class=\"btn-new\">
                <i class=\"fas fa-plus\"></i>
                Prendre un rendez-vous
            </a>
        </div>
    ";
        }
        // line 204
        yield "</div>
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
        return "Front_office/rendez_vous/index.html.twig";
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
        return array (  362 => 204,  353 => 198,  345 => 192,  342 => 191,  330 => 185,  324 => 182,  320 => 180,  314 => 178,  312 => 177,  308 => 176,  304 => 175,  300 => 173,  295 => 172,  293 => 171,  284 => 165,  279 => 162,  266 => 161,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Front_office/rendez_vous/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\Front_office\\rendez_vous\\index.html.twig");
    }
}
