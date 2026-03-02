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

/* components/stat-cards.html.twig */
class __TwigTemplate_8e0df8d7a35ee1c41e2cef8aa99a94f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/stat-cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/stat-cards.html.twig"));

        // line 1
        $context["stats"] = [["id" => "calories", "label" => "Calories consommées", "value" => "1,842", "unit" => "kcal", "target" => "/ 2,000", "subtitle" => null, "icon" => "🔥", "color" => "text-orange-500", "barColor" => "bg-orange-500", "bgColor" => "bg-orange-50", "progress" => 92], ["id" => "stress", "label" => "Niveau de stress", "value" => "Faible", "unit" => null, "target" => null, "subtitle" => "Score: 28/100", "icon" => "🧠", "color" => "text-primary", "barColor" => "bg-primary", "bgColor" => "bg-primary/10", "progress" => 28], ["id" => "activity", "label" => "Activité physique", "value" => "8,456", "unit" => "pas", "target" => "/ 10,000", "subtitle" => null, "icon" => "👣", "color" => "text-secondary", "barColor" => "bg-secondary", "bgColor" => "bg-secondary/10", "progress" => 85], ["id" => "mood", "label" => "Humeur du jour", "value" => "Joyeuse", "unit" => null, "target" => null, "subtitle" => "Énergie: Haute", "icon" => "😊", "color" => "text-yellow-500", "barColor" => null, "bgColor" => "bg-yellow-50", "progress" => null], ["id" => "cycle", "label" => "Cycle menstruel", "value" => "Phase folliculaire", "unit" => null, "target" => null, "subtitle" => "Jour 8 sur 28", "icon" => "🌸", "color" => "text-pink-500", "barColor" => "bg-pink-500", "bgColor" => "bg-pink-50", "progress" => 29]];
        // line 68
        yield "<div class=\"grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5\">
  ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 70
            yield "    <div class=\"overflow-hidden rounded-lg border border-border bg-card\">
      <div class=\"p-4\">
        <div class=\"flex items-start justify-between\">
          <div class=\"flex-1\">
            <p class=\"text-xs font-medium text-muted-foreground\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 74), "html", null, true);
            yield "</p>
            <div class=\"mt-2 flex items-baseline gap-1\">
              <span class=\"text-2xl font-bold text-card-foreground\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 76), "html", null, true);
            yield "</span>
              ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "unit", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                <span class=\"text-sm text-muted-foreground\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "unit", [], "any", false, false, false, 78), "html", null, true);
                yield "</span>
              ";
            }
            // line 80
            yield "            </div>
            
            ";
            // line 83
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "target", [], "any", false, false, false, 83) || CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "subtitle", [], "any", false, false, false, 83))) {
                // line 84
                yield "              <p class=\"text-xs text-muted-foreground\">
                ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "target", [], "any", false, false, false, 85), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "subtitle", [], "any", false, false, false, 85), "html", null, true);
                yield "
              </p>
            ";
            }
            // line 88
            yield "          </div>
          
          <div class=\"rounded-lg p-2.5 ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "bgColor", [], "any", false, false, false, 90), "html", null, true);
            yield "\">
            <span class=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "color", [], "any", false, false, false, 91), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "icon", [], "any", false, false, false, 91), "html", null, true);
            yield "</span>
          </div>
        </div>

        ";
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "progress", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "          <div class=\"mt-3\">
            <div class=\"h-1.5 w-full overflow-hidden rounded-full bg-muted\">
              ";
                // line 99
                yield "              <div class=\"h-full rounded-full transition-all ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "barColor", [], "any", false, false, false, 99), "html", null, true);
                yield "\"
                   style=\"--width: ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "progress", [], "any", false, false, false, 100), "html", null, true);
                yield "%; width: var(--width);\">
              </div>
            </div>
          </div>
        ";
            }
            // line 105
            yield "      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/stat-cards.html.twig";
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
        return array (  142 => 108,  134 => 105,  126 => 100,  121 => 99,  117 => 96,  115 => 95,  106 => 91,  102 => 90,  98 => 88,  90 => 85,  87 => 84,  84 => 83,  80 => 80,  74 => 78,  72 => 77,  68 => 76,  63 => 74,  57 => 70,  53 => 69,  50 => 68,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/stat-cards.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\components\\stat-cards.html.twig");
    }
}
