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

/* artiste/_form.html.twig */
class __TwigTemplate_1c0ef1faedeb955bd1e27fdddcd1adace6c8809f95a3654478601794753199e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artiste/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-md-2\"></div>
    <div class=\"col-md-4\">
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nomArtiste", [], "any", false, false, false, 5), 'row', ["attr" => ["class" => "form-control , col-md-12 form-group p_star"]]);
        echo "
    </div>
    <div class=\"col-md-4\">
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "descriptionArtiste", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "form-control , col-md-12 form-group p_star"]]);
        echo "
    </div>
    <div class=\"col-md-2\"></div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-md-2\"></div>
    <div class=\"col-md-4\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "CategorieArt", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control , form-select"]]);
        echo "
    </div>
    <div class=\"col-md-4\">

    </div>
    <div class=\"col-md-2\"></div>
</div>


<br><br>
<button class=\"btn btn-secondary\" style=\"margin-left: 800px;\">";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 26, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "artiste/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  80 => 26,  67 => 16,  56 => 8,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"row\">
    <div class=\"col-md-2\"></div>
    <div class=\"col-md-4\">
{{ form_row(form.nomArtiste,{'attr': {'class': 'form-control , col-md-12 form-group p_star'}})  }}
    </div>
    <div class=\"col-md-4\">
{{ form_row(form.descriptionArtiste,{'attr': {'class': 'form-control , col-md-12 form-group p_star'}})  }}
    </div>
    <div class=\"col-md-2\"></div>
</div>
<br>
<div class=\"row\">
    <div class=\"col-md-2\"></div>
    <div class=\"col-md-4\">
        {{ form_row(form.CategorieArt,{'attr': {'class': 'form-control , form-select'}})  }}
    </div>
    <div class=\"col-md-4\">

    </div>
    <div class=\"col-md-2\"></div>
</div>


<br><br>
<button class=\"btn btn-secondary\" style=\"margin-left: 800px;\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "artiste/_form.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\artiste\\_form.html.twig");
    }
}
