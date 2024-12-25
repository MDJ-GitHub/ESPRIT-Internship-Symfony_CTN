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

/* commandant/mov.html.twig */
class __TwigTemplate_5099d26aa2c5d92a289ff3a9221cb750 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandant/mov.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandant/mov.html.twig", 1);
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
        echo "<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t<a class=\"navbar-brand\" href=\"#\">Commandment des Mouvements</a>
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
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action=";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_commandant_movf");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"nom\">Navigant</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"nom\" name=\"navigant\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Prénom et Nom\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Dep.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 53
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 53, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 54
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 54, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 55
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 55, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 56
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 56, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 57
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 57, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 58
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 58, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 59
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 59, $this->source); })()) == "Zarzis")) {
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
        // line 68
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 68, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 69
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 69, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 70
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 70, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 71
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 71, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 72
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 72, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 73
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 73, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 74
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 74, $this->source); })()) == "Zarzis")) {
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
        // line 85
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 85, $this->source); })()) == "Titulaire")) {
            echo " selected ";
        }
        echo ">Titulaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 86
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 86, $this->source); })()) == "Contractuel")) {
            echo " selected ";
        }
        echo ">Contractuel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 87
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 87, $this->source); })()) == "Occasionnel")) {
            echo " selected ";
        }
        echo ">Occasionnel</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" ";
        // line 97
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 97, $this->source); })()) == "Standard")) {
            echo " selected ";
        }
        echo ">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" ";
        // line 98
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 98, $this->source); })()) == "Gestionnaire")) {
            echo " selected ";
        }
        echo ">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" ";
        // line 99
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 99, $this->source); })()) == "Commandant")) {
            echo " selected ";
        }
        echo ">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" ";
        // line 100
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 100, $this->source); })()) == "G. Utilisateur")) {
            echo " selected ";
        }
        echo ">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" ";
        // line 101
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 101, $this->source); })()) == "Capitaine")) {
            echo " selected ";
        }
        echo ">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" ";
        // line 102
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 102, $this->source); })()) == "Garçon")) {
            echo " selected ";
        }
        echo ">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" ";
        // line 103
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 103, $this->source); })()) == "Mecanician")) {
            echo " selected ";
        }
        echo ">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" ";
        // line 104
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 104, $this->source); })()) == "Medicain")) {
            echo " selected ";
        }
        echo ">Medicain</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"etat\">Etat</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"etat\" id=\"etat\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 117
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 117, $this->source); })()) == "Programmé")) {
            echo " selected ";
        }
        echo ">Programmé</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 118
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 118, $this->source); })()) == "Absant")) {
            echo " selected ";
        }
        echo ">Absant</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 119
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 119, $this->source); })()) == "Annulé")) {
            echo " selected ";
        }
        echo ">Annulé</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 120
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 120, $this->source); })()) == "Embarqué")) {
            echo " selected ";
        }
        echo ">Embarqué</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 121
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 121, $this->source); })()) == "Debarqué")) {
            echo " selected ";
        }
        echo ">Debarqué</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 122
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 122, $this->source); })()) == "Evalué")) {
            echo " selected ";
        }
        echo ">Evalué</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 123
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 123, $this->source); })()) == "Inconnu")) {
            echo " selected ";
        }
        echo ">Inconnu</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"navire\">Navire</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"navire\" name=\"navire\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 135
        if (((isset($context["filv"]) || array_key_exists("filv", $context) ? $context["filv"] : (function () { throw new RuntimeError('Variable "filv" does not exist.', 135, $this->source); })()) == "Ulysse")) {
            echo " selected ";
        }
        echo " value=\"Ulysse\">Ulysse</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 136
        if (((isset($context["filv"]) || array_key_exists("filv", $context) ? $context["filv"] : (function () { throw new RuntimeError('Variable "filv" does not exist.', 136, $this->source); })()) == "Salambo")) {
            echo " selected ";
        }
        echo " value=\"Salambo\">Salambo</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 137
        if (((isset($context["filv"]) || array_key_exists("filv", $context) ? $context["filv"] : (function () { throw new RuntimeError('Variable "filv" does not exist.', 137, $this->source); })()) == "Amilcar")) {
            echo " selected ";
        }
        echo " value=\"Amilcar\">Amilcar</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 138
        if (((isset($context["filv"]) || array_key_exists("filv", $context) ? $context["filv"] : (function () { throw new RuntimeError('Variable "filv" does not exist.', 138, $this->source); })()) == "Elyssa")) {
            echo " selected ";
        }
        echo " value=\"Elyssa\">Elyssa</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 139
        if (((isset($context["filv"]) || array_key_exists("filv", $context) ? $context["filv"] : (function () { throw new RuntimeError('Variable "filv" does not exist.', 139, $this->source); })()) == "Tanit")) {
            echo " selected ";
        }
        echo " value=\"Tanit\">Tanit</option>
\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 140
        if (((isset($context["filv"]) || array_key_exists("filv", $context) ? $context["filv"] : (function () { throw new RuntimeError('Variable "filv" does not exist.', 140, $this->source); })()) == "Carthage")) {
            echo " selected ";
        }
        echo " value=\"Carthage\">Carthage</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"a\" class=\"btn btn-sm btn-danger mt-3\">Filtrer</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"b\" class=\"btn btn-sm btn-danger mt-3\">Effacer</button>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_pdf", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 170, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 170, $this->source); })()), "pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 170, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 170, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 170, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 170, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_csv", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 173, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 173, $this->source); })()), "pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 173, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 173, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 173, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 173, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mov");
        echo "\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
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
\t\t\t\t\t\t\t<th scope=\"col\">Navigant</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Fn</th>
\t\t\t\t\t\t\t<th scope=\"col\">Navire</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th scope=\"col\">Ac</th>
\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Etat</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 223, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 224
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 225), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t<td>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 226), "getPrenom", [], "method", false, false, false, 226), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 227), "getNom", [], "method", false, false, false, 227), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 228
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateemb", [], "method", false, false, false, 228), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t";
            // line 231
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 231))) {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 234
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 234), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 236
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 239
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 239))) {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 242), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 244
            echo "\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t";
            // line 246
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 246))) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 249), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdep", [], "method", false, false, false, 253), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdes", [], "method", false, false, false, 254), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 255), "getFonction", [], "method", false, false, false, 255), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 256), "getNavire", [], "method", false, false, false, 256), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSituation", [], "method", false, false, false, 257), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 262
            if (((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 262) != "Debarqué") && (twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 262) != "Evalué"))) {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_del", ["mat" => twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 263)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">🗑️ Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mod", ["mat" => twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 265)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">✏️ Modifier
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 268
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
            // line 272
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 272) == "Embarqué")) {
                // line 273
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 273), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 274
$context["i"], "getEtat", [], "method", false, false, false, 274) == "Evalué")) {
                // line 275
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 275), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 276
$context["i"], "getEtat", [], "method", false, false, false, 276) == "Debarqué")) {
                // line 277
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 277), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 278
$context["i"], "getEtat", [], "method", false, false, false, 278) == "Programmé")) {
                // line 279
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 279), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 280
$context["i"], "getEtat", [], "method", false, false, false, 280))) {
                // line 281
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 281), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absent", twig_get_attribute($this->env, $this->source,             // line 282
$context["i"], "getEtat", [], "method", false, false, false, 282))) {
                // line 283
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 283), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 284
$context["i"], "getEtat", [], "method", false, false, false, 284) == "")) {
                // line 285
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-secondary text-white\">Inconnu</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t<td class=\"bg-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 287), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t";
            }
            // line 289
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
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
        // line 316
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
\t\tleft: -100px; /* Align with the left edge of the dropdown button */
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
\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "commandant/mov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 316,  691 => 291,  684 => 289,  678 => 287,  674 => 285,  672 => 284,  667 => 283,  665 => 282,  660 => 281,  658 => 280,  653 => 279,  651 => 278,  646 => 277,  644 => 276,  639 => 275,  637 => 274,  632 => 273,  630 => 272,  624 => 268,  618 => 265,  612 => 263,  610 => 262,  602 => 257,  598 => 256,  594 => 255,  590 => 254,  586 => 253,  582 => 251,  576 => 249,  572 => 247,  570 => 246,  566 => 244,  560 => 242,  556 => 240,  554 => 239,  549 => 236,  543 => 234,  539 => 232,  537 => 231,  531 => 228,  527 => 227,  523 => 226,  519 => 225,  516 => 224,  512 => 223,  476 => 190,  466 => 183,  453 => 173,  447 => 170,  412 => 140,  406 => 139,  400 => 138,  394 => 137,  388 => 136,  382 => 135,  365 => 123,  359 => 122,  353 => 121,  347 => 120,  341 => 119,  335 => 118,  329 => 117,  311 => 104,  305 => 103,  299 => 102,  293 => 101,  287 => 100,  281 => 99,  275 => 98,  269 => 97,  254 => 87,  248 => 86,  242 => 85,  226 => 74,  220 => 73,  214 => 72,  208 => 71,  202 => 70,  196 => 69,  190 => 68,  176 => 59,  170 => 58,  164 => 57,  158 => 56,  152 => 55,  146 => 54,  140 => 53,  129 => 45,  123 => 42,  101 => 23,  95 => 20,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tCTN - Commandant
{% endblock %}

{% block body %}
<nav class=\"navbar shadow-lg navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top\">
\t<img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\"/>

\t<a class=\"navbar-brand\" href=\"#\">Commandment des Mouvements</a>
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
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action={{url('app_commandant_movf')}}>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"nom\">Navigant</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"nom\" name=\"navigant\" value=\"{{ filn }}\" placeholder=\"Prénom et Nom\">
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" {% if filf == 'Standard' %} selected {% endif %}>Standard</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" {% if filf == 'Gestionnaire' %} selected {% endif %}>Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" {% if filf == 'Commandant' %} selected {% endif %}>Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" {% if filf == 'G. Utilisateur' %} selected {% endif %}>G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" {% if filf == 'Capitaine' %} selected {% endif %}>Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" {% if filf == 'Garçon' %} selected {% endif %}>Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" {% if filf == 'Mecanician' %} selected {% endif %}>Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" {% if filf == 'Medicain' %} selected {% endif %}>Medicain</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"etat\">Etat</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"etat\" id=\"etat\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Programmé' %} selected {% endif %}>Programmé</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Absant' %} selected {% endif %}>Absant</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Annulé' %} selected {% endif %}>Annulé</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Embarqué' %} selected {% endif %}>Embarqué</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Debarqué' %} selected {% endif %}>Debarqué</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Evalué' %} selected {% endif %}>Evalué</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if file == 'Inconnu' %} selected {% endif %}>Inconnu</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"navire\">Navire</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"navire\" name=\"navire\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if filv == 'Ulysse' %} selected {% endif %} value=\"Ulysse\">Ulysse</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if filv == 'Salambo' %} selected {% endif %} value=\"Salambo\">Salambo</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if filv == 'Amilcar' %} selected {% endif %} value=\"Amilcar\">Amilcar</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if filv == 'Elyssa' %} selected {% endif %} value=\"Elyssa\">Elyssa</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if filv == 'Tanit' %} selected {% endif %} value=\"Tanit\">Tanit</option>
\t\t\t\t\t\t\t\t\t\t\t<option {% if filv == 'Carthage' %} selected {% endif %} value=\"Carthage\">Carthage</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"a\" class=\"btn btn-sm btn-danger mt-3\">Filtrer</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">


\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"a\" value=\"b\" class=\"btn btn-sm btn-danger mt-3\">Effacer</button>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_pdf', { 'n': filn | default(' '), 'f': filf, 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_csv', { 'n': filn | default(' '), 'f': filf, 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_commandant') }}\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mov') }}\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
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
\t\t\t\t\t\t\t<th scope=\"col\">Navigant</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Fn</th>
\t\t\t\t\t\t\t<th scope=\"col\">Navire</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th scope=\"col\">Ac</th>
\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Etat</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for i in list %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">{{ i.getId() }}</th>
\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getPrenom() }}
\t\t\t\t\t\t\t\t\t{{ i.matriculep.getNom() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.getDateemb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t{% if i.getDatedebc() is null %}
\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ i.getDatedebc()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>{{ i.getPortdep() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.getPortdes() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getFonction() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getNavire() }}</td>
\t\t\t\t\t\t\t\t<td>{{ i.getSituation() }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t{% if i.getEtat() != 'Debarqué' and i.getEtat() != 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_del',{'mat':i.getId()}) }}\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">🗑️ Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mod',{'mat':i.getId()}) }}\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">✏️ Modifier
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

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
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
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
\t\tleft: -100px; /* Align with the left edge of the dropdown button */
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
\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>{% endblock %}
", "commandant/mov.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\commandant\\mov.html.twig");
    }
}
