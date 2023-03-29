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

/* index.html.twig */
class __TwigTemplate_7563342f5dc3fe8c0b9433aab1cd3fd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        echo "        <header>
          <div class=\"view\" style=\"background-image: url('https://www.polytecsousse.tn/wp-content/themes/edubin/assets/images/header.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;\">
            <div class=\"mask rgba-gradient align-items-center\">
                <div class=\"row\">
                  <div style=\"margin-left: 50%;\" class=\"col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                    <h1 class=\"h1-responsive font-weight-bold mt-sm-5\" style=\"color: #07294d\">GoFormations </h1>
                    <hr class=\"hr-light\">
                    <h5 class=\"mb-4\" style=\"color:white;\">Votre plateforme d'apprentissage 100% en ligne. Inscrivez-vous pour découvrir les différents cours proposés et bénéficier d'une expérience e-learning enrichissante ! Si vous êtes déjà enregistrés, connectez vous.</h5>
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>Se connecter</b></a>
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>S'inscrire</b></a>
";
        // line 15
        echo "                  </div>
                  <div class=\"col-md-6 col-xl-5 mt-xl-5 wow fadeInRight\" data-wow-delay=\"0.3s\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

        <style >
            h5 {
                background: #07294d;
                opacity: .6;
                border-radius:5px;
                font-size: 1.17rem;
                
            }
        </style>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block body %}
        <header>
          <div class=\"view\" style=\"background-image: url('https://www.polytecsousse.tn/wp-content/themes/edubin/assets/images/header.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;\">
            <div class=\"mask rgba-gradient align-items-center\">
                <div class=\"row\">
                  <div style=\"margin-left: 50%;\" class=\"col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                    <h1 class=\"h1-responsive font-weight-bold mt-sm-5\" style=\"color: #07294d\">GoFormations </h1>
                    <hr class=\"hr-light\">
                    <h5 class=\"mb-4\" style=\"color:white;\">Votre plateforme d'apprentissage 100% en ligne. Inscrivez-vous pour découvrir les différents cours proposés et bénéficier d'une expérience e-learning enrichissante ! Si vous êtes déjà enregistrés, connectez vous.</h5>
                    <a href=\"{{ path('login') }}\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>Se connecter</b></a>
                    <a href=\"{{ path('app_register') }}\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-white\"><b>S'inscrire</b></a>
{#                    <a href=\"/suggestions/new2\" style=\"color:rgb(100, 212, 231);\" class=\"btn btn-outline-white\"><b>Proposez des formations de vos choix</b></a>#}
                  </div>
                  <div class=\"col-md-6 col-xl-5 mt-xl-5 wow fadeInRight\" data-wow-delay=\"0.3s\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

        <style >
            h5 {
                background: #07294d;
                opacity: .6;
                border-radius:5px;
                font-size: 1.17rem;
                
            }
        </style>
   {% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\projet1\\templates\\index.html.twig");
    }
}
