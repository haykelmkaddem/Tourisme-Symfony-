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

/* lieu_maison/show.html.twig */
class __TwigTemplate_06d9f05c4020414098da8774c488eaec09e00653b8662989780764ac425a29f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_maison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_maison/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBACK.html.twig", "lieu_maison/show.html.twig", 1);
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

        echo "LieuMaison";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lieu_maison_index");
        echo "\"> <button class=\"btn btn-light\" type=\"submit\" style=\"width: auto\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>RETOUR</button></a>
    </div>
    <h1>LieuMaison</h1>

<div class=\"card-body\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieu_maison"]) || array_key_exists("lieu_maison", $context) ? $context["lieu_maison"] : (function () { throw new RuntimeError('Variable "lieu_maison" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lieu_maison"]) || array_key_exists("lieu_maison", $context) ? $context["lieu_maison"] : (function () { throw new RuntimeError('Variable "lieu_maison" does not exist.', 21, $this->source); })()), "lieu", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    </div>


    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lieu_maison_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lieu_maison"]) || array_key_exists("lieu_maison", $context) ? $context["lieu_maison"] : (function () { throw new RuntimeError('Variable "lieu_maison" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">edit</a>
</div>
    ";
        // line 30
        echo twig_include($this->env, $context, "lieu_maison/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lieu_maison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 30,  121 => 28,  111 => 21,  104 => 17,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBACK.html.twig' %}

{% block title %}LieuMaison{% endblock %}

{% block body %}
    <div class=\"right\" style=\"margin-top: 10px; margin-left: 60px\">
        <a href=\"{{ path('lieu_maison_index') }}\"> <button class=\"btn btn-light\" type=\"submit\" style=\"width: auto\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>RETOUR</button></a>
    </div>
    <h1>LieuMaison</h1>

<div class=\"card-body\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ lieu_maison.id }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ lieu_maison.lieu }}</td>
            </tr>
        </tbody>
    </table>
    </div>


    <a href=\"{{ path('lieu_maison_edit', {'id': lieu_maison.id}) }}\">edit</a>
</div>
    {{ include('lieu_maison/_delete_form.html.twig') }}
{% endblock %}
", "lieu_maison/show.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\lieu_maison\\show.html.twig");
    }
}
