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

/* tournois/edit.html.twig */
class __TwigTemplate_805bb2fe990418482dc46cd28429c4f0 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tournois/edit.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Edit Tournoi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Edit Tournoi</h2>
        </header>
        <div class=\"panel-body\">
            ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-horizontal form-bordered"]]);
        yield "

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'label');
        yield "</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-trophy\"></i></span>
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Tournament Name"]]);
        yield "
                    </div>
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "sport", [], "any", false, false, false, 27), 'label');
        yield "</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-futbol\"></i></span>
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "sport", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Sport Type"]]);
        yield "
                    </div>
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "sport", [], "any", false, false, false, 33), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "dateDebut", [], "any", false, false, false, 38), 'label');
        yield "</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-calendar\"></i></span>
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        yield "
                    </div>
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateDebut", [], "any", false, false, false, 44), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateFin", [], "any", false, false, false, 49), 'label');
        yield "</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-calendar-check\"></i></span>
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "dateFin", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        yield "
                    </div>
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "dateFin", [], "any", false, false, false, 55), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "adresse", [], "any", false, false, false, 60), 'label');
        yield "</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-map-marker-alt\"></i></span>
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter Address"]]);
        yield "
                    </div>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "adresse", [], "any", false, false, false, 66), 'errors');
        yield "
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <button class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i> ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 72, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        yield "</button>
                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_index");
        yield "\" class=\"btn btn-default\"><i class=\"fas fa-arrow-left\"></i> Back to list</a>
                </div>
            </div>

            ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        yield "

            <hr>

            <div class=\"form-group\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h4>Delete this Tournoi</h4>
                    ";
        // line 84
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
        return "tournois/edit.html.twig";
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
        return array (  235 => 84,  225 => 77,  218 => 73,  214 => 72,  205 => 66,  200 => 64,  193 => 60,  185 => 55,  180 => 53,  173 => 49,  165 => 44,  160 => 42,  153 => 38,  145 => 33,  140 => 31,  133 => 27,  125 => 22,  120 => 20,  113 => 16,  107 => 13,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# filepath: c:\\Users\\fatma\\symfonypidev\\templates\\tournois\\edit.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Edit Tournoi{% endblock %}

{% block body %}
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Edit Tournoi</h2>
        </header>
        <div class=\"panel-body\">
            {{ form_start(form, {'attr': {'novalidate':'novalidate','class': 'form-horizontal form-bordered'}}) }}

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">{{ form_label(form.nom) }}</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-trophy\"></i></span>
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Tournament Name'}}) }}
                    </div>
                    {{ form_errors(form.nom) }}
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">{{ form_label(form.sport) }}</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-futbol\"></i></span>
                        {{ form_widget(form.sport, {'attr': {'class': 'form-control', 'placeholder': 'Sport Type'}}) }}
                    </div>
                    {{ form_errors(form.sport) }}
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">{{ form_label(form.dateDebut) }}</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-calendar\"></i></span>
                        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
                    </div>
                    {{ form_errors(form.dateDebut) }}
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">{{ form_label(form.dateFin) }}</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-calendar-check\"></i></span>
                        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
                    </div>
                    {{ form_errors(form.dateFin) }}
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-3 control-label\">{{ form_label(form.adresse) }}</label>
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fas fa-map-marker-alt\"></i></span>
                        {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Enter Address'}}) }}
                    </div>
                    {{ form_errors(form.adresse) }}
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <button class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i> {{ button_label|default('Update') }}</button>
                    <a href=\"{{ path('app_tournois_index') }}\" class=\"btn btn-default\"><i class=\"fas fa-arrow-left\"></i> Back to list</a>
                </div>
            </div>

            {{ form_end(form) }}

            <hr>

            <div class=\"form-group\">
                <div class=\"col-md-6 col-md-offset-3\">
                    <h4>Delete this Tournoi</h4>
                    {{ include('tournois/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "tournois/edit.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\tournois\\edit.html.twig");
    }
}
