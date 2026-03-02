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

/* front/aide/tutorials/view.html.twig */
class __TwigTemplate_dfa56225cd995fcc641502f8bed94489 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/tutorials/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/tutorials/view.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
.video-container {
    position: relative;
    padding-top: 56.25%;
    background: #000;
    border-radius: 1rem;
    overflow: hidden;
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        // line 27
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour aux tutoriels
        </a>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100\">
                <div class=\"video-container\">
                    <iframe src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "embedUrl", [], "any", false, false, false, 38), "html", null, true);
        yield "\" 
                            frameborder=\"0\" 
                            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" 
                            allowfullscreen></iframe>
                </div>
                
                <div class=\"p-6\">
                    <div class=\"flex items-start justify-between\">
                        <div>
                            <span class=\"px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium\">
                                ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 48), "html", null, true);
        yield "
                            </span>
                            <h1 class=\"text-2xl font-bold text-gray-800 mt-3\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "title", [], "any", false, false, false, 50), "html", null, true);
        yield "</h1>
                        </div>
                        <span class=\"text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-lg\">
                            ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "durationFormatted", [], "any", false, false, false, 53), "html", null, true);
        yield "
                        </span>
                    </div>
                    
                    <p class=\"text-gray-600 mt-4 leading-relaxed\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "description", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
                    
                    <div class=\"flex items-center gap-6 mt-6 pt-4 border-t border-gray-100\">
                        <span class=\"text-sm text-gray-500\">
                            👁 ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "viewCount", [], "any", false, false, false, 61), "html", null, true);
        yield " vues
                        </span>
                        <span class=\"text-sm text-gray-500\">
                            📅 ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "createdAt", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
        yield "
                        </span>
                        <form method=\"post\" action=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorial_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "id", [], "any", false, false, false, 66)]), "html", null, true);
        yield "\" class=\"ml-auto\">
                            <button type=\"submit\" class=\"flex items-center gap-2 text-gray-600 hover:text-red-600 transition\">
                                👍 <span>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "likeCount", [], "any", false, false, false, 68), "html", null, true);
        yield "</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                <h3 class=\"font-bold text-gray-800 mb-4\">📁 Catégorie</h3>
                <a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials", ["category" => CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" 
                   class=\"inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-xl font-medium hover:bg-blue-200 transition\">
                    ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 81), "html", null, true);
        yield "
                </a>
            </div>

            <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100\">
                <h3 class=\"font-bold text-blue-800 mb-3\">💡 Astuce</h3>
                <p class=\"text-sm text-blue-700\">
                    Partagez ce tutoriel avec vos amis pour les aider à utiliser nos services !
                </p>
                <div class=\"flex gap-2 mt-4\">
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 91), "uri", [], "any", false, false, false, 91), "html", null, true);
        yield "\" target=\"_blank\"
                       class=\"w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition\">
                        f
                    </a>
                    <a href=\"https://twitter.com/intent/tweet?text=";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "title", [], "any", false, false, false, 95), "html", null, true);
        yield "&url=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 95), "uri", [], "any", false, false, false, 95), "html", null, true);
        yield "\" target=\"_blank\"
                       class=\"w-10 h-10 bg-sky-500 text-white rounded-lg flex items-center justify-center hover:bg-sky-600 transition\">
                        𝕏
                    </a>
                    <a href=\"https://wa.me/?text=";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "title", [], "any", false, false, false, 99), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 99), "uri", [], "any", false, false, false, 99), "html", null, true);
        yield "\" target=\"_blank\"
                       class=\"w-10 h-10 bg-green-500 text-white rounded-lg flex items-center justify-center hover:bg-green-600 transition\">
                        💬
                    </a>
                </div>
            </div>

            <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_support_new");
        yield "\" 
               class=\"block bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition\">
                <div class=\"flex items-center gap-3\">
                    <span class=\"text-2xl\">❓</span>
                    <div>
                        <p class=\"font-medium text-gray-800\">Besoin d'aide ?</p>
                        <p class=\"text-sm text-gray-500\">Contacter le support</p>
                    </div>
                </div>
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
        return "front/aide/tutorials/view.html.twig";
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
        return array (  274 => 106,  262 => 99,  253 => 95,  246 => 91,  233 => 81,  228 => 79,  214 => 68,  209 => 66,  204 => 64,  198 => 61,  191 => 57,  184 => 53,  178 => 50,  173 => 48,  160 => 38,  148 => 29,  144 => 27,  131 => 26,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/tutorials/view.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\tutorials\\view.html.twig");
    }
}
