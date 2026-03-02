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

/* components/top-nav.html.twig */
class __TwigTemplate_d7918c44a3e217ddce358e2306d79858 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/top-nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/top-nav.html.twig"));

        // line 1
        yield "<header class=\"sticky top-0 z-50 w-full border-b border-white/20 bg-white/80 backdrop-blur-md dark:bg-slate-900/80\">
  <div class=\"mx-auto flex h-20 max-w-7xl items-center justify-between px-4 lg:px-8\">
    
    <div class=\"flex items-center gap-10\">
      <a href=\"/\" class=\"flex items-center gap-3 transition-transform hover:scale-105 active:scale-95\">
        <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"SOSI+\" class=\"h-10 w-auto drop-shadow-sm\">
        <span class=\"hidden text-xl font-bold text-slate-900 dark:text-white sm:block\">Sosi</span>
      </a>

      <nav class=\"hidden items-center gap-3 lg:flex\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don");
        yield "\" class=\"flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold bg-pink-500 text-white hover:bg-pink-600 transition-all\">
          <i class=\"fas fa-hand-holding-heart\"></i>
          Don
        </a>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aide");
        yield "\" class=\"flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-semibold bg-blue-500 text-white hover:bg-blue-600 transition-all\">
          <i class=\"fas fa-question-circle\"></i>
          Aide
        </a>
      </nav>
    </div>

    <div class=\"flex items-center gap-5\">
      <div class=\"flex items-center gap-2\">
        <div class=\"relative\" x-data=\"{ open: false }\" @click.away=\"open = false\">
          <button 
            @click=\"open = !open\"
            class=\"relative flex h-10 w-10 items-center justify-center rounded-xl bg-slate-100 text-slate-600 transition-all hover:bg-slate-200 hover:text-slate-900 active:scale-95 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-slate-200\"
          >
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-bell\"><path d=\"M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9\"/><path d=\"M10.3 21a1.94 1.94 0 0 0 3.4 0\"/></svg>
            <span class=\"absolute right-2.5 top-2.5 flex h-2 w-2\">
              <span class=\"animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75\"></span>
              <span class=\"relative inline-flex rounded-full h-2 w-2 bg-rose-500\"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
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
        return "components/top-nav.html.twig";
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
        return array (  70 => 15,  63 => 11,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/top-nav.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\components\\top-nav.html.twig");
    }
}
