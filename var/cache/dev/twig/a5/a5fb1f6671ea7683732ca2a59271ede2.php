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

/* front/don/new.html.twig */
class __TwigTemplate_30e82c87b9db4389cdeaf02dc77849e5 extends Template
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
        return "layout/front-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/don/new.html.twig"));

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

        yield "Déclarer un don";
        
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
        <h1 class=\"text-2xl font-bold text-gray-800 flex items-center gap-2\">
            <span class=\"text-3xl\">🩸</span> Déclarer un don
        </h1>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_history");
        yield "\" class=\"bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg transition flex items-center gap-2\">
            <span>📋</span> Historique
        </a>
    </div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "    <div class=\"bg-green-100 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded-lg shadow flex items-center gap-2\">
        <span>✅</span> ";
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
            yield "    <div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded-lg shadow flex items-center gap-2\">
        <span>❌</span> ";
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
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-1\">
            <div class=\"bg-white p-6 rounded-xl shadow-lg border border-gray-100 sticky top-4\">
                <h2 class=\"text-lg font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span>➕</span> Nouveau don
                </h2>
                
                <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-4\">
                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Type de don *</label>
                        <select name=\"type_don\" required 
                                id=\"typeDonSelect\"
                                class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-transparent transition\">
                            <option value=\"\">Sélectionner...</option>
                            <option value=\"sang\">🩸 Sang</option>
                            <option value=\"organe\">🫀 Organe</option>
                        </select>
                    </div>

                    <div id=\"sanguinField\" class=\"hidden\">
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Groupe sanguin</label>
                        <select name=\"type_sanguin\" 
                                class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
                            <option value=\"\">Sélectionner...</option>
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types_sanguin"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 53
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                        </select>
                    </div>

                    <div id=\"organeField\" class=\"hidden\">
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Type d'organe</label>
                        <select name=\"type_organe\"
                                class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
                            <option value=\"\">Sélectionner...</option>
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types_organe"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 64
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["type"]), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                        </select>
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Région *</label>
                        <input type=\"text\" name=\"region\" required
                               placeholder=\"Ex: Tunis, Sfax...\"
                               class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-transparent transition\">
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">📎 Document justificatif (optionnel)</label>
                        <input type=\"file\" name=\"document\" accept=\".pdf,image/jpeg,image/png\" 
                               class=\"block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100\">
                        <p class=\"text-xs text-gray-500 mt-1\">PDF, JPG, PNG jusqu'à 10MB</p>
                    </div>

                    <div class=\"flex items-center gap-3 p-3 bg-orange-50 rounded-lg border border-orange-200\">
                        <input type=\"checkbox\" name=\"urgence\" value=\"1\" id=\"urgenceCheck\"
                               class=\"w-5 h-5 text-orange-600 rounded border-orange-300 focus:ring-orange-500\">
                        <label for=\"urgenceCheck\" class=\"text-sm font-medium text-orange-800\">
                            🚨 Cas urgent
                        </label>
                    </div>

                    <button type=\"submit\" 
                            class=\"w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-4 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2\">
                        <span>🩸</span> Déclarer le don
                    </button>
                </form>
            </div>
        </div>

        <div class=\"lg:col-span-2 space-y-4\">
            <div class=\"bg-white p-4 rounded-xl shadow\">
                <form method=\"get\" class=\"flex flex-wrap gap-3 items-end\">
                    <div class=\"flex-1 min-w-[200px]\">
                        <input type=\"text\" name=\"search\" value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", false, false, false, 103), "")) : ("")), "html", null, true);
        yield "\"
                               placeholder=\"🔍 Rechercher par région...\"
                               class=\"w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500\">
                    </div>
                    <div>
                        <select name=\"typeDon\" class=\"border border-gray-300 rounded-lg px-3 py-2\">
                            <option value=\"\">Tous types</option>
                            <option value=\"sang\" ";
        // line 110
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "typeDon", [], "any", false, false, false, 110) == "sang")) ? ("selected") : (""));
        yield ">Sang</option>
                            <option value=\"organe\" ";
        // line 111
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "typeDon", [], "any", false, false, false, 111) == "organe")) ? ("selected") : (""));
        yield ">Organe</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"bg-gray-800 hover:bg-black text-white px-4 py-2 rounded-lg transition\">
                        Filtrer
                    </button>
                    <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new");
        yield "\" class=\"bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg transition\">
                        Reset
                    </a>
                </form>
            </div>

            <div class=\"bg-white rounded-xl shadow overflow-hidden\">
                <div class=\"p-4 bg-gray-50 border-b flex justify-between items-center\">
                    <h2 class=\"font-bold text-gray-800 flex items-center gap-2\">
                        <span>📋</span> Dons déclarés
                    </h2>
                    <span class=\"text-sm text-gray-500\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total", [], "any", false, false, false, 128), "html", null, true);
        yield " résultat(s)</span>
                </div>

                <div class=\"divide-y divide-gray-100\">
                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dons"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
            // line 133
            yield "                    <div class=\"p-4 hover:bg-gray-50 transition\">
                        <div class=\"flex justify-between items-start\">
                            <div class=\"flex items-start gap-3\">
                                <div class=\"text-3xl\">
                                    ";
            // line 137
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 137) == "sang")) ? ("🩸") : ("🫀"));
            yield "
                                </div>
                                <div>
                                    <div class=\"flex items-center gap-2\">
                                        <span class=\"font-bold text-gray-800\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 141)), "html", null, true);
            yield "</span>
                                        ";
            // line 142
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeSanguin", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "                                        <span class=\"bg-red-100 text-red-700 px-2 py-0.5 rounded text-xs font-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeSanguin", [], "any", false, false, false, 143), "html", null, true);
                yield "</span>
                                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 144
$context["don"], "typeOrgane", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "                                        <span class=\"bg-purple-100 text-purple-700 px-2 py-0.5 rounded text-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeOrgane", [], "any", false, false, false, 145), "html", null, true);
                yield "</span>
                                        ";
            }
            // line 147
            yield "                                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "urgence", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "                                        <span class=\"bg-orange-100 text-orange-700 px-2 py-0.5 rounded text-xs font-bold animate-pulse\">URGENT</span>
                                        ";
            }
            // line 150
            yield "                                    </div>
                                    <div class=\"text-sm text-gray-500 mt-1\">
                                        📍 ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "region", [], "any", false, false, false, 152), "html", null, true);
            yield " • 📅 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "dateDon", [], "any", false, false, false, 152), "d/m/Y H:i"), "html", null, true);
            yield "
                                        ";
            // line 153
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "documentName", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 154
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["don"], "documentFile"), "html", null, true);
                yield "\" target=\"_blank\" class=\"ml-2 text-blue-600 hover:text-blue-800\">
                                            <i class=\"fas fa-paperclip\"></i> Document
                                        </a>
                                        ";
            }
            // line 158
            yield "                                    </div>
                                    <div class=\"mt-2\">
                                        <span class=\"px-2 py-1 ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusBadgeClass", [], "any", false, false, false, 160), "html", null, true);
            yield " rounded-full text-xs font-semibold\">
                                            ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusIcon", [], "any", false, false, false, 161), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 161), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <form method=\"post\" action=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 167)]), "html", null, true);
            yield "\"
                                  onsubmit=\"return confirm('Supprimer ce don ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["don"], "id", [], "any", false, false, false, 169))), "html", null, true);
            yield "\">
                                <button class=\"text-red-500 hover:text-red-700 hover:bg-red-50 p-2 rounded-lg transition\">
                                    🗑
                                </button>
                            </form>
                        </div>
                    </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 176
        if (!$context['_iterated']) {
            // line 177
            yield "                    <div class=\"p-12 text-center text-gray-500\">
                        <div class=\"text-4xl mb-2\">📭</div>
                        <p>Aucun don trouvé</p>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['don'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "                </div>

                ";
        // line 184
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 184) > 1)) {
            // line 185
            yield "                <div class=\"p-4 bg-gray-50 border-t flex justify-center items-center gap-2\">
                    ";
            // line 186
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 186) > 1)) {
                // line 187
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 187), "query", [], "any", false, false, false, 187), "all", [], "any", false, false, false, 187), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 187) - 1)])), "html", null, true);
                yield "\" 
                       class=\"px-3 py-1 bg-white border rounded hover:bg-gray-100 transition\">
                        ←
                    </a>
                    ";
            }
            // line 192
            yield "                    
                    <span class=\"text-sm text-gray-600 px-3\">
                        ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 194), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 194), "html", null, true);
            yield "
                    </span>
                    
                    ";
            // line 197
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 197) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pages", [], "any", false, false, false, 197))) {
                // line 198
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_new", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 198), "query", [], "any", false, false, false, 198), "all", [], "any", false, false, false, 198), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "current", [], "any", false, false, false, 198) + 1)])), "html", null, true);
                yield "\" 
                       class=\"px-3 py-1 bg-white border rounded hover:bg-gray-100 transition\">
                        →
                    </a>
                    ";
            }
            // line 203
            yield "                </div>
                ";
        }
        // line 205
        yield "            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('typeDonSelect').addEventListener('change', function() {
    document.getElementById('sanguinField').classList.toggle('hidden', this.value !== 'sang');
    document.getElementById('organeField').classList.toggle('hidden', this.value !== 'organe');
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
        return "front/don/new.html.twig";
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
        return array (  459 => 205,  455 => 203,  446 => 198,  444 => 197,  436 => 194,  432 => 192,  423 => 187,  421 => 186,  418 => 185,  416 => 184,  412 => 182,  402 => 177,  400 => 176,  388 => 169,  383 => 167,  372 => 161,  368 => 160,  364 => 158,  356 => 154,  354 => 153,  348 => 152,  344 => 150,  340 => 148,  337 => 147,  331 => 145,  329 => 144,  324 => 143,  322 => 142,  318 => 141,  311 => 137,  305 => 133,  300 => 132,  293 => 128,  279 => 117,  270 => 111,  266 => 110,  256 => 103,  217 => 66,  206 => 64,  202 => 63,  192 => 55,  181 => 53,  177 => 52,  150 => 27,  141 => 24,  138 => 23,  134 => 22,  131 => 21,  122 => 18,  119 => 17,  115 => 16,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/don/new.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\front\\don\\new.html.twig");
    }
}
