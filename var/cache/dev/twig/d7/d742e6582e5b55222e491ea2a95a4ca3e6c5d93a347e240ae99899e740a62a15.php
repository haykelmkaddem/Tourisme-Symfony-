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

/* even_approuve/evenAppDetail1.html.twig */
class __TwigTemplate_e256d3e34b65eee1dffca9cc5e9896ed057bf50ae474251f5eca274415601ead extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/evenAppDetail1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/evenAppDetail1.html.twig"));

        $this->parent = $this->loadTemplate("base1Front.html.twig", "even_approuve/evenAppDetail1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br><br><br><br><br><br><br><br>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/evenDetailCss.css"), "html", null, true);
        echo "\">
<div class=\"container\">
    <div class=\"card\">
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 7, $this->source); })()), "titreEven", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        <p>Catégorie : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 8, $this->source); })()), "CategorieEven", [], "any", false, false, false, 8), "titreCat", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
        <br>
        <div class=\"desc\">A propos l'événement : <br>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 10, $this->source); })()), "descriptionEven", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
        <br><br>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 12, $this->source); })()), "imageFilename", [], "any", false, false, false, 12))), "html", null, true);
        echo "\" style=\"max-height: 10rem; \">
        <br>
        Date événement : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 14, $this->source); })()), "dateDebutEven", [], "any", false, false, false, 14), "m/d/Y"), "html", null, true);
        echo "<br>
        Heure événement : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 15, $this->source); })()), "heureDebutEven", [], "any", false, false, false, 15), "g:ia"), "html", null, true);
        echo "
        <br><br>
        <table>
            <tr>
                <td>
                    <button class=\"btn btn-outline-success\">Participants : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_pop"]) || array_key_exists("even_pop", $context) ? $context["even_pop"] : (function () { throw new RuntimeError('Variable "even_pop" does not exist.', 20, $this->source); })()), "participants", [], "any", false, false, false, 20), "html", null, true);
        echo "</button>
                </td>
                <td>
                    <button class=\"btn btn-outline-warning\">Peut-etre : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_pop"]) || array_key_exists("even_pop", $context) ? $context["even_pop"] : (function () { throw new RuntimeError('Variable "even_pop" does not exist.', 23, $this->source); })()), "peutEtre", [], "any", false, false, false, 23), "html", null, true);
        echo "</button>
                </td>
                <td>
                    <button class=\"btn btn-outline-danger\">Je n'aime pas : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["even_pop"]) || array_key_exists("even_pop", $context) ? $context["even_pop"] : (function () { throw new RuntimeError('Variable "even_pop" does not exist.', 26, $this->source); })()), "no", [], "any", false, false, false, 26), "html", null, true);
        echo "</button>
                </td>
            </tr>
        </table>


        <br><br>
        <div class=\"actions\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participant", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">
                <button class=\"actions__like\">Participant &nbsp; <i class=\"fas fa-heart\"></i> </button>
            </a>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("peutEtre", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">
            <button class=\"actions__trade\">Peut-etre &nbsp; <i class=\"fas fa-exchange-alt\"></i> </button>
            </a>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("no", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">
            <button class=\"actions__cancel\">J'aime pas &nbsp; <i class=\"fas fa-times\"></i> </button>
            </a>
        </div>

        <div class=\"\">


                <table class=\"text-center w-100 font-weight-bolder\">
                    <tr>
                        <td><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_new_e", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" class=\"text-primary\">
                                <i class=\"fas fa-thumbs-up\"></i>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "
                            </a></td>
                        <td><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike_new_e", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["even_approuve"]) || array_key_exists("even_approuve", $context) ? $context["even_approuve"] : (function () { throw new RuntimeError('Variable "even_approuve" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"text-primary\">
                                <i class=\"fas fa-thumbs-down\"></i>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["dislikes"]) || array_key_exists("dislikes", $context) ? $context["dislikes"] : (function () { throw new RuntimeError('Variable "dislikes" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "
                            </a></td>
                    </tr>
                </table>
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
        return "even_approuve/evenAppDetail1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 54,  165 => 53,  160 => 51,  156 => 50,  143 => 40,  137 => 37,  131 => 34,  120 => 26,  114 => 23,  108 => 20,  100 => 15,  96 => 14,  91 => 12,  86 => 10,  81 => 8,  77 => 7,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1Front.html.twig' %}
{% block body %}
    <br><br><br><br><br><br><br><br>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/evenDetailCss.css') }}\">
<div class=\"container\">
    <div class=\"card\">
        <h2>{{ even_approuve.titreEven }}</h2>
        <p>Catégorie : {{ even_approuve.CategorieEven.titreCat }}</p>
        <br>
        <div class=\"desc\">A propos l'événement : <br>{{even_approuve.descriptionEven}}</div>
        <br><br>
        <img src=\"{{ asset('uploads/' ~ even_approuve.imageFilename) }}\" style=\"max-height: 10rem; \">
        <br>
        Date événement : {{ even_approuve.dateDebutEven|date(\"m/d/Y\") }}<br>
        Heure événement : {{ even_approuve.heureDebutEven|date(\"g:ia\") }}
        <br><br>
        <table>
            <tr>
                <td>
                    <button class=\"btn btn-outline-success\">Participants : {{ even_pop.participants }}</button>
                </td>
                <td>
                    <button class=\"btn btn-outline-warning\">Peut-etre : {{ even_pop.peutEtre }}</button>
                </td>
                <td>
                    <button class=\"btn btn-outline-danger\">Je n'aime pas : {{ even_pop.no }}</button>
                </td>
            </tr>
        </table>


        <br><br>
        <div class=\"actions\">
            <a href=\"{{ path('participant', {'id':even_approuve.id}) }}\">
                <button class=\"actions__like\">Participant &nbsp; <i class=\"fas fa-heart\"></i> </button>
            </a>
            <a href=\"{{ path('peutEtre', {'id':even_approuve.id}) }}\">
            <button class=\"actions__trade\">Peut-etre &nbsp; <i class=\"fas fa-exchange-alt\"></i> </button>
            </a>
            <a href=\"{{ path('no', {'id':even_approuve.id}) }}\">
            <button class=\"actions__cancel\">J'aime pas &nbsp; <i class=\"fas fa-times\"></i> </button>
            </a>
        </div>

        <div class=\"\">


                <table class=\"text-center w-100 font-weight-bolder\">
                    <tr>
                        <td><a href=\"{{ path('like_new_e', {'id': even_approuve.id }) }}\" class=\"text-primary\">
                                <i class=\"fas fa-thumbs-up\"></i>{{ likes }}
                            </a></td>
                        <td><a href=\"{{ path('dislike_new_e', {'id': even_approuve.id }) }}\" class=\"text-primary\">
                                <i class=\"fas fa-thumbs-down\"></i>{{ dislikes }}
                            </a></td>
                    </tr>
                </table>
    </div>

</div>
    </div>
    </div>
{% endblock body %}
", "even_approuve/evenAppDetail1.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_approuve\\evenAppDetail1.html.twig");
    }
}
