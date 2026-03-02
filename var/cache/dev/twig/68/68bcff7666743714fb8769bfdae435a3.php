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

/* admin/don/demandes.html.twig */
class __TwigTemplate_c284869432628d49ba6dc36f4b87e0b9 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/demandes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/demandes.html.twig"));

        $this->parent = $this->load("admin/layout.html.twig", 1);
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

        yield "Gestion des demandes";
        
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
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <h1 class=\"text-2xl font-bold text-purple-700 flex items-center gap-2\">
            <span class=\"text-3xl\">📥</span> Gestion des demandes
        </h1>
        <span class=\"bg-gray-100 px-3 py-1 rounded-full text-sm text-gray-600\">
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total", [], "any", false, false, false, 12), "html", null, true);
        yield " demande(s)
        </span>
    </div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg shadow\">
        ✅ ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg shadow\">
        ❌ ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    <div class=\"bg-white p-4 rounded-xl shadow\">
        <form method=\"get\" class=\"flex flex-wrap gap-3 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "\"
                       placeholder=\"🔍 Rechercher par région...\"
                       class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500\">
            </div>
            <div>
                <select name=\"type\" class=\"border border-gray-300 rounded-lg px-3 py-2\">
                    <option value=\"\">Tous types</option>
                    <option value=\"sang\" ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", false, false, false, 38) == "sang")) ? ("selected") : (""));
        yield ">Sang</option>
                    <option value=\"organe\" ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", false, false, false, 39) == "organe")) ? ("selected") : (""));
        yield ">Organe</option>
                </select>
            </div>
            <button type=\"submit\" class=\"bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition\">
                Filtrer
            </button>
            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes");
        yield "\" class=\"bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg transition\">
                Reset
            </a>
        </form>
    </div>

    <div class=\"space-y-4\">
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["demandes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 53
            yield "        <div class=\"bg-white p-5 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300\">
            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center gap-4\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"text-4xl\">
                        ";
            // line 57
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeDemande", [], "any", false, false, false, 57) == "sang")) ? ("🩸") : ("🫀"));
            yield "
                    </div>
                    <div>
                        <div class=\"flex items-center gap-2 mb-1\">
                            <span class=\"font-bold text-lg text-gray-800\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeDemande", [], "any", false, false, false, 61)), "html", null, true);
            yield "</span>
                            ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeSanguin", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                                <span class=\"bg-red-100 text-red-700 px-2 py-0.5 rounded text-xs font-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeSanguin", [], "any", false, false, false, 63), "html", null, true);
                yield "</span>
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["demande"], "typeOrgane", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                                <span class=\"bg-purple-100 text-purple-700 px-2 py-0.5 rounded text-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeOrgane", [], "any", false, false, false, 65), "html", null, true);
                yield "</span>
                            ";
            }
            // line 67
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "urgence", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                                <span class=\"bg-orange-100 text-orange-700 px-2 py-0.5 rounded text-xs font-bold animate-pulse\">URGENT</span>
                            ";
            }
            // line 70
            yield "                        </div>
                        <div class=\"text-sm text-gray-500 flex items-center gap-4\">
                            <span>📍 ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "region", [], "any", false, false, false, 72), "html", null, true);
            yield "</span>
                            <span>📅 ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "dateDemande", [], "any", false, false, false, 73), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                            ";
            // line 74
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "rangAttente", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "                            <span class=\"bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs\">
                                Rang: ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "rangAttente", [], "any", false, false, false, 76), "html", null, true);
                yield "
                            </span>
                            ";
            }
            // line 79
            yield "                        </div>
                    </div>
                </div>
                
                <div class=\"flex gap-2\">
                    <form method=\"post\" action=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"inline\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 85))), "html", null, true);
            yield "\">
                        <button type=\"submit\" 
                                class=\"px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition text-sm font-medium flex items-center gap-1\">
                            ✅ Approuver
                        </button>
                    </form>
                    
                    <form method=\"post\" action=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" 
                          class=\"inline\" onsubmit=\"return confirm('Supprimer cette demande ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 94))), "html", null, true);
            yield "\">
                        <button type=\"submit\" 
                                class=\"px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition text-sm font-medium\">
                            🗑 Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "        <div class=\"bg-white p-12 rounded-xl shadow text-center text-gray-500\">
            <div class=\"text-4xl mb-2\">📭</div>
            <p>Aucune demande trouvée</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "    </div>

    ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 111) > 1)) {
            // line 112
            yield "    <div class=\"bg-white p-4 rounded-xl shadow flex justify-center items-center gap-4\">
        ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 113) > 1)) {
                // line 114
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 114), "query", [], "any", false, false, false, 114), "all", [], "any", false, false, false, 114), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 114) - 1)])), "html", null, true);
                yield "\" 
           class=\"px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition\">
            ← Précédent
        </a>
        ";
            }
            // line 119
            yield "        
        <span class=\"text-sm text-gray-600 px-3\">
            Page ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 121), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 121), "html", null, true);
            yield "
        </span>
        
        ";
            // line 124
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 124) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 124))) {
                // line 125
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 125), "query", [], "any", false, false, false, 125), "all", [], "any", false, false, false, 125), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 125) + 1)])), "html", null, true);
                yield "\" 
           class=\"px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition\">
            Suivant →
        </a>
        ";
            }
            // line 130
            yield "    </div>
    ";
        }
        // line 132
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
        return "admin/don/demandes.html.twig";
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
        return array (  355 => 132,  351 => 130,  342 => 125,  340 => 124,  332 => 121,  328 => 119,  319 => 114,  317 => 113,  314 => 112,  312 => 111,  308 => 109,  298 => 104,  296 => 103,  282 => 94,  277 => 92,  267 => 85,  263 => 84,  256 => 79,  250 => 76,  247 => 75,  245 => 74,  241 => 73,  237 => 72,  233 => 70,  229 => 68,  226 => 67,  220 => 65,  218 => 64,  213 => 63,  211 => 62,  207 => 61,  200 => 57,  194 => 53,  189 => 52,  179 => 45,  170 => 39,  166 => 38,  156 => 31,  150 => 27,  141 => 24,  138 => 23,  134 => 22,  131 => 21,  122 => 18,  119 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/demandes.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\demandes.html.twig");
    }
}
