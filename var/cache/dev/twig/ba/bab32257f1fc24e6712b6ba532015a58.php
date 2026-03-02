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

/* admin/don/index.html.twig */
class __TwigTemplate_ebed323079cd752fc0fa770d043f0a22 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/don/index.html.twig"));

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

        yield "Module Don";
        
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
                <span class=\"text-4xl\">🩸</span> Module Don
            </h1>
            <p class=\"text-gray-500 mt-1\">Gestion hospitalière des dons, donneurs et demandes</p>
        </div>
        <div class=\"flex gap-3\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching");
        yield "\" class=\"btn btn-primary\">
                🔗 Matching
            </a>
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list");
        yield "\" class=\"btn btn-secondary\">
                📋 Voir les dons
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-6\">
        <div class=\"stat-card primary hover-lift cursor-pointer\" onclick=\"window.location='";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list");
        yield "'\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Total dons</p>
                    <p class=\"stat-value\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">📊</div>
            </div>
            <div class=\"mt-3 text-xs text-gray-500\">Cliquez pour voir →</div>
        </div>

        <div class=\"stat-card success hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Validés</p>
                    <p class=\"stat-value\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "valides", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">✅</div>
            </div>
            <div class=\"mt-3 h-1 bg-green-200 rounded\">
                <div class=\"h-full bg-green-500 rounded\" style=\"width: ";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 50) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "valides", [], "any", false, false, false, 50) / CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 50)) * 100)), "html", null, true)) : (0));
        yield "%\"></div>
            </div>
        </div>

        <div class=\"stat-card danger hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">Refusés</p>
                    <p class=\"stat-value\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "refuses", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">❌</div>
            </div>
            <div class=\"mt-3 h-1 bg-red-200 rounded\">
                <div class=\"h-full bg-red-500 rounded\" style=\"width: ";
        // line 63
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 63) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "refuses", [], "any", false, false, false, 63) / CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 63)) * 100)), "html", null, true)) : (0));
        yield "%\"></div>
            </div>
        </div>

        <div class=\"stat-card warning hover-lift\">
            <div class=\"flex justify-between items-start\">
                <div>
                    <p class=\"stat-label\">En attente</p>
                    <p class=\"stat-value text-yellow-600\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "attente", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
                </div>
                <div class=\"text-3xl\">⏳</div>
            </div>
            ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "attente", [], "any", false, false, false, 75) > 0)) {
            // line 76
            yield "            <div class=\"mt-3 flex items-center gap-2\">
                <span class=\"pulse-dot bg-yellow-500\"></span>
                <span class=\"text-xs text-yellow-600 font-medium\">Action requise</span>
            </div>
            ";
        }
        // line 81
        yield "        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"font-semibold flex items-center gap-2\">
                    <span>📈</span> Répartition par statut
                </h2>
            </div>
            <div class=\"card-body\">
                <canvas id=\"statutChart\" height=\"200\"></canvas>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"font-semibold flex items-center gap-2\">
                    <span>🩸</span> Types de dons
                </h2>
            </div>
            <div class=\"card-body\">
                <canvas id=\"typeChart\" height=\"200\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_donneurs");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-purple-200 transition\">
                        👤
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-purple-600\">Donneurs</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer les donneurs et disponibilité</p>
                    </div>
                </div>
                <div class=\"mt-4 text-purple-600 font-semibold text-sm group-hover:text-purple-700\">
                    Accéder →
                </div>
            </div>
        </a>

        <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-red-200 transition\">
                        🧾
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-red-600\">Dons déclarés</h3>
                        <p class=\"text-gray-500 text-sm\">Valider, refuser ou supprimer</p>
                    </div>
                </div>
                <div class=\"mt-4 text-red-600 font-semibold text-sm group-hover:text-red-700\">
                    Accéder →
                </div>
            </div>
        </a>

        <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demandes");
        yield "\" class=\"card group hover:shadow-xl transition-all duration-300 hover:-translate-y-1\">
            <div class=\"card-body\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-3xl group-hover:bg-blue-200 transition\">
                        📥
                    </div>
                    <div>
                        <h3 class=\"font-semibold text-blue-600\">Demandes</h3>
                        <p class=\"text-gray-500 text-sm\">Gérer les demandes de don</p>
                    </div>
                </div>
                <div class=\"mt-4 text-blue-600 font-semibold text-sm group-hover:text-blue-700\">
                    Accéder →
                </div>
            </div>
        </a>
    </div>

    ";
        // line 161
        if ((array_key_exists("recentDons", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recentDons"] ?? null)) > 0))) {
            // line 162
            yield "    <div class=\"card\">
        <div class=\"card-header flex justify-between items-center\">
            <h3 class=\"font-semibold flex items-center gap-2 text-gray-800\">
                <span>🕐</span> Dons récents
            </h3>
            <a href=\"";
            // line 167
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_don_list");
            yield "\" class=\"text-sm text-indigo-600 hover:text-indigo-700\">
                Voir tout →
            </a>
        </div>
        <div class=\"divide-y\">
            ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recentDons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
                // line 173
                yield "            <div class=\"p-4 hover:bg-gray-50 transition\">
                <div class=\"flex justify-between items-center\">
                    <div class=\"flex items-center gap-4\">
                        <div class=\"w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-2xl\">
                            ";
                // line 177
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 177) == "sang")) ? ("🩸") : ("🫀"));
                yield "
                        </div>
                        <div>
                            <div class=\"font-medium text-gray-800\">";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["don"], "typeDon", [], "any", false, false, false, 180)), "html", null, true);
                yield "</div>
                            <div class=\"text-sm text-gray-500\">";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "region", [], "any", false, false, false, 181), "html", null, true);
                yield "</div>
                        </div>
                    </div>
                    <div class=\"flex items-center gap-3\">
                        ";
                // line 185
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["don"], "urgence", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 186
                    yield "                        <span class=\"badge bg-orange-100 text-orange-700\">URGENT</span>
                        ";
                }
                // line 188
                yield "                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusBadgeClass", [], "any", false, false, false, 188), "html", null, true);
                yield "\">
                            ";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statusIcon", [], "any", false, false, false, 189), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "statut", [], "any", false, false, false, 189), "html", null, true);
                yield "
                        </span>
                        <span class=\"text-sm text-gray-400\">";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["don"], "dateDon", [], "any", false, false, false, 191), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['don'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "        </div>
    </div>
    ";
        }
        // line 199
        yield "
    <div class=\"card bg-gradient-to-r from-indigo-50 to-purple-50 border-indigo-200\">
        <div class=\"card-body\">
            <div class=\"flex items-center gap-4\">
                <div class=\"text-4xl\">🔗</div>
                <div class=\"flex-1\">
                    <h3 class=\"font-semibold text-indigo-800\">Matching Intelligent</h3>
                    <p class=\"text-sm text-indigo-600\">
                        Trouvez automatiquement les meilleurs donneurs pour les demandes urgentes.
                    </p>
                </div>
                <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matching");
        yield "\" class=\"btn btn-primary\">
                    Lancer le matching
                </a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 219
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

        // line 220
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
const statutCtx = document.getElementById('statutChart');
if (statutCtx) {
    new Chart(statutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Validés', 'Refusés', 'En attente'],
            datasets: [{
                data: [";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "valides", [], "any", false, false, false, 230), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "refuses", [], "any", false, false, false, 230), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "attente", [], "any", false, false, false, 230), "html", null, true);
        yield "],
                backgroundColor: ['#10b981', '#ef4444', '#f59e0b'],
                borderWidth: 0,
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            cutout: '65%',
            plugins: {
                legend: { 
                    position: 'bottom',
                    labels: { padding: 20, usePointStyle: true }
                }
            }
        }
    });
}

const typeCtx = document.getElementById('typeChart');
if (typeCtx) {
    new Chart(typeCtx, {
        type: 'bar',
        data: {
            labels: ['Sang', 'Organe'],
            datasets: [{
                label: 'Nombre de dons',
                data: [";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "sang", [], "any", false, false, false, 257), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "organe", [], "any", false, false, false, 257), "html", null, true);
        yield "],
                backgroundColor: ['#dc2626', '#8b5cf6'],
                borderRadius: 8,
                barThickness: 40
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, grid: { display: false } },
                x: { grid: { display: false } }
            }
        }
    });
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
        return "admin/don/index.html.twig";
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
        return array (  492 => 257,  458 => 230,  445 => 220,  432 => 219,  413 => 210,  400 => 199,  395 => 196,  384 => 191,  377 => 189,  372 => 188,  368 => 186,  366 => 185,  359 => 181,  355 => 180,  349 => 177,  343 => 173,  339 => 172,  331 => 167,  324 => 162,  322 => 161,  301 => 143,  281 => 126,  261 => 109,  231 => 81,  224 => 76,  222 => 75,  215 => 71,  204 => 63,  196 => 58,  185 => 50,  177 => 45,  163 => 34,  156 => 30,  146 => 23,  140 => 20,  129 => 11,  116 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/don/index.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\don\\index.html.twig");
    }
}
