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

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_3a941ed8cab5200f248e1d0098f7c850 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/base.html.twig", 1);
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
        yield "    <style>
        ";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        yield "
        ";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        yield "
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <div class=\"container\">
        ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", [], false);
        yield "

        ";
        // line 14
        $context["source"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, ($context["file_info"] ?? null), "pathname", [], "any", false, false, false, 14), ($context["line"] ?? null),  -1);
        // line 15
        yield "        <div id=\"content\">
            <div id=\"main\">
                <div id=\"source\">
                    <h1 class=\"source-file-name\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file"] ?? null), "html", null, true);
        if ((0 < ($context["line"] ?? null))) {
            yield " <small>line ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["line"] ?? null), "html", null, true);
            yield "</small>";
        }
        yield "</h1>

                    <div class=\"source-content\">
                        ";
        // line 21
        if ((null === ($context["source"] ?? null))) {
            // line 22
            yield "                            <p class=\"empty empty-panel\">The file is not readable.</p>
                        ";
        } else {
            // line 24
            yield "                            ";
            yield ($context["source"] ?? null);
            yield "
                        ";
        }
        // line 26
        yield "                    </div>
                </div>

                <div id=\"sidebar\">
                    <dl class=\"file-metadata\">
                        <dt>Filepath:</dt>
                        <dd>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["file_info"] ?? null), "pathname", [], "any", false, false, false, 32), "html", null, true);
        yield "</dd>

                        <dt>Last modified:</dt>
                        <dd>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["file_info"] ?? null), "mTime", [], "any", false, false, false, 35)), "html", null, true);
        yield "</dd>

                        <dt>Size:</dt>
                        ";
        // line 38
        $context["file_size_in_kb"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["file_info"] ?? null), "size", [], "any", false, false, false, 38) / 1024);
        // line 39
        yield "                        ";
        $context["file_num_lines"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["source"] ?? null), "
")) - 1);
        // line 40
        yield "                        <dd>
                            ";
        // line 41
        yield (((($context["file_size_in_kb"] ?? null) < 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["file_info"] ?? null), "size", [], "any", false, false, false, 41) . " bytes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["file_size_in_kb"] ?? null), 0) . " KB"), "html", null, true)));
        yield "
                            / ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file_num_lines"] ?? null), "html", null, true);
        yield " lines
                        </dd>
                    </dl>

                    <a class=\"doc-link\" href=\"https://symfony.com/doc/";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        yield "/reference/configuration/framework.html#ide\" rel=\"help\">Open this file in your IDE?</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            const selectedLineElement = document.querySelector('.source-content li.selected');
            if (null === selectedLineElement) {
                return;
            }

            const selectedLineYCoordinate = selectedLineElement.getBoundingClientRect().y;
            console.log(selectedLineYCoordinate);
            window.scrollTo({ top: selectedLineYCoordinate - 20, left: 0, behavior: 'smooth' });
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
        return "@WebProfiler/Profiler/open.html.twig";
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
        return array (  189 => 46,  182 => 42,  178 => 41,  175 => 40,  171 => 39,  169 => 38,  163 => 35,  157 => 32,  149 => 26,  143 => 24,  139 => 22,  137 => 21,  126 => 18,  121 => 15,  119 => 14,  114 => 12,  111 => 11,  98 => 10,  84 => 6,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
