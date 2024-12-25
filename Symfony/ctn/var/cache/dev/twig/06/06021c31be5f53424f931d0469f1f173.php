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

/* gestionnaire/epdf.html.twig */
class __TwigTemplate_f558a7a3a52456dfd1e82a9d43b6f48b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionnaire/epdf.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>CTN - Gestionnaire</title>
\t</head>
\t<body>
\t\t<h1>List des Evaluations</h1>
\t\t<table border=\"1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t    <th>Mat</th>
\t\t\t\t\t<th>Mat Mv</th>
\t\t\t\t\t<th>Navigant</th>
\t\t\t\t\t<th>Date Emb. Atte/Conf</th>
\t\t\t\t\t<th>Date Deb. Atte/Conf</th>
\t\t\t\t\t<th>Port Dep.</th>
\t\t\t\t\t<th>Port Des.</th>
\t\t\t\t\t<th>Situation</th>
\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t<th>Note</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getEvaluation", [], "method", false, false, false, 28), "getId", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getMatriculep", [], "method", false, false, false, 30), "getPrenom", [], "method", false, false, false, 30), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getMatriculep", [], "method", false, false, false, 31), "getNom", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDateemb", [], "method", false, false, false, 32), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t";
            // line 35
            if ((null === twig_get_attribute($this->env, $this->source, $context["item"], "getDateembc", [], "method", false, false, false, 35))) {
                // line 36
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDateembc", [], "method", false, false, false, 38), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 43
            if ((null === twig_get_attribute($this->env, $this->source, $context["item"], "getDatedeb", [], "method", false, false, false, 43))) {
                // line 44
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDatedeb", [], "method", false, false, false, 46), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t";
            // line 50
            if ((null === twig_get_attribute($this->env, $this->source, $context["item"], "getDatedebc", [], "method", false, false, false, 50))) {
                // line 51
                echo "\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDatedebc", [], "method", false, false, false, 53), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "portdep", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "portdes", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "situation", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getMatriculep", [], "method", false, false, false, 59), "getFonction", [], "method", false, false, false, 59), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getEvaluation", [], "method", false, false, false, 60), "getNote", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"10\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getEvaluation", [], "method", false, false, false, 65), "getCommentaire", [], "method", false, false, false, 65), "html", null, true);
            echo "</td>

\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gestionnaire/epdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 70,  168 => 65,  160 => 60,  156 => 59,  152 => 58,  148 => 57,  144 => 56,  141 => 55,  135 => 53,  131 => 51,  129 => 50,  125 => 48,  119 => 46,  115 => 44,  113 => 43,  108 => 40,  102 => 38,  98 => 36,  96 => 35,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  71 => 27,  67 => 26,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>CTN - Gestionnaire</title>
\t</head>
\t<body>
\t\t<h1>List des Evaluations</h1>
\t\t<table border=\"1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t    <th>Mat</th>
\t\t\t\t\t<th>Mat Mv</th>
\t\t\t\t\t<th>Navigant</th>
\t\t\t\t\t<th>Date Emb. Atte/Conf</th>
\t\t\t\t\t<th>Date Deb. Atte/Conf</th>
\t\t\t\t\t<th>Port Dep.</th>
\t\t\t\t\t<th>Port Des.</th>
\t\t\t\t\t<th>Situation</th>
\t\t\t\t\t<th>Fonction</th>
\t\t\t\t\t<th>Note</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for item in data %}
\t\t\t\t\t<tr>
\t\t\t\t\t<td>{{ item.getEvaluation().getId() }}</td>
\t\t\t\t\t\t<td>{{ item.getId() }}</td>
\t\t\t\t\t\t<td>{{ item.getMatriculep().getPrenom() }}
\t\t\t\t\t\t\t{{ item.getMatriculep().getNom() }}</td>
\t\t\t\t\t\t<td>{{ item.getDateemb()|date('Y-m-d') }}
\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t{% if item.getDateembc() is null %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ item.getDateembc()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if item.getDatedeb() is null %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ item.getDatedeb()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<hr style=\"margin: 5px 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        padding: 0;    \">
\t\t\t\t\t\t\t{% if item.getDatedebc() is null %}
\t\t\t\t\t\t\t\t---
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ item.getDatedebc()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ item.portdep }}</td>
\t\t\t\t\t\t<td>{{ item.portdes }}</td>
\t\t\t\t\t\t<td>{{ item.situation }}</td>
\t\t\t\t\t\t<td>{{ item.getMatriculep().getFonction() }}</td>
\t\t\t\t\t\t<td>{{ item.getEvaluation().getNote() }}</td>
\t\t\t\t\t</tr>

\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"10\">{{item.getEvaluation().getCommentaire()}}</td>

\t\t\t\t</tr>

\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</body>
</html>
", "gestionnaire/epdf.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\gestionnaire\\epdf.html.twig");
    }
}
