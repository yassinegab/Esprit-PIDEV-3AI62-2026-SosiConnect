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

/* Front_office/dashboard.html.twig */
class __TwigTemplate_7a9e69f88a17d5c2151121345f5083a1 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout/front-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_office/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front_office/dashboard.html.twig"));

        $this->parent = $this->load("layout/front-layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"mx-auto max-w-7xl space-y-6\">

  ";
        // line 7
        yield "  <div class=\"flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between\">
    <div>
      <h1 class=\"text-2xl font-bold text-foreground\">
        Bonjour, ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 10), "html", null, true);
        yield " !
      </h1>
      <p class=\"text-muted-foreground\">
        Voici un aperçu de votre santé aujourd'hui
      </p>
    </div>

    <div class=\"flex items-center gap-2 rounded-md border px-3 py-2\">
      📅 ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "l d F Y"), "html", null, true);
        yield "
    </div>
  </div>

  ";
        // line 23
        yield "  ";
        yield from $this->load("components/stat-cards.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "
  ";
        // line 26
        yield "  <div class=\"grid gap-6 lg:grid-cols-2 xl:grid-cols-3\">
    ";
        // line 27
        yield from $this->load("components/widgets/health-summary.html.twig", 27)->unwrap()->yield($context);
        // line 28
        yield "    ";
        yield from $this->load("components/widgets/mental.html.twig", 28)->unwrap()->yield($context);
        // line 29
        yield "    ";
        yield from $this->load("components/widgets/activity.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "  </div>

  <div class=\"grid gap-6 lg:grid-cols-2\">
    ";
        // line 33
        yield from $this->load("components/widgets/nutrition.html.twig", 33)->unwrap()->yield($context);
        // line 34
        yield "    ";
        yield from $this->load("components/widgets/cycle.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "  </div>

  ";
        // line 38
        yield "  <div class=\"rounded-xl border border-border bg-card p-4\">
    <div class=\"mb-4 flex items-center justify-between\">
      <h2 class=\"font-semibold text-card-foreground\">Actions rapides</h2>
    </div>

    <div class=\"grid gap-3 sm:grid-cols-2 lg:grid-cols-4\">
      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["quickActions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 45
            yield "        <button class=\"flex items-center gap-3 rounded-lg border border-border bg-background p-3 text-left hover:bg-muted\">
          <span class=\"text-xl\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "emoji", [], "any", false, false, false, 46), "html", null, true);
            yield "</span>
          <span class=\"text-sm font-medium text-card-foreground\">
            ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 48), "html", null, true);
            yield "
          </span>
        </button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    </div>
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
        return "Front_office/dashboard.html.twig";
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
        return array (  164 => 52,  154 => 48,  149 => 46,  146 => 45,  142 => 44,  134 => 38,  130 => 35,  127 => 34,  125 => 33,  120 => 30,  117 => 29,  114 => 28,  112 => 27,  109 => 26,  106 => 24,  103 => 23,  96 => 18,  85 => 10,  80 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Front_office/dashboard.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\Front_office\\dashboard.html.twig");
    }
}
