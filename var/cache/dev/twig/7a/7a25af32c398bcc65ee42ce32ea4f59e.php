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

/* admin/components/sidebar.html.twig */
class __TwigTemplate_451d3d7d475b0e01747dc39b16898794 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/sidebar.html.twig"));

        // line 1
        yield "<aside class=\"fixed inset-y-0 left-0 z-50 w-64 transform border-r border-gray-200 bg-white transition-transform lg:translate-x-0\"
       :class=\"sidebarOpen ? 'translate-x-0' : '-translate-x-full'\"
       x-cloak>
    
    ";
        // line 6
        yield "    <div class=\"flex h-16 items-center justify-between border-b border-gray-200 px-6\">
        <div class=\"flex items-center gap-3\">
            <div class=\"flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-purple-600\">
                <i class=\"fas fa-heartbeat text-white\"></i>
            </div>
            <div>
                <span class=\"text-lg font-bold text-gray-900\">SmartHealth</span>
                <span class=\"block text-xs text-gray-500\">Admin Panel</span>
            </div>
        </div>
        <button @click=\"sidebarOpen = false\" class=\"lg:hidden\">
            <i class=\"fas fa-times text-gray-600\"></i>
        </button>
    </div>
    
    ";
        // line 22
        yield "    <nav class=\"flex-1 space-y-1 p-4 overflow-y-auto max-h-[calc(100vh-8rem)]\">
        ";
        // line 23
        $context["adminMenuItems"] = [["id" => "dashboard", "label" => "Dashboard", "icon" => "fa-chart-line", "route" => "admin_dashboard"], ["separator" => true], ["id" => "users", "label" => "Gestion Utilisateurs", "icon" => "fa-users", "route" => "#", "description" => "Comptes et profils"], ["id" => "services", "label" => "Gestion Services Médicaux", "icon" => "fa-hospital", "route" => "#", "description" => "RDV et consultations"], ["id" => "cycle", "label" => "Gestion Cycle Menstruel", "icon" => "fa-venus", "route" => "#", "description" => "Suivi féminin"], ["id" => "wellbeing", "label" => "Gestion Bien-être", "icon" => "fa-spa", "route" => "#", "description" => "Santé mentale et habitudes"], ["id" => "don", "label" => "Module Don", "icon" => "fa-hand-holding-heart", "route" => "admin_don", "description" => "Dons et donneurs"], ["id" => "matching", "label" => "Matching Donneurs", "icon" => "fa-link", "route" => "admin_matching", "description" => "Matching intelligent"], ["id" => "aide", "label" => "Centre d'Aide", "icon" => "fa-life-ring", "route" => "admin_aide", "description" => "Urgences et contacts"], ["id" => "faq", "label" => "FAQ", "icon" => "fa-question-circle", "route" => "admin_faq", "description" => "Questions fréquentes"], ["id" => "tutorials", "label" => "Tutoriels", "icon" => "fa-video", "route" => "admin_tutorials", "description" => "Vidéos guides"], ["id" => "support", "label" => "Support Tickets", "icon" => "fa-headset", "route" => "admin_support", "description" => "Tickets et chat"], ["separator" => true], ["id" => "analytics", "label" => "Analytiques", "icon" => "fa-chart-pie", "route" => "#"], ["id" => "settings", "label" => "Paramètres", "icon" => "fa-cog", "route" => "#"]];
        // line 40
        yield "        
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["adminMenuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "separator", [], "any", true, true, false, 42)) {
                // line 43
                yield "                <div class=\"my-2 border-t border-gray-200\"></div>
            ";
            } else {
                // line 45
                yield "                ";
                $context["isActive"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 45));
                // line 46
                yield "                ";
                $context["href"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 46) == "#")) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 46))));
                // line 47
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
                yield "\" 
                   class=\"group flex w-full flex-col rounded-lg px-3 py-2.5 text-sm font-medium transition-all
                   ";
                // line 49
                yield (((($tmp = ($context["isActive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-blue-50 text-blue-700") : ("text-gray-700 hover:bg-gray-100"));
                yield "\">
                    <div class=\"flex items-center gap-3\">
                        <i class=\"fas ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 51), "html", null, true);
                yield " ";
                yield (((($tmp = ($context["isActive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-blue-600") : ("text-gray-500 group-hover:text-gray-700"));
                yield "\"></i>
                        <span class=\"flex-1\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
                    </div>
                    ";
                // line 54
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", true, true, false, 54)) {
                    // line 55
                    yield "                        <span class=\"ml-8 text-xs ";
                    yield (((($tmp = ($context["isActive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-blue-600") : ("text-gray-500"));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 55), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 57
                yield "                </a>
            ";
            }
            // line 59
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "    </nav>
    
    ";
        // line 63
        yield "    <div class=\"border-t border-gray-200 p-4\">
        <div class=\"rounded-lg bg-gradient-to-br from-blue-50 to-purple-50 p-4\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-xs font-medium text-gray-700\">Système actif</p>
                    <p class=\"mt-1 text-sm font-bold text-gray-900\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i"), "html", null, true);
        yield "</p>
                </div>
                <div class=\"h-2 w-2 rounded-full bg-green-500 animate-pulse\"></div>
            </div>
        </div>
    </div>
</aside>

";
        // line 77
        yield "<div x-show=\"sidebarOpen\" 
     @click=\"sidebarOpen = false\"
     class=\"fixed inset-0 z-40 bg-black/50 lg:hidden\"
     x-transition
     x-cloak>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/components/sidebar.html.twig";
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
        return array (  160 => 77,  149 => 68,  142 => 63,  138 => 60,  132 => 59,  128 => 57,  120 => 55,  118 => 54,  113 => 52,  107 => 51,  102 => 49,  96 => 47,  93 => 46,  90 => 45,  86 => 43,  83 => 42,  79 => 41,  76 => 40,  74 => 23,  71 => 22,  54 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/components/sidebar.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\components\\sidebar.html.twig");
    }
}
