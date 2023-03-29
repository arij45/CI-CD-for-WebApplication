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

/* formations/show.html.twig */
class __TwigTemplate_d6c35960f952ccd716b8729b82d4f0e393fb01b173a22b8ab6568fb1ce069bc4 extends Template
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
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/show.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "formations/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("navbarVertical2.html.twig", "formations/show.html.twig", 6)->display($context);
        echo " 
    <h1>Détails</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Thème</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 13, $this->source); })()), "theme", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date Debut</th>
                <td>";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 21, $this->source); })()), "dateDebut", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 21, $this->source); })()), "dateDebut", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date Fin</th>
                <td>";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 25, $this->source); })()), "dateFin", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 25, $this->source); })()), "dateFin", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 37, $this->source); })()), "idFormateur", [], "any", false, false, false, 37), "toString", [], "method", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
         <br>
          <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_form", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\"><button class=\"btn\">S'inscrire</button></a>
          <br>
    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index2");
        echo "\"><button class=\"btn\">Retour vers le calendrier des formations</button></a>
    <br>
    
            <h1>Liste des commentaires</h1>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 48, $this->source); })()), "commentaires", [], "any", false, false, false, 48));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 49
            echo "                <p style=\"color: white\"> publié par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo ": </p>
                <div style=\"color: white\"> ";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 50);
            echo " </div><br>
                 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"6\"><h4>Aucun commentaire à afficher pour le moment!</h4></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        
            <h1>Ajouter un commentaire</h1>
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 58, $this->source); })()), 'form');
        echo "
     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 58,  186 => 56,  177 => 52,  170 => 50,  165 => 49,  160 => 48,  153 => 44,  148 => 42,  140 => 37,  133 => 33,  126 => 29,  119 => 25,  112 => 21,  105 => 17,  98 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Détails{% endblock %}

{% block body %}
{% include('navbarVertical2.html.twig') %} 
    <h1>Détails</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Thème</th>
                <td>{{ formation.theme }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ formation.nom }}</td>
            </tr>
            <tr>
                <th>Date Debut</th>
                <td>{{ formation.dateDebut ? formation.dateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date Fin</th>
                <td>{{ formation.dateFin ? formation.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ formation.description }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ formation.prix }}</td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td>{{ formation.idFormateur.toString() }}</td>
            </tr>
        </tbody>
    </table>
         <br>
          <a href=\"{{ path('inscription_form', {'id':formation.id}) }}\"><button class=\"btn\">S'inscrire</button></a>
          <br>
    <a href=\"{{ path('formations_index2') }}\"><button class=\"btn\">Retour vers le calendrier des formations</button></a>
    <br>
    
            <h1>Liste des commentaires</h1>
            {% for commentaire in formation.commentaires %}
                <p style=\"color: white\"> publié par {{commentaire.nom}}: </p>
                <div style=\"color: white\"> {{commentaire.contenu|raw}} </div><br>
                 {% else %}
            <tr>
                <td colspan=\"6\"><h4>Aucun commentaire à afficher pour le moment!</h4></td>
            </tr>
            {% endfor %}
        
            <h1>Ajouter un commentaire</h1>
            {{ form(commentaireForm)}}
     
{% endblock %}
", "formations/show.html.twig", "C:\\Users\\arijkortas\\Desktop\\projet1\\templates\\formations\\show.html.twig");
    }
}
