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

/* gestionnaire/mov.html.twig */
class __TwigTemplate_7f876d94defd5da397c4a0e0a53719db extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionnaire/mov.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionnaire/mov.html.twig", 1);
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
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action=";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_gestionnaire_movf");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"nom\">Navigant</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"nom\" name=\"navigant\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Prénom et Nom\">
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" ";
        // line 96
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 96, $this->source); })()) == "Standard")) {
            echo " selected ";
        }
        echo ">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" ";
        // line 97
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 97, $this->source); })()) == "Gestionnaire")) {
            echo " selected ";
        }
        echo ">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" ";
        // line 98
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 98, $this->source); })()) == "Commandant")) {
            echo " selected ";
        }
        echo ">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" ";
        // line 99
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 99, $this->source); })()) == "G. Utilisateur")) {
            echo " selected ";
        }
        echo ">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" ";
        // line 100
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 100, $this->source); })()) == "Capitaine")) {
            echo " selected ";
        }
        echo ">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" ";
        // line 101
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 101, $this->source); })()) == "Garçon")) {
            echo " selected ";
        }
        echo ">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" ";
        // line 102
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 102, $this->source); })()) == "Mecanician")) {
            echo " selected ";
        }
        echo ">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" ";
        // line 103
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 103, $this->source); })()) == "Medicain")) {
            echo " selected ";
        }
        echo ">Medicain</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"etat\">Etat</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"etat\" id=\"etat\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 115
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 115, $this->source); })()) == "Programmé")) {
            echo " selected ";
        }
        echo ">Programmé</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 116
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 116, $this->source); })()) == "Absant")) {
            echo " selected ";
        }
        echo ">Absant</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 117
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 117, $this->source); })()) == "Annulé")) {
            echo " selected ";
        }
        echo ">Annulé</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 118
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 118, $this->source); })()) == "Embarqué")) {
            echo " selected ";
        }
        echo ">Embarqué</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 119
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 119, $this->source); })()) == "Debarqué")) {
            echo " selected ";
        }
        echo ">Debarqué</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 120
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 120, $this->source); })()) == "Evalué")) {
            echo " selected ";
        }
        echo ">Evalué</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 121
        if (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 121, $this->source); })()) == "Inconnu")) {
            echo " selected ";
        }
        echo ">Inconnu</option>

\t\t\t\t\t\t\t\t\t</select>
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
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_pdf", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 152, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 152, $this->source); })()), "pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 152, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 152, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 152, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 152, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_csv", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 155, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 155, $this->source); })()), "pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 155, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 155, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 155, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 155, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_mov");
        echo "\" class=\"nav-link bg-danger text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_evaa");
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

\t\t\t
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
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 213, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 214
            echo "\t\t\t\t\t\t\t<form action=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_gestionnaire_deb", ["mat" => twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 214)]), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 216), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t<td>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 217), "getPrenom", [], "method", false, false, false, 217), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 218), "getNom", [], "method", false, false, false, 218), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 219
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateemb", [], "method", false, false, false, 219), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t";
            // line 222
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 222) == "Embarqué")) {
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 223), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 225
$context["i"], "getEtat", [], "method", false, false, false, 225) == "Evalué")) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 226), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 228
$context["i"], "getEtat", [], "method", false, false, false, 228) == "Debarqué")) {
                // line 229
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 229), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 231
$context["i"], "getEtat", [], "method", false, false, false, 231) == "Programmé")) {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 232), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\">


\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 235
$context["i"], "getEtat", [], "method", false, false, false, 235))) {
                // line 236
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 236), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\">

\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 238
$context["i"], "getEtat", [], "method", false, false, false, 238))) {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 239), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\">

\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 245
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 245))) {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 248
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 249
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 249), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t";
            // line 253
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 253) == "Embarqué")) {
                // line 254
                echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                // line 255
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 255), "Y-m-d"), "html", null, true);
                echo "\" name=\"datedeb\" id=\"dateInput\">


\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 258
$context["i"], "getEtat", [], "method", false, false, false, 258) == "Evalué")) {
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 259), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 261
$context["i"], "getEtat", [], "method", false, false, false, 261) == "Debarqué")) {
                // line 262
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 262), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 263
$context["i"], "getEtat", [], "method", false, false, false, 263) == "Programmé")) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t\t---

\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 266
$context["i"], "getEtat", [], "method", false, false, false, 266))) {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 268
$context["i"], "getEtat", [], "method", false, false, false, 268))) {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 271
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td>";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdep", [], "method", false, false, false, 275), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdes", [], "method", false, false, false, 276), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 277), "getFonction", [], "method", false, false, false, 277), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 278), "getNavire", [], "method", false, false, false, 278), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSituation", [], "method", false, false, false, 279), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 284
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 284) == "Embarqué")) {
                // line 285
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"a\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✔️ Débarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 290
$context["i"], "getEtat", [], "method", false, false, false, 290) == "Evalué")) {
                // line 291
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Revaluer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 293
$context["i"], "getEtat", [], "method", false, false, false, 293) == "Debarqué")) {
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 296
$context["i"], "getEtat", [], "method", false, false, false, 296) == "Programmé")) {
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 305
$context["i"], "getEtat", [], "method", false, false, false, 305))) {
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 311
$context["i"], "getEtat", [], "method", false, false, false, 311))) {
                // line 312
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 318
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 319
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t";
            // line 323
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 323) == "Embarqué")) {
                // line 324
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 324), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 325
$context["i"], "getEtat", [], "method", false, false, false, 325) == "Evalué")) {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 326), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 327
$context["i"], "getEtat", [], "method", false, false, false, 327) == "Debarqué")) {
                // line 328
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 328), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 329
$context["i"], "getEtat", [], "method", false, false, false, 329) == "Programmé")) {
                // line 330
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 330), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 331
$context["i"], "getEtat", [], "method", false, false, false, 331))) {
                // line 332
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 332), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absent", twig_get_attribute($this->env, $this->source,             // line 333
$context["i"], "getEtat", [], "method", false, false, false, 333))) {
                // line 334
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 334), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 335
$context["i"], "getEtat", [], "method", false, false, false, 335) == "")) {
                // line 336
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-secondary text-white\">Inconnu</td>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 338
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 338), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo "\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "\t\t\t\t\t</tbody>
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
        // line 368
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestionnaire/mov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  803 => 368,  778 => 345,  768 => 340,  762 => 338,  758 => 336,  756 => 335,  751 => 334,  749 => 333,  744 => 332,  742 => 331,  737 => 330,  735 => 329,  730 => 328,  728 => 327,  723 => 326,  721 => 325,  716 => 324,  714 => 323,  708 => 319,  705 => 318,  697 => 312,  695 => 311,  688 => 306,  686 => 305,  676 => 297,  674 => 296,  670 => 294,  668 => 293,  664 => 291,  662 => 290,  655 => 285,  653 => 284,  645 => 279,  641 => 278,  637 => 277,  633 => 276,  629 => 275,  625 => 273,  621 => 271,  617 => 269,  615 => 268,  612 => 267,  610 => 266,  606 => 264,  604 => 263,  599 => 262,  597 => 261,  591 => 259,  589 => 258,  583 => 255,  580 => 254,  578 => 253,  574 => 251,  569 => 249,  566 => 248,  562 => 246,  560 => 245,  556 => 243,  553 => 242,  546 => 239,  544 => 238,  538 => 236,  536 => 235,  529 => 232,  527 => 231,  521 => 229,  519 => 228,  513 => 226,  511 => 225,  505 => 223,  503 => 222,  497 => 219,  493 => 218,  489 => 217,  485 => 216,  479 => 214,  475 => 213,  437 => 178,  427 => 171,  417 => 164,  405 => 155,  399 => 152,  363 => 121,  357 => 120,  351 => 119,  345 => 118,  339 => 117,  333 => 116,  327 => 115,  310 => 103,  304 => 102,  298 => 101,  292 => 100,  286 => 99,  280 => 98,  274 => 97,  268 => 96,  253 => 86,  247 => 85,  241 => 84,  225 => 73,  219 => 72,  213 => 71,  207 => 70,  201 => 69,  195 => 68,  189 => 67,  175 => 58,  169 => 57,  163 => 56,  157 => 55,  151 => 54,  145 => 53,  139 => 52,  128 => 44,  122 => 41,  101 => 23,  95 => 20,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action={{url('app_gestionnaire_movf')}}>
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


\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"etat\">Etat</label>
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

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_pdf', { 'n': filn | default(' '), 'f': filf, 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_csv', { 'n': filn | default(' '), 'f': filf, 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire') }}\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_mov') }}\" class=\"nav-link bg-danger text-white\">
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
\t\t\t\t</ul>

\t\t\t</div>
\t\t</nav>

\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t<br>
\t\t\t<br>
\t\t\t<br>

\t\t\t
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
\t\t\t\t\t\t\t<form action={{url('app_gestionnaire_deb',{'mat':i.getId()} )}}>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ i.getId() }}</th>
\t\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getPrenom() }}
\t\t\t\t\t\t\t\t\t\t{{ i.matriculep.getNom() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getDateemb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDateembc()|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\">


\t\t\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDateembc()|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\">

\t\t\t\t\t\t\t\t\t\t{% elseif 'Absant' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDateembc()|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\">

\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if i.getDatedeb() is null %}
\t\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t\t{{ i.getDatedeb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}

\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDatedebc()|date('Y-m-d') }}\" name=\"datedeb\" id=\"dateInput\">


\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDatedebc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDatedebc()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t\t\t---

\t\t\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t\t{% elseif 'Absant' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td>{{ i.getPortdep() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getPortdes() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getFonction() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getNavire() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getSituation() }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"a\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✔️ Débarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Revaluer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif 'Absant' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-warning\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% elseif 'Absent' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == ''  %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-secondary text-white\">Inconnu</td>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-info\">{{i.getEtat()}}</td>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</form>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>{% endblock %}
", "gestionnaire/mov.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\gestionnaire\\mov.html.twig");
    }
}
