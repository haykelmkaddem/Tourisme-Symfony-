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

/* maison/showBACK.html.twig */
class __TwigTemplate_396707a8feb8679d293fc83e02baf0247344e5859c7bfab5a7dd02b91d3413a6 extends \Twig\Template
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
        return "baseBACK.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/showBACK.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/showBACK.html.twig"));

        $this->parent = $this->loadTemplate("baseBACK.html.twig", "maison/showBACK.html.twig", 1);
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

        echo "Maison";
        
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
        echo "    <div class=\"right\" style=\"margin-top: 10px; margin-left: 60px\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_back");
        echo "\"> <button class=\"btn btn-light\" type=\"submit\" style=\"width: auto\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>RETOUR</button></a>
    </div>
    <h1>Maison</h1>
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Détails</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">

                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 25, $this->source); })()), "prix", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nsm</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 29, $this->source); })()), "nsm", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Check_in</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 37, $this->source); })()), "checkIn", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Check_out</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 41, $this->source); })()), "checkOut", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Piscine</th>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 45, $this->source); })()), "piscine", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Bedrooms</th>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 49, $this->source); })()), "Bedrooms", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Bathrooms</th>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 53, $this->source); })()), "bathrooms", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Maxppl</th>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 57, $this->source); })()), "maxppl", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Smoke</th>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 61, $this->source); })()), "smoke", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Pet</th>
                        <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 65, $this->source); })()), "pet", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                    </tr>            <tr>
                        <td><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 67, $this->source); })()), "image1", [], "any", false, false, false, 67))), "html", null, true);
        echo "\" height=\"220\" alt=\"#\"></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>DateAjout</th>
                        <td>";
        // line 75
        ((twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 75, $this->source); })()), "dateAjout", [], "any", false, false, false, 75)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 75, $this->source); })()), "dateAjout", [], "any", false, false, false, 75), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

    <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_show_pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        echo "\">Imprimer</a>




    ";
        // line 88
        echo twig_include($this->env, $context, "maison/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maison/showBACK.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 88,  215 => 83,  204 => 75,  197 => 71,  190 => 67,  185 => 65,  178 => 61,  171 => 57,  164 => 53,  157 => 49,  150 => 45,  143 => 41,  136 => 37,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBACK.html.twig' %}

{% block title %}Maison{% endblock %}

{% block body %}
    <div class=\"right\" style=\"margin-top: 10px; margin-left: 60px\">
        <a href=\"{{ path('maison_index_back') }}\"> <button class=\"btn btn-light\" type=\"submit\" style=\"width: auto\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>RETOUR</button></a>
    </div>
    <h1>Maison</h1>
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Détails</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">

                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ maison.id }}</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>{{ maison.prix }}</td>
                    </tr>
                    <tr>
                        <th>Nsm</th>
                        <td>{{ maison.nsm }}</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>{{ maison.adresse }}</td>
                    </tr>
                    <tr>
                        <th>Check_in</th>
                        <td>{{ maison.checkIn }}</td>
                    </tr>
                    <tr>
                        <th>Check_out</th>
                        <td>{{ maison.checkOut }}</td>
                    </tr>
                    <tr>
                        <th>Piscine</th>
                        <td>{{ maison.piscine }}</td>
                    </tr>
                    <tr>
                        <th>Bedrooms</th>
                        <td>{{ maison.Bedrooms }}</td>
                    </tr>
                    <tr>
                        <th>Bathrooms</th>
                        <td>{{ maison.bathrooms }}</td>
                    </tr>
                    <tr>
                        <th>Maxppl</th>
                        <td>{{ maison.maxppl }}</td>
                    </tr>
                    <tr>
                        <th>Smoke</th>
                        <td>{{ maison.smoke }}</td>
                    </tr>
                    <tr>
                        <th>Pet</th>
                        <td>{{ maison.pet }}</td>
                    </tr>            <tr>
                        <td><img src=\"{{ asset('uploads/' ~ maison.image1) }}\" height=\"220\" alt=\"#\"></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ maison.description }}</td>
                    </tr>
                    <tr>
                        <th>DateAjout</th>
                        <td>{{ maison.dateAjout ? maison.dateAjout|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

    <a href=\"{{ path('maison_show_pdf', {'id': maison.id}) }}\">Imprimer</a>




    {{ include('maison/_delete_form.html.twig') }}
{% endblock %}
", "maison/showBACK.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\maison\\showBACK.html.twig");
    }
}
