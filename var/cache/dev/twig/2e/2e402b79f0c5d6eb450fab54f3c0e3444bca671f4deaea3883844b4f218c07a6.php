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

/* reservation_guide/index.html.twig */
class __TwigTemplate_e4ba86dac3d00f9bf6058e371c9f0b027e451c755fac63f1df53378231bfd64c extends \Twig\Template
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
        return "basefrontJulia.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_guide/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_guide/index.html.twig"));

        $this->parent = $this->loadTemplate("basefrontJulia.html.twig", "reservation_guide/index.html.twig", 1);
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

        echo "ReservationGuide index";
        
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
        echo "    <h1>ReservationGuide index</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div style=\"background-color: #1b9448;color: #ffffff; text-align: center\" class=\"alert alert-warning\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_guide_trier");
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
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Guidetouristique</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_guides"]) || array_key_exists("reservation_guides", $context) ? $context["reservation_guides"] : (function () { throw new RuntimeError('Variable "reservation_guides" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_guide"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "user", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateDebut", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateDebut", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateFin", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "dateFin", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "guidetouristique", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_guide_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_guide_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation_guide"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
        ";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservation_guides"]) || array_key_exists("reservation_guides", $context) ? $context["reservation_guides"] : (function () { throw new RuntimeError('Variable "reservation_guides" does not exist.', 49, $this->source); })()));
        echo "
    </table>

    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_guide_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_guide/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 52,  184 => 49,  181 => 48,  172 => 44,  163 => 40,  159 => 39,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  135 => 32,  130 => 31,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefrontJulia.html.twig' %}

{% block title %}ReservationGuide index{% endblock %}

{% block body %}
    <h1>ReservationGuide index</h1>
    {% for message in app.flashes('message') %}
        <div style=\"background-color: #1b9448;color: #ffffff; text-align: center\" class=\"alert alert-warning\">
            {{ message }}
        </div>
    {% endfor %}
    <form method=\"post\" action=\"{{ path('reservation_guide_trier') }}\">
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

    <a href=\"{{ path('reservation_guide_new') }}\">Create new</a>
{% endblock %}
", "reservation_guide/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\reservation_guide\\index.html.twig");
    }
}
