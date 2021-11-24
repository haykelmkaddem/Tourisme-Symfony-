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

/* artiste/index.html.twig */
class __TwigTemplate_9e2eaa324dc23a022f8fc0443aec9968d4c6bbd5a763469e9d336c16c2b62698 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "artiste/index.html.twig", 1);
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

        echo "Artiste index";
        
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
        echo "    <h1 style=\"margin-left: 10%;\">Liste des artistes</h1>
<br><br><br>





    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>NomArtiste</th>
                        <th>DescriptionArtiste</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>NomArtiste</th>
                        <th>DescriptionArtiste</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artistes"]) || array_key_exists("artistes", $context) ? $context["artistes"] : (function () { throw new RuntimeError('Variable "artistes" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artiste"]) {
            // line 38
            echo "                        <tr>

                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artiste"], "nomArtiste", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artiste"], "descriptionArtiste", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>
                                <button class=\"btn btn-primary\">
                                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artiste_show", ["id" => twig_get_attribute($this->env, $this->source, $context["artiste"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\" style=\"width: 40px; color: #ffffff;\" ></i></a>
                                </button>
                            </td>
                            <td>
                                <button class=\"btn btn-success\">
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artiste_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["artiste"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\" style=\"width: 40px; color: #ffffff;\"></i></a>
                                </button>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                        <tr>
                            <td colspan=\"8\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artiste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return "artiste/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 58,  158 => 54,  148 => 49,  140 => 44,  134 => 41,  130 => 40,  126 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Artiste index{% endblock %}

{% block body %}
    <h1 style=\"margin-left: 10%;\">Liste des artistes</h1>
<br><br><br>





    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>NomArtiste</th>
                        <th>DescriptionArtiste</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>NomArtiste</th>
                        <th>DescriptionArtiste</th>
                        <th>Voir détails</th>
                        <th>Modifier</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for artiste in artistes %}
                        <tr>

                            <td>{{ artiste.nomArtiste }}</td>
                            <td>{{ artiste.descriptionArtiste }}</td>
                            <td>
                                <button class=\"btn btn-primary\">
                                    <a href=\"{{ path('artiste_show', {'id': artiste.id}) }}\"><i class=\"fas fa-eye\" style=\"width: 40px; color: #ffffff;\" ></i></a>
                                </button>
                            </td>
                            <td>
                                <button class=\"btn btn-success\">
                                    <a href=\"{{ path('artiste_edit', {'id': artiste.id}) }}\"><i class=\"fas fa-edit\" style=\"width: 40px; color: #ffffff;\"></i></a>
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
", "artiste/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\artiste\\index.html.twig");
    }
}
