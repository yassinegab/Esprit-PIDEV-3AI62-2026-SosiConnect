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

/* certificates/donation_certificate.html.twig */
class __TwigTemplate_5bab51fc2fc86ba9fd2f8e64e7f07cf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificates/donation_certificate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificates/donation_certificate.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Certificat de Don</title>
    <style>
        @page {
            margin: 0;
            size: A4 portrait;
        }
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            margin: 0;
            padding: 40px;
            background: #fff;
            color: #333;
        }
        .certificate {
            border: 8px double #c41e3a;
            padding: 40px;
            min-height: 700px;
            position: relative;
        }
        .certificate::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid #c41e3a;
            pointer-events: none;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .logo {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .title {
            font-size: 32px;
            font-weight: bold;
            color: #c41e3a;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 14px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .content {
            text-align: center;
            padding: 30px 20px;
        }
        .intro {
            font-size: 16px;
            margin-bottom: 30px;
            color: #555;
        }
        .donor-name {
            font-size: 28px;
            font-weight: bold;
            color: #1a1a1a;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .donor-info {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }
        .donation-details {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 400px;
        }
        .donation-type {
            font-size: 20px;
            font-weight: bold;
            color: #c41e3a;
            margin-bottom: 10px;
        }
        .donation-date {
            font-size: 14px;
            color: #555;
        }
        .message {
            font-size: 14px;
            font-style: italic;
            color: #666;
            margin-top: 30px;
            line-height: 1.6;
        }
        .footer {
            position: absolute;
            bottom: 60px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            padding: 0 60px;
        }
        .footer-left {
            text-align: center;
        }
        .footer-right {
            text-align: center;
        }
        .qr-container {
            background: #fff;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .qr-code {
            width: 80px;
            height: 80px;
        }
        .qr-label {
            font-size: 8px;
            color: #999;
            margin-top: 5px;
        }
        .certificate-number {
            font-size: 12px;
            color: #999;
            margin-bottom: 20px;
        }
        .signature {
            margin-top: 30px;
        }
        .signature-line {
            width: 200px;
            border-top: 1px solid #333;
            margin: 0 auto 10px;
        }
        .signature-text {
            font-size: 12px;
            color: #666;
        }
        .decorative {
            position: absolute;
            font-size: 80px;
            opacity: 0.1;
            color: #c41e3a;
        }
        .decorative-top-left {
            top: 60px;
            left: 60px;
        }
        .decorative-bottom-right {
            bottom: 60px;
            right: 60px;
        }
    </style>
</head>
<body>
    <div class=\"certificate\">
        <div class=\"decorative decorative-top-left\">🩸</div>
        <div class=\"decorative decorative-bottom-right\">❤️</div>
        
        <div class=\"header\">
            <div class=\"logo\">🩸</div>
            <div class=\"title\">Certificat de Don</div>
            <div class=\"subtitle\">Wellness Connect - Programme de Don</div>
        </div>
        
        <div class=\"content\">
            <p class=\"intro\">Ce certificat atteste que</p>
            
            <div class=\"donor-name\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donneur"] ?? null), "prenom", [], "any", false, false, false, 179), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donneur"] ?? null), "nom", [], "any", false, false, false, 179), "html", null, true);
        yield "</div>
            
            <div class=\"donor-info\">
                Groupe sanguin: <strong>";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["donneur"] ?? null), "groupeSanguin", [], "any", false, false, false, 182), "html", null, true);
        yield "</strong><br>
                À effectué un don le ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "dateDon", [], "any", false, false, false, 183), "d/m/Y"), "html", null, true);
        yield "
            </div>
            
            <div class=\"donation-details\">
                <div class=\"donation-type\">
                    ";
        // line 188
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeDon", [], "any", false, false, false, 188) == "sang")) {
            // line 189
            yield "                        🩸 Don de Sang
                    ";
        } else {
            // line 191
            yield "                        🫀 Don d'Organe
                    ";
        }
        // line 193
        yield "                </div>
                <div class=\"donation-date\">
                    ";
        // line 195
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeSanguin", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 196
            yield "                        Groupe: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeSanguin", [], "any", false, false, false, 196), "html", null, true);
            yield "
                    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 197
($context["don"] ?? null), "typeOrgane", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "                        Organe: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "typeOrgane", [], "any", false, false, false, 198), "html", null, true);
            yield "
                    ";
        }
        // line 200
        yield "                </div>
                <div class=\"donation-date\">
                    Lieu: ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["don"] ?? null), "region", [], "any", false, false, false, 202), "html", null, true);
        yield "
                </div>
            </div>
            
            <p class=\"message\">
                Nous vous remercions chaleureusement pour votre générosité.<br>
                Votre don peut sauver des vies et apporter l'espoir à ceux qui en ont besoin.<br>
                Merci d'avoir fait partie de notre communauté de donneurs.
            </p>
        </div>
        
        <div class=\"footer\">
            <div class=\"footer-left\">
                <div class=\"certificate-number\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["certificateNumber"] ?? null), "html", null, true);
        yield "</div>
                <div class=\"signature\">
                    <div class=\"signature-line\"></div>
                    <div class=\"signature-text\">Signature du Directeur</div>
                </div>
                <div style=\"margin-top: 20px; font-size: 10px; color: #999;\">
                    Document généré le ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "d/m/Y"), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"footer-right\">
                <div class=\"qr-container\">
                    <img src=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["qrCode"] ?? null), "html", null, true);
        yield "\" alt=\"QR Code\" class=\"qr-code\">
                </div>
                <div class=\"qr-label\">Scannez pour vérifier l'authenticité</div>
            </div>
        </div>
    </div>
</body>
</html>
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
        return "certificates/donation_certificate.html.twig";
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
        return array (  314 => 226,  306 => 221,  297 => 215,  281 => 202,  277 => 200,  271 => 198,  269 => 197,  264 => 196,  262 => 195,  258 => 193,  254 => 191,  250 => 189,  248 => 188,  240 => 183,  236 => 182,  228 => 179,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "certificates/donation_certificate.html.twig", "C:\\Users\\Dhia\\Desktop\\nout\\wellness-connect-main\\templates\\certificates\\donation_certificate.html.twig");
    }
}
