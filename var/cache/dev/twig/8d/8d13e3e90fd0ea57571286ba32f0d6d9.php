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

/* admin/aide/support/index.html.twig */
class __TwigTemplate_0f2320aca0d8635fa17e0362d1fffdbf extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/support/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/support/index.html.twig"));

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

        yield "Support Tickets";
        
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
.ticket-card {
    transition: all 0.3s ease;
}
.ticket-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.priority-critical { border-left: 4px solid #dc2626; }
.priority-high { border-left: 4px solid #f97316; }
.priority-medium { border-left: 4px solid #eab308; }
.priority-low { border-left: 4px solid #22c55e; }
.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
}
.stat-card-enhanced {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}
.stat-card-enhanced:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "<div class=\"space-y-6 animate-fadeIn\" x-data=\"{ filterStatus: '', filterPriority: '', searchQuery: '' }\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white text-xl\">
                    🎧
                </div>
                Centre de Support
            </h1>
            <p class=\"text-gray-500 mt-1 ml-16\">Gérez les demandes d'assistance des utilisateurs</p>
        </div>
        <div class=\"flex items-center gap-3\">
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support_open");
        yield "\" 
               class=\"px-5 py-3 bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center gap-2\">
                <span class=\"relative flex h-3 w-3\">
                    <span class=\"animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75\"></span>
                    <span class=\"relative inline-flex rounded-full h-3 w-3 bg-white\"></span>
                </span>
                Tickets Ouverts (";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open", [], "any", false, false, false, 63) + CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inProgress", [], "any", false, false, false, 63)), "html", null, true);
        yield ")
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Ouverts</p>
                    <p class=\"text-3xl font-bold text-blue-600 mt-1\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">En attente de traitement</p>
                </div>
                <div class=\"w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📥
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">En cours</p>
                    <p class=\"text-3xl font-bold text-yellow-600 mt-1\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inProgress", [], "any", false, false, false, 86), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">En traitement</p>
                </div>
                <div class=\"w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center text-2xl\">
                    ⏳
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Résolus</p>
                    <p class=\"text-3xl font-bold text-green-600 mt-1\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "resolved", [], "any", false, false, false, 99), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">Ce mois</p>
                </div>
                <div class=\"w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-2xl\">
                    ✅
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Fermés</p>
                    <p class=\"text-3xl font-bold text-gray-600 mt-1\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "closed", [], "any", false, false, false, 112), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">Total archivé</p>
                </div>
                <div class=\"w-14 h-14 bg-gray-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📁
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
        <div class=\"flex flex-wrap gap-4 items-center\">
            <div class=\"flex-1 min-w-64\">
                <div class=\"relative\">
                    <span class=\"absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\">🔍</span>
                    <input type=\"text\" x-model=\"searchQuery\" placeholder=\"Rechercher par sujet, email...\"
                           class=\"w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent\">
                </div>
            </div>
            <select x-model=\"filterStatus\" class=\"px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"open\">Ouvert</option>
                <option value=\"in_progress\">En cours</option>
                <option value=\"resolved\">Résolu</option>
                <option value=\"closed\">Fermé</option>
            </select>
            <select x-model=\"filterPriority\" class=\"px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500\">
                <option value=\"\">Toutes priorités</option>
                <option value=\"critical\">Critique</option>
                <option value=\"high\">Haute</option>
                <option value=\"medium\">Moyenne</option>
                <option value=\"low\">Basse</option>
            </select>
        </div>
    </div>

    <div class=\"grid grid-cols-1 gap-4\">
        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 150
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" 
           class=\"ticket-card bg-white rounded-2xl shadow-lg border border-gray-100 p-5 block hover:border-blue-200
                  ";
            // line 152
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 152) == "critical")) {
                yield "priority-critical
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 153
$context["ticket"], "priority", [], "any", false, false, false, 153) == "high")) {
                yield "priority-high
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 154
$context["ticket"], "priority", [], "any", false, false, false, 154) == "medium")) {
                yield "priority-medium
                  ";
            } else {
                // line 155
                yield "priority-low";
            }
            yield "\">
            <div class=\"flex items-start justify-between gap-4\">
                <div class=\"flex items-start gap-4 flex-1\">
                    <div class=\"avatar bg-gradient-to-br from-blue-400 to-indigo-500 text-white flex-shrink-0\">
                        ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "userName", [], "any", false, false, false, 159))), "html", null, true);
            yield "
                    </div>
                    <div class=\"flex-1 min-w-0\">
                        <div class=\"flex items-center gap-3 mb-1\">
                            <h3 class=\"font-bold text-gray-800 truncate\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 163), "html", null, true);
            yield "</h3>
                            <span class=\"px-2 py-0.5 text-xs rounded-full ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorityBadgeClass", [], "any", false, false, false, 164), "html", null, true);
            yield " font-semibold flex-shrink-0\">
                                ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 165)), "html", null, true);
            yield "
                            </span>
                        </div>
                        <p class=\"text-gray-500 text-sm truncate mb-2\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 168), 0, 100), "html", null, true);
            yield "...</p>
                        <div class=\"flex items-center gap-4 text-xs text-gray-400\">
                            <span class=\"flex items-center gap-1\">
                                <span>👤</span> ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "userName", [], "any", false, false, false, 171), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <span>📧</span> ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "userEmail", [], "any", false, false, false, 174), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <span>📁</span> ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "category", [], "any", false, false, false, 177), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <span>🕐</span> ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "createdAt", [], "any", false, false, false, 180), "d/m/Y à H:i"), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"flex flex-col items-end gap-2 flex-shrink-0\">
                    <span class=\"px-3 py-1.5 rounded-full text-sm font-semibold ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statusBadgeClass", [], "any", false, false, false, 186), "html", null, true);
            yield "\">
                        ";
            // line 187
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 187) == "open")) {
                yield "🟢 Ouvert
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 188
$context["ticket"], "status", [], "any", false, false, false, 188) == "in_progress")) {
                yield "🟡 En cours
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 189
$context["ticket"], "status", [], "any", false, false, false, 189) == "resolved")) {
                yield "🟢 Résolu
                        ";
            } else {
                // line 190
                yield "⚫ Fermé";
            }
            // line 191
            yield "                    </span>
                    <span class=\"text-xs text-gray-400\">
                        #";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 193), "html", null, true);
            yield "
                    </span>
                    ";
            // line 195
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "assignedTo", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 196
                yield "                    <span class=\"text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full\">
                        👤 ";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "assignedTo", [], "any", false, false, false, 197), "html", null, true);
                yield "
                    </span>
                    ";
            }
            // line 200
            yield "                </div>
            </div>
        </a>
        ";
            $context['_iterated'] = true;
        }
        // line 203
        if (!$context['_iterated']) {
            // line 204
            yield "        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-16 text-center\">
            <div class=\"w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center text-5xl mx-auto mb-4\">
                🎉
            </div>
            <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucun ticket en attente</h3>
            <p class=\"text-gray-500\">Tous les tickets ont été traités !</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "    </div>

    <div class=\"bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl p-6 text-white\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-3xl\">
                    💡
                </div>
                <div>
                    <h3 class=\"font-bold text-lg\">Conseils de support</h3>
                    <p class=\"text-indigo-100 text-sm\">Répondez aux tickets critiques en priorité pour une meilleure satisfaction client</p>
                </div>
            </div>
            <div class=\"text-right\">
                <p class=\"text-2xl font-bold\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open", [], "any", false, false, false, 226) + CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inProgress", [], "any", false, false, false, 226)), "html", null, true);
        yield "</p>
                <p class=\"text-indigo-100 text-sm\">Tickets actifs</p>
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
        return "admin/aide/support/index.html.twig";
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
        return array (  450 => 226,  434 => 212,  421 => 204,  419 => 203,  412 => 200,  406 => 197,  403 => 196,  401 => 195,  396 => 193,  392 => 191,  389 => 190,  384 => 189,  380 => 188,  376 => 187,  372 => 186,  363 => 180,  357 => 177,  351 => 174,  345 => 171,  339 => 168,  333 => 165,  329 => 164,  325 => 163,  318 => 159,  310 => 155,  305 => 154,  301 => 153,  297 => 152,  291 => 150,  286 => 149,  246 => 112,  230 => 99,  214 => 86,  198 => 73,  185 => 63,  176 => 57,  162 => 45,  149 => 44,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/support/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\support\\index.html.twig");
    }
}
