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

/* even_non_approuve/show.html.twig */
class __TwigTemplate_2ee26bddc23dd9d24d84eb44376f430a3aa92d6fb3875c05c97fcd6fc849ce11 extends \Twig\Template
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
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_non_approuve/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_non_approuve/show.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "even_non_approuve/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EvenNonApprouve";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>EvenNonApprouve</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ImageFilename</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 16, $this->source); })()), "imageFilename", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TitreEven</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 20, $this->source); })()), "titreEven", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescriptionEven</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 24, $this->source); })()), "descriptionEven", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateDebutEven</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 28, $this->source); })()), "dateDebutEven", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 28, $this->source); })()), "dateDebutEven", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DateFinEven</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 32, $this->source); })()), "dateFinEven", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 32, $this->source); })()), "dateFinEven", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HeureDebutEven</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 36, $this->source); })()), "heureDebutEven", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 36, $this->source); })()), "heureDebutEven", [], "any", false, false, false, 36), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HeureFinEven</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 40, $this->source); })()), "heureFinEven", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 40, $this->source); })()), "heureFinEven", [], "any", false, false, false, 40), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>IdClient</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_non_approuve"]) || array_key_exists("even_non_approuve", $context) ? $context["even_non_approuve"] : (function () { throw new RuntimeError('Variable "even_non_approuve" does not exist.', 44, $this->source); })()), "idClient", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_non_approuve/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EvenNonApprouve{% endblock %}

{% block body %}
    <h1>EvenNonApprouve</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ even_non_approuve.id }}</td>
            </tr>
            <tr>
                <th>ImageFilename</th>
                <td>{{ even_non_approuve.imageFilename }}</td>
            </tr>
            <tr>
                <th>TitreEven</th>
                <td>{{ even_non_approuve.titreEven }}</td>
            </tr>
            <tr>
                <th>DescriptionEven</th>
                <td>{{ even_non_approuve.descriptionEven }}</td>
            </tr>
            <tr>
                <th>DateDebutEven</th>
                <td>{{ even_non_approuve.dateDebutEven ? even_non_approuve.dateDebutEven|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DateFinEven</th>
                <td>{{ even_non_approuve.dateFinEven ? even_non_approuve.dateFinEven|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>HeureDebutEven</th>
                <td>{{ even_non_approuve.heureDebutEven ? even_non_approuve.heureDebutEven|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>HeureFinEven</th>
                <td>{{ even_non_approuve.heureFinEven ? even_non_approuve.heureFinEven|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>IdClient</th>
                <td>{{ even_non_approuve.idClient }}</td>
            </tr>
        </tbody>
    </table>


{% endblock %}
", "even_non_approuve/show.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_non_approuve\\show.html.twig");
    }
}
