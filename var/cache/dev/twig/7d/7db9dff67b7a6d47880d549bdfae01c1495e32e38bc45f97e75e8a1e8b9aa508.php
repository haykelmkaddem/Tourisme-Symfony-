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

/* reservation_maison/index.html.twig */
class __TwigTemplate_2d6024ecc83999b0fce03ab59ea9dfbe538355f7cf7e75010e4d1f555db5dcf4 extends \Twig\Template
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
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_maison/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_maison/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "reservation_maison/index.html.twig", 1);
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

        echo "ReservationMaison index";
        
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
        echo "    <h1>ReservationMaison index</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "        <div style=\"background-color: #1b9448;color: #ffffff; text-align: center\" class=\"alert alert-warning\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_maison_trier");
        echo "\">
        <select name=\"choix\">
            <option value=\"dateDebut\">Date début</option>
            <option value=\"dateFin\">Date fin</option>
        </select>
        <input type=\"submit\" value=\"Valider\">
    </form>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Proprietaire</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Maisonalouer</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_maisons"]) || array_key_exists("reservation_maisons", $context) ? $context["reservation_maisons"] : (function () { throw new RuntimeError('Variable "reservation_maisons" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_maison"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "user", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "proprietaire", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "dateDebut", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "dateDebut", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "dateFin", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "dateFin", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "maisonalouer", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_maison_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_maison_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_maison"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
        ";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservation_maisons"]) || array_key_exists("reservation_maisons", $context) ? $context["reservation_maisons"] : (function () { throw new RuntimeError('Variable "reservation_maisons" does not exist.', 53, $this->source); })()));
        echo "
    </table>

    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_maison_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_maison/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 56,  191 => 53,  188 => 52,  179 => 48,  170 => 44,  166 => 43,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  138 => 35,  133 => 34,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block title %}ReservationMaison index{% endblock %}

{% block body %}
    <h1>ReservationMaison index</h1>

    {% for message in app.flashes('message') %}
        <div style=\"background-color: #1b9448;color: #ffffff; text-align: center\" class=\"alert alert-warning\">
            {{ message }}
        </div>
    {% endfor %}
    <form method=\"post\" action=\"{{ path('reservation_maison_trier') }}\">
        <select name=\"choix\">
            <option value=\"dateDebut\">Date début</option>
            <option value=\"dateFin\">Date fin</option>
        </select>
        <input type=\"submit\" value=\"Valider\">
    </form>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Proprietaire</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Maisonalouer</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation_maison in reservation_maisons %}
            <tr>
                <td>{{ reservation_maison.id }}</td>
                <td>{{ reservation_maison.user }}</td>
                <td>{{ reservation_maison.proprietaire }}</td>
                <td>{{ reservation_maison.dateDebut ? reservation_maison.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ reservation_maison.dateFin ? reservation_maison.dateFin|date('Y-m-d') : '' }}</td>
                <td>{{ reservation_maison.maisonalouer }}</td>
                <td>
                    <a href=\"{{ path('reservation_maison_show', {'id': reservation_maison.id}) }}\">show</a>
                    <a href=\"{{ path('reservation_maison_edit', {'id': reservation_maison.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        {{ knp_pagination_render(reservation_maisons) }}
    </table>

    <a href=\"{{ path('reservation_maison_new') }}\">Create new</a>
{% endblock %}
", "reservation_maison/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\reservation_maison\\index.html.twig");
    }
}
