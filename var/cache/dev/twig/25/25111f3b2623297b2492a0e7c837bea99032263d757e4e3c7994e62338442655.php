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

/* disponibilite/edit.html.twig */
class __TwigTemplate_a7359786f239843e440716a7bbd9f35ebece606a44c087c927c5b6f1e3d7ea8d extends \Twig\Template
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
        // line 2
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disponibilite/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disponibilite/edit.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "disponibilite/edit.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier Disponibilite";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 8
        echo "     <style>
         body.homepage #header {
             height: 50px;
             min-height: 50px;
         }
     </style>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 16
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
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 36
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">Profile</a></li>
                            ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 43
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 45
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 47
            echo "
                            <li><a class=\"dropdown-item\" href=\"#\">Devenir Prop Maison</a></li>
                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 53
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 55
        echo "
            </ul>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
    <div class=\"container\">
        <div class=\"main-body mt-5 mb-5\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">

                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "image", [], "any", false, false, false, 75), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "prenom", [], "any", false, false, false, 77), "html", null, true);
        echo "</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "roles", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 80
            echo "                                            ";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 81
                echo "                                                Administrateur,
                                            ";
            } elseif ((            // line 82
$context["role"] == "ROLE_GUIDE")) {
                // line 83
                echo "                                                Guide touristique,
                                            ";
            } elseif ((            // line 84
$context["role"] == "ROLE_USER")) {
                // line 85
                echo "                                                Membre

                                            ";
            }
            // line 88
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                                    <p class=\"text-muted font-size-sm text-center\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "pays", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Votre disponibilité
                                <div class=\"float-right\">
                                    <form method=\"post\" action=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilite_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["disponibilite"]) || array_key_exists("disponibilite", $context) ? $context["disponibilite"] : (function () { throw new RuntimeError('Variable "disponibilite" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["disponibilite"]) || array_key_exists("disponibilite", $context) ? $context["disponibilite"] : (function () { throw new RuntimeError('Variable "disponibilite" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105))), "html", null, true);
        echo "\">
                                        <button class=\"text-danger\" title=\"supprimer\" style=\"padding: 0px; background: none;margin: 0px;\"> <i class=\"fas fa-trash-alt\"></i></button>
                                    </form>
                                </div>
                            </h1>

                        </div>
                        <div class=\"card-body\">


                            ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_start');
        echo "

                            <table>
                                <tr>
                                    <td>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "date", [], "any", false, false, false, 119), 'row');
        echo "</td>
                                    <td>";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "de", [], "any", false, false, false, 120), 'row');
        echo "</td>
                                    <td>  ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "a", [], "any", false, false, false, 121), 'row');
        echo "</td>
                                </tr>
                            </table>
                            <button class=\"btn btn-primary w-100\">";
        // line 124
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 124, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
                            ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        echo "
                            <br>

                            <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilite_new");
        echo "\"><h1><i class=\"fas fa-arrow-left\"></i> &nbsp Retour à la liste</h1></a>




                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

    </script>





    <!--  <h1>Create new Disponibilite</h1>


    <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilite_index");
        echo "\">back to list</a>
    -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disponibilite/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 153,  321 => 128,  315 => 125,  311 => 124,  305 => 121,  301 => 120,  297 => 119,  290 => 115,  277 => 105,  272 => 103,  255 => 89,  247 => 88,  242 => 85,  240 => 84,  237 => 83,  235 => 82,  232 => 81,  229 => 80,  225 => 79,  218 => 77,  212 => 75,  196 => 61,  186 => 60,  172 => 55,  168 => 53,  160 => 47,  156 => 45,  152 => 43,  150 => 42,  146 => 41,  139 => 36,  137 => 35,  116 => 16,  106 => 15,  90 => 8,  80 => 7,  61 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'front.html.twig' %}

{% block title %}Modifier Disponibilite{% endblock %}


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
        <div class=\"main-body mt-5 mb-5\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">

                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"{{ asset('uploads/') }}{{ app.user.image }}\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>{{ app.user.nom }} {{ app.user.prenom }}</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        {% for role in app.user.roles  %}
                                            {% if role == \"ROLE_ADMIN\" %}
                                                Administrateur,
                                            {% elseif role == \"ROLE_GUIDE\" %}
                                                Guide touristique,
                                            {% elseif role == \"ROLE_USER\" %}
                                                Membre

                                            {% endif %}
                                        {% endfor %}</p>
                                    <p class=\"text-muted font-size-sm text-center\">{{ app.user.pays }}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Votre disponibilité
                                <div class=\"float-right\">
                                    <form method=\"post\" action=\"{{ path('disponibilite_delete', {'id': disponibilite.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ disponibilite.id) }}\">
                                        <button class=\"text-danger\" title=\"supprimer\" style=\"padding: 0px; background: none;margin: 0px;\"> <i class=\"fas fa-trash-alt\"></i></button>
                                    </form>
                                </div>
                            </h1>

                        </div>
                        <div class=\"card-body\">


                            {{ form_start(form) }}

                            <table>
                                <tr>
                                    <td>{{ form_row(form.date) }}</td>
                                    <td>{{ form_row(form.de) }}</td>
                                    <td>  {{ form_row(form.a) }}</td>
                                </tr>
                            </table>
                            <button class=\"btn btn-primary w-100\">{{ button_label|default('Enregistrer') }}</button>
                            {{ form_end(form) }}
                            <br>

                            <a href=\"{{ path('disponibilite_new') }}\"><h1><i class=\"fas fa-arrow-left\"></i> &nbsp Retour à la liste</h1></a>




                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

    </script>





    <!--  <h1>Create new Disponibilite</h1>


    <a href=\"{{ path('disponibilite_index') }}\">back to list</a>
    -->


{% endblock %}
", "disponibilite/edit.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\disponibilite\\edit.html.twig");
    }
}
