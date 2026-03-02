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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_30386e7e2db921fb0f9b76e866e1cbd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

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
        .config-symfony-version-lts {
            border: 0;
            color: var(--color-muted);
            font-size: 21px;
            line-height: 33px;
        }
        .config-symfony-version-lts[title] {
            text-decoration: none;
        }
        .config-symfony-version-status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .config-symfony-version-status-badge.status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .config-symfony-version-status-badge.status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .config-symfony-version-status-badge.status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .config-symfony-version-roadmap-link {
            display: inline-block;
            margin: 10px 5px 5px;
        }
        .config-symfony-eol {
            margin-top: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "    ";
        if (("unknown" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 50))) {
            // line 51
            yield "        ";
            $context["block_status"] = "";
            // line 52
            yield "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 53
            yield "    ";
        } elseif (("eol" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 53))) {
            // line 54
            yield "        ";
            $context["block_status"] = "red";
            // line 55
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 56
            yield "    ";
        } elseif (("eom" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 56))) {
            // line 57
            yield "        ";
            $context["block_status"] = "yellow";
            // line 58
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 59
            yield "    ";
        } elseif (("dev" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 59))) {
            // line 60
            yield "        ";
            $context["block_status"] = "yellow";
            // line 61
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 62
            yield "    ";
        } else {
            // line 63
            yield "        ";
            $context["block_status"] = "";
            // line 64
            yield "        ";
            $context["symfony_version_status"] = "";
            // line 65
            yield "    ";
        }
        // line 66
        yield "
    ";
        // line 67
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "        <span class=\"sf-toolbar-label\">
            ";
            // line 69
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
            yield "
        </span>
        <span class=\"sf-toolbar-value\">";
            // line 71
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 71), "html", null, true)) : ("n/a"));
            yield "</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "
    ";
        // line 74
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
            // line 79
            if ((($tmp = ($context["profiler_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profiler_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 80), "html", null, true);
                yield "</a>
                    ";
            } else {
                // line 82
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 82), "html", null, true);
                yield "
                    ";
            }
            // line 84
            yield "                </span>
            </div>

            ";
            // line 87
            if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 87))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 90), "html", null, true);
                yield "</span>
                </div>
            ";
            }
            // line 93
            yield "
            ";
            // line 94
            if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 97
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("red"));
                yield "\">";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("enabled") : ("disabled"));
                yield "</span>
                </div>
            ";
            }
            // line 100
            yield "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
            // line 105
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 105) . CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 105)), "html", null, true);
                yield "\"";
            }
            yield ">
                    ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 106), "html", null, true);
            yield "
                    &nbsp; <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
            yield "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
            // line 113
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 114
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_xdebug");
                yield "\" title=\"View xdebug_info()\">
                ";
            }
            // line 116
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("gray"));
            yield "\">Xdebug ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebug", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("✗"));
            yield "</span>
                ";
            // line 117
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasXdebugInfo", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "                    </a>
                ";
            }
            // line 120
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("gray"));
            yield "\">APCu ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("✗"));
            yield "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 121
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("red"));
            yield "\">OPcache ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✓") : ("✗"));
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sapiName", [], "any", false, false, false, 126), "html", null, true);
            yield "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 131)) {
                // line 132
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 135), "html", null, true);
                yield "/index.html\" rel=\"help\">
                            Read Symfony ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 136), "html", null, true);
                yield " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
            }
            // line 149
            yield "        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "
    ";
        // line 152
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => ($context["block_status"] ?? null), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? null)) . "\"")]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
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

        // line 156
        yield "    <span class=\"label label-status-";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 156) == "eol")) ? ("red") : (((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", false, false, false, 156), ["eom", "dev"])) ? ("yellow") : (""))));
        yield "\">
        <span class=\"icon\">";
        // line 157
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/config.svg");
        yield "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 162
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

        // line 163
        yield "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">
                ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 168), "html", null, true);
        yield "

                ";
        // line 170
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "                    <abbr class=\"config-symfony-version-lts\" title=\"This is a Long-Term Support version\">(LTS)</abbr>
                ";
        }
        // line 173
        yield "            </span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 177
        if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 177))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "env", [], "any", false, false, false, 179), "html", null, true);
            yield "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 183
        yield "
        ";
        // line 184
        if ((($tmp =  !("n/a" === CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 184))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 186
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "debug", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("enabled") : ("disabled"));
            yield "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 190
        yield "    </div>

    ";
        // line 192
        $context["symfony_status"] = ["dev" => "In Development", "stable" => "Maintained", "eom" => "Security Fixes Only", "eol" => "Unmaintained"];
        // line 193
        yield "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 194
        yield "
    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">
                    <span class=\"config-symfony-version-status-badge status-";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["symfony_status_class"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 199)] ?? null) : null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($_v1 = ($context["symfony_status"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 199)] ?? null) : null)), "html", null, true);
        yield "</span>
                </span>
                <span class=\"label\">Your Symfony version status</span>
            </div>

            ";
        // line 204
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "                <div class=\"metric\">
                    <span class=\"value config-symfony-eol\">
                        ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeom", [], "any", false, false, false, 207), "html", null, true);
            yield "
                    </span>
                    <span class=\"label\">Bug fixes ";
            // line 209
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 209), ["eom", "eol"])) ? ("ended on") : ("until"));
            yield "</span>
                </div>
            ";
        }
        // line 212
        yield "
            <div class=\"metric\">
                <span class=\"value config-symfony-eol\">
                    ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyeol", [], "any", false, false, false, 215), "html", null, true);
        yield "
                </span>
                <span class=\"label\">
                    ";
        // line 218
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonylts", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Security fixes") : ("Bug fixes and security fixes"));
        yield "
                    ";
        // line 219
        yield ((("eol" == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonystate", [], "any", false, false, false, 219))) ? ("ended on") : ("until"));
        yield "</span>
            </div>
        </div>
    </div>

    <a class=\"config-symfony-version-roadmap-link\" href=\"https://symfony.com/releases/";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyminorversion", [], "any", false, false, false, 224), "html", null, true);
        yield "\">View Symfony ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", false, false, false, 224), "html", null, true);
        yield " release details</a>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversion", [], "any", false, false, false, 230), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <span class=\"unit\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpversionextra", [], "any", false, false, false, 230), "html", null, true);
            yield "</span>";
        }
        yield "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phparchitecture", [], "any", false, false, false, 235), "html", null, true);
        yield " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phpintllocale", [], "any", false, false, false, 240), "html", null, true);
        yield "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "phptimezone", [], "any", false, false, false, 245), "html", null, true);
        yield "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 253
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("value-shows-no-color") : (""));
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "haszendopcache", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">OPcache</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 258
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("value-shows-no-color") : (""));
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasapcu", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">APCu</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 263
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("value-shows-no-color") : (""));
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "hasxdebug", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">Xdebug</span>
            </div>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        yield "\">View full PHP configuration</a>
    </p>

    ";
        // line 273
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 274
            yield "        <h2>Enabled Bundles <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 274)), "html", null, true);
            yield ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 283))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 284
                yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "</th>
                    <td class=\"font-normal\">";
                // line 286
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "bundles", [], "any", false, false, false, 286)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["name"]] ?? null) : null));
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['name'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            yield "            </tbody>
        </table>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/config.html.twig";
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
        return array (  685 => 289,  676 => 286,  672 => 285,  669 => 284,  665 => 283,  652 => 274,  650 => 273,  644 => 270,  632 => 263,  622 => 258,  612 => 253,  601 => 245,  593 => 240,  585 => 235,  572 => 230,  561 => 224,  553 => 219,  549 => 218,  543 => 215,  538 => 212,  532 => 209,  527 => 207,  523 => 205,  521 => 204,  511 => 199,  504 => 194,  501 => 193,  499 => 192,  495 => 190,  488 => 186,  485 => 185,  483 => 184,  480 => 183,  473 => 179,  470 => 178,  468 => 177,  462 => 173,  458 => 171,  456 => 170,  451 => 168,  444 => 163,  431 => 162,  416 => 157,  411 => 156,  398 => 155,  385 => 152,  382 => 151,  377 => 149,  361 => 136,  357 => 135,  352 => 132,  350 => 131,  342 => 126,  332 => 121,  325 => 120,  321 => 118,  319 => 117,  312 => 116,  306 => 114,  304 => 113,  295 => 107,  291 => 106,  283 => 105,  276 => 100,  268 => 97,  264 => 95,  262 => 94,  259 => 93,  253 => 90,  249 => 88,  247 => 87,  242 => 84,  236 => 82,  228 => 80,  226 => 79,  220 => 75,  218 => 74,  215 => 73,  209 => 71,  204 => 69,  201 => 68,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  187 => 63,  184 => 62,  181 => 61,  178 => 60,  175 => 59,  172 => 58,  169 => 57,  166 => 56,  163 => 55,  160 => 54,  157 => 53,  154 => 52,  151 => 51,  148 => 50,  135 => 49,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Collector/config.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\config.html.twig");
    }
}
