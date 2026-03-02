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

/* front/aide/support.html.twig */
class __TwigTemplate_e18140411f84c70948ff95933adfe136 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/support.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/support.html.twig"));

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

        yield "Mes Tickets - Support";
        
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
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-2xl font-bold text-gray-800\">🎫 Mes Tickets</h1>
            <p class=\"text-gray-500\">Suivez l'état de vos demandes de support</p>
        </div>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
        yield "\" class=\"bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition shadow-lg flex items-center gap-2\">
            <span>➕</span> Nouveau ticket
        </a>
    </div>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg\">
        ✅ ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    ";
        // line 28
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tickets"] ?? null)) > 0)) {
            // line 29
            yield "    <div class=\"space-y-4\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 31
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\" 
           class=\"block bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition group\">
            <div class=\"flex justify-between items-start\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-12 h-12 ";
                // line 35
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 35) == "open")) ? ("bg-blue-100") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 35) == "resolved")) ? ("bg-green-100") : ("bg-gray-100"))));
                yield " rounded-xl flex items-center justify-center text-2xl\">
                        ";
                // line 36
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 36) == "open")) {
                    // line 37
                    yield "                            🎫
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 38
$context["ticket"], "status", [], "any", false, false, false, 38) == "in_progress")) {
                    // line 39
                    yield "                            💬
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["ticket"], "status", [], "any", false, false, false, 40) == "resolved")) {
                    // line 41
                    yield "                            ✅
                        ";
                } else {
                    // line 43
                    yield "                            📁
                        ";
                }
                // line 45
                yield "                    </div>
                    <div>
                        <h3 class=\"font-semibold text-gray-800 group-hover:text-blue-600 transition\">
                            ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 48), "html", null, true);
                yield "
                        </h3>
                        <p class=\"text-sm text-gray-500 mt-1 line-clamp-1\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 50), 0, 100), "html", null, true);
                yield "...</p>
                        <div class=\"flex items-center gap-4 mt-2 text-xs text-gray-400\">
                            <span>#";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
                            <span>📅 ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "createdAt", [], "any", false, false, false, 53), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                            <span>📁 ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "category", [], "any", false, false, false, 54), "html", null, true);
                yield "</span>
                            ";
                // line 55
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "messages", [], "any", false, false, false, 55)) > 0)) {
                    // line 56
                    yield "                            <span>💬 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "messages", [], "any", false, false, false, 56)), "html", null, true);
                    yield " message(s)</span>
                            ";
                }
                // line 58
                yield "                        </div>
                    </div>
                </div>
                <div class=\"flex flex-col items-end gap-2\">
                    <span class=\"px-3 py-1 ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "statusBadgeClass", [], "any", false, false, false, 62), "html", null, true);
                yield " rounded-full text-xs font-semibold\">
                        ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 63), ["_" => " "])), "html", null, true);
                yield "
                    </span>
                    <span class=\"px-3 py-1 ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priorityBadgeClass", [], "any", false, false, false, 65), "html", null, true);
                yield " rounded-full text-xs font-semibold\">
                        ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 66)), "html", null, true);
                yield "
                    </span>
                </div>
            </div>
        </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "    </div>
    ";
        } else {
            // line 74
            yield "    <div class=\"bg-white rounded-2xl p-12 shadow-lg border border-gray-100 text-center\">
        <div class=\"text-6xl mb-4\">🎫</div>
        <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucun ticket</h3>
        <p class=\"text-gray-500 mb-6\">Vous n'avez pas encore créé de ticket de support.</p>
        <a href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
            yield "\" class=\"inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition\">
            🎫 Créer mon premier ticket
        </a>
    </div>
    ";
        }
        // line 83
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <h3 class=\"font-semibold text-gray-800 mb-4\">📊 Statut des tickets</h3>
            <div class=\"space-y-3\">
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"w-3 h-3 bg-blue-500 rounded-full\"></div>
                        <span class=\"text-gray-600\">Ouverts</span>
                    </div>
                    <span class=\"font-semibold\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 93) == "open"); })), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"w-3 h-3 bg-yellow-500 rounded-full\"></div>
                        <span class=\"text-gray-600\">En cours</span>
                    </div>
                    <span class=\"font-semibold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 100) == "in_progress"); })), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"w-3 h-3 bg-green-500 rounded-full\"></div>
                        <span class=\"text-gray-600\">Résolus</span>
                    </div>
                    <span class=\"font-semibold\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 107) == "resolved"); })), "html", null, true);
        yield "</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"w-3 h-3 bg-gray-500 rounded-full\"></div>
                        <span class=\"text-gray-600\">Fermés</span>
                    </div>
                    <span class=\"font-semibold\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 114) == "closed"); })), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100\">
            <h3 class=\"font-semibold text-blue-800 mb-4\">💡 Besoin d'aide rapide ?</h3>
            <p class=\"text-sm text-blue-700 mb-4\">
                Avant de créer un ticket, consultez notre FAQ. Vous y trouverez peut-être la réponse à votre question !
            </p>
            <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_faq");
        yield "\" class=\"block w-full bg-white hover:bg-blue-50 text-blue-600 text-center py-3 rounded-xl font-medium transition border border-blue-200\">
                ❓ Consulter la FAQ
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
        return "front/aide/support.html.twig";
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
        return array (  343 => 124,  330 => 114,  320 => 107,  310 => 100,  300 => 93,  288 => 83,  280 => 78,  274 => 74,  270 => 72,  258 => 66,  254 => 65,  249 => 63,  245 => 62,  239 => 58,  233 => 56,  231 => 55,  227 => 54,  223 => 53,  219 => 52,  214 => 50,  209 => 48,  204 => 45,  200 => 43,  196 => 41,  194 => 40,  191 => 39,  189 => 38,  186 => 37,  184 => 36,  180 => 35,  172 => 31,  168 => 30,  165 => 29,  163 => 28,  160 => 27,  151 => 24,  148 => 23,  144 => 22,  136 => 17,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/support.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\support.html.twig");
    }
}
