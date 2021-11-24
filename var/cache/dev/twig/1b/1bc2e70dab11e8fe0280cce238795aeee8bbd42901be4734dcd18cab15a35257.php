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

/* lieu_even/index.html.twig */
class __TwigTemplate_393b7835f636eb631f17eafa5a801ed236a05dfb6d59ca8a359536c5afd1d3a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_even/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_even/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "lieu_even/index.html.twig", 1);
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

        echo "LieuEven index";
        
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
        <h6 class=\"m-0 font-weight-bold text-primary\">Lieux des Evénements</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>

            <tr>

                <th>TitreLieu</th>
                <th>AddresseEven</th>
                <th>Visualiser</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>TitreLieu</th>
                <th>AddresseEven</th>
                <th>Visualiser</th>
                <th>Modifier</th>
            </tr>
        </tfoot>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieu_evens"]) || array_key_exists("lieu_evens", $context) ? $context["lieu_evens"] : (function () { throw new RuntimeError('Variable "lieu_evens" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieu_even"]) {
            // line 36
            echo "            <tr>

                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu_even"], "titreLieu", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu_even"], "addresseEven", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lieu_even_show", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu_even"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-eye\" style=\"width: 40px;\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lieu_even_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu_even"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-edit\" style=\"width: 40px;\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu_even'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        return "lieu_even/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  156 => 52,  145 => 46,  137 => 41,  132 => 39,  128 => 38,  124 => 36,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}LieuEven index{% endblock %}

{% block body %}


<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Lieux des Evénements</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>

            <tr>

                <th>TitreLieu</th>
                <th>AddresseEven</th>
                <th>Visualiser</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>TitreLieu</th>
                <th>AddresseEven</th>
                <th>Visualiser</th>
                <th>Modifier</th>
            </tr>
        </tfoot>
        <tbody>
        {% for lieu_even in lieu_evens %}
            <tr>

                <td>{{ lieu_even.titreLieu }}</td>
                <td>{{ lieu_even.addresseEven }}</td>
                <td>
                    <a href=\"{{ path('lieu_even_show', {'id': lieu_even.id}) }}\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-eye\" style=\"width: 40px;\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('lieu_even_edit', {'id': lieu_even.id}) }}\" class=\"btn btn-success btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-edit\" style=\"width: 40px;\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
        </div>
    </div>
</div>

{% endblock %}
", "lieu_even/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\lieu_even\\index.html.twig");
    }
}
