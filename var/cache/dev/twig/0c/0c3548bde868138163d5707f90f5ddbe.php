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

/* dashboard/in.html.twig */
class __TwigTemplate_c4efa2a75c4bb32dba5092da4b8b0acb extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/in.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/in.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Tableau de bord - SmartHealth AI";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"flex min-h-screen bg-gray-50\">

    ";
        // line 9
        yield "    ";
        yield from $this->load("components/sidebar.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
    <div class=\"flex flex-1 flex-col lg:ml-72\">

        ";
        // line 14
        yield "        ";
        yield from $this->load("components/top-nav.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
        <main class=\"flex-1 overflow-auto\">
            <div class=\"mx-auto max-w-7xl space-y-6 p-4 lg:p-8\">

                ";
        // line 20
        yield "                <div class=\"flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between\">
                    <div>
                        <h1 class=\"text-3xl font-bold text-gray-900\">
                            Bonjour, ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 23), "html", null, true);
        yield " ! 👋
                        </h1>
                        <p class=\"text-gray-600 mt-1\">
                            Voici un aperçu de votre santé aujourd'hui
                        </p>
                    </div>

                    <div class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-xl border border-gray-200 shadow-sm\">
                        <i class=\"fas fa-calendar text-blue-600\"></i>
                        <span class=\"text-sm font-medium text-gray-700\">
                            ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "l d F Y"), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>

                ";
        // line 39
        yield "                ";
        yield from $this->load("components/stat-cards.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "
                ";
        // line 42
        yield "                <div class=\"bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border-2 border-blue-200 p-6 lg:p-8 shadow-sm\">
                    <div class=\"flex items-center justify-between mb-6\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center\">
                                <i class=\"fas fa-robot text-white text-xl\"></i>
                            </div>
                            <div>
                                <h2 class=\"text-2xl font-bold text-gray-900\">AI Medical Analyzer</h2>
                                <p class=\"text-sm text-gray-600\">Intelligence artificielle médicale</p>
                            </div>
                        </div>
                        <span class=\"px-3 py-1 bg-blue-600 text-white text-xs font-bold rounded-full uppercase tracking-wide\">
                            IA Avancée
                        </span>
                    </div>

                    ";
        // line 59
        yield "                    <div class=\"bg-white rounded-xl p-6 shadow-sm mb-4\">
                        <div class=\"mb-6\">
                            <div class=\"flex justify-between items-center mb-3\">
                                <h3 class=\"text-lg font-semibold text-gray-900\">Gravité estimée</h3>
                                <span class=\"text-3xl font-bold text-orange-600\">82%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-3\">
                                <div class=\"bg-gradient-to-r from-orange-500 to-red-600 h-3 rounded-full transition-all duration-1000\" style=\"width: 82%\"></div>
                            </div>
                            <p class=\"text-sm text-gray-500 mt-2\">Analyse basée sur votre dossier médical</p>
                        </div>

                        ";
        // line 72
        yield "                        <div class=\"bg-gradient-to-r from-orange-50 to-red-50 border-l-4 border-orange-500 rounded-lg p-5\">
                            <div class=\"flex items-center gap-3 mb-3\">
                                <span class=\"text-2xl\">⚠️</span>
                                <h4 class=\"text-lg font-bold text-gray-900\">Décision AI : Priorité élevée</h4>
                            </div>
                            <p class=\"font-semibold text-gray-800 mb-3\">Consultation recommandée sous 24h</p>
                            <ul class=\"space-y-2\">
                                <li class=\"flex items-center gap-2 text-sm text-gray-700\">
                                    <span class=\"text-red-600\">•</span> Inflammation élevée détectée
                                </li>
                                <li class=\"flex items-center gap-2 text-sm text-gray-700\">
                                    <span class=\"text-red-600\">•</span> Surface étendue affectée
                                </li>
                                <li class=\"flex items-center gap-2 text-sm text-gray-700\">
                                    <span class=\"text-red-600\">•</span> Risque infectieux présent
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                ";
        // line 94
        yield "                <div class=\"grid gap-6 lg:grid-cols-2 xl:grid-cols-3\">
                    ";
        // line 95
        yield from $this->load("components/widgets/health-summary.html.twig", 95)->unwrap()->yield($context);
        // line 96
        yield "                    ";
        yield from $this->load("components/widgets/mental.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "                    ";
        yield from $this->load("components/widgets/activity.html.twig", 97)->unwrap()->yield($context);
        // line 98
        yield "                </div>

                <div class=\"grid gap-6 lg:grid-cols-2\">
                    ";
        // line 101
        yield from $this->load("components/widgets/nutrition.html.twig", 101)->unwrap()->yield($context);
        // line 102
        yield "                    ";
        yield from $this->load("components/widgets/cycle.html.twig", 102)->unwrap()->yield($context);
        // line 103
        yield "                </div>

                ";
        // line 106
        yield "                <div class=\"bg-white rounded-2xl border border-gray-200 shadow-sm p-6 lg:p-8\">
                    <div class=\"text-center mb-8\">
                        <h2 class=\"text-2xl font-bold text-gray-900 mb-2\">
                            <i class=\"fas fa-route text-blue-600 mr-2\"></i>
                            Parcours intelligent d'accès aux soins
                        </h2>
                        <p class=\"text-gray-600\">Le système adapte les options selon l'analyse médicale</p>
                    </div>

                    <div class=\"grid gap-8 md:grid-cols-3 mb-8\">
                        ";
        // line 117
        yield "                        <div>
                            <div class=\"w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-xl font-bold mb-4 shadow-lg\">
                                1
                            </div>
                            <h3 class=\"text-lg font-semibold text-gray-900 mb-2\">Dossier médical</h3>
                            <p class=\"text-sm text-gray-600 mb-4\">Importez vos documents pour une analyse IA</p>
                            
                            <div class=\"border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-500 hover:bg-blue-50 transition-all cursor-pointer\">
                                <i class=\"fas fa-cloud-upload-alt text-4xl text-blue-600 mb-3\"></i>
                                <p class=\"text-sm font-medium text-gray-700\">Cliquez pour importer</p>
                                <p class=\"text-xs text-gray-500 mt-1\">Images, PDF, documents</p>
                            </div>
                        </div>

                        ";
        // line 132
        yield "                        <div>
                            <div class=\"w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-xl font-bold mb-4 shadow-lg\">
                                2
                            </div>
                            <h3 class=\"text-lg font-semibold text-gray-900 mb-2\">Mode de consultation</h3>
                            <p class=\"text-sm text-gray-600 mb-4\">Choisissez le mode adapté</p>
                            
                            <div class=\"space-y-3\">
                                <div class=\"border-2 border-blue-500 bg-blue-50 rounded-xl p-4 cursor-pointer\">
                                    <div class=\"flex items-center justify-between mb-2\">
                                        <span class=\"text-2xl\">🏥</span>
                                        <span class=\"text-xs bg-green-500 text-white px-2 py-1 rounded-full font-semibold\">RECOMMANDÉ</span>
                                    </div>
                                    <p class=\"font-semibold text-gray-900 text-sm\">Présentiel</p>
                                    <p class=\"text-xs text-gray-600\">Pour cas complexes</p>
                                </div>
                                
                                <div class=\"border-2 border-gray-200 rounded-xl p-4 cursor-pointer hover:border-blue-300\">
                                    <span class=\"text-2xl mb-2 block\">💻</span>
                                    <p class=\"font-semibold text-gray-900 text-sm\">Téléconsultation</p>
                                    <p class=\"text-xs text-gray-600\">Pour cas stables</p>
                                </div>
                            </div>
                        </div>

                        ";
        // line 158
        yield "                        <div>
                            <div class=\"w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-xl font-bold mb-4 shadow-lg\">
                                3
                            </div>
                            <h3 class=\"text-lg font-semibold text-gray-900 mb-2\">Réservation intelligente</h3>
                            <p class=\"text-sm text-gray-600 mb-4\">Priorisation automatique selon l'urgence</p>
                            
                            <div class=\"bg-blue-50 border border-blue-200 rounded-xl p-4\">
                                <div class=\"flex items-center gap-2 mb-2\">
                                    <i class=\"fas fa-clock text-blue-600\"></i>
                                    <p class=\"font-semibold text-gray-900 text-sm\">Créneaux prioritaires</p>
                                </div>
                                <p class=\"text-xs text-gray-600\">Consultation possible dès demain matin</p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 176
        yield "                    <div class=\"text-center pt-6 border-t border-gray-200\">
                        <div class=\"flex flex-col sm:flex-row items-center justify-center gap-3 mb-4\">
                            <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontoffice_rendez_vous_new");
        yield "\" 
                               class=\"inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl\">
                                <i class=\"fas fa-calendar-plus mr-2\"></i>
                                Confirmer la réservation
                            </a>
                            <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontoffice_hopitaux");
        yield "\" 
                               class=\"inline-flex items-center px-6 py-3 bg-white text-blue-600 font-semibold rounded-xl border-2 border-blue-600 hover:bg-blue-50 transition-all\">
                                <i class=\"fas fa-search mr-2\"></i>
                                Explorer les hôpitaux
                            </a>
                        </div>
                        
                        <div class=\"flex items-center justify-center gap-2 text-sm text-gray-500\">
                            <i class=\"fas fa-info-circle\"></i>
                            <span>Aide à la décision – ne remplace pas un professionnel de santé</span>
                        </div>
                    </div>
                </div>

                ";
        // line 198
        yield "                <div class=\"bg-white rounded-xl border border-gray-200 shadow-sm p-6\">
                    <div class=\"mb-4\">
                        <h2 class=\"text-lg font-semibold text-gray-900\">Actions rapides</h2>
                    </div>

                    <div class=\"grid gap-4 sm:grid-cols-2 lg:grid-cols-4\">
                        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["quickActions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 205
            yield "                            <button class=\"flex items-center gap-3 p-4 border border-gray-200 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all\">
                                <span class=\"text-2xl\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "emoji", [], "any", false, false, false, 206), "html", null, true);
            yield "</span>
                                <span class=\"text-sm font-medium text-gray-700\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 207), "html", null, true);
            yield "</span>
                            </button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "                    </div>
                </div>

            </div>
        </main>

        ";
        // line 217
        yield "        <footer class=\"border-t border-gray-200 bg-white mt-8 lg:ml-0\">
            <div class=\"max-w-7xl mx-auto px-4 lg:px-8 py-6\">
                <div class=\"flex flex-col sm:flex-row items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2 text-orange-600\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <span class=\"text-sm font-medium\">SmartHealth AI est un système d'aide à la décision. Ne remplace pas un professionnel de santé.</span>
                    </div>
                    <div class=\"text-sm text-gray-500\">
                        © 2024 SmartHealth AI. Tous droits réservés.
                    </div>
                </div>
            </div>
        </footer>

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
        return "dashboard/in.html.twig";
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
        return array (  372 => 217,  364 => 210,  355 => 207,  351 => 206,  348 => 205,  344 => 204,  336 => 198,  319 => 183,  311 => 178,  307 => 176,  288 => 158,  261 => 132,  245 => 117,  233 => 106,  229 => 103,  226 => 102,  224 => 101,  219 => 98,  216 => 97,  213 => 96,  211 => 95,  208 => 94,  185 => 72,  171 => 59,  153 => 42,  150 => 40,  147 => 39,  139 => 33,  126 => 23,  121 => 20,  115 => 15,  112 => 14,  107 => 10,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/in.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\dashboard\\in.html.twig");
    }
}
