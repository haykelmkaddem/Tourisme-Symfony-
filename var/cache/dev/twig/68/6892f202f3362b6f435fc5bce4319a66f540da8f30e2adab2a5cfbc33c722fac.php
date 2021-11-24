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

/* guide/index.html.twig */
class __TwigTemplate_eca055d2455a1f560dc2c9ae64606471078ef06fb269d2276f9022a95c2575ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guide/index.html.twig", 1);
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

        echo "Guide index";
        
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
                            <th>CvFile</th>
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
                            <th>CvFile</th>
                            <th>VerifPhoto</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 41
            echo "                            <tr>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "cin", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "imgCinFront", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "imgCinBack", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "cvFile", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "verifPhoto", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo ((twig_get_attribute($this->env, $this->source, $context["guide"], "etat", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide_show", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">show</a>
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                            <tr>
                                <td colspan=\"8\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide_new");
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
        return "guide/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 61,  183 => 59,  174 => 55,  165 => 51,  161 => 50,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  129 => 41,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Guide index{% endblock %}

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
                            <th>CvFile</th>
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
                            <th>CvFile</th>
                            <th>VerifPhoto</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {% for guide in guides %}
                            <tr>
                                <td>{{ guide.id }}</td>
                                <td>{{ guide.cin }}</td>
                                <td>{{ guide.imgCinFront }}</td>
                                <td>{{ guide.imgCinBack }}</td>
                                <td>{{ guide.cvFile }}</td>
                                <td>{{ guide.verifPhoto }}</td>
                                <td>{{ guide.etat ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href=\"{{ path('guide_show', {'id': guide.id}) }}\">show</a>
                                    <a href=\"{{ path('guide_edit', {'id': guide.id}) }}\">edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <a href=\"{{ path('guide_new') }}\">Create new</a>
                </div>
            </div>
        </div>

    </div>



{% endblock %}
", "guide/index.html.twig", "C:\\wamp64\\www\\TourismWeb\\templates\\guide\\index.html.twig");
    }
}
