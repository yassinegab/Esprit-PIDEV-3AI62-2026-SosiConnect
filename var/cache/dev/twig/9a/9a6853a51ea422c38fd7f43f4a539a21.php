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

/* admin/aide/faq/form.html.twig */
class __TwigTemplate_ff4a324befde0ca90824b4d9e56ef72e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/faq/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/faq/form.html.twig"));

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

        yield (((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " FAQ";
        
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
.form-section {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    border: 1px solid #e5e7eb;
}
.category-option {
    transition: all 0.2s ease;
    cursor: pointer;
}
.category-option:hover {
    transform: scale(1.02);
}
.category-option.selected {
    ring: 2px;
    ring-color: #8b5cf6;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "<div class=\"max-w-4xl mx-auto space-y-6 animate-fadeIn\">
    <div class=\"flex items-center gap-4\">
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq");
        yield "\" 
           class=\"w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-xl flex items-center justify-center text-gray-600 transition\">
            ←
        </a>
        <div>
            <h1 class=\"text-2xl font-bold text-gray-800 flex items-center gap-3\">
                <div class=\"w-10 h-10 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center text-white\">
                    ";
        // line 39
        yield (((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✏️") : ("➕"));
        yield "
                </div>
                ";
        // line 41
        yield (((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la Question") : ("Nouvelle Question"));
        yield "
            </h1>
            <p class=\"text-gray-500 mt-1 ml-13\">";
        // line 43
        yield (((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettez à jour la question et sa réponse") : ("Ajoutez une nouvelle question fréquente"));
        yield "</p>
        </div>
    </div>

    ";
        // line 47
        if ((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "    <div class=\"bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-4 border border-blue-100\">
        <div class=\"flex items-center gap-4\">
            <div class=\"flex items-center gap-6 text-sm\">
                <div class=\"flex items-center gap-2\">
                    <span class=\"text-blue-600\">👁️</span>
                    <span class=\"text-gray-600\"><strong>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "viewCount", [], "any", false, false, false, 53), "html", null, true);
            yield "</strong> vues</span>
                </div>
                <div class=\"flex items-center gap-2\">
                    <span class=\"text-blue-600\">👍</span>
                    <span class=\"text-gray-600\"><strong>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "helpfulCount", [], "any", false, false, false, 57), "html", null, true);
            yield "</strong> utiles</span>
                </div>
                <div class=\"flex items-center gap-2\">
                    <span class=\"text-blue-600\">📅</span>
                    <span class=\"text-gray-600\">Créé le <strong>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "createdAt", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
            yield "</strong></span>
                </div>
            </div>
            <div class=\"ml-auto\">
                ";
            // line 65
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "isPublished", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "                <span class=\"px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold\">✅ Publiée</span>
                ";
            } else {
                // line 68
                yield "                <span class=\"px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm font-semibold\">📝 Brouillon</span>
                ";
            }
            // line 70
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 74
        yield "
    <form method=\"post\" class=\"space-y-6\">
        <div class=\"form-section\">
            <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                <span class=\"text-xl\">❓</span> Question
            </h3>
            <input type=\"text\" name=\"question\" required
                   value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "question", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "question", [], "any", false, false, false, 81), "")) : ("")), "html", null, true);
        yield "\"
                   class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg\"
                   placeholder=\"Ex: Comment puis-je faire un don de sang ?\">
            <p class=\"text-xs text-gray-400 mt-2\">Formulez une question claire et facile à comprendre</p>
        </div>

        <div class=\"form-section\">
            <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                <span class=\"text-xl\">💬</span> Réponse
            </h3>
            <textarea name=\"answer\" required rows=\"8\"
                      class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none\"
                      placeholder=\"Expliquez la réponse en détail...&#10;&#10;Vous pouvez utiliser plusieurs paragraphes pour une meilleure lisibilité.\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "answer", [], "any", true, true, false, 93)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "answer", [], "any", false, false, false, 93), "")) : ("")), "html", null, true);
        yield "</textarea>
            <div class=\"flex items-center justify-between mt-2\">
                <p class=\"text-xs text-gray-400\">Soyez précis et exhaustif</p>
                <span class=\"text-xs text-gray-400\" id=\"charCount\">0 caractères</span>
            </div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <div class=\"form-section\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-xl\">📁</span> Catégorie
                </h3>
                <div class=\"grid grid-cols-2 gap-3\">
                    ";
        // line 106
        $context["categories"] = [["value" => "general", "icon" => "📋", "label" => "Général"], ["value" => "don", "icon" => "🩸", "label" => "Don"], ["value" => "aide", "icon" => "🆘", "label" => "Aide"], ["value" => "urgence", "icon" => "🚨", "label" => "Urgence"], ["value" => "compte", "icon" => "👤", "label" => "Compte"], ["value" => "technique", "icon" => "⚙️", "label" => "Technique"]];
        // line 114
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 115
            yield "                    <label class=\"category-option flex items-center gap-3 p-3 rounded-xl border-2 cursor-pointer
                                 ";
            // line 116
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "category", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "category", [], "any", false, false, false, 116), "general")) : ("general")) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "value", [], "any", false, false, false, 116))) ? ("border-purple-500 bg-purple-50") : ("border-gray-200 hover:border-gray-300"));
            yield "\">
                        <input type=\"radio\" name=\"category\" value=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "value", [], "any", false, false, false, 117), "html", null, true);
            yield "\" 
                               ";
            // line 118
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "category", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "category", [], "any", false, false, false, 118), "general")) : ("general")) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "value", [], "any", false, false, false, 118))) ? ("checked") : (""));
            yield " class=\"hidden\">
                        <span class=\"text-2xl\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "icon", [], "any", false, false, false, 119), "html", null, true);
            yield "</span>
                        <span class=\"font-medium text-gray-700\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "label", [], "any", false, false, false, 120), "html", null, true);
            yield "</span>
                    </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                </div>
            </div>

            <div class=\"form-section\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-xl\">⚙️</span> Paramètres
                </h3>
                <div class=\"space-y-4\">
                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-2\">Ordre d'affichage</label>
                        <input type=\"number\" name=\"displayOrder\"
                               value=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "displayOrder", [], "any", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "displayOrder", [], "any", false, false, false, 134), 0)) : (0)), "html", null, true);
        yield "\"
                               class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500\"
                               min=\"0\" placeholder=\"0\">
                        <p class=\"text-xs text-gray-400 mt-1\">Les nombres plus petits apparaissent en premier</p>
                    </div>

                    <div class=\"p-4 bg-gradient-to-r ";
        // line 140
        yield ((((null === ($context["faq"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "isPublished", [], "any", false, false, false, 140))) ? ("from-green-50 to-emerald-50 border-green-200") : ("from-gray-50 to-gray-100 border-gray-200"));
        yield " rounded-xl border\">
                        <label class=\"flex items-center gap-3 cursor-pointer\">
                            <input type=\"checkbox\" name=\"isPublished\" value=\"1\" id=\"isPublished\"
                                   ";
        // line 143
        if (((null === ($context["faq"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "isPublished", [], "any", false, false, false, 143))) {
            yield "checked";
        }
        // line 144
        yield "                                   class=\"w-5 h-5 text-purple-600 rounded focus:ring-purple-500\">
                            <div>
                                <span class=\"font-medium text-gray-800\">Publier immédiatement</span>
                                <p class=\"text-xs text-gray-500\">La FAQ sera visible par les utilisateurs</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
            <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                <span class=\"text-xl\">👁️</span> Aperçu
            </h3>
            <div class=\"bg-gray-50 rounded-xl p-4\">
                <div class=\"flex items-center gap-2 mb-2\">
                    <span class=\"text-purple-600\">❓</span>
                    <span class=\"font-medium text-gray-800\" id=\"previewQuestion\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "question", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "question", [], "any", false, false, false, 162), "Votre question apparaîtra ici...")) : ("Votre question apparaîtra ici...")), "html", null, true);
        yield "</span>
                </div>
                <p class=\"text-gray-600 text-sm pl-6\" id=\"previewAnswer\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(((CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "answer", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["faq"] ?? null), "answer", [], "any", false, false, false, 164), "Votre réponse apparaîtra ici...")) : ("Votre réponse apparaîtra ici..."))), 0, 150), "html", null, true);
        yield "...</p>
            </div>
        </div>

        <div class=\"flex justify-between items-center pt-4\">
            <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq");
        yield "\" 
               class=\"px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl font-semibold transition flex items-center gap-2\">
                ← Annuler
            </a>
            <button type=\"submit\" 
                    class=\"px-8 py-3 bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center gap-2\">
                <span class=\"text-xl\">";
        // line 175
        yield (((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✏️") : ("➕"));
        yield "</span>
                ";
        // line 176
        yield (((($tmp = ($context["faq"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour la FAQ") : ("Créer la FAQ"));
        yield "
            </button>
        </div>
    </form>
</div>

<script>
document.querySelector('input[name=\"question\"]').addEventListener('input', function(e) {
    document.getElementById('previewQuestion').textContent = e.target.value || 'Votre question apparaîtra ici...';
});

document.querySelector('textarea[name=\"answer\"]').addEventListener('input', function(e) {
    const text = e.target.value.replace(/<[^>]*>/g, '');
    document.getElementById('previewAnswer').textContent = (text.slice(0, 150) || 'Votre réponse apparaîtra ici...') + (text.length > 150 ? '...' : '');
    document.getElementById('charCount').textContent = text.length + ' caractères';
});

document.querySelectorAll('.category-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.category-option').forEach(o => {
            o.classList.remove('border-purple-500', 'bg-purple-50');
            o.classList.add('border-gray-200');
        });
        this.classList.remove('border-gray-200');
        this.classList.add('border-purple-500', 'bg-purple-50');
    });
});
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
        return "admin/aide/faq/form.html.twig";
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
        return array (  378 => 176,  374 => 175,  365 => 169,  357 => 164,  352 => 162,  332 => 144,  328 => 143,  322 => 140,  313 => 134,  300 => 123,  291 => 120,  287 => 119,  283 => 118,  279 => 117,  275 => 116,  272 => 115,  267 => 114,  265 => 106,  249 => 93,  234 => 81,  225 => 74,  219 => 70,  215 => 68,  211 => 66,  209 => 65,  202 => 61,  195 => 57,  188 => 53,  181 => 48,  179 => 47,  172 => 43,  167 => 41,  162 => 39,  152 => 32,  148 => 30,  135 => 29,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/faq/form.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\faq\\form.html.twig");
    }
}
