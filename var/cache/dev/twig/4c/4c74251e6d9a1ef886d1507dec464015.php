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

/* admin/aide/urgences.html.twig */
class __TwigTemplate_85d9ce3944c15b4da0f86cfd961997fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/urgences.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/urgences.html.twig"));

        $this->parent = $this->load("admin/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
<h1 class=\"text-2xl font-bold text-red-600 mb-6\">
🚨 Gestion des urgences
</h1>
<div class=\"flex justify-between items-center mb-6\">

<h1 class=\"text-2xl font-bold text-red-600\">
🚨 Gestion des urgences
</h1>

<div class=\"flex gap-3\">

<a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_urgences", ["sort" => "date"]);
        yield "\"
class=\"
px-4 py-2 rounded-lg text-white
";
        // line 19
        yield (((($context["sort"] ?? null) == "date")) ? ("bg-blue-600") : ("bg-gray-500 hover:bg-gray-600"));
        // line 21
        yield "
\">
📅 Trier par date
</a>


<a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_urgences", ["sort" => "statut"]);
        yield "\"
class=\"
px-4 py-2 rounded-lg text-white
";
        // line 30
        yield (((($context["sort"] ?? null) == "statut")) ? ("bg-green-600") : ("bg-gray-500 hover:bg-gray-600"));
        // line 32
        yield "
\">
📊 Trier par statut
</a>

</div>

</div>
    

<div class=\"space-y-4\">

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["urgences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["urgence"]) {
            // line 45
            yield "
<div class=\"bg-white p-5 rounded-xl shadow flex justify-between items-center\">

    <div>

        <p class=\"font-semibold text-lg\">
            ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "message", [], "any", false, false, false, 51), "html", null, true);
            yield "
        </p>

        <p class=\"text-sm text-gray-500\">
            ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "dateUrgence", [], "any", false, false, false, 55), "d/m/Y H:i"), "html", null, true);
            yield "
        </p>

        <span class=\"
        px-2 py-1 rounded text-xs font-bold
        ";
            // line 60
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "statut", [], "any", false, false, false, 60) == "EN_ATTENTE")) {
                // line 61
                yield "        bg-yellow-100 text-yellow-700
        ";
            } else {
                // line 63
                yield "        bg-green-100 text-green-700
        ";
            }
            // line 65
            yield "        \">
        ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "statut", [], "any", false, false, false, 66), "html", null, true);
            yield "
        </span>

    </div>

    <div class=\"flex gap-2\">

        <!-- VOIR MAP -->
        <button onclick=\"openMap(";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "latitude", [], "any", false, false, false, 74), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "longitude", [], "any", false, false, false, 74), "html", null, true);
            yield ")\"
        class=\"bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700\">
        📍 Voir
        </button>

        <!-- TOGGLE -->
        <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_urgence_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\"
        class=\"bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600\">
        🔄 Statut
        </a>

        <!-- DELETE -->
        <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_urgence_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["urgence"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\"
        onclick=\"return confirm('Supprimer cette urgence ?')\"
        class=\"bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700\">
        🗑 Supprimer
        </a>

    </div>

</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['urgence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
</div>


<!-- MODAL -->
<div id=\"mapModal\"
class=\"fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center\">

    <div class=\"bg-white p-4 rounded-xl w-2/3\">

        <div class=\"flex justify-between mb-2\">

            <h2 class=\"font-bold\">Localisation urgence</h2>

            <button onclick=\"closeMap()\">✖</button>

        </div>

        <div id=\"map\" style=\"height:400px;\"></div>

    </div>

</div>


<!-- Leaflet -->
<link rel=\"stylesheet\"
href=\"https://unpkg.com/leaflet/dist/leaflet.css\"/>

<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>


<script>

let map;

function openMap(lat, lng)
{

    document.getElementById('mapModal').style.display='flex';

    setTimeout(()=>{

        if(map) map.remove();

        map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
        .addTo(map);

        L.marker([lat, lng]).addTo(map);

    },100);

}

function closeMap()
{
    document.getElementById('mapModal').style.display='none';
}

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
        return "admin/aide/urgences.html.twig";
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
        return array (  216 => 97,  199 => 86,  190 => 80,  179 => 74,  168 => 66,  165 => 65,  161 => 63,  157 => 61,  155 => 60,  147 => 55,  140 => 51,  132 => 45,  128 => 44,  114 => 32,  112 => 30,  106 => 27,  98 => 21,  96 => 19,  90 => 16,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/urgences.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\urgences.html.twig");
    }
}
