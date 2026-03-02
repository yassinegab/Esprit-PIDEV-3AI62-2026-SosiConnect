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

/* admin/don/matching/demande.html.twig */
class __TwigTemplate_d876d89ab5e2b3189442628733b94226 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/matching/demande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/matching/demande.html.twig"));

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

        yield "Matching - Demande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
.match-score-ring {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
    position: relative;
}
.match-score-ring::before {
    content: '';
    position: absolute;
    inset: 4px;
    border-radius: 50%;
    background: white;
}
.match-score-ring span {
    position: relative;
    z-index: 1;
}
.score-high { background: conic-gradient(#22c55e calc(var(--score) * 1%), #e5e7eb 0); color: #16a34a; }
.score-medium { background: conic-gradient(#eab308 calc(var(--score) * 1%), #e5e7eb 0); color: #ca8a04; }
.score-low { background: conic-gradient(#94a3b8 calc(var(--score) * 1%), #e5e7eb 0); color: #64748b; }

.donor-card {
    transition: all 0.3s ease;
    border: 2px solid transparent;
}
.donor-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.donor-card.high-match { border-color: #22c55e; background: linear-gradient(to bottom, #f0fdf4, white); }
.donor-card.medium-match { border-color: #eab308; background: linear-gradient(to bottom, #fefce8, white); }
.donor-card.low-match { border-color: #94a3b8; background: linear-gradient(to bottom, #f8fafc, white); }

.blood-type-badge {
    font-family: monospace;
    font-weight: bold;
    padding: 6px 14px;
    border-radius: 10px;
}

.compatibility-badge {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
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

        // line 66
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching");
        yield "\" 
           class=\"w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-xl flex items-center justify-center text-gray-600 transition\">
            ←
        </a>
        <div>
            <h1 class=\"text-2xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-white\">
                    🔗
                </div>
                Matching Détaillé - Demande #";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 77), "html", null, true);
        yield "
            </h1>
            <p class=\"text-gray-500 mt-1 ml-13\">Analyse complète des donneurs compatibles</p>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
                <div class=\"p-5 bg-gradient-to-r ";
        // line 86
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "urgence", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "from-red-500 to-orange-500";
        } else {
            yield "from-blue-500 to-indigo-500";
        }
        yield " text-white\">
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center text-4xl\">
                                ";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 90) == "sang")) {
            yield "🩸";
        } else {
            yield "🫀";
        }
        // line 91
        yield "                            </div>
                            <div>
                                <div class=\"flex items-center gap-2 mb-1\">
                                    ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "urgence", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                                    <span class=\"px-3 py-1 bg-white/20 rounded-full text-sm font-bold animate-pulse\">
                                        🚨 URGENT
                                    </span>
                                    ";
        }
        // line 99
        yield "                                    <span class=\"text-xl font-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 99)), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"flex items-center gap-4 text-white/80 text-sm\">
                                    <span class=\"flex items-center gap-1\">
                                        <span>📍</span> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "region", [], "any", false, false, false, 103), "html", null, true);
        yield "
                                    </span>
                                    <span class=\"flex items-center gap-1\">
                                        <span>📅</span> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "dateDemande", [], "any", false, false, false, 106), "d/m/Y à H:i"), "html", null, true);
        yield "
                                    </span>
                                    <span class=\"flex items-center gap-1\">
                                        <span>Queue:</span> #";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "rangAttente", [], "any", false, false, false, 109), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                        ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                        <div class=\"blood-type-badge bg-white text-red-600 text-2xl\">
                            ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 116), "html", null, true);
            yield "
                        </div>
                        ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 118
($context["demande"] ?? null), "typeOrgane", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                        <div class=\"blood-type-badge bg-white text-purple-600\">
                            ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeOrgane", [], "any", false, false, false, 120), "html", null, true);
            yield "
                        </div>
                        ";
        }
        // line 123
        yield "                    </div>
                </div>
                <div class=\"p-5\">
                    <div class=\"grid grid-cols-3 gap-4\">
                        <div class=\"text-center p-4 bg-gray-50 rounded-xl\">
                            <p class=\"text-3xl font-bold text-gray-800\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matches"] ?? null)), "html", null, true);
        yield "</p>
                            <p class=\"text-sm text-gray-500\">Donneurs compatibles</p>
                        </div>
                        <div class=\"text-center p-4 bg-green-50 rounded-xl\">
                            <p class=\"text-3xl font-bold text-green-600\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["matches"] ?? null), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "level", [], "any", false, false, false, 132) == "high"); })), "html", null, true);
        yield "</p>
                            <p class=\"text-sm text-gray-500\">Score élevé (≥80%)</p>
                        </div>
                        <div class=\"text-center p-4 bg-yellow-50 rounded-xl\">
                            <p class=\"text-3xl font-bold text-yellow-600\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["matches"] ?? null), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "level", [], "any", false, false, false, 136) == "medium"); })), "html", null, true);
        yield "</p>
                            <p class=\"text-sm text-gray-500\">Score moyen (50-79%)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-5\">
                <div class=\"flex items-center justify-between mb-4\">
                    <h3 class=\"font-bold text-gray-800 flex items-center gap-2\">
                        <span class=\"text-xl\">👥</span> Donneurs Compatibles
                    </h3>
                    <form method=\"post\" action=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching_notify_all", ["demandeId" => CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 148)]), "html", null, true);
        yield "\">
                        <button type=\"submit\" 
                                class=\"px-5 py-2.5 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white rounded-xl font-medium transition flex items-center gap-2 shadow-lg\">
                            <span>📧</span> Notifier tous les donneurs
                        </button>
                    </form>
                </div>

                ";
        // line 156
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matches"] ?? null)) > 0)) {
            // line 157
            yield "                <div class=\"space-y-4\">
                    ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["matches"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 159
                yield "                    <div class=\"donor-card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "level", [], "any", false, false, false, 159), "html", null, true);
                yield "-match rounded-xl p-5 relative overflow-hidden\">
                        ";
                // line 160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "level", [], "any", false, false, false, 160) == "high")) {
                    // line 161
                    yield "                        <div class=\"absolute top-0 right-0 bg-green-500 text-white text-xs px-3 py-1 rounded-bl-xl font-bold flex items-center gap-1\">
                            ⭐ MEILLEUR MATCH
                        </div>
                        ";
                }
                // line 165
                yield "
                        <div class=\"flex items-start gap-5\">
                            <div class=\"match-score-ring score-";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "level", [], "any", false, false, false, 167), "html", null, true);
                yield "\" style=\"--score: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "score", [], "any", false, false, false, 167), "html", null, true);
                yield "\">
                                <span>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "score", [], "any", false, false, false, 168), "html", null, true);
                yield "%</span>
                            </div>

                            <div class=\"flex-1\">
                                <div class=\"flex items-center gap-3 mb-2\">
                                    <h4 class=\"font-bold text-gray-800 text-lg\">";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 173), "prenom", [], "any", false, false, false, 173), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 173), "nom", [], "any", false, false, false, 173), "html", null, true);
                yield "</h4>
                                    <span class=\"blood-type-badge bg-red-100 text-red-700\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 174), "groupeSanguin", [], "any", false, false, false, 174), "html", null, true);
                yield "</span>
                                    ";
                // line 175
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 175), "isDisponible", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 176
                    yield "                                    <span class=\"compatibility-badge bg-green-100 text-green-700\">
                                        ✓ Disponible
                                    </span>
                                    ";
                } else {
                    // line 180
                    yield "                                    <span class=\"compatibility-badge bg-gray-100 text-gray-600\">
                                        ✗ Indisponible
                                    </span>
                                    ";
                }
                // line 184
                yield "                                </div>

                                <div class=\"flex items-center gap-6 text-sm text-gray-500 mb-3\">
                                    <span class=\"flex items-center gap-1\">
                                        <span>🎂</span> ";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 188), "age", [], "any", false, false, false, 188), "html", null, true);
                yield " ans
                                    </span>
                                    <span class=\"flex items-center gap-1\">
                                        <span>📞</span> ";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 191), "telephone", [], "any", false, false, false, 191), "html", null, true);
                yield "
                                    </span>
                                    ";
                // line 193
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 193), "dateDernierDon", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 194
                    yield "                                    ";
                    $context["daysSince"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 194), "dateDernierDon", [], "any", false, false, false, 194)], "method", false, false, false, 194), "days", [], "any", false, false, false, 194);
                    // line 195
                    yield "                                    <span class=\"flex items-center gap-1 ";
                    if ((($context["daysSince"] ?? null) >= 90)) {
                        yield "text-green-600";
                    } else {
                        yield "text-yellow-600";
                    }
                    yield "\">
                                        <span>🩸</span> Dernier don: ";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysSince"] ?? null), "html", null, true);
                    yield " jours
                                    </span>
                                    ";
                } else {
                    // line 199
                    yield "                                    <span class=\"flex items-center gap-1 text-green-600\">
                                        <span>✨</span> Premier don
                                    </span>
                                    ";
                }
                // line 203
                yield "                                </div>

                                <div class=\"flex flex-wrap gap-2 mb-4\">
                                    ";
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "reasons", [], "any", false, false, false, 206));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 207
                    yield "                                    <span class=\"px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium flex items-center gap-1\">
                                        ✓ ";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reason"], "html", null, true);
                    yield "
                                    </span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                yield "                                </div>

                                <div class=\"flex items-center justify-between pt-3 border-t border-gray-200\">
                                    <div class=\"flex items-center gap-2\">
                                        <span class=\"text-xs text-gray-400\">
                                            Inscrit le ";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 216), "createdAt", [], "any", false, false, false, 216), "d/m/Y"), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                    <div class=\"flex gap-2\">
                                        <a href=\"tel:";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 220), "telephone", [], "any", false, false, false, 220), "html", null, true);
                yield "\" 
                                           class=\"px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg text-sm font-medium transition flex items-center gap-1\">
                                            📞 Appeler
                                        </a>
                                        <form method=\"post\" action=\"";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching_notify", ["demandeId" => CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 224), "donorId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "donor", [], "any", false, false, false, 224), "id", [], "any", false, false, false, 224)]), "html", null, true);
                yield "\">
                                            <button type=\"submit\" 
                                                    class=\"px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg text-sm font-medium transition flex items-center gap-1\">
                                                📧 Notifier
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            yield "                </div>
                ";
        } else {
            // line 238
            yield "                <div class=\"text-center py-12 bg-gray-50 rounded-xl\">
                    <div class=\"text-6xl mb-4\">🔍</div>
                    <h4 class=\"font-bold text-gray-800 mb-2\">Aucun donneur compatible trouvé</h4>
                    <p class=\"text-gray-500 mb-4\">Il n'y a pas de donneurs correspondant aux critères de cette demande</p>
                    <div class=\"flex justify-center gap-4\">
                        <a href=\"";
            // line 243
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneurs");
            yield "\" 
                           class=\"px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium\">
                            👥 Voir tous les donneurs
                        </a>
                    </div>
                </div>
                ";
        }
        // line 250
        yield "            </div>
        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-5\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-lg\">📊</span> Statistiques
                </h3>
                <div class=\"space-y-4\">
                    <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                        <span class=\"text-gray-600\">Score moyen</span>
                        <span class=\"font-bold text-gray-800\">
                            ";
        // line 262
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matches"] ?? null)) > 0)) {
            // line 263
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::reduce($this->env, ($context["matches"] ?? null), function ($__carry__, $__m__) use ($context, $macros) { $context["carry"] = $__carry__; $context["m"] = $__m__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "score", [], "any", false, false, false, 263)); }, 0) / Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matches"] ?? null)))), "html", null, true);
            yield "%
                            ";
        } else {
            // line 264
            yield "N/A";
        }
        // line 265
        yield "                        </span>
                    </div>
                    <div class=\"flex justify-between items-center p-3 bg-green-50 rounded-xl\">
                        <span class=\"text-gray-600\">Matches parfaits</span>
                        <span class=\"font-bold text-green-600\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["matches"] ?? null), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "score", [], "any", false, false, false, 269) >= 80); })), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between items-center p-3 bg-yellow-50 rounded-xl\">
                        <span class=\"text-gray-600\">Matches partiels</span>
                        <span class=\"font-bold text-yellow-600\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["matches"] ?? null), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "score", [], "any", false, false, false, 273) >= 50) && (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "score", [], "any", false, false, false, 273) < 80)); })), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                        <span class=\"text-gray-600\">Faibles matches</span>
                        <span class=\"font-bold text-gray-600\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["matches"] ?? null), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "score", [], "any", false, false, false, 277) < 50); })), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>

            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-5\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-lg\">🩸</span> Compatibilité Requise
                </h3>
                ";
        // line 286
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 287
            yield "                <div class=\"text-center p-4 bg-red-50 rounded-xl mb-4\">
                    <p class=\"text-sm text-gray-500 mb-1\">Groupe sanguin recherché</p>
                    <p class=\"text-3xl font-bold text-red-600\">";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 289), "html", null, true);
            yield "</p>
                </div>
                <div class=\"space-y-2 text-sm\">
                    <p class=\"font-medium text-gray-700\">Donneurs compatibles:</p>
                    <div class=\"flex flex-wrap gap-2\">
                        ";
            // line 294
            $context["compatible"] = ["O-" => "Tous", "O+" => "O+, A+, B+, AB+", "A-" => "A+, A-, AB+, AB-", "A+" => "A+, AB+", "B-" => "B+, B-, AB+, AB-", "B+" => "B+, AB+", "AB-" => "AB+, AB-", "AB+" => "AB+"];
            // line 295
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["compatible"] ?? null));
            foreach ($context['_seq'] as $context["donor"] => $context["recipients"]) {
                // line 296
                yield "                            ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 296), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["recipients"], ", "))) {
                    // line 297
                    yield "                            <span class=\"px-2 py-1 bg-green-100 text-green-700 rounded-lg font-mono text-xs\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["donor"], "html", null, true);
                    yield "</span>
                            ";
                }
                // line 299
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['donor'], $context['recipients'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            yield "                    </div>
                </div>
                ";
        } else {
            // line 303
            yield "                <div class=\"text-center py-4 text-gray-500\">
                    <p>Information non spécifiée</p>
                </div>
                ";
        }
        // line 307
        yield "            </div>

            <div class=\"bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-5 border border-indigo-100\">
                <h3 class=\"font-bold text-indigo-800 mb-3 flex items-center gap-2\">
                    <span class=\"text-lg\">💡</span> Recommandations
                </h3>
                <ul class=\"space-y-2 text-sm text-indigo-700\">
                    <li class=\"flex items-start gap-2\">
                        <span>•</span>
                        <span>Priorisez les donneurs avec un score ≥ 80%</span>
                    </li>
                    <li class=\"flex items-start gap-2\">
                        <span>•</span>
                        <span>Contactez au moins 3 donneurs pour assurer un backup</span>
                    </li>
                    <li class=\"flex items-start gap-2\">
                        <span>•</span>
                        <span>Vérifiez la disponibilité par téléphone</span>
                    </li>
                    <li class=\"flex items-start gap-2\">
                        <span>•</span>
                        <span>Les donneurs O- sont universels pour les urgences</span>
                    </li>
                </ul>
            </div>

            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-5\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-lg\">⚡</span> Actions Rapides
                </h3>
                <div class=\"space-y-3\">
                    <a href=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes");
        yield "\" 
                       class=\"block w-full px-4 py-3 bg-gray-100 hover:bg-gray-200 rounded-xl text-gray-700 font-medium text-center transition\">
                        📋 Voir toutes les demandes
                    </a>
                    <a href=\"";
        // line 342
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneurs");
        yield "\" 
                       class=\"block w-full px-4 py-3 bg-blue-100 hover:bg-blue-200 rounded-xl text-blue-700 font-medium text-center transition\">
                        👥 Gérer les donneurs
                    </a>
                </div>
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
        return "admin/don/matching/demande.html.twig";
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
        return array (  670 => 342,  663 => 338,  630 => 307,  624 => 303,  619 => 300,  613 => 299,  607 => 297,  604 => 296,  599 => 295,  597 => 294,  589 => 289,  585 => 287,  583 => 286,  571 => 277,  564 => 273,  557 => 269,  551 => 265,  548 => 264,  542 => 263,  540 => 262,  526 => 250,  516 => 243,  509 => 238,  505 => 236,  487 => 224,  480 => 220,  473 => 216,  466 => 211,  457 => 208,  454 => 207,  450 => 206,  445 => 203,  439 => 199,  433 => 196,  424 => 195,  421 => 194,  419 => 193,  414 => 191,  408 => 188,  402 => 184,  396 => 180,  390 => 176,  388 => 175,  384 => 174,  378 => 173,  370 => 168,  364 => 167,  360 => 165,  354 => 161,  352 => 160,  347 => 159,  343 => 158,  340 => 157,  338 => 156,  327 => 148,  312 => 136,  305 => 132,  298 => 128,  291 => 123,  285 => 120,  282 => 119,  280 => 118,  275 => 116,  272 => 115,  270 => 114,  262 => 109,  256 => 106,  250 => 103,  242 => 99,  236 => 95,  234 => 94,  229 => 91,  223 => 90,  212 => 86,  200 => 77,  188 => 68,  184 => 66,  171 => 65,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/matching/demande.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\matching\\demande.html.twig");
    }
}
