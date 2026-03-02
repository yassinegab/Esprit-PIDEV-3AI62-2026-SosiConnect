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

/* admin/don/list.html.twig */
class __TwigTemplate_bc4dcf0a07ed05e4731b4a4409ca17af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/list.html.twig"));

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
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"animate-fadeIn space-y-6\">
    <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center gap-4\">
        <h1 class=\"text-2xl font-bold text-red-700 flex items-center gap-3\">
            <span class=\"text-3xl\">🧾</span> Gestion des dons
        </h1>
        <div class=\"flex gap-2\">
            <span class=\"bg-gray-100 px-3 py-1 rounded-full text-sm text-gray-600\">
                ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total", [], "any", false, false, false, 13), "html", null, true);
        yield " don(s)
            </span>
        </div>
    </div>

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg shadow flex items-center gap-2\">
        <span>✅</span> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg shadow flex items-center gap-2\">
        <span>❌</span> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
    <form method=\"get\" class=\"bg-white p-4 rounded-xl shadow space-y-4\">
        <div class=\"grid grid-cols-1 md:grid-cols-6 gap-4\">
            <div class=\"md:col-span-2\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Recherche</label>
                <input type=\"text\" name=\"search\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 34), "")) : ("")), "html", null, true);
        yield "\" 
                       placeholder=\"Région, type...\"
                       class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-transparent\">
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Statut</label>
                <select name=\"statut\" class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
                    <option value=\"\">Tous</option>
                    <option value=\"EN_ATTENTE\" ";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 43) == "EN_ATTENTE")) ? ("selected") : (""));
        yield ">En attente</option>
                    <option value=\"VALIDÉ\" ";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 44) == "VALIDÉ")) ? ("selected") : (""));
        yield ">Validés</option>
                    <option value=\"REFUSÉ\" ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 45) == "REFUSÉ")) ? ("selected") : (""));
        yield ">Refusés</option>
                </select>
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Type</label>
                <select name=\"typeDon\" class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
                    <option value=\"\">Tous</option>
                    <option value=\"sang\" ";
        // line 53
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "typeDon", [], "any", false, false, false, 53) == "sang")) ? ("selected") : (""));
        yield ">Sang</option>
                    <option value=\"organe\" ";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "typeDon", [], "any", false, false, false, 54) == "organe")) ? ("selected") : (""));
        yield ">Organe</option>
                </select>
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Date début</label>
                <input type=\"date\" name=\"dateFrom\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "dateFrom", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "dateFrom", [], "any", false, false, false, 60), "")) : ("")), "html", null, true);
        yield "\"
                       class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
            </div>
            
            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Date fin</label>
                <input type=\"date\" name=\"dateTo\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "dateTo", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "dateTo", [], "any", false, false, false, 66), "")) : ("")), "html", null, true);
        yield "\"
                       class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
            </div>
        </div>
        
        <div class=\"flex justify-between items-center\">
            <div class=\"flex gap-2\">
                <button type=\"submit\" class=\"bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition\">
                    🔍 Rechercher
                </button>
                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list");
        yield "\" class=\"bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg transition\">
                    Réinitialiser
                </a>
            </div>
            
            <div class=\"flex items-center gap-2\">
                <label class=\"text-sm text-gray-600\">Trier:</label>
                <select name=\"sortOrder\" class=\"border border-gray-300 rounded-lg px-3 py-2\">
                    <option value=\"DESC\" ";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sortOrder", [], "any", false, false, false, 84) == "DESC")) ? ("selected") : (""));
        yield ">Plus récents</option>
                    <option value=\"ASC\" ";
        // line 85
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sortOrder", [], "any", false, false, false, 85) == "ASC")) ? ("selected") : (""));
        yield ">Plus anciens</option>
                </select>
            </div>
        </div>
    </form>

    <form method=\"post\" action=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_bulk");
        yield "\" id=\"bulkForm\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk_action"), "html", null, true);
        yield "\">
        
        <div class=\"bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200\">
            <div class=\"overflow-x-auto\">
                <table class=\"w-full text-sm\">
                    <thead class=\"bg-gray-100 text-gray-700\">
                        <tr>
                            <th class=\"p-4 text-left w-10\">
                                <input type=\"checkbox\" id=\"selectAll\" class=\"w-4 h-4 rounded border-gray-300\">
                            </th>
                            <th class=\"p-4 text-left\">Type</th>
                            <th class=\"p-4 text-left\">Détails</th>
                            <th class=\"p-4 text-left\">Région</th>
                            <th class=\"p-4 text-left\">Date</th>
                            <th class=\"p-4 text-left\">Statut</th>
                            <th class=\"p-4 text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"divide-y divide-gray-200\">
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dons"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
            // line 112
            yield "                        <tr class=\"hover:bg-gray-50 transition duration-200\">
                            <td class=\"p-4\">
                                <input type=\"checkbox\" name=\"ids[]\" value=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield "\" class=\"don-checkbox w-4 h-4 rounded border-gray-300\">
                            </td>
                            <td class=\"p-4\">
                                <div class=\"flex items-center gap-2\">
                                    <span class=\"text-2xl\">";
            // line 118
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 118) == "sang")) ? ("🩸") : ("🫀"));
            yield "</span>
                                    <span class=\"font-semibold text-red-600\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 119)), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            <td class=\"p-4 text-gray-600\">
                                ";
            // line 123
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 123) == "sang") && CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeSanguin", [], "any", false, false, false, 123))) {
                // line 124
                yield "                                    <span class=\"bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeSanguin", [], "any", false, false, false, 124), "html", null, true);
                yield "</span>
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 125
$context["don"], "typeOrgane", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "                                    <span class=\"bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeOrgane", [], "any", false, false, false, 126), "html", null, true);
                yield "</span>
                                ";
            }
            // line 128
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "urgence", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "                                    <span class=\"ml-2 bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs font-bold animate-pulse\">URGENT</span>
                                ";
            }
            // line 131
            yield "                            </td>
                            <td class=\"p-4\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "region", [], "any", false, false, false, 132), "html", null, true);
            yield "</td>
                            <td class=\"p-4 text-gray-600\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "dateDon", [], "any", false, false, false, 133), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            <td class=\"p-4\">
                                <span class=\"px-3 py-1 ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusBadgeClass", [], "any", false, false, false, 135), "html", null, true);
            yield " rounded-full text-xs font-bold\">
                                    ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusIcon", [], "any", false, false, false, 136), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 136), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td class=\"p-4\">
                                <div class=\"flex justify-center gap-1 flex-wrap\">
                                    ";
            // line 141
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 141) != "VALIDÉ")) {
                // line 142
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                yield "\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("validate" . CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 143))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg text-xs transition hover:scale-105\">
                                            ✔ Valider
                                        </button>
                                    </form>
                                    ";
            }
            // line 149
            yield "                                    
                                    ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 150) != "REFUSÉ")) {
                // line 151
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 152))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"bg-yellow-600 hover:bg-yellow-700 text-white px-3 py-1 rounded-lg text-xs transition hover:scale-105\">
                                            ✖ Refuser
                                        </button>
                                    </form>
                                    ";
            }
            // line 158
            yield "                                    
                                    <form method=\"post\" action=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\" class=\"inline\" onsubmit=\"return confirm('Supprimer ce don ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 160))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-xs transition hover:scale-105\">
                                            🗑
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 168
        if (!$context['_iterated']) {
            // line 169
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center text-gray-500 py-12\">
                                <div class=\"flex flex-col items-center gap-2\">
                                    <span class=\"text-4xl\">📭</span>
                                    <p>Aucun don trouvé</p>
                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['don'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "                    </tbody>
                </table>
            </div>
            
            ";
        // line 182
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["dons"] ?? null)) > 0)) {
            // line 183
            yield "            <div class=\"bg-gray-50 px-4 py-3 border-t flex justify-between items-center\">
                <div class=\"flex items-center gap-2\">
                    <select name=\"action\" class=\"border border-gray-300 rounded-lg px-3 py-2 text-sm\">
                        <option value=\"\">Action groupée</option>
                        <option value=\"validate\">Valider sélection</option>
                        <option value=\"reject\">Refuser sélection</option>
                        <option value=\"delete\">Supprimer sélection</option>
                    </select>
                    <button type=\"submit\" class=\"bg-gray-800 hover:bg-black text-white px-4 py-2 rounded-lg text-sm transition\">
                        Appliquer
                    </button>
                </div>
                
                ";
            // line 196
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 196) > 1)) {
                // line 197
                yield "                <div class=\"flex items-center gap-2\">
                    ";
                // line 198
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 198) > 1)) {
                    // line 199
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 199), "query", [], "any", false, false, false, 199), "all", [], "any", false, false, false, 199), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 199) - 1)])), "html", null, true);
                    yield "\" 
                       class=\"px-3 py-1 bg-white border rounded hover:bg-gray-100 transition\">
                        ← Précédent
                    </a>
                    ";
                }
                // line 204
                yield "                    
                    <span class=\"text-sm text-gray-600\">
                        Page ";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 206), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 206), "html", null, true);
                yield "
                    </span>
                    
                    ";
                // line 209
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 209) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 209))) {
                    // line 210
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 210), "query", [], "any", false, false, false, 210), "all", [], "any", false, false, false, 210), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 210) + 1)])), "html", null, true);
                    yield "\" 
                       class=\"px-3 py-1 bg-white border rounded hover:bg-gray-100 transition\">
                        Suivant →
                    </a>
                    ";
                }
                // line 215
                yield "                </div>
                ";
            }
            // line 217
            yield "            </div>
            ";
        }
        // line 219
        yield "        </div>
    </form>
</div>

<script>
document.getElementById('selectAll')?.addEventListener('change', function() {
    document.querySelectorAll('.don-checkbox').forEach(cb => cb.checked = this.checked);
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
        return "admin/don/list.html.twig";
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
        return array (  491 => 219,  487 => 217,  483 => 215,  474 => 210,  472 => 209,  464 => 206,  460 => 204,  451 => 199,  449 => 198,  446 => 197,  444 => 196,  429 => 183,  427 => 182,  421 => 178,  407 => 169,  405 => 168,  392 => 160,  388 => 159,  385 => 158,  376 => 152,  371 => 151,  369 => 150,  366 => 149,  357 => 143,  352 => 142,  350 => 141,  340 => 136,  336 => 135,  331 => 133,  327 => 132,  324 => 131,  320 => 129,  317 => 128,  311 => 126,  309 => 125,  304 => 124,  302 => 123,  295 => 119,  291 => 118,  284 => 114,  280 => 112,  275 => 111,  253 => 92,  249 => 91,  240 => 85,  236 => 84,  225 => 76,  212 => 66,  203 => 60,  194 => 54,  190 => 53,  179 => 45,  175 => 44,  171 => 43,  159 => 34,  152 => 29,  143 => 26,  140 => 25,  136 => 24,  133 => 23,  124 => 20,  121 => 19,  117 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/list.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\list.html.twig");
    }
}
