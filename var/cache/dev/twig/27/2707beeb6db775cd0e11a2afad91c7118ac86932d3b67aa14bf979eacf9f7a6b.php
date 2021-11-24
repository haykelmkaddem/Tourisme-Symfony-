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

/* utilisateur/show.html.twig */
class __TwigTemplate_8bfb85a8142f5efb1c6438397b46acebe674ef91df0adb0a16d453e2308bf04c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "utilisateur/show.html.twig", 1);
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

        echo "Utilisateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "          <style>
              body.homepage #header {
                  height: 50px;
                  min-height: 50px;
              }
              form textarea {
                  border: none !important;
              }
          </style>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 17
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
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide_index");
        echo "\">Guides</a></li>
                <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\">Locations</a></li>
                <li><a href=\"/even/approuve/listeEvent\">Evenements</a></li>


                ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 37
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "                                <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                            ";
            }
            // line 46
            echo "                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">Profile</a></li>

                            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 49
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 51
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 53
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
                // line 54
                echo "                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_user");
                echo "\">Mes Locations</a></li>
                            ";
            } else {
                // line 56
                echo "                                <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                            ";
            }
            // line 58
            echo "                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 62
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 64
        echo "
            </ul>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "    ";
        $context["isGuide"] = false;
        // line 71
        echo "    ";
        $context["isProp"] = false;
        // line 72
        echo "
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 73, $this->source); })()), "roles", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 74
            echo "        ";
            if (($context["role"] == "ROLE_GUIDE")) {
                // line 75
                echo "            ";
                $context["isGuide"] = true;
                // line 76
                echo "        ";
            } elseif (($context["role"] == "ROLE_PROP")) {
                // line 77
                echo "            ";
                $context["isProp"] = true;
                // line 78
                echo "        ";
            }
            // line 79
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    <div class=\"container\">
        <div class=\"main-body mt-5\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 92, $this->source); })()), "image", [], "any", false, false, false, 92), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 94, $this->source); })()), "nom", [], "any", false, false, false, 94), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 94, $this->source); })()), "prenom", [], "any", false, false, false, 94), "html", null, true);
        echo "</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 96, $this->source); })()), "roles", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 97
            echo "                                            ";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 98
                echo "                                                Administrateur,
                                            ";
            } elseif ((            // line 99
$context["role"] == "ROLE_GUIDE")) {
                // line 100
                echo "                                                Guide touristique,
                                            ";
            } elseif ((            // line 101
$context["role"] == "ROLE_USER")) {
                // line 102
                echo "                                                Membre

                                            ";
            }
            // line 105
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                                    <p class=\"text-muted font-size-sm text-center\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 106, $this->source); })()), "pays", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
            // line 113
            echo "                        <div class=\"card mt-3\">
                            <h6 class=\"text-center text-primary pt-3\">
                                A propos de moi
                            </h6>
                            ";
            // line 117
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapropos"]) || array_key_exists("formapropos", $context) ? $context["formapropos"] : (function () { throw new RuntimeError('Variable "formapropos" does not exist.', 117, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formapropos"]) || array_key_exists("formapropos", $context) ? $context["formapropos"] : (function () { throw new RuntimeError('Variable "formapropos" does not exist.', 118, $this->source); })()), 'widget');
            echo "
                            <button class=\"btn btn-light float-right\">";
            // line 119
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 119, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
                            ";
            // line 120
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapropos"]) || array_key_exists("formapropos", $context) ? $context["formapropos"] : (function () { throw new RuntimeError('Variable "formapropos" does not exist.', 120, $this->source); })()), 'form_end');
            echo "
                        </div>
                    ";
        }
        // line 123
        echo "                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">

                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather mr-2 icon-inline \">><path d=\"M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z\"/></svg>LinkedIn</h6>
                                <span class=\"text-secondary\">";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 128, $this->source); })()), "linkedin", [], "any", false, false, false, 128) == null)) {
            // line 129
            echo "                                    <span data-toggle=\"modal\" data-target=\"#exampleModalLinkedAdd\" class=\"text-secondary\">Ajouter</span>
                                        ";
        } else {
            // line 131
            echo "                                        <span data-toggle=\"modal\" data-target=\"#exampleModalLinkedAdd\" class=\"text-secondary\">Modifier</span>
                                    ";
        }
        // line 133
        echo "                                </span>
                            </li>

                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 138, $this->source); })()), "instagram", [], "any", false, false, false, 138) == null)) {
            // line 139
            echo "                                    <span data-toggle=\"modal\" data-target=\"#exampleModalInstaAdd\" class=\"text-secondary\">Ajouter</span>
                                        ";
        } else {
            // line 141
            echo "                                        <span data-toggle=\"modal\" data-target=\"#exampleModalInstaAdd\" class=\"text-secondary\">Modifier</span>
                                    ";
        }
        // line 143
        echo "                                </span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">";
        // line 147
        if ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 147, $this->source); })()), "facebook", [], "any", false, false, false, 147) == null)) {
            // line 148
            echo "                                    <span data-toggle=\"modal\" data-target=\"#exampleModalFacebookAdd\" class=\"text-secondary\">Ajouter</span>
                                        ";
        } else {
            // line 150
            echo "                                        <span data-toggle=\"modal\" data-target=\"#exampleModalFacebookAdd\" class=\"text-secondary\">Modifier</span>
                                    ";
        }
        // line 152
        echo "                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Mes informations
                                <a class=\"float-right\" href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162)]), "html", null, true);
        echo "\"> <i class=\"fas fa-edit\"></i> Editer</a>

                            </h1>
                        </div>
                        <div class=\"card-body\">

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 172, $this->source); })()), "nom", [], "any", false, false, false, 172), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 176, $this->source); })()), "prenom", [], "any", false, false, false, 176), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 180, $this->source); })()), "email", [], "any", false, false, false, 180), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Datenaissance</th>
                                    <td>";
        // line 184
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 184, $this->source); })()), "datenaissance", [], "any", false, false, false, 184)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 184, $this->source); })()), "datenaissance", [], "any", false, false, false, 184), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Numtel</th>
                                    <td>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 188, $this->source); })()), "numtel", [], "any", false, false, false, 188), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 192, $this->source); })()), "pays", [], "any", false, false, false, 192), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Supprimer mon compte definitifement</th>
                                    <td>  ";
        // line 196
        echo twig_include($this->env, $context, "utilisateur/_delete_form.html.twig");
        echo "</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">Mes Maisons</i></h6>
                                    ";
        // line 208
        if ((isset($context["isProp"]) || array_key_exists("isProp", $context) ? $context["isProp"] : (function () { throw new RuntimeError('Variable "isProp" does not exist.', 208, $this->source); })())) {
            // line 209
            echo "
                                    ";
        } else {
            // line 211
            echo "                                        <p>Vous n'etes pas un proprietaire de maison pour devenir un merci de remplir
                                            <a href=\"/prop/maison/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    ";
        }
        // line 216
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">Mes demandes se guides</i></h6>
                                    ";
        // line 223
        if ((isset($context["isGuide"]) || array_key_exists("isGuide", $context) ? $context["isGuide"] : (function () { throw new RuntimeError('Variable "isGuide" does not exist.', 223, $this->source); })())) {
            // line 224
            echo "
                                    ";
        } else {
            // line 226
            echo "                                        <p>Vous n'etes pas un guide pour devenir un guide merci de remplir
                                            <a href=\"/guide/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    ";
        }
        // line 231
        echo "                                </div>
                            </div>
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


    <div class=\"modal fade\" id=\"exampleModalFacebookAdd\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter le lien vers votre facebook</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
        // line 255
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfacebook"]) || array_key_exists("formfacebook", $context) ? $context["formfacebook"] : (function () { throw new RuntimeError('Variable "formfacebook" does not exist.', 255, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">

                    ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formfacebook"]) || array_key_exists("formfacebook", $context) ? $context["formfacebook"] : (function () { throw new RuntimeError('Variable "formfacebook" does not exist.', 258, $this->source); })()), 'widget');
        echo "


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">";
        // line 264
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 264, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 266
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfacebook"]) || array_key_exists("formfacebook", $context) ? $context["formfacebook"] : (function () { throw new RuntimeError('Variable "formfacebook" does not exist.', 266, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>


    <div class=\"modal fade\" id=\"exampleModalLinkedAdd\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter le lien vers votre Linkedin</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
        // line 281
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlinkedin"]) || array_key_exists("formlinkedin", $context) ? $context["formlinkedin"] : (function () { throw new RuntimeError('Variable "formlinkedin" does not exist.', 281, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">

                    ";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formlinkedin"]) || array_key_exists("formlinkedin", $context) ? $context["formlinkedin"] : (function () { throw new RuntimeError('Variable "formlinkedin" does not exist.', 284, $this->source); })()), 'widget');
        echo "


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">";
        // line 290
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 290, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 292
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlinkedin"]) || array_key_exists("formlinkedin", $context) ? $context["formlinkedin"] : (function () { throw new RuntimeError('Variable "formlinkedin" does not exist.', 292, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"exampleModalInstaAdd\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter le lien vers votre instagram</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
        // line 306
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forminstagram"]) || array_key_exists("forminstagram", $context) ? $context["forminstagram"] : (function () { throw new RuntimeError('Variable "forminstagram" does not exist.', 306, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">

                    ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["forminstagram"]) || array_key_exists("forminstagram", $context) ? $context["forminstagram"] : (function () { throw new RuntimeError('Variable "forminstagram" does not exist.', 309, $this->source); })()), 'widget');
        echo "


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">";
        // line 315
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 315, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 317
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forminstagram"]) || array_key_exists("forminstagram", $context) ? $context["forminstagram"] : (function () { throw new RuntimeError('Variable "forminstagram" does not exist.', 317, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 317,  634 => 315,  625 => 309,  619 => 306,  602 => 292,  597 => 290,  588 => 284,  582 => 281,  564 => 266,  559 => 264,  550 => 258,  544 => 255,  518 => 231,  511 => 226,  507 => 224,  505 => 223,  496 => 216,  489 => 211,  485 => 209,  483 => 208,  468 => 196,  461 => 192,  454 => 188,  447 => 184,  440 => 180,  433 => 176,  426 => 172,  413 => 162,  401 => 152,  397 => 150,  393 => 148,  391 => 147,  385 => 143,  381 => 141,  377 => 139,  375 => 138,  368 => 133,  364 => 131,  360 => 129,  358 => 128,  351 => 123,  345 => 120,  341 => 119,  337 => 118,  333 => 117,  327 => 113,  325 => 112,  316 => 106,  308 => 105,  303 => 102,  301 => 101,  298 => 100,  296 => 99,  293 => 98,  290 => 97,  286 => 96,  279 => 94,  273 => 92,  259 => 80,  253 => 79,  250 => 78,  247 => 77,  244 => 76,  241 => 75,  238 => 74,  234 => 73,  231 => 72,  228 => 71,  225 => 70,  215 => 69,  201 => 64,  197 => 62,  191 => 58,  187 => 56,  181 => 54,  178 => 53,  174 => 51,  170 => 49,  168 => 48,  162 => 46,  157 => 43,  155 => 42,  148 => 37,  146 => 36,  139 => 32,  135 => 31,  119 => 17,  109 => 16,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Utilisateur{% endblock %}

      {% block style %}
          <style>
              body.homepage #header {
                  height: 50px;
                  min-height: 50px;
              }
              form textarea {
                  border: none !important;
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
    {% set isGuide = false %}
    {% set isProp = false %}

    {% for role in utilisateur.roles  %}
        {% if role == \"ROLE_GUIDE\" %}
            {% set isGuide = true %}
        {% elseif role == \"ROLE_PROP\" %}
            {% set isProp = true %}
        {% endif %}
    {% endfor %}
    <div class=\"container\">
        <div class=\"main-body mt-5\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"{{ asset('uploads/') }}{{ utilisateur.image }}\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>{{ utilisateur.nom }} {{ utilisateur.prenom }}</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        {% for role in utilisateur.roles  %}
                                            {% if role == \"ROLE_ADMIN\" %}
                                                Administrateur,
                                            {% elseif role == \"ROLE_GUIDE\" %}
                                                Guide touristique,
                                            {% elseif role == \"ROLE_USER\" %}
                                                Membre

                                            {% endif %}
                                        {% endfor %}</p>
                                    <p class=\"text-muted font-size-sm text-center\">{{ utilisateur.pays }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    {% if is_granted('ROLE_GUIDE') %}
                        <div class=\"card mt-3\">
                            <h6 class=\"text-center text-primary pt-3\">
                                A propos de moi
                            </h6>
                            {{ form_start(formapropos) }}
                            {{ form_widget(formapropos) }}
                            <button class=\"btn btn-light float-right\">{{ button_label|default('Save') }}</button>
                            {{ form_end(formapropos) }}
                        </div>
                    {% endif %}
                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">

                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather mr-2 icon-inline \">><path d=\"M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z\"/></svg>LinkedIn</h6>
                                <span class=\"text-secondary\">{% if utilisateur.linkedin == null %}
                                    <span data-toggle=\"modal\" data-target=\"#exampleModalLinkedAdd\" class=\"text-secondary\">Ajouter</span>
                                        {% else %}
                                        <span data-toggle=\"modal\" data-target=\"#exampleModalLinkedAdd\" class=\"text-secondary\">Modifier</span>
                                    {% endif %}
                                </span>
                            </li>

                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">{% if utilisateur.instagram == null %}
                                    <span data-toggle=\"modal\" data-target=\"#exampleModalInstaAdd\" class=\"text-secondary\">Ajouter</span>
                                        {% else %}
                                        <span data-toggle=\"modal\" data-target=\"#exampleModalInstaAdd\" class=\"text-secondary\">Modifier</span>
                                    {% endif %}
                                </span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">{% if utilisateur.facebook == null %}
                                    <span data-toggle=\"modal\" data-target=\"#exampleModalFacebookAdd\" class=\"text-secondary\">Ajouter</span>
                                        {% else %}
                                        <span data-toggle=\"modal\" data-target=\"#exampleModalFacebookAdd\" class=\"text-secondary\">Modifier</span>
                                    {% endif %}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Mes informations
                                <a class=\"float-right\" href=\"{{ path('utilisateur_edit', {'id': utilisateur.id}) }}\"> <i class=\"fas fa-edit\"></i> Editer</a>

                            </h1>
                        </div>
                        <div class=\"card-body\">

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ utilisateur.nom }}</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>{{ utilisateur.prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ utilisateur.email }}</td>
                                </tr>
                                <tr>
                                    <th>Datenaissance</th>
                                    <td>{{ utilisateur.datenaissance ? utilisateur.datenaissance|date('Y-m-d') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Numtel</th>
                                    <td>{{ utilisateur.numtel }}</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>{{ utilisateur.pays }}</td>
                                </tr>
                                <tr>
                                    <th>Supprimer mon compte definitifement</th>
                                    <td>  {{ include('utilisateur/_delete_form.html.twig') }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">Mes Maisons</i></h6>
                                    {% if isProp %}

                                    {% else%}
                                        <p>Vous n'etes pas un proprietaire de maison pour devenir un merci de remplir
                                            <a href=\"/prop/maison/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">Mes demandes se guides</i></h6>
                                    {% if isGuide %}

                                    {% else%}
                                        <p>Vous n'etes pas un guide pour devenir un guide merci de remplir
                                            <a href=\"/guide/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    {% endif %}
                                </div>
                            </div>
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


    <div class=\"modal fade\" id=\"exampleModalFacebookAdd\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter le lien vers votre facebook</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {{ form_start(formfacebook) }}
                <div class=\"modal-body\">

                    {{ form_widget(formfacebook) }}


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">{{ button_label|default('Save') }}</button>
                </div>
                {{ form_end(formfacebook) }}
            </div>
        </div>
    </div>


    <div class=\"modal fade\" id=\"exampleModalLinkedAdd\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter le lien vers votre Linkedin</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {{ form_start(formlinkedin) }}
                <div class=\"modal-body\">

                    {{ form_widget(formlinkedin) }}


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">{{ button_label|default('Save') }}</button>
                </div>
                {{ form_end(formlinkedin) }}
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"exampleModalInstaAdd\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter le lien vers votre instagram</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {{ form_start(forminstagram) }}
                <div class=\"modal-body\">

                    {{ form_widget(forminstagram) }}


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">{{ button_label|default('Save') }}</button>
                </div>
                {{ form_end(forminstagram) }}
            </div>
        </div>
    </div>

{% endblock %}
", "utilisateur/show.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\utilisateur\\show.html.twig");
    }
}
