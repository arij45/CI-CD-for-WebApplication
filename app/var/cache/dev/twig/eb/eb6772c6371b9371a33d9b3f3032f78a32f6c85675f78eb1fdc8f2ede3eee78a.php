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

/* registration/accueil.html.twig */
class __TwigTemplate_3601ce94ef965257ae72dfb755d9b971bda580c9aa92db7d7495683cab5e3cf0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <!-- Main navigation -->
        <header>
          <!-- Full Page Intro -->
         
            <!-- Mask & flexbox options-->
            <div class=\"mask rgba-gradient align-items-center\">
              <!-- Content -->
              <div class=\"container\">
                <!--Grid row-->
                <div class=\"row\">
                  <!--Grid column-->
                  <div style=\"margin-left: 50%;\" class=\"col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                    <hr class=\"hr-light\">
                    <h5 class=\"mb-4\" style=\"color:white;\">Accédez à votre espace resérvé!</h5>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>Espace administration</b></a>
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant");
        echo "\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>Espace étudiant</b></a>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class=\"col-md-6 col-xl-5 mt-xl-5 wow fadeInRight\" data-wow-delay=\"0.3s\">
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main Layout-->
        

   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block body %}

        <!-- Main navigation -->
        <header>
          <!-- Full Page Intro -->
         
            <!-- Mask & flexbox options-->
            <div class=\"mask rgba-gradient align-items-center\">
              <!-- Content -->
              <div class=\"container\">
                <!--Grid row-->
                <div class=\"row\">
                  <!--Grid column-->
                  <div style=\"margin-left: 50%;\" class=\"col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                    <hr class=\"hr-light\">
                    <h5 class=\"mb-4\" style=\"color:white;\">Accédez à votre espace resérvé!</h5>
                    <a href=\"{{ path('admin') }}\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>Espace administration</b></a>
                    <a href=\"{{ path('etudiant') }}\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>Espace étudiant</b></a>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class=\"col-md-6 col-xl-5 mt-xl-5 wow fadeInRight\" data-wow-delay=\"0.3s\">
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main Layout-->
        

   {% endblock %}
", "registration/accueil.html.twig", "C:\\Users\\arijkortas\\Desktop\\gestion_formations\\app\\templates\\registration\\accueil.html.twig");
    }
}
