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

/* navigant/index.html.twig */
class __TwigTemplate_466c0685b7569277170e9d52a9837f10 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "navigant/index.html.twig", 1);
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
        echo "<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t<a class=\"navbar-brand\" href=\"#\">Consultation de Profile</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">♟️
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["loginfn"]) || array_key_exists("loginfn", $context) ? $context["loginfn"] : (function () { throw new RuntimeError('Variable "loginfn" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</button>
\t\t-
\t\t\t<div class=\"dropdownx\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t</form>
</nav>


<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t<div class=\"position-sticky\">
\t\t<br>
\t\t\t\t<br>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action=";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_navigant_movf");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Dep.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 52
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 52, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 53
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 53, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 54
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 54, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 55
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 55, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 56
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 56, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 57
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 57, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 58
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 58, $this->source); })()) == "Zarzis")) {
            echo " selected ";
        }
        echo ">Zarzis</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown2\">Port Dea.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdes\" id=\"dropdown2\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 67
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 67, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 68
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 68, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 69
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 69, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 70
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 70, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 71
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 71, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 72
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 72, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 73
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 73, $this->source); })()) == "Zarzis")) {
            echo " selected ";
        }
        echo ">Zarzis</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 84
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 84, $this->source); })()) == "Titulaire")) {
            echo " selected ";
        }
        echo ">Titulaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 85
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 85, $this->source); })()) == "Contractuel")) {
            echo " selected ";
        }
        echo ">Contractuel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 86
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 86, $this->source); })()) == "Occasionnel")) {
            echo " selected ";
        }
        echo ">Occasionnel</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"etat\">Etat</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"etat\" id=\"etat\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 96
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 96, $this->source); })()) == "Programmé")) {
            echo " selected ";
        }
        echo ">Programmé</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 97
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 97, $this->source); })()) == "Absant")) {
            echo " selected ";
        }
        echo ">Absant</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 98
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 98, $this->source); })()) == "Annulé")) {
            echo " selected ";
        }
        echo ">Annulé</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 99
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 99, $this->source); })()) == "Embarqué")) {
            echo " selected ";
        }
        echo ">Embarqué</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 100
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 100, $this->source); })()) == "Debarqué")) {
            echo " selected ";
        }
        echo ">Debarqué</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 101
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 101, $this->source); })()) == "Evalué")) {
            echo " selected ";
        }
        echo ">Evalué</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 102
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 102, $this->source); })()) == "Inconnu")) {
            echo " selected ";
        }
        echo ">Inconnu</option>

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"a\" class=\"btn btn-sm btn-danger mt-3\">Filtrer</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"b\" class=\"btn btn-sm btn-danger mt-3\">Effacer</button>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>


\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_pdf", ["pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 135, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 135, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 135, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 135, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_csv", ["pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 138, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 138, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 138, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 138, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant");
        echo "\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_evaa");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</nav>

\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>
\t\t\t<div class=\"table-container\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Mat</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Etat</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 185
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 186), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<td>";
            // line 187
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateemb", [], "method", false, false, false, 187), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t";
            // line 190
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 190))) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 193), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 195
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 198
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 198))) {
                // line 199
                echo "\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 201
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 201), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t";
            // line 205
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 205))) {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 208), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdep", [], "method", false, false, false, 212), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdes", [], "method", false, false, false, 213), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSituation", [], "method", false, false, false, 214), "html", null, true);
            echo "</td>
\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
            // line 217
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 217) == "Embarqué")) {
                // line 218
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 218), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 219
$context["i"], "getEtat", [], "method", false, false, false, 219) == "Evalué")) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 220), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 221
$context["i"], "getEtat", [], "method", false, false, false, 221) == "Debarqué")) {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 222), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 223
$context["i"], "getEtat", [], "method", false, false, false, 223) == "Programmé")) {
                // line 224
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 224), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 225
$context["i"], "getEtat", [], "method", false, false, false, 225))) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 226), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absent", twig_get_attribute($this->env, $this->source,             // line 227
$context["i"], "getEtat", [], "method", false, false, false, 227))) {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 228), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 229
$context["i"], "getEtat", [], "method", false, false, false, 229) == "")) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-secondary text-white\">Inconnu</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 232), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            // line 234
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "

\t\t</tbody>
\t</table>
</div></main></div></div><style>.table-container {
\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\toverflow-y: auto; /* Add vertical scroll for the content */
}

.table thead {
\tposition: sticky;
\ttop: 0;
\tz-index: 1; /* Ensure the header is above the table content */
}

#sidebar {
\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\tposition: fixed;
}
body {
\tbackground-image: url(";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background.png"), "html", null, true);
        echo "); /* Replace with the actual path to your hiba image */
\tbackground-size: cover; /* This will make the image cover the entire background */
\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
}
table tr td,
table tr th {
\tbackground-color: rgba(255, 255, 255, 0.6) !important;
}

.dropdown {
\tposition: relative;
\tdisplay: inline-block;
}

.dropdown-content {
\tdisplay: none;
\tposition: absolute;
\tbackground-color: #f9f9f9;

\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\tz-index: 1;
}

.dropdown:hover .dropdown-content {
\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\tflex-direction: row; /* Arrange them horizontally */
\ttop: -10px; /* Position below the dropdown button */
\tleft: -100px; /* Align with the left edge of the dropdown button */
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

</style><script>function updateCurrentDateTime() {
\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t
\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t
\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navigant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 256,  544 => 236,  537 => 234,  531 => 232,  527 => 230,  525 => 229,  520 => 228,  518 => 227,  513 => 226,  511 => 225,  506 => 224,  504 => 223,  499 => 222,  497 => 221,  492 => 220,  490 => 219,  485 => 218,  483 => 217,  477 => 214,  473 => 213,  469 => 212,  465 => 210,  459 => 208,  455 => 206,  453 => 205,  449 => 203,  443 => 201,  439 => 199,  437 => 198,  432 => 195,  426 => 193,  422 => 191,  420 => 190,  414 => 187,  410 => 186,  407 => 185,  403 => 184,  371 => 155,  361 => 148,  348 => 138,  342 => 135,  304 => 102,  298 => 101,  292 => 100,  286 => 99,  280 => 98,  274 => 97,  268 => 96,  253 => 86,  247 => 85,  241 => 84,  225 => 73,  219 => 72,  213 => 71,  207 => 70,  201 => 69,  195 => 68,  189 => 67,  175 => 58,  169 => 57,  163 => 56,  157 => 55,  151 => 54,  145 => 53,  139 => 52,  129 => 45,  107 => 26,  101 => 23,  94 => 19,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - Navigant
{% endblock %}

{% block body %}
<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t<a class=\"navbar-brand\" href=\"#\">Consultation de Profile</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">♟️
\t\t\t{{ loginfn }}</button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
\t\t\t{{ loginnavire }}</button>
\t\t-
\t\t\t<div class=\"dropdownx\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t{{ loginnom }}</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t</form>
</nav>


<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t<div class=\"position-sticky\">
\t\t<br>
\t\t\t\t<br>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action={{url('app_navigant_movf')}}>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Dep.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Bizerte' %} selected {% endif %}>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Rades' %} selected {% endif %}>Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Sousse' %} selected {% endif %}>Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Sfax' %} selected {% endif %}>Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Gabes' %} selected {% endif %}>Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Goulette' %} selected {% endif %}>Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdep == 'Zarzis' %} selected {% endif %}>Zarzis</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown2\">Port Dea.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdes\" id=\"dropdown2\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Bizerte' %} selected {% endif %}>Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Rades' %} selected {% endif %}>Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Sousse' %} selected {% endif %}>Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Sfax' %} selected {% endif %}>Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Gabes' %} selected {% endif %}>Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Goulette' %} selected {% endif %}>Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if filpdes == 'Zarzis' %} selected {% endif %}>Zarzis</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if fils == 'Titulaire' %} selected {% endif %}>Titulaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if fils == 'Contractuel' %} selected {% endif %}>Contractuel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if fils == 'Occasionnel' %} selected {% endif %}>Occasionnel</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"etat\">Etat</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"etat\" id=\"etat\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Programmé' %} selected {% endif %}>Programmé</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Absant' %} selected {% endif %}>Absant</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Annulé' %} selected {% endif %}>Annulé</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Embarqué' %} selected {% endif %}>Embarqué</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Debarqué' %} selected {% endif %}>Debarqué</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Evalué' %} selected {% endif %}>Evalué</option>
\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Inconnu' %} selected {% endif %}>Inconnu</option>

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"a\" class=\"btn btn-sm btn-danger mt-3\">Filtrer</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"b\" class=\"btn btn-sm btn-danger mt-3\">Effacer</button>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>


\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_navigant_pdf', { 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"{{ path('app_navigant_csv', { 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_navigant') }}\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_navigant_evaa') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>📝 Evaluations
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</nav>

\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>
\t\t\t<div class=\"table-container\">
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Mat</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Etat</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for i in list %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">{{ i.getId() }}</th>
\t\t\t\t\t\t\t\t<td>{{ i.getDateemb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t{% if i.getDateembc() is null %}
\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if i.getDatedeb() is null %}
\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ i.getDatedeb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t{% if i.getDatedebc() is null %}
\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ i.getDatedebc()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>{{ i.getPortdep() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.getPortdes() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.getSituation() }}</td>
\t\t\t\t\t\t

\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-warning\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% elseif 'Absent' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% elseif i.getEtat() == ''  %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-secondary text-white\">Inconnu</td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<td class=\"bg-info\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t{% endfor %}


\t\t</tbody>
\t</table>
</div></main></div></div><style>.table-container {
\tmax-height: calc(100vh - 80px); /* Adjust the maximum height as needed */
\toverflow-y: auto; /* Add vertical scroll for the content */
}

.table thead {
\tposition: sticky;
\ttop: 0;
\tz-index: 1; /* Ensure the header is above the table content */
}

#sidebar {
\tmin-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
\tposition: fixed;
}
body {
\tbackground-image: url({{ asset('img/background.png') }}); /* Replace with the actual path to your hiba image */
\tbackground-size: cover; /* This will make the image cover the entire background */
\tbackground-repeat: no-repeat; /* Prevent the image from repeating */
}
table tr td,
table tr th {
\tbackground-color: rgba(255, 255, 255, 0.6) !important;
}

.dropdown {
\tposition: relative;
\tdisplay: inline-block;
}

.dropdown-content {
\tdisplay: none;
\tposition: absolute;
\tbackground-color: #f9f9f9;

\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\tz-index: 1;
}

.dropdown:hover .dropdown-content {
\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\tflex-direction: row; /* Arrange them horizontally */
\ttop: -10px; /* Position below the dropdown button */
\tleft: -100px; /* Align with the left edge of the dropdown button */
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

</style><script>function updateCurrentDateTime() {
\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t
\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t
\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>{% endblock %}
", "navigant/index.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\navigant\\index.html.twig");
    }
}
