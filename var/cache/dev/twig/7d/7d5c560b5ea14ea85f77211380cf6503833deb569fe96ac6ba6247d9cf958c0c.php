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

/* prop_maison/index.html.twig */
class __TwigTemplate_cbf304d88406338ed05edc07aab2107b21ace7065655080c3467cf64e51a40a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prop_maison/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prop_maison/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prop_maison/index.html.twig", 1);
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

        echo "PropMaison index";
        
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
        echo "    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-2 text-gray-800\">Liste D'utilisateurs</h1>
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
                            <th>Cin</th>
                            <th>ImgCinFront</th>
                            <th>ImgCinBack</th>
                            <th>VerifPhoto</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Cin</th>
                            <th>ImgCinFront</th>
                            <th>ImgCinBack</th>
                            <th>VerifPhoto</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prop_maisons"]) || array_key_exists("prop_maisons", $context) ? $context["prop_maisons"] : (function () { throw new RuntimeError('Variable "prop_maisons" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prop_maison"]) {
            // line 39
            echo "                            <tr>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop_maison"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop_maison"], "cin", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop_maison"], "imgCinFront", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop_maison"], "imgCinBack", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop_maison"], "verifPhoto", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo ((twig_get_attribute($this->env, $this->source, $context["prop_maison"], "etat", [], "any", false, false, false, 45)) ? ("Yes") : ("No"));
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prop_maison_show", ["id" => twig_get_attribute($this->env, $this->source, $context["prop_maison"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">show</a>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prop_maison_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["prop_maison"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                            <tr>
                                <td colspan=\"7\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop_maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prop_maison_new");
        echo "\">Create new</a>
                </div>
            </div>
        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prop_maison/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 58,  177 => 56,  168 => 52,  159 => 48,  155 => 47,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  127 => 39,  122 => 38,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PropMaison index{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-2 text-gray-800\">Liste D'utilisateurs</h1>
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
                            <th>Cin</th>
                            <th>ImgCinFront</th>
                            <th>ImgCinBack</th>
                            <th>VerifPhoto</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Cin</th>
                            <th>ImgCinFront</th>
                            <th>ImgCinBack</th>
                            <th>VerifPhoto</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {% for prop_maison in prop_maisons %}
                            <tr>
                                <td>{{ prop_maison.id }}</td>
                                <td>{{ prop_maison.cin }}</td>
                                <td>{{ prop_maison.imgCinFront }}</td>
                                <td>{{ prop_maison.imgCinBack }}</td>
                                <td>{{ prop_maison.verifPhoto }}</td>
                                <td>{{ prop_maison.etat ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href=\"{{ path('prop_maison_show', {'id': prop_maison.id}) }}\">show</a>
                                    <a href=\"{{ path('prop_maison_edit', {'id': prop_maison.id}) }}\">edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <a href=\"{{ path('prop_maison_new') }}\">Create new</a>
                </div>
            </div>
        </div>

    </div>


{% endblock %}

", "prop_maison/index.html.twig", "C:\\wamp64\\www\\TourismWeb\\templates\\prop_maison\\index.html.twig");
    }
}
