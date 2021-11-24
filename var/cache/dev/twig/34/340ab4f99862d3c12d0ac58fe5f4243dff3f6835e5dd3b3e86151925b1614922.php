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

/* even_non_approuve/index.html.twig */
class __TwigTemplate_0ee32db4ebec3d3d02aa5ac3af26098edace56e790e87502dcf19e545cdfd98a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_non_approuve/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_non_approuve/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "even_non_approuve/index.html.twig", 1);
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

        echo "EvenNonApprouve index";
        
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
        <h6 class=\"m-0 font-weight-bold text-primary\">Evénements non approuvés</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr>

                <th>TitreEven</th>
                <th>DescriptionEven</th>
                <th>IdClient</th>
                <th>Visualiser</th>
                <th>Approuver</th>
                <th>Refuser</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>TitreEven</th>
                <th>DescriptionEven</th>
                <th>IdClient</th>
                <th>Visualiser</th>
                <th>Approuver</th>
                <th>Refuser</th>
            </tr>
        </tfoot>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["even_non_approuves"]) || array_key_exists("even_non_approuves", $context) ? $context["even_non_approuves"] : (function () { throw new RuntimeError('Variable "even_non_approuves" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["even_non_approuve"]) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_non_approuve"], "titreEven", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_non_approuve"], "descriptionEven", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_non_approuve"], "idClient", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_non_approuve_show", ["id" => twig_get_attribute($this->env, $this->source, $context["even_non_approuve"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-eye\" style=\"width: 40px;\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_non_approuve_approuver", ["id" => twig_get_attribute($this->env, $this->source, $context["even_non_approuve"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-md\" style=\"margin-left: 25px;\">
                        <i class=\"fas fa-thumbs-up\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_non_approuve_annuler", ["id" => twig_get_attribute($this->env, $this->source, $context["even_non_approuve"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-minus-circle\" style=\"width: 40px;\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['even_non_approuve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
            </table>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_non_approuve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 63,  169 => 59,  158 => 53,  150 => 48,  142 => 43,  137 => 41,  133 => 40,  129 => 39,  126 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EvenNonApprouve index{% endblock %}

{% block body %}


<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Evénements non approuvés</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr>

                <th>TitreEven</th>
                <th>DescriptionEven</th>
                <th>IdClient</th>
                <th>Visualiser</th>
                <th>Approuver</th>
                <th>Refuser</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>TitreEven</th>
                <th>DescriptionEven</th>
                <th>IdClient</th>
                <th>Visualiser</th>
                <th>Approuver</th>
                <th>Refuser</th>
            </tr>
        </tfoot>
        <tbody>
        {% for even_non_approuve in even_non_approuves %}
            <tr>
                <td>{{ even_non_approuve.titreEven }}</td>
                <td>{{ even_non_approuve.descriptionEven }}</td>
                <td>{{ even_non_approuve.idClient }}</td>
                <td>
                    <a href=\"{{ path('even_non_approuve_show', {'id': even_non_approuve.id}) }}\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-eye\" style=\"width: 40px;\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('even_non_approuve_approuver', {'id': even_non_approuve.id}) }}\" class=\"btn btn-success btn-md\" style=\"margin-left: 25px;\">
                        <i class=\"fas fa-thumbs-up\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('even_non_approuve_annuler', {'id': even_non_approuve.id}) }}\" class=\"btn btn-danger btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-minus-circle\" style=\"width: 40px;\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
        </div>
    </div>
</div>


{% endblock %}
", "even_non_approuve/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_non_approuve\\index.html.twig");
    }
}
