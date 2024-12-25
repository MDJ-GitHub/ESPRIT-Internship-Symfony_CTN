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

/* login/new.html.twig */
class __TwigTemplate_50e7b3301f93c69b93f3e3f06e491f9a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/new.html.twig", 1);
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
        echo "\t<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Bienvenue</a>
\t\t<form class=\"form-inline\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">♟️
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["loginfn"]) || array_key_exists("loginfn", $context) ? $context["loginfn"] : (function () { throw new RuntimeError('Variable "loginfn" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t</form>
\t</nav>

\t<div class=\"container\">
\t\t<br>

\t\t<br>
\t\t<div class=\"container mt-5\">
\t\t\t<h5>Bienvenue dans votre profil de système de navigation CTN.
\t\t\t\tVeuillez insérer votre nouveau mot de passe et réviser vos données personnelles.</52>
\t\t\t<form action=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_signup_x", ["mat" => (isset($context["loginmat"]) || array_key_exists("loginmat", $context) ? $context["loginmat"] : (function () { throw new RuntimeError('Variable "loginmat" does not exist.', 34, $this->source); })())]), "html", null, true);
        echo ">

\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"password\">Mot de Passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"passwordc\">Mot de Passe Confirmation</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passwordc\" name=\"passwordc\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Prénom\">Prénom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["initprenom"]) || array_key_exists("initprenom", $context) ? $context["initprenom"] : (function () { throw new RuntimeError('Variable "initprenom" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\" id=\"Prénom\" name=\"prenom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Nom\">Nom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["initnom"]) || array_key_exists("initnom", $context) ? $context["initnom"] : (function () { throw new RuntimeError('Variable "initnom" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\" id=\"Nom\" name=\"nom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Row 2: Textbox, Date, and Select -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"daten\">Date de Naissance</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"daten\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["initdaten"]) || array_key_exists("initdaten", $context) ? $context["initdaten"] : (function () { throw new RuntimeError('Variable "initdaten" does not exist.', 75, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" name=\"daten\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"lieun\">Lieu de Naissance</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lieun\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["initlieun"]) || array_key_exists("initlieun", $context) ? $context["initlieun"] : (function () { throw new RuntimeError('Variable "initlieun" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" name=\"lieun\"  required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"sexe\" name=\"sexe\">
\t\t\t\t\t\t\t\t\t\t<option value=\"M\" ";
        // line 88
        if (((isset($context["initsexe"]) || array_key_exists("initsexe", $context) ? $context["initsexe"] : (function () { throw new RuntimeError('Variable "initsexe" does not exist.', 88, $this->source); })()) == "M")) {
            echo " selected ";
        }
        echo ">Masculin</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"F\" ";
        // line 89
        if (((isset($context["initsexe"]) || array_key_exists("initsexe", $context) ? $context["initsexe"] : (function () { throw new RuntimeError('Variable "initsexe" does not exist.', 89, $this->source); })()) == "F")) {
            echo " selected ";
        }
        echo ">Féminine</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Row 3: Email and Phone Inputs -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["initemail"]) || array_key_exists("initemail", $context) ? $context["initemail"] : (function () { throw new RuntimeError('Variable "initemail" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"tel\">Téléphone</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["inittel"]) || array_key_exists("inittel", $context) ? $context["inittel"] : (function () { throw new RuntimeError('Variable "inittel" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "\" id=\"tel\" name=\"tel\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Confirmer</button>
\t\t\t\t\t\t";
        // line 115
        if (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 115, $this->source); })()) != "")) {
            // line 116
            echo "\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-warning\">";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 117, $this->source); })()), "html", null, true);
            echo "</button>
\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<style>
\t\t\t\t\t.table-container {
\t\t\t\t\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\t\t\t\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t\t\t\t\t}

\t\t\t\t\t.table thead {
\t\t\t\t\t\tposition: sticky;
\t\t\t\t\t\ttop: 0;
\t\t\t\t\t\tz-index: 1; /* Ensure the header is above the table content */
\t\t\t\t\t}

\t\t\t\t\t#sidebar {
\t\t\t\t\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\t\t\t\t\tposition: fixed;
\t\t\t\t\t}
\t\t\t\t\tbody {
\t\t\t\t\t\tbackground-image: url(";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background.png"), "html", null, true);
        echo "); /* Replace with the actual path to your hiba image */
\t\t\t\t\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\t\t\t\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t\t\t\t\t}
\t\t\t\t\ttable tr td,
\t\t\t\t\ttable tr th {
\t\t\t\t\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t\t\t\t\t}

\t\t\t\t\t.dropdown {
\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t}

\t\t\t\t\t.dropdown-content {
\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\tbackground-color: #f9f9f9;

\t\t\t\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\t\t\t\tz-index: 1;
\t\t\t\t\t}

\t\t\t\t\t.dropdown:hover .dropdown-content {
\t\t\t\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\t\t\t\tflex-direction: row; /* Arrange them horizontally */
\t\t\t\t\t\ttop: -10px; /* Position below the dropdown button */
\t\t\t\t\t\tleft: -100px; /* Align with the left edge of the dropdown button */
\t\t\t\t\t}
\t\t\t\t</style>

\t\t\t\t<script>
\t\t\t\t\tfunction updateCurrentDateTime() {
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
\t\t\t\t</script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 139,  237 => 119,  232 => 117,  229 => 116,  227 => 115,  215 => 106,  206 => 100,  190 => 89,  184 => 88,  174 => 81,  165 => 75,  152 => 65,  143 => 59,  115 => 34,  100 => 22,  94 => 19,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN
{% endblock %}

{% block body %}
\t<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Bienvenue</a>
\t\t<form class=\"form-inline\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">♟️
\t\t\t\t{{ loginfn }}</button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t\t{{ loginnavire }}</button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t{{ loginnom }}</button>
\t\t\t-
\t\t</form>
\t</nav>

\t<div class=\"container\">
\t\t<br>

\t\t<br>
\t\t<div class=\"container mt-5\">
\t\t\t<h5>Bienvenue dans votre profil de système de navigation CTN.
\t\t\t\tVeuillez insérer votre nouveau mot de passe et réviser vos données personnelles.</52>
\t\t\t<form action={{url('app_signup_x',{'mat':loginmat} )}}>

\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"password\">Mot de Passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"passwordc\">Mot de Passe Confirmation</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passwordc\" name=\"passwordc\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Prénom\">Prénom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ initprenom }}\" id=\"Prénom\" name=\"prenom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"Nom\">Nom</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ initnom }}\" id=\"Nom\" name=\"nom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Row 2: Textbox, Date, and Select -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"daten\">Date de Naissance</label>
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"daten\" value=\"{{ initdaten|date('Y-m-d') }}\" name=\"daten\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"lieun\">Lieu de Naissance</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lieun\" value=\"{{ initlieun }}\" name=\"lieun\"  required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"sexe\" name=\"sexe\">
\t\t\t\t\t\t\t\t\t\t<option value=\"M\" {% if initsexe == 'M' %} selected {% endif %}>Masculin</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"F\" {% if initsexe == 'F' %} selected {% endif %}>Féminine</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Row 3: Email and Phone Inputs -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ initemail }}\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"tel\">Téléphone</label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" value=\"{{ inittel }}\" id=\"tel\" name=\"tel\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Confirmer</button>
\t\t\t\t\t\t{% if error != '' %}
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-warning\">{{error}}</button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<style>
\t\t\t\t\t.table-container {
\t\t\t\t\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\t\t\t\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t\t\t\t\t}

\t\t\t\t\t.table thead {
\t\t\t\t\t\tposition: sticky;
\t\t\t\t\t\ttop: 0;
\t\t\t\t\t\tz-index: 1; /* Ensure the header is above the table content */
\t\t\t\t\t}

\t\t\t\t\t#sidebar {
\t\t\t\t\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\t\t\t\t\tposition: fixed;
\t\t\t\t\t}
\t\t\t\t\tbody {
\t\t\t\t\t\tbackground-image: url({{ asset('img/background.png') }}); /* Replace with the actual path to your hiba image */
\t\t\t\t\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\t\t\t\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t\t\t\t\t}
\t\t\t\t\ttable tr td,
\t\t\t\t\ttable tr th {
\t\t\t\t\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t\t\t\t\t}

\t\t\t\t\t.dropdown {
\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t}

\t\t\t\t\t.dropdown-content {
\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\tbackground-color: #f9f9f9;

\t\t\t\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\t\t\t\tz-index: 1;
\t\t\t\t\t}

\t\t\t\t\t.dropdown:hover .dropdown-content {
\t\t\t\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\t\t\t\tflex-direction: row; /* Arrange them horizontally */
\t\t\t\t\t\ttop: -10px; /* Position below the dropdown button */
\t\t\t\t\t\tleft: -100px; /* Align with the left edge of the dropdown button */
\t\t\t\t\t}
\t\t\t\t</style>

\t\t\t\t<script>
\t\t\t\t\tfunction updateCurrentDateTime() {
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
\t\t\t\t</script>
\t\t\t{% endblock %}
", "login/new.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\login\\new.html.twig");
    }
}
