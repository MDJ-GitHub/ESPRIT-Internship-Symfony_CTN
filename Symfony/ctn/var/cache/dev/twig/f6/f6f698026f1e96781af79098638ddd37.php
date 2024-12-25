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
class __TwigTemplate_5baed06848fd6a46dbf6d1fb6fdbbd6b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tCTN
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<nav class=\"shadow-lg navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Bienvenue</a>
\t\t<form class=\"form-inline\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-danger my-2 my-sm-0\" type=\"button\">Aide</button>
\t\t\t-
\t\t</nav>

\t\t<br>
\t\t<br>
\t\t<br>
\t\t<br>
\t\t<br>


\t\t<div class=\"container mt-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"card shadow-lg bg-dark text-white\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_auth");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\tVeuillez insérer vos informations d'identification ici pour vous connecter à votre profil de navigation.</h5>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"textbox1\">Tel. ou Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"textbox1\" name=\"username\" placeholder=\"1234567 ou example@exammple.exa\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"textbox2\">Mot de Passe</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"textbox2\" name=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck\">Rester Connecté</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"a\" name=\"action\" class=\"btn btn-danger btn-block\">Connecter</button>
\t\t\t\t\t\t\t\t\t\t";
        // line 53
        if (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()) != "")) {
            echo " <button class=\"btn btn-warning btn-block\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "</button> ";
        }
        // line 54
        echo "\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"b\" class=\"btn btn-sm btn-secondary btn-block\">Mot de Passe Oublié</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mlogo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 550px;\"/>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<style>
\t\t\t.table-container {
\t\t\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\t\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t\t\t}

\t\t\t.table thead {
\t\t\t\tposition: sticky;
\t\t\t\ttop: 0;
\t\t\t\tz-index: 1; /* Ensure the header is above the table content */
\t\t\t}

\t\t\t#sidebar {
\t\t\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\t\t\tposition: fixed;
\t\t\t}
\t\t\tbody {
\t\t\t\tbackground-image: url(";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/mebackground.jpg"), "html", null, true);
        echo "); /* Replace with the actual path to your hiba image */
\t\t\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\t\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t\t\t}
\t\t\ttable tr td,
\t\t\ttable tr th {
\t\t\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t\t\t}

\t\t\t.dropdown {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: inline-block;
\t\t\t}

\t\t\t.dropdown-content {
\t\t\t\tdisplay: none;
\t\t\t\tposition: absolute;
\t\t\t\tbackground-color: #f9f9f9;

\t\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\t\tz-index: 1;
\t\t\t}

\t\t\t.dropdown:hover .dropdown-content {
\t\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\t\tflex-direction: row; /* Arrange them horizontally */
\t\t\t\ttop: -10px; /* Position below the dropdown button */
\t\t\t\tleft: -100px; /* Align with the left edge of the dropdown button */
\t\t\t}
\t\t</style>

\t\t<script>
\t\t\tfunction updateCurrentDateTime() {
var now = new Date()
var year = now.getFullYear()
var month = String(now.getMonth() + 1).padStart(2, '0')
var day = String(now.getDate()).padStart(2, '0')
var hour = String(now.getHours()).padStart(2, '0')
var minute = String(now.getMinutes()).padStart(2, '0')
var second = String(now.getSeconds()).padStart(2, '0')

var currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second

document.getElementById('currentDateTime').textContent = currentDateTime
}

// Update the current date and time immediately and then update it every minute
updateCurrentDateTime()
setInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)
\t\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  174 => 89,  147 => 65,  134 => 54,  128 => 53,  103 => 31,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN
{% endblock %}

{% block body %}
\t<nav class=\"shadow-lg navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Bienvenue</a>
\t\t<form class=\"form-inline\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-danger my-2 my-sm-0\" type=\"button\">Aide</button>
\t\t\t-
\t\t</nav>

\t\t<br>
\t\t<br>
\t\t<br>
\t\t<br>
\t\t<br>


\t\t<div class=\"container mt-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"card shadow-lg bg-dark text-white\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form action=\"{{ path('app_auth') }}\" method=\"post\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\tVeuillez insérer vos informations d'identification ici pour vous connecter à votre profil de navigation.</h5>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"textbox1\">Tel. ou Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"textbox1\" name=\"username\" placeholder=\"1234567 ou example@exammple.exa\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"textbox2\">Mot de Passe</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"textbox2\" name=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck\">Rester Connecté</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"a\" name=\"action\" class=\"btn btn-danger btn-block\">Connecter</button>
\t\t\t\t\t\t\t\t\t\t{% if error != '' %} <button class=\"btn btn-warning btn-block\">{{error}}</button> {% endif %}
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"b\" class=\"btn btn-sm btn-secondary btn-block\">Mot de Passe Oublié</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"{{ asset('img/mlogo.png') }}\" alt=\"Logo\" style=\"max-width: 550px;\"/>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<style>
\t\t\t.table-container {
\t\t\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\t\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t\t\t}

\t\t\t.table thead {
\t\t\t\tposition: sticky;
\t\t\t\ttop: 0;
\t\t\t\tz-index: 1; /* Ensure the header is above the table content */
\t\t\t}

\t\t\t#sidebar {
\t\t\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\t\t\tposition: fixed;
\t\t\t}
\t\t\tbody {
\t\t\t\tbackground-image: url({{ asset('img/mebackground.jpg') }}); /* Replace with the actual path to your hiba image */
\t\t\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\t\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t\t\t}
\t\t\ttable tr td,
\t\t\ttable tr th {
\t\t\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t\t\t}

\t\t\t.dropdown {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: inline-block;
\t\t\t}

\t\t\t.dropdown-content {
\t\t\t\tdisplay: none;
\t\t\t\tposition: absolute;
\t\t\t\tbackground-color: #f9f9f9;

\t\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\t\tz-index: 1;
\t\t\t}

\t\t\t.dropdown:hover .dropdown-content {
\t\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\t\tflex-direction: row; /* Arrange them horizontally */
\t\t\t\ttop: -10px; /* Position below the dropdown button */
\t\t\t\tleft: -100px; /* Align with the left edge of the dropdown button */
\t\t\t}
\t\t</style>

\t\t<script>
\t\t\tfunction updateCurrentDateTime() {
var now = new Date()
var year = now.getFullYear()
var month = String(now.getMonth() + 1).padStart(2, '0')
var day = String(now.getDate()).padStart(2, '0')
var hour = String(now.getHours()).padStart(2, '0')
var minute = String(now.getMinutes()).padStart(2, '0')
var second = String(now.getSeconds()).padStart(2, '0')

var currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second

document.getElementById('currentDateTime').textContent = currentDateTime
}

// Update the current date and time immediately and then update it every minute
updateCurrentDateTime()
setInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)
\t\t</script>
\t{% endblock %}
", "index.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\index.html.twig");
    }
}
