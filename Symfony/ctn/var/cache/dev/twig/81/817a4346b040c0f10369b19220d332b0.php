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

/* navigant/evaa.html.twig */
class __TwigTemplate_b14304d51d6b3a723e827d77876c09c0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigant/evaa.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "navigant/evaa.html.twig", 1);
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
\t<a class=\"navbar-brand\" href=\"#\">Consultation de Profile</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">♟️
\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["loginfn"]) || array_key_exists("loginfn", $context) ? $context["loginfn"] : (function () { throw new RuntimeError('Variable "loginfn" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</button>
\t\t-
\t<div class=\"dropdownx\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-contentx\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 25
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
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action=";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_navigant_evaaf");
        echo ">

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"dropdown1\">Port Dep.</label>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"portdep\" id=\"dropdown1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 50
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 50, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 51
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 51, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 52
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 52, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 53
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 53, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 54
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 54, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 55
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 55, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 56
        if (((isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 56, $this->source); })()) == "Zarzis")) {
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
        // line 65
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 65, $this->source); })()) == "Bizerte")) {
            echo " selected ";
        }
        echo ">Bizerte</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 66
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 66, $this->source); })()) == "Rades")) {
            echo " selected ";
        }
        echo ">Rades</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 67
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 67, $this->source); })()) == "Sousse")) {
            echo " selected ";
        }
        echo ">Sousse</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 68
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 68, $this->source); })()) == "Sfax")) {
            echo " selected ";
        }
        echo ">Sfax</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 69
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 69, $this->source); })()) == "Gabes")) {
            echo " selected ";
        }
        echo ">Gabes</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 70
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 70, $this->source); })()) == "Goulette")) {
            echo " selected ";
        }
        echo ">Goulette</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option ";
        // line 71
        if (((isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 71, $this->source); })()) == "Zarzis")) {
            echo " selected ";
        }
        echo ">Zarzis</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 81
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 81, $this->source); })()) == "Titulaire")) {
            echo " selected ";
        }
        echo ">Titulaire</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 82
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 82, $this->source); })()) == "Contractuel")) {
            echo " selected ";
        }
        echo ">Contractuel</option>
\t\t\t\t\t\t\t\t\t\t<option ";
        // line 83
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 83, $this->source); })()) == "Occasionnel")) {
            echo " selected ";
        }
        echo ">Occasionnel</option>

\t\t\t\t\t\t\t\t\t</select>
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

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_epdf", ["pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 121, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 121, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 121, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 121, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_ecsv", ["pdep" => (isset($context["filpdep"]) || array_key_exists("filpdep", $context) ? $context["filpdep"] : (function () { throw new RuntimeError('Variable "filpdep" does not exist.', 124, $this->source); })()), "pdes" => (isset($context["filpdes"]) || array_key_exists("filpdes", $context) ? $context["filpdes"] : (function () { throw new RuntimeError('Variable "filpdes" does not exist.', 124, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 124, $this->source); })()), "e" => (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 124, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_navigant_evaa");
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
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Note</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 171
            echo "\t\t\t\t\t\t\t<form action=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_gestionnaire_deb", ["mat" => twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 171)]), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 173), "html", null, true);
            echo "</th>

\t\t\t\t\t\t\t\t\t<td>";
            // line 175
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateemb", [], "method", false, false, false, 175), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t\t\t\t";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 178) == "Embarqué")) {
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 179), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 181
$context["i"], "getEtat", [], "method", false, false, false, 181) == "Evalué")) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 182), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 184
$context["i"], "getEtat", [], "method", false, false, false, 184) == "Debarqué")) {
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 185), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 187
$context["i"], "getEtat", [], "method", false, false, false, 187) == "Programmé")) {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 188), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\"></td>


\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 191
$context["i"], "getEtat", [], "method", false, false, false, 191))) {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 192), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\"></td>

\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 194
$context["i"], "getEtat", [], "method", false, false, false, 194))) {
                // line 195
                echo "\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateembc", [], "method", false, false, false, 195), "Y-m-d"), "html", null, true);
                echo "\" name=\"dateemb\" id=\"dateInput\"></td>

\t\t\t\t\t\t\t\t";
            } else {
                // line 198
                echo "\t\t\t\t\t\t\t";
            }
            // line 199
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 201
            if ((null === twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 201))) {
                // line 202
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } else {
                // line 204
                echo "
\t\t\t\t\t\t\t\t";
                // line 205
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 205), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t";
            // line 209
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "getEtat", [], "method", false, false, false, 209) == "Embarqué")) {
                // line 210
                echo "
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" value=\"";
                // line 211
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 211), "Y-m-d"), "html", null, true);
                echo "\" name=\"datedeb\" id=\"dateInput\">


\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 214
$context["i"], "getEtat", [], "method", false, false, false, 214) == "Evalué")) {
                // line 215
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 215), "Y-m-d"), "html", null, true);
                echo "

\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 217
$context["i"], "getEtat", [], "method", false, false, false, 217) == "Debarqué")) {
                // line 218
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedebc", [], "method", false, false, false, 218), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 219
$context["i"], "getEtat", [], "method", false, false, false, 219) == "Programmé")) {
                // line 220
                echo "\t\t\t\t\t\t\t\t---

\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Annulé", twig_get_attribute($this->env, $this->source,             // line 222
$context["i"], "getEtat", [], "method", false, false, false, 222))) {
                // line 223
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("Absant", twig_get_attribute($this->env, $this->source,             // line 224
$context["i"], "getEtat", [], "method", false, false, false, 224))) {
                // line 225
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t\t";
            } else {
                // line 227
                echo "
\t\t\t\t\t\t\t";
            }
            // line 229
            echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdep", [], "method", false, false, false, 231), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdes", [], "method", false, false, false, 232), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 233), "getFonction", [], "method", false, false, false, 233), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 234), "getNavire", [], "method", false, false, false, 234), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSituation", [], "method", false, false, false, 235), "html", null, true);
            echo "</td>


\t\t\t\t\t\t";
            // line 238
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 238), "getNote", [], "method", false, false, false, 238) == 20)) {
                // line 239
                echo "\t\t\t\t\t\t\t<td class=\"bg-info text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 239), "getNote", [], "method", false, false, false, 239), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 241
$context["i"], "getEvaluation", [], "method", false, false, false, 241), "getNote", [], "method", false, false, false, 241) < 20) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 241), "getNote", [], "method", false, false, false, 241) >= 15))) {
                // line 242
                echo "\t\t\t\t\t\t\t<td class=\"bg-primary text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 242), "getNote", [], "method", false, false, false, 242), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 244
$context["i"], "getEvaluation", [], "method", false, false, false, 244), "getNote", [], "method", false, false, false, 244) <= 14) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 244), "getNote", [], "method", false, false, false, 244) >= 10))) {
                // line 245
                echo "\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 245), "getNote", [], "method", false, false, false, 245), "html", null, true);
                echo "/ 20</td>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 246
$context["i"], "getEvaluation", [], "method", false, false, false, 246), "getNote", [], "method", false, false, false, 246) <= 9) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 246), "getNote", [], "method", false, false, false, 246) >= 5))) {
                // line 247
                echo "\t\t\t\t\t\t\t<td class=\"bg-warning text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 247), "getNote", [], "method", false, false, false, 247), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 249
$context["i"], "getEvaluation", [], "method", false, false, false, 249), "getNote", [], "method", false, false, false, 249) <= 4)) {
                // line 250
                echo "\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 250), "getNote", [], "method", false, false, false, 250), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            } else {
                // line 253
                echo "\t\t\t\t\t\t\t<td class=\"bg-light text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 253), "getNote", [], "method", false, false, false, 253), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t/ 20</td>
\t\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "getEvaluation", [], "method", false, false, false, 259), "getCommentaire", [], "method", false, false, false, 259), "html", null, true);
            echo "</td>

\t\t\t\t</tr>


\t\t\t</form>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
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
        // line 283
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
\t\t\t.dropdownx:hover .dropdown-contentx {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: column; /* Arrange them horizontally */
\t\t\t/* Position below the dropdown button */
\t\t\t/* Align with the left edge of the dropdown button */
\t\t}
</style><script>function updateCurrentDateTime() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navigant/evaa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 283,  588 => 266,  575 => 259,  570 => 256,  563 => 253,  556 => 250,  554 => 249,  548 => 247,  546 => 246,  541 => 245,  539 => 244,  533 => 242,  531 => 241,  525 => 239,  523 => 238,  517 => 235,  513 => 234,  509 => 233,  505 => 232,  501 => 231,  497 => 229,  493 => 227,  489 => 225,  487 => 224,  484 => 223,  482 => 222,  478 => 220,  476 => 219,  471 => 218,  469 => 217,  463 => 215,  461 => 214,  455 => 211,  452 => 210,  450 => 209,  446 => 207,  441 => 205,  438 => 204,  434 => 202,  432 => 201,  428 => 199,  425 => 198,  418 => 195,  416 => 194,  410 => 192,  408 => 191,  401 => 188,  399 => 187,  393 => 185,  391 => 184,  385 => 182,  383 => 181,  377 => 179,  375 => 178,  369 => 175,  364 => 173,  358 => 171,  354 => 170,  321 => 140,  311 => 133,  299 => 124,  293 => 121,  250 => 83,  244 => 82,  238 => 81,  223 => 71,  217 => 70,  211 => 69,  205 => 68,  199 => 67,  193 => 66,  187 => 65,  173 => 56,  167 => 55,  161 => 54,  155 => 53,  149 => 52,  143 => 51,  137 => 50,  126 => 42,  106 => 25,  100 => 22,  93 => 18,  87 => 15,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
\t<a class=\"navbar-brand\" href=\"#\">Consultation de Profile</a>
\t<form class=\"form-inline\">
\t\t<button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">♟️
\t\t\t{{ loginfn }}</button>
\t\t-
\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">⚓
\t\t\t{{ loginnavire }}</button>
\t\t-
\t<div class=\"dropdownx\">
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
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t<form action={{url('app_navigant_evaaf')}}>

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

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"dropdown3\">Situation</label>
\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"situation\" id=\"dropdown3\">
\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t<option {% if fils == 'Titulaire' %} selected {% endif %}>Titulaire</option>
\t\t\t\t\t\t\t\t\t\t<option {% if fils == 'Contractuel' %} selected {% endif %}>Contractuel</option>
\t\t\t\t\t\t\t\t\t\t<option {% if fils == 'Occasionnel' %} selected {% endif %}>Occasionnel</option>

\t\t\t\t\t\t\t\t\t</select>
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

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_navigant_epdf', { 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t<a href=\"{{ path('app_navigant_ecsv', { 'pdep': filpdep, 'pdes': filpdes, 's': fils, 'e': file }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_navigant') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_navigant_evaa') }}\" class=\"nav-link bg-danger text-white\">
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
\t\t\t\t\t\t\t<th scope=\"col\">Date Emb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date Deb. Atte/Conf</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Dep.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Port Des.</th>
\t\t\t\t\t\t\t<th scope=\"col\">Situation</th>
\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Note</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for i in list %}
\t\t\t\t\t\t\t<form action={{url('app_gestionnaire_deb',{'mat':i.getId()} )}}>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ i.getId() }}</th>

\t\t\t\t\t\t\t\t\t<td>{{ i.getDateemb()|date('Y-m-d') }}
\t\t\t\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
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
\t\t\t\t\t\t<td>{{ i.matriculep.getNavire() }}</td>
\t\t\t\t\t\t<td>{{ i.getSituation() }}</td>


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
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">{{i.getEvaluation().getCommentaire()}}</td>

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
\t\t\t.dropdownx:hover .dropdown-contentx {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: column; /* Arrange them horizontally */
\t\t\t/* Position below the dropdown button */
\t\t\t/* Align with the left edge of the dropdown button */
\t\t}
</style><script>function updateCurrentDateTime() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar now = new Date()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar year = now.getFullYear()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar month = String(now.getMonth() + 1).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar day = String(now.getDate()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar hour = String(now.getHours()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar minute = String(now.getMinutes()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar second = String(now.getSeconds()).padStart(2, '0')
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar currentDateTime = '🕐 ' + year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('currentDateTime').textContent = currentDateTime
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// Update the current date and time immediately and then update it every minute
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupdateCurrentDateTime()
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetInterval(updateCurrentDateTime, 1000) // Update every 1 minute (60000 milliseconds)</script>{% endblock %}
", "navigant/evaa.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\navigant\\evaa.html.twig");
    }
}
