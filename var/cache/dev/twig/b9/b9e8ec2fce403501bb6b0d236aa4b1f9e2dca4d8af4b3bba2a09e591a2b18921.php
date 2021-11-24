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

/* prop_maison/new.html.twig */
class __TwigTemplate_eb4879ff23055655f2742752b3dc50caa165c5b42c2a92ff06df5f3083187233 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prop_maison/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prop_maison/new.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "prop_maison/new.html.twig", 1);
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
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide_index");
        echo "\">Guides</a></li>
                <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\">Locations</a></li>
                <li><a href=\"/even/approuve/listeEvent\">Evenements</a></li>


                ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 32
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                                <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                            ";
            }
            // line 41
            echo "                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">Profile</a></li>

                            ";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 44
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 46
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 48
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
                // line 49
                echo "                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_user");
                echo "\">Mes Locations</a></li>
                            ";
            } else {
                // line 51
                echo "                                <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                            ";
            }
            // line 53
            echo "                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 57
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 59
        echo "

            </ul>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-4 d-none d-lg-block bg-prop-image \">
                                <div class=\"container p-3 text-center\"  >
                                    <p style=\"color: white;\"></p>
                                    <h1 style=\"color: white;\">Merci de remplir ce formulaire pour Ajouter vos maisons!</h1>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"p-5\">
                                    <div class=\"\">
                                        <h1 class=\"text-danger\">[Tous les cases sont obligatoire!] </h1>
                                    </div>
                                    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "cin", [], "any", false, false, false, 89), 'row');
        echo "
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "imgCinFront", [], "any", false, false, false, 90), 'row', ["label" => "Face recto de votre Cin"]);
        // line 92
        echo "
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "imgCinBack", [], "any", false, false, false, 93), 'row', ["label" => "Face verso de votre Cin"]);
        // line 95
        echo "

                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "verifPhoto", [], "any", false, false, false, 97), 'row', ["label" => "Votre Photo"]);
        // line 99
        echo "
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "etat", [], "any", false, false, false, 100), 'row', ["label" => " ", "attr" => ["class" => "hidden"]]);
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "idUser", [], "any", false, false, false, 101), 'row', ["label" => " ", "attr" => ["class" => "invisible"]]);
        echo "


                                    <button type=\"submit\" class=\"btn btn-warning\">Envoyer demande</button>
                                    ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
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
        return "prop_maison/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 105,  274 => 101,  270 => 100,  267 => 99,  265 => 97,  261 => 95,  259 => 93,  256 => 92,  254 => 90,  250 => 89,  246 => 88,  222 => 66,  212 => 65,  197 => 59,  193 => 57,  187 => 53,  183 => 51,  177 => 49,  174 => 48,  170 => 46,  166 => 44,  164 => 43,  158 => 41,  153 => 38,  151 => 37,  144 => 32,  142 => 31,  135 => 27,  131 => 26,  116 => 13,  106 => 12,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"{{ path('guide_index') }}\">Guides</a></li>
                <li><a href=\"{{ path('maison_index') }}\">Locations</a></li>
                <li><a href=\"/even/approuve/listeEvent\">Evenements</a></li>


                {% if is_granted('ROLE_USER') %}
                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            {% if is_granted('ROLE_ADMIN') %}
                                <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                            {% endif %}
                            <li><a class=\"dropdown-item\" href=\"/utilisateur/{{ app.user.id }}\">Profile</a></li>

                            {% if is_granted('ROLE_GUIDE') %}
                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            {% else %}
                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            {% endif %}
                            {% if is_granted('ROLE_PROP') %}
                                <li><a class=\"dropdown-item\" href=\"{{ path('maison_index_user') }}\">Mes Locations</a></li>
                            {% else %}
                                <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                            {% endif %}
                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                {% else %}
                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                {% endif %}


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
                            <div class=\"col-lg-4 d-none d-lg-block bg-prop-image \">
                                <div class=\"container p-3 text-center\"  >
                                    <p style=\"color: white;\"></p>
                                    <h1 style=\"color: white;\">Merci de remplir ce formulaire pour Ajouter vos maisons!</h1>
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
", "prop_maison/new.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\prop_maison\\new.html.twig");
    }
}
