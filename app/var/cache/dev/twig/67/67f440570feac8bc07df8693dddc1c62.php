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

/* navbarVertical2.html.twig */
class __TwigTemplate_669bf949a22cd7327fd7ebd4a20267ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbarVertical2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbarVertical2.html.twig"));

        // line 1
        echo "<div class=\"nav flex-row nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
  <a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suggestions_new");
        echo "\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Suggerer une formation</a>
  <a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_new2");
        echo "\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Envoyer un message</a>
    <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index2");
        echo "\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Calendrier des formations</a>
  <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Logout</a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbarVertical2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav flex-row nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
  <a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"{{ path('suggestions_new') }}\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Suggerer une formation</a>
  <a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"{{path('messages_new2')}}\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Envoyer un message</a>
    <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"{{ path('formations_index2') }}\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Calendrier des formations</a>
  <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"{{ path('home') }}\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Logout</a>
</div>", "navbarVertical2.html.twig", "C:\\xampp\\htdocs\\projet1\\templates\\navbarVertical2.html.twig");
    }
}
