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

/* utilisageur/add.html.twig */
class __TwigTemplate_fa17b31a850ca5092ce046d3ab8cafbc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisageur/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisageur/add.html.twig", 1);
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
        echo "\tCTN - G. Utilisateurs
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

\t\t<a class=\"navbar-brand\" href=\"#\">Gestion des Utilisateurs</a>
\t\t<form class=\"form-inline\">

\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t<div class=\"dropdownx\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
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
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisageur");
        echo "\" class=\"nav-link bg-danger text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t<br>

\t\t\t\t<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Ajouter un Utilisateur</h2>
\t\t\t\t\t<form action=";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_utilisageur_adding");
        echo ">

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Prénom\">Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Prénom\" name=\"prenom\" placeholder=\"Insérer Prénom\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Nom\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Nom\" name=\"nom\" placeholder=\"Insérer Nom\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 2: Textbox, Date, and Select -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"daten\">Date de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"daten\" name=\"daten\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lieun\">Lieu de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lieun\" placeholder=\"Insérer Lieu de Naissance\" name=\"lieun\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"sexe\" name=\"sexe\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\">Masculin</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\">Féminine</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 3: Email and Phone Inputs -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"example@example.exa\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"tel\">Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"tel\" name=\"tel\" placeholder=\"12345678\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 4: Two Selects -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"navire\">Navire</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"navire\" name=\"navire\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ulysse\">Ulysse</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Salambo\">Salambo</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Amilcar\">Amilcar</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Elyssa\">Elyssa</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tanit\">Tanit</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Carthage\">Carthage</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\">Medicain</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Ajouter</button>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t</div>
\t\t</div>
\t<style>
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
        // line 176
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
\t.dropdownx {
\t\tposition: relative;
\t\tdisplay: inline-block;
\t}

\t.dropdown-contentx {
\t\tdisplay: none;
\t\tposition: absolute;
\t\tbackground-color: #f9f9f9;

\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\tz-index: 1;
\t}
\t\t.dropdownx:hover .dropdown-contentx {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: column; /* Arrange them horizontally */
\t\t\t/* Position below the dropdown button */
\t\t\t/* Align with the left edge of the dropdown button */
\t\t}
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
        return "utilisageur/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 176,  142 => 58,  122 => 41,  102 => 24,  96 => 21,  89 => 17,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - G. Utilisateurs
{% endblock %}

{% block body %}
\t<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Gestion des Utilisateurs</a>
\t\t<form class=\"form-inline\">

\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t\t-
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
\t\t\t\t{{ loginnavire }}</button>
\t\t\t-
\t\t<div class=\"dropdownx\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t{{ loginnom }}</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<a href=\"{{ path('app_utilisageur') }}\" class=\"nav-link bg-danger text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t<br>

\t\t\t\t<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Ajouter un Utilisateur</h2>
\t\t\t\t\t<form action={{url('app_utilisageur_adding')}}>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Prénom\">Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Prénom\" name=\"prenom\" placeholder=\"Insérer Prénom\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Nom\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Nom\" name=\"nom\" placeholder=\"Insérer Nom\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 2: Textbox, Date, and Select -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"daten\">Date de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"daten\" name=\"daten\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lieun\">Lieu de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lieun\" placeholder=\"Insérer Lieu de Naissance\" name=\"lieun\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"sexe\" name=\"sexe\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\">Masculin</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\">Féminine</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 3: Email and Phone Inputs -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"example@example.exa\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"tel\">Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"tel\" name=\"tel\" placeholder=\"12345678\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 4: Two Selects -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"navire\">Navire</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"navire\" name=\"navire\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ulysse\">Ulysse</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Salambo\">Salambo</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Amilcar\">Amilcar</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Elyssa\">Elyssa</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tanit\">Tanit</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Carthage\">Carthage</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\">Medicain</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Ajouter</button>

\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t</div>
\t\t</div>
\t<style>
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
\t.dropdownx {
\t\tposition: relative;
\t\tdisplay: inline-block;
\t}

\t.dropdown-contentx {
\t\tdisplay: none;
\t\tposition: absolute;
\t\tbackground-color: #f9f9f9;

\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\tz-index: 1;
\t}
\t\t.dropdownx:hover .dropdown-contentx {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: column; /* Arrange them horizontally */
\t\t\t/* Position below the dropdown button */
\t\t\t/* Align with the left edge of the dropdown button */
\t\t}
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
", "utilisageur/add.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\utilisageur\\add.html.twig");
    }
}
