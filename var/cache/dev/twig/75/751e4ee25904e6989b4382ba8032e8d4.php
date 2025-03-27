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

/* tables2.html.twig */
class __TwigTemplate_cd4e51491a8735dab9df2ee2994c668b extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables2.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"fixed\">
\t<head>
\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">
\t\t<title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t\t<meta name=\"keywords\" content=\"HTML5 Admin Template\" />
\t\t<meta name=\"description\" content=\"Porto Admin - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"okler.net\">
\t\t";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 32
        yield "
\t\t<!-- Head Libs -->
\t\t<script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/modernizr/modernizr.js"), "html", null, true);
        yield "\"></script>
\t</head>
\t
\t<body>
\t\t<section class=\"body\">
\t\t\t";
        // line 39
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 46
        yield "
\t\t\t<div class=\"inner-wrapper\">
\t\t\t\t";
        // line 48
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 55
        yield "
\t\t\t\t<section role=\"main\" class=\"content-body\">
\t\t\t\t\t";
        // line 57
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 68
        yield "
\t\t\t\t\t";
        // line 69
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 114
        yield "\t\t\t\t</section>
\t\t\t</div>

\t\t\t";
        // line 117
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 160
        yield "\t\t</section>
\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Performance equipes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

\t\t<!-- Web Fonts  -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/font-awesome/css/font-awesome.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-datepicker/css/datepicker3.css"), "html", null, true);
        yield "\" />

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables-bs3/assets/css/datatables.css"), "html", null, true);
        yield "\" />

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/stylesheets/theme.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/stylesheets/skins/default.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/stylesheets/theme-custom.css"), "html", null, true);
        yield "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 40
        yield "\t\t\t<!-- start: header -->
\t\t\t<header class=\"header\">
\t\t\t\t<!-- Header content remains the same -->
\t\t\t</header>
\t\t\t<!-- end: header -->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 49
        yield "\t\t\t\t<!-- start: sidebar -->
\t\t\t\t<aside id=\"sidebar-left\" class=\"sidebar-left\">
\t\t\t\t\t<!-- Sidebar content remains the same -->
\t\t\t\t</aside>
\t\t\t\t<!-- end: sidebar -->
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 58
        yield "\t\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t\t<h2>Performance equipes</h2>
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceequipe_index");
        yield "\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t\t\t\t<li><span>Performances</span></li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "\t\t\t\t\t<!-- start: page -->
\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_new");
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i> Add New
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"panel-title\">Performances</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
\t\t\t\t\t\t\t\t<thead>
            <tr>
                <th>Victoires</th>
                <th>Pertes</th>
                <th>Rang</th>
                <th>actions</th>
            </tr>
        </thead>
\t\t\t\t\t\t\t\t
            <tbody>
\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["performanceequipes"]) || array_key_exists("performanceequipes", $context) ? $context["performanceequipes"] : (function () { throw new RuntimeError('Variable "performanceequipes" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["performanceequipe"]) {
            // line 94
            yield "            <tr>
                <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performanceequipe"], "victoires", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performanceequipe"], "pertes", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performanceequipe"], "rang", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceequipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["performanceequipe"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceequipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["performanceequipe"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['performanceequipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- end: page -->
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
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

        // line 118
        yield "\t\t\t<!-- Vendor -->
\t\t\t<script src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/nanoscroller/nanoscroller.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/magnific-popup/magnific-popup.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-placeholder/jquery.placeholder.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Specific Page Vendor -->
\t\t\t<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Theme Base, Components and Settings -->
\t\t\t<script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascripts/theme.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Theme Custom -->
\t\t\t<script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascripts/theme.custom.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Theme Initialization Files -->
\t\t\t<script src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascripts/theme.init.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Custom DataTable Initialization -->
\t\t\t<script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$('#datatable-editable').DataTable({
\t\t\t\t\t\t\"language\": {
\t\t\t\t\t\t\t\"url\": \"//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"columns\": [
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\t{ \"orderable\": false }
\t\t\t\t\t\t]
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tables2.html.twig";
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
        return array (  483 => 139,  477 => 136,  471 => 133,  465 => 130,  461 => 129,  457 => 128,  451 => 125,  447 => 124,  443 => 123,  439 => 122,  435 => 121,  431 => 120,  427 => 119,  424 => 118,  411 => 117,  395 => 108,  386 => 104,  384 => 103,  376 => 100,  372 => 99,  367 => 97,  363 => 96,  359 => 95,  356 => 94,  351 => 93,  329 => 74,  323 => 70,  310 => 69,  293 => 62,  287 => 58,  274 => 57,  258 => 49,  245 => 48,  229 => 40,  216 => 39,  203 => 30,  199 => 29,  195 => 28,  189 => 25,  185 => 24,  179 => 21,  175 => 20,  171 => 19,  167 => 18,  158 => 11,  145 => 10,  122 => 6,  109 => 160,  107 => 117,  102 => 114,  100 => 69,  97 => 68,  95 => 57,  91 => 55,  89 => 48,  85 => 46,  83 => 39,  75 => 34,  71 => 32,  69 => 10,  62 => 6,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"fixed\">
\t<head>
\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">
\t\t<title>{% block title %}Performance equipes{% endblock %}</title>
\t\t<meta name=\"keywords\" content=\"HTML5 Admin Template\" />
\t\t<meta name=\"description\" content=\"Porto Admin - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"okler.net\">
\t\t{% block stylesheets %}
\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

\t\t<!-- Web Fonts  -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}\" />

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/select2/select2.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}\" />

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/stylesheets/theme.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/stylesheets/skins/default.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/stylesheets/theme-custom.css') }}\">
\t\t{% endblock %}

\t\t<!-- Head Libs -->
\t\t<script src=\"{{ asset('assets/vendor/modernizr/modernizr.js') }}\"></script>
\t</head>
\t
\t<body>
\t\t<section class=\"body\">
\t\t\t{% block header %}
\t\t\t<!-- start: header -->
\t\t\t<header class=\"header\">
\t\t\t\t<!-- Header content remains the same -->
\t\t\t</header>
\t\t\t<!-- end: header -->
\t\t\t{% endblock %}

\t\t\t<div class=\"inner-wrapper\">
\t\t\t\t{% block sidebar %}
\t\t\t\t<!-- start: sidebar -->
\t\t\t\t<aside id=\"sidebar-left\" class=\"sidebar-left\">
\t\t\t\t\t<!-- Sidebar content remains the same -->
\t\t\t\t</aside>
\t\t\t\t<!-- end: sidebar -->
\t\t\t\t{% endblock %}

\t\t\t\t<section role=\"main\" class=\"content-body\">
\t\t\t\t\t{% block content_header %}
\t\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t\t<h2>Performance equipes</h2>
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_performanceequipe_index') }}\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t\t\t\t<li><span>Performances</span></li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block content %}
\t\t\t\t\t<!-- start: page -->
\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_tournois_new') }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i> Add New
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"panel-title\">Performances</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
\t\t\t\t\t\t\t\t<thead>
            <tr>
                <th>Victoires</th>
                <th>Pertes</th>
                <th>Rang</th>
                <th>actions</th>
            </tr>
        </thead>
\t\t\t\t\t\t\t\t
            <tbody>
\t\t\t\t{% for performanceequipe in performanceequipes %}
            <tr>
                <td>{{ performanceequipe.victoires }}</td>
                <td>{{ performanceequipe.pertes }}</td>
                <td>{{ performanceequipe.rang }}</td>
                <td>
                    <a href=\"{{ path('app_performanceequipe_show', {'id': performanceequipe.id}) }}\">show</a>
                    <a href=\"{{ path('app_performanceequipe_edit', {'id': performanceequipe.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- end: page -->
\t\t\t\t\t{% endblock %}
\t\t\t\t</section>
\t\t\t</div>

\t\t\t{% block javascripts %}
\t\t\t<!-- Vendor -->
\t\t\t<script src=\"{{ asset('assets/vendor/jquery/jquery.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}\"></script>
\t\t\t
\t\t\t<!-- Specific Page Vendor -->
\t\t\t<script src=\"{{ asset('assets/vendor/select2/select2.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}\"></script>
\t\t\t
\t\t\t<!-- Theme Base, Components and Settings -->
\t\t\t<script src=\"{{ asset('assets/javascripts/theme.js') }}\"></script>
\t\t\t
\t\t\t<!-- Theme Custom -->
\t\t\t<script src=\"{{ asset('assets/javascripts/theme.custom.js') }}\"></script>
\t\t\t
\t\t\t<!-- Theme Initialization Files -->
\t\t\t<script src=\"{{ asset('assets/javascripts/theme.init.js') }}\"></script>

\t\t\t<!-- Custom DataTable Initialization -->
\t\t\t<script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$('#datatable-editable').DataTable({
\t\t\t\t\t\t\"language\": {
\t\t\t\t\t\t\t\"url\": \"//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"columns\": [
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\tnull,
\t\t\t\t\t\t\t{ \"orderable\": false }
\t\t\t\t\t\t]
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t\t{% endblock %}
\t\t</section>
\t</body>
</html>", "tables2.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\tables2.html.twig");
    }
}
