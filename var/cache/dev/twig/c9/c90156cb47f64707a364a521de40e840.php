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

/* dashboard/index.html.twig */
class __TwigTemplate_697a9fb7d256cbaf4e240a1cf486752a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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
        yield "<div class=\"flex min-h-screen bg-gray-50\" x-data=\"{ sidebarOpen: false }\">
    
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
            <div class=\"mx-auto max-w-7xl space-y-6 p-4 lg:p-6\">
                
                ";
        // line 20
        yield "                <div class=\"flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between animate-fadeIn\">
                    <div>
                        <h1 class=\"text-2xl font-bold text-gray-900\">
                            Bonjour, ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 23), "html", null, true);
        yield " ! 👋
                        </h1>
                        <p class=\"text-gray-600 mt-1\">
                            Voici un aperçu de votre santé aujourd'hui
                        </p>
                    </div>
                    
                    <div class=\"flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 shadow-sm\">
                        <i class=\"fas fa-calendar-alt text-blue-600\"></i>
                        <span class=\"text-sm font-medium text-gray-700\">
                            ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                
                ";
        // line 39
        yield "                <div class=\"animate-fadeIn\" style=\"animation-delay: 0.1s;\">
                    ";
        // line 40
        yield from $this->load("components/stat-cards.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "                </div>
                
                ";
        // line 44
        yield "                <div class=\"grid gap-6 lg:grid-cols-2 xl:grid-cols-3 animate-fadeIn\" style=\"animation-delay: 0.2s;\">
                    ";
        // line 45
        yield from $this->load("components/widgets/health-summary.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "                    ";
        yield from $this->load("components/widgets/mental.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "                    ";
        yield from $this->load("components/widgets/activity.html.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "                </div>
                
                <div class=\"grid gap-6 lg:grid-cols-2 animate-fadeIn\" style=\"animation-delay: 0.3s;\">
                    ";
        // line 51
        yield from $this->load("components/widgets/nutrition.html.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "                    ";
        yield from $this->load("components/widgets/cycle.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "                </div>
                
                ";
        // line 56
        yield "                <div class=\"rounded-xl border border-gray-200 bg-white p-6 shadow-sm animate-fadeIn hover-lift\" style=\"animation-delay: 0.4s;\">
                    <div class=\"mb-4 flex items-center justify-between\">
                        <h2 class=\"text-lg font-semibold text-gray-900\">
                            <i class=\"fas fa-bolt text-blue-600 mr-2\"></i>
                            Actions rapides
                        </h2>
                    </div>
                    
                    <div class=\"grid gap-3 sm:grid-cols-2 lg:grid-cols-4\">
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["quickActions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 66
            yield "                            <button class=\"group flex items-center gap-3 rounded-lg border border-gray-200 bg-gradient-to-br from-gray-50 to-white p-4 text-left hover:from-blue-50 hover:to-blue-100 hover:border-blue-300 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1\">
                                <span class=\"text-2xl group-hover:scale-110 transition-transform duration-300\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "emoji", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                                <span class=\"text-sm font-medium text-gray-900 group-hover:text-blue-700\">
                                    ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 69), "html", null, true);
            yield "
                                </span>
                            </button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                    </div>
                </div>
                
            </div>
        </main>
        
        ";
        // line 80
        yield "        <footer class=\"border-t border-gray-200 bg-white\">
            <div class=\"max-w-7xl mx-auto px-4 lg:px-8 py-6\">
                <div class=\"flex flex-col sm:flex-row items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2 text-orange-600\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <span class=\"text-sm font-medium\">SmartHealth AI est un système d'aide à la décision. Ne remplace pas un professionnel de santé.</span>
                    </div>
                    <div class=\"text-sm text-gray-500\">
                        © ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " SmartHealth AI. Tous droits réservés.
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
</div>

";
        // line 97
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

        // line 98
        yield "<script>
    // Add smooth scroll behavior
    document.addEventListener('DOMContentLoaded', function() {
        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, observerOptions);
        
        // Observe all widgets
        document.querySelectorAll('.grid > div').forEach(el => {
            observer.observe(el);
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
        return "dashboard/index.html.twig";
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
        return array (  268 => 98,  245 => 97,  233 => 88,  223 => 80,  215 => 73,  205 => 69,  200 => 67,  197 => 66,  193 => 65,  182 => 56,  178 => 53,  175 => 52,  173 => 51,  168 => 48,  165 => 47,  162 => 46,  160 => 45,  157 => 44,  153 => 41,  151 => 40,  148 => 39,  140 => 33,  127 => 23,  122 => 20,  116 => 15,  113 => 14,  108 => 10,  105 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\dashboard\\index.html.twig");
    }
}
