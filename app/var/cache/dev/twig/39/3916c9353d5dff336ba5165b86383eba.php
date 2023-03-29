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

/* style1.css */
class __TwigTemplate_955514b1c0bb9c683b17da034057fb42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style1.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style1.css"));

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
    color: #ff950d;
    text-decoration: none;
}
form{
    margin-left: 30%;
}
.form-control{
    width:auto !important;
}
label{
   // background-color: #07294d;
    color:#ffc600;
    font-size: large;
    border-radius:10px;
//text-shadow: 0 0 3px #5b9aa3;
}

body{
    background-image:  url('https://img.freepik.com/free-vector/gradient-isometric-laptop-technology-background_52683-4502.jpg?w=2000');
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
    width: 15%;
    margin: 30px;
    padding: 10px;
}
h1 {
    color:rgb(100, 212, 231);
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
    color:rgb(100, 212, 231);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "style1.css";
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
    color: #ff950d;
    text-decoration: none;
}
form{
    margin-left: 30%;
}
.form-control{
    width:auto !important;
}
label{
   // background-color: #07294d;
    color:#ffc600;
    font-size: large;
    border-radius:10px;
//text-shadow: 0 0 3px #5b9aa3;
}

body{
    background-image:  url('https://img.freepik.com/free-vector/gradient-isometric-laptop-technology-background_52683-4502.jpg?w=2000');
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
    width: 15%;
    margin: 30px;
    padding: 10px;
}
h1 {
    color:rgb(100, 212, 231);
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
    color:rgb(100, 212, 231);
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
}", "style1.css", "C:\\xampp\\htdocs\\projet1\\templates\\style1.css");
    }
}
