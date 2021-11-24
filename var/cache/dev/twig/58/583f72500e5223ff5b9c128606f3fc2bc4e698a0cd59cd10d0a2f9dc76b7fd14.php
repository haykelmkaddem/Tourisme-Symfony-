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

/* maison/_form.html.twig */
class __TwigTemplate_c78ada69a9728f0e7a6ba530e3d9498235354d2134a22c5204002e1a9ada590a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/_form.html.twig"));

        // line 1
        echo "
<div class=\"container\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">


        <div class=\"form-group\">

            <table>
                <tr class=\"spaceUnder\">
                    <td>Nom :</td><td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Num Telephone :</td><td>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "phone", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Email </td><td>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Type de location</td><td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "TPmaison", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Lieu</td><td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "LieuMaison", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Adresse</td><td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "adresse", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Nombre de chambres à coucher :</td><td>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Bedrooms", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Nombre de salles de bain :</td><td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "bathrooms", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Nombre maximum de personnes :</td><td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "maxppl", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Le fumer est : </td><td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "smoke", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>il y a t il un piscine ? </td><td>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "piscine", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>L'aporter des animaux est : </td><td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "pet", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Check IN : </td><td>";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "check_in", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Check OUT : </td><td>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "check_out", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Prix </td><td>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "prix", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td><td> par : </td><td>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nsm", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Description : </td><td>";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>insérer une image : </td><td>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image1", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                </tr>
            </table>
            <button class=\"btn\" style=\"margin-left: 180px; width: 200px\">";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 62, $this->source); })()), "Valider", ["attr" => ["class" => "form-control"]])) : ("Valider")), "html", null, true);
        echo "</button>

        </div></div>
    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "maison/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  162 => 62,  156 => 59,  150 => 56,  142 => 53,  136 => 50,  130 => 47,  124 => 44,  118 => 41,  112 => 38,  106 => 35,  100 => 32,  94 => 29,  88 => 26,  82 => 23,  76 => 20,  70 => 17,  64 => 14,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
    {{ form_start(form) }}
    <div class=\"row\">


        <div class=\"form-group\">

            <table>
                <tr class=\"spaceUnder\">
                    <td>Nom :</td><td>{{ form_widget(form.nom,{'attr': {'class': 'form-control',}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Num Telephone :</td><td>{{ form_widget(form.phone,{'attr': {'class': 'form-control',}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Email </td><td>{{ form_widget(form.email,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Type de location</td><td>{{ form_widget(form.TPmaison,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Lieu</td><td>{{ form_widget(form.LieuMaison,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Adresse</td><td>{{ form_widget(form.adresse,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Nombre de chambres à coucher :</td><td>{{ form_widget(form.Bedrooms,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Nombre de salles de bain :</td><td>{{ form_widget(form.bathrooms,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Nombre maximum de personnes :</td><td>{{ form_widget(form.maxppl,{'attr': {'class': 'form-control',}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Le fumer est : </td><td>{{ form_widget(form.smoke,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>il y a t il un piscine ? </td><td>{{ form_widget(form.piscine,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>L'aporter des animaux est : </td><td>{{ form_widget(form.pet,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Check IN : </td><td>{{ form_widget(form.check_in,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Check OUT : </td><td>{{ form_widget(form.check_out,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Prix </td><td>{{ form_widget(form.prix,{'attr': {'class': 'form-control'}}) }}</td><td> par : </td><td>{{ form_widget(form.nsm,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>Description : </td><td>{{ form_widget(form.description,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
                <tr class=\"spaceUnder\">
                    <td>insérer une image : </td><td>{{ form_widget(form.image1,{'attr': {'class': 'form-control'}}) }}</td>
                </tr>
            </table>
            <button class=\"btn\" style=\"margin-left: 180px; width: 200px\">{{ button_label|default('Valider',{'attr': {'class': 'form-control'}}) }}</button>

        </div></div>
    {{ form_end(form) }}
</div>


", "maison/_form.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\maison\\_form.html.twig");
    }
}
