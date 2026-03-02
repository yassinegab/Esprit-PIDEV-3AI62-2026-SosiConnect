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

/* admin/don/donneurs.html.twig */
class __TwigTemplate_8d48395e9d3d27656956ec41d71be1f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/donneurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/donneurs.html.twig"));

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

        yield "Gestion des Donneurs";
        
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
        yield "<div class=\"space-y-6 animate-fadeIn\">
    <div class=\"flex justify-between items-center\">
        <h1 class=\"text-2xl font-bold text-purple-700 flex items-center gap-2\">
            <span class=\"text-3xl\">👤</span> Gestion des Donneurs
        </h1>
        <span class=\"bg-gray-100 px-3 py-1 rounded-full text-sm text-gray-600\">
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total", [], "any", false, false, false, 12), "html", null, true);
        yield " donneur(s)
        </span>
    </div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg shadow\">
        ✅ ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg shadow\">
        ❌ ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    <div class=\"bg-white p-4 rounded-xl shadow\">
        <form method=\"get\" class=\"flex flex-wrap gap-3 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "\"
                       placeholder=\"🔍 Nom, prénom...\"
                       class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-purple-500\">
            </div>
            <div>
                <select name=\"groupe\" class=\"border border-gray-300 rounded-lg px-3 py-2\">
                    <option value=\"\">Tous groupes</option>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["groupes_sanguins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 39
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "groupe", [], "any", false, false, false, 39) == $context["g"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </select>
            </div>
            <div>
                <select name=\"disponible\" class=\"border border-gray-300 rounded-lg px-3 py-2\">
                    <option value=\"\">Tous</option>
                    <option value=\"1\" ";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "disponible", [], "any", false, false, false, 46) == "1")) ? ("selected") : (""));
        yield ">Disponibles</option>
                    <option value=\"0\" ";
        // line 47
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "disponible", [], "any", false, false, false, 47) == "0")) ? ("selected") : (""));
        yield ">Indisponibles</option>
                </select>
            </div>
            <button type=\"submit\" class=\"bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition\">
                Filtrer
            </button>
            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneurs");
        yield "\" class=\"bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg transition\">
                Reset
            </a>
        </form>
    </div>

    <div class=\"bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200\">
        <div class=\"overflow-x-auto\">
            <table class=\"w-full text-sm\">
                <thead class=\"bg-gray-100 text-gray-700\">
                    <tr>
                        <th class=\"p-4 text-left\">Nom</th>
                        <th class=\"p-4 text-left\">Âge</th>
                        <th class=\"p-4 text-left\">Groupe</th>
                        <th class=\"p-4 text-left\">Téléphone</th>
                        <th class=\"p-4 text-left\">Dernier don</th>
                        <th class=\"p-4 text-left\">Disponibilité</th>
                        <th class=\"p-4 text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-200\">
                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["donneurs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["donneur"]) {
            // line 75
            yield "                    <tr class=\"hover:bg-gray-50 transition\">
                        <td class=\"p-4\">
                            <div class=\"flex items-center gap-3\">
                                <div class=\"w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-bold\">
                                    ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "prenom", [], "any", false, false, false, 79)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "nom", [], "any", false, false, false, 79)), "html", null, true);
            yield "
                                </div>
                                <div>
                                    <div class=\"font-medium\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "prenom", [], "any", false, false, false, 82), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "nom", [], "any", false, false, false, 82), "html", null, true);
            yield "</div>
                                    <div class=\"text-xs text-gray-500\">ID: ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "</div>
                                </div>
                            </div>
                        </td>
                        <td class=\"p-4 text-gray-600\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "age", [], "any", false, false, false, 87), "html", null, true);
            yield " ans</td>
                        <td class=\"p-4\">
                            <span class=\"bg-red-100 text-red-700 px-2 py-1 rounded font-bold text-xs\">
                                ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "groupeSanguin", [], "any", false, false, false, 90), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"p-4 text-gray-600\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "telephone", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                        <td class=\"p-4 text-gray-600\">
                            ";
            // line 95
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "dateDernierDon", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "dateDernierDon", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 98
                yield "                                <span class=\"text-gray-400\">-</span>
                            ";
            }
            // line 100
            yield "                        </td>
                        <td class=\"p-4\">
                            ";
            // line 102
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "disponible", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "                                <span class=\"px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold flex items-center gap-1 w-fit\">
                                    <span class=\"w-2 h-2 bg-green-500 rounded-full animate-pulse\"></span>
                                    Disponible
                                </span>
                            ";
            } else {
                // line 108
                yield "                                <span class=\"px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold\">
                                    Indisponible
                                </span>
                            ";
            }
            // line 112
            yield "                        </td>
                        <td class=\"p-4\">
                            <div class=\"flex justify-center gap-2\">
                                <form method=\"post\" action=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneur_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\" class=\"inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "id", [], "any", false, false, false, 116))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" 
                                            class=\"px-3 py-1 ";
            // line 118
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "disponible", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-orange-100 text-orange-700 hover:bg-orange-200") : ("bg-green-100 text-green-700 hover:bg-green-200"));
            yield " rounded transition text-xs font-medium\">
                                        ";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "disponible", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Rendre indisponible") : ("Rendre disponible"));
            yield "
                                    </button>
                                </form>
                                
                                <form method=\"post\" action=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" 
                                      class=\"inline\" onsubmit=\"return confirm('Supprimer ce donneur ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["donneur"], "id", [], "any", false, false, false, 125))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" 
                                            class=\"px-3 py-1 bg-red-100 text-red-700 hover:bg-red-200 rounded transition text-xs font-medium\">
                                        🗑 Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 134
        if (!$context['_iterated']) {
            // line 135
            yield "                    <tr>
                        <td colspan=\"7\" class=\"p-12 text-center text-gray-500\">
                            <div class=\"text-4xl mb-2\">👤</div>
                            <p>Aucun donneur enregistré</p>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['donneur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                </tbody>
            </table>
        </div>

        ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 146) > 1)) {
            // line 147
            yield "        <div class=\"p-4 bg-gray-50 border-t flex justify-center items-center gap-4\">
            ";
            // line 148
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 148) > 1)) {
                // line 149
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneurs", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 149), "query", [], "any", false, false, false, 149), "all", [], "any", false, false, false, 149), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 149) - 1)])), "html", null, true);
                yield "\" 
               class=\"px-4 py-2 bg-white border rounded-lg hover:bg-gray-100 transition\">
                ← Précédent
            </a>
            ";
            }
            // line 154
            yield "            
            <span class=\"text-sm text-gray-600 px-3\">
                Page ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 156), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 156), "html", null, true);
            yield "
            </span>
            
            ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 159) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 159))) {
                // line 160
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneurs", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "all", [], "any", false, false, false, 160), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 160) + 1)])), "html", null, true);
                yield "\" 
               class=\"px-4 py-2 bg-white border rounded-lg hover:bg-gray-100 transition\">
                Suivant →
            </a>
            ";
            }
            // line 165
            yield "        </div>
        ";
        }
        // line 167
        yield "    </div>
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
        return "admin/don/donneurs.html.twig";
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
        return array (  413 => 167,  409 => 165,  400 => 160,  398 => 159,  390 => 156,  386 => 154,  377 => 149,  375 => 148,  372 => 147,  370 => 146,  364 => 142,  352 => 135,  350 => 134,  336 => 125,  331 => 123,  324 => 119,  320 => 118,  315 => 116,  311 => 115,  306 => 112,  300 => 108,  293 => 103,  291 => 102,  287 => 100,  283 => 98,  277 => 96,  275 => 95,  270 => 93,  264 => 90,  258 => 87,  251 => 83,  245 => 82,  238 => 79,  232 => 75,  227 => 74,  203 => 53,  194 => 47,  190 => 46,  183 => 41,  170 => 39,  166 => 38,  156 => 31,  150 => 27,  141 => 24,  138 => 23,  134 => 22,  131 => 21,  122 => 18,  119 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/donneurs.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\donneurs.html.twig");
    }
}
