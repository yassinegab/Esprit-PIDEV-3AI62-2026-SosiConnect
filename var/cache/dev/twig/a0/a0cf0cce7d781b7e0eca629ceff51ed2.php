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

/* front/urgence/index.html.twig */
class __TwigTemplate_f4a4d66c981b14a0c4d509cbe4686013 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/urgence/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/urgence/index.html.twig"));

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

        yield "Urgences";
        
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
<style>
.urgence-btn {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 50%, #b91c1c 100%);
    animation: pulse-urgent 2s infinite;
}
.urgence-btn:hover {
    animation: none;
    transform: scale(1.02);
}
@keyframes pulse-urgent {
    0%, 100% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4); }
    50% { box-shadow: 0 0 0 20px rgba(239, 68, 68, 0); }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "<div class=\"space-y-8 animate-fadeIn\" x-data=\"{ open: false, urgence: {} }\">
    
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800\" style=\"font-family: 'Poppins', sans-serif;\">
                🚨 Gestion des Urgences
            </h1>
            <p class=\"text-gray-500 mt-1\">Déclenchez une alerte et envoyez votre position à vos contacts</p>
        </div>
        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_urgence_index");
        yield "\" class=\"bg-white px-4 py-2 rounded-xl shadow hover:shadow-lg transition text-gray-700 flex items-center gap-2\">
            <span>📱</span> Gérer les contacts
        </a>
    </div>

    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg flex items-center gap-2\">
        <span>✅</span> ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
        <div class=\"lg:col-span-2\">
            <div class=\"bg-gradient-to-br from-red-500 to-rose-600 rounded-2xl p-8 text-white shadow-xl\">
                <div class=\"flex items-center gap-4 mb-6\">
                    <div class=\"w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-4xl\">
                        🆘
                    </div>
                    <div>
                        <h2 class=\"text-2xl font-bold\">Déclencher une Urgence</h2>
                        <p class=\"text-red-100\">Envoie votre position GPS à tous vos contacts</p>
                    </div>
                </div>

                <form method=\"post\" action=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence_send");
        yield "\" id=\"urgenceForm\">
                    <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
                    <input type=\"hidden\" name=\"longitude\" id=\"longitude\">

                    <button type=\"submit\" class=\"urgence-btn w-full py-6 rounded-2xl text-white text-xl font-bold shadow-2xl flex items-center justify-center gap-3 transition\">
                        <span class=\"text-3xl\">🚨</span>
                        DÉCLENCHER L'URGENCE
                    </button>
                </form>

                <div id=\"geoStatus\" class=\"mt-4 text-center text-red-100 text-sm\"></div>

                <div class=\"mt-6 p-4 bg-white/10 rounded-xl\">
                    <p class=\"text-sm text-red-100\">
                        <strong>💡 Comment ça fonctionne :</strong><br>
                        1. Cliquez sur le bouton pour déclencher l'urgence<br>
                        2. Votre position GPS est capturée automatiquement<br>
                        3. Un SMS avec votre localisation est envoyé à tous vos contacts d'urgence
                    </p>
                </div>
            </div>
        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span>📊</span> Statistiques
                </h3>
                <div class=\"space-y-4\">
                    <div class=\"flex items-center justify-between p-3 bg-gray-50 rounded-xl\">
                        <span class=\"text-gray-600\">Total alertes</span>
                        <span class=\"font-bold text-gray-800\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["urgences"] ?? null)), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex items-center justify-between p-3 bg-yellow-50 rounded-xl\">
                        <span class=\"text-gray-600\">En attente</span>
                        <span class=\"font-bold text-yellow-600\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["urgences"] ?? null), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "statut", [], "any", false, false, false, 93) == "EN_ATTENTE"); })), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex items-center justify-between p-3 bg-green-50 rounded-xl\">
                        <span class=\"text-gray-600\">Traitées</span>
                        <span class=\"font-bold text-green-600\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["urgences"] ?? null), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["u"] ?? null), "statut", [], "any", false, false, false, 97) != "EN_ATTENTE"); })), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>

            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_urgence_index");
        yield "\" 
               class=\"block bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition group\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-2xl group-hover:bg-orange-200 transition\">
                        📱
                    </div>
                    <div>
                        <h3 class=\"font-bold text-gray-800\">Contacts d'urgence</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer vos contacts</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
        <div class=\"p-6 border-b border-gray-100\">
            <h3 class=\"font-bold text-gray-800 text-lg flex items-center gap-2\">
                <span>📋</span> Historique des alertes
            </h3>
        </div>

        ";
        // line 124
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["urgences"] ?? null)) > 0)) {
            // line 125
            yield "        <div class=\"divide-y divide-gray-100\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["urgences"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 127
                yield "            <div class=\"p-6 hover:bg-gray-50 transition flex items-center justify-between\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-12 h-12 ";
                // line 129
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "statut", [], "any", false, false, false, 129) == "EN_ATTENTE")) ? ("bg-yellow-100") : ("bg-green-100"));
                yield " rounded-xl flex items-center justify-center text-2xl\">
                        ";
                // line 130
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "statut", [], "any", false, false, false, 130) == "EN_ATTENTE")) ? ("⏳") : ("✅"));
                yield "
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "dateUrgence", [], "any", false, false, false, 133), "d/m/Y à H:i"), "html", null, true);
                yield "</p>
                        <p class=\"text-sm text-gray-500\">
                            📍 ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "latitude", [], "any", false, false, false, 135), 0, 8), "html", null, true);
                yield "... , ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "longitude", [], "any", false, false, false, 135), 0, 8), "html", null, true);
                yield "...
                        </p>
                    </div>
                </div>
                <div class=\"flex items-center gap-3\">
                    <span class=\"px-3 py-1 ";
                // line 140
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "statut", [], "any", false, false, false, 140) == "EN_ATTENTE")) ? ("bg-yellow-100 text-yellow-700") : ("bg-green-100 text-green-700"));
                yield " rounded-full text-xs font-semibold\">
                        ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "statut", [], "any", false, false, false, 141), "html", null, true);
                yield "
                    </span>
                    <button class=\"text-blue-600 hover:text-blue-700 font-medium text-sm\"
                            @click=\"open = true; urgence = {
                                id: ";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 145), "html", null, true);
                yield ",
                                date: '";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "dateUrgence", [], "any", false, false, false, 146), "d/m/Y H:i"), "html", null, true);
                yield "',
                                message: '";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "message", [], "any", false, false, false, 147), "js"), "html", null, true);
                yield "',
                                lat: '";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "latitude", [], "any", false, false, false, 148), "html", null, true);
                yield "',
                                lng: '";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "longitude", [], "any", false, false, false, 149), "html", null, true);
                yield "',
                                statut: '";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "statut", [], "any", false, false, false, 150), "html", null, true);
                yield "'
                            }\">
                        Voir détails
                    </button>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "        </div>
        ";
        } else {
            // line 159
            yield "        <div class=\"p-12 text-center\">
            <div class=\"text-4xl mb-4\">📭</div>
            <p class=\"text-gray-500\">Aucune alerte enregistrée</p>
        </div>
        ";
        }
        // line 164
        yield "    </div>

    <div x-show=\"open\" x-cloak
         class=\"fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4\"
         @click.self=\"open = false\">
        <div class=\"bg-white rounded-2xl w-full max-w-md shadow-2xl overflow-hidden\">
            <div class=\"bg-gradient-to-r from-red-500 to-rose-500 p-6 text-white\">
                <h2 class=\"text-xl font-bold flex items-center gap-2\">
                    <span>🚨</span> Détails de l'urgence
                </h2>
            </div>

            <div class=\"p-6 space-y-4\">
                <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                    <span class=\"text-gray-500\">Date</span>
                    <span class=\"font-medium text-gray-800\" x-text=\"urgence.date\"></span>
                </div>
                <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                    <span class=\"text-gray-500\">Message</span>
                    <span class=\"font-medium text-gray-800\" x-text=\"urgence.message\"></span>
                </div>
                <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                    <span class=\"text-gray-500\">Latitude</span>
                    <span class=\"font-medium text-gray-800\" x-text=\"urgence.lat\"></span>
                </div>
                <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                    <span class=\"text-gray-500\">Longitude</span>
                    <span class=\"font-medium text-gray-800\" x-text=\"urgence.lng\"></span>
                </div>
                <div class=\"flex justify-between items-center p-3 bg-gray-50 rounded-xl\">
                    <span class=\"text-gray-500\">Statut</span>
                    <span class=\"px-3 py-1 rounded-full text-xs font-semibold\"
                          :class=\"urgence.statut === 'EN_ATTENTE' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-700'\"
                          x-text=\"urgence.statut\"></span>
                </div>

                <a :href=\"`https://maps.google.com/?q=\${urgence.lat},\${urgence.lng}`\" 
                   target=\"_blank\"
                   class=\"block w-full py-3 bg-blue-600 hover:bg-blue-700 text-white text-center rounded-xl font-medium transition\">
                    🗺️ Voir sur Google Maps
                </a>
            </div>

            <div class=\"p-6 pt-0 flex gap-3\">
                <form method=\"post\" :action=\"`/aide/urgence/delete/\${urgence.id}`\" class=\"flex-1\">
                    <button type=\"submit\" 
                            onclick=\"return confirm('Supprimer cette alerte ?')\"
                            class=\"w-full py-3 bg-red-100 hover:bg-red-200 text-red-700 rounded-xl font-medium transition\">
                        🗑 Supprimer
                    </button>
                </form>
                <button class=\"flex-1 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl font-medium transition\"
                        @click=\"open = false\">
                    Fermer
                </button>
            </div>
        </div>
    </div>
</div>

<script src=\"/js/geolocation.js\"></script>
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
        return "front/urgence/index.html.twig";
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
        return array (  367 => 164,  360 => 159,  356 => 157,  343 => 150,  339 => 149,  335 => 148,  331 => 147,  327 => 146,  323 => 145,  316 => 141,  312 => 140,  302 => 135,  297 => 133,  291 => 130,  287 => 129,  283 => 127,  279 => 126,  276 => 125,  274 => 124,  249 => 102,  241 => 97,  234 => 93,  227 => 89,  193 => 58,  177 => 44,  168 => 41,  165 => 40,  161 => 39,  153 => 34,  142 => 25,  129 => 24,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/urgence/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\urgence\\index.html.twig");
    }
}
