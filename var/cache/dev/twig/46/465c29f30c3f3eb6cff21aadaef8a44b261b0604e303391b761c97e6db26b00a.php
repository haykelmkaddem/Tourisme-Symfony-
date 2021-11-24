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

/* guide/show1.html.twig */
class __TwigTemplate_bc08e7a1fb03d1e787836b3ef2215056426ee425ca09f3c6e5bb1ffaa4aa4440 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseSyrine.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/show1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/show1.html.twig"));

        $this->parent = $this->loadTemplate("baseSyrine.html.twig", "guide/show1.html.twig", 1);
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

        echo "Guide";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 5
        echo "    <style>
        .bg-image{
            position: relative;
            background-image: url(\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
        echo "\");
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;

        }
        .ratingtop .rating div.star-full {
            font-size: small !important;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-3 d-none d-lg-block bg-light\">
                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" style=\"width: 80%;margin-left: 10%;margin-top: 2rem;\">
                                <a href=\"/reservation/guide/new/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"btn btn-primary w-50\" style=\"margin-left: 25%\">Reserver</a>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h3>
                                            ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        echo "
                                            ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "
                                            <br>
                                            <br>
                                        </h3>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>
                                                <b>
                                                    A propos:
                                                </b>
                                            </td>
                                            <td>
                                                ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 54, $this->source); })()), "descr", [], "any", false, false, false, 54), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>
                                                    Disponible le:
                                                </b>
                                            </td>
                                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disp"]) || array_key_exists("disp", $context) ? $context["disp"] : (function () { throw new RuntimeError('Variable "disp" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
            // line 64
            echo "                                            <td>
                                                - ";
            // line 65
            echo twig_escape_filter($this->env, $context["dis"], "html", null, true);
            echo " <br>
                                            </td>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

                                        </tr>
                                    </table>


                                </div>
                            </div>
                            <div class=\"col-lg-5 p-5\">
                                <div class=\"\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["avisN"]) || array_key_exists("avisN", $context) ? $context["avisN"] : (function () { throw new RuntimeError('Variable "avisN" does not exist.', 78, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["avisNs"]) {
            // line 79
            echo "

                                        <div class=\"w-25 float-left\">
                                            ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avisNs"], "IdUtilisateur", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82), "html", null, true);
            echo "
                                        </div>
                                        <div class=\"w-75 float-left\">
                                            <div class=\"ratingtop\">
                                                ";
            // line 86
            echo $this->extensions['blackknight467\StarRatingBundle\Extensions\StarRatingExtension']->rating(twig_get_attribute($this->env, $this->source, $context["avisNs"], "note", [], "any", false, false, false, 86));
            echo "
                                            </div>
                                        </div>
                                        <div class=\"w-100\">
                                            ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avisNs"], "commentaire", [], "any", false, false, false, 90), "html", null, true);
            echo "
                                        </div>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avisNs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </div>
                                <div>
                                    <h3>
                                        Avis
                                    </h3>
                                    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_start');
        echo "

                                    <table class=\"text-center w-100\">

                                        <tr>
                                            <td>
                                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "note", [], "any", false, false, false, 105), 'row');
        echo "
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                    </table>
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "commentaire", [], "any", false, false, false, 112), 'row');
        echo "
                                    <br>

                                    <button class=\"btn btn-warning\">";
        // line 115
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 115, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                                    ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "


                                    <table class=\"text-center w-100\">
                                        <tr>
                                            <td><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_new_g", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 122, $this->source); })()), "id", [], "any", false, false, false, 122)]), "html", null, true);
        echo "\" class=\"text-primary\">
                                                    <i class=\"fas fa-thumbs-up\"></i>";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "
                                                </a></td>
                                            <td><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike_new_g", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
        echo "\" class=\"text-primary\">
                                                    <i class=\"fas fa-thumbs-down\"></i>";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["dislikes"]) || array_key_exists("dislikes", $context) ? $context["dislikes"] : (function () { throw new RuntimeError('Variable "dislikes" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "
                                                </a></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
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
        return "guide/show1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 126,  302 => 125,  297 => 123,  293 => 122,  285 => 117,  280 => 115,  274 => 112,  264 => 105,  255 => 99,  248 => 94,  238 => 90,  231 => 86,  224 => 82,  219 => 79,  215 => 78,  203 => 68,  194 => 65,  191 => 64,  187 => 63,  175 => 54,  158 => 40,  154 => 39,  145 => 33,  140 => 32,  126 => 20,  116 => 19,  94 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseSyrine.html.twig' %}

{% block title %}Guide{% endblock %}
{% block style %}
    <style>
        .bg-image{
            position: relative;
            background-image: url(\"{{ asset('uploads/') }}{{ guide.image }}\");
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;

        }
        .ratingtop .rating div.star-full {
            font-size: small !important;
        }
    </style>
{% endblock %}
{% block body %}
    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-3 d-none d-lg-block bg-light\">
                                <img src=\"{{ asset('uploads/') }}{{ guide.image }}\" alt=\"Admin\" class=\"rounded-circle\" style=\"width: 80%;margin-left: 10%;margin-top: 2rem;\">
                                <a href=\"/reservation/guide/new/{{ guide.id }}\" class=\"btn btn-primary w-50\" style=\"margin-left: 25%\">Reserver</a>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h3>
                                            {{ guide.nom }}
                                            {{ guide.prenom }}
                                            <br>
                                            <br>
                                        </h3>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>
                                                <b>
                                                    A propos:
                                                </b>
                                            </td>
                                            <td>
                                                {{ guide.descr }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>
                                                    Disponible le:
                                                </b>
                                            </td>
                                        {% for dis in disp %}
                                            <td>
                                                - {{ dis }} <br>
                                            </td>
                                        {% endfor %}


                                        </tr>
                                    </table>


                                </div>
                            </div>
                            <div class=\"col-lg-5 p-5\">
                                <div class=\"\">
                                    {% for avisNs in avisN|slice(0, 5) %}


                                        <div class=\"w-25 float-left\">
                                            {{ avisNs.IdUtilisateur.nom }}
                                        </div>
                                        <div class=\"w-75 float-left\">
                                            <div class=\"ratingtop\">
                                                {{ avisNs.note|rating }}
                                            </div>
                                        </div>
                                        <div class=\"w-100\">
                                            {{ avisNs.commentaire }}
                                        </div>

                                    {% endfor %}
                                </div>
                                <div>
                                    <h3>
                                        Avis
                                    </h3>
                                    {{ form_start(form) }}

                                    <table class=\"text-center w-100\">

                                        <tr>
                                            <td>
                                                {{ form_row(form.note) }}
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                    </table>
                                    {{  form_row(form.commentaire) }}
                                    <br>

                                    <button class=\"btn btn-warning\">{{ button_label|default('Save') }}</button>

                                    {{ form_end(form) }}


                                    <table class=\"text-center w-100\">
                                        <tr>
                                            <td><a href=\"{{ path('like_new_g', {'id': guide.id }) }}\" class=\"text-primary\">
                                                    <i class=\"fas fa-thumbs-up\"></i>{{ likes }}
                                                </a></td>
                                            <td><a href=\"{{ path('dislike_new_g', {'id': guide.id }) }}\" class=\"text-primary\">
                                                    <i class=\"fas fa-thumbs-down\"></i>{{ dislikes }}
                                                </a></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

{% endblock %}
", "guide/show1.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\guide\\show1.html.twig");
    }
}
