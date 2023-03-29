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

/* base1.html.twig */
class __TwigTemplate_07db18d8230cf22157fe60b3002f55e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://www.polytecsousse.tn/wp-content/plugins/edubin-core/assets/css/bootstrap.min.css?ver=8.9.22\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-secondary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_new");
        echo "\">Contactez-nous</a>
                </li>
                ";
        // line 16
        echo "                ";
        // line 17
        echo "                ";
        // line 18
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container\">
    <div class=\"header-left\">
        <img width=\"180\" height=\"90\"   src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Images/cropped-logo-polytech.png"), "html", null, true);
        echo "\" class=\"custom-logo\" alt=\"Ecole polytechnique de sousse\" decoding=\"async\">
    </div>
</div>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "<style>";
        $this->loadTemplate("style1.css", "base1.html.twig", 32)->display($context);
        echo "</style>
<style>";
        // line 33
        $this->loadTemplate("bootstrap.min.css", "base1.html.twig", 33)->display($context);
        echo "</style>

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  97 => 33,  92 => 32,  90 => 30,  84 => 27,  73 => 19,  70 => 18,  68 => 17,  66 => 16,  61 => 13,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"https://www.polytecsousse.tn/wp-content/plugins/edubin-core/assets/css/bootstrap.min.css?ver=8.9.22\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-secondary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Accueil</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('messages_new') }}\">Contactez-nous</a>
                </li>
                {#                <li class=\"nav-item\">#}
                {#                    <a class=\"nav-link\" href=\"{{ path('about')}}\">En savoir plus</a>#}
                {#                </li>#}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_register') }}\">S'inscrire</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container\">
    <div class=\"header-left\">
        <img width=\"180\" height=\"90\"   src=\"{{ asset('Images/cropped-logo-polytech.png') }}\" class=\"custom-logo\" alt=\"Ecole polytechnique de sousse\" decoding=\"async\">
    </div>
</div>
{% block body %}
{% endblock %}
<style>{% include 'style1.css' %}</style>
<style>{% include'bootstrap.min.css' %}</style>

</body>

</html>
", "base1.html.twig", "C:\\xampp\\htdocs\\projet1\\templates\\base1.html.twig");
    }
}
