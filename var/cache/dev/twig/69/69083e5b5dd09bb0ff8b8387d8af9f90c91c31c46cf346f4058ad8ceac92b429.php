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

/* PDF/showPDF.html.twig */
class __TwigTemplate_d682761094c5b77a88e1d4e284a2932adb7215f3be121c2ee66c513a11f5e5bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PDF/showPDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PDF/showPDF.html.twig"));

        // line 1
        echo "<head>
    <style>
        table{
            margin:auto;
        }
        th {
            text-align :right;
        }
    </style>
</head>
<div>
<center>
    <h1>Laison à louer</h1>
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nsm</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 26, $this->source); })()), "nsm", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 30, $this->source); })()), "adresse", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Check_in</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 34, $this->source); })()), "checkIn", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Check_out</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 38, $this->source); })()), "checkOut", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Piscine</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 42, $this->source); })()), "piscine", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Bedrooms</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 46, $this->source); })()), "Bedrooms", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Bathrooms</th>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 50, $this->source); })()), "bathrooms", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Maxppl</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 54, $this->source); })()), "maxppl", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Smoke</th>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 58, $this->source); })()), "smoke", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pet</th>
            <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 62, $this->source); })()), "pet", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
        <tr>
            <th>Description</th>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Numéro de téléphone</th>
            <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 69, $this->source); })()), "phone", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
        </tr>

        </tbody>
    </table>

    <h2>Pour plus d'informations, visitez notre site</h2><h1>BIOSTravel.tn</h1>
    <img src=\"qr-code/default/BIOSTravel.tn\"/>

</center>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PDF/showPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  145 => 65,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <style>
        table{
            margin:auto;
        }
        th {
            text-align :right;
        }
    </style>
</head>
<div>
<center>
    <h1>Laison à louer</h1>
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ maison.id }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ maison.prix }}</td>
        </tr>
        <tr>
            <th>Nsm</th>
            <td>{{ maison.nsm }}</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>{{ maison.adresse }}</td>
        </tr>
        <tr>
            <th>Check_in</th>
            <td>{{ maison.checkIn }}</td>
        </tr>
        <tr>
            <th>Check_out</th>
            <td>{{ maison.checkOut }}</td>
        </tr>
        <tr>
            <th>Piscine</th>
            <td>{{ maison.piscine }}</td>
        </tr>
        <tr>
            <th>Bedrooms</th>
            <td>{{ maison.Bedrooms }}</td>
        </tr>
        <tr>
            <th>Bathrooms</th>
            <td>{{ maison.bathrooms }}</td>
        </tr>
        <tr>
            <th>Maxppl</th>
            <td>{{ maison.maxppl }}</td>
        </tr>
        <tr>
            <th>Smoke</th>
            <td>{{ maison.smoke }}</td>
        </tr>
        <tr>
            <th>Pet</th>
            <td>{{ maison.pet }}</td>
        <tr>
            <th>Description</th>
            <td>{{ maison.description }}</td>
        </tr>
        <tr>
            <th>Numéro de téléphone</th>
            <td>{{ maison.phone }}</td>
        </tr>

        </tbody>
    </table>

    <h2>Pour plus d'informations, visitez notre site</h2><h1>BIOSTravel.tn</h1>
    <img src=\"qr-code/default/BIOSTravel.tn\"/>

</center>
</div>", "PDF/showPDF.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\PDF\\showPDF.html.twig");
    }
}
