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

/* disponibilite/new.html.twig */
class __TwigTemplate_f3929b61e1b039ca6a6b9d2ac95e9b09846783c4497900566320a7606cfbe7ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disponibilite/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disponibilite/new.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "disponibilite/new.html.twig", 1);
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

        echo "New Disponibilite";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 7
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

    // line 14
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 15
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
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 35
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">Profile</a></li>
                            ";
            // line 41
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 42
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 44
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 46
            echo "
                            <li><a class=\"dropdown-item\" href=\"#\">Devenir Prop Maison</a></li>
                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 52
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 54
        echo "
            </ul>
        </nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
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
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "prenom", [], "any", false, false, false, 76), "html", null, true);
        echo "</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "roles", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 79
            echo "                                            ";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 80
                echo "                                                Administrateur,
                                            ";
            } elseif ((            // line 81
$context["role"] == "ROLE_GUIDE")) {
                // line 82
                echo "                                                Guide touristique,
                                            ";
            } elseif ((            // line 83
$context["role"] == "ROLE_USER")) {
                // line 84
                echo "                                                Membre

                                            ";
            }
            // line 87
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                                    <p class=\"text-muted font-size-sm text-center\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "pays", [], "any", false, false, false, 88), "html", null, true);
        echo "</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Disponible aussi le:
                            </h1>
                        </div>
                        <div class=\"card-body p-3\">
                            <ul class=\"list-group list-group-flush\">
                                ";
        // line 102
        echo twig_include($this->env, $context, "disponibilite/_form.html.twig");
        echo "

                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Votre disponibilité
                            </h1>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table text-center\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>De</th>
                                    <th>à</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disponibilites"]) || array_key_exists("disponibilites", $context) ? $context["disponibilites"] : (function () { throw new RuntimeError('Variable "disponibilites" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["disponibilite"]) {
            // line 129
            echo "                                    <tr>
                                        <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disponibilite"], "id", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                                        <td>";
            // line 131
            ((twig_get_attribute($this->env, $this->source, $context["disponibilite"], "date", [], "any", false, false, false, 131)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disponibilite"], "date", [], "any", false, false, false, 131), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 132
            ((twig_get_attribute($this->env, $this->source, $context["disponibilite"], "de", [], "any", false, false, false, 132)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disponibilite"], "de", [], "any", false, false, false, 132), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 133
            ((twig_get_attribute($this->env, $this->source, $context["disponibilite"], "a", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disponibilite"], "a", [], "any", false, false, false, 133), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>

                                            <a class=\"btn\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["disponibilite"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
                                            <a class=\"btn\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["disponibilite"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "                                    <tr>
                                        <td colspan=\"5\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disponibilite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                </tbody>
                            </table>


                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-12 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-header\">
                                    <h1 class=\"text-primary\">
                                        Mes demandes de guides
                                    </h1>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 160
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
            // line 161
            echo "                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User</th>
                                                <th>DateDebut</th>
                                                <th>DateFin</th>
                                                <th>Guidetouristique</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservation_guides"]) || array_key_exists("reservation_guides", $context) ? $context["reservation_guides"] : (function () { throw new RuntimeError('Variable "reservation_guides" does not exist.', 173, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reservation_guide"]) {
                // line 174
                echo "                                                <tr>
                                                    <td>";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "id", [], "any", false, false, false, 175), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "user", [], "any", false, false, false, 176), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 177
                ((twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateDebut", [], "any", false, false, false, 177)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateDebut", [], "any", false, false, false, 177), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                                                    <td>";
                // line 178
                ((twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateFin", [], "any", false, false, false, 178)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateFin", [], "any", false, false, false, 178), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                                                    <td>";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "guidetouristique", [], "any", false, false, false, 179), "html", null, true);
                echo "</td>
                                                    <td>
                                                        <a href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_guide_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "id", [], "any", false, false, false, 181)]), "html", null, true);
                echo "\">show</a>
                                                        <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_guide_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                echo "\">edit</a>
                                                    </td>
                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 186
                echo "                                                <tr>
                                                    <td colspan=\"6\">no records found</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_guide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                                            </tbody>
                                            ";
            // line 191
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservation_guides"]) || array_key_exists("reservation_guides", $context) ? $context["reservation_guides"] : (function () { throw new RuntimeError('Variable "reservation_guides" does not exist.', 191, $this->source); })()));
            echo "
                                        </table>
                                    ";
        } else {
            // line 194
            echo "                                        <p>Vous n'etes pas un guide pour devenir un guide merci de remplir
                                            <a href=\"/guide/new\" class=\"text-info\">ce formulaire.</a>
                                        </p>

                                    ";
        }
        // line 199
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





   <!--  <h1>Create new Disponibilite</h1>


    <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disponibilite_index");
        echo "\">back to list</a>
    -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disponibilite/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 221,  449 => 199,  442 => 194,  436 => 191,  433 => 190,  424 => 186,  415 => 182,  411 => 181,  406 => 179,  402 => 178,  398 => 177,  394 => 176,  390 => 175,  387 => 174,  382 => 173,  368 => 161,  366 => 160,  349 => 145,  340 => 141,  331 => 137,  327 => 136,  321 => 133,  317 => 132,  313 => 131,  309 => 130,  306 => 129,  301 => 128,  272 => 102,  255 => 88,  247 => 87,  242 => 84,  240 => 83,  237 => 82,  235 => 81,  232 => 80,  229 => 79,  225 => 78,  218 => 76,  212 => 74,  196 => 60,  186 => 59,  172 => 54,  168 => 52,  160 => 46,  156 => 44,  152 => 42,  150 => 41,  146 => 40,  139 => 35,  137 => 34,  116 => 15,  106 => 14,  90 => 7,  80 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}New Disponibilite{% endblock %}


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
                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Disponible aussi le:
                            </h1>
                        </div>
                        <div class=\"card-body p-3\">
                            <ul class=\"list-group list-group-flush\">
                                {{ include('disponibilite/_form.html.twig') }}

                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header\">
                            <h1 class=\"text-primary\">
                                Votre disponibilité
                            </h1>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table text-center\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>De</th>
                                    <th>à</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for disponibilite in disponibilites %}
                                    <tr>
                                        <td>{{ disponibilite.id }}</td>
                                        <td>{{ disponibilite.date ? disponibilite.date|date('Y-m-d') : '' }}</td>
                                        <td>{{ disponibilite.de ? disponibilite.de|date('H:i:s') : '' }}</td>
                                        <td>{{ disponibilite.a ? disponibilite.a|date('H:i:s') : '' }}</td>
                                        <td>

                                            <a class=\"btn\" href=\"{{ path('disponibilite_show', {'id': disponibilite.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                                            <a class=\"btn\" href=\"{{ path('disponibilite_edit', {'id': disponibilite.id}) }}\"><i class=\"fas fa-edit\"></i></a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-12 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-header\">
                                    <h1 class=\"text-primary\">
                                        Mes demandes de guides
                                    </h1>
                                </div>
                                <div class=\"card-body\">
                                    {% if is_granted('ROLE_GUIDE') %}
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User</th>
                                                <th>DateDebut</th>
                                                <th>DateFin</th>
                                                <th>Guidetouristique</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for reservation_guide in reservation_guides %}
                                                <tr>
                                                    <td>{{ reservation_guide.id }}</td>
                                                    <td>{{ reservation_guide.user }}</td>
                                                    <td>{{ reservation_guide.dateDebut ? reservation_guide.dateDebut|date('Y-m-d') : '' }}</td>
                                                    <td>{{ reservation_guide.dateFin ? reservation_guide.dateFin|date('Y-m-d') : '' }}</td>
                                                    <td>{{ reservation_guide.guidetouristique }}</td>
                                                    <td>
                                                        <a href=\"{{ path('reservation_guide_show', {'id': reservation_guide.id}) }}\">show</a>
                                                        <a href=\"{{ path('reservation_guide_edit', {'id': reservation_guide.id}) }}\">edit</a>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"6\">no records found</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                            {{ knp_pagination_render(reservation_guides) }}
                                        </table>
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





   <!--  <h1>Create new Disponibilite</h1>


    <a href=\"{{ path('disponibilite_index') }}\">back to list</a>
    -->


{% endblock %}
", "disponibilite/new.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\disponibilite\\new.html.twig");
    }
}
