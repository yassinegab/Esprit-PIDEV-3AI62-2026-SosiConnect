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

/* @WebProfiler/Profiler/_command_summary.html.twig */
class __TwigTemplate_c912f98db58333fa1835e9ba178bea21 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

        // line 1
        $context["status_code"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0));
        // line 2
        $context["interrupted"] = (((($context["command_collector"] ?? null) === false)) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["command_collector"] ?? null), "interruptedBySignal", [], "any", false, false, false, 2)));
        // line 3
        $context["css_class"] = ((((($context["status_code"] ?? null) == 113) ||  !(null === ($context["interrupted"] ?? null)))) ? ("status-warning") : ((((($context["status_code"] ?? null) > 0)) ? ("status-error") : ("status-success"))));
        // line 4
        yield "
<div class=\"terminal status ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_class"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container\">
        <h2>
            <span class=\"status-request-method\">
                ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 9)), "html", null, true);
        yield "
            </span>

            <span class=\"status-command\">
                ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </span>
        </h2>

        <dl class=\"metadata\">
            ";
        // line 18
        if ((($tmp = ($context["interrupted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                <span class=\"status-response-status-code\">Interrupted</span>
                <dt>Signal</dt>
                <dd class=\"status-response-status-text\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["interrupted"] ?? null), "html", null, true);
            yield "</dd>

                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</dd>
            ";
        } elseif ((        // line 25
($context["status_code"] ?? null) == 0)) {
            // line 26
            yield "                <span class=\"status-response-status-code\">Success</span>
            ";
        } elseif ((        // line 27
($context["status_code"] ?? null) > 0)) {
            // line 28
            yield "                <span class=\"status-response-status-code\">Error</span>
                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\"><span class=\"status-response-status-code\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</span></dd>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 33), "has", ["SYMFONY_CLI_BINARY_NAME"], "method", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                <dt>Symfony CLI</dt>
                <dd>v";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 35), "get", ["SYMFONY_CLI_VERSION"], "method", false, false, false, 35), "html", null, true);
            yield "</dd>
            ";
        }
        // line 37
        yield "
            <dt>Application</dt>
            <dd>
                <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 40), "type" => "command"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 40), "html", null, true);
        yield "</a>
            </dd>

            <dt>Profiled on</dt>
            <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 44), "c"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 44), "r"), "html", null, true);
        yield "</time></dd>

            <dt>Token</dt>
            <dd>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 47), "html", null, true);
        yield "</dd>
        </dl>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/_command_summary.html.twig";
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
        return array (  146 => 47,  138 => 44,  129 => 40,  124 => 37,  119 => 35,  116 => 34,  114 => 33,  111 => 32,  106 => 30,  102 => 28,  100 => 27,  97 => 26,  95 => 25,  91 => 24,  85 => 21,  81 => 19,  79 => 18,  71 => 13,  64 => 9,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Profiler/_command_summary.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\_command_summary.html.twig");
    }
}
