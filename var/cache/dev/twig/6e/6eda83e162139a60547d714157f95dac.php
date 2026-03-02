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

/* front/aide/tutorials/index.html.twig */
class __TwigTemplate_81771529ce5e699821ac9cb19a193cd2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/tutorials/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/tutorials/index.html.twig"));

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

        yield "Tutoriels Vidéo";
        
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
.video-card {
    transition: all 0.3s ease;
}
.video-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}
.video-thumbnail {
    position: relative;
    padding-top: 56.25%;
    overflow: hidden;
}
.video-thumbnail img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.7);
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    transition: all 0.3s ease;
}
.video-card:hover .play-button {
    background: rgba(220, 38, 38, 0.9);
    transform: translate(-50%, -50%) scale(1.1);
}
.duration-badge {
    position: absolute;
    bottom: 8px;
    right: 8px;
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 12px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "<div class=\"space-y-8 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800\" style=\"font-family: 'Poppins', sans-serif;\">
                🎬 Tutoriels Vidéo
            </h1>
            <p class=\"text-gray-500 mt-1\">Apprenez à utiliser nos services avec nos guides vidéo</p>
        </div>
        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide");
        yield "\" class=\"text-gray-500 hover:text-gray-700\">
            ← Retour
        </a>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-4 gap-6\">
        <div class=\"lg:col-span-3 space-y-6\">
            <div class=\"bg-white rounded-2xl p-4 shadow-lg border border-gray-100\">
                <div class=\"flex gap-4\">
                    <div class=\"relative flex-1\">
                        <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">🔍</span>
                        <input type=\"text\" 
                               value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\"
                               placeholder=\"Rechercher un tutoriel...\"
                               class=\"w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500\"
                               id=\"searchInput\">
                    </div>
                    <select class=\"px-4 py-3 border border-gray-200 rounded-xl\" id=\"categorySelect\">
                        <option value=\"\">Toutes catégories</option>
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 91
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\" ";
            yield (((($context["currentCategory"] ?? null) == $context["cat"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                    </select>
                    <button onclick=\"applyFilters()\" class=\"bg-blue-600 text-white px-6 py-3 rounded-xl font-medium hover:bg-blue-700 transition\">
                        Rechercher
                    </button>
                </div>
            </div>

            ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tutorials"] ?? null)) > 0)) {
            // line 101
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tutorials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
                // line 103
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorial_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\" class=\"video-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 group\">
                    <div class=\"video-thumbnail\">
                        <img src=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "thumbnailUrl", [], "any", false, false, false, 105), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, false, 105), "html", null, true);
                yield "\" onerror=\"this.src='/images/video-placeholder.jpg'\">
                        <div class=\"play-button\">▶</div>
                        <span class=\"duration-badge\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "durationFormatted", [], "any", false, false, false, 107), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex items-center gap-2 mb-2\">
                            <span class=\"px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium\">";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 111), "html", null, true);
                yield "</span>
                        </div>
                        <h3 class=\"font-bold text-gray-800 group-hover:text-blue-600 transition\">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, false, 113), "html", null, true);
                yield "</h3>
                        <p class=\"text-gray-500 text-sm mt-1 line-clamp-2\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                        <div class=\"flex items-center gap-4 mt-3 text-xs text-gray-400\">
                            <span>👁 ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "viewCount", [], "any", false, false, false, 116), "html", null, true);
                yield " vues</span>
                            <span>👍 ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "likeCount", [], "any", false, false, false, 117), "html", null, true);
                yield "</span>
                        </div>
                    </div>
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tutorial'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "            </div>
            ";
        } else {
            // line 124
            yield "            <div class=\"bg-white rounded-2xl p-12 shadow-lg border border-gray-100 text-center\">
                <div class=\"text-6xl mb-4\">🎬</div>
                <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucun tutoriel trouvé</h3>
                <p class=\"text-gray-500\">Essayez une autre recherche</p>
            </div>
            ";
        }
        // line 130
        yield "        </div>

        <div class=\"space-y-4\">
            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                <h3 class=\"font-bold text-gray-800 mb-4\">📁 Catégories</h3>
                <div class=\"space-y-2\">
                    <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "\" class=\"block px-3 py-2 rounded-lg ";
        yield (((($tmp =  !($context["currentCategory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-blue-100 text-blue-700") : ("text-gray-600 hover:bg-gray-100"));
        yield "\">
                        Toutes
                    </a>
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 140
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials", ["category" => $context["cat"]]), "html", null, true);
            yield "\" class=\"block px-3 py-2 rounded-lg ";
            yield (((($context["currentCategory"] ?? null) == $context["cat"])) ? ("bg-blue-100 text-blue-700") : ("text-gray-600 hover:bg-gray-100"));
            yield "\">
                        ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                </div>
            </div>

            <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100\">
                <h3 class=\"font-bold text-blue-800 mb-4\">🔥 Populaires</h3>
                <div class=\"space-y-3\">
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["popular"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
            // line 151
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorial_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" class=\"block p-3 bg-white rounded-lg hover:shadow transition\">
                        <p class=\"font-medium text-gray-800 text-sm\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, false, 152), "html", null, true);
            yield "</p>
                        <p class=\"text-xs text-gray-400 mt-1\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "viewCount", [], "any", false, false, false, 153), "html", null, true);
            yield " vues</p>
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tutorial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<script>
function applyFilters() {
    const search = document.getElementById('searchInput').value;
    const category = document.getElementById('categorySelect').value;
    let url = '";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorials");
        yield "';
    const params = [];
    if (search) params.push('search=' + encodeURIComponent(search));
    if (category) params.push('category=' + encodeURIComponent(category));
    if (params.length) url += '?' + params.join('&');
    window.location.href = url;
}
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
        return "front/aide/tutorials/index.html.twig";
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
        return array (  389 => 166,  377 => 156,  368 => 153,  364 => 152,  359 => 151,  355 => 150,  347 => 144,  338 => 141,  331 => 140,  327 => 139,  319 => 136,  311 => 130,  303 => 124,  299 => 122,  288 => 117,  284 => 116,  279 => 114,  275 => 113,  270 => 111,  263 => 107,  256 => 105,  250 => 103,  246 => 102,  243 => 101,  241 => 100,  232 => 93,  219 => 91,  215 => 90,  205 => 83,  190 => 71,  180 => 63,  167 => 62,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/tutorials/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\tutorials\\index.html.twig");
    }
}
