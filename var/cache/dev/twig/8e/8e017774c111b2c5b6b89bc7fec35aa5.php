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

/* admin/aide/support/view.html.twig */
class __TwigTemplate_0f11b8a5a47f19a720f9ab3befa2e355 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/support/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/aide/support/view.html.twig"));

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

        yield "Ticket #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
<style>
.chat-container {
    max-height: 500px;
    overflow-y: auto;
}
.chat-bubble-admin {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 1rem 1rem 0.25rem 1rem;
}
.chat-bubble-user {
    background: #f3f4f6;
    color: #1f2937;
    border-radius: 1rem 1rem 1rem 0.25rem;
}
.action-btn {
    transition: all 0.3s ease;
}
.action-btn:hover {
    transform: translateY(-2px);
}
.status-timeline {
    position: relative;
    padding-left: 24px;
}
.status-timeline::before {
    content: '';
    position: absolute;
    left: 8px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e5e7eb;
}
.status-dot {
    position: absolute;
    left: 0;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: white;
    border: 2px solid #e5e7eb;
}
.status-dot.active {
    background: #3b82f6;
    border-color: #3b82f6;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
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

        // line 58
        yield "<div class=\"space-y-6 animate-fadeIn\" x-data=\"{ showAssignModal: false }\">
    <div class=\"flex items-center justify-between\">
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support");
        yield "\" 
               class=\"w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-xl flex items-center justify-center text-gray-600 transition\">
                ←
            </a>
            <div>
                <div class=\"flex items-center gap-3\">
                    <h1 class=\"text-2xl font-bold text-gray-800\">Ticket #";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
        yield "</h1>
                    <span class=\"px-3 py-1 rounded-full text-sm font-semibold ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "statusBadgeClass", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
                        ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 69) == "open")) {
            yield "🟢 Ouvert
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["ticket"] ?? null), "status", [], "any", false, false, false, 70) == "in_progress")) {
            yield "🟡 En cours
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["ticket"] ?? null), "status", [], "any", false, false, false, 71) == "resolved")) {
            yield "🟢 Résolu
                        ";
        } else {
            // line 72
            yield "⚫ Fermé";
        }
        // line 73
        yield "                    </span>
                    <span class=\"px-3 py-1 rounded-full text-sm font-semibold ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priorityBadgeClass", [], "any", false, false, false, 74), "html", null, true);
        yield "\">
                        ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 75) == "critical")) {
            yield "🔥";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 75) == "high")) {
            yield "⚡";
        } else {
            yield "📌";
        }
        // line 76
        yield "                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 76)), "html", null, true);
        yield "
                    </span>
                </div>
                <p class=\"text-gray-500 mt-1\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
            </div>
        </div>
        <div class=\"flex gap-2\">
            <button onclick=\"window.print()\" class=\"px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl font-medium transition flex items-center gap-2\">
                🖨️ Imprimer
            </button>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
        <div class=\"lg:col-span-2 space-y-6\">
            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden\">
                <div class=\"p-4 bg-gradient-to-r from-blue-50 to-indigo-50 border-b border-gray-100\">
                    <div class=\"flex items-center gap-3\">
                        <div class=\"w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white text-xl font-bold\">
                            ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "userName", [], "any", false, false, false, 95))), "html", null, true);
        yield "
                        </div>
                        <div>
                            <p class=\"font-bold text-gray-800\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "userName", [], "any", false, false, false, 98), "html", null, true);
        yield "</p>
                            <p class=\"text-sm text-gray-500\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "userEmail", [], "any", false, false, false, 99), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"ml-auto text-right\">
                            <p class=\"text-sm text-gray-500\">Créé le</p>
                            <p class=\"font-medium text-gray-800\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "createdAt", [], "any", false, false, false, 103), "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>

                <div class=\"chat-container p-6 space-y-4\">
                    <div class=\"flex gap-3\">
                        <div class=\"w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-sm flex-shrink-0\">
                            👤
                        </div>
                        <div class=\"flex-1\">
                            <div class=\"flex items-center gap-2 mb-1\">
                                <span class=\"font-medium text-gray-800\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "userName", [], "any", false, false, false, 115), "html", null, true);
        yield "</span>
                                <span class=\"text-xs text-gray-400\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "createdAt", [], "any", false, false, false, 116), "H:i"), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"chat-bubble-user p-4\">
                                <p class=\"whitespace-pre-wrap\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "description", [], "any", false, false, false, 119), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 125
            yield "                    <div class=\"flex gap-3 ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("flex-row-reverse") : (""));
            yield "\">
                        <div class=\"w-8 h-8 ";
            // line 126
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-purple-100") : ("bg-blue-100"));
            yield " rounded-full flex items-center justify-center text-sm flex-shrink-0\">
                            ";
            // line 127
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("🎧") : ("👤"));
            yield "
                        </div>
                        <div class=\"flex-1 ";
            // line 129
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-right") : (""));
            yield "\">
                            <div class=\"flex items-center gap-2 mb-1 ";
            // line 130
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("justify-end") : (""));
            yield "\">
                                <span class=\"text-xs text-gray-400\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 131), "H:i"), "html", null, true);
            yield "</span>
                                <span class=\"font-medium text-gray-800\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "senderName", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>
                                ";
            // line 133
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                                <span class=\"text-xs bg-purple-100 text-purple-700 px-2 py-0.5 rounded-full\">Staff</span>
                                ";
            }
            // line 136
            yield "                            </div>
                            <div class=\"";
            // line 137
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "isFromAdmin", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("chat-bubble-admin") : ("chat-bubble-user"));
            yield " p-4 inline-block text-left max-w-md\">
                                <p class=\"whitespace-pre-wrap\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 138), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "                </div>
            </div>

            ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 146) != "closed")) {
            // line 147
            yield "            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-xl\">💬</span> Répondre
                </h3>
                <form method=\"post\">
                    <textarea name=\"message\" rows=\"4\" required
                              class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none\"
                              placeholder=\"Écrivez votre réponse au client...\"></textarea>
                    <div class=\"flex justify-between items-center mt-4\">
                        <div class=\"flex gap-2\">
                            <button type=\"button\" class=\"px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm transition\">
                                📎 Joindre
                            </button>
                            <button type=\"button\" class=\"px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm transition\">
                                📝 Template
                            </button>
                        </div>
                        <button type=\"submit\" class=\"px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white rounded-xl font-semibold transition shadow-lg flex items-center gap-2\">
                            📤 Envoyer la réponse
                        </button>
                    </div>
                </form>
            </div>
            ";
        } else {
            // line 171
            yield "            <div class=\"bg-gradient-to-r from-gray-100 to-gray-200 rounded-2xl p-6 text-center\">
                <div class=\"text-4xl mb-2\">🔒</div>
                <p class=\"text-gray-600 font-medium\">Ce ticket est fermé</p>
                <p class=\"text-gray-500 text-sm\">Vous ne pouvez plus envoyer de messages</p>
            </div>
            ";
        }
        // line 177
        yield "        </div>

        <div class=\"space-y-6\">
            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-xl\">📊</span> Statut du ticket
                </h3>
                <form method=\"post\" action=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 184)]), "html", null, true);
        yield "\">
                    <div class=\"space-y-3\">
                        ";
        // line 186
        $context["statuses"] = [["value" => "open", "label" => "Ouvert", "icon" => "🟢", "desc" => "Nouveau ticket"], ["value" => "in_progress", "label" => "En cours", "icon" => "🟡", "desc" => "En traitement"], ["value" => "resolved", "label" => "Résolu", "icon" => "✅", "desc" => "Problème résolu"], ["value" => "closed", "label" => "Fermé", "icon" => "⚫", "desc" => "Archivé"]];
        // line 192
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 193
            yield "                        <label class=\"flex items-center gap-3 p-3 rounded-xl cursor-pointer transition
                                     ";
            // line 194
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 194) == CoreExtension::getAttribute($this->env, $this->source, $context["status"], "value", [], "any", false, false, false, 194))) ? ("bg-blue-50 border-2 border-blue-500") : ("bg-gray-50 border-2 border-transparent hover:bg-gray-100"));
            yield "\">
                            <input type=\"radio\" name=\"status\" value=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "value", [], "any", false, false, false, 195), "html", null, true);
            yield "\" 
                                   ";
            // line 196
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 196) == CoreExtension::getAttribute($this->env, $this->source, $context["status"], "value", [], "any", false, false, false, 196))) ? ("checked") : (""));
            yield " class=\"hidden\">
                            <span class=\"text-xl\">";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "icon", [], "any", false, false, false, 197), "html", null, true);
            yield "</span>
                            <div class=\"flex-1\">
                                <p class=\"font-medium text-gray-800\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "label", [], "any", false, false, false, 199), "html", null, true);
            yield "</p>
                                <p class=\"text-xs text-gray-500\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "desc", [], "any", false, false, false, 200), "html", null, true);
            yield "</p>
                            </div>
                            ";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 202) == CoreExtension::getAttribute($this->env, $this->source, $context["status"], "value", [], "any", false, false, false, 202))) {
                // line 203
                yield "                            <span class=\"text-blue-500\">✓</span>
                            ";
            }
            // line 205
            yield "                        </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                    </div>
                    <button type=\"submit\" class=\"w-full mt-4 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition\">
                        Mettre à jour
                    </button>
                </form>
            </div>

            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-xl\">👤</span> Assignation
                </h3>
                ";
        // line 218
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "                <div class=\"flex items-center gap-3 mb-4 p-3 bg-purple-50 rounded-xl\">
                    <div class=\"w-10 h-10 bg-purple-200 rounded-full flex items-center justify-center text-purple-700 font-bold\">
                        ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 221))), "html", null, true);
            yield "
                    </div>
                    <div>
                        <p class=\"font-medium text-gray-800\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 224), "html", null, true);
            yield "</p>
                        <p class=\"text-xs text-gray-500\">Agent assigné</p>
                    </div>
                </div>
                ";
        }
        // line 229
        yield "                <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support_assign", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 229)]), "html", null, true);
        yield "\">
                    <input type=\"text\" name=\"assignedTo\" 
                           value=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 231), "html", null, true);
        yield "\"
                           placeholder=\"Nom de l'agent...\"
                           class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 mb-3\">
                    <button type=\"submit\" class=\"w-full py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-semibold transition\">
                        ";
        // line 235
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignedTo", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Réassigner") : ("Assigner"));
        yield "
                    </button>
                </form>
            </div>

            <div class=\"bg-white rounded-2xl shadow-lg border border-gray-100 p-6\">
                <h3 class=\"font-bold text-gray-800 mb-4 flex items-center gap-2\">
                    <span class=\"text-xl\">📋</span> Détails
                </h3>
                <div class=\"space-y-4\">
                    <div class=\"flex justify-between items-center py-2 border-b border-gray-100\">
                        <span class=\"text-gray-500\">Catégorie</span>
                        <span class=\"font-medium text-gray-800 bg-gray-100 px-3 py-1 rounded-lg\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "category", [], "any", false, false, false, 247), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between items-center py-2 border-b border-gray-100\">
                        <span class=\"text-gray-500\">Priorité</span>
                        <span class=\"px-3 py-1 rounded-lg ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priorityBadgeClass", [], "any", false, false, false, 251), "html", null, true);
        yield " font-medium\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 251)), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between items-center py-2 border-b border-gray-100\">
                        <span class=\"text-gray-500\">Créé le</span>
                        <span class=\"font-medium text-gray-800\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "createdAt", [], "any", false, false, false, 255), "d/m/Y"), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 257
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "resolvedAt", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 258
            yield "                    <div class=\"flex justify-between items-center py-2 border-b border-gray-100\">
                        <span class=\"text-gray-500\">Résolu le</span>
                        <span class=\"font-medium text-green-600\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "resolvedAt", [], "any", false, false, false, 260), "d/m/Y"), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 263
        yield "                    <div class=\"flex justify-between items-center py-2\">
                        <span class=\"text-gray-500\">Messages</span>
                        <span class=\"font-medium text-gray-800\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 265)), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>

            <div class=\"bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl p-6 border border-red-100\">
                <h3 class=\"font-bold text-red-800 mb-3 flex items-center gap-2\">
                    <span class=\"text-xl\">⚠️</span> Zone de danger
                </h3>
                <p class=\"text-red-600 text-sm mb-4\">La suppression est irréversible. Toutes les données seront perdues.</p>
                <form method=\"post\" action=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_support_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 275)]), "html", null, true);
        yield "\"
                      onsubmit=\"return confirm('⚠️ Êtes-vous sûr de vouloir supprimer ce ticket ? Cette action est irréversible.');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 277))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"w-full py-3 bg-red-600 hover:bg-red-700 text-white rounded-xl font-semibold transition flex items-center justify-center gap-2\">
                        🗑️ Supprimer le ticket
                    </button>
                </form>
            </div>
        </div>
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
        return "admin/aide/support/view.html.twig";
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
        return array (  583 => 277,  578 => 275,  565 => 265,  561 => 263,  555 => 260,  551 => 258,  549 => 257,  544 => 255,  535 => 251,  528 => 247,  513 => 235,  506 => 231,  500 => 229,  492 => 224,  486 => 221,  482 => 219,  480 => 218,  467 => 207,  460 => 205,  456 => 203,  454 => 202,  449 => 200,  445 => 199,  440 => 197,  436 => 196,  432 => 195,  428 => 194,  425 => 193,  420 => 192,  418 => 186,  413 => 184,  404 => 177,  396 => 171,  370 => 147,  368 => 146,  363 => 143,  352 => 138,  348 => 137,  345 => 136,  341 => 134,  339 => 133,  335 => 132,  331 => 131,  327 => 130,  323 => 129,  318 => 127,  314 => 126,  309 => 125,  305 => 124,  297 => 119,  291 => 116,  287 => 115,  272 => 103,  265 => 99,  261 => 98,  255 => 95,  236 => 79,  229 => 76,  221 => 75,  217 => 74,  214 => 73,  211 => 72,  206 => 71,  202 => 70,  198 => 69,  194 => 68,  190 => 67,  181 => 61,  176 => 58,  163 => 57,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/aide/support/view.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\admin\\aide\\support\\view.html.twig");
    }
}
