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

/* guide/new.html.twig */
class __TwigTemplate_f115b2377ec3e69a97905fe0811d5253e87bd4090601b176240285f289c9c09b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/new.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "guide/new.html.twig", 1);
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

        echo "New Guide";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 5
        echo "       <style>
           body.homepage #header {
               height: 50px;
               min-height: 50px;
           }
       </style>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>

            </header>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"index.html\">Home</a></li>
                <li>
                    <a href=\"#\">Dropdown</a>
                    <ul>
                        <li><a href=\"#\">Lorem ipsum dolor</a></li>
                        <li><a href=\"#\">Magna phasellus</a></li>
                        <li><a href=\"#\">Etiam dolore nisl</a></li>
                        <li>
                            <a href=\"#\">And a submenu &hellip;</a>
                            <ul>
                                <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                <li><a href=\"#\">Phasellus consequat</a></li>
                                <li><a href=\"#\">Magna phasellus</a></li>
                                <li><a href=\"#\">Etiam dolore nisl</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
                <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
            </ul>
        </nav>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-4 d-none d-lg-block bg-guide-image \">
                            <div class=\"container p-3 text-center\"  >
                                <p style=\"color: white;\"></p>
                                <h1 style=\"color: white;\">Merci de remplir ce formulaire pour Devenir un guide avec nous!</h1>
                            </div>
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"p-5\">
                                <div class=\"\">
                                    <h1 class=\"text-danger\">[Tous les cases sont obligatoire!] </h1>
                                </div>
                                ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_start');
        echo "
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "cin", [], "any", false, false, false, 77), 'row');
        echo "
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "imgCinFront", [], "any", false, false, false, 78), 'row', ["label" => "Face recto de votre Cin"]);
        // line 80
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "imgCinBack", [], "any", false, false, false, 81), 'row', ["label" => "Face verso de votre Cin"]);
        // line 83
        echo "
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "cvFile", [], "any", false, false, false, 84), 'row', ["label" => "Votre cv"]);
        // line 86
        echo "
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "verifPhoto", [], "any", false, false, false, 87), 'row', ["label" => "Votre Photo"]);
        // line 89
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "etat", [], "any", false, false, false, 90), 'row', ["label" => " ", "attr" => ["class" => "hidden"]]);
        echo "
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "idUser", [], "any", false, false, false, 91), 'row', ["label" => " ", "attr" => ["class" => "invisible"]]);
        echo "


                                <button type=\"submit\" class=\"btn btn-warning\">Envoyer demande</button>
                                ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        echo "


                                <a href=\"/s\">Accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
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
        return "guide/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 95,  231 => 91,  227 => 90,  224 => 89,  222 => 87,  219 => 86,  217 => 84,  214 => 83,  212 => 81,  209 => 80,  207 => 78,  203 => 77,  199 => 76,  175 => 54,  165 => 53,  116 => 13,  106 => 12,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}New Guide{% endblock %}
   {% block style %}
       <style>
           body.homepage #header {
               height: 50px;
               min-height: 50px;
           }
       </style>
   {% endblock %}
{% block header %}
    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>

            </header>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"index.html\">Home</a></li>
                <li>
                    <a href=\"#\">Dropdown</a>
                    <ul>
                        <li><a href=\"#\">Lorem ipsum dolor</a></li>
                        <li><a href=\"#\">Magna phasellus</a></li>
                        <li><a href=\"#\">Etiam dolore nisl</a></li>
                        <li>
                            <a href=\"#\">And a submenu &hellip;</a>
                            <ul>
                                <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                <li><a href=\"#\">Phasellus consequat</a></li>
                                <li><a href=\"#\">Magna phasellus</a></li>
                                <li><a href=\"#\">Etiam dolore nisl</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
                <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
            </ul>
        </nav>

    </div>
{% endblock %}
{% block body %}
<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-4 d-none d-lg-block bg-guide-image \">
                            <div class=\"container p-3 text-center\"  >
                                <p style=\"color: white;\"></p>
                                <h1 style=\"color: white;\">Merci de remplir ce formulaire pour Devenir un guide avec nous!</h1>
                            </div>
                        </div>
                        <div class=\"col-lg-8\">
                            <div class=\"p-5\">
                                <div class=\"\">
                                    <h1 class=\"text-danger\">[Tous les cases sont obligatoire!] </h1>
                                </div>
                                {{ form_start(form) }}
                                {{ form_row(form.cin) }}
                                {{ form_row(form.imgCinFront, {
                                    label: 'Face recto de votre Cin'
                                }) }}
                                {{ form_row(form.imgCinBack, {
                                    label: 'Face verso de votre Cin'
                                }) }}
                                {{ form_row(form.cvFile, {
                                    label: 'Votre cv'
                                }) }}
                                {{ form_row(form.verifPhoto, {
                                    label: 'Votre Photo'
                                }) }}
                                {{ form_row(form.etat, { label: ' ','attr': {'class': 'hidden'} }) }}
                                {{ form_row(form.idUser, { label: ' ','attr': {'class': 'invisible'} }) }}


                                <button type=\"submit\" class=\"btn btn-warning\">Envoyer demande</button>
                                {{ form_end(form) }}


                                <a href=\"/s\">Accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


{% endblock %}
", "guide/new.html.twig", "C:\\wamp64\\www\\TourismWeb\\templates\\guide\\new.html.twig");
    }
}
