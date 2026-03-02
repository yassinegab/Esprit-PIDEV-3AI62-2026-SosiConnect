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

/* front/don/index.html.twig */
class __TwigTemplate_96af65defddaa39839c0c0b9ad04cfd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/index.html.twig"));

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

        yield "Module Don";
        
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
<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
<style>
.hero-gradient {
    background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 50%, #f9a8d4 100%);
}
.card-hover {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.card-hover:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "<div class=\"space-y-8 animate-fadeIn\">
    <div class=\"hero-gradient rounded-2xl p-8 relative overflow-hidden\">
        <div class=\"absolute top-0 right-0 w-64 h-64 bg-pink-300 rounded-full opacity-20 -translate-y-1/2 translate-x-1/2\"></div>
        <div class=\"absolute bottom-0 left-0 w-48 h-48 bg-pink-400 rounded-full opacity-20 translate-y-1/2 -translate-x-1/2\"></div>
        
        <div class=\"relative z-10\">
            <h1 class=\"text-4xl font-bold text-gray-800 mb-2\" style=\"font-family: 'Poppins', sans-serif;\">
                🩸 Faites un Don, Sauvez des Vies
            </h1>
            <p class=\"text-lg text-gray-600 max-w-2xl\">
                Chaque don compte. Rejoignez notre communauté de donneurs et aidez ceux qui en ont besoin.
            </p>
            <div class=\"flex gap-4 mt-6\">
                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new");
        yield "\" class=\"bg-pink-600 hover:bg-pink-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center gap-2\">
                    <span>💝</span> Déclarer un don
                </a>
                <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donneur_inscription");
        yield "\" class=\"bg-white hover:bg-gray-50 text-pink-600 px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center gap-2\">
                    <span>📝</span> Devenir donneur
                </a>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-gray-500 text-sm font-medium\">Total Dons</p>
                    <p class=\"text-3xl font-bold text-gray-800 mt-1\" style=\"font-family: 'Poppins', sans-serif;\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-pink-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📊
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-gray-500 text-sm font-medium\">Validés</p>
                    <p class=\"text-3xl font-bold text-green-600 mt-1\" style=\"font-family: 'Poppins', sans-serif;\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "valides", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-2xl\">
                    ✅
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-gray-500 text-sm font-medium\">En attente</p>
                    <p class=\"text-3xl font-bold text-yellow-600 mt-1\" style=\"font-family: 'Poppins', sans-serif;\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "attente", [], "any", false, false, false, 76), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center text-2xl\">
                    ⏳
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-gray-500 text-sm font-medium\">Dons Urgents</p>
                    <p class=\"text-3xl font-bold text-red-600 mt-1\" style=\"font-family: 'Poppins', sans-serif;\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "urgences", [], "any", false, false, false, 88), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center text-2xl\">
                    🚨
                </div>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"flex items-center gap-4 mb-4\">
                <div class=\"w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center text-3xl text-white group-hover:scale-110 transition\">
                    💝
                </div>
                <div>
                    <h3 class=\"font-bold text-gray-800 text-lg\">Déclarer un Don</h3>
                    <p class=\"text-gray-500 text-sm\">Sang ou organe</p>
                </div>
            </div>
            <p class=\"text-gray-600 text-sm mb-4\">
                Déclarez votre don et aidez les personnes dans le besoin. Chaque geste compte.
            </p>
            <span class=\"text-pink-600 font-semibold text-sm group-hover:text-pink-700\">
                Déclarer maintenant →
            </span>
        </a>

        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donneur_inscription");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"flex items-center gap-4 mb-4\">
                <div class=\"w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center text-3xl text-white group-hover:scale-110 transition\">
                    👤
                </div>
                <div>
                    <h3 class=\"font-bold text-gray-800 text-lg\">Devenir Donneur</h3>
                    <p class=\"text-gray-500 text-sm\">Inscription rapide</p>
                </div>
            </div>
            <p class=\"text-gray-600 text-sm mb-4\">
                Inscrivez-vous comme donneur et recevez des notifications pour les besoins urgents.
            </p>
            <span class=\"text-purple-600 font-semibold text-sm group-hover:text-purple-700\">
                S'inscrire →
            </span>
        </a>

        <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_don");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"flex items-center gap-4 mb-4\">
                <div class=\"w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center text-3xl text-white group-hover:scale-110 transition\">
                    📥
                </div>
                <div>
                    <h3 class=\"font-bold text-gray-800 text-lg\">Faire une Demande</h3>
                    <p class=\"text-gray-500 text-sm\">Demande de don</p>
                </div>
            </div>
            <p class=\"text-gray-600 text-sm mb-4\">
                Besoin d'un don ? Soumettez votre demande et nous vous mettrons en contact avec des donneurs.
            </p>
            <span class=\"text-blue-600 font-semibold text-sm group-hover:text-blue-700\">
                Faire une demande →
            </span>
        </a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex justify-between items-center mb-4\">
                <h3 class=\"font-bold text-gray-800 text-lg\">📋 Dons Récents</h3>
                <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_history");
        yield "\" class=\"text-pink-600 text-sm font-medium hover:text-pink-700\">
                    Voir tout →
                </a>
            </div>
            <div class=\"space-y-3\">
                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recentDons"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
            // line 163
            yield "                <div class=\"flex items-center gap-4 p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition\">
                    <div class=\"w-10 h-10 rounded-xl flex items-center justify-center text-xl ";
            // line 164
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 164) == "sang")) ? ("bg-red-100") : ("bg-purple-100"));
            yield "\">
                        ";
            // line 165
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 165) == "sang")) ? ("🩸") : ("🫀"));
            yield "
                    </div>
                    <div class=\"flex-1\">
                        <div class=\"font-medium text-gray-800\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 168)), "html", null, true);
            yield "</div>
                        <div class=\"text-xs text-gray-500\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "region", [], "any", false, false, false, 169), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "dateDon", [], "any", false, false, false, 169), "d/m/Y"), "html", null, true);
            yield "</div>
                    </div>
                    <span class=\"px-3 py-1 ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusBadgeClass", [], "any", false, false, false, 171), "html", null, true);
            yield " rounded-full text-xs font-semibold\">
                        ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusIcon", [], "any", false, false, false, 172), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 172), "html", null, true);
            yield "
                    </span>
                </div>
                ";
            $context['_iterated'] = true;
        }
        // line 175
        if (!$context['_iterated']) {
            // line 176
            yield "                <div class=\"text-center py-8 text-gray-400\">
                    <div class=\"text-3xl mb-2\">📭</div>
                    <p>Aucun don récent</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['don'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "            </div>
        </div>

        <div class=\"bg-gradient-to-br from-pink-50 to-purple-50 rounded-2xl p-6 border border-pink-100\">
            <h3 class=\"font-bold text-gray-800 text-lg mb-4\">💡 Pourquoi Donner ?</h3>
            <div class=\"space-y-4\">
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-pink-200 rounded-lg flex items-center justify-center text-pink-600 font-bold text-sm\">1</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Sauver des vies</p>
                        <p class=\"text-sm text-gray-600\">Un seul don peut sauver jusqu'à 3 vies</p>
                    </div>
                </div>
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-purple-200 rounded-lg flex items-center justify-center text-purple-600 font-bold text-sm\">2</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Don anonyme</p>
                        <p class=\"text-sm text-gray-600\">Votre identité reste confidentielle</p>
                    </div>
                </div>
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-indigo-200 rounded-lg flex items-center justify-center text-indigo-600 font-bold text-sm\">3</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Certificat officiel</p>
                        <p class=\"text-sm text-gray-600\">Recevez un certificat PDF pour chaque don validé</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
        <div class=\"flex justify-between items-center mb-4\">
            <h3 class=\"font-bold text-gray-800 text-lg\">🎬 Tutoriels sur les Dons</h3>
            <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials", ["category" => "don-sang"]);
        yield "\" class=\"text-pink-600 text-sm font-medium hover:text-pink-700\">
                Voir tous →
            </a>
        </div>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
            <a href=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition group\">
                <div class=\"flex items-center gap-3 mb-2\">
                    <div class=\"w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center text-xl group-hover:scale-110 transition\">
                        🩸
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Don de Sang</p>
                        <p class=\"text-xs text-gray-500\">Guide complet</p>
                    </div>
                </div>
            </a>
            <a href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition group\">
                <div class=\"flex items-center gap-3 mb-2\">
                    <div class=\"w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-xl group-hover:scale-110 transition\">
                        🫀
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Don d'Organe</p>
                        <p class=\"text-xs text-gray-500\">Tout savoir</p>
                    </div>
                </div>
            </a>
            <a href=\"";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition group\">
                <div class=\"flex items-center gap-3 mb-2\">
                    <div class=\"w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-xl group-hover:scale-110 transition\">
                        📜
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Certificats</p>
                        <p class=\"text-xs text-gray-500\">Comment obtenir</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class=\"bg-gradient-to-r from-pink-600 to-rose-600 rounded-2xl p-8 text-white\">
        <div class=\"flex items-center justify-between\">
            <div>
                <h3 class=\"text-2xl font-bold mb-2\">🚨 Besoin Urgent de Sang</h3>
                <p class=\"text-pink-100\">Des patients ont besoin de votre aide maintenant. Chaque seconde compte.</p>
            </div>
            <a href=\"";
        // line 262
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new");
        yield "\" class=\"bg-white text-pink-600 px-6 py-3 rounded-xl font-semibold hover:bg-pink-50 transition shadow-lg\">
                Répondre à l'urgence
            </a>
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
        return "front/don/index.html.twig";
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
        return array (  461 => 262,  438 => 242,  424 => 231,  410 => 220,  402 => 215,  366 => 181,  356 => 176,  354 => 175,  344 => 172,  340 => 171,  333 => 169,  329 => 168,  323 => 165,  319 => 164,  316 => 163,  311 => 162,  303 => 157,  277 => 134,  256 => 116,  235 => 98,  222 => 88,  207 => 76,  192 => 64,  177 => 52,  162 => 40,  156 => 37,  141 => 24,  128 => 23,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\index.html.twig");
    }
}
