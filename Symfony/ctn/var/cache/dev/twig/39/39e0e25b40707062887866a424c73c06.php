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

/* commandant/mod.html.twig */
class __TwigTemplate_0decf85977c5a4cb3b2e8102b809ca92 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandant/mod.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandant/mod.html.twig", 1);
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
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
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
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mov");
        echo "\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t<br>

\t\t\t\t\t<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Modifier un Mouvement de</h2>
\t\t\t\t\t<form action=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_commandant_moding", ["mat" => (isset($context["movmat"]) || array_key_exists("movmat", $context) ? $context["movmat"] : (function () { throw new RuntimeError('Variable "movmat" does not exist.', 57, $this->source); })())]), "html", null, true);
        echo ">


\t\t\t\t\t\t<div class=\"border border-danger bg-danger text-white rounded border-5\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule Mv :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["movmat"]) || array_key_exists("movmat", $context) ? $context["movmat"] : (function () { throw new RuntimeError('Variable "movmat" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tMatricule :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["selectmat"]) || array_key_exists("selectmat", $context) ? $context["selectmat"] : (function () { throw new RuntimeError('Variable "selectmat" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tPrénom :</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["selectpren"]) || array_key_exists("selectpren", $context) ? $context["selectpren"] : (function () { throw new RuntimeError('Variable "selectpren" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNom :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["selectnom"]) || array_key_exists("selectnom", $context) ? $context["selectnom"] : (function () { throw new RuntimeError('Variable "selectnom" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tFonction :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["selectfn"]) || array_key_exists("selectfn", $context) ? $context["selectfn"] : (function () { throw new RuntimeError('Variable "selectfn" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\tNavire :
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["selectnavire"]) || array_key_exists("selectnavire", $context) ? $context["selectnavire"] : (function () { throw new RuntimeError('Variable "selectnavire" does not exist.', 98, $this->source); })()), "html", null, true);
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
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 111
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 111, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 112
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 112, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 113
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 113, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 114
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 114, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 115
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 115, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 116
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 116, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 117
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 117, $this->source); })()) == "Zarzis")) {
            echo " selected ";
        }
        echo ">Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown2\">Port Destination</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdes\" id=\"dropdown2\">
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 123
        if (((isset($context["initportdep"]) || array_key_exists("initportdep", $context) ? $context["initportdep"] : (function () { throw new RuntimeError('Variable "initportdep" does not exist.', 123, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 124
        if (((isset($context["initportdes"]) || array_key_exists("initportdes", $context) ? $context["initportdes"] : (function () { throw new RuntimeError('Variable "initportdes" does not exist.', 124, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 125
        if (((isset($context["initportdes"]) || array_key_exists("initportdes", $context) ? $context["initportdes"] : (function () { throw new RuntimeError('Variable "initportdes" does not exist.', 125, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 126
        if (((isset($context["initportdes"]) || array_key_exists("initportdes", $context) ? $context["initportdes"] : (function () { throw new RuntimeError('Variable "initportdes" does not exist.', 126, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 127
        if (((isset($context["initportdes"]) || array_key_exists("initportdes", $context) ? $context["initportdes"] : (function () { throw new RuntimeError('Variable "initportdes" does not exist.', 127, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 128
        if (((isset($context["initportdes"]) || array_key_exists("initportdes", $context) ? $context["initportdes"] : (function () { throw new RuntimeError('Variable "initportdes" does not exist.', 128, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 129
        if (((isset($context["initportdes"]) || array_key_exists("initportdes", $context) ? $context["initportdes"] : (function () { throw new RuntimeError('Variable "initportdes" does not exist.', 129, $this->source); })()) == "Zarzis")) {
            echo " selected ";
        }
        echo ">Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Embarquement</label>
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["initdateemb"]) || array_key_exists("initdateemb", $context) ? $context["initdateemb"] : (function () { throw new RuntimeError('Variable "initdateemb" does not exist.', 137, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\" name=\"dateemb\" id=\"dateInput\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Debarquement Attendu</label>
\t\t\t\t\t\t\t";
        // line 141
        if ((null === (isset($context["initdatedeb"]) || array_key_exists("initdatedeb", $context) ? $context["initdatedeb"] : (function () { throw new RuntimeError('Variable "initdatedeb" does not exist.', 141, $this->source); })()))) {
            // line 142
            echo "\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"datedeb\" id=\"dateInput\">
\t\t\t\t\t\t\t";
        } else {
            // line 144
            echo "\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["initdatedeb"]) || array_key_exists("initdatedeb", $context) ? $context["initdatedeb"] : (function () { throw new RuntimeError('Variable "initdatedeb" does not exist.', 144, $this->source); })()), "Y-m-d"), "html", null, true);
            echo "\" name=\"datedeb\" id=\"dateInput\">
\t\t\t\t\t\t\t";
        }
        // line 146
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t<option ";
        // line 151
        if (((isset($context["initsituation"]) || array_key_exists("initsituation", $context) ? $context["initsituation"] : (function () { throw new RuntimeError('Variable "initsituation" does not exist.', 151, $this->source); })()) == "Titulaire")) {
            echo " selected ";
        }
        echo ">Titulaire</option>
\t\t\t\t\t\t\t\t<option ";
        // line 152
        if (((isset($context["initsituation"]) || array_key_exists("initsituation", $context) ? $context["initsituation"] : (function () { throw new RuntimeError('Variable "initsituation" does not exist.', 152, $this->source); })()) == "Contractuel")) {
            echo " selected ";
        }
        echo ">Contractuel</option>
\t\t\t\t\t\t\t\t<option ";
        // line 153
        if (((isset($context["initsituation"]) || array_key_exists("initsituation", $context) ? $context["initsituation"] : (function () { throw new RuntimeError('Variable "initsituation" does not exist.', 153, $this->source); })()) == "Occasionnel")) {
            echo " selected ";
        }
        echo ">Occasionnel</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Modifier</button>
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
        // line 180
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
        return "commandant/mod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 180,  350 => 153,  344 => 152,  338 => 151,  331 => 146,  325 => 144,  321 => 142,  319 => 141,  312 => 137,  299 => 129,  293 => 128,  287 => 127,  281 => 126,  275 => 125,  269 => 124,  263 => 123,  252 => 117,  246 => 116,  240 => 115,  234 => 114,  228 => 113,  222 => 112,  216 => 111,  200 => 98,  190 => 91,  180 => 84,  170 => 77,  161 => 71,  152 => 65,  141 => 57,  122 => 41,  112 => 34,  94 => 19,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
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
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant') }}\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mov') }}\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t<br>

\t\t\t\t\t<br>
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<h2>Modifier un Mouvement de</h2>
\t\t\t\t\t<form action={{url('app_commandant_moding',{'mat':movmat} )}}>


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
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Departure</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Bizerte' %} selected {% endif %}>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Rades' %} selected {% endif %}>Rades</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Sousse' %} selected {% endif %}>Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Sfax' %} selected {% endif %}>Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Gabes' %} selected {% endif %}>Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Goulette' %} selected {% endif %}>Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Zarzis' %} selected {% endif %}>Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown2\">Port Destination</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"portdes\" id=\"dropdown2\">
\t\t\t\t\t\t\t\t\t\t<option {% if initportdep == 'Bizerte' %} selected {% endif %}>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdes == 'Rades' %} selected {% endif %}>Rades</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdes == 'Sousse' %} selected {% endif %}>Sousse</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdes == 'Sfax' %} selected {% endif %}>Sfax</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdes == 'Gabes' %} selected {% endif %}>Gabes</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdes == 'Goulette' %} selected {% endif %}>Goulette</option>
\t\t\t\t\t\t\t\t\t\t<option {% if initportdes == 'Zarzis' %} selected {% endif %}>Zarzis</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Embarquement</label>
\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ initdateemb|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dateInput\">Date d'Debarquement Attendu</label>
\t\t\t\t\t\t\t{% if initdatedeb is null %}
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" name=\"datedeb\" id=\"dateInput\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ initdatedeb|date('Y-m-d') }}\" name=\"datedeb\" id=\"dateInput\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t<option {% if initsituation == 'Titulaire' %} selected {% endif %}>Titulaire</option>
\t\t\t\t\t\t\t\t<option {% if initsituation == 'Contractuel' %} selected {% endif %}>Contractuel</option>
\t\t\t\t\t\t\t\t<option {% if initsituation == 'Occasionnel' %} selected {% endif %}>Occasionnel</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Modifier</button>
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

// Update the current date and time immediately and then update it every minute
updateCurrentDateTime()
setInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)
\t</script>
{% endblock %}
", "commandant/mod.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\commandant\\mod.html.twig");
    }
}
