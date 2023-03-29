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

/* formateurs/show.html.twig */
class __TwigTemplate_688a4b7006b2d7692a4e58e056dfbfa0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateurs/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateurs/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formateurs/show.html.twig", 1);
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

        echo "Détails";
        
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
        echo " ";
        $this->loadTemplate("navbarVertical.html.twig", "formateurs/show.html.twig", 6)->display($context);
        echo " 
    <h1>Détails</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom </th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 17, $this->source); })()), "nomFormateur", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 21, $this->source); })()), "prenomFormateur", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 25, $this->source); })()), "loginFormateur", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mot de passe</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 29, $this->source); })()), "mdpFormateur", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 33
        echo twig_include($this->env, $context, "formateurs/_delete_form.html.twig");
        echo "
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formateurs_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">Modifier</a><br>
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formateurs_index");
        echo "\">Retour vers la liste des formateurs</a>

    

   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formateurs/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 35,  138 => 34,  134 => 33,  127 => 29,  120 => 25,  113 => 21,  106 => 17,  99 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails{% endblock %}

{% block body %}
 {% include('navbarVertical.html.twig') %} 
    <h1>Détails</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ formateur.id }}</td>
            </tr>
            <tr>
                <th>Nom </th>
                <td>{{ formateur.nomFormateur }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ formateur.prenomFormateur }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ formateur.loginFormateur }}</td>
            </tr>
            <tr>
                <th>Mot de passe</th>
                <td>{{ formateur.mdpFormateur }}</td>
            </tr>
        </tbody>
    </table>
    {{ include('formateurs/_delete_form.html.twig') }}
    <a href=\"{{ path('formateurs_edit', {'id': formateur.id}) }}\">Modifier</a><br>
    <a href=\"{{ path('formateurs_index') }}\">Retour vers la liste des formateurs</a>

    

   
{% endblock %}
", "formateurs/show.html.twig", "C:\\xampp\\htdocs\\projet1\\templates\\formateurs\\show.html.twig");
    }
}
