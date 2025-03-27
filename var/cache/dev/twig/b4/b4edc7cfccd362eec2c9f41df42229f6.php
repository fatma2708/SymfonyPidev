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

/* performanceequipe/new.html.twig */
class __TwigTemplate_09efc25db2360c7e08c0cd11d80a22c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performanceequipe/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performanceequipe/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "performanceequipe/new.html.twig", 1);
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

        yield "Create Performanceequipe";
        
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
            <h2 class=\"panel-title\"><i class=\"fas fa-chart-line\"></i> Create Performanceequipe</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-horizontal form-bordered"]]);
        yield "

                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "victoires", [], "any", false, false, false, 16), 'label');
        yield "</label>
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fas fa-trophy\"></i></span>
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "victoires", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Number of Wins"]]);
        yield "
                            </div>
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "victoires", [], "any", false, false, false, 22), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "pertes", [], "any", false, false, false, 27), 'label');
        yield "</label>
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fas fa-times-circle\"></i></span>
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "pertes", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Number of Losses"]]);
        yield "
                            </div>
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "pertes", [], "any", false, false, false, 33), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "rang", [], "any", false, false, false, 38), 'label');
        yield "</label>
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fas fa-medal\"></i></span>
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "rang", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Team Rank"]]);
        yield "
                            </div>
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "rang", [], "any", false, false, false, 44), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                            <button class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> Save</button>
                            <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceequipe_index");
        yield "\" class=\"btn btn-default\">
                                <i class=\"fas fa-arrow-left\"></i> Back to list
                            </a>
                        </div>
                    </div>

                    ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
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
        return "performanceequipe/new.html.twig";
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
        return array (  186 => 57,  177 => 51,  167 => 44,  162 => 42,  155 => 38,  147 => 33,  142 => 31,  135 => 27,  127 => 22,  122 => 20,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Performanceequipe{% endblock %}

{% block body %}
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\"><i class=\"fas fa-chart-line\"></i> Create Performanceequipe</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'novalidate':'novalidate','class': 'form-horizontal form-bordered'}}) }}

                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">{{ form_label(form.victoires) }}</label>
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fas fa-trophy\"></i></span>
                                {{ form_widget(form.victoires, {'attr': {'class': 'form-control', 'placeholder': 'Number of Wins'}}) }}
                            </div>
                            {{ form_errors(form.victoires) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">{{ form_label(form.pertes) }}</label>
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fas fa-times-circle\"></i></span>
                                {{ form_widget(form.pertes, {'attr': {'class': 'form-control', 'placeholder': 'Number of Losses'}}) }}
                            </div>
                            {{ form_errors(form.pertes) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">{{ form_label(form.rang) }}</label>
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fas fa-medal\"></i></span>
                                {{ form_widget(form.rang, {'attr': {'class': 'form-control', 'placeholder': 'Team Rank'}}) }}
                            </div>
                            {{ form_errors(form.rang) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                            <button class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> Save</button>
                            <a href=\"{{ path('app_performanceequipe_index') }}\" class=\"btn btn-default\">
                                <i class=\"fas fa-arrow-left\"></i> Back to list
                            </a>
                        </div>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "performanceequipe/new.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\performanceequipe\\new.html.twig");
    }
}
