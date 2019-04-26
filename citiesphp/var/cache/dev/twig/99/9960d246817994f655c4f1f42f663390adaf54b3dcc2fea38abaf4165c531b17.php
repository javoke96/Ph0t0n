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

/* City.html.twig */
class __TwigTemplate_a2117d08a25361ff1b212ff774a9e796857759610151da9f14dfd372ec767165 extends \Twig\Template
{
    private $source;

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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "City.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<style>

  html {
    background-color: #1a1a1a;
    overflow: auto;
  }

    tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
    }
    table {
        margin-left:auto;
        margin-right:auto;
        width:40%;
        border: solid 1px #DDEEEE;
        border-collapse: collapse;
        border-spacing: 0;
        font: normal 13px Arial, sans-serif;
    }
    #table-scroll {
    max-height:270px;
    overflow:auto;
    margin-top:20px;
  }
  .status{
    max-height: 15px;

  }
  .city{
    background-image: url(\"https://www.discotech.me/wp-content/uploads/2015/07/miami-south-beach_596x334.jpg\")
    filter: blur(8px);
    -webkit-filter: blur(8px);
    z-index: -2;
    position: absolute;
  }
  .inputFields {
    margin: 15px 0;
    font-size: 16px;
    padding: 10px;
    width: 250px;
    border: 1px solid rgba(10, 180, 180, 1);
    border-top: none;
    border-left: none;
    border-right: none;
    background: rgba(20, 20, 20, .2);
    color: white;
    outline: none;
  }
  .line{
    height: 25px;
    width: 100%;
    display: block;

  }
  .deleted{
    background-color: cyan;
  }
  .added{
    background-color: green;
  }
  .api{
    width:45%;
    align:center;
    display:inline-block;

  }
  .apis{
    width: 100%;

  }
  .papi{
    width:45%;
    align:center;
    display:inline-block;

  }


</style>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
</head>
<body>
<center>
  <div style=\"background-color:grey\">
  <h1 style=\"color:white\">Share with us city that RAVE!</h2>
  </div>
  <form method = \"POST\" action=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" method=\"post\" name=\"cityadd\">
    <input type=\"text\" class=\"validate[required,custom[onlyLetter],length[0,20]] inputFields\" name=\"cname\" placeholder=\"City name\">
<br>

    <br>
    <input type=\"radio\" name=\"rstatus\" value=\"1\" checked>
    Raves Today
    <br>
    <input type=\"radio\" name=\"rstatus\" value=\"0\">
    Doesn't Rave
    <br>
    <input type=\"submit\" value=\"Submit\" name=\"add\">
  </form>
";
        // line 115
        if (((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 115, $this->source); })()) == 1)) {
            // line 116
            echo "<div class=\"added line\">Succesfuly added a city</div>
";
        } elseif ((        // line 117
(isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 117, $this->source); })()) == 2)) {
            // line 118
            echo "<div class=\"deleted line\">Succesfuly deleted a city</div>
";
        } elseif ((        // line 119
(isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 119, $this->source); })()) == 3)) {
            // line 120
            echo "<div class=\"deleted line\">Succesfuly deleted all cities</div>
";
        } else {
            // line 122
            echo "<div class=\"line\"></div>
";
        }
        // line 124
        echo "

<a target=\"_self\" href=\"/cities/deleteall\"><button>Delete All</button></a>
<br>
<br>
</center>

<div id=\"table-scroll\">
  <table class=\"table\" id=\"table-scroll\" >
      <thead>
          <tr>
              <th>ID</th>
              <th>City</th>
              <th>Previous City</th>
              <th>Status</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 144
            echo "        <tr>
          <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", []), "html", null, true);
            echo "</td>
          <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", []), "html", null, true);
            echo "</td>
          <td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "prev", []), "html", null, true);
            echo "</td>
          ";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, $context["town"], "status", []) == 1)) {
                // line 149
                echo "          <td><img class=\"status\" src=\"https://www.colorcombos.com/images/colors/92CD00.png\"></td>
          ";
            } else {
                // line 151
                echo "          <td><img class=\"status\" src=\"https://www.colorcombos.com/images/colors/AA0114.png\"></td>
          ";
            }
            // line 153
            echo "          <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecity", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [])]), "html", null, true);
            echo "\"><button>Delete</button></a></td>
          </tr>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "
        </tbody>

      </table>

      </div>
      <br>
      <br>
<center>
<div class=\"apis\">
      <div class=api>
        <a href=\"/api/cities\"><button>Get Api:</button></a>
          <br>
          <br>
        <div style=\"max-width=70%; heigth=100px; overflow=auto; margin: 0 auto;\">
        <iframe src=\"/api/cities\"></iframe>
      </div>
      </div>

      <div class=\"papi\">
        <p>Or POST it </p>
        <br>
        <p> Link: POST /api/city</p>
        <p> Name and Status needs to be set</p>
        <br><br><br>
      </div>
    </div>

</center>
<script>
var objDiv = document.getElementById(\"table-scroll\");
objDiv.scrollTop = objDiv.scrollHeight;
</script>

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "City.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 157,  227 => 153,  223 => 151,  219 => 149,  217 => 148,  213 => 147,  209 => 146,  205 => 145,  202 => 144,  198 => 143,  177 => 124,  173 => 122,  169 => 120,  167 => 119,  164 => 118,  162 => 117,  159 => 116,  157 => 115,  141 => 102,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<style>

  html {
    background-color: #1a1a1a;
    overflow: auto;
  }

    tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
    }
    table {
        margin-left:auto;
        margin-right:auto;
        width:40%;
        border: solid 1px #DDEEEE;
        border-collapse: collapse;
        border-spacing: 0;
        font: normal 13px Arial, sans-serif;
    }
    #table-scroll {
    max-height:270px;
    overflow:auto;
    margin-top:20px;
  }
  .status{
    max-height: 15px;

  }
  .city{
    background-image: url(\"https://www.discotech.me/wp-content/uploads/2015/07/miami-south-beach_596x334.jpg\")
    filter: blur(8px);
    -webkit-filter: blur(8px);
    z-index: -2;
    position: absolute;
  }
  .inputFields {
    margin: 15px 0;
    font-size: 16px;
    padding: 10px;
    width: 250px;
    border: 1px solid rgba(10, 180, 180, 1);
    border-top: none;
    border-left: none;
    border-right: none;
    background: rgba(20, 20, 20, .2);
    color: white;
    outline: none;
  }
  .line{
    height: 25px;
    width: 100%;
    display: block;

  }
  .deleted{
    background-color: cyan;
  }
  .added{
    background-color: green;
  }
  .api{
    width:45%;
    align:center;
    display:inline-block;

  }
  .apis{
    width: 100%;

  }
  .papi{
    width:45%;
    align:center;
    display:inline-block;

  }


</style>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
</head>
<body>
<center>
  <div style=\"background-color:grey\">
  <h1 style=\"color:white\">Share with us city that RAVE!</h2>
  </div>
  <form method = \"POST\" action=\"{{path('add')}}\" method=\"post\" name=\"cityadd\">
    <input type=\"text\" class=\"validate[required,custom[onlyLetter],length[0,20]] inputFields\" name=\"cname\" placeholder=\"City name\">
<br>

    <br>
    <input type=\"radio\" name=\"rstatus\" value=\"1\" checked>
    Raves Today
    <br>
    <input type=\"radio\" name=\"rstatus\" value=\"0\">
    Doesn't Rave
    <br>
    <input type=\"submit\" value=\"Submit\" name=\"add\">
  </form>
{%if flag == 1  %}
<div class=\"added line\">Succesfuly added a city</div>
{% elseif flag == 2 %}
<div class=\"deleted line\">Succesfuly deleted a city</div>
{% elseif flag == 3 %}
<div class=\"deleted line\">Succesfuly deleted all cities</div>
{% else %}
<div class=\"line\"></div>
{%endif%}


<a target=\"_self\" href=\"/cities/deleteall\"><button>Delete All</button></a>
<br>
<br>
</center>

<div id=\"table-scroll\">
  <table class=\"table\" id=\"table-scroll\" >
      <thead>
          <tr>
              <th>ID</th>
              <th>City</th>
              <th>Previous City</th>
              <th>Status</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        {%for town in cities%}
        <tr>
          <td>{{town.id}}</td>
          <td>{{town.name}}</td>
          <td>{{town.prev}}</td>
          {% if town.status == 1 %}
          <td><img class=\"status\" src=\"https://www.colorcombos.com/images/colors/92CD00.png\"></td>
          {%else %}
          <td><img class=\"status\" src=\"https://www.colorcombos.com/images/colors/AA0114.png\"></td>
          {%endif%}
          <td><a href=\"{{ path ('deletecity', {'id': town.id})  }}\"><button>Delete</button></a></td>
          </tr>

          {%endfor%}

        </tbody>

      </table>

      </div>
      <br>
      <br>
<center>
<div class=\"apis\">
      <div class=api>
        <a href=\"/api/cities\"><button>Get Api:</button></a>
          <br>
          <br>
        <div style=\"max-width=70%; heigth=100px; overflow=auto; margin: 0 auto;\">
        <iframe src=\"/api/cities\"></iframe>
      </div>
      </div>

      <div class=\"papi\">
        <p>Or POST it </p>
        <br>
        <p> Link: POST /api/city</p>
        <p> Name and Status needs to be set</p>
        <br><br><br>
      </div>
    </div>

</center>
<script>
var objDiv = document.getElementById(\"table-scroll\");
objDiv.scrollTop = objDiv.scrollHeight;
</script>

</body>
</html>
", "City.html.twig", "/usr/local/bin/citiesphp/templates/City.html.twig");
    }
}
