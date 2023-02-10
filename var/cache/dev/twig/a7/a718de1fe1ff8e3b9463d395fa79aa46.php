<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* terrarium/show.html.twig */
class __TwigTemplate_9aa1593dde3ae3ad5572dc88efc7c8ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terrarium/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terrarium/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "terrarium/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Terrarium";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Terrarium</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LuminosityLevel</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 16, $this->source); })()), "luminosityLevel", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>MinLuminosityLevel</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 20, $this->source); })()), "minLuminosityLevel", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NightHour</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 24, $this->source); })()), "nightHour", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 24, $this->source); })()), "nightHour", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DayHour</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 28, $this->source); })()), "dayHour", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 28, $this->source); })()), "dayHour", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Specimen</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 36, $this->source); })()), "specimen", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terrarium_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terrarium_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["terrarium"]) || array_key_exists("terrarium", $context) ? $context["terrarium"] : (function () { throw new RuntimeError('Variable "terrarium" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "terrarium/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "terrarium/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Terrarium{% endblock %}

{% block body %}
    <h1>Terrarium</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ terrarium.id }}</td>
            </tr>
            <tr>
                <th>LuminosityLevel</th>
                <td>{{ terrarium.luminosityLevel }}</td>
            </tr>
            <tr>
                <th>MinLuminosityLevel</th>
                <td>{{ terrarium.minLuminosityLevel }}</td>
            </tr>
            <tr>
                <th>NightHour</th>
                <td>{{ terrarium.nightHour ? terrarium.nightHour|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>DayHour</th>
                <td>{{ terrarium.dayHour ? terrarium.dayHour|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ terrarium.name }}</td>
            </tr>
            <tr>
                <th>Specimen</th>
                <td>{{ terrarium.specimen }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_terrarium_index') }}\">back to list</a>

    <a href=\"{{ path('app_terrarium_edit', {'id': terrarium.id}) }}\">edit</a>

    {{ include('terrarium/_delete_form.html.twig') }}
{% endblock %}
", "terrarium/show.html.twig", "/Users/axeldufrenay/Documents/connected_terrarium/templates/terrarium/show.html.twig");
    }
}
