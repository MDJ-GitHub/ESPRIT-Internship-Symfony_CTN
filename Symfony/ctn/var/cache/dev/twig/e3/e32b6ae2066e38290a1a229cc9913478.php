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

/* commandant/add.html.twig */
class __TwigTemplate_93b3520334741565491dc6e91a56733e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandant/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandant/add.html.twig", 1);
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
        echo "\tCTN - Commandant
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

\t\t<a class=\"navbar-brand\" href=\"#\">Commandment des Mouvements</a>
\t\t<form class=\"form-inline\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t</form>
\t</nav>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t\t<div class=\"position-sticky\">
\t\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant");
        echo "\" class=\"nav-link bg-danger text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mov");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
<br>
<br>

\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Commander un Mouvement pour</h2>
\t\t\t\t\t<form action=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_commandant_adding", ["mat" => (isset($context["selectmat"]) || array_key_exists("selectmat", $context) ? $context["selectmat"] : (function () { throw new RuntimeError('Variable "selectmat" does not exist.', 57, $this->source); })())]), "html", null, true);
        echo ">


\t\t\t\t\t\t<div class=\"border border-danger bg-danger text-white rounded border-5\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["selectmat"]) || array_key_exists("selectmat", $context) ? $context["selectmat"] : (function () { throw new RuntimeError('Variable "selectmat" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tPrénom :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["selectpren"]) || array_key_exists("selectpren", $context) ? $context["selectpren"] : (function () { throw new RuntimeError('Variable "selectpren" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNom :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["selectnom"]) || array_key_exists("selectnom", $context) ? $context["selectnom"] : (function () { throw new RuntimeError('Variable "selectnom" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tFonction :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["selectfn"]) || array_key_exists("selectfn", $context) ? $context["selectfn"] : (function () { throw new RuntimeError('Variable "selectfn" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNavire :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["selectnavire"]) || array_key_exists("selectnavire", $context) ? $context["selectnavire"] : (function () { throw new RuntimeError('Variable "selectnavire" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Departure</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t<option>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option>Rades</option>
\t\t\t\t\t\t\t\t\t\t<option>Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option>Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option>Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option>Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option>Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown2\">Port Destination</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdes\" id=\"dropdown2\">
\t\t\t\t\t\t\t\t\t\t<option>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option>Rades</option>
\t\t\t\t\t\t\t\t\t\t<option>Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option>Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option>Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option>Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option>Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Embarquement Attendu</label>
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateemb\" id=\"dateInput\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Debarquement Attendu (Facutlatif)</label>
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"datedeb\" id=\"dateInput\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t<option>Titulaire</option>
\t\t\t\t\t\t\t\t<option>Contractuel</option>
\t\t\t\t\t\t\t\t<option>Occasionnel</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Commander</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
\t</div>
<style>
\t\t.table-container {
\t\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t\t}

\t\t.table thead {
\t\t\tposition: sticky;
\t\t\ttop: 0;
\t\t\tz-index: 1; /* Ensure the header is above the table content */
\t\t}

\t\t#sidebar {
\t\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\t\tposition: fixed;
\t\t}
\t\tbody {
\t\t\tbackground-image: url(";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background.png"), "html", null, true);
        echo "); /* Replace with the actual path to your hiba image */
\t\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t\t}
\t\ttable tr td,
\t\ttable tr th {
\t\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t\t}

\t\t.dropdown {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.dropdown-content {
\t\t\tdisplay: none;
\t\t\tposition: absolute;
\t\t\tbackground-color: #f9f9f9;
\t\t\t
\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\tz-index: 1;
\t\t}

\t\t.dropdown:hover .dropdown-content {
    display: flex; /* Use flexbox to make them appear in the same row */
    flex-direction: row; /* Arrange them horizontally */
    top: -10px; /* Position below the dropdown button */
    left: -100px; /* Align with the left edge of the dropdown button */
}
\t</style>

\t<script>
\t\tfunction updateCurrentDateTime() {
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
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commandant/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 169,  191 => 92,  181 => 85,  171 => 78,  161 => 71,  152 => 65,  141 => 57,  122 => 41,  112 => 34,  94 => 19,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - Commandant
{% endblock %}

{% block body %}
\t<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Commandment des Mouvements</a>
\t\t<form class=\"form-inline\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t\t{{ loginnavire }}</button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t{{ loginnom }}</button>
\t\t\t-
\t\t</form>
\t</nav>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t\t<div class=\"position-sticky\">
\t\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant') }}\" class=\"nav-link bg-danger text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mov') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
<br>
<br>

\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Commander un Mouvement pour</h2>
\t\t\t\t\t<form action={{url('app_commandant_adding',{'mat':selectmat} )}}>


\t\t\t\t\t\t<div class=\"border border-danger bg-danger text-white rounded border-5\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">{{ selectmat }}</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tPrénom :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">{{ selectpren }}</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNom :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">{{ selectnom }}</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tFonction :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">{{ selectfn }}</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNavire :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">{{ selectnavire }}</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Departure</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t<option>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option>Rades</option>
\t\t\t\t\t\t\t\t\t\t<option>Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option>Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option>Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option>Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option>Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown2\">Port Destination</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdes\" id=\"dropdown2\">
\t\t\t\t\t\t\t\t\t\t<option>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option>Rades</option>
\t\t\t\t\t\t\t\t\t\t<option>Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option>Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option>Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option>Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option>Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Embarquement Attendu</label>
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"dateemb\" id=\"dateInput\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Debarquement Attendu (Facutlatif)</label>
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"datedeb\" id=\"dateInput\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t<option>Titulaire</option>
\t\t\t\t\t\t\t\t<option>Contractuel</option>
\t\t\t\t\t\t\t\t<option>Occasionnel</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Commander</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
\t</div>
<style>
\t\t.table-container {
\t\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t\t}

\t\t.table thead {
\t\t\tposition: sticky;
\t\t\ttop: 0;
\t\t\tz-index: 1; /* Ensure the header is above the table content */
\t\t}

\t\t#sidebar {
\t\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\t\tposition: fixed;
\t\t}
\t\tbody {
\t\t\tbackground-image: url({{ asset('img/background.png') }}); /* Replace with the actual path to your hiba image */
\t\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t\t}
\t\ttable tr td,
\t\ttable tr th {
\t\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t\t}

\t\t.dropdown {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.dropdown-content {
\t\t\tdisplay: none;
\t\t\tposition: absolute;
\t\t\tbackground-color: #f9f9f9;
\t\t\t
\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\tz-index: 1;
\t\t}

\t\t.dropdown:hover .dropdown-content {
    display: flex; /* Use flexbox to make them appear in the same row */
    flex-direction: row; /* Arrange them horizontally */
    top: -10px; /* Position below the dropdown button */
    left: -100px; /* Align with the left edge of the dropdown button */
}
\t</style>

\t<script>
\t\tfunction updateCurrentDateTime() {
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
\t</script>
{% endblock %}
", "commandant/add.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\commandant\\add.html.twig");
    }
}
