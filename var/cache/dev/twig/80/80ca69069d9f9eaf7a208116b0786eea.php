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

/* admin/don/matching/index.html.twig */
class __TwigTemplate_7e03b6dda301344bb14873d37e3ee5b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/matching/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/matching/index.html.twig"));

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

        yield "Matching Donneurs";
        
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
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
    position: relative;
}
.match-score-ring::before {
    content: '';
    position: absolute;
    inset: 3px;
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
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
.donor-card.high-match { border-color: #22c55e; }
.donor-card.medium-match { border-color: #eab308; }
.donor-card.low-match { border-color: #94a3b8; }

.demande-card {
    transition: all 0.3s ease;
}
.demande-card:hover {
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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

.blood-type-badge {
    font-family: monospace;
    font-weight: bold;
    padding: 4px 10px;
    border-radius: 8px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-white text-xl\">
                    🔗
                </div>
                Matching Intelligent
            </h1>
            <p class=\"text-gray-500 mt-1 ml-16\">Trouvez les meilleurs donneurs compatibles pour chaque demande</p>
        </div>
        <div class=\"flex gap-3\">
            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes");
        yield "\" class=\"px-5 py-3 bg-white border border-gray-200 hover:bg-gray-50 rounded-xl font-medium transition flex items-center gap-2\">
                📋 Toutes les demandes
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Demandes Urgentes</p>
                    <p class=\"text-3xl font-bold text-red-600 mt-1\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["autoMatches"] ?? null)), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">En attente de matching</p>
                </div>
                <div class=\"w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center text-2xl\">
                    🚨
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Matches Trouvés</p>
                    <p class=\"text-3xl font-bold text-green-600 mt-1\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, ($context["autoMatches"] ?? null), function ($__carry__, $__m__) use ($context, $macros) { $context["carry"] = $__carry__; $context["m"] = $__m__; return (($context["carry"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "topDonors", [], "any", false, false, false, 112))); }, 0), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">Donneurs compatibles</p>
                </div>
                <div class=\"w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-2xl\">
                    ✅
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Matches Élevés</p>
                    <p class=\"text-3xl font-bold text-emerald-600 mt-1\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, ($context["autoMatches"] ?? null), function ($__carry__, $__m__) use ($context, $macros) { $context["carry"] = $__carry__; $context["m"] = $__m__; return (($context["carry"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "topDonors", [], "any", false, false, false, 125), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["d"] ?? null), "level", [], "any", false, false, false, 125) == "high"); }))); }, 0), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">Score ≥ 80%</p>
                </div>
                <div class=\"w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-2xl\">
                    🎯
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Prêts à Notifier</p>
                    <p class=\"text-3xl font-bold text-blue-600 mt-1\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, ($context["autoMatches"] ?? null), function ($__carry__, $__m__) use ($context, $macros) { $context["carry"] = $__carry__; $context["m"] = $__m__; return (($context["carry"] ?? null) + (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "topDonors", [], "any", false, false, false, 138)) > 0)) ? (1) : (0))); }, 0), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">Demandes notifiables</p>
                </div>
                <div class=\"w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📧
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-2xl p-6 text-white\">
        <div class=\"flex items-center gap-4\">
            <div class=\"w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-4xl\">
                🎯
            </div>
            <div class=\"flex-1\">
                <h3 class=\"font-bold text-xl mb-1\">Algorithme de Matching Intelligent</h3>
                <p class=\"text-white/80 text-sm\">
                    Notre système analyse automatiquement la compatibilité des groupes sanguins, l'éligibilité au don, 
                    l'âge du donneur et son historique pour trouver les meilleures correspondances possibles.
                </p>
            </div>
            <div class=\"text-right hidden md:block\">
                <div class=\"flex gap-6\">
                    <div>
                        <p class=\"text-3xl font-bold\">95%</p>
                        <p class=\"text-xs text-white/70\">Précision</p>
                    </div>
                    <div>
                        <p class=\"text-3xl font-bold\">&lt;1s</p>
                        <p class=\"text-xs text-white/70\">Analyse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 175
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["autoMatches"] ?? null)) > 0)) {
            // line 176
            yield "    <div class=\"space-y-6\">
        <div class=\"flex items-center justify-between\">
            <h2 class=\"text-xl font-bold text-gray-800 flex items-center gap-2\">
                <span class=\"text-2xl\">🚨</span> Demandes Urgentes avec Matches
            </h2>
            <span class=\"px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-semibold animate-pulse\">
                ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["autoMatches"] ?? null)), "html", null, true);
            yield " demande(s) en attente
            </span>
        </div>

        ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["autoMatches"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 187
                yield "        <div class=\"demande-card bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
            <div class=\"p-5 bg-gradient-to-r from-red-50 to-orange-50 border-b border-red-100\">
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-4\">
                        <div class=\"w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center text-3xl\">
                            ";
                // line 192
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 192), "typeDemande", [], "any", false, false, false, 192) == "sang")) {
                    yield "🩸";
                } else {
                    yield "🫀";
                }
                // line 193
                yield "                        </div>
                        <div>
                            <div class=\"flex items-center gap-2 mb-1\">
                                <span class=\"px-2 py-0.5 bg-red-500 text-white rounded-full text-xs font-bold animate-pulse\">
                                    🚨 URGENT
                                </span>
                                <span class=\"font-bold text-gray-800 text-lg\">";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 199), "typeDemande", [], "any", false, false, false, 199)), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"flex items-center gap-4 text-sm text-gray-500\">
                                <span class=\"flex items-center gap-1\">
                                    <span>📍</span> ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 203), "region", [], "any", false, false, false, 203), "html", null, true);
                yield "
                                </span>
                                ";
                // line 205
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 205), "typeSanguin", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 206
                    yield "                                <span class=\"flex items-center gap-1\">
                                    <span class=\"blood-type-badge bg-red-100 text-red-700\">";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 207), "typeSanguin", [], "any", false, false, false, 207), "html", null, true);
                    yield "</span>
                                </span>
                                ";
                }
                // line 210
                yield "                                <span class=\"flex items-center gap-1\">
                                    <span>📅</span> ";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 211), "dateDemande", [], "any", false, false, false, 211), "d/m/Y"), "html", null, true);
                yield "
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"flex gap-3\">
                        <a href=\"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching_demande", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 217), "id", [], "any", false, false, false, 217)]), "html", null, true);
                yield "\" 
                           class=\"px-5 py-2.5 bg-white border border-gray-200 hover:bg-gray-50 rounded-xl font-medium transition flex items-center gap-2 shadow-sm\">
                            <span>👁️</span> Détails
                        </a>
                        <form method=\"post\" action=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching_notify_all", ["demandeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 221), "id", [], "any", false, false, false, 221)]), "html", null, true);
                yield "\">
                            <button type=\"submit\" 
                                    class=\"px-5 py-2.5 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white rounded-xl font-medium transition flex items-center gap-2 shadow-lg\">
                                <span>📧</span> Notifier tous (";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "topDonors", [], "any", false, false, false, 224)), "html", null, true);
                yield ")
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"p-5\">
                <h4 class=\"font-semibold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-lg\">👥</span> Donneurs Compatibles Trouvés
                    <span class=\"px-2 py-0.5 bg-gray-100 text-gray-600 rounded-full text-xs\">";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "topDonors", [], "any", false, false, false, 234)), "html", null, true);
                yield " donneur(s)</span>
                </h4>
                
                ";
                // line 237
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "topDonors", [], "any", false, false, false, 237)) > 0)) {
                    // line 238
                    yield "                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                    ";
                    // line 239
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "topDonors", [], "any", false, false, false, 239));
                    foreach ($context['_seq'] as $context["_key"] => $context["donorMatch"]) {
                        // line 240
                        yield "                    <div class=\"donor-card ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "level", [], "any", false, false, false, 240), "html", null, true);
                        yield "-match bg-gray-50 rounded-xl p-4 relative overflow-hidden\">
                        ";
                        // line 241
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "level", [], "any", false, false, false, 241) == "high")) {
                            // line 242
                            yield "                        <div class=\"absolute top-0 right-0 bg-green-500 text-white text-xs px-2 py-1 rounded-bl-lg font-bold\">
                            ⭐ TOP MATCH
                        </div>
                        ";
                        }
                        // line 246
                        yield "                        
                        <div class=\"flex items-start gap-3 mb-3\">
                            <div class=\"match-score-ring score-";
                        // line 248
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "level", [], "any", false, false, false, 248), "html", null, true);
                        yield "\" style=\"--score: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "score", [], "any", false, false, false, 248), "html", null, true);
                        yield "\">
                                <span>";
                        // line 249
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "score", [], "any", false, false, false, 249), "html", null, true);
                        yield "%</span>
                            </div>
                            <div class=\"flex-1\">
                                <h5 class=\"font-bold text-gray-800\">";
                        // line 252
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "donor", [], "any", false, false, false, 252), "prenom", [], "any", false, false, false, 252), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "donor", [], "any", false, false, false, 252), "nom", [], "any", false, false, false, 252), "html", null, true);
                        yield "</h5>
                                <div class=\"flex items-center gap-2 mt-1\">
                                    <span class=\"blood-type-badge bg-red-100 text-red-700 text-xs\">";
                        // line 254
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "donor", [], "any", false, false, false, 254), "groupeSanguin", [], "any", false, false, false, 254), "html", null, true);
                        yield "</span>
                                    <span class=\"text-gray-500 text-xs\">";
                        // line 255
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "donor", [], "any", false, false, false, 255), "age", [], "any", false, false, false, 255), "html", null, true);
                        yield " ans</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"space-y-1 mb-3\">
                            ";
                        // line 261
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "reasons", [], "any", false, false, false, 261));
                        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                            // line 262
                            yield "                            <div class=\"flex items-center gap-2 text-xs text-gray-600\">
                                <span class=\"text-green-500\">✓</span>
                                <span>";
                            // line 264
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reason"], "html", null, true);
                            yield "</span>
                            </div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['reason'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 267
                        yield "                        </div>

                        <div class=\"flex items-center justify-between pt-3 border-t border-gray-200\">
                            <span class=\"text-xs text-gray-400\">
                                📞 ";
                        // line 271
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "donor", [], "any", false, false, false, 271), "telephone", [], "any", false, false, false, 271), "html", null, true);
                        yield "
                            </span>
                            <form method=\"post\" action=\"";
                        // line 273
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching_notify", ["demandeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "demande", [], "any", false, false, false, 273), "id", [], "any", false, false, false, 273), "donorId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["donorMatch"], "donor", [], "any", false, false, false, 273), "id", [], "any", false, false, false, 273)]), "html", null, true);
                        yield "\">
                                <button type=\"submit\" 
                                        class=\"px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-xs font-medium transition flex items-center gap-1\">
                                    📧 Notifier
                                </button>
                            </form>
                        </div>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['donorMatch'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 282
                    yield "                </div>
                ";
                } else {
                    // line 284
                    yield "                <div class=\"text-center py-8 bg-gray-50 rounded-xl\">
                    <div class=\"text-4xl mb-2\">🔍</div>
                    <p class=\"text-gray-500 font-medium\">Aucun donneur compatible trouvé</p>
                    <p class=\"text-gray-400 text-sm\">Essayez d'élargir les critères de recherche</p>
                </div>
                ";
                }
                // line 290
                yield "            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            yield "    </div>
    ";
        } else {
            // line 295
            yield "    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-16 text-center\">
        <div class=\"w-24 h-24 bg-green-100 rounded-full flex items-center justify-center text-5xl mx-auto mb-4\">
            ✅
        </div>
        <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucune demande urgente en attente</h3>
        <p class=\"text-gray-500 mb-6\">Toutes les demandes urgentes ont été traitées</p>
        <a href=\"";
            // line 301
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes");
            yield "\" 
           class=\"px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-xl font-semibold inline-flex items-center gap-2\">
            📋 Voir toutes les demandes
        </a>
    </div>
    ";
        }
        // line 307
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex items-center gap-3 mb-4\">
                <div class=\"w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-xl\">🩸</div>
                <h3 class=\"font-bold text-gray-800\">Compatibilité Sang</h3>
            </div>
            <div class=\"space-y-2 text-sm\">
                <div class=\"flex justify-between items-center p-2 bg-gray-50 rounded-lg\">
                    <span class=\"font-mono text-red-600 font-bold\">O-</span>
                    <span class=\"text-gray-600\">Donneur universel</span>
                </div>
                <div class=\"flex justify-between items-center p-2 bg-gray-50 rounded-lg\">
                    <span class=\"font-mono text-red-600 font-bold\">AB+</span>
                    <span class=\"text-gray-600\">Receveur universel</span>
                </div>
                <div class=\"flex justify-between items-center p-2 bg-gray-50 rounded-lg\">
                    <span class=\"font-mono text-red-600 font-bold\">A+</span>
                    <span class=\"text-gray-600\">Le plus courant</span>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex items-center gap-3 mb-4\">
                <div class=\"w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-xl\">📊</div>
                <h3 class=\"font-bold text-gray-800\">Critères de Score</h3>
            </div>
            <div class=\"space-y-2 text-sm\">
                <div class=\"flex justify-between items-center p-2 bg-gray-50 rounded-lg\">
                    <span class=\"text-gray-600\">Groupe compatible</span>
                    <span class=\"font-bold text-green-600\">+50 pts</span>
                </div>
                <div class=\"flex justify-between items-center p-2 bg-gray-50 rounded-lg\">
                    <span class=\"text-gray-600\">Même groupe</span>
                    <span class=\"font-bold text-green-600\">+20 pts</span>
                </div>
                <div class=\"flex justify-between items-center p-2 bg-gray-50 rounded-lg\">
                    <span class=\"text-gray-600\">Éligible (90+ jours)</span>
                    <span class=\"font-bold text-green-600\">+15 pts</span>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex items-center gap-3 mb-4\">
                <div class=\"w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-xl\">💡</div>
                <h3 class=\"font-bold text-gray-800\">Conseils</h3>
            </div>
            <div class=\"space-y-2 text-sm text-gray-600\">
                <p>• Priorisez les donneurs avec un score ≥ 80%</p>
                <p>• Contactez plusieurs donneurs pour assurer un backup</p>
                <p>• Vérifiez la disponibilité avant notification</p>
                <p>• Les donneurs O- sont prioritaires pour les urgences</p>
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
        return "admin/don/matching/index.html.twig";
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
        return array (  560 => 307,  551 => 301,  543 => 295,  539 => 293,  531 => 290,  523 => 284,  519 => 282,  504 => 273,  499 => 271,  493 => 267,  484 => 264,  480 => 262,  476 => 261,  467 => 255,  463 => 254,  456 => 252,  450 => 249,  444 => 248,  440 => 246,  434 => 242,  432 => 241,  427 => 240,  423 => 239,  420 => 238,  418 => 237,  412 => 234,  399 => 224,  393 => 221,  386 => 217,  377 => 211,  374 => 210,  368 => 207,  365 => 206,  363 => 205,  358 => 203,  351 => 199,  343 => 193,  337 => 192,  330 => 187,  326 => 186,  319 => 182,  311 => 176,  309 => 175,  269 => 138,  253 => 125,  237 => 112,  221 => 99,  207 => 88,  193 => 76,  180 => 75,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/matching/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\matching\\index.html.twig");
    }
}
