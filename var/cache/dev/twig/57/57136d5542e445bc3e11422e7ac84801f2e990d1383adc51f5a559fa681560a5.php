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

/* utilisateur/editPhoto.html.twig */
class __TwigTemplate_f544f9ba7e98559e3a88220df4c2447a60a2a31e0316ee7ca434e141860845af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/editPhoto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/editPhoto.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "utilisateur/editPhoto.html.twig", 1);
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

        echo "Edit Utilisateur";
        
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
        echo "    <style>
        body.homepage #header {
            height: 50px;
            min-height: 50px;
        }
        .bg-gradient-login{
            position: relative;
            background-image: url(\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/header.jpg"), "html", null, true);
        echo "\");
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;

        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 21
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
                <li><a href=\"/guides\">Guides</a></li>
                <li><a href=\"left-sidebar.html\">Hébergements</a></li>
                <li><a href=\"right-sidebar.html\">Evenements</a></li>


                ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 41
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">Profile</a></li>
                            ";
            // line 47
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 48
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 50
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 52
            echo "
                            <li><a class=\"dropdown-item\" href=\"#\">Devenir Prop Maison</a></li>
                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 58
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 60
        echo "
            </ul>
        </nav>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "


    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-4 d-none d-lg-block bg-gradient-login \" style=\"border-right: 1px solid #ccc\">
                                <a href=\"/utilisateur/";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "\" class=\"text-light\"><i class=\"fas fa-arrow-left\"></i></a><br>
                                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" style=\"margin-left: 10%\" width=\"80%\">
                                <br>

                                <nav id=\"nav\" style=\"margin-top:300px;\">

                                    <ul>
                                        <li class=\"text-light\">
                                            CHANGER
                                        </li>
                                    </ul>
                                    <br>
                                    <br>

                                    <a href=\"\" class=\"btn btn-light\" style=\"float: left; width: 80%\">
                                        Photo de profil
                                    </a>
                                    <br>
                                    <br>
                                    <a href=\"\" class=\"btn btn-light\" style=\"float: left; width: 75%\">
                                        Mot de passe
                                    </a>
                                </nav>
                            </div>
                            <div class=\"col-lg-8 p-5\">
                                ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start');
        echo "
                                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'widget');
        echo "
                                <button type=\"submit\" class=\"btn btn-success w-100\">modifier</button>
                                ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        echo "
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
        return "utilisateur/editPhoto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 110,  261 => 108,  257 => 107,  229 => 83,  225 => 82,  208 => 67,  198 => 66,  183 => 60,  179 => 58,  171 => 52,  167 => 50,  163 => 48,  161 => 47,  157 => 46,  150 => 41,  148 => 40,  127 => 21,  117 => 20,  99 => 12,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Edit Utilisateur{% endblock %}
{% block style %}
    <style>
        body.homepage #header {
            height: 50px;
            min-height: 50px;
        }
        .bg-gradient-login{
            position: relative;
            background-image: url(\"{{ asset('front/images/header.jpg') }}\");
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;

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
                <li><a href=\"/guides\">Guides</a></li>
                <li><a href=\"left-sidebar.html\">Hébergements</a></li>
                <li><a href=\"right-sidebar.html\">Evenements</a></li>


                {% if is_granted('ROLE_USER') %}
                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"/utilisateur/{{ app.user.id }}\">Profile</a></li>
                            {% if is_granted('ROLE_GUIDE') %}
                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            {% else %}
                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            {% endif %}

                            <li><a class=\"dropdown-item\" href=\"#\">Devenir Prop Maison</a></li>
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
                    <div class=\"card-body\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-4 d-none d-lg-block bg-gradient-login \" style=\"border-right: 1px solid #ccc\">
                                <a href=\"/utilisateur/{{ app.user.id }}\" class=\"text-light\"><i class=\"fas fa-arrow-left\"></i></a><br>
                                <img src=\"{{ asset('uploads/') }}{{ utilisateur.image }}\" alt=\"Admin\" class=\"rounded-circle\" style=\"margin-left: 10%\" width=\"80%\">
                                <br>

                                <nav id=\"nav\" style=\"margin-top:300px;\">

                                    <ul>
                                        <li class=\"text-light\">
                                            CHANGER
                                        </li>
                                    </ul>
                                    <br>
                                    <br>

                                    <a href=\"\" class=\"btn btn-light\" style=\"float: left; width: 80%\">
                                        Photo de profil
                                    </a>
                                    <br>
                                    <br>
                                    <a href=\"\" class=\"btn btn-light\" style=\"float: left; width: 75%\">
                                        Mot de passe
                                    </a>
                                </nav>
                            </div>
                            <div class=\"col-lg-8 p-5\">
                                {{ form_start(form) }}
                                {{ form_widget(form) }}
                                <button type=\"submit\" class=\"btn btn-success w-100\">modifier</button>
                                {{ form_end(form) }}
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
{% endblock %}
", "utilisateur/editPhoto.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\utilisateur\\editPhoto.html.twig");
    }
}
