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

/* style.css */
class __TwigTemplate_27ffc863bf8bb607fcfccd3a506004df501490b56d329b12b559c4c441f89bfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        // line 1
        echo ".nav-link a:active{
    color:white !important;
}
/*div.container-fluid {*/
/*    color: #07294d;*/
/*}*/
/*.header-top{*/
/*    background-color: #0b2e13;*/
/*}*/


a.navbar-brand{
    color:#ffc600 !important;
    text-decoration: none;
}

a.nav-link{
  color:#ffc600 !important;
  text-decoration: none;
}

a{
  color:#212529;
  text-decoration: none;
}
form{
  margin-left: 30%;
}
.form-control{
  width:auto !important;
}
label{
    background-color: #07294d;
  color:#ffc600;
  font-size: large;
    border-radius:10px;
    //text-shadow: 0 0 3px #5b9aa3;
}
body{
  background-image:  url('https://www.polytecsousse.tn/wp-content/uploads/2020/09/inf.jpg');
   background-repeat: no-repeat;
    background-size: cover;
     background-position: center ;

}

.btn{
  color:white !important;
  background-color: #07294d !important;
  border: 1px solid #07294d !important;
    border-radius:10px;

}

input, select {
    padding: 12px 50px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    display: inline-block;
    box-sizing: border-box;
    border-radius:10px;
  }

  input:focus {
    border: 3px solid #aecff8;
  }
   label {
    width: 10%;
    margin: 30px;
    padding: 10px;
    }
    h1 {
      color:rgb(100, 212, 231); ;
      font-family:script;
      text-align: center;
    }
    table {
      margin-right:30%;
      font-size:20px;
      color:#333333;width:100%;
      border-width: 1px;
      border-color: #ff950d;
      border-collapse: collapse;
      width: 1070px;
      text-align: center;
    }
    table th {
      font-size:20px;
      background-color:#ff950d !important;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #5b9aa3;
      text-align:center;
    }
    table tr {
      background-color:white;
    }
    table td {
      font-size:15px;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #2c3e50;
    }
    table tr:hover {
      background-color:#ff950d ;
    }
    h3,h4{
      color:white;
    }

    .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap !important;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
table tr:hover {
    background-color:#ff950d ;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".nav-link a:active{
    color:white !important;
}
/*div.container-fluid {*/
/*    color: #07294d;*/
/*}*/
/*.header-top{*/
/*    background-color: #0b2e13;*/
/*}*/


a.navbar-brand{
    color:#ffc600 !important;
    text-decoration: none;
}

a.nav-link{
  color:#ffc600 !important;
  text-decoration: none;
}

a{
  color:#212529;
  text-decoration: none;
}
form{
  margin-left: 30%;
}
.form-control{
  width:auto !important;
}
label{
    background-color: #07294d;
  color:#ffc600;
  font-size: large;
    border-radius:10px;
    //text-shadow: 0 0 3px #5b9aa3;
}
body{
  background-image:  url('https://www.polytecsousse.tn/wp-content/uploads/2020/09/inf.jpg');
   background-repeat: no-repeat;
    background-size: cover;
     background-position: center ;

}

.btn{
  color:white !important;
  background-color: #07294d !important;
  border: 1px solid #07294d !important;
    border-radius:10px;

}

input, select {
    padding: 12px 50px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    display: inline-block;
    box-sizing: border-box;
    border-radius:10px;
  }

  input:focus {
    border: 3px solid #aecff8;
  }
   label {
    width: 10%;
    margin: 30px;
    padding: 10px;
    }
    h1 {
      color:rgb(100, 212, 231); ;
      font-family:script;
      text-align: center;
    }
    table {
      margin-right:30%;
      font-size:20px;
      color:#333333;width:100%;
      border-width: 1px;
      border-color: #ff950d;
      border-collapse: collapse;
      width: 1070px;
      text-align: center;
    }
    table th {
      font-size:20px;
      background-color:#ff950d !important;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #5b9aa3;
      text-align:center;
    }
    table tr {
      background-color:white;
    }
    table td {
      font-size:15px;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #2c3e50;
    }
    table tr:hover {
      background-color:#ff950d ;
    }
    h3,h4{
      color:white;
    }

    .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap !important;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
table tr:hover {
    background-color:#ff950d ;
}", "style.css", "C:\\Users\\arijkortas\\Desktop\\projet1\\templates\\style.css");
    }
}
