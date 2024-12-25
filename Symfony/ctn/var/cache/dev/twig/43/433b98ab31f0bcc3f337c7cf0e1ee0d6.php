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

/* gestionnaire/evaa.html.twig */
class __TwigTemplate_3037ebf356944fab3d1e85f69d456635 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionnaire/evaa.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestionnaire/evaa.html.twig", 1);
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
\t<div class=\"dropdownx\">
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t\t-
\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t</form>
</nav>

<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t<div class=\"position-sticky\">
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action=";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_gestionnaire_evaaf");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"nom\">Navigant</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"nom\" name=\"navigant\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Prénom et Nom\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Dep.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 51
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 51, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 52
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 52, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 53
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 53, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 54
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 54, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 55
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 55, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 56
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 56, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 57
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 57, $this->source); })()) == "Zarzis")) {
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
        // line 66
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 66, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 67
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 67, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 68
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 68, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 69
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 69, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 70
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 70, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 71
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 71, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 72
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 72, $this->source); })()) == "Zarzis")) {
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
        // line 83
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 83, $this->source); })()) == "Titulaire")) {
            echo " selected ";
        }
        echo ">Titulaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 84
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 84, $this->source); })()) == "Contractuel")) {
            echo " selected ";
        }
        echo ">Contractuel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 85
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 85, $this->source); })()) == "Occasionnel")) {
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
        // line 95
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 95, $this->source); })()) == "Standard")) {
            echo " selected ";
        }
        echo ">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" ";
        // line 96
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 96, $this->source); })()) == "Gestionnaire")) {
            echo " selected ";
        }
        echo ">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" ";
        // line 97
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 97, $this->source); })()) == "Commandant")) {
            echo " selected ";
        }
        echo ">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" ";
        // line 98
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 98, $this->source); })()) == "G. Utilisateur")) {
            echo " selected ";
        }
        echo ">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" ";
        // line 99
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 99, $this->source); })()) == "Capitaine")) {
            echo " selected ";
        }
        echo ">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" ";
        // line 100
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 100, $this->source); })()) == "Garçon")) {
            echo " selected ";
        }
        echo ">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" ";
        // line 101
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 101, $this->source); })()) == "Mecanician")) {
            echo " selected ";
        }
        echo ">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" ";
        // line 102
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 102, $this->source); })()) == "Medicain")) {
            echo " selected ";
        }
        echo ">Medicain</option>

\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"slider\">Note :
\t\t\t\t\t\t\t\t\t</label>&nbsp;<span id=\"sliderValue\">Tout</span>
\t\t\t\t\t\t\t\t\t<input type=\"range\" class=\"form-control form-control-sm\" id=\"slider\" name=\"note\" min=\"-1\" max=\"20\" value=\"-1\">

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

\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_epdf", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 141, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 141, $this->source); })()), "pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 141, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 141, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 141, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 141, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_ecsv", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 144, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 144, $this->source); })()), "pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 144, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 144, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 144, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 144, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_mov");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gestionnaire_evaa");
        echo "\" class=\"nav-link bg-danger text-white\">
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
\t\t\t\t\t\t\t<th scope=\"col\">Mat Mv</th>
\t\t\t\t\t\t\t<th scope=\"col\">Navigant</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Fn</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th scope=\"col\">Ac</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"bg-secondary\">Note</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 200, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 201
            echo "\t\t\t\t\t\t\t<form action=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_gestionnaire_deb", ["mat" => twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 201)]), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 203), "getId", [], "method", false, false, false, 203), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t<td>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 204), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 205), "getPrenom", [], "method", false, false, false, 205), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 206), "getNom", [], "method", false, false, false, 206), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 207
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateemb", [], "method", false, false, false, 207), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t";
            // line 210
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 210) == "Embarqué")) {
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 211), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 213
$context["i"], "getEtat", [], "method", false, false, false, 213) == "Evalué")) {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 214), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 216
$context["i"], "getEtat", [], "method", false, false, false, 216) == "Debarqué")) {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 217), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 219
$context["i"], "getEtat", [], "method", false, false, false, 219) == "Programmé")) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 220), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\"></td>


\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 223
$context["i"], "getEtat", [], "method", false, false, false, 223))) {
                // line 224
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 224), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\"></td>

\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 226
$context["i"], "getEtat", [], "method", false, false, false, 226))) {
                // line 227
                echo "\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 227), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\"></td>

\t\t\t\t\t\t\t\t";
            } else {
                // line 230
                echo "\t\t\t\t\t\t\t";
            }
            // line 231
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 233
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 233))) {
                // line 234
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } else {
                // line 236
                echo "
\t\t\t\t\t\t\t\t";
                // line 237
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 237), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 239
            echo "\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t";
            // line 241
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 241) == "Embarqué")) {
                // line 242
                echo "
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                // line 243
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 243), "Y-m-d"), "html", null, true);
                echo "\" name=\"datedeb\" id=\"dateInput\">


\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 246
$context["i"], "getEtat", [], "method", false, false, false, 246) == "Evalué")) {
                // line 247
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 247), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 249
$context["i"], "getEtat", [], "method", false, false, false, 249) == "Debarqué")) {
                // line 250
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 250), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 251
$context["i"], "getEtat", [], "method", false, false, false, 251) == "Programmé")) {
                // line 252
                echo "\t\t\t\t\t\t\t\t---

\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 254
$context["i"], "getEtat", [], "method", false, false, false, 254))) {
                // line 255
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 256
$context["i"], "getEtat", [], "method", false, false, false, 256))) {
                // line 257
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t";
            } else {
                // line 259
                echo "
\t\t\t\t\t\t\t";
            }
            // line 261
            echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdep", [], "method", false, false, false, 263), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdes", [], "method", false, false, false, 264), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 265), "getFonction", [], "method", false, false, false, 265), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSituation", [], "method", false, false, false, 266), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t";
            // line 271
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 271) == "Embarqué")) {
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"a\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✔️ Débarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 277
$context["i"], "getEtat", [], "method", false, false, false, 277) == "Evalué")) {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Revaluer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 280
$context["i"], "getEtat", [], "method", false, false, false, 280) == "Debarqué")) {
                // line 281
                echo "\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 283
$context["i"], "getEtat", [], "method", false, false, false, 283) == "Programmé")) {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 292
$context["i"], "getEtat", [], "method", false, false, false, 292))) {
                // line 293
                echo "\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 298
$context["i"], "getEtat", [], "method", false, false, false, 298))) {
                // line 299
                echo "\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 305
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t";
            // line 310
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 310), "getNote", [], "method", false, false, false, 310) == 20)) {
                // line 311
                echo "\t\t\t\t\t\t\t<td class=\"bg-info text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 311), "getNote", [], "method", false, false, false, 311), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 313
$context["i"], "getEvaluation", [], "method", false, false, false, 313), "getNote", [], "method", false, false, false, 313) < 20) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 313), "getNote", [], "method", false, false, false, 313) >= 15))) {
                // line 314
                echo "\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 314), "getNote", [], "method", false, false, false, 314), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 316
$context["i"], "getEvaluation", [], "method", false, false, false, 316), "getNote", [], "method", false, false, false, 316) <= 14) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 316), "getNote", [], "method", false, false, false, 316) >= 10))) {
                // line 317
                echo "\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 317), "getNote", [], "method", false, false, false, 317), "html", null, true);
                echo "/ 20</td>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 318
$context["i"], "getEvaluation", [], "method", false, false, false, 318), "getNote", [], "method", false, false, false, 318) <= 9) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 318), "getNote", [], "method", false, false, false, 318) >= 5))) {
                // line 319
                echo "\t\t\t\t\t\t\t<td class=\"bg-warning text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 319), "getNote", [], "method", false, false, false, 319), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 321
$context["i"], "getEvaluation", [], "method", false, false, false, 321), "getNote", [], "method", false, false, false, 321) <= 4)) {
                // line 322
                echo "\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 322), "getNote", [], "method", false, false, false, 322), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } else {
                // line 325
                echo "\t\t\t\t\t\t\t<td class=\"bg-light text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 325), "getNote", [], "method", false, false, false, 325), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            }
            // line 328
            echo "\t\t\t\t
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"11\">";
            // line 332
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 332), "getCommentaire", [], "method", false, false, false, 332), "html", null, true);
            echo "</td>

\t\t\t\t</tr>


\t\t\t</form>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "\t</tbody>
</table></div></main></div></div><style>.table-container {
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
        // line 356
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
\tleft: -110px; /* Align with the left edge of the dropdown button */


}
\t\t.dropdownx {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.dropdown-contentx {
\t\t\tdisplay: none;
\t\t\tposition: absolute;
\t\t\tbackground-color: #f9f9f9;

\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\tz-index: 1;
\t\t}

\t\t.dropdownx:hover .dropdown-contentx {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: column; /* Arrange them horizontally */
\t\t\t/* Position below the dropdown button */
\t\t\t/* Align with the left edge of the dropdown button */
\t\t}

</style><script>function updateCurrentDateTime() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t const slider = document.getElementById(\"slider\");
    const sliderValue = document.getElementById(\"sliderValue\");

    // Update the value display when the slider value changes.
    slider.addEventListener(\"input\", function() {
\t\tif( slider.value == -1)
\t\t{
 sliderValue.textContent = \"Tout\"
\t\t} else {
        sliderValue.textContent = slider.value;
\t}
    });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestionnaire/evaa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  751 => 356,  732 => 339,  719 => 332,  713 => 328,  706 => 325,  699 => 322,  697 => 321,  691 => 319,  689 => 318,  684 => 317,  682 => 316,  676 => 314,  674 => 313,  668 => 311,  666 => 310,  660 => 306,  657 => 305,  649 => 299,  647 => 298,  640 => 293,  638 => 292,  628 => 284,  626 => 283,  622 => 281,  620 => 280,  616 => 278,  614 => 277,  607 => 272,  605 => 271,  597 => 266,  593 => 265,  589 => 264,  585 => 263,  581 => 261,  577 => 259,  573 => 257,  571 => 256,  568 => 255,  566 => 254,  562 => 252,  560 => 251,  555 => 250,  553 => 249,  547 => 247,  545 => 246,  539 => 243,  536 => 242,  534 => 241,  530 => 239,  525 => 237,  522 => 236,  518 => 234,  516 => 233,  512 => 231,  509 => 230,  502 => 227,  500 => 226,  494 => 224,  492 => 223,  485 => 220,  483 => 219,  477 => 217,  475 => 216,  469 => 214,  467 => 213,  461 => 211,  459 => 210,  453 => 207,  449 => 206,  445 => 205,  441 => 204,  437 => 203,  431 => 201,  427 => 200,  391 => 167,  381 => 160,  371 => 153,  359 => 144,  353 => 141,  309 => 102,  303 => 101,  297 => 100,  291 => 99,  285 => 98,  279 => 97,  273 => 96,  267 => 95,  252 => 85,  246 => 84,  240 => 83,  224 => 72,  218 => 71,  212 => 70,  206 => 69,  200 => 68,  194 => 67,  188 => 66,  174 => 57,  168 => 56,  162 => 55,  156 => 54,  150 => 53,  144 => 52,  138 => 51,  127 => 43,  121 => 40,  101 => 23,  95 => 20,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
\t<div class=\"dropdownx\">
\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t\t{{ loginnom }}</button>
\t\t\t\t-
\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t</form>
</nav>

<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t<div class=\"position-sticky\">
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action={{url('app_gestionnaire_evaaf')}}>
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
\t\t\t\t\t\t\t\t\t<label for=\"slider\">Note :
\t\t\t\t\t\t\t\t\t</label>&nbsp;<span id=\"sliderValue\">Tout</span>
\t\t\t\t\t\t\t\t\t<input type=\"range\" class=\"form-control form-control-sm\" id=\"slider\" name=\"note\" min=\"-1\" max=\"20\" value=\"-1\">

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

\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_epdf', { 'n': filn | default(' '), 'f': filf, 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_ecsv', { 'n': filn | default(' '), 'f': filf, 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


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
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_mov') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_gestionnaire_evaa') }}\" class=\"nav-link bg-danger text-white\">
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
\t\t\t\t\t\t\t<th scope=\"col\">Mat Mv</th>
\t\t\t\t\t\t\t<th scope=\"col\">Navigant</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Fn</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th scope=\"col\">Ac</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"bg-secondary\">Note</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for i in list %}
\t\t\t\t\t\t\t<form action={{url('app_gestionnaire_deb',{'mat':i.getId()} )}}>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ i.getEvaluation().getId() }}</th>
\t\t\t\t\t\t\t\t\t<td>{{ i.getId() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.matriculep.getPrenom() }}
\t\t\t\t\t\t\t\t\t\t{{ i.matriculep.getNom() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getDateemb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t\t\t{{ i.getDateembc()|date('Y-m-d') }}

\t\t\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDateembc()|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\"></td>


\t\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDateembc()|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\"></td>

\t\t\t\t\t\t\t\t{% elseif 'Absant' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDateembc()|date('Y-m-d') }}\" name=\"dateemb\" id=\"dateInput\"></td>

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if i.getDatedeb() is null %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t{{ i.getDatedeb()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}

\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"{{ i.getDatedebc()|date('Y-m-d') }}\" name=\"datedeb\" id=\"dateInput\">


\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t{{ i.getDatedebc()|date('Y-m-d') }}

\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t{{ i.getDatedebc()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t---

\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t{% elseif 'Absant' in i.getEtat()  %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>{{ i.getPortdep() }}</td>
\t\t\t\t\t\t<td>{{ i.getPortdes() }}</td>
\t\t\t\t\t\t<td>{{ i.matriculep.getFonction() }}</td>
\t\t\t\t\t\t<td>{{ i.getSituation() }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t{% if i.getEtat() == 'Embarqué' %}
\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"a\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">✔️ Débarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Evalué' %}
\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Revaluer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% elseif i.getEtat() == 'Debarqué' %}
\t\t\t\t\t\t\t\t\t\t<button value=\"b\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-lg\" name=\"action\" type=\"submit\">✅ Evaluer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% elseif  i.getEtat() == 'Programmé' %}
\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% elseif 'Annulé' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t<button value=\"d\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❌ Absent
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% elseif 'Absant' in i.getEtat()  %}
\t\t\t\t\t\t\t\t\t\t<button value=\"c\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">❗Annuler
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button value=\"e\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" name=\"action\" type=\"submit\">⭕ Embarquer
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>

\t\t\t\t\t\t{% if i.getEvaluation().getNote() == 20 %}
\t\t\t\t\t\t\t<td class=\"bg-info text-white\">{{i.getEvaluation().getNote()}}
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t{% elseif i.getEvaluation().getNote() < 20 and i.getEvaluation().getNote() >= 15 %}
\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">{{i.getEvaluation().getNote()}}
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t{% elseif i.getEvaluation().getNote() <= 14 and i.getEvaluation().getNote() >= 10 %}
\t\t\t\t\t\t\t<td class=\"bg-success text-white\">{{i.getEvaluation().getNote()}}/ 20</td>
\t\t\t\t\t\t{% elseif i.getEvaluation().getNote() <= 9 and i.getEvaluation().getNote() >= 5 %}
\t\t\t\t\t\t\t<td class=\"bg-warning text-white\">{{i.getEvaluation().getNote()}}
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t{% elseif i.getEvaluation().getNote() <= 4 %}
\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">{{i.getEvaluation().getNote()}}
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<td class=\"bg-light text-white\">{{i.getEvaluation().getNote()}}
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"11\">{{i.getEvaluation().getCommentaire()}}</td>

\t\t\t\t</tr>


\t\t\t</form>
\t\t{% endfor %}
\t</tbody>
</table></div></main></div></div><style>.table-container {
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
\tleft: -110px; /* Align with the left edge of the dropdown button */


}
\t\t.dropdownx {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.dropdown-contentx {
\t\t\tdisplay: none;
\t\t\tposition: absolute;
\t\t\tbackground-color: #f9f9f9;

\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\tz-index: 1;
\t\t}

\t\t.dropdownx:hover .dropdown-contentx {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: column; /* Arrange them horizontally */
\t\t\t/* Position below the dropdown button */
\t\t\t/* Align with the left edge of the dropdown button */
\t\t}

</style><script>function updateCurrentDateTime() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t const slider = document.getElementById(\"slider\");
    const sliderValue = document.getElementById(\"sliderValue\");

    // Update the value display when the slider value changes.
    slider.addEventListener(\"input\", function() {
\t\tif( slider.value == -1)
\t\t{
 sliderValue.textContent = \"Tout\"
\t\t} else {
        sliderValue.textContent = slider.value;
\t}
    });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>{% endblock %}
", "gestionnaire/evaa.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\gestionnaire\\evaa.html.twig");
    }
}
