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

/* performanceathlete/show.html.twig */
class __TwigTemplate_5b4e55a23927d353fef724ef13a94836 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performanceathlete/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performanceathlete/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "performanceathlete/show.html.twig", 1);
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

        yield "Performanceathlete";
        
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
        yield "    <h1>Performanceathlete</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>MinutesJouees</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 16, $this->source); })()), "minutesJouees", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Buts</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 20, $this->source); })()), "buts", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PassesDecisives</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 24, $this->source); })()), "passesDecisives", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Tirs</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 28, $this->source); })()), "tirs", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Interceptions</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 32, $this->source); })()), "interceptions", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Fautes</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 36, $this->source); })()), "fautes", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>CartonsJaunes</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 40, $this->source); })()), "cartonsJaunes", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>CartonsRouges</th>
                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 44, $this->source); })()), "cartonsRouges", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Rebonds</th>
                <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 48, $this->source); })()), "rebonds", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceathlete_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_performanceathlete_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["performanceathlete"]) || array_key_exists("performanceathlete", $context) ? $context["performanceathlete"] : (function () { throw new RuntimeError('Variable "performanceathlete" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "performanceathlete/_delete_form.html.twig");
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
        return "performanceathlete/show.html.twig";
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
        return array (  189 => 57,  184 => 55,  179 => 53,  171 => 48,  164 => 44,  157 => 40,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Performanceathlete{% endblock %}

{% block body %}
    <h1>Performanceathlete</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ performanceathlete.id }}</td>
            </tr>
            <tr>
                <th>MinutesJouees</th>
                <td>{{ performanceathlete.minutesJouees }}</td>
            </tr>
            <tr>
                <th>Buts</th>
                <td>{{ performanceathlete.buts }}</td>
            </tr>
            <tr>
                <th>PassesDecisives</th>
                <td>{{ performanceathlete.passesDecisives }}</td>
            </tr>
            <tr>
                <th>Tirs</th>
                <td>{{ performanceathlete.tirs }}</td>
            </tr>
            <tr>
                <th>Interceptions</th>
                <td>{{ performanceathlete.interceptions }}</td>
            </tr>
            <tr>
                <th>Fautes</th>
                <td>{{ performanceathlete.fautes }}</td>
            </tr>
            <tr>
                <th>CartonsJaunes</th>
                <td>{{ performanceathlete.cartonsJaunes }}</td>
            </tr>
            <tr>
                <th>CartonsRouges</th>
                <td>{{ performanceathlete.cartonsRouges }}</td>
            </tr>
            <tr>
                <th>Rebonds</th>
                <td>{{ performanceathlete.rebonds }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_performanceathlete_index') }}\">back to list</a>

    <a href=\"{{ path('app_performanceathlete_edit', {'id': performanceathlete.id}) }}\">edit</a>

    {{ include('performanceathlete/_delete_form.html.twig') }}
{% endblock %}
", "performanceathlete/show.html.twig", "C:\\Users\\fatma\\symfonypidev\\templates\\performanceathlete\\show.html.twig");
    }
}
