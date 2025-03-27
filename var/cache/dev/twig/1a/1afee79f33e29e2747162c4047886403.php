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
class __TwigTemplate_13e6a410fcacb99df1eac0be1a37cc87 extends Template
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

        yield "Tournois";
        
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
        yield "    <h1>Tournois</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Sport</th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 19, $this->source); })()), "sport", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 23, $this->source); })()), "dateDebut", [], "any", false, false, false, 23), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 27, $this->source); })()), "dateFin", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 31, $this->source); })()), "adresse", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournoi"]) || array_key_exists("tournoi", $context) ? $context["tournoi"] : (function () { throw new RuntimeError('Variable "tournoi" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "tournois/_delete_form.html.twig");
        yield "
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
        return array (  157 => 40,  152 => 38,  147 => 36,  139 => 31,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tournois{% endblock %}

{% block body %}
    <h1>Tournois</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ tournoi.nom }}</td>
            </tr>
            <tr>
                <th>Sport</th>
                <td>{{ tournoi.sport }}</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>{{ tournoi.dateDebut ? tournoi.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>{{ tournoi.dateFin ? tournoi.dateFin|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ tournoi.adresse }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_tournois_index') }}\">back to list</a>

    <a href=\"{{ path('app_tournois_edit', {'id': tournoi.id}) }}\">edit</a>

    {{ include('tournois/_delete_form.html.twig') }}
{% endblock %}
", "tournois/show.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\tournois\\show.html.twig");
    }
}
