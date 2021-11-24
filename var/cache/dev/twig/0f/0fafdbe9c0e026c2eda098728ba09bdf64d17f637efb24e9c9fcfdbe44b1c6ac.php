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

/* reclamation/index.html.twig */
class __TwigTemplate_fd8401e70aa4021d460e430d15ab5b3fec539851d15d195567ef0c77711f6963 extends \Twig\Template
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
            'notif' => [$this, 'block_notif'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("backSyrine.html.twig", "reclamation/index.html.twig", 1);
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

        echo "Reclamation index";
        
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
        echo "    ";
        $this->displayBlock('notif', $context, $blocks);
        // line 28
        echo "    <div class=\"container-fluid\">

        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\"> liste des reclamations</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Description</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Description</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 53
            echo "                            <tr>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                <td>
                                    <table class=\"text-center w-100\">
                                        <tr>
                                            <td>
                                                <a   title=\"Cliquez ici pour afficher cette reclamation!\"
                                                    href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
                                            </td>
                                            <td>
                                                <a  title=\"Cliquez ici pour modifier cette reclamation!\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 64)]), "html", null, true);
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
            // line 73
            echo "                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 7
        echo "        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
             aria-labelledby=\"alertsDropdown\">
            <h6 class=\"dropdown-header\">
                Alerts Center
            </h6>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 12, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 13
            echo "            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                    </div>
                </div>
                <div>
                    <div class=\"small text-gray-500\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "IdUtilisateur", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                    message reclamation : ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "
                </div>
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 25,  224 => 21,  220 => 20,  211 => 13,  207 => 12,  200 => 7,  190 => 6,  178 => 85,  168 => 77,  159 => 73,  145 => 64,  139 => 61,  130 => 55,  126 => 54,  123 => 53,  118 => 52,  92 => 28,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backSyrine.html.twig' %}

{% block title %}Reclamation index{% endblock %}

{% block body %}
    {% block notif %}
        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
             aria-labelledby=\"alertsDropdown\">
            <h6 class=\"dropdown-header\">
                Alerts Center
            </h6>
{% for reclamation in reclamations|slice(0,5)  %}
            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                    </div>
                </div>
                <div>
                    <div class=\"small text-gray-500\">{{ reclamation.IdUtilisateur }}</div>
                    message reclamation : {{ reclamation.description }}
                </div>
            </a>
            {% endfor %}
            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
        </div>
        {% endblock %}
    <div class=\"container-fluid\">

        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\"> liste des reclamations</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Description</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Description</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {% for reclamation in reclamations %}
                            <tr>
                                <td>{{ reclamation.id }}</td>
                                <td>{{ reclamation.description }}</td>
                                <td>
                                    <table class=\"text-center w-100\">
                                        <tr>
                                            <td>
                                                <a   title=\"Cliquez ici pour afficher cette reclamation!\"
                                                    href=\"{{ path('reclamation_show', {'id': reclamation.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                                            </td>
                                            <td>
                                                <a  title=\"Cliquez ici pour modifier cette reclamation!\" href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\"><i class=\"fas fa-edit\"></i></a>
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

    <a href=\"{{ path('reclamation_new') }}\">Create new</a>
{% endblock %}



", "reclamation/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\reclamation\\index.html.twig");
    }
}
