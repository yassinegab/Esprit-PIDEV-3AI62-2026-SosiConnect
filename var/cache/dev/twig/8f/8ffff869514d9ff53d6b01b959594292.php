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

/* front/don/history.html.twig */
class __TwigTemplate_83b9cab4fafadbb04536a0d3aa4be7c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/history.html.twig"));

        $this->parent = $this->load("layout/front-layout.html.twig", 1);
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

        yield "Historique des dons";
        
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
<link rel=\"stylesheet\" href=\"/css/modern-styles.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <h1 class=\"text-2xl font-bold text-gray-800 flex items-center gap-2\">
            <span class=\"text-3xl\">📋</span> Historique des dons
        </h1>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new");
        yield "\" class=\"bg-gradient-to-r from-red-500 to-rose-500 hover:from-red-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg transition flex items-center gap-2 shadow\">
            <span>➕</span> Nouveau don
        </a>
    </div>

    <div class=\"bg-white p-4 rounded-xl shadow-lg border border-gray-100\">
        <form method=\"get\" class=\"grid grid-cols-1 md:grid-cols-5 gap-4\">
            <div class=\"md:col-span-2\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 24), "")) : ("")), "html", null, true);
        yield "\"
                       placeholder=\"🔍 Rechercher...\"
                       class=\"w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-red-500 focus:border-transparent\">
            </div>
            <div>
                <select name=\"typeDon\" class=\"w-full border border-gray-200 rounded-xl px-4 py-3\">
                    <option value=\"\">Tous types</option>
                    <option value=\"sang\" ";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "typeDon", [], "any", false, false, false, 31) == "sang")) ? ("selected") : (""));
        yield ">Sang</option>
                    <option value=\"organe\" ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "typeDon", [], "any", false, false, false, 32) == "organe")) ? ("selected") : (""));
        yield ">Organe</option>
                </select>
            </div>
            <div>
                <select name=\"statut\" class=\"w-full border border-gray-200 rounded-xl px-4 py-3\">
                    <option value=\"\">Tous statuts</option>
                    <option value=\"EN_ATTENTE\" ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 38) == "EN_ATTENTE")) ? ("selected") : (""));
        yield ">En attente</option>
                    <option value=\"VALIDÉ\" ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 39) == "VALIDÉ")) ? ("selected") : (""));
        yield ">Validés</option>
                    <option value=\"REFUSÉ\" ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 40) == "REFUSÉ")) ? ("selected") : (""));
        yield ">Refusés</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"submit\" class=\"flex-1 bg-gray-800 hover:bg-black text-white px-4 py-3 rounded-xl transition\">
                    Filtrer
                </button>
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_history");
        yield "\" class=\"bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-3 rounded-xl transition\">
                    ✕
                </a>
            </div>
        </form>
    </div>

    ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["dons"] ?? null)) > 0)) {
            // line 55
            yield "    <div class=\"space-y-4\">
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["dons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
                // line 57
                yield "        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition\">
            <div class=\"flex items-start justify-between\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-14 h-14 ";
                // line 60
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 60) == "sang")) ? ("bg-red-100") : ("bg-purple-100"));
                yield " rounded-2xl flex items-center justify-center text-3xl\">
                        ";
                // line 61
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 61) == "sang")) ? ("🩸") : ("🫀"));
                yield "
                    </div>
                    <div>
                        <div class=\"flex items-center gap-2 mb-1\">
                            <span class=\"font-bold text-gray-800 text-lg\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 65)), "html", null, true);
                yield "</span>
                            ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeSanguin", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                                <span class=\"bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeSanguin", [], "any", false, false, false, 67), "html", null, true);
                    yield "</span>
                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["don"], "typeOrgane", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                                <span class=\"bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeOrgane", [], "any", false, false, false, 69), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 71
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "urgence", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "                                <span class=\"bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs font-bold animate-pulse\">🚨 URGENT</span>
                            ";
                }
                // line 74
                yield "                        </div>
                        <p class=\"text-gray-500 text-sm\">
                            📍 ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "region", [], "any", false, false, false, 76), "html", null, true);
                yield " • 📅 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "dateDon", [], "any", false, false, false, 76), "d/m/Y à H:i"), "html", null, true);
                yield "
                        </p>
                        ";
                // line 78
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "documentName", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 79
                    yield "                        <div class=\"mt-2\">
                            <span class=\"text-gray-500 text-sm\">📎 Document:</span>
                            <a href=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["don"], "documentFile"), "html", null, true);
                    yield "\" target=\"_blank\" 
                               class=\"ml-2 inline-flex items-center gap-1 px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded text-sm text-gray-700 transition\">
                                <i class=\"fas fa-file-";
                    // line 83
                    yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "documentName", [], "any", false, false, false, 83)) && is_string($_v1 = ".pdf") && str_ends_with($_v0, $_v1))) ? ("pdf text-red-500") : ("image text-blue-500"));
                    yield "\"></i>
                                Voir le document
                            </a>
                        </div>
                        ";
                }
                // line 88
                yield "                    </div>
                </div>
                <div class=\"flex flex-col items-end gap-2\">
                    <span class=\"px-4 py-2 ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusBadgeClass", [], "any", false, false, false, 91), "html", null, true);
                yield " rounded-full text-sm font-bold\">
                        ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusIcon", [], "any", false, false, false, 92), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 92), "html", null, true);
                yield "
                    </span>
                </div>
            </div>

            <div class=\"mt-4 pt-4 border-t border-gray-100 flex items-center justify-between\">
                <div class=\"flex gap-2\">
                    <a href=\"";
                // line 99
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don");
                yield "\" class=\"text-gray-500 hover:text-gray-700 text-sm flex items-center gap-1\">
                        ← Retour
                    </a>
                </div>
                
                <div class=\"flex gap-2\">
                    ";
                // line 105
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 105) == "VALIDÉ")) {
                    // line 106
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_certificate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                    yield "\" 
                       target=\"_blank\"
                       class=\"px-4 py-2 bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white rounded-lg text-sm font-medium transition flex items-center gap-2 shadow\">
                        📜 Certificat
                    </a>
                    ";
                }
                // line 112
                yield "                    
                    <button onclick=\"shareDon(";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 113), "html", null, true);
                yield ")\" 
                            class=\"px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg text-sm font-medium transition flex items-center gap-2\">
                        📤 Partager
                    </button>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['don'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "    </div>
    ";
        } else {
            // line 123
            yield "    <div class=\"bg-white rounded-2xl p-12 shadow-lg border border-gray-100 text-center\">
        <div class=\"text-6xl mb-4\">📭</div>
        <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucun don dans l'historique</h3>
        <p class=\"text-gray-500 mb-6\">Commencez par déclarer votre premier don</p>
        <a href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new");
            yield "\" class=\"bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-medium\">
            ➕ Déclarer un don
        </a>
    </div>
    ";
        }
        // line 132
        yield "
    ";
        // line 133
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 133) > 1)) {
            // line 134
            yield "    <div class=\"bg-white rounded-2xl p-4 shadow-lg border border-gray-100 flex justify-center items-center gap-4\">
        ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 135) > 1)) {
                // line 136
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_history", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 136), "query", [], "any", false, false, false, 136), "all", [], "any", false, false, false, 136), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 136) - 1)])), "html", null, true);
                yield "\" 
           class=\"px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition\">
            ← Précédent
        </a>
        ";
            }
            // line 141
            yield "        
        <div class=\"flex items-center gap-1\">
            ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 143)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 144
                yield "                ";
                if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 144))) {
                    // line 145
                    yield "                    <span class=\"w-10 h-10 flex items-center justify-center bg-red-600 text-white rounded-lg font-bold\">
                        ";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "
                    </span>
                ";
                } elseif (((                // line 148
$context["i"] > (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 148) - 3)) && ($context["i"] < (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 148) + 3)))) {
                    // line 149
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_history", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 149), "query", [], "any", false, false, false, 149), "all", [], "any", false, false, false, 149), ["page" => $context["i"]])), "html", null, true);
                    yield "\" 
                       class=\"w-10 h-10 flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded-lg transition\">
                        ";
                    // line 151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 154
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "        </div>
        
        ";
            // line 157
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 157) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 157))) {
                // line 158
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_history", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 158), "query", [], "any", false, false, false, 158), "all", [], "any", false, false, false, 158), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 158) + 1)])), "html", null, true);
                yield "\" 
           class=\"px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition\">
            Suivant →
        </a>
        ";
            }
            // line 163
            yield "    </div>
    ";
        }
        // line 165
        yield "</div>

<div id=\"shareModal\" class=\"fixed inset-0 bg-black/50 z-50 hidden items-center justify-center\">
    <div class=\"bg-white rounded-2xl p-6 w-full max-w-md shadow-2xl\">
        <h3 class=\"text-xl font-bold text-gray-800 mb-4\">📤 Partager votre don</h3>
        <p class=\"text-gray-600 mb-4\">Partagez votre générosité avec vos amis !</p>
        <div class=\"grid grid-cols-4 gap-3 mb-4\">
            <a id=\"shareFacebook\" href=\"#\" target=\"_blank\" class=\"p-4 bg-blue-600 text-white rounded-xl text-center hover:bg-blue-700 transition\">
                <span class=\"text-2xl\">f</span>
                <p class=\"text-xs mt-1\">Facebook</p>
            </a>
            <a id=\"shareTwitter\" href=\"#\" target=\"_blank\" class=\"p-4 bg-sky-500 text-white rounded-xl text-center hover:bg-sky-600 transition\">
                <span class=\"text-2xl\">𝕏</span>
                <p class=\"text-xs mt-1\">Twitter</p>
            </a>
            <a id=\"shareWhatsapp\" href=\"#\" target=\"_blank\" class=\"p-4 bg-green-500 text-white rounded-xl text-center hover:bg-green-600 transition\">
                <span class=\"text-2xl\">💬</span>
                <p class=\"text-xs mt-1\">WhatsApp</p>
            </a>
            <a id=\"shareLinkedin\" href=\"#\" target=\"_blank\" class=\"p-4 bg-blue-700 text-white rounded-xl text-center hover:bg-blue-800 transition\">
                <span class=\"text-2xl\">in</span>
                <p class=\"text-xs mt-1\">LinkedIn</p>
            </a>
        </div>
        <button onclick=\"document.getElementById('shareModal').classList.add('hidden')\" 
                class=\"w-full py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-gray-700\">
            Fermer
        </button>
    </div>
</div>

<script>
function shareDon(donId) {
    fetch('/don/' + donId + '/share')
        .then(response => response.json())
        .then(data => {
            document.getElementById('shareFacebook').href = data.platforms.facebook;
            document.getElementById('shareTwitter').href = data.platforms.twitter;
            document.getElementById('shareWhatsapp').href = data.platforms.whatsapp;
            document.getElementById('shareLinkedin').href = data.platforms.linkedin;
            document.getElementById('shareModal').classList.remove('hidden');
            document.getElementById('shareModal').classList.add('flex');
        });
}

document.getElementById('shareModal').addEventListener('click', function(e) {
    if (e.target === this) {
        this.classList.add('hidden');
        this.classList.remove('flex');
    }
});
</script>
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
        return "front/don/history.html.twig";
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
        return array (  432 => 165,  428 => 163,  419 => 158,  417 => 157,  413 => 155,  407 => 154,  401 => 151,  395 => 149,  393 => 148,  388 => 146,  385 => 145,  382 => 144,  378 => 143,  374 => 141,  365 => 136,  363 => 135,  360 => 134,  358 => 133,  355 => 132,  347 => 127,  341 => 123,  337 => 121,  323 => 113,  320 => 112,  310 => 106,  308 => 105,  299 => 99,  287 => 92,  283 => 91,  278 => 88,  270 => 83,  265 => 81,  261 => 79,  259 => 78,  252 => 76,  248 => 74,  244 => 72,  241 => 71,  235 => 69,  233 => 68,  228 => 67,  226 => 66,  222 => 65,  215 => 61,  211 => 60,  206 => 57,  202 => 56,  199 => 55,  197 => 54,  187 => 47,  177 => 40,  173 => 39,  169 => 38,  160 => 32,  156 => 31,  146 => 24,  135 => 16,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/history.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\history.html.twig");
    }
}
