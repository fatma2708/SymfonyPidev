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

/* performanceequipe/show.html.twig */
class __TwigTemplate_02313f758055d7f8c8ec5756f01eecc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performanceequipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performanceequipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "performanceequipe/show.html.twig", 1);
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

        yield "Performanceequipe Details";
        
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
            <h2 class=\"panel-title\"><i class=\"fas fa-chart-line\"></i> Performanceequipe Details</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\"><i class=\"fas fa-users\"></i> Team Performance</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <th><i class=\"fas fa-trophy\"></i> Victoires</th>
                                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceequipe"]) || array_key_exists("performanceequipe", $context) ? $context["performanceequipe"] : (function () { throw new RuntimeError('Variable "performanceequipe" does not exist.', 20, $this->source); })()), "victoires", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-times-circle\"></i> Pertes</th>
                                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceequipe"]) || array_key_exists("performanceequipe", $context) ? $context["performanceequipe"] : (function () { throw new RuntimeError('Variable "performanceequipe" does not exist.', 24, $this->source); })()), "pertes", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-medal\"></i> Rang</th>
                                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceequipe"]) || array_key_exists("performanceequipe", $context) ? $context["performanceequipe"] : (function () { throw new RuntimeError('Variable "performanceequipe" does not exist.', 28, $this->source); })()), "rang", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer text-right\">
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceequipe_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Back to List
                    </a>
                    <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceequipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceequipe"]) || array_key_exists("performanceequipe", $context) ? $context["performanceequipe"] : (function () { throw new RuntimeError('Variable "performanceequipe" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit\"></i> Edit
                    </a>
                    ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "performanceequipe/_delete_form.html.twig");
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
        return "performanceequipe/show.html.twig";
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
        return array (  151 => 40,  145 => 37,  139 => 34,  130 => 28,  123 => 24,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Performanceequipe Details{% endblock %}

{% block body %}
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\"><i class=\"fas fa-chart-line\"></i> Performanceequipe Details</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\"><i class=\"fas fa-users\"></i> Team Performance</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr>
                                <th><i class=\"fas fa-trophy\"></i> Victoires</th>
                                <td>{{ performanceequipe.victoires }}</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-times-circle\"></i> Pertes</th>
                                <td>{{ performanceequipe.pertes }}</td>
                            </tr>
                            <tr>
                                <th><i class=\"fas fa-medal\"></i> Rang</th>
                                <td>{{ performanceequipe.rang }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer text-right\">
                    <a href=\"{{ path('app_performanceequipe_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Back to List
                    </a>
                    <a href=\"{{ path('app_performanceequipe_edit', {'id': performanceequipe.id}) }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-edit\"></i> Edit
                    </a>
                    {{ include('performanceequipe/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "performanceequipe/show.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\performanceequipe\\show.html.twig");
    }
}
