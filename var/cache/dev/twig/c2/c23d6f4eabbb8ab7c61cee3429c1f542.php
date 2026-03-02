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

/* front/aide/support_view.html.twig */
class __TwigTemplate_4bf789e85f2d126513a8b4877b3886f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/support_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/support_view.html.twig"));

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

        yield "Ticket #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
.star-rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}
.star-rating input {
    display: none;
}
.star-rating label {
    cursor: pointer;
    font-size: 2rem;
    color: #d1d5db;
    transition: color 0.2s;
}
.star-rating label:hover,
.star-rating label:hover ~ label,
.star-rating input:checked ~ label {
    color: #fbbf24;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "<div class=\"max-w-4xl mx-auto space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour
        </a>
        <h1 class=\"text-2xl font-bold text-gray-800\">Ticket #";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "</h1>
        <span class=\"px-3 py-1 ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "statusBadgeClass", [], "any", false, false, false, 38), "html", null, true);
        yield " rounded-full text-sm font-semibold\">
            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 39), ["_" => " "])), "html", null, true);
        yield "
        </span>
    </div>

    <div class=\"grid grid-cols-3 gap-6\">
        <div class=\"col-span-2 space-y-4\">
            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
                <div class=\"p-4 bg-gray-50 border-b flex justify-between items-center\">
                    <h2 class=\"font-semibold text-gray-800\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 47), "html", null, true);
        yield "</h2>
                    <span class=\"text-sm text-gray-500\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "createdAt", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"p-6 max-h-96 overflow-y-auto space-y-4\">
                    <div class=\"flex gap-4\">
                        <div class=\"w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-xl flex-shrink-0\">
                            👤
                        </div>
                        <div class=\"flex-1\">
                            <div class=\"flex items-center gap-2 mb-1\">
                                <span class=\"font-medium text-gray-800\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "userName", [], "any", false, false, false, 58), "html", null, true);
        yield "</span>
                                <span class=\"text-xs text-gray-400\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "createdAt", [], "any", false, false, false, 59), "H:i"), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"bg-gray-100 rounded-2xl rounded-tl-none p-4\">
                                <p class=\"text-gray-700\">";
        // line 62
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "description", [], "any", false, false, false, 62), "html", null, true));
        yield "</p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            yield "                    <div class=\"flex gap-4 ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("flex-row-reverse") : (""));
            yield "\">
                        <div class=\"w-10 h-10 ";
            // line 69
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-purple-100") : ("bg-blue-100"));
            yield " rounded-full flex items-center justify-center text-xl flex-shrink-0\">
                            ";
            // line 70
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🎧") : ("👤"));
            yield "
                        </div>
                        <div class=\"flex-1 ";
            // line 72
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-right") : (""));
            yield "\">
                            <div class=\"flex items-center gap-2 mb-1 ";
            // line 73
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("justify-end") : (""));
            yield "\">
                                <span class=\"text-xs text-gray-400\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 74), "H:i"), "html", null, true);
            yield "</span>
                                <span class=\"font-medium text-gray-800\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderName", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"";
            // line 77
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-purple-100 rounded-2xl rounded-tr-none") : ("bg-gray-100 rounded-2xl rounded-tl-none"));
            yield " p-4 inline-block\">
                                <p class=\"text-gray-700\">";
            // line 78
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 78), "html", null, true));
            yield "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                </div>
            </div>

            ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 86) != "closed")) {
            // line 87
            yield "            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <form method=\"post\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Votre réponse</label>
                    <div class=\"flex gap-4\">
                        <textarea name=\"message\" rows=\"3\" required
                                  class=\"flex-1 px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none\"
                                  placeholder=\"Écrivez votre message...\"></textarea>
                        <button type=\"submit\" class=\"self-end px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition shadow-lg\">
                            📤
                        </button>
                    </div>
                </form>
            </div>
            ";
        } else {
            // line 101
            yield "            <div class=\"bg-gray-100 rounded-2xl p-6 text-center text-gray-500\">
                <p>🎫 Ce ticket est fermé. Vous ne pouvez plus envoyer de messages.</p>
            </div>
            
            ";
            // line 105
            if ((($tmp =  !($context["feedback"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "            <div class=\"bg-gradient-to-r from-yellow-50 to-amber-50 rounded-2xl p-6 border border-yellow-200 mt-4\">
                <h3 class=\"font-bold text-yellow-800 mb-4\">⭐ Évaluez votre expérience</h3>
                <p class=\"text-yellow-700 text-sm mb-4\">Votre avis nous aide à améliorer notre service support.</p>
                
                <form method=\"post\" action=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_feedback", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" x-data=\"{ rating: 5, wouldRecommend: true }\">
                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Note globale</label>
                        <div class=\"star-rating\">
                            <input type=\"radio\" name=\"rating\" id=\"star5\" value=\"5\" x-model=\"rating\" checked>
                            <label for=\"star5\">★</label>
                            <input type=\"radio\" name=\"rating\" id=\"star4\" value=\"4\" x-model=\"rating\">
                            <label for=\"star4\">★</label>
                            <input type=\"radio\" name=\"rating\" id=\"star3\" value=\"3\" x-model=\"rating\">
                            <label for=\"star3\">★</label>
                            <input type=\"radio\" name=\"rating\" id=\"star2\" value=\"2\" x-model=\"rating\">
                            <label for=\"star2\">★</label>
                            <input type=\"radio\" name=\"rating\" id=\"star1\" value=\"1\" x-model=\"rating\">
                            <label for=\"star1\">★</label>
                        </div>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Type de feedback</label>
                        <select name=\"feedback_type\" class=\"w-full px-4 py-2 border border-gray-200 rounded-xl\">
                            <option value=\"general\">Général</option>
                            <option value=\"response_time\">Temps de réponse</option>
                            <option value=\"solution_quality\">Qualité de la solution</option>
                            <option value=\"agent_friendliness\">Amabilité de l'agent</option>
                        </select>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Commentaire (optionnel)</label>
                        <textarea name=\"comment\" rows=\"3\" 
                                  placeholder=\"Partagez votre expérience...\"
                                  class=\"w-full px-4 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-yellow-500\"></textarea>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"flex items-center gap-2 cursor-pointer\">
                            <input type=\"checkbox\" name=\"would_recommend\" value=\"1\" checked x-model=\"wouldRecommend\"
                                   class=\"w-4 h-4 text-yellow-600 rounded\">
                            <span class=\"text-sm text-gray-700\">Je recommanderais ce service à d'autres personnes</span>
                        </label>
                    </div>
                    
                    <button type=\"submit\" class=\"w-full py-3 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl font-semibold transition\">
                        Envoyer mon avis
                    </button>
                </form>
            </div>
            ";
            } else {
                // line 158
                yield "            <div class=\"bg-green-50 rounded-2xl p-6 border border-green-200 mt-4\">
                <div class=\"flex items-center gap-3 mb-3\">
                    <span class=\"text-3xl\">✅</span>
                    <div>
                        <h4 class=\"font-bold text-green-800\">Merci pour votre avis !</h4>
                        <p class=\"text-sm text-green-600\">Vous avez noté ce ticket <strong>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["feedback"] ?? null), "rating", [], "any", false, false, false, 163), "html", null, true);
                yield "/5</strong></p>
                    </div>
                </div>
                <div class=\"flex items-center gap-1 text-yellow-400 mb-2\">
                    ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 168
                    yield "                        <span>";
                    yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, ($context["feedback"] ?? null), "rating", [], "any", false, false, false, 168))) ? ("★") : ("☆"));
                    yield "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                yield "                    <span class=\"ml-2 text-sm text-gray-600\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["feedback"] ?? null), "ratingLabel", [], "any", false, false, false, 170), "html", null, true);
                yield "</span>
                </div>
                ";
                // line 172
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["feedback"] ?? null), "comment", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 173
                    yield "                <p class=\"text-gray-600 text-sm italic\">\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["feedback"] ?? null), "comment", [], "any", false, false, false, 173), "html", null, true);
                    yield "\"</p>
                ";
                }
                // line 175
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["feedback"] ?? null), "wouldRecommend", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 176
                    yield "                <p class=\"text-green-600 text-sm mt-2\">✓ Vous recommanderiez ce service</p>
                ";
                }
                // line 178
                yield "            </div>
            ";
            }
            // line 180
            yield "            ";
        }
        // line 181
        yield "        </div>

        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <h3 class=\"font-semibold text-gray-800 mb-4\">📋 Détails</h3>
                <div class=\"space-y-4\">
                    <div>
                        <p class=\"text-xs text-gray-500 mb-1\">Statut</p>
                        <span class=\"px-3 py-1 ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "statusBadgeClass", [], "any", false, false, false, 189), "html", null, true);
        yield " rounded-full text-sm font-semibold\">
                            ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 190), ["_" => " "])), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div>
                        <p class=\"text-xs text-gray-500 mb-1\">Priorité</p>
                        <span class=\"px-3 py-1 ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priorityBadgeClass", [], "any", false, false, false, 195), "html", null, true);
        yield " rounded-full text-sm font-semibold\">
                            ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 196)), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div>
                        <p class=\"text-xs text-gray-500 mb-1\">Catégorie</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "category", [], "any", false, false, false, 201)), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <p class=\"text-xs text-gray-500 mb-1\">Créé le</p>
                        <p class=\"font-medium text-gray-800\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "createdAt", [], "any", false, false, false, 205), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                    </div>
                    ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "                    <div>
                        <p class=\"text-xs text-gray-500 mb-1\">Assigné à</p>
                        <p class=\"font-medium text-gray-800\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 210), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 213
        yield "                </div>
            </div>

            <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100\">
                <h3 class=\"font-semibold text-blue-800 mb-2\">⏰ Temps de réponse</h3>
                <p class=\"text-sm text-blue-700\">
                    Notre équipe s'engage à répondre sous <strong>24 heures</strong> ouvrées.
                </p>
            </div>

            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <h3 class=\"font-semibold text-gray-800 mb-4\">📎 Actions</h3>
                <div class=\"space-y-2\">
                    <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
        yield "\" class=\"block w-full px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm text-gray-700 transition text-center\">
                        ❓ Consulter la FAQ
                    </a>
                    <a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
        yield "\" class=\"block w-full px-4 py-2 bg-blue-100 hover:bg-blue-200 rounded-lg text-sm text-blue-700 transition text-center\">
                        🎫 Nouveau ticket
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
        return "front/aide/support_view.html.twig";
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
        return array (  486 => 229,  480 => 226,  465 => 213,  459 => 210,  455 => 208,  453 => 207,  448 => 205,  441 => 201,  433 => 196,  429 => 195,  421 => 190,  417 => 189,  407 => 181,  404 => 180,  400 => 178,  396 => 176,  393 => 175,  387 => 173,  385 => 172,  379 => 170,  370 => 168,  366 => 167,  359 => 163,  352 => 158,  301 => 110,  295 => 106,  293 => 105,  287 => 101,  271 => 87,  269 => 86,  264 => 83,  253 => 78,  249 => 77,  244 => 75,  240 => 74,  236 => 73,  232 => 72,  227 => 70,  223 => 69,  218 => 68,  214 => 67,  206 => 62,  200 => 59,  196 => 58,  183 => 48,  179 => 47,  168 => 39,  164 => 38,  160 => 37,  154 => 34,  150 => 32,  137 => 31,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/support_view.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\support_view.html.twig");
    }
}
