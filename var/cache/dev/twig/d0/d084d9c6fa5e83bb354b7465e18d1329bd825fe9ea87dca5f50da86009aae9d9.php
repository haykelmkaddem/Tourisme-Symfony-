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

/* even_popularite/show.html.twig */
class __TwigTemplate_de58d1be181163280ddc66bac26729a2279c6aa39fb2e7c5378eff651815acd9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_popularite/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_popularite/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>EvenPopularite</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>EvenPopularite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_popularite"]) || array_key_exists("even_popularite", $context) ? $context["even_popularite"] : (function () { throw new RuntimeError('Variable "even_popularite" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Participants</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_popularite"]) || array_key_exists("even_popularite", $context) ? $context["even_popularite"] : (function () { throw new RuntimeError('Variable "even_popularite" does not exist.', 16, $this->source); })()), "participants", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PeutEtre</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_popularite"]) || array_key_exists("even_popularite", $context) ? $context["even_popularite"] : (function () { throw new RuntimeError('Variable "even_popularite" does not exist.', 20, $this->source); })()), "peutEtre", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>No</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_popularite"]) || array_key_exists("even_popularite", $context) ? $context["even_popularite"] : (function () { throw new RuntimeError('Variable "even_popularite" does not exist.', 24, $this->source); })()), "no", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdEven</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_popularite"]) || array_key_exists("even_popularite", $context) ? $context["even_popularite"] : (function () { throw new RuntimeError('Variable "even_popularite" does not exist.', 28, $this->source); })()), "idEven", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_popularite_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_popularite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["even_popularite"]) || array_key_exists("even_popularite", $context) ? $context["even_popularite"] : (function () { throw new RuntimeError('Variable "even_popularite" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "even_popularite/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_popularite/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  118 => 35,  113 => 33,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>EvenPopularite</title>

{% block body %}
    <h1>EvenPopularite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ even_popularite.id }}</td>
            </tr>
            <tr>
                <th>Participants</th>
                <td>{{ even_popularite.participants }}</td>
            </tr>
            <tr>
                <th>PeutEtre</th>
                <td>{{ even_popularite.peutEtre }}</td>
            </tr>
            <tr>
                <th>No</th>
                <td>{{ even_popularite.no }}</td>
            </tr>
            <tr>
                <th>IdEven</th>
                <td>{{ even_popularite.idEven }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('even_popularite_index') }}\">back to list</a>

    <a href=\"{{ path('even_popularite_edit', {'id': even_popularite.id}) }}\">edit</a>

    {{ include('even_popularite/_delete_form.html.twig') }}
{% endblock %}
", "even_popularite/show.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_popularite\\show.html.twig");
    }
}
