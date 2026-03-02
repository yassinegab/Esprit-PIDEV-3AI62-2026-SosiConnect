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

/* admin/aide/tutorials/index.html.twig */
class __TwigTemplate_2d23f98d4dd582b82cad0c9d7791dbca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/tutorials/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/tutorials/index.html.twig"));

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

        yield "Gestion des Tutoriels";
        
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
.video-thumbnail {
    width: 120px;
    height: 68px;
    object-fit: cover;
    border-radius: 8px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800\">🎬 Gestion des Tutoriels</h1>
            <p class=\"text-gray-500 mt-1\">Gérez les vidéos tutoriels pour vos utilisateurs</p>
        </div>
        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorial_new");
        yield "\" class=\"px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition flex items-center gap-2\">
            ➕ Nouveau tutoriel
        </a>
    </div>

    <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"w-full\">
                <thead class=\"bg-gray-50 border-b border-gray-100\">
                    <tr>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Aperçu</th>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Titre</th>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Catégorie</th>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Durée</th>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Stats</th>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Statut</th>
                        <th class=\"text-left px-6 py-4 font-semibold text-gray-700\">Ordre</th>
                        <th class=\"text-right px-6 py-4 font-semibold text-gray-700\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-100\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tutorials"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
            // line 47
            yield "                    <tr class=\"hover:bg-gray-50 transition\">
                        <td class=\"px-6 py-4\">
                            <img src=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "thumbnailUrl", [], "any", false, false, false, 49), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, false, 49), "html", null, true);
            yield "\" class=\"video-thumbnail\" onerror=\"this.src='/images/video-placeholder.jpg'\">
                        </td>
                        <td class=\"px-6 py-4\">
                            <p class=\"font-medium text-gray-800\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                            <p class=\"text-sm text-gray-500 truncate max-w-xs\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "description", [], "any", false, false, false, 53), "html", null, true);
            yield "</p>
                        </td>
                        <td class=\"px-6 py-4\">
                            <span class=\"px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium\">
                                ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 57), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-6 py-4 text-gray-600\">
                            ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "durationFormatted", [], "any", false, false, false, 61), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-6 py-4 text-sm text-gray-500\">
                            <div>👁 ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "viewCount", [], "any", false, false, false, 64), "html", null, true);
            yield " vues</div>
                            <div>👍 ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "likeCount", [], "any", false, false, false, 65), "html", null, true);
            yield " likes</div>
                        </td>
                        <td class=\"px-6 py-4\">
                            ";
            // line 68
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "isPublished", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "                            <span class=\"px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium\">Publié</span>
                            ";
            } else {
                // line 71
                yield "                            <span class=\"px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium\">Brouillon</span>
                            ";
            }
            // line 73
            yield "                        </td>
                        <td class=\"px-6 py-4 text-gray-600\">
                            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "displayOrder", [], "any", false, false, false, 75), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-6 py-4\">
                            <div class=\"flex justify-end gap-2\">
                                <form method=\"post\" action=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorial_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"p-2 ";
            // line 80
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "isPublished", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-yellow-600 hover:bg-yellow-50";
            } else {
                yield "text-green-600 hover:bg-green-50";
            }
            yield " rounded-lg transition\" title=\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "isPublished", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Dépublier";
            } else {
                yield "Publier";
            }
            yield "\">
                                        ";
            // line 81
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "isPublished", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "🔓";
            } else {
                yield "🔒";
            }
            // line 82
            yield "                                    </button>
                                </form>
                                <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorial_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition\" title=\"Modifier\">
                                    ✏️
                                </a>
                                <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide_tutorial_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" target=\"_blank\" class=\"p-2 text-purple-600 hover:bg-purple-50 rounded-lg transition\" title=\"Voir\">
                                    👁️
                                </a>
                                <form method=\"post\" action=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorial_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce tutoriel ?')\">
                                    <button type=\"submit\" class=\"p-2 text-red-600 hover:bg-red-50 rounded-lg transition\" title=\"Supprimer\">
                                        🗑️
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 98
        if (!$context['_iterated']) {
            // line 99
            yield "                    <tr>
                        <td colspan=\"8\" class=\"px-6 py-12 text-center text-gray-400\">
                            <div class=\"text-4xl mb-2\">🎬</div>
                            <p>Aucun tutoriel pour le moment</p>
                            <a href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tutorial_new");
            yield "\" class=\"text-blue-600 hover:text-blue-700\">Créer le premier tutoriel</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tutorial'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
        <h3 class=\"font-bold text-gray-800 mb-4\">📁 Catégories disponibles</h3>
        <div class=\"flex flex-wrap gap-2\">
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 116
            yield "            <span class=\"px-4 py-2 bg-gray-100 rounded-lg text-gray-700\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "</span>
            ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "            <span class=\"text-gray-400\">Aucune catégorie</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "        </div>
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
        return "admin/aide/tutorials/index.html.twig";
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
        return array (  342 => 120,  335 => 118,  333 => 117,  326 => 116,  321 => 115,  311 => 107,  301 => 103,  295 => 99,  293 => 98,  280 => 90,  274 => 87,  268 => 84,  264 => 82,  258 => 81,  244 => 80,  240 => 79,  233 => 75,  229 => 73,  225 => 71,  221 => 69,  219 => 68,  213 => 65,  209 => 64,  203 => 61,  196 => 57,  189 => 53,  185 => 52,  177 => 49,  173 => 47,  168 => 46,  144 => 25,  136 => 19,  123 => 18,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/tutorials/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\tutorials\\index.html.twig");
    }
}
