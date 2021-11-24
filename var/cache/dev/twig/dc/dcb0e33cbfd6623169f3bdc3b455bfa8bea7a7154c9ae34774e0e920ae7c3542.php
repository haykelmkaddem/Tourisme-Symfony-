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

/* avis_destination/index.html.twig */
class __TwigTemplate_6da5b51cdf50199522349fa67afac7683fa03c9c608cd90ceabbd05fb0cbc8dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis_destination/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis_destination/index.html.twig"));

        $this->parent = $this->loadTemplate("backSyrine.html.twig", "avis_destination/index.html.twig", 1);
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

        echo "AvisDestination index";
        
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
    <div class=\"container-fluid\">

        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\"> liste des avis des destinations</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Note</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Note</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis_destinations"]) || array_key_exists("avis_destinations", $context) ? $context["avis_destinations"] : (function () { throw new RuntimeError('Variable "avis_destinations" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avis_destination"]) {
            // line 32
            echo "                            <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis_destination"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis_destination"], "note", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>
                                    <table class=\"text-center w-100\">
                                        <tr>
                                            <td>
                                                <a title=\"Cliquez ici pour afficher cet avis!\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_destination_show", ["id" => twig_get_attribute($this->env, $this->source, $context["avis_destination"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
                                            </td>
                                            <td>
                                                <a  title=\"Cliquez ici pour modifier cet avis!\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_destination_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["avis_destination"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                                            </td>
                                        </tr>
                                    </table>


                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis_destination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_destination_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avis_destination/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 63,  164 => 55,  155 => 51,  141 => 42,  135 => 39,  127 => 34,  123 => 33,  120 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backSyrine.html.twig' %}

{% block title %}AvisDestination index{% endblock %}

{% block body %}

    <div class=\"container-fluid\">

        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\"> liste des avis des destinations</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Note</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Note</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {% for avis_destination in avis_destinations %}
                            <tr>
                                <td>{{ avis_destination.id }}</td>
                                <td>{{ avis_destination.note }}</td>
                                <td>
                                    <table class=\"text-center w-100\">
                                        <tr>
                                            <td>
                                                <a title=\"Cliquez ici pour afficher cet avis!\" href=\"{{ path('avis_destination_show', {'id': avis_destination.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                                            </td>
                                            <td>
                                                <a  title=\"Cliquez ici pour modifier cet avis!\" href=\"{{ path('avis_destination_edit', {'id': avis_destination.id}) }}\"><i class=\"fas fa-edit\"></i></a>
                                            </td>
                                        </tr>
                                    </table>


                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <a href=\"{{ path('avis_destination_new') }}\">Create new</a>
{% endblock %}

", "avis_destination/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\avis_destination\\index.html.twig");
    }
}
