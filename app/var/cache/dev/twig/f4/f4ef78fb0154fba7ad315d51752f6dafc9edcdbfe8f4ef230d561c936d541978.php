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

/* inscription/_form.html.twig */
class __TwigTemplate_7bcbcd75bfb177af5ccb248c352e38308f70af53fdc246232e50dac1e8ba6643 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 2, $this->source); })()), 'widget');
        echo "
<button class=\"btn\">";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 3, $this->source); })()), "valider")) : ("valider")), "html", null, true);
        echo "</button>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["inscriptionForm"]) || array_key_exists("inscriptionForm", $context) ? $context["inscriptionForm"] : (function () { throw new RuntimeError('Variable "inscriptionForm" does not exist.', 4, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inscription/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(inscriptionForm) }}
    {{ form_widget(inscriptionForm) }}
<button class=\"btn\">{{ button_label|default('valider') }}</button>
{{ form_end(inscriptionForm) }}", "inscription/_form.html.twig", "C:\\Users\\arijkortas\\Desktop\\projet1\\templates\\inscription\\_form.html.twig");
    }
}
