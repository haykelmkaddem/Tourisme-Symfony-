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

/* even_approuve/ajax.html.twig */
class __TwigTemplate_c3d1499d9aacbde127c5121392279549dd07ababe2d048d1836a497fbb7fbeb8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/ajax.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["even_approuves"]) || array_key_exists("even_approuves", $context) ? $context["even_approuves"] : (function () { throw new RuntimeError('Variable "even_approuves" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["even_approuve"]) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["even_approuve"], "id", [], "any", false, false, false, 2)]), "html", null, true);
            echo "\" >
        <div class=\"col-md-3 \">
            <div class=\"card\" style=\"width: 20rem; height: 28rem; margin-bottom: 20px\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["even_approuve"], "imageFilename", [], "any", false, false, false, 5))), "html", null, true);
            echo "\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "titreEven", [], "any", false, false, false, 7), "html", null, true);
            echo "</h5>
                    <h6 class=\"card-title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "descriptionEven", [], "any", false, false, false, 8), "html", null, true);
            echo " </h6>


                </div>
            </div>
        </div></a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['even_approuve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "even_approuve/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  54 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for even_approuve in even_approuves %}
    <a href=\"{{ path('detail', {'id':even_approuve.id}) }}\" >
        <div class=\"col-md-3 \">
            <div class=\"card\" style=\"width: 20rem; height: 28rem; margin-bottom: 20px\">
                <img src=\"{{ asset('uploads/' ~ even_approuve.imageFilename)}}\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ even_approuve.titreEven }}</h5>
                    <h6 class=\"card-title\">{{ even_approuve.descriptionEven }} </h6>


                </div>
            </div>
        </div></a>
{% endfor %}
", "even_approuve/ajax.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_approuve\\ajax.html.twig");
    }
}
