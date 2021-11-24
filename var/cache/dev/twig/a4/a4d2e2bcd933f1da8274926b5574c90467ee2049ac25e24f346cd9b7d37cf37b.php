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

/* admin/users.html.twig */
class __TwigTemplate_54c9c1ad85534881aff220f5c9451bfb0773d58cfe9b4b8474b80fc6f263de44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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

        echo "Utilisateur index";
        
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
        echo "    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-2 text-gray-800\">Liste D'utilisateurs</h1>
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Roles</th>
                            <th>Naissance</th>
                            <th>Pays</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Roles</th>
                            <th>Naissance</th>
                            <th>Pays</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 45
            echo "                            <tr>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "numtel", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 53
                echo "                                    ";
                if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                    // line 54
                    echo "                                        Administrateur,
                                    ";
                } elseif ((0 === twig_compare(                // line 55
$context["role"], "ROLE_GUIDE"))) {
                    // line 56
                    echo "                                        Guide touristique,
                                    ";
                } elseif ((0 === twig_compare(                // line 57
$context["role"], "ROLE_PROP"))) {
                    // line 58
                    echo "                                        Proprietaire de maison,
                                    ";
                } elseif ((0 === twig_compare(                // line 59
$context["role"], "ROLE_USER"))) {
                    // line 60
                    echo "                                        Membre

                                    ";
                }
                // line 63
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                </td>
                                <td>";
            // line 65
            ((twig_get_attribute($this->env, $this->source, $context["utilisateur"], "datenaissance", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "datenaissance", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "pays", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                <td>";
            // line 67
            echo ((twig_get_attribute($this->env, $this->source, $context["utilisateur"], "isVerified", [], "any", false, false, false, 67)) ? ("Verifié") : ("Non verifié"));
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">show</a>
                                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                            <tr>
                                <td colspan=\"12\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_new");
        echo "\">Create new</a>
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
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 80,  228 => 78,  219 => 74,  210 => 70,  206 => 69,  201 => 67,  197 => 66,  193 => 65,  190 => 64,  184 => 63,  179 => 60,  177 => 59,  174 => 58,  172 => 57,  169 => 56,  167 => 55,  164 => 54,  161 => 53,  157 => 52,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  133 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateur index{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-2 text-gray-800\">Liste D'utilisateurs</h1>
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Roles</th>
                            <th>Naissance</th>
                            <th>Pays</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Roles</th>
                            <th>Naissance</th>
                            <th>Pays</th>
                            <th>Etat</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {% for utilisateur in utilisateurs %}
                            <tr>
                                <td>{{ utilisateur.id }}</td>
                                <td>{{ utilisateur.nom }}</td>
                                <td>{{ utilisateur.prenom }}</td>
                                <td>{{ utilisateur.email }}</td>
                                <td>{{ utilisateur.numtel }}</td>
                                <td>
                                    {% for role in utilisateur.roles  %}
                                    {% if role == \"ROLE_ADMIN\" %}
                                        Administrateur,
                                    {% elseif role == \"ROLE_GUIDE\" %}
                                        Guide touristique,
                                    {% elseif role == \"ROLE_PROP\" %}
                                        Proprietaire de maison,
                                    {% elseif role == \"ROLE_USER\" %}
                                        Membre

                                    {% endif %}
                                    {% endfor %}
                                </td>
                                <td>{{ utilisateur.datenaissance ? utilisateur.datenaissance|date('Y-m-d') : '' }}</td>
                                <td>{{ utilisateur.pays }}</td>
                                <td>{{ utilisateur.isVerified ? 'Verifié' : 'Non verifié' }}</td>
                                <td>
                                    <a href=\"{{ path('dashboard_utilisateur_show', {'id': utilisateur.id}) }}\">show</a>
                                    <a href=\"{{ path('dashboard_utilisateur_edit', {'id': utilisateur.id}) }}\">edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"12\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <a href=\"{{ path('utilisateur_new') }}\">Create new</a>
                </div>
            </div>
        </div>

    </div>


{% endblock %}

", "admin/users.html.twig", "C:\\wamp64\\www\\TourismWeb\\templates\\admin\\users.html.twig");
    }
}
