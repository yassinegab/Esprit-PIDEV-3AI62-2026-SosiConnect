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

/* admin/aide/faq/index.html.twig */
class __TwigTemplate_f10bb81a41033031a349b3b75ba69a09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/faq/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/faq/index.html.twig"));

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

        yield "Gestion FAQ";
        
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
.faq-card {
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
}
.faq-card:hover {
    transform: translateX(4px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}
.faq-card.published {
    border-left-color: #22c55e;
}
.faq-card.draft {
    border-left-color: #eab308;
}
.category-badge {
    transition: all 0.2s ease;
}
.category-badge:hover {
    transform: scale(1.05);
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield "<div class=\"space-y-6 animate-fadeIn\" x-data=\"{ searchQuery: '', activeCategory: '' }\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center text-white text-xl\">
                    ❓
                </div>
                Centre de FAQ
            </h1>
            <p class=\"text-gray-500 mt-1 ml-16\">Gérez les questions fréquentes de votre centre d'aide</p>
        </div>
        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq_new");
        yield "\" 
           class=\"px-6 py-3 bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center gap-2\">
            <span class=\"text-xl\">➕</span> Nouvelle Question
        </a>
    </div>

    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            yield "    <div class=\"bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 text-green-800 px-6 py-4 rounded-xl flex items-center gap-3 shadow-sm\">
        <span class=\"text-2xl\">✅</span>
        <span class=\"font-medium\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-4\">
        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Total Questions</p>
                    <p class=\"text-3xl font-bold text-gray-800 mt-1\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["faqs"] ?? null)), "html", null, true);
        yield "</p>
                </div>
                <div class=\"w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📚
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Publiées</p>
                    <p class=\"text-3xl font-bold text-green-600 mt-1\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["faqs"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "isPublished", [], "any", false, false, false, 85); })), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">Visibles publiquement</p>
                </div>
                <div class=\"w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-2xl\">
                    ✅
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Brouillons</p>
                    <p class=\"text-3xl font-bold text-yellow-600 mt-1\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["faqs"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "isPublished", [], "any", false, false, false, 98); })), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">En attente</p>
                </div>
                <div class=\"w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center text-2xl\">
                    📝
                </div>
            </div>
        </div>

        <div class=\"stat-card-enhanced\">
            <div class=\"flex items-center justify-between\">
                <div>
                    <p class=\"text-sm text-gray-500 font-medium\">Vues Totales</p>
                    <p class=\"text-3xl font-bold text-blue-600 mt-1\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, ($context["faqs"] ?? null), function ($__carry__, $__f__) use ($context, $macros) { $context["carry"] = $__carry__; $context["f"] = $__f__; return (($context["carry"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "viewCount", [], "any", false, false, false, 111)); }, 0), "html", null, true);
        yield "</p>
                    <p class=\"text-xs text-gray-400 mt-1\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)), "html", null, true);
        yield " catégories</p>
                </div>
                <div class=\"w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-2xl\">
                    👁️
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
        <div class=\"flex flex-wrap gap-4 items-center\">
            <div class=\"flex-1 min-w-64\">
                <div class=\"relative\">
                    <span class=\"absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\">🔍</span>
                    <input type=\"text\" x-model=\"searchQuery\" placeholder=\"Rechercher une question...\"
                           class=\"w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent\">
                </div>
            </div>
            <div class=\"flex gap-2 flex-wrap\">
                <button @click=\"activeCategory = ''\" 
                        :class=\"activeCategory === '' ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'\"
                        class=\"px-4 py-2 rounded-xl font-medium transition\">
                    Toutes
                </button>
                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 137
            yield "                <button @click=\"activeCategory = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "'\" 
                        :class=\"activeCategory === '";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "' ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'\"
                        class=\"px-4 py-2 rounded-xl font-medium transition category-badge\">
                    ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "
                </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 gap-4\">
        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["faqs"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 149
            yield "        <div class=\"faq-card bg-white rounded-2xl shadow-lg border border-gray-100 p-5 ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "isPublished", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("published") : ("draft"));
            yield "\"
             x-show=\"(activeCategory === '' || '";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "category", [], "any", false, false, false, 150), "html", null, true);
            yield "' === activeCategory) && 
                     (searchQuery === '' || '";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 151)), "html", null, true);
            yield "'.includes(searchQuery.toLowerCase()))\">
            <div class=\"flex items-start justify-between gap-4\">
                <div class=\"flex-1 min-w-0\">
                    <div class=\"flex items-center gap-3 mb-2\">
                        <span class=\"w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 font-bold text-sm\">
                            ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 156), "html", null, true);
            yield "
                        </span>
                        <h3 class=\"font-bold text-gray-800 text-lg\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 158), "html", null, true);
            yield "</h3>
                        ";
            // line 159
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "isPublished", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 160
                yield "                        <span class=\"px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold\">
                            ✅ Publié
                        </span>
                        ";
            } else {
                // line 164
                yield "                        <span class=\"px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold\">
                            📝 Brouillon
                        </span>
                        ";
            }
            // line 168
            yield "                    </div>
                    <p class=\"text-gray-600 text-sm mb-3 line-clamp-2 pl-11\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 169)), 0, 150), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 169)) > 150)) {
                yield "...";
            }
            yield "</p>
                    <div class=\"flex items-center gap-4 pl-11 text-sm\">
                        <span class=\"px-3 py-1 bg-gray-100 text-gray-700 rounded-lg font-medium flex items-center gap-1\">
                            📁 ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "category", [], "any", false, false, false, 172), "html", null, true);
            yield "
                        </span>
                        <span class=\"text-gray-400 flex items-center gap-1\">
                            <span>👁️</span> ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "viewCount", [], "any", false, false, false, 175), "html", null, true);
            yield " vues
                        </span>
                        <span class=\"text-gray-400 flex items-center gap-1\">
                            <span>👍</span> ";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "helpfulCount", [], "any", false, false, false, 178), "html", null, true);
            yield " utiles
                        </span>
                        <span class=\"text-gray-400 flex items-center gap-1\">
                            <span>📍</span> Ordre: ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "displayOrder", [], "any", false, false, false, 181), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>
                <div class=\"flex flex-col gap-2 flex-shrink-0\">
                    <a href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            yield "\" 
                       class=\"px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-xl font-medium transition flex items-center gap-2 text-sm\">
                        ✏️ Modifier
                    </a>
                    <form method=\"post\" action=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            yield "\">
                        <button type=\"submit\" 
                                class=\"w-full px-4 py-2 ";
            // line 192
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "isPublished", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-yellow-100 hover:bg-yellow-200 text-yellow-700") : ("bg-green-100 hover:bg-green-200 text-green-700"));
            yield " rounded-xl font-medium transition flex items-center justify-center gap-2 text-sm\">
                            ";
            // line 193
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "isPublished", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "🙈 Masquer";
            } else {
                yield "👁️ Publier";
            }
            // line 194
            yield "                        </button>
                    </form>
                    <form method=\"post\" action=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 196)]), "html", null, true);
            yield "\" 
                          onsubmit=\"return confirm('⚠️ Supprimer cette FAQ ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 198))), "html", null, true);
            yield "\">
                        <button type=\"submit\" 
                                class=\"w-full px-4 py-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-xl font-medium transition flex items-center justify-center gap-2 text-sm\">
                            🗑️ Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 207
        if (!$context['_iterated']) {
            // line 208
            yield "        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-16 text-center\">
            <div class=\"w-24 h-24 bg-purple-100 rounded-full flex items-center justify-center text-5xl mx-auto mb-4\">
                ❓
            </div>
            <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucune FAQ créée</h3>
            <p class=\"text-gray-500 mb-6\">Commencez par créer votre première question fréquente</p>
            <a href=\"";
            // line 214
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq_new");
            yield "\" 
               class=\"px-6 py-3 bg-gradient-to-r from-purple-500 to-indigo-600 text-white rounded-xl font-semibold inline-flex items-center gap-2\">
                ➕ Créer la première FAQ
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['faq'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "    </div>

    <div class=\"bg-gradient-to-r from-purple-500 to-indigo-600 rounded-2xl p-6 text-white\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-3xl\">
                    💡
                </div>
                <div>
                    <h3 class=\"font-bold text-lg\">Conseils pour une bonne FAQ</h3>
                    <p class=\"text-purple-100 text-sm\">Utilisez des questions claires et des réponses concises. Organisez par catégories.</p>
                </div>
            </div>
            <div class=\"text-right hidden md:block\">
                <p class=\"text-2xl font-bold\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["faqs"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "helpfulCount", [], "any", false, false, false, 234) > 0); })), "html", null, true);
        yield "</p>
                <p class=\"text-purple-100 text-sm\">FAQs utiles</p>
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
        return "admin/aide/faq/index.html.twig";
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
        return array (  503 => 234,  487 => 220,  475 => 214,  467 => 208,  465 => 207,  443 => 198,  438 => 196,  434 => 194,  428 => 193,  424 => 192,  419 => 190,  412 => 186,  404 => 181,  398 => 178,  392 => 175,  386 => 172,  377 => 169,  374 => 168,  368 => 164,  362 => 160,  360 => 159,  356 => 158,  351 => 156,  343 => 151,  339 => 150,  334 => 149,  316 => 148,  309 => 143,  300 => 140,  295 => 138,  290 => 137,  286 => 136,  259 => 112,  255 => 111,  239 => 98,  223 => 85,  208 => 73,  200 => 67,  191 => 64,  187 => 62,  183 => 61,  174 => 55,  161 => 44,  148 => 43,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/faq/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\faq\\index.html.twig");
    }
}
