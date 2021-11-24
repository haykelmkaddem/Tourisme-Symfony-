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

/* even_approuve/indexFront.html.twig */
class __TwigTemplate_8b4c94985eac780555c4016064edc8a6ffe801af57b2b55843b2f7c2e0eacaa5 extends \Twig\Template
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
        return "base1Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/indexFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("base1Front.html.twig", "even_approuve/indexFront.html.twig", 1);
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

        echo "EvenApprouve index";
        
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
        echo "



<div class=\"tm-page-wrap mx-auto\">
    <div class=\"tm-container-outer\" id=\"tm-section-2\">
        ";
        // line 12
        $context["A"] = 0;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["even_approuves"]) || array_key_exists("even_approuves", $context) ? $context["even_approuves"] : (function () { throw new RuntimeError('Variable "even_approuves" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["even_approuve"]) {
            // line 14
            echo "


    ";
            // line 17
            if ((((isset($context["A"]) || array_key_exists("A", $context) ? $context["A"] : (function () { throw new RuntimeError('Variable "A" does not exist.', 17, $this->source); })()) % 2) == 0)) {
                // line 18
                echo "        <section class=\"tm-slideshow-section\">
    ";
            } else {
                // line 20
                echo "        <section class=\"clearfix tm-slideshow-section tm-slideshow-section-reverse\" style=\"margin-right: 60px;\">
    ";
            }
            // line 22
            echo "
            <div class=\"tm-slideshow\">
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["even_approuve"], "image_filename", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" alt=\"Image\" style=\"height: 400px; width: 680px;\">
            </div>
            <div class=\"tm-slideshow-description tm-bg-primary\">
                <h2 class=\"\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "titre_even", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
                <h3>Date de l'événement</h3>
                <h5>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "date_debut_even", [], "any", false, false, false, 29), "html", null, true);
            echo "</h5>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["even_approuve"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"text-uppercase tm-btn tm-btn-white tm-btn-white-primary\">Continue Reading</a>
            </div>
        </section>

    ";
            // line 34
            $context["A"] = ((isset($context["A"]) || array_key_exists("A", $context) ? $context["A"] : (function () { throw new RuntimeError('Variable "A" does not exist.', 34, $this->source); })()) + 1);
            // line 35
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['even_approuve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    </div>
</div>







    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_approuve/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 37,  145 => 35,  143 => 34,  136 => 30,  132 => 29,  127 => 27,  121 => 24,  117 => 22,  113 => 20,  109 => 18,  107 => 17,  102 => 14,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1Front.html.twig' %}

{% block title %}EvenApprouve index{% endblock %}

{% block body %}




<div class=\"tm-page-wrap mx-auto\">
    <div class=\"tm-container-outer\" id=\"tm-section-2\">
        {% set A = 0 %}
{% for even_approuve in even_approuves %}



    {% if A % 2 == 0 %}
        <section class=\"tm-slideshow-section\">
    {% else %}
        <section class=\"clearfix tm-slideshow-section tm-slideshow-section-reverse\" style=\"margin-right: 60px;\">
    {% endif %}

            <div class=\"tm-slideshow\">
                <img src=\"{{ asset('uploads/' ~ even_approuve.image_filename) }}\" alt=\"Image\" style=\"height: 400px; width: 680px;\">
            </div>
            <div class=\"tm-slideshow-description tm-bg-primary\">
                <h2 class=\"\">{{ even_approuve.titre_even }}</h2>
                <h3>Date de l'événement</h3>
                <h5>{{ even_approuve.date_debut_even }}</h5>
                <a href=\"{{ path('detail', {'id':even_approuve.id}) }}\" class=\"text-uppercase tm-btn tm-btn-white tm-btn-white-primary\">Continue Reading</a>
            </div>
        </section>

    {% set A = A+1  %}

{% endfor %}

    </div>
</div>







    {% endblock %}
", "even_approuve/indexFront.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_approuve\\indexFront.html.twig");
    }
}
