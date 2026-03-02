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

/* front/contact_urgence/index.html.twig */
class __TwigTemplate_a6ce4f68887e6acf91c2e79430eeeb92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact_urgence/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact_urgence/index.html.twig"));

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

        yield "Contacts d'Urgence";
        
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
.contact-card {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.contact-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}
.avatar-gradient {
    background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "<div class=\"space-y-8 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"text-3xl font-bold text-gray-800\" style=\"font-family: 'Poppins', sans-serif;\">
                📞 Contacts d'Urgence
            </h1>
            <p class=\"text-gray-500 mt-1\">Gérez vos contacts qui recevront vos alertes d'urgence</p>
        </div>
        <div class=\"text-sm text-gray-500 bg-white px-4 py-2 rounded-xl shadow\">
            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contacts"] ?? null)), "html", null, true);
        yield " contact(s)
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
        <div class=\"lg:col-span-2 space-y-6\">
            ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contacts"] ?? null)) > 0)) {
            // line 39
            yield "            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["contacts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 41
                yield "                <div class=\"contact-card bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                    <div class=\"flex items-start gap-4\">
                        <div class=\"w-14 h-14 avatar-gradient rounded-2xl flex items-center justify-center text-white text-xl font-bold shadow-lg\">
                            ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 44))), "html", null, true);
                yield "
                        </div>
                        <div class=\"flex-1\">
                            <div class=\"flex items-center gap-2\">
                                <h3 class=\"font-bold text-gray-800 text-lg\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 48), "html", null, true);
                yield "</h3>
                                <span class=\"px-2 py-0.5 bg-orange-100 text-orange-700 rounded-full text-xs font-medium\">
                                    ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lien", [], "any", false, false, false, 50), "html", null, true);
                yield "
                                </span>
                            </div>
                            <p class=\"text-gray-500 text-sm mt-1\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 53), "html", null, true);
                yield "</p>
                            ";
                // line 54
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                            <p class=\"text-gray-400 text-sm mt-1\">📧 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 55), "html", null, true);
                    yield "</p>
                            ";
                }
                // line 57
                yield "                        </div>
                    </div>
                    
                    <div class=\"flex gap-2 mt-4 pt-4 border-t border-gray-100\">
                        <a href=\"tel:";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 61), "html", null, true);
                yield "\" 
                           class=\"flex-1 flex items-center justify-center gap-2 py-2 bg-green-100 text-green-700 rounded-xl hover:bg-green-200 transition text-sm font-medium\">
                            📞 Appeler
                        </a>
                        <a href=\"sms:";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 65), "html", null, true);
                yield "\" 
                           class=\"flex-1 flex items-center justify-center gap-2 py-2 bg-blue-100 text-blue-700 rounded-xl hover:bg-blue-200 transition text-sm font-medium\">
                            💬 SMS
                        </a>
                        ";
                // line 69
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 70
                    yield "                        <a href=\"mailto:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 70), "html", null, true);
                    yield "\" 
                           class=\"flex-1 flex items-center justify-center gap-2 py-2 bg-purple-100 text-purple-700 rounded-xl hover:bg-purple-200 transition text-sm font-medium\">
                            📧 Email
                        </a>
                        ";
                }
                // line 75
                yield "                    </div>
                    
                    <div class=\"flex gap-2 mt-3\">
                        <a href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_urgence_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\" 
                           class=\"flex-1 text-center py-2 text-gray-600 hover:text-gray-800 hover:bg-gray-100 rounded-lg transition text-sm\">
                            ✏️ Modifier
                        </a>
                        <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_urgence_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\" 
                           onclick=\"return confirm('Supprimer ce contact ?')\"
                           class=\"flex-1 text-center py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg transition text-sm\">
                            🗑 Supprimer
                        </a>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "            </div>
            ";
        } else {
            // line 92
            yield "            <div class=\"bg-white rounded-2xl p-12 shadow-lg border border-gray-100 text-center\">
                <div class=\"text-6xl mb-4\">📱</div>
                <h3 class=\"text-xl font-bold text-gray-800 mb-2\">Aucun contact enregistré</h3>
                <p class=\"text-gray-500 mb-6\">Ajoutez vos premiers contacts d'urgence pour pouvoir les alerter en cas de besoin.</p>
                <button onclick=\"document.getElementById('addContactForm').classList.toggle('hidden')\"
                        class=\"bg-gradient-to-r from-orange-500 to-rose-500 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition\">
                    ➕ Ajouter un contact
                </button>
            </div>
            ";
        }
        // line 102
        yield "        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\" id=\"addContactForm\">
                <div class=\"flex items-center gap-3 mb-6\">
                    <div class=\"w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-2xl\">
                        ➕
                    </div>
                    <div>
                        <h3 class=\"font-bold text-gray-800\">Ajouter un contact</h3>
                        <p class=\"text-gray-500 text-sm\">Qui prévenir en cas d'urgence ?</p>
                    </div>
                </div>

                ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-4"]]);
        yield "
                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Nom complet</label>
                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition", "placeholder" => "Ex: Ahmed Ben Ali"]]);
        // line 122
        yield "
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Lien / Relation</label>
                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition", "placeholder" => "Ex: Père, Mère, Frère..."]]);
        // line 130
        yield "
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Téléphone</label>
                        ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition", "placeholder" => "Ex: XX XXX XXX"]]);
        // line 138
        yield "
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Email (optionnel)</label>
                        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition", "placeholder" => "Ex: contact@email.com"]]);
        // line 146
        yield "
                    </div>

                    <p id=\"formError\" class=\"hidden text-sm text-red-600 bg-red-50 p-3 rounded-lg\"></p>

                    <button type=\"submit\" class=\"w-full bg-gradient-to-r from-orange-500 to-rose-500 hover:from-orange-600 hover:to-rose-600 text-white py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center justify-center gap-2\">
                        <span>💾</span> Enregistrer le contact
                    </button>
                ";
        // line 154
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>

            <div class=\"bg-gradient-to-br from-orange-50 to-rose-50 rounded-2xl p-6 border border-orange-100\">
                <h3 class=\"font-bold text-orange-800 mb-3 flex items-center gap-2\">
                    <span>💡</span> Conseil
                </h3>
                <p class=\"text-sm text-orange-700\">
                    Ajoutez au moins <strong>2-3 contacts de confiance</strong> qui pourront être alertés en cas d'urgence. 
                    Ils recevront un SMS avec votre position GPS.
                </p>
            </div>

            <div class=\"bg-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                <h3 class=\"font-bold text-gray-800 mb-4\">📊 Répartition</h3>
                <div class=\"space-y-3\">
                    ";
        // line 170
        $context["seen_liens"] = [];
        // line 171
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["contacts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 172
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lien", [], "any", false, false, false, 172) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lien", [], "any", false, false, false, 172), ($context["seen_liens"] ?? null)))) {
                // line 173
                yield "                            ";
                $context["seen_liens"] = Twig\Extension\CoreExtension::merge(($context["seen_liens"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lien", [], "any", false, false, false, 173)]);
                // line 174
                yield "                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-gray-600\">";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lien", [], "any", false, false, false, 175), "html", null, true);
                yield "</span>
                                <span class=\"font-semibold text-gray-800\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["contacts"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "lien", [], "any", false, false, false, 176) == CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lien", [], "any", false, false, false, 176)); })), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 179
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 180
            yield "                        <p class=\"text-gray-400 text-sm text-center\">Aucune donnée</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "                </div>
            </div>

            <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("urgence_index");
        yield "\" 
               class=\"block bg-gradient-to-r from-red-500 to-rose-500 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition group\">
                <div class=\"flex items-center justify-between\">
                    <div>
                        <h3 class=\"font-bold text-lg\">🚨 Déclencher Urgence</h3>
                        <p class=\"text-red-100 text-sm mt-1\">Envoyer votre position GPS</p>
                    </div>
                    <span class=\"text-2xl group-hover:scale-110 transition\">→</span>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const phoneInput = form.querySelector('input[name*=\"telephone\"]');
    const errorDiv = document.getElementById('formError');
    
    form.addEventListener('submit', function(e) {
        const phone = phoneInput.value.replace(/\\s/g, '');
        if (phone && !/^[0-9]{8,15}\$/.test(phone)) {
            e.preventDefault();
            errorDiv.textContent = 'Le numéro de téléphone doit contenir entre 8 et 15 chiffres';
            errorDiv.classList.remove('hidden');
        }
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
        return "front/contact_urgence/index.html.twig";
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
        return array (  401 => 185,  396 => 182,  389 => 180,  384 => 179,  378 => 176,  374 => 175,  371 => 174,  368 => 173,  365 => 172,  359 => 171,  357 => 170,  338 => 154,  328 => 146,  326 => 143,  319 => 138,  317 => 135,  310 => 130,  308 => 127,  301 => 122,  299 => 119,  293 => 116,  277 => 102,  265 => 92,  261 => 90,  247 => 82,  240 => 78,  235 => 75,  226 => 70,  224 => 69,  217 => 65,  210 => 61,  204 => 57,  198 => 55,  196 => 54,  192 => 53,  186 => 50,  181 => 48,  174 => 44,  169 => 41,  165 => 40,  162 => 39,  160 => 38,  151 => 32,  140 => 23,  127 => 22,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/contact_urgence/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\contact_urgence\\index.html.twig");
    }
}
