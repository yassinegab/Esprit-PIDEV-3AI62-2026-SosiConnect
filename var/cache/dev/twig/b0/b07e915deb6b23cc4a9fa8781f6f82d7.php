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

/* front/don/demande.html.twig */
class __TwigTemplate_5612c48950eb5536120697818be07e0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/demande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/demande.html.twig"));

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

        yield "Demande de Don";
        
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
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour
        </a>
        <h1 class=\"text-2xl font-bold text-gray-800\">📥 Demande de Don</h1>
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg\">
        ✅ ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg\">
        ❌ ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl p-8 shadow-lg border border-gray-100\">
            <div class=\"flex items-center gap-4 mb-6\">
                <div class=\"w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-3xl\">
                    📥
                </div>
                <div>
                    <h2 class=\"text-xl font-bold text-gray-800\">Nouvelle Demande</h2>
                    <p class=\"text-gray-500\">Soumettez votre demande de don</p>
                </div>
            </div>

            <form method=\"post\" class=\"space-y-5\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Type de don *</label>
                    <select name=\"type_demande\" required id=\"typeDemande\"
                            class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\">
                        <option value=\"\">Sélectionner...</option>
                        <option value=\"sang\">🩸 Sang</option>
                        <option value=\"organe\">🫀 Organe</option>
                    </select>
                </div>

                <div id=\"sanguinField\" class=\"hidden\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Groupe Sanguin *</label>
                    <select name=\"type_sanguin\"
                            class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\">
                        <option value=\"\">Sélectionner...</option>
                        <option value=\"A+\">A+</option>
                        <option value=\"A-\">A-</option>
                        <option value=\"B+\">B+</option>
                        <option value=\"B-\">B-</option>
                        <option value=\"AB+\">AB+</option>
                        <option value=\"AB-\">AB-</option>
                        <option value=\"O+\">O+</option>
                        <option value=\"O-\">O-</option>
                    </select>
                </div>

                <div id=\"organeField\" class=\"hidden\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Type d'organe *</label>
                    <select name=\"type_organe\"
                            class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\">
                        <option value=\"\">Sélectionner...</option>
                        <option value=\"rein\">Rein</option>
                        <option value=\"foie\">Foie</option>
                        <option value=\"coeur\">Cœur</option>
                        <option value=\"poumon\">Poumon</option>
                        <option value=\"cornee\">Cornée</option>
                        <option value=\"moelle\">Moelle osseuse</option>
                    </select>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Région *</label>
                    <input type=\"text\" name=\"region\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\"
                           placeholder=\"Ex: Tunis, Sfax...\">
                </div>

                <div class=\"flex items-center gap-3 p-4 bg-orange-50 rounded-xl border border-orange-200\">
                    <input type=\"checkbox\" name=\"urgence\" value=\"1\" id=\"urgenceCheck\"
                           class=\"w-5 h-5 text-orange-600 rounded border-orange-300\">
                    <label for=\"urgenceCheck\" class=\"text-sm font-medium text-orange-800\">
                        🚨 Cas urgent - Prioritaire
                    </label>
                </div>

                <button type=\"submit\" class=\"w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-4 rounded-xl font-semibold transition shadow-lg\">
                    📥 Envoyer la demande
                </button>
            </form>
        </div>

        <div class=\"space-y-4\">
            <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100\">
                <h3 class=\"font-semibold text-blue-800 mb-3\">📋 Comment ça marche ?</h3>
                <ol class=\"text-sm text-blue-700 space-y-3\">
                    <li class=\"flex items-start gap-3\">
                        <span class=\"w-6 h-6 bg-blue-200 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0\">1</span>
                        <span>Remplissez le formulaire avec vos besoins</span>
                    </li>
                    <li class=\"flex items-start gap-3\">
                        <span class=\"w-6 h-6 bg-blue-200 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0\">2</span>
                        <span>Notre système trouve les donneurs compatibles</span>
                    </li>
                    <li class=\"flex items-start gap-3\">
                        <span class=\"w-6 h-6 bg-blue-200 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0\">3</span>
                        <span>Vous êtes mis en contact avec les donneurs</span>
                    </li>
                </ol>
            </div>

            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                <h3 class=\"font-semibold text-gray-800 mb-3\">⏰ Délais de réponse</h3>
                <div class=\"space-y-2 text-sm\">
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-600\">Cas standard</span>
                        <span class=\"font-medium\">48-72h</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-600\">Cas urgent</span>
                        <span class=\"font-medium text-orange-600\">6-12h</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
        <div class=\"flex justify-between items-center mb-4\">
            <h2 class=\"text-lg font-bold text-gray-800\">📋 Mes Demandes</h2>
            <span class=\"text-sm text-gray-500\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["demandes"] ?? null)), "html", null, true);
        yield " demande(s)</span>
        </div>

        <div class=\"space-y-3\">
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["demandes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 148
            yield "            <div class=\"p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition\">
                <div class=\"flex justify-between items-start\">
                    <div class=\"flex items-start gap-4\">
                        <div class=\"w-12 h-12 ";
            // line 151
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeDemande", [], "any", false, false, false, 151) == "sang")) ? ("bg-red-100") : ("bg-purple-100"));
            yield " rounded-xl flex items-center justify-center text-2xl\">
                            ";
            // line 152
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeDemande", [], "any", false, false, false, 152) == "sang")) ? ("🩸") : ("🫀"));
            yield "
                        </div>
                        <div>
                            <div class=\"flex items-center gap-2\">
                                <span class=\"font-semibold text-gray-800\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeDemande", [], "any", false, false, false, 156)), "html", null, true);
            yield "</span>
                                ";
            // line 157
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeSanguin", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "                                    <span class=\"bg-red-100 text-red-700 px-2 py-0.5 rounded text-xs font-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeSanguin", [], "any", false, false, false, 158), "html", null, true);
                yield "</span>
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 159
$context["demande"], "typeOrgane", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 160
                yield "                                    <span class=\"bg-purple-100 text-purple-700 px-2 py-0.5 rounded text-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "typeOrgane", [], "any", false, false, false, 160), "html", null, true);
                yield "</span>
                                ";
            }
            // line 162
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "urgence", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                                    <span class=\"bg-orange-100 text-orange-700 px-2 py-0.5 rounded text-xs font-bold\">URGENT</span>
                                ";
            }
            // line 165
            yield "                            </div>
                            <p class=\"text-sm text-gray-500 mt-1\">
                                📍 ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "region", [], "any", false, false, false, 167), "html", null, true);
            yield " • 📅 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "dateDemande", [], "any", false, false, false, 167), "d/m/Y H:i"), "html", null, true);
            yield "
                            </p>
                            <p class=\"text-xs text-gray-400 mt-1\">
                                Rang d'attente: #";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "rangAttente", [], "any", false, false, false, 170), "html", null, true);
            yield "
                            </p>
                        </div>
                    </div>
<div class=\"flex gap-2\">
                        <a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_don_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" 
                           class=\"px-3 py-2 bg-blue-500 text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition\">
                            🤝 Répondre
                        </a>
                        <form method=\"post\" action=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 179)]), "html", null, true);
            yield "\"
                            onsubmit=\"return confirm('Supprimer cette demande ?');\">
                            <button type=\"submit\" class=\"p-2 text-red-500 hover:bg-red-100 rounded-lg transition\">
                                🗑
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 188
        if (!$context['_iterated']) {
            // line 189
            yield "            <div class=\"p-8 text-center text-gray-400\">
                <div class=\"text-3xl mb-2\">📭</div>
                <p>Aucune demande enregistrée</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "        </div>
    </div>
</div>

<script>
document.getElementById('typeDemande').addEventListener('change', function() {
    document.getElementById('sanguinField').classList.toggle('hidden', this.value !== 'sang');
    document.getElementById('organeField').classList.toggle('hidden', this.value !== 'organe');
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
        return "front/don/demande.html.twig";
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
        return array (  398 => 194,  388 => 189,  386 => 188,  372 => 179,  365 => 175,  357 => 170,  349 => 167,  345 => 165,  341 => 163,  338 => 162,  332 => 160,  330 => 159,  325 => 158,  323 => 157,  319 => 156,  312 => 152,  308 => 151,  303 => 148,  298 => 147,  291 => 143,  176 => 30,  167 => 27,  164 => 26,  160 => 25,  157 => 24,  148 => 21,  145 => 20,  141 => 19,  132 => 13,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/demande.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\demande.html.twig");
    }
}
