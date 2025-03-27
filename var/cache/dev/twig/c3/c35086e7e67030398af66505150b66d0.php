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

/* tournois/show.html.twig */
class __TwigTemplate_5be9a5dc67ce472605c8623f633dc1ce extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tournois/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Tournoi Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\"><i class=\"fas fa-trophy\"></i> Tournoi Details</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <th><i class=\"fas fa-futbol\"></i> Sport</th>
                                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 20, $this->source); })()), "sport", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-calendar\"></i> Date Début</th>
                                <td>";
        // line 24
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 24, $this->source); })()), "dateDebut", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 24, $this->source); })()), "dateDebut", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-calendar-check\"></i> Date Fin</th>
                                <td>";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 28, $this->source); })()), "dateFin", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 28, $this->source); })()), "dateFin", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-map-marker-alt\"></i> Adresse</th>
                                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer text-right\">
                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Back to List
                    </a>
                    <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit\"></i> Edit
                    </a>
                    ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "tournois/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </section>
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
        return "tournois/show.html.twig";
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
        return array (  161 => 44,  155 => 41,  149 => 38,  140 => 32,  133 => 28,  126 => 24,  119 => 20,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tournoi Details{% endblock %}

{% block body %}
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\"><i class=\"fas fa-trophy\"></i> Tournoi Details</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">{{ tournoi.nom }}</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <th><i class=\"fas fa-futbol\"></i> Sport</th>
                                <td>{{ tournoi.sport }}</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-calendar\"></i> Date Début</th>
                                <td>{{ tournoi.dateDebut ? tournoi.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-calendar-check\"></i> Date Fin</th>
                                <td>{{ tournoi.dateFin ? tournoi.dateFin|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-map-marker-alt\"></i> Adresse</th>
                                <td>{{ tournoi.adresse }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer text-right\">
                    <a href=\"{{ path('app_tournois_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Back to List
                    </a>
                    <a href=\"{{ path('app_tournois_edit', {'id': tournoi.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit\"></i> Edit
                    </a>
                    {{ include('tournois/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "tournois/show.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\tournois\\show.html.twig");
    }
}
