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

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_c1557a37d4e15780ba4186daf5c7a2df extends Template
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
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'panelContent' => [$this, 'block_panelContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #timeline-control {
            background: var(--table-background);
            box-shadow: var(--shadow);
            margin: 1em 0;
            padding: 10px;
        }
        #timeline-control label {
            font-weight: bold;
            margin-right: 1em;
        }
        #timeline-control input {
            background: var(--metric-value-background);
            font-size: 16px;
            padding: 4px;
            text-align: right;
            width: 5em;
        }
        #timeline-control .help {
            margin-left: 1em;
        }

        .sf-profiler-timeline .legends {
            font-size: 12px;
            line-height: 1.5em;
        }
        .sf-profiler-timeline .legends button {
            color: var(--color-text);
        }
        .sf-profiler-timeline + p.help {
            margin-top: 0;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 42
        yield "    ";
        $context["has_time_events"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 42)) > 0);
        // line 43
        yield "    ";
        $context["total_time"] = (((($tmp = ($context["has_time_events"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 43))) : ("n/a"));
        // line 44
        yield "    ";
        $context["initialization_time"] = (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 44))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 44))) : ("n/a"));
        // line 45
        yield "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 45) > 1000))) ? ("yellow") : (""));
        // line 46
        yield "
    ";
        // line 47
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 48
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/time.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_time"] ?? null), "html", null, true);
            yield "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "
    ";
        // line 53
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_time"] ?? null), "html", null, true);
            yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initialization_time"] ?? null), "html", null, true);
            yield " ms</span>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "
    ";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 69
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/time.svg");
        yield "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 75
        yield "    ";
        $context["has_time_events"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 75)) > 0);
        // line 76
        yield "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 81)), "html", null, true);
        yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total execution time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 86)), "html", null, true);
        yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Symfony initialization</span>
            </div>
        </div>

        ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 91), "memory", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 95), "memory", [], "any", false, false, false, 95), "memory", [], "any", false, false, false, 95) / 1024) / 1024)), "html", null, true);
            yield " <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 99
        yield "
        ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 105)), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sub-";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["profile_type"] ?? null)), "html", null, true);
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 106)) > 1)) ? ("s") : (""));
            yield "</span>
                </div>

                ";
            // line 109
            $context["subrequests_time"] = (((($tmp = ($context["has_time_events"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["profile"] ?? null), "children", [], "any", false, false, false, 110), function ($__total__, $__child__) use ($context, $macros) { $context["total"] = $__total__; $context["child"] = $__child__; return (($context["total"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "getcollector", ["time"], "method", false, false, false, 110), "events", [], "any", false, false, false, 110), "__section__", [], "any", false, false, false, 110), "duration", [], "any", false, false, false, 110)); }, 0)) : ("n/a"));
            // line 112
            yield "
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subrequests_time"] ?? null), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Sub-";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["profile_type"] ?? null)), "html", null, true);
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 115)) > 1)) ? ("s") : (""));
            yield " time</span>
                </div>
            </div>
        ";
        }
        // line 119
        yield "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 123
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isStopwatchInstalled", [], "method", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "        <div class=\"empty empty-panel\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["collector"] ?? null), "events", [], "any", false, false, false, 127))) {
            // line 128
            yield "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 132
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("panelContent", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panelContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 137
        yield "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 144
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "        <h3 class=\"dump-inline\">
            Sub-";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["profile_type"] ?? null)), "html", null, true);
            yield " ";
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", ["request"], "method", false, false, false, 146), "requestattributes", [], "any", false, false, false, 146), "get", ["_controller"], "method", false, false, false, 146));
            yield "
            <small>
                ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 148), "__section__", [], "any", false, false, false, 148), "duration", [], "any", false, false, false, 148), "html", null, true);
            yield " ms
                <a class=\"newline\" href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 149), "token", [], "any", false, false, false, 149), "panel" => "time"]), "html", null, true);
            yield "\">Return to parent ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profile_type"] ?? null), "html", null, true);
            yield "</a>
            </small>
        </h3>
    ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 152
($context["profile"] ?? null), "children", [], "any", false, false, false, 152)) > 0)) {
            // line 153
            yield "        <h3>
            Main ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ($context["profile_type"] ?? null)), "html", null, true);
            yield " <small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 154), "__section__", [], "any", false, false, false, 154), "duration", [], "any", false, false, false, 154), "html", null, true);
            yield " ms</small>
        </h3>
    ";
        }
        // line 157
        yield "
    ";
        // line 158
        yield $this->getTemplateForMacro("macro_display_timeline", $context, 158, $this->getSourceContext())->macro_display_timeline(...[($context["token"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 158), "__section__", [], "any", false, false, false, 158), "origin", [], "any", false, false, false, 158)]);
        yield "

    ";
        // line 160
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 160))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "        <p class=\"help\">Note: sections with a striped background correspond to sub-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profile_type"] ?? null), "html", null, true);
            yield "s.</p>

        <h3>Sub-";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profile_type"] ?? null), "html", null, true);
            yield "s <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 163)), "html", null, true);
            yield ")</small></h3>

        ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 165));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 166
                yield "            ";
                $context["events"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["time"], "method", false, false, false, 166), "events", [], "any", false, false, false, 166);
                // line 167
                yield "            <h4>
                <a href=\"";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 168), "panel" => "time"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 168), "identifier", [], "any", false, false, false, 168), "html", null, true);
                yield "</a>
                <small>";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 169), "duration", [], "any", false, false, false, 169), "html", null, true);
                yield " ms</small>
            </h4>

            ";
                // line 172
                yield $this->getTemplateForMacro("macro_display_timeline", $context, 172, $this->getSourceContext())->macro_display_timeline(...[CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 172), ($context["events"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 172), "__section__", [], "any", false, false, false, 172), "origin", [], "any", false, false, false, 172)]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            yield "    ";
        }
        // line 175
        yield "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style>
";
        // line 184
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Collector/time.css.twig");
        yield "
</style>
<script>
";
        // line 187
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Collector/time.js");
        yield "
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
    public function macro_dump_request_data($token = null, $events = null, $origin = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "token" => $token,
            "events" => $events,
            "origin" => $origin,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 193
            yield "{
    id: \"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "js", null, true);
            yield "\",
    left: ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 195), "origin", [], "any", false, false, false, 195) - ($context["origin"] ?? null))), "js", null, true);
            yield ",
    end: \"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 196), "endtime", [], "any", false, false, false, 196)), "js", null, true);
            yield "\",
    events: [ ";
            // line 197
            yield $this->getTemplateForMacro("macro_dump_events", $context, 197, $this->getSourceContext())->macro_dump_events(...[($context["events"] ?? null)]);
            yield " ],
}
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 202
    public function macro_dump_events($events = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "events" => $events,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 205
                if (("__section__" != $context["name"])) {
                    // line 206
                    yield "{
    name: \"";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "js", null, true);
                    yield "\",
    category: \"";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, false, 208), "js", null, true);
                    yield "\",
    origin: ";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, false, 209)), "js", null, true);
                    yield ",
    starttime: ";
                    // line 210
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, false, 210)), "js", null, true);
                    yield ",
    endtime: ";
                    // line 211
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, false, 211)), "js", null, true);
                    yield ",
    duration: ";
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 212)), "js", null, true);
                    yield ",
    memory: ";
                    // line 213
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.1F", ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, false, 213) / 1024) / 1024)), "js", null, true);
                    yield ",
    elements: {},
    periods: [";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, false, 216));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 217
                        yield "{
            start: ";
                        // line 218
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, false, 218)), "js", null, true);
                        yield ",
            end: ";
                        // line 219
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, false, 219)), "js", null, true);
                        yield ",
            duration: ";
                        // line 220
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, false, 220)), "js", null, true);
                        yield ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['period'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    yield "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function macro_display_timeline($token = null, $events = null, $origin = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "token" => $token,
            "events" => $events,
            "origin" => $origin,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 232
            yield "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 236
            yield "            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "js", null, true);
            yield "')),
                    new Legend(document.getElementById('legend-";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "js", null, true);
            yield "'), theme),
                    document.getElementById('threshold'),
                    ";
            // line 244
            yield $this->getTemplateForMacro("macro_dump_request_data", $context, 244, $this->getSourceContext())->macro_dump_request_data(...[($context["token"] ?? null), ($context["events"] ?? null), ($context["origin"] ?? null)]);
            yield "
                );
            });
        ";
            // line 247
            yield "</script>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/time.html.twig";
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
        return array (  718 => 247,  712 => 244,  707 => 242,  703 => 241,  696 => 236,  692 => 234,  688 => 233,  685 => 232,  665 => 231,  646 => 224,  637 => 220,  633 => 219,  629 => 218,  626 => 217,  622 => 216,  617 => 213,  613 => 212,  609 => 211,  605 => 210,  601 => 209,  597 => 208,  593 => 207,  590 => 206,  588 => 205,  584 => 204,  566 => 202,  551 => 197,  547 => 196,  543 => 195,  539 => 194,  536 => 193,  516 => 191,  502 => 187,  496 => 184,  485 => 175,  482 => 174,  474 => 172,  468 => 169,  462 => 168,  459 => 167,  456 => 166,  452 => 165,  445 => 163,  439 => 161,  437 => 160,  432 => 158,  429 => 157,  421 => 154,  418 => 153,  416 => 152,  408 => 149,  404 => 148,  397 => 146,  394 => 145,  392 => 144,  383 => 137,  370 => 136,  355 => 132,  349 => 128,  347 => 127,  342 => 124,  340 => 123,  334 => 119,  326 => 115,  322 => 114,  318 => 112,  316 => 110,  315 => 109,  308 => 106,  304 => 105,  298 => 101,  296 => 100,  293 => 99,  286 => 95,  281 => 92,  279 => 91,  271 => 86,  263 => 81,  256 => 76,  253 => 75,  240 => 74,  225 => 69,  222 => 68,  209 => 67,  196 => 64,  193 => 63,  186 => 60,  179 => 56,  175 => 54,  173 => 53,  170 => 52,  163 => 49,  158 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  128 => 41,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/time.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\time.html.twig");
    }
}
