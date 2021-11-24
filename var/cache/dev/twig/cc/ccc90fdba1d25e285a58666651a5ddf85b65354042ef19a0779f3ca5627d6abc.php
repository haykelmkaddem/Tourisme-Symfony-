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

/* maison/ajax.html.twig */
class __TwigTemplate_a83387113e938d25d6bd9a0e2ec1c8789ce4c987e5bf38ed1ecad4e613cad000 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/ajax.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">

        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new RuntimeError('Variable "maisons" does not exist.', 4, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 5
            echo "            <div class=\"col-md-4\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_show", ["id" => twig_get_attribute($this->env, $this->source, $context["maison"], "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\" >

                    <div class=\"card\" style=\"width: 20rem; height: 21rem; margin-bottom: 20px\">
                        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["maison"], "image1", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                        <div class=\"card-body\">

                            <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "prix", [], "any", false, false, false, 12), "html", null, true);
            echo " DT par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "nsm", [], "any", false, false, false, 12), "html", null, true);
            echo "</h4>
                            <h6 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maison"], "adresse", [], "any", false, false, false, 13), "html", null, true);
            echo "</h6>

                        </div>
                    </div>
                </a>
            </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "
            no records found

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "maison/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  87 => 21,  74 => 13,  68 => 12,  62 => 9,  56 => 6,  53 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">

        {% for maison in maisons %}
            <div class=\"col-md-4\">
                <a href=\"{{ path('maison_show', { 'id':maison.id }) }}\" >

                    <div class=\"card\" style=\"width: 20rem; height: 21rem; margin-bottom: 20px\">
                        <img src=\"{{ asset('uploads/' ~ maison.image1) }}\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                        <div class=\"card-body\">

                            <h4 class=\"card-title\">{{ maison.prix }} DT par {{ maison.nsm }}</h4>
                            <h6 class=\"card-title\">{{ maison.adresse }}</h6>

                        </div>
                    </div>
                </a>
            </div>

        {% else %}

            no records found

        {% endfor %}

    </div>
</div>
", "maison/ajax.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\maison\\ajax.html.twig");
    }
}
