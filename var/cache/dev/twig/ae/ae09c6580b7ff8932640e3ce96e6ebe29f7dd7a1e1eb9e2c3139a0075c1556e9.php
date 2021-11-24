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

/* admin/showuser.html.twig */
class __TwigTemplate_00f68489c413cedca16b3196e53582bc4c26603387c4db62dc03c2c7b4d6aab2 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showuser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/showuser.html.twig", 1);
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

        echo "Disponibilite";
        
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
        echo "<div class=\"container-fluid\">

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Infos de  ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), "html", null, true);
        echo "
                <div class=\"float-right\">
                    <table>
                        <tr>
                            <td><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">modifier <i class=\"fas fa-edit\"></i></a></td>
                            <td> ";
        // line 15
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "</td>
                        </tr>
                    </table>
                </div>
            </h6>
        </div>
        <div class=\"card-body\">
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Numéro de telephone</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 42, $this->source); })()), "numtel", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 47, $this->source); })()), "roles", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 48
            echo "                ";
            if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                // line 49
                echo "                    Administrateur,
                    ";
            } elseif ((0 === twig_compare(            // line 50
$context["role"], "ROLE_GUIDE"))) {
                // line 51
                echo "                        Guide touristique,
                    ";
            } elseif ((0 === twig_compare(            // line 52
$context["role"], "ROLE_USER"))) {
                // line 53
                echo "                        Membre

                ";
            }
            // line 56
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
            </td>
        </tr>
        <tr>
            <th>Date de naissance</th>
            <td>";
        // line 62
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 62, $this->source); })()), "datenaissance", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 62, $this->source); })()), "datenaissance", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th>Pays</th>
            <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 66, $this->source); })()), "pays", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>";
        // line 70
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 70, $this->source); })()), "isVerified", [], "any", false, false, false, 70)) ? ("Verifié") : ("Non verifié"));
        echo "</td>
        </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\">back to list</a>


        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/showuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 75,  206 => 70,  199 => 66,  192 => 62,  185 => 57,  179 => 56,  174 => 53,  172 => 52,  169 => 51,  167 => 50,  164 => 49,  161 => 48,  157 => 47,  149 => 42,  142 => 38,  135 => 34,  128 => 30,  121 => 26,  107 => 15,  103 => 14,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Disponibilite{% endblock %}

{% block body %}
<div class=\"container-fluid\">

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Infos de  {{ utilisateur.nom }} {{ utilisateur.prenom }}
                <div class=\"float-right\">
                    <table>
                        <tr>
                            <td><a href=\"{{ path('dashboard_utilisateur_edit', {'id': utilisateur.id}) }}\">modifier <i class=\"fas fa-edit\"></i></a></td>
                            <td> {{ include('admin/_delete_form.html.twig') }}</td>
                        </tr>
                    </table>
                </div>
            </h6>
        </div>
        <div class=\"card-body\">
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ utilisateur.id }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ utilisateur.nom }}</td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td>{{ utilisateur.prenom }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ utilisateur.email }}</td>
        </tr>
        <tr>
            <th>Numéro de telephone</th>
            <td>{{ utilisateur.numtel }}</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>
                {% for role in utilisateur.roles  %}
                {% if role == \"ROLE_ADMIN\" %}
                    Administrateur,
                    {% elseif role == \"ROLE_GUIDE\" %}
                        Guide touristique,
                    {% elseif role == \"ROLE_USER\" %}
                        Membre

                {% endif %}
                {% endfor %}

            </td>
        </tr>
        <tr>
            <th>Date de naissance</th>
            <td>{{ utilisateur.datenaissance ? utilisateur.datenaissance|date('Y-m-d') : '' }}</td>
        </tr>
        <tr>
            <th>Pays</th>
            <td>{{ utilisateur.pays }}</td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>{{ utilisateur.isVerified ? 'Verifié' : 'Non verifié' }}</td>
        </tr>
        </tbody>
    </table>

    <a href=\"{{ path('utilisateur_index') }}\">back to list</a>


        </div>
    </div>
</div>
{% endblock %}
", "admin/showuser.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\admin\\showuser.html.twig");
    }
}
