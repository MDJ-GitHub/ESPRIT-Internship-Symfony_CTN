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

/* commandant/index.html.twig */
class __TwigTemplate_cac848b4f42780596357d0fd0cbbadaa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commandant/index.html.twig", 1);
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
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["loginnavire"]) || array_key_exists("loginnavire", $context) ? $context["loginnavire"] : (function () { throw new RuntimeError('Variable "loginnavire" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["loginnom"]) || array_key_exists("loginnom", $context) ? $context["loginnom"] : (function () { throw new RuntimeError('Variable "loginnom" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t</form>
\t</nav>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t\t<div class=\"position-sticky\">
\t\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t<br><br>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t\t<form action=";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_commandant_f");
        echo ">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"nom\">Navigant</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"nom\" name=\"navigant\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Prénom et Nom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"email\" name=\"email\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"example@example.exa\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"sexe\" id=\"sexe\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\" ";
        // line 55
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 55, $this->source); })()) == "M")) {
            echo " selected ";
        }
        echo ">Masculine</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\" ";
        // line 56
        if (((isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 56, $this->source); })()) == "F")) {
            echo " selected ";
        }
        echo ">Féminine</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" ";
        // line 65
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 65, $this->source); })()) == "Standard")) {
            echo " selected ";
        }
        echo ">Standard</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" ";
        // line 66
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 66, $this->source); })()) == "Gestionnaire")) {
            echo " selected ";
        }
        echo ">Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" ";
        // line 67
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 67, $this->source); })()) == "Commandant")) {
            echo " selected ";
        }
        echo ">Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" ";
        // line 68
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 68, $this->source); })()) == "G. Utilisateur")) {
            echo " selected ";
        }
        echo ">G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" ";
        // line 69
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 69, $this->source); })()) == "Capitaine")) {
            echo " selected ";
        }
        echo ">Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" ";
        // line 70
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 70, $this->source); })()) == "Garçon")) {
            echo " selected ";
        }
        echo ">Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" ";
        // line 71
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 71, $this->source); })()) == "Mecanician")) {
            echo " selected ";
        }
        echo ">Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" ";
        // line 72
        if (((isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 72, $this->source); })()) == "Medicain")) {
            echo " selected ";
        }
        echo ">Medicain</option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"d\">Disponible</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"d\" id=\"d\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Disponible\" ";
        // line 85
        if (((isset($context["fild"]) || array_key_exists("fild", $context) ? $context["fild"] : (function () { throw new RuntimeError('Variable "fild" does not exist.', 85, $this->source); })()) == "Disponible")) {
            echo " selected ";
        }
        echo ">Disponible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indisponible\" ";
        // line 86
        if (((isset($context["fild"]) || array_key_exists("fild", $context) ? $context["fild"] : (function () { throw new RuntimeError('Variable "fild" does not exist.', 86, $this->source); })()) == "Indisponible")) {
            echo " selected ";
        }
        echo ">Indisponible</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"tel\">Tél</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"tel\" name=\"tel\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["filt"]) || array_key_exists("filt", $context) ? $context["filt"] : (function () { throw new RuntimeError('Variable "filt" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"01234567\">
\t\t\t\t\t\t\t\t\t\t\t</div>
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


\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mpdf", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 124, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 124, $this->source); })()), "t" => ((array_key_exists("filt", $context)) ? (_twig_default_filter((isset($context["filt"]) || array_key_exists("filt", $context) ? $context["filt"] : (function () { throw new RuntimeError('Variable "filt" does not exist.', 124, $this->source); })()), " ")) : (" ")), "d" => (isset($context["fild"]) || array_key_exists("fild", $context) ? $context["fild"] : (function () { throw new RuntimeError('Variable "fild" does not exist.', 124, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 124, $this->source); })()), "e" => ((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 124, $this->source); })()), " ")) : (" "))]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mcsv", ["n" => ((array_key_exists("filn", $context)) ? (_twig_default_filter((isset($context["filn"]) || array_key_exists("filn", $context) ? $context["filn"] : (function () { throw new RuntimeError('Variable "filn" does not exist.', 127, $this->source); })()), " ")) : (" ")), "f" => (isset($context["filf"]) || array_key_exists("filf", $context) ? $context["filf"] : (function () { throw new RuntimeError('Variable "filf" does not exist.', 127, $this->source); })()), "t" => ((array_key_exists("filt", $context)) ? (_twig_default_filter((isset($context["filt"]) || array_key_exists("filt", $context) ? $context["filt"] : (function () { throw new RuntimeError('Variable "filt" does not exist.', 127, $this->source); })()), " ")) : (" ")), "d" => (isset($context["fild"]) || array_key_exists("fild", $context) ? $context["fild"] : (function () { throw new RuntimeError('Variable "fild" does not exist.', 127, $this->source); })()), "s" => (isset($context["fils"]) || array_key_exists("fils", $context) ? $context["fils"] : (function () { throw new RuntimeError('Variable "fils" does not exist.', 127, $this->source); })()), "e" => ((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 127, $this->source); })()), " ")) : (" "))]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant");
        echo "\" class=\"nav-link bg-danger text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_mov");
        echo "\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<div class=\"table-container\">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Mat</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Date Nais.</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Lieu Nais.</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Sexe</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Tel.</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Fonction</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Navire</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Ac</th>
\t\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Disponible</th>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 181
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 182), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t<td>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPrenom", [], "method", false, false, false, 183), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getNom", [], "method", false, false, false, 184), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 185
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDaten", [], "method", false, false, false, 185), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getLieun", [], "method", false, false, false, 186), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSexe", [], "method", false, false, false, 187), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getTel", [], "method", false, false, false, 188), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getEmail", [], "method", false, false, false, 189), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getFonction", [], "method", false, false, false, 190), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getNavire", [], "method", false, false, false, 191), "html", null, true);
            echo "</td>


\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandant_add", ["mat" => twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 198)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛵ Ajouter Mouvement
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t";
            // line 204
            $context["targetDate"] = twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatecon", [], "method", false, false, false, 204), (("+" . twig_get_attribute($this->env, $this->source, $context["i"], "jourc", [], "any", false, false, false, 204)) . " days"));
            // line 205
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 206
            if ((twig_date_format_filter($this->env, (isset($context["targetDate"]) || array_key_exists("targetDate", $context) ? $context["targetDate"] : (function () { throw new RuntimeError('Variable "targetDate" does not exist.', 206, $this->source); })()), "Y-m-d") > twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["targetDate"]) || array_key_exists("targetDate", $context) ? $context["targetDate"] : (function () { throw new RuntimeError('Variable "targetDate" does not exist.', 207, $this->source); })()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["targetDate"]) || array_key_exists("targetDate", $context) ? $context["targetDate"] : (function () { throw new RuntimeError('Variable "targetDate" does not exist.', 209, $this->source); })()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 211
            echo "

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "

\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
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
        // line 240
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

\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\tz-index: 1;
\t\t}

\t\t.dropdown:hover .dropdown-content {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: row; /* Arrange them horizontally */
\t\t\ttop: -10px; /* Position below the dropdown button */
\t\t\tleft: -100px; /* Align with the left edge of the dropdown button */
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
        return "commandant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 240,  435 => 215,  426 => 211,  420 => 209,  414 => 207,  412 => 206,  409 => 205,  407 => 204,  398 => 198,  388 => 191,  384 => 190,  380 => 189,  376 => 188,  372 => 187,  368 => 186,  364 => 185,  360 => 184,  356 => 183,  352 => 182,  349 => 181,  345 => 180,  305 => 143,  295 => 136,  283 => 127,  277 => 124,  243 => 93,  231 => 86,  225 => 85,  207 => 72,  201 => 71,  195 => 70,  189 => 69,  183 => 68,  177 => 67,  171 => 66,  165 => 65,  151 => 56,  145 => 55,  134 => 47,  127 => 43,  121 => 40,  101 => 23,  95 => 20,  88 => 16,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
\t\t\t<button class=\"btn btn-light my-2 my-sm-0\"  type=\"button\">⚓
\t\t\t\t{{ loginnavire }}</button>
\t\t\t-
\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light my-2 my-sm-0\" type=\"button\">🧑‍💼
\t\t\t\t{{ loginnom }}</button>
\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛔ Déconnecter
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t</form>
\t</nav>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark bg-opacity-75 sidebar\">
\t\t\t\t<div class=\"position-sticky\">
\t\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t\t\t<br><br>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<div class=\"text-white container mt-5 bg-secondary text-center border border-5 border-secondary rounded\">

\t\t\t\t\t\t\t\t<form action={{url('app_commandant_f')}}>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"nom\">Navigant</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"nom\" name=\"navigant\" value=\"{{ filn }}\" placeholder=\"Prénom et Nom\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"email\" name=\"email\" value=\"{{ file }}\" placeholder=\"example@example.exa\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"sexe\">Sexe</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"sexe\" id=\"sexe\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"M\" {% if fils == 'M' %} selected {% endif %}>Masculine</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\" {% if fils == 'F' %} selected {% endif %}>Féminine</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"fonction\">Fonction</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" id=\"fonction\" name=\"fonction\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Standard\" {% if filf == 'Standard' %} selected {% endif %}>Standard</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Gestionnaire\" {% if filf == 'Gestionnaire' %} selected {% endif %}>Gestionnaire</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Commandant\" {% if filf == 'Commandant' %} selected {% endif %}>Commandant</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"G. Utilisateur\" {% if filf == 'G. Utilisateur' %} selected {% endif %}>G. Utilisateur</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Capitaine\" {% if filf == 'Capitaine' %} selected {% endif %}>Capitaine</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Garçon\" {% if filf == 'Garçon' %} selected {% endif %}>Garçon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Mecanician\" {% if filf == 'Mecanician' %} selected {% endif %}>Mecanician</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Medicain\" {% if filf == 'Medicain' %} selected {% endif %}>Medicain</option>

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"d\">Disponible</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control form-control-sm\" name=\"d\" id=\"d\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Disponible\" {% if fild == 'Disponible' %} selected {% endif %}>Disponible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indisponible\" {% if fild == 'Indisponible' %} selected {% endif %}>Indisponible</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"tel\">Tél</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" id=\"tel\" name=\"tel\" value=\"{{ filt }}\" placeholder=\"01234567\">
\t\t\t\t\t\t\t\t\t\t\t</div>
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


\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<div class=\"text-white container mt-3 bg-secondary text-center border border-5 border-secondary rounded\">
\t\t\t\t\t\t\t\tGénérer
\t\t\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mpdf', { 'n': filn | default(' '), 'f': filf, 't': filt | default(' ') , 'd': fild, 's': fils, 'e': file | default(' ') }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">PDF</a>


\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mcsv', { 'n': filn | default(' '), 'f': filf, 't': filt | default(' ') , 'd': fild, 's': fils, 'e': file | default(' ') }) }}\" class=\"btn btn-danger btn-sm\" type=\"button\">CSV</a>


\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<hr style=\"color:white;\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant') }}\" class=\"nav-link bg-danger text-white\" aria-current=\"page\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#home\"></use>
\t\t\t\t\t\t\t\t</svg>🧑‍🧒‍🧒 Personnels
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_mov') }}\" class=\"nav-link text-white\">
\t\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"0\" height=\"16\">
\t\t\t\t\t\t\t\t\t<use xlink:href=\"#speedometer2\"></use>
\t\t\t\t\t\t\t\t</svg>⛵ Mouvements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<div class=\"table-container\">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">Mat</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Date Nais.</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Lieu Nais.</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Sexe</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Tel.</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Fonction</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Navire</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Ac</th>
\t\t\t\t\t\t\t\t<th class=\"bg-secondary\" scope=\"col\">Disponible</th>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t{% for i in list %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope=\"row\">{{ i.getId() }}</th>
\t\t\t\t\t\t\t\t\t<td>{{ i.getPrenom() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getNom() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getDaten()|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getLieun() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getSexe() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getTel() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getEmail() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getFonction() }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ i.getNavire() }}</td>


\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t🔴
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commandant_add',{'mat':i.getId()}) }}\" class=\"btn btn-outline-danger my-2 my-sm-0 btn-sm\" type=\"button\">⛵ Ajouter Mouvement
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t{% set targetDate = i.getDatecon()|date_modify('+' ~ i.jourc ~ ' days') %}

\t\t\t\t\t\t\t\t\t{% if targetDate|date('Y-m-d') > \"now\"|date('Y-m-d') %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-danger text-white\">{{ targetDate|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<td class=\"bg-success text-white\">{{ targetDate|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
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

\t\t\tbox-shadow: 0 8px 16px 0 rgba(10, 0, 0, 0.2);
\t\t\tz-index: 1;
\t\t}

\t\t.dropdown:hover .dropdown-content {
\t\t\tdisplay: flex; /* Use flexbox to make them appear in the same row */
\t\t\tflex-direction: row; /* Arrange them horizontally */
\t\t\ttop: -10px; /* Position below the dropdown button */
\t\t\tleft: -100px; /* Align with the left edge of the dropdown button */
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
", "commandant/index.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\commandant\\index.html.twig");
    }
}
