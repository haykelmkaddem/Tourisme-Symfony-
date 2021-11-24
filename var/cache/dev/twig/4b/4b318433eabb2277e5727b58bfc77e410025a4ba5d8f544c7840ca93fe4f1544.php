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

/* guide/index.html.twig */
class __TwigTemplate_33973a72233004eab579bddee3c3ac95b7008634fed6709f530d07ec54cb91dc extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "guide/index.html.twig", 1);
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

        echo "Guide index";
        
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
        echo "    <style>

        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        #team {
            background: #eee !important;
        }

        .btn-primary:hover,
        .btn-primary:focus {

            box-shadow: none;
            outline: none;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
            min-width: 350px;
        }

        .backside .card a {
            font-size: 18px;

        }

        .frontside .card .card-title,
        .backside .card .card-title {

        }

        .frontside .card .card-body img {
            width: 80%;
            height:220px ;
            margin-left: 10%;
            border-radius: 50%;
        }
    </style>
    <section id=\"team\" class=\"pb-5\">
        <div class=\"container\">
            <h5 class=\"section-title h1\">NOS GUIDES</h5>
            <div class=\"row\">
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 136
            echo "                    <!-- Team member -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"image-flip\" ontouchstart=\"this.classList.toggle('hover');\">
                            <div class=\"mainflip\">
                                <div class=\"frontside\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <p><img class=\" img-fluid\" src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "image", [], "any", false, false, false, 143), "html", null, true);
            echo "\" alt=\"card image\"></p>
                                            <h4 class=\"card-title\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 144), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 144), "html", null, true);
            echo "</h4>
                                            <p class=\"card-text text-center\"><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></p>
                                            <a href=\"#\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"backside\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center mt-4\">
                                            <h4 class=\"card-title\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 153), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 153), "html", null, true);
            echo "</h4>
                                            <p class=\"card-text\">
                                                ";
            // line 155
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["guide"], "descr", [], "any", false, false, false, 155), null))) {
                // line 156
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "descr", [], "any", false, false, false, 156), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 158
                echo "                                                    <h1 class=\"text-center\">Ce guide n'a pas de description.</h1>
                                                ";
            }
            // line 160
            echo "                                            </p>
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item\">
                                                    ";
            // line 163
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["guide"], "facebook", [], "any", false, false, false, 163), null))) {
                // line 164
                echo "                                                        <a class=\"social-icon text-xs-center\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "facebook", [], "any", false, false, false, 164), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-facebook\"></i>
                                                        </a>


                                                    ";
            }
            // line 170
            echo "                                                </li>

                                                <li class=\"list-inline-item\">
                                                    ";
            // line 173
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["guide"], "linkedin", [], "any", false, false, false, 173), null))) {
                // line 174
                echo "                                                        <a class=\"social-icon text-xs-center\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "linkedin", [], "any", false, false, false, 174), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-linkedin\"></i>
                                                        </a>
                                                    ";
            } else {
                // line 178
                echo "
                                                    ";
            }
            // line 180
            echo "
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    ";
            // line 183
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["guide"], "instagram", [], "any", false, false, false, 183), null))) {
                // line 184
                echo "                                                        <a class=\"social-icon text-xs-center\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "instagram", [], "any", false, false, false, 184), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-instagram\"></i>
                                                        </a>
                                                    ";
            }
            // line 188
            echo "
                                                </li>
                                            </ul>
                                            <a href=\"#\" class=\"btn btn-primary text-light btn-sm\"><i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "

            </div>
        </div>
    </section>
    <!-- Team -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "guide/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 200,  321 => 188,  313 => 184,  311 => 183,  306 => 180,  302 => 178,  294 => 174,  292 => 173,  287 => 170,  277 => 164,  275 => 163,  270 => 160,  266 => 158,  260 => 156,  258 => 155,  251 => 153,  237 => 144,  232 => 143,  223 => 136,  219 => 135,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Guide index{% endblock %}

{% block body %}
    <style>

        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        #team {
            background: #eee !important;
        }

        .btn-primary:hover,
        .btn-primary:focus {

            box-shadow: none;
            outline: none;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
            min-width: 350px;
        }

        .backside .card a {
            font-size: 18px;

        }

        .frontside .card .card-title,
        .backside .card .card-title {

        }

        .frontside .card .card-body img {
            width: 80%;
            height:220px ;
            margin-left: 10%;
            border-radius: 50%;
        }
    </style>
    <section id=\"team\" class=\"pb-5\">
        <div class=\"container\">
            <h5 class=\"section-title h1\">NOS GUIDES</h5>
            <div class=\"row\">
                {% for guide in guides %}
                    <!-- Team member -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"image-flip\" ontouchstart=\"this.classList.toggle('hover');\">
                            <div class=\"mainflip\">
                                <div class=\"frontside\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <p><img class=\" img-fluid\" src=\"{{ asset('uploads/') }}{{ guide.image }}\" alt=\"card image\"></p>
                                            <h4 class=\"card-title\">{{ guide.prenom }} {{ guide.nom }}</h4>
                                            <p class=\"card-text text-center\"><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></p>
                                            <a href=\"#\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"backside\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center mt-4\">
                                            <h4 class=\"card-title\">{{ guide.prenom }} {{ guide.nom }}</h4>
                                            <p class=\"card-text\">
                                                {% if guide.descr != null %}
                                                    {{ guide.descr }}
                                                    {% else %}
                                                    <h1 class=\"text-center\">Ce guide n'a pas de description.</h1>
                                                {% endif %}
                                            </p>
                                            <ul class=\"list-inline\">
                                                <li class=\"list-inline-item\">
                                                    {% if guide.facebook != null %}
                                                        <a class=\"social-icon text-xs-center\" target=\"_blank\" href=\"{{ guide.facebook }}\">
                                                            <i class=\"fa fa-facebook\"></i>
                                                        </a>


                                                    {% endif %}
                                                </li>

                                                <li class=\"list-inline-item\">
                                                    {% if guide.linkedin != null %}
                                                        <a class=\"social-icon text-xs-center\" target=\"_blank\" href=\"{{ guide.linkedin }}\">
                                                            <i class=\"fa fa-linkedin\"></i>
                                                        </a>
                                                    {% else %}

                                                    {% endif %}

                                                </li>
                                                <li class=\"list-inline-item\">
                                                    {% if  guide.instagram != null  %}
                                                        <a class=\"social-icon text-xs-center\" target=\"_blank\" href=\"{{ guide.instagram }}\">
                                                            <i class=\"fa fa-instagram\"></i>
                                                        </a>
                                                    {% endif %}

                                                </li>
                                            </ul>
                                            <a href=\"#\" class=\"btn btn-primary text-light btn-sm\"><i class=\"fa fa-plus\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                {% endfor %}


            </div>
        </div>
    </section>
    <!-- Team -->

{% endblock %}
", "guide/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\guide\\index.html.twig");
    }
}
