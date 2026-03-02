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

/* admin/aide/support/open.html.twig */
class __TwigTemplate_3dbd2be5c0e66ae5f2bcb53e21e501aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/support/open.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/support/open.html.twig"));

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

        yield "Tickets Ouverts - Support";
        
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
.ticket-card {
    transition: all 0.3s ease;
}
.ticket-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.priority-critical { border-left: 4px solid #dc2626; }
.priority-high { border-left: 4px solid #f97316; }
.priority-medium { border-left: 4px solid #eab308; }
.priority-low { border-left: 4px solid #22c55e; }
.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-12 h-12 bg-gradient-to-br from-red-500 to-orange-500 rounded-xl flex items-center justify-center text-white text-xl relative\">
                    🚨
                    <span class=\"absolute -top-1 -right-1 flex h-4 w-4\">
                        <span class=\"animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75\"></span>
                        <span class=\"relative inline-flex rounded-full h-4 w-4 bg-red-500\"></span>
                    </span>
                </div>
                Tickets Ouverts
            </h1>
            <p class=\"text-gray-500 mt-1 ml-16\">Tickets nécessitant une attention immédiate</p>
        </div>
        <div class=\"flex items-center gap-3\">
            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support");
        yield "\" 
               class=\"px-5 py-3 bg-gray-100 text-gray-700 rounded-xl font-semibold hover:bg-gray-200 transition flex items-center gap-2\">
                ← Tous les tickets
            </a>
        </div>
    </div>

    <div class=\"bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-6 text-white\">
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-3xl\">
                    ⚡
                </div>
                <div>
                    <h3 class=\"font-bold text-lg\">Action Requise</h3>
                    <p class=\"text-red-100 text-sm\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tickets"] ?? null)), "html", null, true);
        yield " tickets en attente de traitement</p>
                </div>
            </div>
            <div class=\"text-right\">
                <p class=\"text-3xl font-bold\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tickets"] ?? null)), "html", null, true);
        yield "</p>
                <p class=\"text-red-100 text-sm\">Tickets ouverts</p>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 gap-4\">
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 76
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" 
           class=\"ticket-card bg-white rounded-2xl shadow-lg border border-gray-100 p-5 block hover:border-red-200
                  ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 78) == "critical")) {
                yield "priority-critical
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 79
$context["ticket"], "priority", [], "any", false, false, false, 79) == "high")) {
                yield "priority-high
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["ticket"], "priority", [], "any", false, false, false, 80) == "medium")) {
                yield "priority-medium
                  ";
            } else {
                // line 81
                yield "priority-low";
            }
            yield "\">
            <div class=\"flex items-start justify-between gap-4\">
                <div class=\"flex items-start gap-4 flex-1\">
                    <div class=\"avatar bg-gradient-to-br from-red-400 to-orange-500 text-white flex-shrink-0\">
                        ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "userName", [], "any", false, false, false, 85))), "html", null, true);
            yield "
                    </div>
                    <div class=\"flex-1 min-w-0\">
                        <div class=\"flex items-center gap-3 mb-1\">
                            <h3 class=\"font-bold text-gray-800 truncate\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 89), "html", null, true);
            yield "</h3>
                            ";
            // line 90
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 90) == "critical")) {
                // line 91
                yield "                            <span class=\"px-2 py-0.5 text-xs rounded-full bg-red-100 text-red-700 font-semibold flex-shrink-0 animate-pulse\">
                                CRITIQUE
                            </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 94
$context["ticket"], "priority", [], "any", false, false, false, 94) == "high")) {
                // line 95
                yield "                            <span class=\"px-2 py-0.5 text-xs rounded-full bg-orange-100 text-orange-700 font-semibold flex-shrink-0\">
                                HAUTE
                            </span>
                            ";
            } else {
                // line 99
                yield "                            <span class=\"px-2 py-0.5 text-xs rounded-full bg-yellow-100 text-yellow-700 font-semibold flex-shrink-0\">
                                ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 100)), "html", null, true);
                yield "
                            </span>
                            ";
            }
            // line 103
            yield "                        </div>
                        <p class=\"text-gray-500 text-sm truncate mb-2\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 104), 0, 100), "html", null, true);
            yield "...</p>
                        <div class=\"flex items-center gap-4 text-xs text-gray-400\">
                            <span class=\"flex items-center gap-1\">
                                <span>👤</span> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "userName", [], "any", false, false, false, 107), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <span>📧</span> ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "userEmail", [], "any", false, false, false, 110), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <span>📁</span> ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "category", [], "any", false, false, false, 113), "html", null, true);
            yield "
                            </span>
                            <span class=\"flex items-center gap-1\">
                                <span>🕐</span> ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "createdAt", [], "any", false, false, false, 116), "d/m/Y à H:i"), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"flex flex-col items-end gap-2 flex-shrink-0\">
                    <span class=\"px-3 py-1.5 rounded-full text-sm font-semibold 
                        ";
            // line 123
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 123) == "open")) {
                yield "bg-green-100 text-green-700
                        ";
            } else {
                // line 124
                yield "bg-yellow-100 text-yellow-700";
            }
            yield "\">
                        ";
            // line 125
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 125) == "open")) {
                yield "🟢 Ouvert
                        ";
            } else {
                // line 126
                yield "🟡 En cours";
            }
            // line 127
            yield "                    </span>
                    <span class=\"text-xs text-gray-400\">
                        #";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 129), "html", null, true);
            yield "
                    </span>
                </div>
            </div>
        </a>
        ";
            $context['_iterated'] = true;
        }
        // line 134
        if (!$context['_iterated']) {
            // line 135
            yield "        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-16 text-center\">
            <div class=\"w-24 h-24 bg-green-100 rounded-full flex items-center justify-center text-5xl mx-auto mb-4\">
                ✅
            </div>
            <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Excellent !</h3>
            <p class=\"text-gray-500\">Aucun ticket ouvert en attente de traitement</p>
            <a href=\"";
            // line 141
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support");
            yield "\" class=\"inline-block mt-4 px-6 py-3 bg-blue-500 text-white rounded-xl font-semibold hover:bg-blue-600 transition\">
                Voir tous les tickets
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "    </div>
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
        return "admin/aide/support/open.html.twig";
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
        return array (  360 => 146,  349 => 141,  341 => 135,  339 => 134,  329 => 129,  325 => 127,  322 => 126,  317 => 125,  312 => 124,  307 => 123,  297 => 116,  291 => 113,  285 => 110,  279 => 107,  273 => 104,  270 => 103,  264 => 100,  261 => 99,  255 => 95,  253 => 94,  248 => 91,  246 => 90,  242 => 89,  235 => 85,  227 => 81,  222 => 80,  218 => 79,  214 => 78,  208 => 76,  203 => 75,  193 => 68,  186 => 64,  168 => 49,  150 => 33,  137 => 32,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/support/open.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\support\\open.html.twig");
    }
}
