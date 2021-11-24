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

/* maison/show.html.twig */
class __TwigTemplate_eee2cdab451550fe8b41f777e2a7dd5d107092a0f4fbfe1c3d2a6f3a196d2e86 extends Template
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
        return "baseAziz.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/show.html.twig"));

        $this->parent = $this->loadTemplate("baseAziz.html.twig", "maison/show.html.twig", 1);
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
        echo "    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleTable.css"), "html", null, true);
        echo "\" />
        <style>
            td a {
                display: block;
                text-decoration: none;
            }
            td a,
            td a:focus,
            td a:hover,
            td a:active {text-decoration: none;}
        </style>
    </head>
    <div class=\"container\" style=\"margin-bottom: -40px\">
        <div class=\"right\" style=\"margin-top: 10px; margin-left: 60px\">
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\"> <button class=\"btn btn-light\" type=\"submit\" style=\"width: auto\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>RETOUR</button></a>
        </div>
    </div>
    <h1><span class=\"blue\">&lt;</span>Détails<span class=\"blue\">&gt;</span>
        <span class=\"yellow\">MAISON</span></h1>
    <h2>Votre vacance <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\" target=\"_blank\">NOTRE DEVOIR</a></h2>

    <table class=\"container\" style=\"margin-bottom: 30px\">
        <tbody>
            <tr>
                <th>Id</th>
                <td colspan=\"3\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td colspan=\"3\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nsm</th>
                <td colspan=\"3\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 40, $this->source); })()), "nsm", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td colspan=\"3\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 44, $this->source); })()), "adresse", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Check_in</th>
                <td colspan=\"3\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 48, $this->source); })()), "checkIn", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Check_out</th>
                <td colspan=\"3\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 52, $this->source); })()), "checkOut", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Piscine</th>
                <td colspan=\"3\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 56, $this->source); })()), "piscine", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bedrooms</th>
                <td colspan=\"3\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 60, $this->source); })()), "Bedrooms", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bathrooms</th>
                <td colspan=\"3\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 64, $this->source); })()), "bathrooms", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Maxppl</th>
                <td colspan=\"3\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 68, $this->source); })()), "maxppl", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Smoke</th>
                <td colspan=\"3\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 72, $this->source); })()), "smoke", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pet</th>
                <td colspan=\"3\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 76, $this->source); })()), "pet", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td colspan=\"3\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'ajout</th>
                <td colspan=\"3\">";
        // line 84
        ((twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 84, $this->source); })()), "dateAjout", [], "any", false, false, false, 84)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 84, $this->source); })()), "dateAjout", [], "any", false, false, false, 84), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Actions</th>
                ";
        // line 88
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88)))) {
            // line 89
            echo "
                <td style=\"text-align: center\"><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">MODIFIER</a></td>
                ";
        }
        // line 92
        echo "
                <td style=\"text-align: center\"><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_show_pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">IMPRIMER</a></td>
                ";
        // line 94
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)))) {
            // line 95
            echo "                <td style=\"text-align: center\">";
            echo twig_include($this->env, $context, "maison/_delete_form.html.twig");
            echo "</td>
                ";
        }
        // line 97
        echo "
            </tr>
        </tbody>
    </table>
    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction("BIOSTravel.tn"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 101,  248 => 97,  242 => 95,  240 => 94,  236 => 93,  233 => 92,  228 => 90,  225 => 89,  223 => 88,  216 => 84,  209 => 80,  202 => 76,  195 => 72,  188 => 68,  181 => 64,  174 => 60,  167 => 56,  160 => 52,  153 => 48,  146 => 44,  139 => 40,  132 => 36,  125 => 32,  116 => 26,  108 => 21,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAziz.html.twig' %}

{% block title %}Maison{% endblock %}

{% block body %}
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styleTable.css') }}\" />
        <style>
            td a {
                display: block;
                text-decoration: none;
            }
            td a,
            td a:focus,
            td a:hover,
            td a:active {text-decoration: none;}
        </style>
    </head>
    <div class=\"container\" style=\"margin-bottom: -40px\">
        <div class=\"right\" style=\"margin-top: 10px; margin-left: 60px\">
            <a href=\"{{ path('maison_index') }}\"> <button class=\"btn btn-light\" type=\"submit\" style=\"width: auto\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>RETOUR</button></a>
        </div>
    </div>
    <h1><span class=\"blue\">&lt;</span>Détails<span class=\"blue\">&gt;</span>
        <span class=\"yellow\">MAISON</span></h1>
    <h2>Votre vacance <a href=\"{{ path('maison_index') }}\" target=\"_blank\">NOTRE DEVOIR</a></h2>

    <table class=\"container\" style=\"margin-bottom: 30px\">
        <tbody>
            <tr>
                <th>Id</th>
                <td colspan=\"3\">{{ maison.id }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td colspan=\"3\">{{ maison.prix }}</td>
            </tr>
            <tr>
                <th>Nsm</th>
                <td colspan=\"3\">{{ maison.nsm }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td colspan=\"3\">{{ maison.adresse }}</td>
            </tr>
            <tr>
                <th>Check_in</th>
                <td colspan=\"3\">{{ maison.checkIn }}</td>
            </tr>
            <tr>
                <th>Check_out</th>
                <td colspan=\"3\">{{ maison.checkOut }}</td>
            </tr>
            <tr>
                <th>Piscine</th>
                <td colspan=\"3\">{{ maison.piscine }}</td>
            </tr>
            <tr>
                <th>Bedrooms</th>
                <td colspan=\"3\">{{ maison.Bedrooms }}</td>
            </tr>
            <tr>
                <th>Bathrooms</th>
                <td colspan=\"3\">{{ maison.bathrooms }}</td>
            </tr>
            <tr>
                <th>Maxppl</th>
                <td colspan=\"3\">{{ maison.maxppl }}</td>
            </tr>
            <tr>
                <th>Smoke</th>
                <td colspan=\"3\">{{ maison.smoke }}</td>
            </tr>
            <tr>
                <th>Pet</th>
                <td colspan=\"3\">{{ maison.pet }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td colspan=\"3\">{{ maison.description }}</td>
            </tr>
            <tr>
                <th>Date d'ajout</th>
                <td colspan=\"3\">{{ maison.dateAjout ? maison.dateAjout|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Actions</th>
                {% if maison.user == app.user %}

                <td style=\"text-align: center\"><a href=\"{{ path('maison_edit', {'id': maison.id}) }}\">MODIFIER</a></td>
                {% endif %}

                <td style=\"text-align: center\"><a href=\"{{ path('maison_show_pdf', {'id': maison.id}) }}\">IMPRIMER</a></td>
                {% if maison.user == app.user %}
                <td style=\"text-align: center\">{{ include('maison/_delete_form.html.twig') }}</td>
                {% endif %}

            </tr>
        </tbody>
    </table>
    <img src=\"{{qr_code_path('BIOSTravel.tn') }}\"/>
{% endblock %}

", "maison/show.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\maison\\show.html.twig");
    }
}
