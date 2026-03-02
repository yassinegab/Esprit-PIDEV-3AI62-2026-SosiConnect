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

/* admin/don/dons.html.twig */
class __TwigTemplate_9b338398b05c20bdf78bfd1d7cfa402e extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/dons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/dons.html.twig"));

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

        yield "Gestion des dons";
        
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
        yield "
<div class=\"flex min-h-screen bg-gray-50\" x-data=\"{ sidebarOpen: true }\">

    <!-- SIDEBAR -->
    <div class=\"w-64 fixed inset-y-0 left-0 z-50\">
        ";
        // line 11
        yield from $this->load("admin/components/sidebar.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    </div>


    <!-- MAIN -->
    <div class=\"flex flex-col flex-1 ml-64\">

        <!-- TOP NAV -->
        ";
        // line 19
        yield from $this->load("admin/components/top-nav.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "

        <!-- CONTENT -->
        <main class=\"p-6\">

            <h1 class=\"text-2xl font-bold text-red-700 mb-6\">
                🧾 Gestion des dons
            </h1>


            <div class=\"bg-white rounded-xl shadow overflow-hidden\">

                <table class=\"w-full\">

                    <thead class=\"bg-gray-100\">
                        <tr>
                            <th class=\"p-3 text-left\">Type</th>
                            <th class=\"p-3 text-left\">Région</th>
                            <th class=\"p-3 text-left\">Date</th>
                            <th class=\"p-3 text-left\">Statut</th>
                            <th class=\"p-3 text-center\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
            // line 47
            yield "
                        <tr class=\"border-t\">

                            <td class=\"p-3\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>

                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "region", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>

                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "dateDon", [], "any", false, false, false, 54), "d/m/Y H:i"), "html", null, true);
            yield "</td>

                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>

                            <td class=\"flex gap-2 p-3\">

                                <form method=\"post\"
                                      action=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\">
                                    <button class=\"bg-green-600 text-white px-3 py-1 rounded\">
                                        Valider
                                    </button>
                                </form>


                                <form method=\"post\"
                                      action=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">
                                    <button class=\"bg-red-600 text-white px-3 py-1 rounded\">
                                        Supprimer
                                    </button>
                                </form>

                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['don'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "
                    </tbody>

                </table>

            </div>

        </main>

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
        return "admin/don/dons.html.twig";
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
        return array (  208 => 80,  191 => 69,  180 => 61,  172 => 56,  167 => 54,  162 => 52,  157 => 50,  152 => 47,  148 => 46,  120 => 20,  118 => 19,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/dons.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\dons.html.twig");
    }
}
