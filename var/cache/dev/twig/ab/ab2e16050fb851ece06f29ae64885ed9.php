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

/* admin/aide/contacts.html.twig */
class __TwigTemplate_1c48b2500cdf1e83b8a57121cc8d7035 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/contacts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/contacts.html.twig"));

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

        yield "Contacts d'urgence";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
<div class=\"max-w-7xl mx-auto\">

    <!-- HEADER -->
    <div class=\"flex justify-between items-center mb-6\">

        <h1 class=\"text-2xl font-bold text-blue-700 flex items-center gap-2\">
            📞 Contacts d'urgence
        </h1>

        <div class=\"text-sm text-gray-500\">
            Total : ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["contacts"] ?? null)), "html", null, true);
        yield "
        </div>

    </div>

    <!-- GRID CONTACTS -->

    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 27
            yield "
        <div onclick=\"openModal(";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield ")\"
             class=\"bg-white rounded-xl shadow hover:shadow-xl transition cursor-pointer p-6 hover:scale-105\">

            <!-- AVATAR -->
            <div class=\"flex items-center gap-4\">

                <div class=\"w-12 h-12 bg-blue-100 text-blue-700 flex items-center justify-center rounded-full font-bold\">
                    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 35)), "html", null, true);
            yield "
                </div>

                <div>

                    <div class=\"font-semibold text-gray-800\">
                        ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 41), "html", null, true);
            yield "
                    </div>

                    <div class=\"text-sm text-gray-500\">
                        ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 45), "html", null, true);
            yield "
                    </div>

                </div>

            </div>

            <!-- RELATION BADGE -->

            <div class=\"mt-4\">

                <span class=\"px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full\">
                    ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "relation", [], "any", false, false, false, 57), "html", null, true);
            yield "
                </span>

            </div>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "
    </div>

</div>


<!-- MODAL -->

<div id=\"contactModal\"
     class=\"fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50\">

    <div class=\"bg-white rounded-xl p-6 w-96 shadow-xl animate-fadeIn\">

        <h2 class=\"text-xl font-bold mb-4\">
            Contact Info
        </h2>

        <div id=\"modalContent\"></div>

        <div class=\"mt-4 flex justify-between\">

            <button onclick=\"closeModal()\"
                    class=\"px-4 py-2 bg-gray-400 text-white rounded\">
                Fermer
            </button>

            <form id=\"deleteForm\" method=\"post\">

                <button class=\"px-4 py-2 bg-red-600 text-white rounded\">
                    Supprimer
                </button>

            </form>

        </div>

    </div>

</div>


<!-- JS -->

<script>

const contacts = {

";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 113
            yield "
    ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield ": {
        nom: \"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 115), "html", null, true);
            yield "\",
        telephone: \"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 116), "html", null, true);
            yield "\",
        relation: \"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "relation", [], "any", false, false, false, 117), "html", null, true);
            yield "\"
    },

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "
};


function openModal(id)
{

    const contact = contacts[id];

    document.getElementById('modalContent').innerHTML = `
        <p><strong>Nom:</strong> \${contact.nom}</p>
        <p><strong>Téléphone:</strong> \${contact.telephone}</p>
        <p><strong>Relation:</strong> \${contact.relation}</p>
    `;

    document.getElementById('deleteForm').action =
        \"/admin/aide/contacts/delete/\" + id;

    document.getElementById('contactModal').classList.remove('hidden');

}


function closeModal()
{
    document.getElementById('contactModal').classList.add('hidden');
}

</script>

<style>

.animate-fadeIn
{
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn
{
    from {
        opacity:0;
        transform:scale(0.9);
    }

    to {
        opacity:1;
        transform:scale(1);
    }
}

</style>

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
        return "admin/aide/contacts.html.twig";
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
        return array (  265 => 121,  255 => 117,  251 => 116,  247 => 115,  243 => 114,  240 => 113,  236 => 112,  187 => 65,  173 => 57,  158 => 45,  151 => 41,  142 => 35,  132 => 28,  129 => 27,  125 => 26,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/contacts.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\contacts.html.twig");
    }
}
