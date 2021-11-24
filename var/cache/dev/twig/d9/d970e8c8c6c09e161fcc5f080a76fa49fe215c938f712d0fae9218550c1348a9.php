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
class __TwigTemplate_e856253fb7a4bd7b14f8e135776036ca3efa5ee25147e9861d046f817bafa201 extends Template
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
                <li><a href=\"/guides\">Guides</a></li>
                <li><a href=\"left-sidebar.html\">Hébergements</a></li>
                <li><a href=\"right-sidebar.html\">Evenements</a></li>


                ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 37
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
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
            echo "
                            <li><a class=\"dropdown-item\" href=\"#\">Devenir Prop Maison</a></li>
                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 54
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 56
        echo "
            </ul>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "    ";
        $context["isGuide"] = false;
        // line 63
        echo "    ";
        $context["isProp"] = false;
        // line 64
        echo "
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 65, $this->source); })()), "roles", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 66
            echo "        ";
            if ((0 === twig_compare($context["role"], "ROLE_GUIDE"))) {
                // line 67
                echo "            ";
                $context["isGuide"] = true;
                // line 68
                echo "        ";
            } elseif ((0 === twig_compare($context["role"], "ROLE_PROP"))) {
                // line 69
                echo "            ";
                $context["isProp"] = true;
                // line 70
                echo "        ";
            }
            // line 71
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 84, $this->source); })()), "image", [], "any", false, false, false, 84), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 86, $this->source); })()), "nom", [], "any", false, false, false, 86), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 86, $this->source); })()), "prenom", [], "any", false, false, false, 86), "html", null, true);
        echo "</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 88, $this->source); })()), "roles", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 89
            echo "                                            ";
            if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                // line 90
                echo "                                                Administrateur,
                                            ";
            } elseif ((0 === twig_compare(            // line 91
$context["role"], "ROLE_GUIDE"))) {
                // line 92
                echo "                                                Guide touristique,
                                            ";
            } elseif ((0 === twig_compare(            // line 93
$context["role"], "ROLE_USER"))) {
                // line 94
                echo "                                                Membre

                                            ";
            }
            // line 97
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                                    <p class=\"text-muted font-size-sm text-center\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 98, $this->source); })()), "pays", [], "any", false, false, false, 98), "html", null, true);
        echo "</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 104
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
            // line 105
            echo "                        <div class=\"card mt-3\">
                            <h6 class=\"text-center text-primary pt-3\">
                                A propos de moi
                            </h6>
                            ";
            // line 109
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapropos"]) || array_key_exists("formapropos", $context) ? $context["formapropos"] : (function () { throw new RuntimeError('Variable "formapropos" does not exist.', 109, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formapropos"]) || array_key_exists("formapropos", $context) ? $context["formapropos"] : (function () { throw new RuntimeError('Variable "formapropos" does not exist.', 110, $this->source); })()), 'widget');
            echo "
                            <button class=\"btn btn-light float-right\">";
            // line 111
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 111, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
                            ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formapropos"]) || array_key_exists("formapropos", $context) ? $context["formapropos"] : (function () { throw new RuntimeError('Variable "formapropos" does not exist.', 112, $this->source); })()), 'form_end');
            echo "
                        </div>
                    ";
        }
        // line 115
        echo "                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">

                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather mr-2 icon-inline \">><path d=\"M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z\"/></svg>LinkedIn</h6>
                                <span class=\"text-secondary\">";
        // line 120
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 120, $this->source); })()), "linkedin", [], "any", false, false, false, 120), null))) {
            // line 121
            echo "                                    <span data-toggle=\"modal\" data-target=\"#exampleModalLinkedAdd\" class=\"text-secondary\">Ajouter</span>
                                        ";
        } else {
            // line 123
            echo "                                        <span data-toggle=\"modal\" data-target=\"#exampleModalLinkedAdd\" class=\"text-secondary\">Modifier</span>
                                    ";
        }
        // line 125
        echo "                                </span>
                            </li>

                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">";
        // line 130
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 130, $this->source); })()), "instagram", [], "any", false, false, false, 130), null))) {
            // line 131
            echo "                                    <span data-toggle=\"modal\" data-target=\"#exampleModalInstaAdd\" class=\"text-secondary\">Ajouter</span>
                                        ";
        } else {
            // line 133
            echo "                                        <span data-toggle=\"modal\" data-target=\"#exampleModalInstaAdd\" class=\"text-secondary\">Modifier</span>
                                    ";
        }
        // line 135
        echo "                                </span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">";
        // line 139
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 139, $this->source); })()), "facebook", [], "any", false, false, false, 139), null))) {
            // line 140
            echo "                                    <span data-toggle=\"modal\" data-target=\"#exampleModalFacebookAdd\" class=\"text-secondary\">Ajouter</span>
                                        ";
        } else {
            // line 142
            echo "                                        <span data-toggle=\"modal\" data-target=\"#exampleModalFacebookAdd\" class=\"text-secondary\">Modifier</span>
                                    ";
        }
        // line 144
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
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)]), "html", null, true);
        echo "\"> <i class=\"fas fa-edit\"></i> Editer</a>

                            </h1>
                        </div>
                        <div class=\"card-body\">

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 164, $this->source); })()), "nom", [], "any", false, false, false, 164), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 168, $this->source); })()), "prenom", [], "any", false, false, false, 168), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 172, $this->source); })()), "email", [], "any", false, false, false, 172), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Datenaissance</th>
                                    <td>";
        // line 176
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 176, $this->source); })()), "datenaissance", [], "any", false, false, false, 176)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 176, $this->source); })()), "datenaissance", [], "any", false, false, false, 176), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Numtel</th>
                                    <td>";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 180, $this->source); })()), "numtel", [], "any", false, false, false, 180), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 184, $this->source); })()), "pays", [], "any", false, false, false, 184), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Supprimer mon compte definitifement</th>
                                    <td>  ";
        // line 188
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
        // line 200
        if ((isset($context["isProp"]) || array_key_exists("isProp", $context) ? $context["isProp"] : (function () { throw new RuntimeError('Variable "isProp" does not exist.', 200, $this->source); })())) {
            // line 201
            echo "
                                    ";
        } else {
            // line 203
            echo "                                        <p>Vous n'etes pas un proprietaire de maison pour devenir un merci de remplir
                                            <a href=\"/prop/maison/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    ";
        }
        // line 208
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">Mes demandes se guides</i></h6>
                                    ";
        // line 215
        if ((isset($context["isGuide"]) || array_key_exists("isGuide", $context) ? $context["isGuide"] : (function () { throw new RuntimeError('Variable "isGuide" does not exist.', 215, $this->source); })())) {
            // line 216
            echo "
                                    ";
        } else {
            // line 218
            echo "                                        <p>Vous n'etes pas un guide pour devenir un guide merci de remplir
                                            <a href=\"/guide/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    ";
        }
        // line 223
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
        // line 247
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfacebook"]) || array_key_exists("formfacebook", $context) ? $context["formfacebook"] : (function () { throw new RuntimeError('Variable "formfacebook" does not exist.', 247, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">

                    ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formfacebook"]) || array_key_exists("formfacebook", $context) ? $context["formfacebook"] : (function () { throw new RuntimeError('Variable "formfacebook" does not exist.', 250, $this->source); })()), 'widget');
        echo "


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">";
        // line 256
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 256, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 258
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfacebook"]) || array_key_exists("formfacebook", $context) ? $context["formfacebook"] : (function () { throw new RuntimeError('Variable "formfacebook" does not exist.', 258, $this->source); })()), 'form_end');
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
        // line 273
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlinkedin"]) || array_key_exists("formlinkedin", $context) ? $context["formlinkedin"] : (function () { throw new RuntimeError('Variable "formlinkedin" does not exist.', 273, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">

                    ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formlinkedin"]) || array_key_exists("formlinkedin", $context) ? $context["formlinkedin"] : (function () { throw new RuntimeError('Variable "formlinkedin" does not exist.', 276, $this->source); })()), 'widget');
        echo "


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">";
        // line 282
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 282, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 284
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlinkedin"]) || array_key_exists("formlinkedin", $context) ? $context["formlinkedin"] : (function () { throw new RuntimeError('Variable "formlinkedin" does not exist.', 284, $this->source); })()), 'form_end');
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
        // line 298
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forminstagram"]) || array_key_exists("forminstagram", $context) ? $context["forminstagram"] : (function () { throw new RuntimeError('Variable "forminstagram" does not exist.', 298, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">

                    ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["forminstagram"]) || array_key_exists("forminstagram", $context) ? $context["forminstagram"] : (function () { throw new RuntimeError('Variable "forminstagram" does not exist.', 301, $this->source); })()), 'widget');
        echo "


                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button class=\"btn\">";
        // line 307
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 307, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forminstagram"]) || array_key_exists("forminstagram", $context) ? $context["forminstagram"] : (function () { throw new RuntimeError('Variable "forminstagram" does not exist.', 309, $this->source); })()), 'form_end');
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
        return array (  613 => 309,  608 => 307,  599 => 301,  593 => 298,  576 => 284,  571 => 282,  562 => 276,  556 => 273,  538 => 258,  533 => 256,  524 => 250,  518 => 247,  492 => 223,  485 => 218,  481 => 216,  479 => 215,  470 => 208,  463 => 203,  459 => 201,  457 => 200,  442 => 188,  435 => 184,  428 => 180,  421 => 176,  414 => 172,  407 => 168,  400 => 164,  387 => 154,  375 => 144,  371 => 142,  367 => 140,  365 => 139,  359 => 135,  355 => 133,  351 => 131,  349 => 130,  342 => 125,  338 => 123,  334 => 121,  332 => 120,  325 => 115,  319 => 112,  315 => 111,  311 => 110,  307 => 109,  301 => 105,  299 => 104,  290 => 98,  282 => 97,  277 => 94,  275 => 93,  272 => 92,  270 => 91,  267 => 90,  264 => 89,  260 => 88,  253 => 86,  247 => 84,  233 => 72,  227 => 71,  224 => 70,  221 => 69,  218 => 68,  215 => 67,  212 => 66,  208 => 65,  205 => 64,  202 => 63,  199 => 62,  189 => 61,  175 => 56,  171 => 54,  163 => 48,  159 => 46,  155 => 44,  153 => 43,  149 => 42,  142 => 37,  140 => 36,  119 => 17,  109 => 16,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
