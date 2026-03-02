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

/* admin/aide/index.html.twig */
class __TwigTemplate_cc7433ccfa1aace0fbaf275b1ef9c245 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/index.html.twig"));

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

        yield "Admin – Centre d'Aide";
        
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
        yield "<div class=\"space-y-8 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <div>
            <h1 class=\"page-title flex items-center gap-3\">
                <span class=\"text-4xl\">🆘</span> Centre d'Aide & Assistance
            </h1>
            <p class=\"text-gray-500 mt-1\">Gestion des urgences, contacts, FAQ et support</p>
        </div>
        <div class=\"text-sm text-gray-500 bg-white px-4 py-2 rounded-lg shadow\">
            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-6\">
        <div class=\"stat-card primary hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Urgences actives</p>
                    <p class=\"stat-value text-red-600\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalUrgences"] ?? null), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">🚨</div>
            </div>
        </div>

        <div class=\"stat-card success hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Contacts</p>
                    <p class=\"stat-value text-blue-600\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalContacts"] ?? null), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">📞</div>
            </div>
        </div>

        <div class=\"stat-card warning hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Lieux médicaux</p>
                    <p class=\"stat-value text-green-600\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalLieux"] ?? null), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">🏥</div>
            </div>
        </div>

        <div class=\"stat-card hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Système</p>
                    <p class=\"stat-value text-lg text-green-600\">Opérationnel</p>
                </div>
                <div class=\"text-3xl text-green-500 animate-pulse\">●</div>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_urgences");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-red-200 transition\">
                        🚨
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-red-600\">Urgences</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer les urgences en temps réel</p>
                    </div>
                </div>
                <div class=\"mt-4 text-red-600 font-semibold text-sm\">
                    Accéder →
                </div>
            </div>
        </a>

        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contacts");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-blue-200 transition\">
                        📞
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-blue-600\">Contacts d'urgence</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer les contacts</p>
                    </div>
                </div>
                <div class=\"mt-4 text-blue-600 font-semibold text-sm\">
                    Accéder →
                </div>
            </div>
        </a>

        <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carte_medicale");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-green-200 transition\">
                        🗺
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-green-600\">Carte médicale</h3>
                        <p class=\"text-gray-500 text-sm\">Lieux médicaux et pharmacies</p>
                    </div>
                </div>
                <div class=\"mt-4 text-green-600 font-semibold text-sm\">
                    Accéder →
                </div>
            </div>
        </a>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-l-4 border-purple-500\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-purple-200 transition\">
                        ❓
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-purple-600\">FAQ / Centre d'aide</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer les questions fréquentes</p>
                    </div>
                </div>
                <div class=\"mt-4 text-purple-600 font-semibold text-sm\">
                    Accéder →
                </div>
            </div>
        </a>

        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-l-4 border-indigo-500\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-indigo-200 transition\">
                        💬
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-indigo-600\">Support Tickets</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer les demandes de support</p>
                    </div>
                </div>
                <div class=\"mt-4 text-indigo-600 font-semibold text-sm\">
                    Accéder →
                </div>
            </div>
        </a>
    </div>

    ";
        // line 155
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["urgencesRecentes"] ?? null)) > 0)) {
            // line 156
            yield "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"font-semibold flex items-center gap-2 text-red-600\">
                <span>🚨</span> Dernières urgences
            </h3>
        </div>
        <div class=\"divide-y\">
            ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["urgencesRecentes"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["urgence"]) {
                // line 164
                yield "            <div class=\"p-4 hover:bg-gray-50 transition\">
                <div class=\"flex justify-between items-center\">
                    <div>
                        <div class=\"font-semibold\">";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "type", [], "any", false, false, false, 167), "html", null, true);
                yield "</div>
                        <div class=\"text-sm text-gray-500\">";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "localisation", [], "any", false, false, false, 168), "html", null, true);
                yield "</div>
                    </div>
                    <div class=\"text-sm text-gray-400\">
                        ";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "dateUrgence", [], "any", false, false, false, 171), "H:i"), "html", null, true);
                yield "
                    </div>
                </div>
            </div>
            ";
                $context['_iterated'] = true;
            }
            // line 175
            if (!$context['_iterated']) {
                // line 176
                yield "            <div class=\"p-4 text-gray-400 text-center\">
                Aucune urgence récente
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['urgence'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            yield "        </div>
    </div>
    ";
        }
        // line 183
        yield "
    <div class=\"card bg-gradient-to-r from-indigo-50 to-purple-50 border-indigo-200\">
        <div class=\"card-body\">
            <div class=\"flex items-center gap-4\">
                <div class=\"text-4xl\">💡</div>
                <div class=\"flex-1\">
                    <h3 class=\"font-semibold text-indigo-800\">Conseil</h3>
                    <p class=\"text-sm text-indigo-600\">
                        Assurez-vous que la FAQ est à jour pour réduire les demandes de support.
                    </p>
                </div>
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
        return "admin/aide/index.html.twig";
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
        return array (  357 => 183,  352 => 180,  343 => 176,  341 => 175,  332 => 171,  326 => 168,  322 => 167,  317 => 164,  312 => 163,  303 => 156,  301 => 155,  280 => 137,  260 => 120,  238 => 101,  218 => 84,  198 => 67,  177 => 49,  164 => 39,  151 => 29,  139 => 20,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\index.html.twig");
    }
}
