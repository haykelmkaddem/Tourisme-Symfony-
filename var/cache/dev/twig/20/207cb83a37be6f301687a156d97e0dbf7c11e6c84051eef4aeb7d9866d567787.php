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

/* even_approuve/index.html.twig */
class __TwigTemplate_37d35b531f542267c6a46d2551a60ae45005cc3fb2b130872d5fede84d068ea7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "even_approuve/index.html.twig", 1);
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

        echo "EvenApprouve index";
        
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
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste des événements approuvés</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>TitreEven</th>
                        <th>DescriptionEven</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>DescriptionEven</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["even_approuves"]) || array_key_exists("even_approuves", $context) ? $context["even_approuves"] : (function () { throw new RuntimeError('Variable "even_approuves" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["even_approuve"]) {
            // line 32
            echo "                    <tr>


                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "titreEven", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "descriptionEven", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>

                        <td>
                            <button class=\"btn btn-primary\">
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_approuve_show", ["id" => twig_get_attribute($this->env, $this->source, $context["even_approuve"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                                    <i class=\"fas fa-eye\" style=\"width: 40px; color: #ffffff;\" ></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button class=\"btn btn-success\">
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_approuve_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["even_approuve"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-md\" style=\"margin-left: 10px;\">
                                    <i class=\"fas fa-edit\" style=\"width: 20px; color: #ffffff;\"></i>
                                </a>
                            </button>
                        </td>

                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                        <tr>
                            <td colspan=\"8\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['even_approuve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_approuve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 59,  159 => 55,  146 => 47,  136 => 40,  129 => 36,  125 => 35,  120 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EvenApprouve index{% endblock %}

{% block body %}

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste des événements approuvés</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>TitreEven</th>
                        <th>DescriptionEven</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>DescriptionEven</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for even_approuve in even_approuves %}
                    <tr>


                        <td>{{ even_approuve.titreEven }}</td>
                        <td>{{ even_approuve.descriptionEven }}</td>

                        <td>
                            <button class=\"btn btn-primary\">
                                <a href=\"{{ path('even_approuve_show', {'id': even_approuve.id}) }}\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                                    <i class=\"fas fa-eye\" style=\"width: 40px; color: #ffffff;\" ></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button class=\"btn btn-success\">
                                <a href=\"{{ path('even_approuve_edit', {'id': even_approuve.id}) }}\" class=\"btn btn-success btn-md\" style=\"margin-left: 10px;\">
                                    <i class=\"fas fa-edit\" style=\"width: 20px; color: #ffffff;\"></i>
                                </a>
                            </button>
                        </td>

                    </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <br><br>
{% endblock %}
", "even_approuve/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_approuve\\index.html.twig");
    }
}
