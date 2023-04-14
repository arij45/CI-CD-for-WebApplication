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
class __TwigTemplate_d009fd34d227a250ccc38dc2ffc08c519a7a891ba058c140d48ee61df64b5129 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbarVertical2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbarVertical2.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
</div>", "navbarVertical2.html.twig", "C:\\Users\\arijkortas\\Desktop\\gestion_formations\\app\\templates\\navbarVertical2.html.twig");
    }
}
