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

/* gestionnaire/sta.html.twig */
class __TwigTemplate_d294f7c82514a02f06628477242e19ef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionnaire/sta.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionnaire/sta.html.twig", 1);
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
        echo "<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t<a class=\"navbar-brand\" href=\"#\">Gestion des Mouvements</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</button>
\t\t-
\t\t<div class=\"dropdownx\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\">⛔ Déconnecter
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</form>
</nav>

<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t<div class=\"position-sticky\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_mov");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_evaa");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_sta");
        echo "\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📊 Statistiques
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</nav>

\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
<canvas id=\"myChart\" style=\"width:100%;max-width:600px\"></canvas>

<script>
var xValues = [\"Italy\", \"France\", \"Spain\", \"USA\", \"Argentina\"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [\"red\", \"green\",\"blue\",\"orange\",\"brown\"];

new Chart(\"myChart\", {
  type: \"bar\",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: \"World Wine Production 2018\"
    }
  }
});
</script>


\t

\t\t</main>
\t</div>
</div>
<style>

\t.table-container {
\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t}

\t.table thead {
\t\tposition: sticky;
\t\ttop: 0;
\t\tz-index: 1; /* Ensure the header is above the table content */
\t}

\t#sidebar {
\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\tposition: fixed;
\t}
\tbody {
\t\tbackground-image: url(";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background.png"), "html", null, true);
        echo "); /* Replace with the actual path to your hiba image */
\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t}
\ttable tr td,
\ttable tr th {
\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t}

\t.dropdown {
\t\tposition: relative;
\t\tdisplay: inline-block;
\t}

\t.dropdown-content {
\t\tdisplay: none;
\t\tposition: absolute;
\t\tbackground-color: #f9f9f9;

\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\tz-index: 1;
\t}

\t.dropdown:hover .dropdown-content {
\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\tflex-direction: row; /* Arrange them horizontally */
\t\ttop: -10px; /* Position below the dropdown button */
\t\tleft: -110px; /* Align with the left edge of the dropdown button */
\t}
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

\t.dropdownx:hover .dropdown-contentx {
\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\tflex-direction: column; /* Arrange them horizontally */
\t\t/* Position below the dropdown button */
\t\t/* Align with the left edge of the dropdown button */
\t}
</style>
<script>function updateCurrentDateTime() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestionnaire/sta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 129,  152 => 62,  142 => 55,  132 => 48,  122 => 41,  101 => 23,  95 => 20,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - Gestionnaire
{% endblock %}

{% block body %}
<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t<a class=\"navbar-brand\" href=\"#\">Gestion des Mouvements</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t{{ loginnavire }}</button>
\t\t-
\t\t<div class=\"dropdownx\">
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t{{ loginnom }}</button>
\t\t\t-
\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\">⛔ Déconnecter
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</form>
</nav>

<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t<div class=\"position-sticky\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire') }}\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_mov') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_evaa') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_sta') }}\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📊 Statistiques
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</nav>

\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
<canvas id=\"myChart\" style=\"width:100%;max-width:600px\"></canvas>

<script>
var xValues = [\"Italy\", \"France\", \"Spain\", \"USA\", \"Argentina\"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [\"red\", \"green\",\"blue\",\"orange\",\"brown\"];

new Chart(\"myChart\", {
  type: \"bar\",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: \"World Wine Production 2018\"
    }
  }
});
</script>


\t

\t\t</main>
\t</div>
</div>
<style>

\t.table-container {
\t\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\t\toverflow-y: auto; /* Add vertical scroll for the content */
\t}

\t.table thead {
\t\tposition: sticky;
\t\ttop: 0;
\t\tz-index: 1; /* Ensure the header is above the table content */
\t}

\t#sidebar {
\t\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\t\tposition: fixed;
\t}
\tbody {
\t\tbackground-image: url({{ asset('img/background.png') }}); /* Replace with the actual path to your hiba image */
\t\tbackground-size: cover; /* This will make the image cover the entire background */
\t\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
\t}
\ttable tr td,
\ttable tr th {
\t\tbackground-color: rgba(255, 255, 255, 0.6) !important;
\t}

\t.dropdown {
\t\tposition: relative;
\t\tdisplay: inline-block;
\t}

\t.dropdown-content {
\t\tdisplay: none;
\t\tposition: absolute;
\t\tbackground-color: #f9f9f9;

\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\tz-index: 1;
\t}

\t.dropdown:hover .dropdown-content {
\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\tflex-direction: row; /* Arrange them horizontally */
\t\ttop: -10px; /* Position below the dropdown button */
\t\tleft: -110px; /* Align with the left edge of the dropdown button */
\t}
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

\t.dropdownx:hover .dropdown-contentx {
\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\tflex-direction: column; /* Arrange them horizontally */
\t\t/* Position below the dropdown button */
\t\t/* Align with the left edge of the dropdown button */
\t}
</style>
<script>function updateCurrentDateTime() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>{% endblock %}
", "gestionnaire/sta.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\gestionnaire\\sta.html.twig");
    }
}
