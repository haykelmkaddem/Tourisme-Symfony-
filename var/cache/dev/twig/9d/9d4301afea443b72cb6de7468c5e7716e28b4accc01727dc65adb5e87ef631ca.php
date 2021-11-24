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

/* contactez_nous/show.html.twig */
class __TwigTemplate_acf92851473024ecf9347ed285f65949c698b5c46baf7c4b41458c270cc4b96b extends \Twig\Template
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
        return "backSyrine.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contactez_nous/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contactez_nous/show.html.twig"));

        $this->parent = $this->loadTemplate("backSyrine.html.twig", "contactez_nous/show.html.twig", 1);
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

        echo "ContactezNous";
        
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
        echo "
<div class=\"card m-5\">
    <div class=\"card-header py-3\">
        <h5 class=\"text-primary\">
            Message de ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), "html", null, true);
        echo "
        </h5>
    </div>
    <div class=\"card-body\">

        <table class=\"table\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Objet</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 35, $this->source); })()), "objet", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contactez_nou"]) || array_key_exists("contactez_nou", $context) ? $context["contactez_nou"] : (function () { throw new RuntimeError('Variable "contactez_nou" does not exist.', 39, $this->source); })()), "message", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactez_nous_index");
        echo "\">back to list</a>



        ";
        // line 48
        echo twig_include($this->env, $context, "contactez_nous/_delete_form.html.twig");
        echo "
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contactez_nous/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 48,  151 => 44,  143 => 39,  136 => 35,  129 => 31,  122 => 27,  115 => 23,  108 => 19,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backSyrine.html.twig' %}

{% block title %}ContactezNous{% endblock %}

{% block body %}

<div class=\"card m-5\">
    <div class=\"card-header py-3\">
        <h5 class=\"text-primary\">
            Message de {{ contactez_nou.nom }} {{ contactez_nou.prenom }}
        </h5>
    </div>
    <div class=\"card-body\">

        <table class=\"table\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contactez_nou.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ contactez_nou.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ contactez_nou.prenom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ contactez_nou.email }}</td>
            </tr>
            <tr>
                <th>Objet</th>
                <td>{{ contactez_nou.objet }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ contactez_nou.message }}</td>
            </tr>
            </tbody>
        </table>

        <a href=\"{{ path('contactez_nous_index') }}\">back to list</a>



        {{ include('contactez_nous/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}
", "contactez_nous/show.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\contactez_nous\\show.html.twig");
    }
}
