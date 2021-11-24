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

/* categorie_art/index.html.twig */
class __TwigTemplate_da882ec9abbc65c6092942edb9cc670528368e8484fdcdf00fb2ade3bfee9b2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_art/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_art/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "categorie_art/index.html.twig", 1);
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

        echo "CategorieArt index";
        
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
        <h6 class=\"m-0 font-weight-bold text-primary\">Categories des artistes</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr>

                <th>TitreCatArt</th>
                <th>DescriptionCatArt</th>
                    <th>Visualiser</th>
                    <th>Modifier</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>TitreCatArt</th>
                <th>DescriptionCatArt</th>
                <th>Visualiser</th>
                <th>Modifier</th>
            </tr>
        </tfoot>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie_arts"]) || array_key_exists("categorie_arts", $context) ? $context["categorie_arts"] : (function () { throw new RuntimeError('Variable "categorie_arts" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie_art"]) {
            // line 35
            echo "            <tr>

                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie_art"], "titreCatArt", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie_art"], "descriptionCatArt", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_art_show", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie_art"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-eye\" style=\"width: 40px;\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_art_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie_art"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-edit\" style=\"width: 40px;\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie_art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "categorie_art/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  155 => 51,  144 => 45,  136 => 40,  131 => 38,  127 => 37,  123 => 35,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}CategorieArt index{% endblock %}

{% block body %}


<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Categories des artistes</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr>

                <th>TitreCatArt</th>
                <th>DescriptionCatArt</th>
                    <th>Visualiser</th>
                    <th>Modifier</th>
            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>TitreCatArt</th>
                <th>DescriptionCatArt</th>
                <th>Visualiser</th>
                <th>Modifier</th>
            </tr>
        </tfoot>
        <tbody>
        {% for categorie_art in categorie_arts %}
            <tr>

                <td>{{ categorie_art.titreCatArt }}</td>
                <td>{{ categorie_art.descriptionCatArt }}</td>
                <td>
                    <a href=\"{{ path('categorie_art_show', {'id': categorie_art.id}) }}\" class=\"btn btn-primary btn-md\" style=\"margin-left: 10px;\">
                        <i class=\"fas fa-eye\" style=\"width: 40px;\"></i>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('categorie_art_edit', {'id': categorie_art.id}) }}\" class=\"btn btn-success btn-md\" style=\"margin-left: 10px;\">
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
", "categorie_art/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\categorie_art\\index.html.twig");
    }
}
