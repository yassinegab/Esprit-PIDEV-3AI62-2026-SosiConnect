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

/* front/aide/urgence.html.twig */
class __TwigTemplate_b39dece910a08b90478de236c5bc6394 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/urgence.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/urgence.html.twig"));

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
        <h1 class=\"text-2xl font-bold text-gray-800\">🚨 Numéros d'Urgence</h1>
    </div>

    <div class=\"bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-8 text-white\">
        <div class=\"flex items-center gap-4\">
            <div class=\"text-5xl\">🆘</div>
            <div>
                <h2 class=\"text-2xl font-bold mb-1\">En cas d'urgence</h2>
                <p class=\"text-red-100\">Composez immédiatement l'un des numéros ci-dessous</p>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
        <a href=\"tel:190\" class=\"bg-white rounded-2xl p-6 shadow-lg border-2 border-red-200 hover:border-red-400 hover:shadow-xl transition group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center text-3xl group-hover:scale-110 transition\">
                    🚑
                </div>
                <div>
                    <p class=\"text-3xl font-bold text-red-600\">190</p>
                    <p class=\"text-gray-500\">SAMU - Urgences médicales</p>
                </div>
            </div>
        </a>

        <a href=\"tel:193\" class=\"bg-white rounded-2xl p-6 shadow-lg border-2 border-orange-200 hover:border-orange-400 hover:shadow-xl transition group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-3xl group-hover:scale-110 transition\">
                    🚒
                </div>
                <div>
                    <p class=\"text-3xl font-bold text-orange-600\">193</p>
                    <p class=\"text-gray-500\">Pompiers</p>
                </div>
            </div>
        </a>

        <a href=\"tel:197\" class=\"bg-white rounded-2xl p-6 shadow-lg border-2 border-blue-200 hover:border-blue-400 hover:shadow-xl transition group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-3xl group-hover:scale-110 transition\">
                    👮
                </div>
                <div>
                    <p class=\"text-3xl font-bold text-blue-600\">197</p>
                    <p class=\"text-gray-500\">Police - Secours</p>
                </div>
            </div>
        </a>

        <a href=\"tel:198\" class=\"bg-white rounded-2xl p-6 shadow-lg border-2 border-cyan-200 hover:border-cyan-400 hover:shadow-xl transition group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center text-3xl group-hover:scale-110 transition\">
                    🚁
                </div>
                <div>
                    <p class=\"text-3xl font-bold text-cyan-600\">198</p>
                    <p class=\"text-gray-500\">Garde nationale</p>
                </div>
            </div>
        </a>

        <a href=\"tel:80102010\" class=\"bg-white rounded-2xl p-6 shadow-lg border-2 border-green-200 hover:border-green-400 hover:shadow-xl transition group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl group-hover:scale-110 transition\">
                    🩸
                </div>
                <div>
                    <p class=\"text-2xl font-bold text-green-600\">80102010</p>
                    <p class=\"text-gray-500\">Centre national de transfusion</p>
                </div>
            </div>
        </a>

        <a href=\"tel:71 784 555\" class=\"bg-white rounded-2xl p-6 shadow-lg border-2 border-purple-200 hover:border-purple-400 hover:shadow-xl transition group\">
            <div class=\"flex items-center gap-4\">
                <div class=\"w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl group-hover:scale-110 transition\">
                    ☎️
                </div>
                <div>
                    <p class=\"text-2xl font-bold text-purple-600\">71 784 555</p>
                    <p class=\"text-gray-500\">Urgences psychologiques</p>
                </div>
            </div>
        </a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
            <h3 class=\"font-semibold text-gray-800 mb-4 flex items-center gap-2\">
                <span class=\"text-xl\">📋</span> Que faire en cas d'urgence ?
            </h3>
            <div class=\"space-y-4\">
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center text-red-600 font-bold text-sm flex-shrink-0\">1</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Restez calme</p>
                        <p class=\"text-sm text-gray-500\">Prenez une grande respiration et évaluez la situation</p>
                    </div>
                </div>
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 font-bold text-sm flex-shrink-0\">2</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Appelez les secours</p>
                        <p class=\"text-sm text-gray-500\">Composez le numéro approprié et donnez votre position</p>
                    </div>
                </div>
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-600 font-bold text-sm flex-shrink-0\">3</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Décrivez la situation</p>
                        <p class=\"text-sm text-gray-500\">Soyez précis sur la nature de l'urgence et le nombre de personnes</p>
                    </div>
                </div>
                <div class=\"flex items-start gap-3\">
                    <div class=\"w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center text-green-600 font-bold text-sm flex-shrink-0\">4</div>
                    <div>
                        <p class=\"font-medium text-gray-800\">Suivez les instructions</p>
                        <p class=\"text-sm text-gray-500\">Les secouristes vous guideront jusqu'à l'arrivée des secours</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl p-6 border border-red-100\">
            <h3 class=\"font-semibold text-red-800 mb-4 flex items-center gap-2\">
                <span class=\"text-xl\">⚠️</span> Informations importantes
            </h3>
            <ul class=\"space-y-3 text-sm text-red-700\">
                <li class=\"flex items-start gap-2\">
                    <span>•</span>
                    <span>Ne raccrochez pas le premier, laissez l'opérateur terminer l'appel</span>
                </li>
                <li class=\"flex items-start gap-2\">
                    <span>•</span>
                    <span>Ayez votre localisation exacte prête (adresse, points de repère)</span>
                </li>
                <li class=\"flex items-start gap-2\">
                    <span>•</span>
                    <span>Si possible, envoyez quelqu'un attendre les secours</span>
                </li>
                <li class=\"flex items-start gap-2\">
                    <span>•</span>
                    <span>Ne déplacez pas une personne blessée sauf danger immédiat</span>
                </li>
                <li class=\"flex items-start gap-2\">
                    <span>•</span>
                    <span>Gardez les voies d'accès libres pour les secours</span>
                </li>
            </ul>

            <div class=\"mt-6 p-4 bg-white rounded-xl\">
                <p class=\"text-sm text-gray-600\">
                    <strong>💡 Astuce :</strong> Ajoutez ces numéros à vos contacts pour un accès rapide en cas d'urgence.
                </p>
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
        return "front/aide/urgence.html.twig";
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
        return array (  132 => 13,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/urgence.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\urgence.html.twig");
    }
}
