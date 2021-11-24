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

/* maison/maisonBACK.html.twig */
class __TwigTemplate_1d698b4ec4e19065b049ce91eec62ba064a7ee4316ce74e53e43f5930f702eef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBACK.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/maisonBACK.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/maisonBACK.html.twig"));

        $this->parent = $this->loadTemplate("baseBACK.html.twig", "maison/maisonBACK.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Begin Page Content -->
<div class=\"container-fluid\">

    <!-- Page Heading -->
    <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
    <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prix</th>
                        <th>Nsm</th>
                        <th>Adresse</th>
                        <th>Check_in</th>
                        <th>Check_out</th>
                        <th>Piscine</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Maxppl</th>
                        <th>Smoke</th>
                        <th>Pet</th>
                        <th>DateAjout</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Prix</th>
                        <th>Nsm</th>
                        <th>Adresse</th>
                        <th>Check_in</th>
                        <th>Check_out</th>
                        <th>Piscine</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Maxppl</th>
                        <th>Smoke</th>
                        <th>Pet</th>
                        <th>DateAjout</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new RuntimeError('Variable "maisons" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 57
            echo "                        <tr>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "prix", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "nsm", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "adresse", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "checkIn", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "checkOut", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "piscine", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "Bedrooms", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "bathrooms", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "maxppl", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "smoke", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "pet", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            ((twig_get_attribute($this->env, $this->source, $context["maison"], "dateAjout", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "dateAjout", [], "any", false, false, false, 70), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_show_back", ["id" => twig_get_attribute($this->env, $this->source, $context["maison"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">show</a>

                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "                        <tr>
                            <td colspan=\"16\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maison/maisonBACK.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 81,  194 => 77,  184 => 72,  179 => 70,  175 => 69,  171 => 68,  167 => 67,  163 => 66,  159 => 65,  155 => 64,  151 => 63,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  128 => 57,  123 => 56,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBACK.html.twig' %}
{% block body %}
<!-- Begin Page Content -->
<div class=\"container-fluid\">

    <!-- Page Heading -->
    <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
    <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prix</th>
                        <th>Nsm</th>
                        <th>Adresse</th>
                        <th>Check_in</th>
                        <th>Check_out</th>
                        <th>Piscine</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Maxppl</th>
                        <th>Smoke</th>
                        <th>Pet</th>
                        <th>DateAjout</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Prix</th>
                        <th>Nsm</th>
                        <th>Adresse</th>
                        <th>Check_in</th>
                        <th>Check_out</th>
                        <th>Piscine</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Maxppl</th>
                        <th>Smoke</th>
                        <th>Pet</th>
                        <th>DateAjout</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for maison in maisons %}
                        <tr>
                            <td>{{ maison.id }}</td>
                            <td>{{ maison.prix }}</td>
                            <td>{{ maison.nsm }}</td>
                            <td>{{ maison.adresse }}</td>
                            <td>{{ maison.checkIn }}</td>
                            <td>{{ maison.checkOut }}</td>
                            <td>{{ maison.piscine }}</td>
                            <td>{{ maison.Bedrooms }}</td>
                            <td>{{ maison.bathrooms }}</td>
                            <td>{{ maison.maxppl }}</td>
                            <td>{{ maison.smoke }}</td>
                            <td>{{ maison.pet }}</td>
                            <td>{{ maison.dateAjout ? maison.dateAjout|date('Y-m-d H:i:s') : '' }}</td>
                            <td>
                                <a href=\"{{ path('maison_show_back', {'id': maison.id}) }}\">show</a>

                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"16\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
{% endblock %}", "maison/maisonBACK.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\maison\\maisonBACK.html.twig");
    }
}
