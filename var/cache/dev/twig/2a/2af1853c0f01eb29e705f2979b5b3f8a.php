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

/* bootstrap_5_layout.html.twig */
class __TwigTemplate_40c2b6b0c2059dc4299beb77c7af7273 extends Template
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

        // line 1
        $_trait_0 = $this->load("bootstrap_base_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'money_widget' => [$this, 'block_money_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_layout.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 22
        yield "
";
        // line 23
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 53
        yield "
";
        // line 54
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 92
        yield "
";
        // line 93
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 109
        yield "
";
        // line 110
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 165
        yield "
";
        // line 166
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 176
        yield "
";
        // line 177
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 194
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 201
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 206
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 211
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 235
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 256
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 261
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 272
        yield "
";
        // line 275
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 294
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 320
        yield "
";
        // line 323
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 345
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 350
        yield "
";
        // line 353
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 360
        yield "
";
        // line 363
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        $context["prepend"] =  !(is_string($_v0 = ($context["money_pattern"] ?? null)) && is_string($_v1 = "{{") && str_starts_with($_v0, $_v1));
        // line 7
        $context["append"] =  !(is_string($_v2 = ($context["money_pattern"] ?? null)) && is_string($_v3 = "}}") && str_ends_with($_v2, $_v3));
        // line 8
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 9
            yield "<div class=\"input-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("group_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\">";
            // line 10
            if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "<span class=\"input-group-text\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>";
            }
            // line 13
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 14
            if ((($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "<span class=\"input-group-text\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>";
            }
            // line 17
            yield "</div>";
        } else {
            // line 19
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 24
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 25
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 27
            if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "            ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " is-invalid"))]);
                // line 29
                $context["valid"] = true;
                // line 30
                yield "        ";
            }
            // line 31
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 32
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 34
            if ((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "<div class=\"visually-hidden\">";
                // line 36
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 36), 'label');
                // line 37
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 37), 'label');
                // line 38
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 38), 'label');
                // line 39
                yield "</div>";
            }
            // line 41
            yield "<div class=\"input-group\">";
            // line 42
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 43
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 43), 'widget'), "{{ month }}" =>             // line 44
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 44), 'widget'), "{{ day }}" =>             // line 45
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 45), 'widget')]);
            // line 47
            yield "</div>";
            // line 48
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 49
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 55
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 56
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 58
            if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "            ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59), "")) : ("")) . " is-invalid"))]);
                // line 60
                $context["valid"] = true;
                // line 61
                yield "        ";
            }
            // line 62
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 63
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 65
            if ((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "<div class=\"visually-hidden\">";
                // line 67
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 67), 'label');
                // line 68
                if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 68), 'label');
                }
                // line 69
                if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 69), 'label');
                }
                // line 70
                yield "</div>";
            }
            // line 72
            if ((($context["with_minutes"] ?? null) || ($context["with_seconds"] ?? null))) {
                // line 73
                yield "            <div class=\"input-group\">
        ";
            }
            // line 75
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 75), 'widget');
            // line 76
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "<span class=\"input-group-text\">:</span>";
                // line 78
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 78), 'widget');
            }
            // line 80
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "<span class=\"input-group-text\">:</span>";
                // line 82
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 82), 'widget');
            }
            // line 84
            if ((($context["with_minutes"] ?? null) || ($context["with_seconds"] ?? null))) {
                // line 85
                yield "            </div>
        ";
            }
            // line 87
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 88
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 95
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "            ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 98), "")) : ("")) . " is-invalid"))]);
                // line 99
                $context["valid"] = true;
                // line 100
                yield "        ";
            }
            // line 101
            yield "        <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 102
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 102), 'widget', ["datetime" => true]);
            // line 103
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 103), 'errors');
            // line 104
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 104), 'widget', ["datetime" => true]);
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 105), 'errors');
            // line 106
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dateinterval_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 111
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 112
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 114
            if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 115
                yield "            ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 115), "")) : ("")) . " is-invalid"))]);
                // line 116
                $context["valid"] = true;
                // line 117
                yield "        ";
            }
            // line 118
            yield "        <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 119
            if ((($tmp = ($context["with_years"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 121
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 121), 'label');
                yield "
                    ";
                // line 122
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 122), 'widget');
                yield "
                </div>";
            }
            // line 125
            if ((($tmp = ($context["with_months"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 127
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 127), 'label');
                yield "
                    ";
                // line 128
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 128), 'widget');
                yield "
                </div>";
            }
            // line 131
            if ((($tmp = ($context["with_weeks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 133
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 133), 'label');
                yield "
                    ";
                // line 134
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 134), 'widget');
                yield "
                </div>";
            }
            // line 137
            if ((($tmp = ($context["with_days"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 139
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 139), 'label');
                yield "
                    ";
                // line 140
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 140), 'widget');
                yield "
                </div>";
            }
            // line 143
            if ((($tmp = ($context["with_hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 145
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 145), 'label');
                yield "
                    ";
                // line 146
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 146), 'widget');
                yield "
                </div>";
            }
            // line 149
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 151
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 151), 'label');
                yield "
                    ";
                // line 152
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 152), 'widget');
                yield "
                </div>";
            }
            // line 155
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "<div class=\"col-auto mb-3\">
                    ";
                // line 157
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 157), 'label');
                yield "
                    ";
                // line 158
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 158), 'widget');
                yield "
                </div>";
            }
            // line 161
            if ((($tmp = ($context["with_invert"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 161), 'widget');
            }
            // line 162
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 167
        if ((($tmp = ($context["symbol"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "<div class=\"input-group\">";
            // line 169
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 170
            yield "<span class=\"input-group-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
        </div>";
        } else {
            // line 173
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 178
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 179
            $context["widget_class"] = " form-control";
            // line 180
            if ((((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "")) : ("")) == "color")) {
                // line 181
                $context["widget_class"] = (($context["widget_class"] ?? null) . " form-control-color");
            } elseif ((((            // line 182
array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "")) : ("")) == "range")) {
                // line 183
                $context["widget_class"] = " form-range";
            }
            // line 185
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 185), "")) : ("")) . ($context["widget_class"] ?? null)))]);
        }
        // line 187
        if ((array_key_exists("type", $context) && CoreExtension::inFilter(($context["type"] ?? null), ["range", "color"]))) {
            // line 188
            yield "        ";
            // line 189
            yield "        ";
            $context["required"] = false;
            // line 190
            yield "    ";
        }
        // line 191
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 195
        if ((($tmp =  !($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 196
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 196), "")) : ("")) . " is-invalid"))]);
            // line 197
            yield "    ";
        }
        // line 198
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 201
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 202
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 202), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 203
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 207
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 207), "btn-primary")) : ("btn-primary")))]);
        // line 208
        yield from $this->yieldParentBlock("submit_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 211
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 212
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["attr_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 212), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 212), "")) : (""))));
        // line 213
        $context["row_class"] = "";
        // line 214
        if (!CoreExtension::inFilter("btn-check", ($context["attr_class"] ?? null))) {
            // line 215
            $context["attr_class"] = (($context["attr_class"] ?? null) . " form-check-input");
            // line 216
            $context["row_class"] = "form-check";
        }
        // line 218
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(($context["attr_class"] ?? null))]);
        // line 219
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 219), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 219), "")) : (""))));
        // line 220
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 221
            $context["row_class"] = (($context["row_class"] ?? null) . " form-check-inline");
        }
        // line 223
        if (CoreExtension::inFilter("checkbox-switch", ($context["parent_label_class"] ?? null))) {
            // line 224
            $context["row_class"] = (($context["row_class"] ?? null) . " form-switch");
        }
        // line 226
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "<div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_class"] ?? null), "html", null, true);
            yield "\">";
        }
        // line 229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        // line 230
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 236
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["attr_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 236)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 236), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 236)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 236), "")) : (""))));
        // line 237
        $context["row_class"] = "";
        // line 238
        if (!CoreExtension::inFilter("btn-check", ($context["attr_class"] ?? null))) {
            // line 239
            $context["attr_class"] = (($context["attr_class"] ?? null) . " form-check-input");
            // line 240
            $context["row_class"] = "form-check";
        }
        // line 242
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(($context["attr_class"] ?? null))]);
        // line 243
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 243), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 243), "")) : (""))));
        // line 244
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 245
            $context["row_class"] = (($context["row_class"] ?? null) . " form-check-inline");
        }
        // line 247
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 248
            yield "<div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_class"] ?? null), "html", null, true);
            yield "\">";
        }
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        // line 251
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 252
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 256
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 257
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 257), "")) : ("")) . " form-select"))]);
        // line 258
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 261
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 262
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 264
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 265
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 265)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 265), "")) : ("")), "translation_domain" =>             // line 266
($context["choice_translation_domain"] ?? null), "valid" =>             // line 267
($context["valid"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 276
        if ((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 277
            $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 277)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 277), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 277)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 277), "")) : (""))));
            // line 278
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 279
                $context["element"] = "legend";
                // line 280
                if (!CoreExtension::inFilter("col-form-label", ($context["parent_label_class"] ?? null))) {
                    // line 281
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 281)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 281), "")) : ("")) . " col-form-label"))]);
                }
            } else {
                // line 284
                $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 284)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 284), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 284)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 284), "")) : (""))));
                // line 285
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
                // line 286
                if (!CoreExtension::inFilter("col-form-label", ($context["parent_label_class"] ?? null))) {
                    // line 287
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 287)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 287), "")) : ("")) . ((CoreExtension::inFilter("input-group", ($context["row_class"] ?? null))) ? (" input-group-text") : (" form-label"))))]);
                }
            }
        }
        // line 291
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 296
        if (array_key_exists("widget", $context)) {
            // line 297
            $context["label_attr_class"] = ((array_key_exists("label_attr_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_attr_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 297)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 297), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 297)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 297), "")) : (""))));
            // line 298
            if (!CoreExtension::inFilter("btn", ($context["label_attr_class"] ?? null))) {
                // line 299
                $context["label_attr_class"] = (($context["label_attr_class"] ?? null) . " form-check-label");
            }
            // line 301
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(($context["label_attr_class"] ?? null))]);
            // line 302
            if ((($tmp =  !($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 303
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 305
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 306
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 306), "")) : ("")) . " required"))]);
            }
            // line 308
            if (array_key_exists("parent_label_class", $context)) {
                // line 309
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 309)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 309), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)), ["checkbox-inline" => "", "radio-inline" => ""]))]);
            }
            // line 312
            yield ($context["widget"] ?? null);
            yield "
        <label";
            // line 313
            $_v4 = $context;
            $_v5 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($_v5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 313, $this->getSourceContext());
            }
            $_v5 = CoreExtension::toArray($_v5);
            $context = $_v5 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v4;
            yield ">";
            // line 314
            if ((($tmp =  !(($context["label"] ?? null) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 315
                yield from                 $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
            }
            // line 317
            yield "</label>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 323
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 324
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 325
            $context["element"] = "fieldset";
        }
        // line 327
        $context["widget_attr"] = [];
        // line 328
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 329
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 331
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 331), "mb-3")) : ("mb-3"))))) : (Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 331)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 331), "mb-3")) : ("mb-3")))));
        // line 332
        yield "<";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ($context["row_class"] ?? null)])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 332, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 333
        if (CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null))) {
            // line 334
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
            // line 335
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        } else {
            // line 337
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 338
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        }
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 342
        yield "</";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield ">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 345
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 346
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 346)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 346), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 346, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">";
        // line 347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 348
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 354
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 355
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 356
                yield "<div class=\"";
                if ((($tmp =  !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "invalid-feedback";
                } else {
                    yield "alert alert-danger";
                }
                yield " d-block\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 356), "html", null, true);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 363
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 364
        $context["row_class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 364)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 364), "")) : (""));
        // line 365
        $context["help_class"] = " form-text";
        // line 366
        if (CoreExtension::inFilter("input-group", ($context["row_class"] ?? null))) {
            // line 368
            $context["help_class"] = " input-group-text";
        }
        // line 370
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 371
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 371)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 371), "")) : ("")) . ($context["help_class"] ?? null)) . " mb-0"))]);
        }
        // line 373
        yield from $this->yieldParentBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_5_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1236 => 373,  1233 => 371,  1231 => 370,  1228 => 368,  1226 => 366,  1224 => 365,  1222 => 364,  1209 => 363,  1185 => 356,  1181 => 355,  1179 => 354,  1166 => 353,  1155 => 348,  1153 => 347,  1141 => 346,  1128 => 345,  1115 => 342,  1113 => 341,  1111 => 340,  1108 => 338,  1106 => 337,  1103 => 335,  1101 => 334,  1099 => 333,  1086 => 332,  1084 => 331,  1081 => 329,  1079 => 328,  1077 => 327,  1074 => 325,  1072 => 324,  1059 => 323,  1047 => 317,  1044 => 315,  1042 => 314,  1031 => 313,  1027 => 312,  1024 => 309,  1022 => 308,  1019 => 306,  1017 => 305,  1014 => 303,  1012 => 302,  1010 => 301,  1007 => 299,  1005 => 298,  1003 => 297,  1001 => 296,  988 => 294,  977 => 291,  972 => 287,  970 => 286,  968 => 285,  966 => 284,  962 => 281,  960 => 280,  958 => 279,  956 => 278,  954 => 277,  952 => 276,  939 => 275,  928 => 270,  922 => 267,  921 => 266,  920 => 265,  919 => 264,  915 => 263,  911 => 262,  898 => 261,  887 => 258,  885 => 257,  872 => 256,  860 => 252,  858 => 251,  856 => 250,  851 => 248,  849 => 247,  846 => 245,  844 => 244,  842 => 243,  840 => 242,  837 => 240,  835 => 239,  833 => 238,  831 => 237,  829 => 236,  816 => 235,  804 => 231,  802 => 230,  800 => 229,  795 => 227,  793 => 226,  790 => 224,  788 => 223,  785 => 221,  783 => 220,  781 => 219,  779 => 218,  776 => 216,  774 => 215,  772 => 214,  770 => 213,  768 => 212,  755 => 211,  744 => 208,  742 => 207,  729 => 206,  718 => 203,  716 => 202,  703 => 201,  692 => 198,  689 => 197,  686 => 196,  684 => 195,  671 => 194,  660 => 191,  657 => 190,  654 => 189,  652 => 188,  650 => 187,  647 => 185,  644 => 183,  642 => 182,  640 => 181,  638 => 180,  636 => 179,  634 => 178,  621 => 177,  609 => 173,  603 => 170,  601 => 169,  599 => 168,  597 => 167,  584 => 166,  572 => 162,  568 => 161,  563 => 158,  559 => 157,  556 => 156,  554 => 155,  549 => 152,  545 => 151,  542 => 150,  540 => 149,  535 => 146,  531 => 145,  528 => 144,  526 => 143,  521 => 140,  517 => 139,  514 => 138,  512 => 137,  507 => 134,  503 => 133,  500 => 132,  498 => 131,  493 => 128,  489 => 127,  486 => 126,  484 => 125,  479 => 122,  475 => 121,  472 => 120,  470 => 119,  466 => 118,  463 => 117,  461 => 116,  458 => 115,  456 => 114,  453 => 112,  451 => 111,  438 => 110,  426 => 106,  424 => 105,  422 => 104,  420 => 103,  418 => 102,  414 => 101,  411 => 100,  409 => 99,  406 => 98,  404 => 97,  401 => 95,  399 => 94,  386 => 93,  373 => 88,  371 => 87,  367 => 85,  365 => 84,  362 => 82,  360 => 81,  358 => 80,  355 => 78,  353 => 77,  351 => 76,  349 => 75,  345 => 73,  343 => 72,  340 => 70,  336 => 69,  332 => 68,  330 => 67,  328 => 66,  326 => 65,  321 => 63,  319 => 62,  316 => 61,  314 => 60,  311 => 59,  309 => 58,  306 => 56,  304 => 55,  291 => 54,  278 => 49,  276 => 48,  274 => 47,  272 => 45,  271 => 44,  270 => 43,  269 => 42,  267 => 41,  264 => 39,  262 => 38,  260 => 37,  258 => 36,  256 => 35,  254 => 34,  249 => 32,  247 => 31,  244 => 30,  242 => 29,  239 => 28,  237 => 27,  234 => 25,  232 => 24,  219 => 23,  207 => 19,  204 => 17,  199 => 15,  197 => 14,  195 => 13,  190 => 11,  188 => 10,  184 => 9,  182 => 8,  180 => 7,  178 => 6,  165 => 5,  154 => 363,  151 => 360,  149 => 353,  146 => 350,  144 => 345,  142 => 323,  139 => 320,  137 => 294,  135 => 275,  132 => 272,  130 => 261,  128 => 256,  126 => 235,  124 => 211,  122 => 206,  120 => 201,  118 => 194,  116 => 177,  113 => 176,  111 => 166,  108 => 165,  106 => 110,  103 => 109,  101 => 93,  98 => 92,  96 => 54,  93 => 53,  91 => 23,  88 => 22,  86 => 5,  83 => 4,  80 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_5_layout.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_5_layout.html.twig");
    }
}
