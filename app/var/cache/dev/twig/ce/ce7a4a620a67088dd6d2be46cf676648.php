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

/* formations/calendar.html.twig */
class __TwigTemplate_a3f08f1eced56a30db5260beec5e748b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/calendar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/calendar.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->loadTemplate("navbarVertical.html.twig", "formations/calendar.html.twig", 5)->display($context);
        echo " 
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_new");
        echo "\">Ajouter une formation</a>

    ";
        // line 8
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "formations/calendar.html.twig", 8)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://momentjs.com/downloads/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/fr.js\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#calendar-holder\").fullCalendar({
                eventSources: [
                    {
                        url: \"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fullcalendar_load_events");
        echo "\",
                        type: \"POST\",
                        data: {
                            filters: {},
                        },
                        error: function () {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        }
                    }
                ],
                header: {
                    center: \"title\",
                    left: \"prev,next today\",
                    right: \"month,agendaWeek,agendaDay\"
                },
                lazyFetching: true,
                locale: \"fr\",
                navLinks: false, // can click day/week names to navigate views
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formations/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 26,  121 => 16,  111 => 15,  100 => 12,  90 => 11,  80 => 8,  75 => 6,  70 => 5,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% include('navbarVertical.html.twig') %} 
    <a href=\"{{ path('formations_new') }}\">Ajouter une formation</a>

    {% include '@FullCalendar/Calendar/calendar.html.twig' %}
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css\">
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://momentjs.com/downloads/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/fr.js\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#calendar-holder\").fullCalendar({
                eventSources: [
                    {
                        url: \"{{ path('fullcalendar_load_events') }}\",
                        type: \"POST\",
                        data: {
                            filters: {},
                        },
                        error: function () {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        }
                    }
                ],
                header: {
                    center: \"title\",
                    left: \"prev,next today\",
                    right: \"month,agendaWeek,agendaDay\"
                },
                lazyFetching: true,
                locale: \"fr\",
                navLinks: false, // can click day/week names to navigate views
            });
        });
    </script>
{% endblock %}", "formations/calendar.html.twig", "C:\\xampp\\htdocs\\projet1\\templates\\formations\\calendar.html.twig");
    }
}
