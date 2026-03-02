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

/* front/don/inscription.html.twig */
class __TwigTemplate_b00b3ff4e38618c24aeeec6479f57a83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/inscription.html.twig"));

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

        yield "Devenir Donneur";
        
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
        yield "<div class=\"max-w-2xl mx-auto space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour
        </a>
        <h1 class=\"text-2xl font-bold text-gray-800\">👤 Devenir Donneur</h1>
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg\">
        ";
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
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <div class=\"md:col-span-2\">
            <div class=\"bg-white rounded-2xl p-8 shadow-lg border border-gray-100\">
                <div class=\"flex items-center gap-4 mb-6\">
                    <div class=\"w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl\">
                        🩸
                    </div>
                    <div>
                        <h2 class=\"text-xl font-bold text-gray-800\">Inscription Donneur</h2>
                        <p class=\"text-gray-500\">Rejoignez notre communauté de donneurs</p>
                    </div>
                </div>

                <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-6\">
                    <div class=\"grid grid-cols-2 gap-4\">
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-2\">Prénom *</label>
                            <input type=\"text\" name=\"prenom\" required
                                   class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition\"
                                   placeholder=\"Ahmed\">
                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-2\">Nom *</label>
                            <input type=\"text\" name=\"nom\" required
                                   class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition\"
                                   placeholder=\"Ben Ali\">
                        </div>
                    </div>

                    <div class=\"grid grid-cols-2 gap-4\">
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-2\">Âge *</label>
                            <input type=\"number\" name=\"age\" required min=\"18\" max=\"65\"
                                   class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition\"
                                   placeholder=\"25\">
                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-2\">Téléphone *</label>
                            <input type=\"tel\" name=\"telephone\" required
                                   class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition\"
                                   placeholder=\"XX XXX XXX\">
                        </div>
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Groupe Sanguin *</label>
                        <select name=\"groupe_sanguin\" required
                                class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition\">
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

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">📷 Photo de profil (optionnel)</label>
                        <div class=\"mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-purple-400 transition\">
                            <div class=\"space-y-1 text-center\">
                                <svg class=\"mx-auto h-12 w-12 text-gray-400\" stroke=\"currentColor\" fill=\"none\" viewBox=\"0 0 48 48\">
                                    <path d=\"M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                                <div class=\"flex text-sm text-gray-600\">
                                    <label class=\"relative cursor-pointer bg-white rounded-md font-medium text-purple-600 hover:text-purple-500\">
                                        <span>Télécharger une image</span>
                                        <input type=\"file\" name=\"profile_image\" accept=\"image/jpeg,image/png,image/gif\" class=\"sr-only\">
                                    </label>
                                    <p class=\"pl-1\">ou glisser-déposer</p>
                                </div>
                                <p class=\"text-xs text-gray-500\">JPG, PNG, GIF jusqu'à 5MB</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"flex items-center gap-3 p-4 bg-gray-50 rounded-xl\">
                        <input type=\"checkbox\" required id=\"consent\" class=\"w-5 h-5 text-purple-600 rounded\">
                        <label for=\"consent\" class=\"text-sm text-gray-700\">
                            J'accepte d'être contacté(e) pour des demandes de don compatibles avec mon groupe sanguin
                        </label>
                    </div>

                    <button type=\"submit\" class=\"w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white py-4 rounded-xl font-semibold transition shadow-lg\">
                        🩸 S'inscrire comme donneur
                    </button>
                </form>
            </div>
        </div>

        <div class=\"space-y-4\">
            <div class=\"bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100\">
                <h3 class=\"font-semibold text-purple-800 mb-3\">📋 Conditions</h3>
                <ul class=\"text-sm text-purple-700 space-y-2\">
                    <li class=\"flex items-start gap-2\">
                        <span>✓</span>
                        <span>Être âgé de 18 à 65 ans</span>
                    </li>
                    <li class=\"flex items-start gap-2\">
                        <span>✓</span>
                        <span>Peser plus de 50 kg</span>
                    </li>
                    <li class=\"flex items-start gap-2\">
                        <span>✓</span>
                        <span>Être en bonne santé</span>
                    </li>
                    <li class=\"flex items-start gap-2\">
                        <span>✓</span>
                        <span>Avoir jeûné 4h avant le don</span>
                    </li>
                </ul>
            </div>

            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                <h3 class=\"font-semibold text-gray-800 mb-3\">🔒 Confidentialité</h3>
                <p class=\"text-sm text-gray-600\">
                    Vos données personnelles sont protégées et ne seront utilisées que pour vous contacter en cas de besoin de don compatible.
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
        return "front/don/inscription.html.twig";
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
        return array (  176 => 30,  167 => 27,  164 => 26,  160 => 25,  157 => 24,  148 => 21,  145 => 20,  141 => 19,  132 => 13,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/inscription.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\inscription.html.twig");
    }
}
