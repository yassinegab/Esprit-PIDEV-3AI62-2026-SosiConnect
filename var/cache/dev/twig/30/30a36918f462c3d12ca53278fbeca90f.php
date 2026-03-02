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

/* front/aide/support_new.html.twig */
class __TwigTemplate_5a516b8667337eb91700a9e45962896a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/support_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/aide/support_new.html.twig"));

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

        yield "Nouveau Ticket - Support";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour
        </a>
        <h1 class=\"text-2xl font-bold text-gray-800\">🎫 Nouveau Ticket de Support</h1>
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg\">
        ❌ ";
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
    <div class=\"bg-white rounded-2xl p-8 shadow-lg border border-gray-100\">
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-6\">
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Nom complet *</label>
                    <input type=\"text\" name=\"user_name\" required
                           value=\"";
        // line 31
        yield (((($tmp = ($context["userEmail"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (""));
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\"
                           placeholder=\"Votre nom\">
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Email *</label>
                    <input type=\"email\" name=\"user_email\" required
                           value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userEmail"] ?? null), "html", null, true);
        yield "\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\"
                           placeholder=\"votre@email.com\">
                </div>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">Sujet *</label>
                <input type=\"text\" name=\"subject\" required
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\"
                       placeholder=\"Résumez votre problème en quelques mots\">
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Catégorie</label>
                    <select name=\"category\" class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 transition\">
                        <option value=\"general\">Général</option>
                        <option value=\"don\">Don</option>
                        <option value=\"aide\">Aide</option>
                        <option value=\"urgence\">Urgence</option>
                        <option value=\"compte\">Compte</option>
                        <option value=\"technique\">Technique</option>
                    </select>
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Priorité</label>
                    <select name=\"priority\" class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 transition\">
                        <option value=\"low\">Basse</option>
                        <option value=\"medium\" selected>Moyenne</option>
                        <option value=\"high\">Haute</option>
                        <option value=\"urgent\">Urgente</option>
                    </select>
                </div>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">Description *</label>
                <textarea name=\"description\" rows=\"6\" required
                          class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none\"
                          placeholder=\"Décrivez votre problème en détail...\"></textarea>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">📎 Pièce jointe (optionnel)</label>
                <div class=\"mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-blue-400 transition\">
                    <div class=\"space-y-1 text-center\">
                        <svg class=\"mx-auto h-12 w-12 text-gray-400\" stroke=\"currentColor\" fill=\"none\" viewBox=\"0 0 48 48\">
                            <path d=\"M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                        </svg>
                        <div class=\"flex text-sm text-gray-600\">
                            <label class=\"relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500\">
                                <span>Télécharger un fichier</span>
                                <input type=\"file\" name=\"attachment\" accept=\"image/jpeg,image/png,image/gif,application/pdf\" class=\"sr-only\">
                            </label>
                            <p class=\"pl-1\">ou glisser-déposer</p>
                        </div>
                        <p class=\"text-xs text-gray-500\">Images (JPG, PNG, GIF) ou PDF jusqu'à 5MB</p>
                    </div>
                </div>
            </div>

            <div class=\"flex justify-end gap-4 pt-4 border-t\">
                <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide");
        yield "\" class=\"px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl font-medium transition\">
                    Annuler
                </a>
                <button type=\"submit\" class=\"px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition shadow-lg\">
                    🎫 Créer le ticket
                </button>
            </div>
        </form>
    </div>

    <div class=\"bg-blue-50 rounded-2xl p-6 border border-blue-100\">
        <h3 class=\"font-bold text-blue-800 mb-2\">💡 Conseils pour une réponse rapide</h3>
        <ul class=\"text-sm text-blue-700 space-y-2\">
            <li class=\"flex items-start gap-2\">
                <span>•</span>
                <span>Décrivez votre problème de manière claire et précise</span>
            </li>
            <li class=\"flex items-start gap-2\">
                <span>•</span>
                <span>Incluez les messages d'erreur si applicable</span>
            </li>
            <li class=\"flex items-start gap-2\">
                <span>•</span>
                <span>Indiquez les étapes pour reproduire le problème</span>
            </li>
        </ul>
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
        return "front/aide/support_new.html.twig";
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
        return array (  242 => 101,  176 => 38,  166 => 31,  157 => 24,  148 => 21,  145 => 20,  141 => 19,  132 => 13,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/aide/support_new.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\aide\\support_new.html.twig");
    }
}
