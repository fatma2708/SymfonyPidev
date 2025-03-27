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

/* tables.html.twig */
class __TwigTemplate_e4720206498a3dc8c258ea83c0467170 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables.html.twig"));

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
        // line 120
        yield "\t\t\t\t</section>
\t\t\t</div>

\t\t\t";
        // line 123
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 166
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

        yield "Tournois Management";
        
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
\t\t\t\t\t\t<h2>Tournois Management</h2>
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_index");
        yield "\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t\t\t\t<li><span>Tournois</span></li>
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
\t\t\t\t\t\t\t<h2 class=\"panel-title\">Tournois List</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Sport</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Début</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Fin</th>
\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournois"]) || array_key_exists("tournois", $context) ? $context["tournois"] : (function () { throw new RuntimeError('Variable "tournois" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 95
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "nom", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "sport", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "dateDebut", [], "any", false, false, false, 98), "Y-m-d H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "dateFin", [], "any", false, false, false, 99), "Y-m-d H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "adresse", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 109
        if (!$context['_iterated']) {
            // line 110
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">No records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournoi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
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

    // line 123
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

        // line 124
        yield "\t\t\t<!-- Vendor -->
\t\t\t<script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/nanoscroller/nanoscroller.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/magnific-popup/magnific-popup.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-placeholder/jquery.placeholder.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Specific Page Vendor -->
\t\t\t<script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Theme Base, Components and Settings -->
\t\t\t<script src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascripts/theme.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Theme Custom -->
\t\t\t<script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascripts/theme.custom.js"), "html", null, true);
        yield "\"></script>
\t\t\t
\t\t\t<!-- Theme Initialization Files -->
\t\t\t<script src=\"";
        // line 145
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
        return "tables.html.twig";
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
        return array (  492 => 145,  486 => 142,  480 => 139,  474 => 136,  470 => 135,  466 => 134,  460 => 131,  456 => 130,  452 => 129,  448 => 128,  444 => 127,  440 => 126,  436 => 125,  433 => 124,  420 => 123,  404 => 114,  395 => 110,  393 => 109,  383 => 104,  376 => 100,  372 => 99,  368 => 98,  364 => 97,  360 => 96,  357 => 95,  352 => 94,  329 => 74,  323 => 70,  310 => 69,  293 => 62,  287 => 58,  274 => 57,  258 => 49,  245 => 48,  229 => 40,  216 => 39,  203 => 30,  199 => 29,  195 => 28,  189 => 25,  185 => 24,  179 => 21,  175 => 20,  171 => 19,  167 => 18,  158 => 11,  145 => 10,  122 => 6,  109 => 166,  107 => 123,  102 => 120,  100 => 69,  97 => 68,  95 => 57,  91 => 55,  89 => 48,  85 => 46,  83 => 39,  75 => 34,  71 => 32,  69 => 10,  62 => 6,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"fixed\">
\t<head>
\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">
\t\t<title>{% block title %}Tournois Management{% endblock %}</title>
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
\t\t\t\t\t\t<h2>Tournois Management</h2>
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_tournois_index') }}\"><i class=\"fa fa-home\"></i></a></li>
\t\t\t\t\t\t\t\t<li><span>Tournois</span></li>
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
\t\t\t\t\t\t\t<h2 class=\"panel-title\">Tournois List</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped mb-none\" id=\"datatable-editable\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Sport</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Début</th>
\t\t\t\t\t\t\t\t\t\t<th>Date Fin</th>
\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for tournoi in tournois %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ tournoi.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ tournoi.sport }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ tournoi.dateDebut|date('Y-m-d H:i') }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ tournoi.dateFin|date('Y-m-d H:i') }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ tournoi.adresse }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_tournois_edit', {'id': tournoi.id}) }}\" class=\"btn btn-sm btn-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">No records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
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
</html>", "tables.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\tables.html.twig");
    }
}
