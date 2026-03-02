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

/* front/aide/index.html.twig */
class __TwigTemplate_ca654a6704b58e7c32341aa8a7ec585e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/index.html.twig"));

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

        yield "Centre d'Aide";
        
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
.hero-gradient-aide {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 50%, #93c5fd 100%);
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
    <div class=\"hero-gradient-aide rounded-2xl p-8 relative overflow-hidden\">
        <div class=\"absolute top-0 right-0 w-64 h-64 bg-blue-300 rounded-full opacity-20 -translate-y-1/2 translate-x-1/2\"></div>
        <div class=\"absolute bottom-0 left-0 w-48 h-48 bg-blue-400 rounded-full opacity-20 translate-y-1/2 -translate-x-1/2\"></div>
        
        <div class=\"relative z-10\">
            <h1 class=\"text-4xl font-bold text-gray-800 mb-2\" style=\"font-family: 'Poppins', sans-serif;\">
                🆘 Centre d'Aide & Assistance
            </h1>
            <p class=\"text-lg text-gray-600 max-w-2xl\">
                Besoin d'aide ? Gérez vos urgences, contacts et trouvez les réponses à vos questions.
            </p>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-5 gap-6\">
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence_index");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border-2 border-red-200 group\">
            <div class=\"w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center text-2xl mb-4 group-hover:bg-red-200 transition group-hover:scale-110\">
                🚨
            </div>
            <h3 class=\"font-bold text-gray-800 text-lg mb-1\">Déclencher Urgence</h3>
            <p class=\"text-gray-500 text-sm\">Envoyer position aux contacts</p>
        </a>

        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_urgence_index");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center text-2xl mb-4 group-hover:bg-orange-200 transition group-hover:scale-110\">
                📱
            </div>
            <h3 class=\"font-bold text-gray-800 text-lg mb-1\">Contacts d'Urgence</h3>
            <p class=\"text-gray-500 text-sm\">Gérer vos contacts</p>
        </a>

        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-2xl mb-4 group-hover:bg-purple-200 transition group-hover:scale-110\">
                ❓
            </div>
            <h3 class=\"font-bold text-gray-800 text-lg mb-1\">FAQ</h3>
            <p class=\"text-gray-500 text-sm\">Questions fréquentes</p>
        </a>

        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-2xl mb-4 group-hover:bg-blue-200 transition group-hover:scale-110\">
                🎫
            </div>
            <h3 class=\"font-bold text-gray-800 text-lg mb-1\">Support</h3>
            <p class=\"text-gray-500 text-sm\">Créer un ticket</p>
        </a>

        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100 group\">
            <div class=\"w-14 h-14 bg-pink-100 rounded-2xl flex items-center justify-center text-2xl mb-4 group-hover:bg-pink-200 transition group-hover:scale-110\">
                🎬
            </div>
            <h3 class=\"font-bold text-gray-800 text-lg mb-1\">Tutoriels</h3>
            <p class=\"text-gray-500 text-sm\">Guides vidéo</p>
        </a>
    </div>

    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_map");
        yield "\" class=\"block bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl p-6 text-white hover:shadow-xl transition\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-2xl\">
                    🗺️
                </div>
                <div>
                    <h3 class=\"text-xl font-bold\">Carte Médicale</h3>
                    <p class=\"text-green-100\">Trouvez les médecins, pharmacies et hôpitaux près de vous</p>
                </div>
            </div>
            <span class=\"text-3xl\">→</span>
        </div>
    </a>

    <div class=\"bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-8 text-white\">
        <div class=\"flex items-center justify-between flex-wrap gap-4\">
            <div>
                <h3 class=\"text-2xl font-bold mb-2\">🚨 Urgence - Envoyer votre position</h3>
                <p class=\"text-red-100\">En cas d'urgence, envoyez votre localisation GPS à tous vos contacts d'urgence en un clic.</p>
            </div>
            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence_index");
        yield "\" class=\"bg-white text-red-600 px-8 py-4 rounded-xl font-bold hover:bg-red-50 transition shadow-lg flex items-center gap-2\">
                <span class=\"text-2xl\">🆘</span> Déclencher Urgence
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex justify-between items-center mb-4\">
                <h3 class=\"font-bold text-gray-800 text-lg\">🔥 Questions Populaires</h3>
                <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
        yield "\" class=\"text-blue-600 text-sm font-medium hover:text-blue-700\">
                    Voir tout →
                </a>
            </div>
            <div class=\"space-y-3\">
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["popularFaqs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 118
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
            yield "\" class=\"block p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition\">
                    <div class=\"flex items-start gap-3\">
                        <span class=\"text-blue-500 mt-1\">❓</span>
                        <div>
                            <p class=\"font-medium text-gray-800\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
                            <p class=\"text-xs text-gray-500 mt-1\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "viewCount", [], "any", false, false, false, 123), "html", null, true);
            yield " vues • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "helpfulCount", [], "any", false, false, false, 123), "html", null, true);
            yield " utiles</p>
                        </div>
                    </div>
                </a>
                ";
            $context['_iterated'] = true;
        }
        // line 127
        if (!$context['_iterated']) {
            // line 128
            yield "                <div class=\"text-center py-8 text-gray-400\">
                    <p>Aucune FAQ disponible</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['faq'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "            </div>
        </div>

        <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100\">
            <h3 class=\"font-bold text-gray-800 text-lg mb-4\">💬 Contactez-nous</h3>
            <p class=\"text-gray-600 mb-6\">
                Vous ne trouvez pas la réponse à votre question ? Notre équipe est là pour vous aider.
            </p>
            
            <div class=\"space-y-4\">
                <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
        yield "\" class=\"flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition\">
                    <div class=\"w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-xl\">
                        🎫
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Créer un ticket</p>
                        <p class=\"text-xs text-gray-500\">Réponse sous 24h</p>
                    </div>
                </a>

                <a href=\"mailto:support@wellnessconnect.com\" class=\"flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition\">
                    <div class=\"w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-xl\">
                        📧
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Email</p>
                        <p class=\"text-xs text-gray-500\">support@wellnessconnect.com</p>
                    </div>
                </a>

                <a href=\"tel:+21612345678\" class=\"flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition\">
                    <div class=\"w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-xl\">
                        📞
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Téléphone</p>
                        <p class=\"text-xs text-gray-500\">+216 12 345 678</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
        <div class=\"flex justify-between items-center mb-4\">
            <h3 class=\"font-bold text-gray-800 text-lg\">🎬 Tutoriels Vidéo</h3>
            <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"text-blue-600 text-sm font-medium hover:text-blue-700\">
                Voir tous →
            </a>
        </div>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
            <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"p-4 bg-gradient-to-br from-red-50 to-pink-50 rounded-xl hover:shadow-md transition group border border-red-100\">
                <div class=\"flex items-center gap-3 mb-2\">
                    <div class=\"w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition\">
                        🩸
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Don de Sang</p>
                        <p class=\"text-xs text-gray-500\">Guide pour donneurs</p>
                    </div>
                </div>
                <p class=\"text-sm text-gray-600\">Apprenez les étapes pour donner votre sang en toute sécurité.</p>
            </a>
            <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"p-4 bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl hover:shadow-md transition group border border-purple-100\">
                <div class=\"flex items-center gap-3 mb-2\">
                    <div class=\"w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition\">
                        🫀
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Don d'Organe</p>
                        <p class=\"text-xs text-gray-500\">Informations</p>
                    </div>
                </div>
                <p class=\"text-sm text-gray-600\">Tout savoir sur le don d'organes et son importance.</p>
            </a>
            <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl hover:shadow-md transition group border border-green-100\">
                <div class=\"flex items-center gap-3 mb-2\">
                    <div class=\"w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition\">
                        🗺️
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Carte Médicale</p>
                        <p class=\"text-xs text-gray-500\">Comment utiliser</p>
                    </div>
                </div>
                <p class=\"text-sm text-gray-600\">Trouvez facilement les établissements de santé proches.</p>
            </a>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
        <h3 class=\"font-bold text-gray-800 text-lg mb-4\">📁 Parcourir par Catégorie</h3>
        <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
            ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 226
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq", ["category" => $context["category"]]), "html", null, true);
            yield "\" class=\"p-4 bg-gray-50 rounded-xl hover:bg-blue-50 hover:border-blue-200 border border-transparent transition text-center\">
                <div class=\"text-2xl mb-2\">
                    ";
            // line 228
            if (($context["category"] == "don")) {
                yield "🩸
                    ";
            } elseif ((            // line 229
$context["category"] == "aide")) {
                yield "🆘
                    ";
            } elseif ((            // line 230
$context["category"] == "urgence")) {
                yield "🚨
                    ";
            } elseif ((            // line 231
$context["category"] == "compte")) {
                yield "👤
                    ";
            } else {
                // line 232
                yield "📋";
            }
            // line 233
            yield "                </div>
                <p class=\"font-medium text-gray-700\">";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "</p>
            </a>
            ";
            $context['_iterated'] = true;
        }
        // line 236
        if (!$context['_iterated']) {
            // line 237
            yield "            <div class=\"col-span-4 text-center py-4 text-gray-400\">
                Aucune catégorie disponible
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "        </div>
    </div>

    <div class=\"bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl p-8 text-white\">
        <div class=\"flex items-center justify-between flex-wrap gap-4\">
            <div>
                <h3 class=\"text-2xl font-bold mb-2\">📤 Partagez Wellness Connect</h3>
                <p class=\"text-blue-100\">Aidez vos amis à découvrir nos services de santé</p>
            </div>
            <div class=\"flex gap-3\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 251), "uri", [], "any", false, false, false, 251), "html", null, true);
        yield "\" target=\"_blank\"
                   class=\"w-12 h-12 bg-white/20 hover:bg-white/30 rounded-xl flex items-center justify-center text-xl transition\">
                    f
                </a>
                <a href=\"https://twitter.com/intent/tweet?text=Découvrez%20Wellness%20Connect&url=";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 255), "uri", [], "any", false, false, false, 255), "html", null, true);
        yield "\" target=\"_blank\"
                   class=\"w-12 h-12 bg-white/20 hover:bg-white/30 rounded-xl flex items-center justify-center text-xl transition\">
                    𝕏
                </a>
                <a href=\"https://wa.me/?text=Découvrez%20Wellness%20Connect%20";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 259), "uri", [], "any", false, false, false, 259), "html", null, true);
        yield "\" target=\"_blank\"
                   class=\"w-12 h-12 bg-white/20 hover:bg-white/30 rounded-xl flex items-center justify-center text-xl transition\">
                    💬
                </a>
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
        return "front/aide/index.html.twig";
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
        return array (  487 => 259,  480 => 255,  473 => 251,  461 => 241,  452 => 237,  450 => 236,  443 => 234,  440 => 233,  437 => 232,  432 => 231,  428 => 230,  424 => 229,  420 => 228,  414 => 226,  409 => 225,  388 => 207,  373 => 195,  358 => 183,  350 => 178,  311 => 142,  299 => 132,  290 => 128,  288 => 127,  277 => 123,  273 => 122,  265 => 118,  260 => 117,  252 => 112,  239 => 102,  215 => 81,  203 => 72,  192 => 64,  181 => 56,  170 => 48,  159 => 40,  141 => 24,  128 => 23,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\index.html.twig");
    }
}
