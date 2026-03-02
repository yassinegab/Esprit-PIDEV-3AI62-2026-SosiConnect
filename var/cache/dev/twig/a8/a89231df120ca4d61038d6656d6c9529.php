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

/* admin/aide/tutorials/form.html.twig */
class __TwigTemplate_3f791723c65e35ecd22a0390825abf75 extends Template
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
        return "layout/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/tutorials/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/tutorials/form.html.twig"));

        $this->parent = $this->load("layout/dashboard.html.twig", 1);
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

        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouveau"));
        yield " Tutoriel";
        
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
        yield "<div class=\"max-w-3xl mx-auto space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorials");
        yield "\" class=\"text-gray-500 hover:text-gray-700 transition\">
            ← Retour
        </a>
        <h1 class=\"text-2xl font-bold text-gray-800\">";
        // line 16
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier le tutoriel") : ("Nouveau tutoriel"));
        yield "</h1>
    </div>

    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-8\">
        <form method=\"post\" class=\"space-y-6\">
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">Titre *</label>
                <input type=\"text\" name=\"title\" value=\"";
        // line 23
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true)) : (""));
        yield "\" required
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                       placeholder=\"Ex: Comment donner son sang\">
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">Description *</label>
                <textarea name=\"description\" rows=\"4\" required
                          class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                          placeholder=\"Description du tutoriel...\">";
        // line 32
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "description", [], "any", false, false, false, 32), "html", null, true)) : (""));
        yield "</textarea>
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-2\">URL de la vidéo *</label>
                <input type=\"url\" name=\"video_url\" value=\"";
        // line 37
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "videoUrl", [], "any", false, false, false, 37), "html", null, true)) : (""));
        yield "\" required
                       class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent\"
                       placeholder=\"https://www.youtube.com/watch?v=...\">
                <p class=\"text-xs text-gray-500 mt-1\">YouTube, Vimeo ou autre plateforme vidéo</p>
            </div>

            <div class=\"grid grid-cols-2 gap-6\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Catégorie</label>
                    <select name=\"category\" class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500\">
                        <option value=\"general\" ";
        // line 47
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 47) == "general"))) ? ("selected") : (""));
        yield ">Général</option>
                        <option value=\"don-sang\" ";
        // line 48
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 48) == "don-sang"))) ? ("selected") : (""));
        yield ">Don de sang</option>
                        <option value=\"don-organe\" ";
        // line 49
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 49) == "don-organe"))) ? ("selected") : (""));
        yield ">Don d'organe</option>
                        <option value=\"carte\" ";
        // line 50
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 50) == "carte"))) ? ("selected") : (""));
        yield ">Carte médicale</option>
                        <option value=\"urgence\" ";
        // line 51
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 51) == "urgence"))) ? ("selected") : (""));
        yield ">Urgence</option>
                        <option value=\"support\" ";
        // line 52
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 52) == "support"))) ? ("selected") : (""));
        yield ">Support</option>
                        <option value=\"compte\" ";
        // line 53
        yield (((($context["tutorial"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "category", [], "any", false, false, false, 53) == "compte"))) ? ("selected") : (""));
        yield ">Compte</option>
                    </select>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Durée (secondes)</label>
                    <input type=\"number\" name=\"duration\" value=\"";
        // line 59
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "duration", [], "any", false, false, false, 59), "html", null, true)) : (0));
        yield "\" min=\"0\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500\"
                           placeholder=\"300 pour 5 minutes\">
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-6\">
                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Ordre d'affichage</label>
                    <input type=\"number\" name=\"display_order\" value=\"";
        // line 68
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "displayOrder", [], "any", false, false, false, 68), "html", null, true)) : (0));
        yield "\" min=\"0\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500\"
                           placeholder=\"0 = premier\">
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Statut</label>
                    <label class=\"flex items-center gap-3 mt-3 cursor-pointer\">
                        <input type=\"checkbox\" name=\"is_published\" value=\"1\" ";
        // line 76
        yield ((( !($context["tutorial"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "isPublished", [], "any", false, false, false, 76))) ? ("checked") : (""));
        yield "
                               class=\"w-5 h-5 text-blue-600 rounded\">
                        <span class=\"text-gray-700\">Publier immédiatement</span>
                    </label>
                </div>
            </div>

            <div class=\"flex justify-end gap-4 pt-4 border-t border-gray-100\">
                <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorials");
        yield "\" class=\"px-6 py-3 border border-gray-200 rounded-xl text-gray-700 hover:bg-gray-50 transition\">
                    Annuler
                </a>
                <button type=\"submit\" class=\"px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition\">
                    ";
        // line 88
        yield (((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer le tutoriel"));
        yield "
                </button>
            </div>
        </form>
    </div>

    ";
        // line 94
        if ((($tmp = ($context["tutorial"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "    <div class=\"bg-gray-50 rounded-2xl p-6 border border-gray-200\">
        <h3 class=\"font-semibold text-gray-800 mb-3\">📊 Statistiques</h3>
        <div class=\"grid grid-cols-3 gap-4\">
            <div class=\"text-center\">
                <div class=\"text-2xl font-bold text-gray-800\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "viewCount", [], "any", false, false, false, 99), "html", null, true);
            yield "</div>
                <div class=\"text-sm text-gray-500\">Vues</div>
            </div>
            <div class=\"text-center\">
                <div class=\"text-2xl font-bold text-gray-800\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "likeCount", [], "any", false, false, false, 103), "html", null, true);
            yield "</div>
                <div class=\"text-sm text-gray-500\">Likes</div>
            </div>
            <div class=\"text-center\">
                <div class=\"text-2xl font-bold text-gray-800\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["tutorial"] ?? null), "createdAt", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
            yield "</div>
                <div class=\"text-sm text-gray-500\">Créé le</div>
            </div>
        </div>
    </div>
    ";
        }
        // line 113
        yield "</div>
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
        return "admin/aide/tutorials/form.html.twig";
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
        return array (  296 => 113,  287 => 107,  280 => 103,  273 => 99,  267 => 95,  265 => 94,  256 => 88,  249 => 84,  238 => 76,  227 => 68,  215 => 59,  206 => 53,  202 => 52,  198 => 51,  194 => 50,  190 => 49,  186 => 48,  182 => 47,  169 => 37,  161 => 32,  149 => 23,  139 => 16,  133 => 13,  129 => 11,  116 => 10,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/tutorials/form.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\tutorials\\form.html.twig");
    }
}
