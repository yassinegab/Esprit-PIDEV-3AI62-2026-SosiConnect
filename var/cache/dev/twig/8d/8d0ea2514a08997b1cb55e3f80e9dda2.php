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

/* front/don/demande_view.html.twig */
class __TwigTemplate_53529daa6afabe4a3972da2110e38e2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/demande_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/demande_view.html.twig"));

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

        yield "Demande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Répondre";
        
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
        yield "<div class=\"max-w-4xl mx-auto space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_don");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour aux demandes
        </a>
    </div>

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg\">
        ✅ ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg\">
        ❌ ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
        <div class=\"bg-gradient-to-r ";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 31) == "sang")) ? ("from-red-500 to-red-600") : ("from-purple-500 to-purple-600"));
        yield " text-white p-6\">
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-4xl\">
                        ";
        // line 35
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 35) == "sang")) ? ("🩸") : ("🫀"));
        yield "
                    </div>
                    <div>
                        <h1 class=\"text-2xl font-bold\">Demande de ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 38), "html", null, true);
        yield "</h1>
                        <p class=\"text-white/80\">Publiée le ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "dateDemande", [], "any", false, false, false, 39), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"flex gap-2\">
                    ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "urgence", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    <span class=\"bg-white/20 px-4 py-2 rounded-full text-sm font-bold flex items-center gap-2\">
                        🚨 URGENT
                    </span>
                    ";
        }
        // line 48
        yield "                </div>
            </div>
        </div>

        <div class=\"p-6 space-y-6\">
            <div class=\"grid grid-cols-2 gap-6\">
                <div class=\"bg-gray-50 rounded-xl p-4\">
                    <p class=\"text-sm text-gray-500 mb-1\">📍 Région</p>
                    <p class=\"font-semibold text-gray-800\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "region", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                </div>
                <div class=\"bg-gray-50 rounded-xl p-4\">
                    <p class=\"text-sm text-gray-500 mb-1\">📊 Rang d'attente</p>
                    <p class=\"font-semibold text-gray-800\">#";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "rangAttente", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
                </div>
                ";
        // line 62
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                <div class=\"bg-gray-50 rounded-xl p-4\">
                    <p class=\"text-sm text-gray-500 mb-1\">🩸 Groupe sanguin</p>
                    <p class=\"font-semibold text-gray-800\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeSanguin", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                </div>
                ";
        }
        // line 68
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeOrgane", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                <div class=\"bg-gray-50 rounded-xl p-4\">
                    <p class=\"text-sm text-gray-500 mb-1\">🫀 Organe</p>
                    <p class=\"font-semibold text-gray-800\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeOrgane", [], "any", false, false, false, 71), "html", null, true);
            yield "</p>
                </div>
                ";
        }
        // line 74
        yield "            </div>

            ";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "description", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "            <div class=\"bg-blue-50 rounded-xl p-4\">
                <p class=\"text-sm text-blue-600 mb-2\">📝 Description</p>
                <p class=\"text-gray-700\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "description", [], "any", false, false, false, 79), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 82
        yield "        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex items-center gap-3 mb-6\">
                <div class=\"w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center text-xl\">
                    🤝
                </div>
                <h2 class=\"text-xl font-bold text-gray-800\">Proposer votre aide</h2>
            </div>

            <form method=\"post\" class=\"space-y-4\">
                <div class=\"grid grid-cols-2 gap-4\">
                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Nom complet *</label>
                        <input type=\"text\" name=\"donneur_nom\" required
                               class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition\"
                               placeholder=\"Votre nom\">
                    </div>
                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Téléphone *</label>
                        <input type=\"tel\" name=\"donneur_telephone\" required
                               class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition\"
                               placeholder=\"XX XXX XXX\">
                    </div>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Email *</label>
                    <input type=\"email\" name=\"donneur_email\" required
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition\"
                           placeholder=\"votre@email.com\">
                </div>

                ";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["demande"] ?? null), "typeDemande", [], "any", false, false, false, 117) == "sang")) {
            // line 118
            yield "                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Votre groupe sanguin</label>
                    <select name=\"donneur_groupe_sanguin\"
                            class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition\">
                        <option value=\"\">Sélectionner (optionnel)</option>
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
                ";
        }
        // line 134
        yield "
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Message</label>
                    <textarea name=\"message\" rows=\"4\"
                              class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition resize-none\"
                              placeholder=\"Précisez votre disponibilité, votre expérience...\"></textarea>
                </div>

                <button type=\"submit\" class=\"w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white py-4 rounded-xl font-semibold transition shadow-lg\">
                    🤝 Envoyer ma proposition
                </button>
            </form>
        </div>

        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <div class=\"flex items-center gap-3 mb-6\">
                <div class=\"w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center text-xl\">
                    💬
                </div>
                <h2 class=\"text-xl font-bold text-gray-800\">Réponses (";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["responses"] ?? null)), "html", null, true);
        yield ")</h2>
            </div>

            ";
        // line 156
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["responses"] ?? null)) > 0)) {
            // line 157
            yield "                <div class=\"space-y-4 max-h-96 overflow-y-auto\">
                    ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["responses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 159
                yield "                    <div class=\"bg-gray-50 rounded-xl p-4 border border-gray-100\">
                        <div class=\"flex items-start justify-between mb-2\">
                            <div>
                                <p class=\"font-semibold text-gray-800\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "donneurNom", [], "any", false, false, false, 162), "html", null, true);
                yield "</p>
                                <p class=\"text-xs text-gray-500\">";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "donneurEmail", [], "any", false, false, false, 163), "html", null, true);
                yield "</p>
                            </div>
                            <span class=\"px-2 py-1 rounded-full text-xs font-medium ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "statusBadgeClass", [], "any", false, false, false, 165), "html", null, true);
                yield "\">
                                ";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "statusLabel", [], "any", false, false, false, 166), "html", null, true);
                yield "
                            </span>
                        </div>
                        ";
                // line 169
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "donneurGroupeSanguin", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 170
                    yield "                        <p class=\"text-sm text-gray-600 mb-2\">🩸 Groupe: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "donneurGroupeSanguin", [], "any", false, false, false, 170), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 172
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "message", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 173
                    yield "                        <p class=\"text-sm text-gray-700 bg-white rounded-lg p-3 mt-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "message", [], "any", false, false, false, 173), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 175
                yield "                        <div class=\"flex items-center justify-between mt-3 text-xs text-gray-400\">
                            <span>📞 ";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "donneurTelephone", [], "any", false, false, false, 176), "html", null, true);
                yield "</span>
                            <span>";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "createdAt", [], "any", false, false, false, 177), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "                </div>
            ";
        } else {
            // line 183
            yield "                <div class=\"text-center py-8 text-gray-400\">
                    <div class=\"text-4xl mb-2\">📭</div>
                    <p>Aucune réponse pour le moment</p>
                    <p class=\"text-sm\">Soyez le premier à proposer votre aide !</p>
                </div>
            ";
        }
        // line 189
        yield "        </div>
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
        return "front/don/demande_view.html.twig";
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
        return array (  439 => 189,  431 => 183,  427 => 181,  417 => 177,  413 => 176,  410 => 175,  404 => 173,  401 => 172,  395 => 170,  393 => 169,  387 => 166,  383 => 165,  378 => 163,  374 => 162,  369 => 159,  365 => 158,  362 => 157,  360 => 156,  354 => 153,  333 => 134,  315 => 118,  313 => 117,  276 => 82,  270 => 79,  266 => 77,  264 => 76,  260 => 74,  254 => 71,  250 => 69,  247 => 68,  241 => 65,  237 => 63,  235 => 62,  230 => 60,  223 => 56,  213 => 48,  207 => 44,  205 => 43,  198 => 39,  194 => 38,  188 => 35,  181 => 31,  177 => 29,  168 => 26,  165 => 25,  161 => 24,  158 => 23,  149 => 20,  146 => 19,  142 => 18,  134 => 13,  130 => 11,  117 => 10,  103 => 6,  90 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/demande_view.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\demande_view.html.twig");
    }
}
