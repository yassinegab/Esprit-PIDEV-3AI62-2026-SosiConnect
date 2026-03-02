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

/* dashboard.html.twig */
class __TwigTemplate_3a87985aa0fbaaaec066822987c7768b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"flex min-h-screen bg-background\">

  ";
        // line 7
        yield "  ";
        yield from $this->load("components/sidebar.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
  <div class=\"flex flex-1 flex-col\">

    ";
        // line 12
        yield "    ";
        yield from $this->load("components/top-nav.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "
    <main class=\"flex-1 overflow-auto\">
      <div class=\"mx-auto max-w-7xl space-y-6 p-4 lg:p-6\">

        ";
        // line 18
        yield "        <div class=\"flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between\">
          <div>
            <h1 class=\"text-2xl font-bold text-foreground\">
              Bonjour, ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield " !
            </h1>
            <p class=\"text-muted-foreground\">
              Voici un aperçu de votre santé aujourd’hui
            </p>
          </div>

          <div class=\"flex items-center gap-2 rounded-md border px-3 py-2\">
            📅 ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "l d F Y"), "html", null, true);
        yield "
          </div>
        </div>

        ";
        // line 34
        yield "        ";
        yield from $this->load("components/stat-cards.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "
        ";
        // line 37
        yield "        <div class=\"grid gap-6 lg:grid-cols-2 xl:grid-cols-3\">
          ";
        // line 38
        yield from $this->load("components/widgets/health-summary.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "          ";
        yield from $this->load("components/widgets/mental.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "          ";
        yield from $this->load("components/widgets/activity.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "        </div>

        <div class=\"grid gap-6 lg:grid-cols-2\">
          ";
        // line 44
        yield from $this->load("components/widgets/nutrition.html.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "          ";
        yield from $this->load("components/widgets/cycle.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "        </div>

        ";
        // line 49
        yield "        <div class=\"rounded-xl border border-border bg-card p-4\">
          <div class=\"mb-4 flex items-center justify-between\">
            <h2 class=\"font-semibold text-card-foreground\">Actions rapides</h2>
          </div>

          <div class=\"grid gap-3 sm:grid-cols-2 lg:grid-cols-4\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["quickActions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 56
            yield "              <button class=\"flex items-center gap-3 rounded-lg border border-border bg-background p-3 text-left hover:bg-muted\">
                <span class=\"text-xl\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "emoji", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
                <span class=\"text-sm font-medium text-card-foreground\">
                  ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 59), "html", null, true);
            yield "
                </span>
              </button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "          </div>
        </div>

      </div>
    </main>

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
        return "dashboard.html.twig";
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
        return array (  181 => 63,  171 => 59,  166 => 57,  163 => 56,  159 => 55,  151 => 49,  147 => 46,  144 => 45,  142 => 44,  137 => 41,  134 => 40,  131 => 39,  129 => 38,  126 => 37,  123 => 35,  120 => 34,  113 => 29,  102 => 21,  97 => 18,  91 => 13,  88 => 12,  83 => 8,  80 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\dashboard.html.twig");
    }
}
