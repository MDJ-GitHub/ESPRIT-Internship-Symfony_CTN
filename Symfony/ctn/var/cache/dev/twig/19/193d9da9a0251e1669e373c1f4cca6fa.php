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

/* gestionnaire/eva.html.twig */
class __TwigTemplate_704d20eb4ab2f185518cfcafa45a4508 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionnaire/eva.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionnaire/eva.html.twig", 1);
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
        echo "\tCTN - Gestionnaire
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

\t\t<a class=\"navbar-brand\" href=\"#\">Gestion des Mouvements</a>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_mov");
        echo "\" class=\"nav-link  text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_evaa");
        echo "\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
<br>
<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Evaluer un Mouvement pour</h2>
\t\t\t\t\t<form action=";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_gestionnaire_evaing", ["mat" => (isset($context["movmat"]) || array_key_exists("movmat", $context) ? $context["movmat"] : (function () { throw new RuntimeError('Variable "movmat" does not exist.', 64, $this->source); })())]), "html", null, true);
        echo ">


\t\t\t\t\t\t<div class=\"border border-danger bg-danger text-white rounded border-5\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule Mv :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["movmat"]) || array_key_exists("movmat", $context) ? $context["movmat"] : (function () { throw new RuntimeError('Variable "movmat" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["selectmat"]) || array_key_exists("selectmat", $context) ? $context["selectmat"] : (function () { throw new RuntimeError('Variable "selectmat" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tPrénom :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["selectpren"]) || array_key_exists("selectpren", $context) ? $context["selectpren"] : (function () { throw new RuntimeError('Variable "selectpren" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNom :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["selectnom"]) || array_key_exists("selectnom", $context) ? $context["selectnom"] : (function () { throw new RuntimeError('Variable "selectnom" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tFonction :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["selectfn"]) || array_key_exists("selectfn", $context) ? $context["selectfn"] : (function () { throw new RuntimeError('Variable "selectfn" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNavire :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["selectnavire"]) || array_key_exists("selectnavire", $context) ? $context["selectnavire"] : (function () { throw new RuntimeError('Variable "selectnavire" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"slider\">Note : </label>&nbsp;<span id=\"sliderValue\">10</span>
\t\t\t\t\t\t\t<input type=\"range\" class=\"form-control\" id=\"slider\" name=\"note\" min=\"0\" max=\"20\" value=\"10\">
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"textareaInput\">Commentaire :</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"textareaInput\" name=\"commantaire\" rows=\"3\" placeholder=\"Insérer Commantaire\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Evaluer</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
\t</div>
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
        // line 147
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

    const slider = document.getElementById(\"slider\");
    const sliderValue = document.getElementById(\"sliderValue\");

    // Update the value display when the slider value changes.
    slider.addEventListener(\"input\", function() {
        sliderValue.textContent = slider.value;
    });



// Update the current date and time immediately and then update it every minute
updateCurrentDateTime()
setInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestionnaire/eva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 147,  211 => 106,  201 => 99,  191 => 92,  181 => 85,  172 => 79,  163 => 73,  151 => 64,  132 => 48,  122 => 41,  112 => 34,  94 => 19,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - Gestionnaire
{% endblock %}

{% block body %}
\t<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Gestion des Mouvements</a>
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
\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire') }}\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_mov') }}\" class=\"nav-link  text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_evaa') }}\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
<br>
<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Evaluer un Mouvement pour</h2>
\t\t\t\t\t<form action={{url('app_gestionnaire_evaing',{'mat':movmat} )}}>


\t\t\t\t\t\t<div class=\"border border-danger bg-danger text-white rounded border-5\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule Mv :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">{{ movmat }}</button>

\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<label for=\"slider\">Note : </label>&nbsp;<span id=\"sliderValue\">10</span>
\t\t\t\t\t\t\t<input type=\"range\" class=\"form-control\" id=\"slider\" name=\"note\" min=\"0\" max=\"20\" value=\"10\">
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"textareaInput\">Commentaire :</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"textareaInput\" name=\"commantaire\" rows=\"3\" placeholder=\"Insérer Commantaire\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Evaluer</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
\t</div>
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

    const slider = document.getElementById(\"slider\");
    const sliderValue = document.getElementById(\"sliderValue\");

    // Update the value display when the slider value changes.
    slider.addEventListener(\"input\", function() {
        sliderValue.textContent = slider.value;
    });



// Update the current date and time immediately and then update it every minute
updateCurrentDateTime()
setInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)
\t</script>
{% endblock %}
", "gestionnaire/eva.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\gestionnaire\\eva.html.twig");
    }
}
