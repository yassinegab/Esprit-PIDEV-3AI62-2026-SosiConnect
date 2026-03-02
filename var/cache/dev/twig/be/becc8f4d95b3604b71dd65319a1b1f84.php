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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_a66d964e0b461153f14eefbfe6efa143 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Dashboard Administrateur - SmartHealth AI";
        
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
        yield "<div class=\"flex min-h-screen bg-gray-50\" x-data=\"{ sidebarOpen: false }\">
    
    ";
        // line 9
        yield "    ";
        yield from $this->load("admin/components/sidebar.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "    
    <div class=\"flex flex-1 flex-col lg:ml-64\">
        
        ";
        // line 14
        yield "        ";
        yield from $this->load("admin/components/top-nav.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "        
        <main class=\"flex-1 overflow-auto p-6\">
            <div class=\"mx-auto max-w-7xl space-y-6\">
                ";
        // line 19
        yield "                <div class=\"grid gap-4 sm:grid-cols-2 lg:grid-cols-4 animate-fadeIn\" style=\"animation-delay: 0.1s;\">
                    ";
        // line 21
        yield "                    
                    
                </div>
                
                ";
        // line 26
        yield "                <div class=\"grid gap-6 lg:grid-cols-2 animate-fadeIn\" style=\"animation-delay: 0.2s;\">
                    
                    ";
        // line 29
        yield "                    <div class=\"rounded-xl border border-gray-200 bg-white p-6 shadow-sm\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <i class=\"fas fa-bell text-blue-600 mr-2\"></i>
                            Activité récente
                        </h3>
                        <div class=\"space-y-4\">
                            <div class=\"flex items-start gap-3 pb-3 border-b border-gray-100\">
                                <div class=\"flex-shrink-0 mt-1\">
                                    <div class=\"h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center\">
                                        <i class=\"fas fa-user-plus text-blue-600 text-sm\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-1 min-w-0\">
                                    <p class=\"text-sm font-medium text-gray-900\">Nouvel utilisateur inscrit</p>
                                    <p class=\"text-xs text-gray-600 mt-1\">Marie Dupont a créé un compte</p>
                                    <p class=\"text-xs text-gray-400 mt-1\">Il y a 5 minutes</p>
                                </div>
                            </div>
                            
                            <div class=\"flex items-start gap-3 pb-3 border-b border-gray-100\">
                                <div class=\"flex-shrink-0 mt-1\">
                                    <div class=\"h-8 w-8 rounded-full bg-orange-100 flex items-center justify-center\">
                                        <i class=\"fas fa-calendar text-orange-600 text-sm\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-1 min-w-0\">
                                    <p class=\"text-sm font-medium text-gray-900\">Rendez-vous confirmé</p>
                                    <p class=\"text-xs text-gray-600 mt-1\">Dr. Martin - Consultation cardiologie</p>
                                    <p class=\"text-xs text-gray-400 mt-1\">Il y a 12 minutes</p>
                                </div>
                            </div>
                            
                            <div class=\"flex items-start gap-3 pb-3 border-b border-gray-100\">
                                <div class=\"flex-shrink-0 mt-1\">
                                    <div class=\"h-8 w-8 rounded-full bg-green-100 flex items-center justify-center\">
                                        <i class=\"fas fa-heartbeat text-green-600 text-sm\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-1 min-w-0\">
                                    <p class=\"text-sm font-medium text-gray-900\">Suivi cycle complété</p>
                                    <p class=\"text-xs text-gray-600 mt-1\">Sophie L. a mis à jour son cycle</p>
                                    <p class=\"text-xs text-gray-400 mt-1\">Il y a 23 minutes</p>
                                </div>
                            </div>
                            
                            <div class=\"flex items-start gap-3\">
                                <div class=\"flex-shrink-0 mt-1\">
                                    <div class=\"h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center\">
                                        <i class=\"fas fa-hand-holding-heart text-purple-600 text-sm\"></i>
                                    </div>
                                </div>
                                <div class=\"flex-1 min-w-0\">
                                    <p class=\"text-sm font-medium text-gray-900\">Nouveau don enregistré</p>
                                    <p class=\"text-xs text-gray-600 mt-1\">Don de sang - Groupe O+</p>
                                    <p class=\"text-xs text-gray-400 mt-1\">Il y a 1 heure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 90
        yield "                    <div class=\"rounded-xl border border-gray-200 bg-white p-6 shadow-sm\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <i class=\"fas fa-chart-line text-green-600 mr-2\"></i>
                            Statistiques du jour
                        </h3>
                        <div class=\"space-y-4\">
                            <div class=\"flex items-center justify-between p-4 rounded-lg bg-blue-50\">
                                <div class=\"flex items-center gap-3\">
                                    <i class=\"fas fa-users text-blue-600 text-xl\"></i>
                                    <span class=\"text-sm font-medium text-gray-900\">Nouvelles inscriptions</span>
                                </div>
                                <span class=\"text-2xl font-bold text-blue-600\">47</span>
                            </div>
                            
                            <div class=\"flex items-center justify-between p-4 rounded-lg bg-orange-50\">
                                <div class=\"flex items-center gap-3\">
                                    <i class=\"fas fa-calendar-check text-orange-600 text-xl\"></i>
                                    <span class=\"text-sm font-medium text-gray-900\">RDV confirmés</span>
                                </div>
                                <span class=\"text-2xl font-bold text-orange-600\">24</span>
                            </div>
                            
                            <div class=\"flex items-center justify-between p-4 rounded-lg bg-green-50\">
                                <div class=\"flex items-center gap-3\">
                                    <i class=\"fas fa-spa text-green-600 text-xl\"></i>
                                    <span class=\"text-sm font-medium text-gray-900\">Rappels bien-être</span>
                                </div>
                                <span class=\"text-2xl font-bold text-green-600\">156</span>
                            </div>
                            
                            <div class=\"flex items-center justify-between p-4 rounded-lg bg-pink-50\">
                                <div class=\"flex items-center gap-3\">
                                    <i class=\"fas fa-venus text-pink-600 text-xl\"></i>
                                    <span class=\"text-sm font-medium text-gray-900\">Suivis cycle actifs</span>
                                </div>
                                <span class=\"text-2xl font-bold text-pink-600\">89</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                ";
        // line 133
        yield "                <div class=\"grid gap-6 lg:grid-cols-3 animate-fadeIn\" style=\"animation-delay: 0.3s;\">
                    
                    ";
        // line 136
        yield "                    <div class=\"rounded-xl border border-gray-200 bg-white p-6 shadow-sm\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <i class=\"fas fa-fire text-red-600 mr-2\"></i>
                            Modules les plus utilisés
                        </h3>
                        <div class=\"space-y-3\">
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Services Médicaux</span>
                                <div class=\"flex items-center gap-2\">
                                    <div class=\"h-2 w-24 bg-gray-200 rounded-full overflow-hidden\">
                                        <div class=\"h-full bg-blue-600 rounded-full\" style=\"width: 92%\"></div>
                                    </div>
                                    <span class=\"text-xs font-medium text-gray-900\">92%</span>
                                </div>
                            </div>
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Bien-être</span>
                                <div class=\"flex items-center gap-2\">
                                    <div class=\"h-2 w-24 bg-gray-200 rounded-full overflow-hidden\">
                                        <div class=\"h-full bg-green-600 rounded-full\" style=\"width: 85%\"></div>
                                    </div>
                                    <span class=\"text-xs font-medium text-gray-900\">85%</span>
                                </div>
                            </div>
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Cycle Menstruel</span>
                                <div class=\"flex items-center gap-2\">
                                    <div class=\"h-2 w-24 bg-gray-200 rounded-full overflow-hidden\">
                                        <div class=\"h-full bg-pink-600 rounded-full\" style=\"width: 78%\"></div>
                                    </div>
                                    <span class=\"text-xs font-medium text-gray-900\">78%</span>
                                </div>
                            </div>
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Aide/Don</span>
                                <div class=\"flex items-center gap-2\">
                                    <div class=\"h-2 w-24 bg-gray-200 rounded-full overflow-hidden\">
                                        <div class=\"h-full bg-purple-600 rounded-full\" style=\"width: 65%\"></div>
                                    </div>
                                    <span class=\"text-xs font-medium text-gray-900\">65%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 182
        yield "                    <div class=\"rounded-xl border border-gray-200 bg-white p-6 shadow-sm\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <i class=\"fas fa-server text-green-600 mr-2\"></i>
                            État du système
                        </h3>
                        <div class=\"space-y-4\">
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Base de données</span>
                                <span class=\"inline-flex items-center gap-1 text-xs font-medium text-green-700 bg-green-100 px-2 py-1 rounded-full\">
                                    <i class=\"fas fa-check-circle\"></i> En ligne
                                </span>
                            </div>
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">API Services</span>
                                <span class=\"inline-flex items-center gap-1 text-xs font-medium text-green-700 bg-green-100 px-2 py-1 rounded-full\">
                                    <i class=\"fas fa-check-circle\"></i> Opérationnel
                                </span>
                            </div>
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Sauvegardes</span>
                                <span class=\"inline-flex items-center gap-1 text-xs font-medium text-blue-700 bg-blue-100 px-2 py-1 rounded-full\">
                                    <i class=\"fas fa-clock\"></i> 2h ago
                                </span>
                            </div>
                            <div class=\"flex items-center justify-between\">
                                <span class=\"text-sm text-gray-700\">Performance</span>
                                <span class=\"inline-flex items-center gap-1 text-xs font-medium text-green-700 bg-green-100 px-2 py-1 rounded-full\">
                                    <i class=\"fas fa-check-circle\"></i> Excellent
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 216
        yield "                    <div class=\"rounded-xl border border-gray-200 bg-white p-6 shadow-sm\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <i class=\"fas fa-bolt text-yellow-600 mr-2\"></i>
                            Actions rapides
                        </h3>
                        <div class=\"space-y-2\">
                            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["quickActions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 223
            yield "                                <button class=\"group w-full flex items-center gap-3 rounded-lg border border-gray-200 bg-gradient-to-r from-gray-50 to-white p-3 text-left hover:from-blue-50 hover:to-blue-100 hover:border-blue-300 transition-all\">
                                    <span class=\"text-xl\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "emoji", [], "any", false, false, false, 224), "html", null, true);
            yield "</span>
                                    <span class=\"text-sm font-medium text-gray-900 group-hover:text-blue-700\">
                                        ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 226), "html", null, true);
            yield "
                                    </span>
                                </button>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield "                        </div>

                    </div>
                    
                </div>
                <!-- NAVIGATION MODULES -->
<div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 animate-fadeIn\">

    <!-- BOUTON DON -->
    <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don");
        yield "\"
       class=\"hover-lift group bg-gradient-to-br from-red-600 to-red-700 text-white rounded-2xl p-6 shadow-lg relative overflow-hidden\">

        <div class=\"absolute top-0 right-0 opacity-10 text-7xl\">
            🩸
        </div>

        <div class=\"relative z-10\">
            <h3 class=\"text-xl font-bold mb-2 flex items-center gap-2\">
                <i class=\"fas fa-hand-holding-heart\"></i>
                Gestion des Dons
            </h3>

            <p class=\"text-sm opacity-90\">
                Donneurs, déclarations, demandes et validations.
            </p>

            <div class=\"mt-4 flex items-center text-sm font-semibold\">
                Accéder au module
                <i class=\"fas fa-arrow-right ml-2 group-hover:translate-x-2 transition\"></i>
            </div>
        </div>
    </a>

    <!-- BOUTON AIDE -->
    <a href=\"";
        // line 264
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_aide");
        yield "\"
       class=\"hover-lift group bg-gradient-to-br from-purple-600 to-indigo-700 text-white rounded-2xl p-6 shadow-lg relative overflow-hidden\">

        <div class=\"absolute top-0 right-0 opacity-10 text-7xl\">
            🆘
        </div>

        <div class=\"relative z-10\">
            <h3 class=\"text-xl font-bold mb-2 flex items-center gap-2\">
                <i class=\"fas fa-hands-helping\"></i>
                Gestion Aide
            </h3>

            <p class=\"text-sm opacity-90\">
                Contacts, urgences, demandes d’assistance.
            </p>

            <div class=\"mt-4 flex items-center text-sm font-semibold\">
                Accéder au module
                <i class=\"fas fa-arrow-right ml-2 group-hover:translate-x-2 transition\"></i>
            </div>
        </div>
    </a>

</div>

                
                
            </div>

        </main>
        
        ";
        // line 297
        yield "        <footer class=\"border-t border-gray-200 bg-white mt-8\">
            <div class=\"max-w-7xl mx-auto px-4 lg:px-8 py-6\">
                <div class=\"flex flex-col sm:flex-row items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2 text-blue-600\">
                        <i class=\"fas fa-shield-alt\"></i>
                        <span class=\"text-sm font-medium\">Panel d'administration - SmartHealth AI</span>
                    </div>
                    <div class=\"text-sm text-gray-500\">
                        © ";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SmartHealth AI. Tous droits réservés.
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
</div>

";
        // line 314
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 315
        yield "<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.hover-lift');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
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
        return "admin/dashboard/index.html.twig";
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
        return array (  475 => 315,  452 => 314,  440 => 305,  430 => 297,  395 => 264,  367 => 239,  356 => 230,  346 => 226,  341 => 224,  338 => 223,  334 => 222,  326 => 216,  291 => 182,  244 => 136,  240 => 133,  196 => 90,  134 => 29,  130 => 26,  124 => 21,  121 => 19,  116 => 15,  113 => 14,  108 => 10,  105 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\dashboard\\index.html.twig");
    }
}
