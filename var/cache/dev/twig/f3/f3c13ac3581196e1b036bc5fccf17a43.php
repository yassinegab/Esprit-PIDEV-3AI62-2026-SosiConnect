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

/* front/aide/faq.html.twig */
class __TwigTemplate_0bb864e760ef98e7d94e981011247e71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/faq.html.twig"));

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

        yield "FAQ - Centre d'Aide";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour
        </a>
        <h1 class=\"text-2xl font-bold text-gray-800\">❓ Foire Aux Questions</h1>
    </div>

    <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
        <form method=\"get\" class=\"flex gap-4\">
            <div class=\"flex-1 relative\">
                <span class=\"absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\">🔍</span>
                <input type=\"text\" name=\"search\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\"
                       placeholder=\"Rechercher dans la FAQ...\"
                       class=\"w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\">
            </div>
            <button type=\"submit\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition\">
                Rechercher
            </button>
            ";
        // line 30
        if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
            yield "\" class=\"bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-3 rounded-xl transition\">
                ✕
            </a>
            ";
        }
        // line 35
        yield "        </form>
    </div>

    <div class=\"flex gap-4 flex-wrap\">
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
        yield "\" class=\"px-4 py-2 rounded-full text-sm font-medium transition ";
        yield (((($tmp =  !($context["currentCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-blue-600 text-white") : ("bg-gray-100 text-gray-600 hover:bg-gray-200"));
        yield "\">
            Toutes
        </a>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 43
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq", ["category" => $context["category"]]), "html", null, true);
            yield "\" class=\"px-4 py-2 rounded-full text-sm font-medium transition ";
            yield (((($context["currentCategory"] ?? null) == $context["category"])) ? ("bg-blue-600 text-white") : ("bg-gray-100 text-gray-600 hover:bg-gray-200"));
            yield "\">
            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["category"]), "html", null, true);
            yield "
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "    </div>

    <div class=\"space-y-4\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["faqs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 51
            yield "        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\" x-data=\"{ open: false }\">
            <button @click=\"open = !open; if(!open) fetch('";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "')\"
                    class=\"w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center text-xl flex-shrink-0\">
                        ❓
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-gray-800 text-lg\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 59), "html", null, true);
            yield "</h3>
                        <div class=\"flex items-center gap-4 mt-2 text-xs text-gray-500\">
                            <span>📁 ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "category", [], "any", false, false, false, 61), "html", null, true);
            yield "</span>
                            <span>👁 ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "viewCount", [], "any", false, false, false, 62), "html", null, true);
            yield " vues</span>
                            <span>👍 ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "helpfulCount", [], "any", false, false, false, 63), "html", null, true);
            yield " utiles</span>
                        </div>
                    </div>
                </div>
                <span class=\"text-gray-400 text-2xl transition-transform\" :class=\"open ? 'rotate-180' : ''\">
                    ▼
                </span>
            </button>
            
            <div x-show=\"open\" x-collapse class=\"border-t border-gray-100\">
                <div class=\"p-6 bg-gray-50\">
                    <p class=\"text-gray-700 leading-relaxed\">";
            // line 74
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 74), "html", null, true));
            yield "</p>
                    
                    <div class=\"mt-6 pt-4 border-t border-gray-200 flex items-center justify-between\">
                        <span class=\"text-sm text-gray-500\">Cette réponse vous a-t-elle aidé ?</span>
                        <div class=\"flex gap-2\">
                            <button @click=\"\$fetch('";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq_helpful", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "', {method: 'POST'})\"
                                    class=\"px-4 py-2 bg-green-100 text-green-700 rounded-lg hover:bg-green-200 transition text-sm font-medium flex items-center gap-2\">
                                👍 Oui
                            </button>
                            <button class=\"px-4 py-2 bg-gray-100 text-gray-600 rounded-lg hover:bg-gray-200 transition text-sm font-medium flex items-center gap-2\">
                                👎 Non
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 91
        if (!$context['_iterated']) {
            // line 92
            yield "        <div class=\"bg-white rounded-2xl p-12 shadow-lg border border-gray-100 text-center\">
            <div class=\"text-6xl mb-4\">🔍</div>
            <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucune question trouvée</h3>
            <p class=\"text-gray-500 mb-6\">
                ";
            // line 96
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                    Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                yield "\"
                ";
            } else {
                // line 99
                yield "                    Aucune question disponible dans cette catégorie
                ";
            }
            // line 101
            yield "            </p>
            <a href=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
            yield "\" class=\"inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition\">
                🎫 Créer un ticket de support
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['faq'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "    </div>

    ";
        // line 109
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["faqs"] ?? null)) > 0)) {
            // line 110
            yield "    <div class=\"bg-gradient-to-r from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100\">
        <div class=\"flex items-center justify-between flex-wrap gap-4\">
            <div>
                <h3 class=\"font-bold text-gray-800\">Vous n'avez pas trouvé votre réponse ?</h3>
                <p class=\"text-gray-600 text-sm\">Notre équipe de support est là pour vous aider.</p>
            </div>
            <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
            yield "\" class=\"bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-xl font-semibold transition shadow-lg\">
                🎫 Contacter le support
            </a>
        </div>
    </div>
    ";
        }
        // line 122
        yield "</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.directive('collapse', (el, { expression }, { effect, evaluateLater }) => {
        let open = evaluateLater(expression);
        
        effect(() => {
            open(value => {
                if (value) {
                    el.style.height = 'auto';
                    el.style.overflow = 'visible';
                } else {
                    el.style.height = '0';
                    el.style.overflow = 'hidden';
                }
            });
        });
    });
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
        return "front/aide/faq.html.twig";
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
        return array (  331 => 122,  322 => 116,  314 => 110,  312 => 109,  308 => 107,  297 => 102,  294 => 101,  290 => 99,  284 => 97,  282 => 96,  276 => 92,  274 => 91,  257 => 79,  249 => 74,  235 => 63,  231 => 62,  227 => 61,  222 => 59,  212 => 52,  209 => 51,  204 => 50,  199 => 47,  190 => 44,  183 => 43,  179 => 42,  171 => 39,  165 => 35,  157 => 31,  155 => 30,  145 => 23,  132 => 13,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/faq.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\faq.html.twig");
    }
}
