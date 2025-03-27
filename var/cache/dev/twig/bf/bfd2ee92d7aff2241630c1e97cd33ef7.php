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

/* form.html.twig */
class __TwigTemplate_1910a4fda3455f52749df9fc5452862e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        // line 1
        yield "<!doctype html>
<html class=\"fixed\">
\t<head>

\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">

\t\t<title>Basic Forms | Okler Themes | Porto-Admin</title>
\t\t<meta name=\"keywords\" content=\"HTML5 Admin Template\" />
\t\t<meta name=\"description\" content=\"Porto Admin - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"okler.net\">

\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

\t\t<!-- Web Fonts  -->
\t\t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

\t\t<!-- Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/bootstrap/css/bootstrap.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/font-awesome/css/font-awesome.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/magnific-popup/magnific-popup.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-datepicker/css/datepicker3.css\" />

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css\" />

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/stylesheets/theme.css\" />

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/stylesheets/skins/default.css\" />

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/stylesheets/theme-custom.css\">

\t\t<!-- Head Libs -->
\t\t<script src=\"assets/vendor/modernizr/modernizr.js\"></script>

\t</head>
\t<body>
\t\t<section class=\"body\">

\t\t\t<!-- start: header -->
\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t<a href=\"../\" class=\"logo\">
\t\t\t\t\t\t<img src=\"assets/images/logo.png\" height=\"35\" alt=\"Porto Admin\" />
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<!-- start: search & user box -->
\t\t\t\t<div class=\"header-right\">
\t\t\t
\t\t\t\t\t<form action=\"pages-search-results.html\" class=\"search nav-form\">
\t\t\t\t\t\t<div class=\"input-group input-search\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"q\" id=\"q\" placeholder=\"Search...\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<ul class=\"notifications\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu large\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tTasks
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Generating Sales Report</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">60%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Importing Contacts</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">98%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Uploading something big</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">33%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"33\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">230</span>
\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Doe</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message truncate\">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tAlerts
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-down bg-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Server is Down!</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Just now</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock bg-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">User Locked</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-signal bg-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Connection Restaured</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">10/10/2014</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<div id=\"userbox\" class=\"userbox\">
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/!logged-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\" data-lock-picture=\"assets/images/!logged-user.jpg\" />
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<div class=\"profile-info\" data-lock-name=\"John Doe\" data-lock-email=\"johndoe@okler.com\">
\t\t\t\t\t\t\t\t<span class=\"name\">John Doe Junior</span>
\t\t\t\t\t\t\t\t<span class=\"role\">administrator</span>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t<i class=\"fa custom-caret\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"pages-user-profile.html\"><i class=\"fa fa-user\"></i> My Profile</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\" data-lock-screen=\"true\"><i class=\"fa fa-lock\"></i> Lock Screen</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"pages-signin.html\"><i class=\"fa fa-power-off\"></i> Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end: search & user box -->
\t\t\t</header>
\t\t\t<!-- end: header -->

\t\t\t<div class=\"inner-wrapper\">
\t\t\t\t<!-- start: sidebar -->
\t\t\t\t<aside id=\"sidebar-left\" class=\"sidebar-left\">
\t\t\t\t
\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t<div class=\"sidebar-title\">
\t\t\t\t\t\t\tNavigation
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"nano\">
\t\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t\t<nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-main\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"mailbox-folder.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-primary\">182</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Mailbox</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-copy\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Pages</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-signup.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Sign Up
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-signin.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Sign In
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-recover-password.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Recover Password
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-lock-screen.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Locked Screen
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-user-profile.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t User Profile
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-session-timeout.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Session Timeout
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-calendar.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Calendar
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-timeline.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Timeline
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-media-gallery.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Media Gallery
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-invoice.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Invoice
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-blank.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Blank Page
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-404.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t 404
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-500.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t 500
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-log-viewer.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Log Viewer
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-search-results.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Search Results
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>UI Elements</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-typography.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Typography
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-icons.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Icons
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-tabs.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Tabs
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-panels.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Panels
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-widgets.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Widgets
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-portlets.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Portlets
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-buttons.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Buttons
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-alerts.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Alerts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-notifications.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Notifications
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-modals.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Modals
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-lightbox.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Lightbox
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-progressbars.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Progress Bars
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-sliders.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Sliders
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-carousels.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Carousels
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-accordions.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Accordions
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-nestable.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Nestable
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-tree-view.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Tree View
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-grid-system.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Grid System
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-charts.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Charts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-animations.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Animations
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-extra.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Extra
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent nav-expanded nav-active\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Forms</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-basic.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Basic
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-advanced.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Advanced
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-validation.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Validation
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-layouts.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Layouts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-wizard.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Wizard
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-code-editor.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Code Editor
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-basic.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Basic
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-advanced.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Advanced
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-responsive.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Responsive
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-editable.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Editable
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-ajax.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Ajax
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-pricing.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Pricing
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Maps</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-google-maps.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Basic
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-google-maps-builder.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Map Builder
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-vector.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Vector
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-columns\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Layouts</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-default.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Default
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-boxed.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Boxed
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-menu-collapsed.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Menu Collapsed
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-scroll.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Scroll
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-align-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Menu Levels</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a>First Level</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>Second Level</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Third Level</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Third Level Link #1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Third Level Link #2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Second Level Link #1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Second Level Link #2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Front-End <em class=\"not-included\">(Not Included)</em></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-tasks\">
\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t<h6>Projects</h6>
\t\t\t\t\t\t\t\t\t<div class=\"widget-toggle\">+</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled m-none\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Porto HTML5 Template</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tucson Template</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Porto Admin</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-stats\">
\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t<h6>Company Stats</h6>
\t\t\t\t\t\t\t\t\t<div class=\"widget-toggle\">+</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-title\">Stat 1</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-complete\">85%</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">85% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-title\">Stat 2</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-complete\">70%</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">70% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-title\">Stat 3</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-complete\">2%</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"2\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">2% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</aside>
\t\t\t\t<!-- end: sidebar -->

\t\t\t\t<section role=\"main\" class=\"content-body\">
\t\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t\t<h2>Basic Forms</h2>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><span>Forms</span></li>
\t\t\t\t\t\t\t\t<li><span>Basic</span></li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"sidebar-right-toggle\" data-open=\"sidebar-right\"><i class=\"fa fa-chevron-left\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>

\t\t\t\t\t<!-- start: page -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Form Elements</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputDefault\">Default</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputDefault\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputDisabled\">Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"inputDisabled\" type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputReadOnly\">Read-Only Input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"Read-Only Input\" id=\"inputReadOnly\" class=\"form-control\" readonly=\"readonly\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputHelpText\">Help text</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputHelpText\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">A block of help text that breaks onto a new line and may extend beyond one line.</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputRounded\">Rounded Input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-rounded\" id=\"inputRounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputFocus\">Input focus</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"inputFocus\" type=\"text\" value=\"This is focused...\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputPlaceholder\">Placeholder</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"placeholder\" id=\"inputPlaceholder\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"inputPassword\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\" col-md-3 control-label\">Static control</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">email@example.com</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Left Icon</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Left icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Right Icon</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Right icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Search</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"q\" id=\"q\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">File Upload</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uneditable-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file fileupload-exists\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileupload-preview\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileupload-exists\">Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileupload-new\">Select file</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default fileupload-exists\" data-dismiss=\"fileupload\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Vertical Group</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"form-group-vertical\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control last\" type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">Vertical Group w/ icon</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"form-group-vertical\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-key\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Input with success</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputWarning\">Input with warning</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputWarning\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-error\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputError\">Input with error</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputError\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputTooltip\">Input with Tooltip</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Hover me\" title=\"\" data-toggle=\"tooltip\" data-trigger=\"hover\" class=\"form-control\" data-original-title=\"Place your tooltip info here\" id=\"inputTooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputPopover\">Input with Popover</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Click Here\" class=\"form-control\" data-toggle=\"popover\" data-placement=\"top\" data-original-title=\"The Title\" data-content=\"Content goes here...\" data-trigger=\"click\" id=\"inputPopover\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Column sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\".col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs mb-md\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\".col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs mb-md\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\".col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Controls sizing</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Input sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control input-lg mb-md\" type=\"text\" placeholder=\".input-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control mb-md\" type=\"text\" placeholder=\"Default input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm mb-md\" type=\"text\" placeholder=\".input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Select sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-lg mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-sm mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Checkboxes and radios</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption one is this and that—be sure to include why it's great
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption one is this and that—be sure to include why it's great option one
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption one is this and that—be sure to include why it's great
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption two can be something else and selecting it will deselect option one
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Inline checkboxes</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Selects</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<select multiple=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Input Groups</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Basic examples</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon btn-success\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon btn-warning\">.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon \">.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-lg mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon btn-danger\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Iconic</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Checkbox and radio</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Button addons</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" type=\"button\">Go!</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">Go!</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Segmented buttons</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" class=\"btn btn-primary\" type=\"button\">Action</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" class=\"btn btn-primary\" type=\"button\">Action</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Custom Checkbox &amp; Radio</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Checkboxes</label>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample1\">Checkbox Default</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample2\">Checkbox Primary</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample3\">Checkbox Success</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample4\">Checkbox Warning</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample5\">Checkbox Danger</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" disabled=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Checkbox Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" disabled=\"\" checked=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Checked &amp; Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Radios</label>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample1\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample1\">Radio Default</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample2\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample2\">Radio Primary</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample3\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample3\">Radio Success</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample4\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample4\">Radio Warning</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample5\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample5\">Radio Danger</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" disabled=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Radio Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" disabled=\"\" checked=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Checked &amp; Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Textarea</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"textareaDefault\">Textarea</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"textareaDefault\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"textareaAutosize\">Textarea autosize</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"textareaAutosize\" data-plugin-textarea-autosize></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div data-collapsed=\"0\" class=\"panel\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Input Grid</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-12\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: page -->
\t\t\t\t</section>
\t\t\t</div>

\t\t\t<aside id=\"sidebar-right\" class=\"sidebar-right\">
\t\t\t\t<div class=\"nano\">
\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t<a href=\"#\" class=\"mobile-close visible-xs\">
\t\t\t\t\t\t\tCollapse <i class=\"fa fa-chevron-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"sidebar-right-wrapper\">
\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-calendar\">
\t\t\t\t\t\t\t\t<h6>Upcoming Tasks</h6>
\t\t\t\t\t\t\t\t<div data-plugin-datepicker data-plugin-skin=\"dark\" ></div>
\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<time datetime=\"2014-04-19T00:00+00:00\">04/19/2014</time>
\t\t\t\t\t\t\t\t\t\t<span>Company Meeting</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-friends\">
\t\t\t\t\t\t\t\t<h6>Friends</h6>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"status-online\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"status-online\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"status-offline\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"status-offline\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</aside>
\t\t</section>

\t\t<!-- Vendor -->
\t\t<script src=\"assets/vendor/jquery/jquery.js\"></script>
\t\t<script src=\"assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js\"></script>
\t\t<script src=\"assets/vendor/bootstrap/js/bootstrap.js\"></script>
\t\t<script src=\"assets/vendor/nanoscroller/nanoscroller.js\"></script>
\t\t<script src=\"assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
\t\t<script src=\"assets/vendor/magnific-popup/magnific-popup.js\"></script>
\t\t<script src=\"assets/vendor/jquery-placeholder/jquery.placeholder.js\"></script>
\t\t
\t\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-autosize/jquery.autosize.js\"></script>
\t\t<script src=\"assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js\"></script>
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"assets/javascripts/theme.js\"></script>
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"assets/javascripts/theme.custom.js\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"assets/javascripts/theme.init.js\"></script>

\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"fixed\">
\t<head>

\t\t<!-- Basic -->
\t\t<meta charset=\"UTF-8\">

\t\t<title>Basic Forms | Okler Themes | Porto-Admin</title>
\t\t<meta name=\"keywords\" content=\"HTML5 Admin Template\" />
\t\t<meta name=\"description\" content=\"Porto Admin - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"okler.net\">

\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

\t\t<!-- Web Fonts  -->
\t\t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

\t\t<!-- Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/bootstrap/css/bootstrap.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/font-awesome/css/font-awesome.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/magnific-popup/magnific-popup.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-datepicker/css/datepicker3.css\" />

\t\t<!-- Specific Page Vendor CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css\" />

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/stylesheets/theme.css\" />

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/stylesheets/skins/default.css\" />

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"assets/stylesheets/theme-custom.css\">

\t\t<!-- Head Libs -->
\t\t<script src=\"assets/vendor/modernizr/modernizr.js\"></script>

\t</head>
\t<body>
\t\t<section class=\"body\">

\t\t\t<!-- start: header -->
\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t<a href=\"../\" class=\"logo\">
\t\t\t\t\t\t<img src=\"assets/images/logo.png\" height=\"35\" alt=\"Porto Admin\" />
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<!-- start: search & user box -->
\t\t\t\t<div class=\"header-right\">
\t\t\t
\t\t\t\t\t<form action=\"pages-search-results.html\" class=\"search nav-form\">
\t\t\t\t\t\t<div class=\"input-group input-search\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"q\" id=\"q\" placeholder=\"Search...\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<ul class=\"notifications\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu large\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tTasks
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Generating Sales Report</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">60%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Importing Contacts</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">98%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"clearfix mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-left\">Uploading something big</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message pull-right text-dark\">33%</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-xs light mb-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"33\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">230</span>
\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Doe</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message truncate\">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joe Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Junior\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Joseph Junior</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t\t<div class=\"dropdown-menu notification-menu\">
\t\t\t\t\t\t\t\t<div class=\"notification-title\">
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-default\">3</span>
\t\t\t\t\t\t\t\t\tAlerts
\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-down bg-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Server is Down!</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">Just now</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock bg-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">User Locked</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-signal bg-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Connection Restaured</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">10/10/2014</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view-more\">View All</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t<span class=\"separator\"></span>
\t\t\t
\t\t\t\t\t<div id=\"userbox\" class=\"userbox\">
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/!logged-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\" data-lock-picture=\"assets/images/!logged-user.jpg\" />
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t<div class=\"profile-info\" data-lock-name=\"John Doe\" data-lock-email=\"johndoe@okler.com\">
\t\t\t\t\t\t\t\t<span class=\"name\">John Doe Junior</span>
\t\t\t\t\t\t\t\t<span class=\"role\">administrator</span>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t<i class=\"fa custom-caret\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"pages-user-profile.html\"><i class=\"fa fa-user\"></i> My Profile</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\" data-lock-screen=\"true\"><i class=\"fa fa-lock\"></i> Lock Screen</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"pages-signin.html\"><i class=\"fa fa-power-off\"></i> Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end: search & user box -->
\t\t\t</header>
\t\t\t<!-- end: header -->

\t\t\t<div class=\"inner-wrapper\">
\t\t\t\t<!-- start: sidebar -->
\t\t\t\t<aside id=\"sidebar-left\" class=\"sidebar-left\">
\t\t\t\t
\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t<div class=\"sidebar-title\">
\t\t\t\t\t\t\tNavigation
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"nano\">
\t\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t\t<nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-main\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"mailbox-folder.html\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right label label-primary\">182</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Mailbox</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-copy\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Pages</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-signup.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Sign Up
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-signin.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Sign In
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-recover-password.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Recover Password
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-lock-screen.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Locked Screen
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-user-profile.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t User Profile
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-session-timeout.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Session Timeout
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-calendar.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Calendar
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-timeline.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Timeline
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-media-gallery.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Media Gallery
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-invoice.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Invoice
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-blank.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Blank Page
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-404.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t 404
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-500.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t 500
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-log-viewer.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Log Viewer
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-search-results.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Search Results
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>UI Elements</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-typography.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Typography
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-icons.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Icons
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-tabs.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Tabs
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-panels.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Panels
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-widgets.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Widgets
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-portlets.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Portlets
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-buttons.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Buttons
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-alerts.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Alerts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-notifications.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Notifications
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-modals.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Modals
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-lightbox.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Lightbox
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-progressbars.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Progress Bars
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-sliders.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Sliders
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-carousels.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Carousels
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-accordions.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Accordions
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-nestable.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Nestable
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-tree-view.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Tree View
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-grid-system.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Grid System
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-charts.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Charts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-animations.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Animations
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-elements-extra.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Extra
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent nav-expanded nav-active\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Forms</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-basic.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Basic
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-advanced.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Advanced
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-validation.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Validation
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-layouts.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Layouts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-wizard.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Wizard
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"forms-code-editor.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Code Editor
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-basic.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Basic
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-advanced.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Advanced
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-responsive.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Responsive
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-editable.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Editable
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-ajax.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Ajax
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tables-pricing.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Pricing
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Maps</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-google-maps.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Basic
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-google-maps-builder.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Map Builder
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"maps-vector.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Vector
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-columns\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Layouts</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-default.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Default
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-boxed.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Boxed
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-menu-collapsed.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Menu Collapsed
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"layouts-scroll.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t Scroll
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-align-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Menu Levels</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a>First Level</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t\t\t<a>Second Level</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Third Level</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Third Level Link #1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Third Level Link #2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Second Level Link #1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a>Second Level Link #2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-external-link\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Front-End <em class=\"not-included\">(Not Included)</em></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-tasks\">
\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t<h6>Projects</h6>
\t\t\t\t\t\t\t\t\t<div class=\"widget-toggle\">+</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled m-none\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Porto HTML5 Template</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tucson Template</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Porto Admin</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"separator\" />
\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-stats\">
\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t<h6>Company Stats</h6>
\t\t\t\t\t\t\t\t\t<div class=\"widget-toggle\">+</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-title\">Stat 1</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-complete\">85%</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">85% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-title\">Stat 2</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-complete\">70%</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">70% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-title\">Stat 3</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stats-complete\">2%</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-primary progress-without-number\" role=\"progressbar\" aria-valuenow=\"2\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">2% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</aside>
\t\t\t\t<!-- end: sidebar -->

\t\t\t\t<section role=\"main\" class=\"content-body\">
\t\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t\t<h2>Basic Forms</h2>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"right-wrapper pull-right\">
\t\t\t\t\t\t\t<ol class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><span>Forms</span></li>
\t\t\t\t\t\t\t\t<li><span>Basic</span></li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"sidebar-right-toggle\" data-open=\"sidebar-right\"><i class=\"fa fa-chevron-left\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>

\t\t\t\t\t<!-- start: page -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Form Elements</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputDefault\">Default</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputDefault\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputDisabled\">Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"inputDisabled\" type=\"text\" placeholder=\"Disabled input here...\" disabled=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputReadOnly\">Read-Only Input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"Read-Only Input\" id=\"inputReadOnly\" class=\"form-control\" readonly=\"readonly\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputHelpText\">Help text</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputHelpText\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">A block of help text that breaks onto a new line and may extend beyond one line.</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputRounded\">Rounded Input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-rounded\" id=\"inputRounded\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputFocus\">Input focus</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"inputFocus\" type=\"text\" value=\"This is focused...\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputPlaceholder\">Placeholder</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"placeholder\" id=\"inputPlaceholder\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"\" id=\"inputPassword\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\" col-md-3 control-label\">Static control</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">email@example.com</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Left Icon</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Left icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Right Icon</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Right icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Search</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"q\" id=\"q\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">File Upload</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uneditable-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file fileupload-exists\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileupload-preview\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileupload-exists\">Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileupload-new\">Select file</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default fileupload-exists\" data-dismiss=\"fileupload\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Vertical Group</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"form-group-vertical\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control last\" type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">Vertical Group w/ icon</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"form-group-vertical\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fa fa-key\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Input with success</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputWarning\">Input with warning</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputWarning\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group has-error\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputError\">Input with error</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputError\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputTooltip\">Input with Tooltip</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Hover me\" title=\"\" data-toggle=\"tooltip\" data-trigger=\"hover\" class=\"form-control\" data-original-title=\"Place your tooltip info here\" id=\"inputTooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputPopover\">Input with Popover</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Click Here\" class=\"form-control\" data-toggle=\"popover\" data-placement=\"top\" data-original-title=\"The Title\" data-content=\"Content goes here...\" data-trigger=\"click\" id=\"inputPopover\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Column sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\".col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs mb-md\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\".col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs mb-md\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\".col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Controls sizing</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Input sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control input-lg mb-md\" type=\"text\" placeholder=\".input-lg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control mb-md\" type=\"text\" placeholder=\"Default input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm mb-md\" type=\"text\" placeholder=\".input-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Select sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-lg mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-sm mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Checkboxes and radios</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption one is this and that—be sure to include why it's great
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption one is this and that—be sure to include why it's great option one
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption one is this and that—be sure to include why it's great
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOption two can be something else and selecting it will deselect option one
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Inline checkboxes</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"inputSuccess\">Selects</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<select multiple=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Input Groups</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Basic examples</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon btn-success\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon btn-warning\">.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon \">.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Sizing</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-lg mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon btn-danger\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Iconic</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Checkbox and radio</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Button addons</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" type=\"button\">Go!</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"button\">Go!</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\">Segmented buttons</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" class=\"btn btn-primary\" type=\"button\">Action</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" class=\"btn btn-primary\" type=\"button\">Action</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button tabindex=\"-1\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul role=\"menu\" class=\"dropdown-menu pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Custom Checkbox &amp; Radio</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Checkboxes</label>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample1\">Checkbox Default</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample2\">Checkbox Primary</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample3\">Checkbox Success</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample4\">Checkbox Warning</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom checkbox-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"\" id=\"checkboxExample5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkboxExample5\">Checkbox Danger</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" disabled=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Checkbox Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" disabled=\"\" checked=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Checked &amp; Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">Radios</label>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample1\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample1\">Radio Default</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample2\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample2\">Radio Primary</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample3\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample3\">Radio Success</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample4\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample4\">Radio Warning</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom radio-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radioExample5\" name=\"radioExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radioExample5\">Radio Danger</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" disabled=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Radio Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" disabled=\"\" checked=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Checked &amp; Disabled</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<section class=\"panel\">
\t\t\t\t\t\t\t\t\t<header class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Textarea</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal form-bordered\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"textareaDefault\">Textarea</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"textareaDefault\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-md-3 control-label\" for=\"textareaAutosize\">Textarea autosize</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"textareaAutosize\" data-plugin-textarea-autosize></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div data-collapsed=\"0\" class=\"panel\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-caret-down\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-times\"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"panel-title\">Input Grid</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-12\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-6\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".col-md-1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: page -->
\t\t\t\t</section>
\t\t\t</div>

\t\t\t<aside id=\"sidebar-right\" class=\"sidebar-right\">
\t\t\t\t<div class=\"nano\">
\t\t\t\t\t<div class=\"nano-content\">
\t\t\t\t\t\t<a href=\"#\" class=\"mobile-close visible-xs\">
\t\t\t\t\t\t\tCollapse <i class=\"fa fa-chevron-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t
\t\t\t\t\t\t<div class=\"sidebar-right-wrapper\">
\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-calendar\">
\t\t\t\t\t\t\t\t<h6>Upcoming Tasks</h6>
\t\t\t\t\t\t\t\t<div data-plugin-datepicker data-plugin-skin=\"dark\" ></div>
\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<time datetime=\"2014-04-19T00:00+00:00\">04/19/2014</time>
\t\t\t\t\t\t\t\t\t\t<span>Company Meeting</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t<div class=\"sidebar-widget widget-friends\">
\t\t\t\t\t\t\t\t<h6>Friends</h6>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"status-online\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"status-online\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"status-offline\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"status-offline\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"profile-picture\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/!sample-user.jpg\" alt=\"Joseph Doe\" class=\"img-circle\">
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"name\">Joseph Doe Junior</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Hey, how are you?</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</aside>
\t\t</section>

\t\t<!-- Vendor -->
\t\t<script src=\"assets/vendor/jquery/jquery.js\"></script>
\t\t<script src=\"assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js\"></script>
\t\t<script src=\"assets/vendor/bootstrap/js/bootstrap.js\"></script>
\t\t<script src=\"assets/vendor/nanoscroller/nanoscroller.js\"></script>
\t\t<script src=\"assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
\t\t<script src=\"assets/vendor/magnific-popup/magnific-popup.js\"></script>
\t\t<script src=\"assets/vendor/jquery-placeholder/jquery.placeholder.js\"></script>
\t\t
\t\t<!-- Specific Page Vendor -->
\t\t<script src=\"assets/vendor/jquery-autosize/jquery.autosize.js\"></script>
\t\t<script src=\"assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js\"></script>
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"assets/javascripts/theme.js\"></script>
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"assets/javascripts/theme.custom.js\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"assets/javascripts/theme.init.js\"></script>

\t</body>
</html>", "form.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\form.html.twig");
    }
}
