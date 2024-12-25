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

/* nav.html.twig */
class __TwigTemplate_45ecf3bfe7de9f24255ffce079a87fbb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nav.html.twig", 1);
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
        echo "  Main
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
        echo "  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark justify-content-between\">
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px;\" />

    <a class=\"navbar-brand\" href=\"#\">Gestion des Navigations</a>

    <form class=\"form-inline\">
      <button class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\">Ajouter</button>
      -
      <button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
      -
    </form>
  </nav>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark sidebar\">
        <div class=\"position-sticky\">
          <ul class=\"nav nav-pills flex-column mb-auto\">
            <br />
            <li class=\"nav-item\">
               <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\" class=\"nav-link text-white\" aria-current=\"page\">
                <svg class=\"bi me-2\" width=\"0\" height=\"16\">
                  <use xlink:href=\"#home\"></use>
                </svg>🧑‍🧒‍🧒 Personnels
              </a>
            </li>
            <li>
                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_nav");
        echo "\" class=\"nav-link bg-danger text-white\">
                <svg class=\"bi me-2\" width=\"0\" height=\"16\">
                  <use xlink:href=\"#speedometer2\"></use>
                </svg>⛵ Navigations
              </a>
            </li>
          </ul>
          
        </div>
      </nav>

      <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
        <table class=\"table table-striped\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">Mat</th>
              <th scope=\"col\">Navigant</th>
              <th scope=\"col\">Date Emb.</th>
              <th scope=\"col\">Date Deb.</th>
              <th scope=\"col\">Port Dep.</th>
              <th scope=\"col\">Port Des.</th>
              <th scope=\"col\">Fn</th>
              <th scope=\"col\">Situation</th>
              <th scope=\"col\">Ac</th>
              <th scope=\"col\"></th>
              <th class=\"bg-secondary\" scope=\"col\">Etat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope=\"row\">1</th>
              <td>Mohamed Dhia Jebali</td>
              <td>2023-08-12 08:30</td>
              <td>2023-08-012 13:00</td>
              <td>Tunis</td>
              <td>Sfax</td>
              <td>Capitane</td>
              <td>Titulaire</td>
              <td>✏️</td>
              <td>🗑️</td>
              <td class=\"bg-primary text-white\">Embarqué</td>
            </tr>
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "              <tr>
                <th scope=\"row\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getId", [], "method", false, false, false, 79), "html", null, true);
            echo "</th>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 80), "getPrenom", [], "method", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "matriculep", [], "any", false, false, false, 80), "getNom", [], "method", false, false, false, 80), "html", null, true);
            echo "</td>

                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateemb", [], "method", false, false, false, 82), "Y-m-d h:m"), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDatedeb", [], "method", false, false, false, 83), "Y-m-d h:m"), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdep", [], "method", false, false, false, 84), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getPortdes", [], "method", false, false, false, 85), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getFonction", [], "method", false, false, false, 86), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getSituation", [], "method", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>✏️</td>
                <td>🗑️</td>

                ";
            // line 91
            $context["currentDateTime"] = twig_date_format_filter($this->env, "now", "Y-m-d H:i:s");
            // line 92
            echo "
                ";
            // line 93
            if ((((isset($context["currentDateTime"]) || array_key_exists("currentDateTime", $context) ? $context["currentDateTime"] : (function () { throw new RuntimeError('Variable "currentDateTime" does not exist.', 93, $this->source); })()) >= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "dateemb", [], "any", false, false, false, 93), "format", ["Y-m-d H:i:s"], "method", false, false, false, 93)) && ((isset($context["currentDateTime"]) || array_key_exists("currentDateTime", $context) ? $context["currentDateTime"] : (function () { throw new RuntimeError('Variable "currentDateTime" does not exist.', 93, $this->source); })()) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "datedeb", [], "any", false, false, false, 93), "format", ["Y-m-d H:i:s"], "method", false, false, false, 93)))) {
                // line 94
                echo "                  <td class=\"bg-primary text-white\">Embarqué</td>
                ";
            } elseif ((            // line 95
(isset($context["currentDateTime"]) || array_key_exists("currentDateTime", $context) ? $context["currentDateTime"] : (function () { throw new RuntimeError('Variable "currentDateTime" does not exist.', 95, $this->source); })()) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "datedeb", [], "any", false, false, false, 95), "format", ["Y-m-d H:i:s"], "method", false, false, false, 95))) {
                // line 96
                echo "                  <td class=\"bg-succes text-white\">Completé</td>
                         ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
$context["i"], "getInter", [], "any", false, false, false, 97) != "")) {
                // line 98
                echo "                  <td class=\"bg-danger text-white\">Annulé (i.getInter)</td>
                ";
            } else {
                // line 100
                echo "                  <td class=\"bg-warning\">Programmé</td>
                ";
            }
            // line 102
            echo "              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
          
          </tbody>
        </table>
      </main>
    </div>
  </div>
  <style>
    #sidebar {
      min-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
    }
    body {
      background-image: url('img/background.png'); /* Replace with the actual path to your hiba image */
      background-size: cover; /* This will make the image cover the entire background */
      background-repeat: no-repeat; /* Prevent the image from repeating */
    }
    table tr td,
    table tr th {
      background-color: rgba(255, 255, 255, 0.6) !important;
    }
  </style>

  <script>
    function updateCurrentDateTime() {
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
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 104,  225 => 102,  221 => 100,  217 => 98,  215 => 97,  212 => 96,  210 => 95,  207 => 94,  205 => 93,  202 => 92,  200 => 91,  193 => 87,  189 => 86,  185 => 85,  181 => 84,  177 => 83,  173 => 82,  166 => 80,  162 => 79,  159 => 78,  155 => 77,  110 => 35,  100 => 28,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Main
{% endblock %}

{% block body %}
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark justify-content-between\">
    <img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\" style=\"max-width: 200px;\" />

    <a class=\"navbar-brand\" href=\"#\">Gestion des Navigations</a>

    <form class=\"form-inline\">
      <button class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\">Ajouter</button>
      -
      <button class=\"btn btn-light my-2 my-sm-0\" id=\"currentDateTime\" type=\"button\"></button>
      -
    </form>
  </nav>

  <div class=\"container-fluid\">
    <div class=\"row\">
      <nav id=\"sidebar\" class=\"col-md-3 col-lg-2 d-md-block bg-dark sidebar\">
        <div class=\"position-sticky\">
          <ul class=\"nav nav-pills flex-column mb-auto\">
            <br />
            <li class=\"nav-item\">
               <a href=\"{{ path('app_main') }}\" class=\"nav-link text-white\" aria-current=\"page\">
                <svg class=\"bi me-2\" width=\"0\" height=\"16\">
                  <use xlink:href=\"#home\"></use>
                </svg>🧑‍🧒‍🧒 Personnels
              </a>
            </li>
            <li>
                <a href=\"{{ path('app_list_nav') }}\" class=\"nav-link bg-danger text-white\">
                <svg class=\"bi me-2\" width=\"0\" height=\"16\">
                  <use xlink:href=\"#speedometer2\"></use>
                </svg>⛵ Navigations
              </a>
            </li>
          </ul>
          
        </div>
      </nav>

      <main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
        <table class=\"table table-striped\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">Mat</th>
              <th scope=\"col\">Navigant</th>
              <th scope=\"col\">Date Emb.</th>
              <th scope=\"col\">Date Deb.</th>
              <th scope=\"col\">Port Dep.</th>
              <th scope=\"col\">Port Des.</th>
              <th scope=\"col\">Fn</th>
              <th scope=\"col\">Situation</th>
              <th scope=\"col\">Ac</th>
              <th scope=\"col\"></th>
              <th class=\"bg-secondary\" scope=\"col\">Etat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope=\"row\">1</th>
              <td>Mohamed Dhia Jebali</td>
              <td>2023-08-12 08:30</td>
              <td>2023-08-012 13:00</td>
              <td>Tunis</td>
              <td>Sfax</td>
              <td>Capitane</td>
              <td>Titulaire</td>
              <td>✏️</td>
              <td>🗑️</td>
              <td class=\"bg-primary text-white\">Embarqué</td>
            </tr>
            {% for i in list %}
              <tr>
                <th scope=\"row\">{{ i.getId() }}</th>
                <td>{{ i.matriculep.getPrenom() }} {{ i.matriculep.getNom() }}</td>

                <td>{{ i.getDateemb()|date('Y-m-d h:m') }}</td>
                <td>{{ i.getDatedeb()|date('Y-m-d h:m') }}</td>
                <td>{{ i.getPortdep() }}</td>
                <td>{{ i.getPortdes() }}</td>
                <td>{{ i.getFonction() }}</td>
                <td>{{ i.getSituation() }}</td>
                <td>✏️</td>
                <td>🗑️</td>

                {% set currentDateTime = 'now'|date('Y-m-d H:i:s') %}

                {% if currentDateTime >= i.dateemb.format('Y-m-d H:i:s') and currentDateTime <= i.datedeb.format('Y-m-d H:i:s') %}
                  <td class=\"bg-primary text-white\">Embarqué</td>
                {% elseif currentDateTime > i.datedeb.format('Y-m-d H:i:s') %}
                  <td class=\"bg-succes text-white\">Completé</td>
                         {% elseif  i.getInter != '' %}
                  <td class=\"bg-danger text-white\">Annulé (i.getInter)</td>
                {% else %}
                  <td class=\"bg-warning\">Programmé</td>
                {% endif %}
              </tr>
            {% endfor %}

          
          </tbody>
        </table>
      </main>
    </div>
  </div>
  <style>
    #sidebar {
      min-height: 100vh; /* Set the sidebar's minimum height to 100% of the viewport height */
    }
    body {
      background-image: url('img/background.png'); /* Replace with the actual path to your hiba image */
      background-size: cover; /* This will make the image cover the entire background */
      background-repeat: no-repeat; /* Prevent the image from repeating */
    }
    table tr td,
    table tr th {
      background-color: rgba(255, 255, 255, 0.6) !important;
    }
  </style>

  <script>
    function updateCurrentDateTime() {
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
  </script>
{% endblock %}
", "nav.html.twig", "C:\\Home\\Documents\\University\\ETIC3A S2\\Stage\\Symfony\\ctn\\templates\\nav.html.twig");
    }
}
