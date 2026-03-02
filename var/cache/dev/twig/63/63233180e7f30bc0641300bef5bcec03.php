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

/* components/sidebar.html.twig */
class __TwigTemplate_f6afb93131431e7402c3158093b60458 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/sidebar.html.twig"));

        // line 1
        yield "<aside class=\"fixed left-0 top-0 h-screen w-72 bg-white border-r border-gray-200 flex flex-col shadow-sm z-40\">
  
  <div class=\"flex h-16 items-center border-b border-gray-200 px-6\">
    <div class=\"flex items-center gap-3\">
      <div class=\"flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 text-white\">
        ❤️
      </div>
      <span class=\"text-lg font-semibold text-gray-800\" style=\"font-family: 'Poppins', sans-serif;\">
        Santé & Bien-être
      </span>
    </div>
  </div>

  <nav class=\"flex-1 space-y-1 p-4 overflow-y-auto\">
    ";
        // line 15
        $context["menuItems"] = [["route" => "frontoffice_dashboard", "key" => "dashboard", "label" => "Tableau de bord", "icon" => "🏠"], ["route" => "app_analyse_a_i_index", "key" => "mental", "label" => "Suivi du bien-être mental", "icon" => "🧠"], ["route" => "frontoffice_hopitaux", "key" => "hopitaux", "label" => "Services sociaux et hôpitaux", "icon" => "🏥"], ["route" => "app_rendez_vous", "key" => "rendezvous", "label" => "Rendez-vous", "icon" => "📅"], ["route" => "don", "key" => "don", "label" => "Don", "icon" => "💖"], ["route" => "aide", "key" => "aide", "label" => "Aide", "icon" => "🆘"]];
        // line 23
        yield "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            yield "      ";
            $context["isActive"] = (array_key_exists("activeModule", $context) && (($context["activeModule"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 25)));
            // line 26
            yield "
      <a href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 27));
            yield "\"
         class=\"flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium transition-all duration-200
         ";
            // line 29
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 29) == "don") && ($context["isActive"] ?? null))) {
                // line 30
                yield "            bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-md
         ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["item"], "key", [], "any", false, false, false, 31) == "don")) {
                // line 32
                yield "            text-pink-600 hover:bg-pink-50
         ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["item"], "key", [], "any", false, false, false, 33) == "aide") && ($context["isActive"] ?? null))) {
                // line 34
                yield "            bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md
         ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 35
$context["item"], "key", [], "any", false, false, false, 35) == "aide")) {
                // line 36
                yield "            text-blue-600 hover:bg-blue-50
         ";
            } elseif ((($tmp =             // line 37
($context["isActive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "            bg-gray-100 text-gray-800
         ";
            } else {
                // line 40
                yield "            text-gray-600 hover:bg-gray-50 hover:text-gray-800
         ";
            }
            // line 42
            yield "         \">
        <span class=\"text-xl\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 43), "html", null, true);
            yield "</span>
        <span>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 44), "html", null, true);
            yield "</span>
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "  </nav>

  <div class=\"border-t border-gray-200 p-4\">
    <div class=\"rounded-xl bg-gradient-to-br from-gray-50 to-gray-100 p-4\">
      <p class=\"text-xs text-gray-500\">Dernière synchronisation</p>
      <p class=\"mt-1 text-sm font-medium text-gray-700\">
        Aujourd'hui, ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i"), "html", null, true);
        yield "
      </p>
    </div>
  </div>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/sidebar.html.twig";
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
        return array (  138 => 53,  130 => 47,  121 => 44,  117 => 43,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  96 => 34,  94 => 33,  91 => 32,  89 => 31,  86 => 30,  84 => 29,  79 => 27,  76 => 26,  73 => 25,  69 => 24,  66 => 23,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/sidebar.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\components\\sidebar.html.twig");
    }
}
