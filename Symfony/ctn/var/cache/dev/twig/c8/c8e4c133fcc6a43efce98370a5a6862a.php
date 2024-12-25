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

/* navigant/mod.html.twig */
class __TwigTemplate_3859aff1f49d233a4626d9afdb8dcefd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigant/mod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "navigant/mod.html.twig", 1);
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
        echo "\tCTN - Navigant
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

\t\t<a class=\"navbar-brand\" href=\"#\">Consultation de Profile</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">♟️
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["loginfn"]) || array_key_exists("loginfn", $context) ? $context["loginfn"] : (function () { throw new RuntimeError('Variable "loginfn" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</button>
\t\t-
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
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_evaa");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t<br>

\t\t\t\t<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Modifier Profile</h2>
\t\t\t\t\t<form action=";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_utilisageur_adding");
        echo ">

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Prénom\">Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["initprenom"]) || array_key_exists("initprenom", $context) ? $context["initprenom"] : (function () { throw new RuntimeError('Variable "initprenom" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\" id=\"Prénom\" name=\"prenom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Nom\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["initnom"]) || array_key_exists("initnom", $context) ? $context["initnom"] : (function () { throw new RuntimeError('Variable "initnom" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\" id=\"Nom\" name=\"nom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 2: Textbox, Date, and Select -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"daten\">Date de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"daten\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["initdaten"]) || array_key_exists("initdaten", $context) ? $context["initdaten"] : (function () { throw new RuntimeError('Variable "initdaten" does not exist.', 85, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" name=\"daten\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lieun\">Lieu de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lieun\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["initlieun"]) || array_key_exists("initlieun", $context) ? $context["initlieun"] : (function () { throw new RuntimeError('Variable "initlieun" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\" name=\"lieun\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"sexe\" name=\"sexe\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\" ";
        // line 98
        if (((isset($context["initsexe"]) || array_key_exists("initsexe", $context) ? $context["initsexe"] : (function () { throw new RuntimeError('Variable "initsexe" does not exist.', 98, $this->source); })()) == "M")) {
            echo " selected ";
        }
        echo ">Masculin</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\" ";
        // line 99
        if (((isset($context["initsexe"]) || array_key_exists("initsexe", $context) ? $context["initsexe"] : (function () { throw new RuntimeError('Variable "initsexe" does not exist.', 99, $this->source); })()) == "F")) {
            echo " selected ";
        }
        echo ">Féminine</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 3: Email and Phone Inputs -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["initemail"]) || array_key_exists("initemail", $context) ? $context["initemail"] : (function () { throw new RuntimeError('Variable "initemail" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" name=\"email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"tel\">Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["inittel"]) || array_key_exists("inittel", $context) ? $context["inittel"] : (function () { throw new RuntimeError('Variable "inittel" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "\" id=\"tel\" name=\"tel\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 4: Two Selects -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"navire\">Navire</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"navire\" name=\"navire\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ulysse\" ";
        // line 127
        if (((isset($context["initnavire"]) || array_key_exists("initnavire", $context) ? $context["initnavire"] : (function () { throw new RuntimeError('Variable "initnavire" does not exist.', 127, $this->source); })()) == "Ulysse")) {
            echo " selected ";
        }
        echo ">Ulysse</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Salambo\" ";
        // line 128
        if (((isset($context["initnavire"]) || array_key_exists("initnavire", $context) ? $context["initnavire"] : (function () { throw new RuntimeError('Variable "initnavire" does not exist.', 128, $this->source); })()) == "Salambo")) {
            echo " selected ";
        }
        echo ">Salambo</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Amilcar\" ";
        // line 129
        if (((isset($context["initnavire"]) || array_key_exists("initnavire", $context) ? $context["initnavire"] : (function () { throw new RuntimeError('Variable "initnavire" does not exist.', 129, $this->source); })()) == "Amilcar")) {
            echo " selected ";
        }
        echo ">Amilcar</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Elyssa\" ";
        // line 130
        if (((isset($context["initnavire"]) || array_key_exists("initnavire", $context) ? $context["initnavire"] : (function () { throw new RuntimeError('Variable "initnavire" does not exist.', 130, $this->source); })()) == "Elyssa")) {
            echo " selected ";
        }
        echo ">Elyssa</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tanit\" ";
        // line 131
        if (((isset($context["initnavire"]) || array_key_exists("initnavire", $context) ? $context["initnavire"] : (function () { throw new RuntimeError('Variable "initnavire" does not exist.', 131, $this->source); })()) == "Tanit")) {
            echo " selected ";
        }
        echo ">Tanit</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Carthage\" ";
        // line 132
        if (((isset($context["initnavire"]) || array_key_exists("initnavire", $context) ? $context["initnavire"] : (function () { throw new RuntimeError('Variable "initnavire" does not exist.', 132, $this->source); })()) == "Carthage")) {
            echo " selected ";
        }
        echo ">Carthage</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" ";
        // line 140
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 140, $this->source); })()) == "Standard")) {
            echo " selected ";
        }
        echo ">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" ";
        // line 141
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 141, $this->source); })()) == "Gestionnaire")) {
            echo " selected ";
        }
        echo ">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" ";
        // line 142
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 142, $this->source); })()) == "Commandant")) {
            echo " selected ";
        }
        echo ">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" ";
        // line 143
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 143, $this->source); })()) == "G. Utilisateur")) {
            echo " selected ";
        }
        echo ">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" ";
        // line 144
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 144, $this->source); })()) == "Capitaine")) {
            echo " selected ";
        }
        echo ">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" ";
        // line 145
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 145, $this->source); })()) == "Garçon")) {
            echo " selected ";
        }
        echo ">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" ";
        // line 146
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 146, $this->source); })()) == "Mecanician")) {
            echo " selected ";
        }
        echo ">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" ";
        // line 147
        if (((isset($context["initfonction"]) || array_key_exists("initfonction", $context) ? $context["initfonction"] : (function () { throw new RuntimeError('Variable "initfonction" does not exist.', 147, $this->source); })()) == "Medicain")) {
            echo " selected ";
        }
        echo ">Medicain</option>

\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Modifier</button>

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
        // line 179
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
        return "navigant/mod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 179,  330 => 147,  324 => 146,  318 => 145,  312 => 144,  306 => 143,  300 => 142,  294 => 141,  288 => 140,  275 => 132,  269 => 131,  263 => 130,  257 => 129,  251 => 128,  245 => 127,  231 => 116,  222 => 110,  206 => 99,  200 => 98,  190 => 91,  181 => 85,  168 => 75,  159 => 69,  147 => 60,  128 => 44,  118 => 37,  100 => 22,  94 => 19,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - Navigant
{% endblock %}

{% block body %}
\t<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t\t<a class=\"navbar-brand\" href=\"#\">Consultation de Profile</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">♟️
\t\t\t{{ loginfn }}</button>
\t\t-
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
\t\t\t\t\t\t\t<a href=\"{{ path('app_navigant') }}\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_navigant_evaa') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t<br>

\t\t\t\t<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Modifier Profile</h2>
\t\t\t\t\t<form action={{url('app_utilisageur_adding')}}>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Prénom\">Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ initprenom }}\" id=\"Prénom\" name=\"prenom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"Nom\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ initnom }}\" id=\"Nom\" name=\"nom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 2: Textbox, Date, and Select -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"daten\">Date de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"daten\" value=\"{{ initdaten|date('Y-m-d') }}\" name=\"daten\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"lieun\">Lieu de Naissance</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lieun\" value=\"{{ initlieun }}\" name=\"lieun\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"sexe\" name=\"sexe\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\" {% if initsexe == 'M' %} selected {% endif %}>Masculin</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\" {% if initsexe == 'F' %} selected {% endif %}>Féminine</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 3: Email and Phone Inputs -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ initemail }}\" class=\"form-control\" id=\"email\" name=\"email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"tel\">Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" value=\"{{ inittel }}\" id=\"tel\" name=\"tel\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Row 4: Two Selects -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"navire\">Navire</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"navire\" name=\"navire\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Ulysse\" {% if initnavire == 'Ulysse' %} selected {% endif %}>Ulysse</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Salambo\" {% if initnavire == 'Salambo' %} selected {% endif %}>Salambo</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Amilcar\" {% if initnavire == 'Amilcar' %} selected {% endif %}>Amilcar</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Elyssa\" {% if initnavire == 'Elyssa' %} selected {% endif %}>Elyssa</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Tanit\" {% if initnavire == 'Tanit' %} selected {% endif %}>Tanit</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Carthage\" {% if initnavire == 'Carthage' %} selected {% endif %}>Carthage</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" {% if initfonction == 'Standard' %} selected {% endif %}>Standard</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" {% if initfonction == 'Gestionnaire' %} selected {% endif %}>Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" {% if initfonction == 'Commandant' %} selected {% endif %}>Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" {% if initfonction == 'G. Utilisateur' %} selected {% endif %}>G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" {% if initfonction == 'Capitaine' %} selected {% endif %}>Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" {% if initfonction == 'Garçon' %} selected {% endif %}>Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" {% if initfonction == 'Mecanician' %} selected {% endif %}>Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" {% if initfonction == 'Medicain' %} selected {% endif %}>Medicain</option>

\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Modifier</button>

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
", "navigant/mod.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\navigant\\mod.html.twig");
    }
}
