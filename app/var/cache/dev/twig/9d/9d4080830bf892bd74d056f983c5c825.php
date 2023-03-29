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
class __TwigTemplate_b78fac1b18518a2b0c26528981f96369 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
", "registration/accueil.html.twig", "/var/www/app/templates/registration/accueil.html.twig");
    }
}
