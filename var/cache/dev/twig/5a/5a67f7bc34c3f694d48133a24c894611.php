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

/* admin/aide/carte-medicale.html.twig */
class __TwigTemplate_4bf30e94fda85b094a8347f6f3f96901 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/carte-medicale.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/carte-medicale.html.twig"));

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

        yield "Carte Médicale – Administration";
        
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
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<style>
.lieu-card {
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
}
.lieu-card:hover {
    transform: translateX(4px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.lieu-card.hopital { border-left-color: #ef4444; }
.lieu-card.pharmacie { border-left-color: #8b5cf6; }
.lieu-card.clinique { border-left-color: #f59e0b; }
.lieu-card.cabinet { border-left-color: #10b981; }
.lieu-card.urgence { border-left-color: #dc2626; }
.lieu-card.centre_don { border-left-color: #ec4899; }

.category-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
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
#map {
    border-radius: 1rem;
    z-index: 1;
}
.form-section {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    border: 1px solid #e5e7eb;
}
.category-option {
    transition: all 0.2s ease;
    cursor: pointer;
}
.category-option:hover {
    transform: scale(1.02);
}
.category-option.selected {
    border-color: #10b981 !important;
    background-color: #ecfdf5 !important;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield "<div class=\"space-y-6 animate-fadeIn\" x-data=\"{ showForm: false, selectedCategory: '' }\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center text-white text-xl\">
                    🗺️
                </div>
                Carte Médicale
            </h1>
            <p class=\"text-gray-500 mt-1 ml-16\">Gérez les établissements de santé sur la carte interactive</p>
        </div>
        <button @click=\"showForm = !showForm\" 
                class=\"px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center gap-2\">
            <span x-show=\"!showForm\">➕</span>
            <span x-show=\"showForm\">✕</span>
            <span x-text=\"showForm ? 'Fermer' : 'Ajouter un lieu'\"></span>
        </button>
    </div>

    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            yield "    <div class=\"bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 text-green-800 px-6 py-4 rounded-xl flex items-center gap-3 shadow-sm\">
        <span class=\"text-2xl\">✅</span>
        <span class=\"font-medium\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-5 gap-4\">
        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Total Lieux</p>
                    <p class=\"text-3xl font-bold text-gray-800 mt-1\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["lieux"] ?? null)), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📍
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Hôpitaux</p>
                    <p class=\"text-3xl font-bold text-red-600 mt-1\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["lieux"] ?? null), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["l"] ?? null), "categorie", [], "any", false, false, false, 114) == "hopital"); })), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center text-2xl\">
                    🏥
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Pharmacies</p>
                    <p class=\"text-3xl font-bold text-purple-600 mt-1\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["lieux"] ?? null), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["l"] ?? null), "categorie", [], "any", false, false, false, 126) == "pharmacie"); })), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-2xl\">
                    💊
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Cliniques</p>
                    <p class=\"text-3xl font-bold text-yellow-600 mt-1\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["lieux"] ?? null), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["l"] ?? null), "categorie", [], "any", false, false, false, 138) == "clinique"); })), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center text-2xl\">
                    🏨
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Urgences</p>
                    <p class=\"text-3xl font-bold text-red-600 mt-1\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["lieux"] ?? null), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["l"] ?? null), "categorie", [], "any", false, false, false, 150) == "urgence"); })), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center text-2xl\">
                    🚨
                </div>
            </div>
        </div>
    </div>

    <div x-show=\"showForm\" x-transition class=\"form-section\">
        <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
            <span class=\"text-xl\">➕</span> Ajouter un nouveau lieu
        </h3>
        <p class=\"text-gray-500 text-sm mb-4\">Cliquez sur la carte pour obtenir les coordonnées GPS automatiquement</p>
        <form method=\"post\" class=\"space-y-4\">
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Nom de l'établissement *</label>
                    <input type=\"text\" name=\"nom\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent\"
                           placeholder=\"Ex: Hôpital Charles Nicolle\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Catégorie *</label>
                    <select name=\"categorie\" required class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500\">
                        <option value=\"\">Sélectionner...</option>
                        <option value=\"hopital\">🏥 Hôpital</option>
                        <option value=\"pharmacie\">💊 Pharmacie</option>
                        <option value=\"clinique\">🏨 Clinique</option>
                        <option value=\"cabinet\">👨‍⚕️ Cabinet médical</option>
                        <option value=\"urgence\">🚨 Urgence</option>
                        <option value=\"centre_don\">🩸 Centre de don</option>
                    </select>
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Téléphone</label>
                    <input type=\"text\" name=\"telephone\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500\"
                           placeholder=\"Ex: +216 71 123 456\">
                </div>
            </div>
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">Adresse *</label>
                <input type=\"text\" name=\"adresse\" required
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500\"
                       placeholder=\"Ex: Boulevard du 9 Avril 1938, Tunis\">
            </div>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Latitude *</label>
                    <input type=\"text\" id=\"lat\" name=\"latitude\" required step=\"any\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 bg-gray-50\"
                           placeholder=\"Cliquez sur la carte\" readonly>
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Longitude *</label>
                    <input type=\"text\" id=\"lng\" name=\"longitude\" required step=\"any\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 bg-gray-50\"
                           placeholder=\"Cliquez sur la carte\" readonly>
                </div>
            </div>
            <div class=\"flex justify-end gap-3 pt-4\">
                <button type=\"button\" @click=\"showForm = false\" 
                        class=\"px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl font-semibold transition\">
                    Annuler
                </button>
                <button type=\"submit\" 
                        class=\"px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white rounded-xl font-semibold shadow-lg transition flex items-center gap-2\">
                    <span>📍</span> Ajouter le lieu
                </button>
            </div>
        </form>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
            <div class=\"p-4 bg-gradient-to-r from-green-50 to-emerald-50 border-b border-gray-100\">
                <h3 class=\"font-bold text-gray-800 flex items-center gap-2\">
                    <span class=\"text-xl\">🗺️</span> Carte Interactive
                </h3>
                <p class=\"text-gray-500 text-sm\">Cliquez pour sélectionner une position</p>
            </div>
            <div id=\"map\" style=\"height: 500px;\"></div>
        </div>

        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
            <div class=\"p-4 bg-gradient-to-r from-blue-50 to-indigo-50 border-b border-gray-100\">
                <h3 class=\"font-bold text-gray-800 flex items-center gap-2\">
                    <span class=\"text-xl\">📋</span> Lieux Enregistrés
                </h3>
                <div class=\"flex gap-2 mt-2 flex-wrap\">
                    <button @click=\"selectedCategory = ''\" 
                            :class=\"selectedCategory === '' ? 'bg-blue-600 text-white' : 'bg-white text-gray-700'\"
                            class=\"px-3 py-1 rounded-lg text-sm font-medium transition\">
                        Tous
                    </button>
                    <button @click=\"selectedCategory = 'hopital'\" 
                            :class=\"selectedCategory === 'hopital' ? 'bg-red-600 text-white' : 'bg-white text-gray-700'\"
                            class=\"px-3 py-1 rounded-lg text-sm font-medium transition\">
                        🏥 Hôpitaux
                    </button>
                    <button @click=\"selectedCategory = 'pharmacie'\" 
                            :class=\"selectedCategory === 'pharmacie' ? 'bg-purple-600 text-white' : 'bg-white text-gray-700'\"
                            class=\"px-3 py-1 rounded-lg text-sm font-medium transition\">
                        💊 Pharmacies
                    </button>
                    <button @click=\"selectedCategory = 'clinique'\" 
                            :class=\"selectedCategory === 'clinique' ? 'bg-yellow-600 text-white' : 'bg-white text-gray-700'\"
                            class=\"px-3 py-1 rounded-lg text-sm font-medium transition\">
                        🏨 Cliniques
                    </button>
                </div>
            </div>
            <div class=\"max-h-96 overflow-y-auto p-4 space-y-3\">
                ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lieux"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 265
            yield "                <div class=\"lieu-card ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 265), "html", null, true);
            yield " bg-gray-50 rounded-xl p-4\"
                     x-show=\"selectedCategory === '' || selectedCategory === '";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 266), "html", null, true);
            yield "'\">
                    <div class=\"flex items-start gap-4\">
                        <div class=\"category-icon 
                            ";
            // line 269
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 269) == "hopital")) {
                yield "bg-red-100
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 270
$context["lieu"], "categorie", [], "any", false, false, false, 270) == "pharmacie")) {
                yield "bg-purple-100
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 271
$context["lieu"], "categorie", [], "any", false, false, false, 271) == "clinique")) {
                yield "bg-yellow-100
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 272
$context["lieu"], "categorie", [], "any", false, false, false, 272) == "cabinet")) {
                yield "bg-green-100
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 273
$context["lieu"], "categorie", [], "any", false, false, false, 273) == "urgence")) {
                yield "bg-red-100
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 274
$context["lieu"], "categorie", [], "any", false, false, false, 274) == "centre_don")) {
                yield "bg-pink-100
                            ";
            } else {
                // line 275
                yield "bg-gray-100";
            }
            yield "\">
                            ";
            // line 276
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 276) == "hopital")) {
                yield "🏥
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 277
$context["lieu"], "categorie", [], "any", false, false, false, 277) == "pharmacie")) {
                yield "💊
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 278
$context["lieu"], "categorie", [], "any", false, false, false, 278) == "clinique")) {
                yield "🏨
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 279
$context["lieu"], "categorie", [], "any", false, false, false, 279) == "cabinet")) {
                yield "👨‍⚕️
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 280
$context["lieu"], "categorie", [], "any", false, false, false, 280) == "urgence")) {
                yield "🚨
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 281
$context["lieu"], "categorie", [], "any", false, false, false, 281) == "centre_don")) {
                yield "🩸
                            ";
            } else {
                // line 282
                yield "📍";
            }
            // line 283
            yield "                        </div>
                        <div class=\"flex-1 min-w-0\">
                            <h4 class=\"font-bold text-gray-800\">";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 285), "html", null, true);
            yield "</h4>
                            <p class=\"text-sm text-gray-500 truncate\">";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "adresse", [], "any", false, false, false, 286), "html", null, true);
            yield "</p>
                            <div class=\"flex items-center gap-4 mt-2 text-xs text-gray-400\">
                                ";
            // line 288
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "telephone", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 289
                yield "                                <span class=\"flex items-center gap-1\">
                                    <span>📞</span> ";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "telephone", [], "any", false, false, false, 290), "html", null, true);
                yield "
                                </span>
                                ";
            }
            // line 293
            yield "                                <span class=\"flex items-center gap-1\">
                                    <span>📅</span> ";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "dateCreation", [], "any", false, false, false, 294), "d/m/Y"), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"flex gap-2\">
                            <button onclick=\"focusOnMap(";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "latitude", [], "any", false, false, false, 299), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "longitude", [], "any", false, false, false, 299), "html", null, true);
            yield ")\"
                                    class=\"p-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg transition\" title=\"Voir sur la carte\">
                                📍
                            </button>
                            <form method=\"post\" action=\"";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lieu_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 303)]), "html", null, true);
            yield "\"
                                  onsubmit=\"return confirm('⚠️ Supprimer ce lieu ?');\">
                                <button type=\"submit\" 
                                        class=\"p-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-lg transition\" title=\"Supprimer\">
                                    🗑️
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        // line 313
        if (!$context['_iterated']) {
            // line 314
            yield "                <div class=\"text-center py-12 text-gray-400\">
                    <div class=\"text-5xl mb-3\">📍</div>
                    <p class=\"font-medium\">Aucun lieu enregistré</p>
                    <p class=\"text-sm\">Ajoutez votre premier établissement médical</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "            </div>
        </div>
    </div>

    <div class=\"bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl p-6 text-white\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-3xl\">
                    💡
                </div>
                <div>
                    <h3 class=\"font-bold text-lg\">Conseils d'utilisation</h3>
                    <p class=\"text-green-100 text-sm\">Cliquez sur la carte pour obtenir les coordonnées GPS. Utilisez les filtres pour trouver rapidement un type d'établissement.</p>
                </div>
            </div>
            <a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_map");
        yield "\" target=\"_blank\"
               class=\"px-6 py-3 bg-white/20 hover:bg-white/30 rounded-xl font-semibold transition flex items-center gap-2\">
                👁️ Voir la carte publique
            </a>
        </div>
    </div>
</div>

<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script>
var map = L.map('map').setView([36.8065, 10.1815], 8);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
}).addTo(map);

var markers = [];

";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lieux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 354
            yield "(function() {
    var icon = L.divIcon({
        html: `<div style=\"background: ";
            // line 356
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "hopital")) {
                yield "#ef4444";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "pharmacie")) {
                yield "#8b5cf6";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "clinique")) {
                yield "#f59e0b";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "urgence")) {
                yield "#dc2626";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "centre_don")) {
                yield "#ec4899";
            } else {
                yield "#10b981";
            }
            yield "; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; box-shadow: 0 2px 8px rgba(0,0,0,0.3); border: 2px solid white;\">";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "hopital")) {
                yield "🏥";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "pharmacie")) {
                yield "💊";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "clinique")) {
                yield "🏨";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "cabinet")) {
                yield "👨‍⚕️";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "urgence")) {
                yield "🚨";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "categorie", [], "any", false, false, false, 356) == "centre_don")) {
                yield "🩸";
            } else {
                yield "📍";
            }
            yield "</div>`,
        className: 'custom-marker',
        iconSize: [32, 32],
        iconAnchor: [16, 16]
    });
    
    var marker = L.marker([";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "latitude", [], "any", false, false, false, 362), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "longitude", [], "any", false, false, false, 362), "html", null, true);
            yield "], { icon: icon })
        .addTo(map)
        .bindPopup(`
            <div style=\"min-width: 200px;\">
                <h3 style=\"font-weight: bold; font-size: 14px; margin-bottom: 5px;\">";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 366), "html", null, true);
            yield "</h3>
                <p style=\"color: #666; font-size: 12px; margin-bottom: 5px;\">";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "adresse", [], "any", false, false, false, 367), "html", null, true);
            yield "</p>
                ";
            // line 368
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "telephone", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 369
                yield "                <p style=\"font-size: 12px;\">📞 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "telephone", [], "any", false, false, false, 369), "html", null, true);
                yield "</p>
                ";
            }
            // line 371
            yield "                <div style=\"margin-top: 8px;\">
                    <a href=\"https://www.google.com/maps/dir/?api=1&destination=";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "latitude", [], "any", false, false, false, 372), "html", null, true);
            yield ",";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "longitude", [], "any", false, false, false, 372), "html", null, true);
            yield "\" 
                       target=\"_blank\"
                       style=\"display: inline-block; background: #3b82f6; color: white; padding: 4px 10px; border-radius: 6px; text-decoration: none; font-size: 11px;\">
                        🧭 Itinéraire
                    </a>
                </div>
            </div>
        `);
    markers.push(marker);
})();
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        yield "
map.on('click', function(e) {
    document.getElementById('lat').value = e.latlng.lat.toFixed(6);
    document.getElementById('lng').value = e.latlng.lng.toFixed(6);
});

function focusOnMap(lat, lng) {
    map.setView([lat, lng], 15);
    markers.forEach(function(m) {
        var pos = m.getLatLng();
        if (Math.abs(pos.lat - lat) < 0.0001 && Math.abs(pos.lng - lng) < 0.0001) {
            m.openPopup();
        }
    });
}
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
        return "admin/aide/carte-medicale.html.twig";
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
        return array (  687 => 383,  668 => 372,  665 => 371,  659 => 369,  657 => 368,  653 => 367,  649 => 366,  640 => 362,  603 => 356,  599 => 354,  595 => 353,  574 => 335,  557 => 320,  546 => 314,  544 => 313,  529 => 303,  520 => 299,  512 => 294,  509 => 293,  503 => 290,  500 => 289,  498 => 288,  493 => 286,  489 => 285,  485 => 283,  482 => 282,  477 => 281,  473 => 280,  469 => 279,  465 => 278,  461 => 277,  457 => 276,  452 => 275,  447 => 274,  443 => 273,  439 => 272,  435 => 271,  431 => 270,  427 => 269,  421 => 266,  416 => 265,  411 => 264,  294 => 150,  279 => 138,  264 => 126,  249 => 114,  234 => 102,  226 => 96,  217 => 93,  213 => 91,  209 => 90,  188 => 71,  175 => 70,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/carte-medicale.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\carte-medicale.html.twig");
    }
}
