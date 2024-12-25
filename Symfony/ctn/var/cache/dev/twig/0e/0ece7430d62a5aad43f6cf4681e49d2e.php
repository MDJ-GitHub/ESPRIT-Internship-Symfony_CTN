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

/* gestionnaire/mpdf.html.twig */
class __TwigTemplate_fb9f9294fc23e93abc9a406cdb92cf92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionnaire/mpdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>CTN - Gestionnaire</title>
\t</head>
\t<body>
\t\t<h1>List des Personnel</h1>
\t\t<table border=\"1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Mat</th>
\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Date Nais.</th>
\t\t\t\t\t<th>Lieu Nais.</th>
\t\t\t\t\t<th>Sexe</th>
\t\t\t\t\t<th>Tel.</th>
\t\t\t\t\t<th style=\"width: 10px;\">Email</th>
\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t<th>Navire</th>
\t\t\t\t\t<th>Disponible</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPrenom", [], "method", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getNom", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDaten", [], "method", false, false, false, 32), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getLieun", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSexe", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTel", [], "method", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style=\"width: 1px;\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getFonction", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getNavire", [], "method", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 40
            if ((null === twig_get_attribute($this->env, $this->source, $context["item"], "getDatecon", [], "method", false, false, false, 40))) {
                // line 41
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDatecon", [], "method", false, false, false, 43), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 45
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestionnaire/mpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  128 => 45,  122 => 43,  118 => 41,  116 => 40,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  72 => 28,  68 => 27,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>CTN - Gestionnaire</title>
\t</head>
\t<body>
\t\t<h1>List des Personnel</h1>
\t\t<table border=\"1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Mat</th>
\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Date Nais.</th>
\t\t\t\t\t<th>Lieu Nais.</th>
\t\t\t\t\t<th>Sexe</th>
\t\t\t\t\t<th>Tel.</th>
\t\t\t\t\t<th style=\"width: 10px;\">Email</th>
\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t<th>Navire</th>
\t\t\t\t\t<th>Disponible</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for item in data %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ item.getId() }}</td>
\t\t\t\t\t\t<td>{{ item.getPrenom() }}</td>
\t\t\t\t\t\t<td>{{ item.getNom() }}</td>
\t\t\t\t\t\t<td>{{ item.getDaten()|date('Y-m-d') }}</td>
\t\t\t\t\t\t<td>{{ item.getLieun() }}</td>
\t\t\t\t\t\t<td>{{ item.getSexe() }}</td>
\t\t\t\t\t\t<td>{{ item.getTel() }}</td>
\t\t\t\t\t\t<td style=\"width: 1px;\">{{ item.getEmail() }}</td>
\t\t\t\t\t\t<td>{{ item.getFonction() }}</td>
\t\t\t\t\t\t<td>{{ item.getNavire() }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if item.getDatecon() is null %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ item.getDatecon()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
", "gestionnaire/mpdf.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\gestionnaire\\mpdf.html.twig");
    }
}
