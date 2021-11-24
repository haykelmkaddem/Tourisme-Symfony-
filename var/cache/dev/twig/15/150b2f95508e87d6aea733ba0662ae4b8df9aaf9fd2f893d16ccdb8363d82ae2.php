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

/* admin/showguide.html.twig */
class __TwigTemplate_87176b8e4ef0cd2957e7f56bafdb8219c2a7f5c44032b95b36615cf2efd06aac extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showguide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showguide.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/showguide.html.twig", 1);
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
        #image {
            min-height:500px;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }



        .modal-body {
            position:relative;
            padding:0px;
            min-height:400px;
            background:#ccc;
        }




        .close {
            position:absolute;
            right:-30px;
            top:0;
            z-index:999;
            font-size:2rem;
            font-weight: normal;
            color:#fff;
            opacity:1;
        }

    </style>
    <div class=\"container\">
        <div class=\"container-fluid\">
            <div class=\"card shadow mb-4 pb-5\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 44, $this->source); })()), "idUser", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 44, $this->source); })()), "idUser", [], "any", false, false, false, 44), "prenom", [], "any", false, false, false, 44), "html", null, true);
        echo "
                    <div class=\"float-right\">
                        CIN:
                        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 47, $this->source); })()), "cin", [], "any", false, false, false, 47), "html", null, true);
        echo "
                    </div>
                    </h6>
                </div>
                <div class=\"card-body\">
        <h1></h1>
                    <a class=\"btn btn-primary\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_guide");
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>

                    <a class=\"btn btn-warning\" style=\"width: 70px;\"  href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_utilisateur_affectguide", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 55, $this->source); })()), "IdUser", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\"><i class=\"fas fa-cog\"></i></a>
                    <hr>
                    <br>
        <div class=\"gallery\">
            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 59, $this->source); })()), "imgCinFront", [], "any", false, false, false, 59), "html", null, true);
        echo "\" alt=\"\" style=\"width: 30%; height: 150px; margin-left:4%;  border-radius:5px;\" data-toggle=\"modal\" data-bigimage=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 59, $this->source); })()), "imgCinFront", [], "any", false, false, false, 59), "html", null, true);
        echo "\" data-target=\"#myModal\" class=\"img-fluid \">
            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 60, $this->source); })()), "imgCinBack", [], "any", false, false, false, 60), "html", null, true);
        echo "\" alt=\"\" style=\"width: 30%; height: 150px; border-radius:5px;\" data-toggle=\"modal\" data-bigimage=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 60, $this->source); })()), "imgCinBack", [], "any", false, false, false, 60), "html", null, true);
        echo "\"  data-target=\"#myModal\" class=\"img-fluid\">
            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 61, $this->source); })()), "verifPhoto", [], "any", false, false, false, 61), "html", null, true);
        echo "\" alt=\"\" style=\"width: 30%; height: 150px; margin-right:4%;  border-radius:5px;\" data-toggle=\"modal\" data-bigimage=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 61, $this->source); })()), "verifPhoto", [], "any", false, false, false, 61), "html", null, true);
        echo "\"  data-target=\"#myModal\" class=\"img-fluid \">
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">


                    <div class=\"modal-body\">

                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>

                        <img src=\"//media.tenor.com/images/556e9ff845b7dd0c62dcdbbb00babb4b/tenor.gif\" alt=\"\" id=\"image\" class=\"img-fluid\">



                    </div>

                </div>
            </div>
        </div>



    </div>

    <!---->



            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {

// Gets the video src from the data-src on each button
            var \$imageSrc;
            \$('.gallery img').click(function() {
                \$imageSrc = \$(this).data('bigimage');
            });
            console.log(\$imageSrc);



// when the modal is opened autoplay it
            \$('#myModal').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

                \$(\"#image\").attr('src', \$imageSrc  );
            })


// reset the modal image
            \$('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                \$(\"#image\").attr('src','');
            })






// document ready
        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/showguide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 106,  242 => 105,  238 => 104,  234 => 103,  230 => 102,  226 => 101,  222 => 100,  218 => 99,  173 => 61,  165 => 60,  157 => 59,  150 => 55,  145 => 53,  136 => 47,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Guide{% endblock %}

{% block body %}
    <style>
        #image {
            min-height:500px;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }



        .modal-body {
            position:relative;
            padding:0px;
            min-height:400px;
            background:#ccc;
        }




        .close {
            position:absolute;
            right:-30px;
            top:0;
            z-index:999;
            font-size:2rem;
            font-weight: normal;
            color:#fff;
            opacity:1;
        }

    </style>
    <div class=\"container\">
        <div class=\"container-fluid\">
            <div class=\"card shadow mb-4 pb-5\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">{{ guide.idUser.nom }} {{ guide.idUser.prenom }}
                    <div class=\"float-right\">
                        CIN:
                        {{ guide.cin }}
                    </div>
                    </h6>
                </div>
                <div class=\"card-body\">
        <h1></h1>
                    <a class=\"btn btn-primary\" href=\"{{ path('dashboard_guide') }}\"><i class=\"fas fa-arrow-left\"></i></a>

                    <a class=\"btn btn-warning\" style=\"width: 70px;\"  href=\"{{ path('dashboard_utilisateur_affectguide', {'id': guide.IdUser.id}) }}\"><i class=\"fas fa-cog\"></i></a>
                    <hr>
                    <br>
        <div class=\"gallery\">
            <img src=\"{{ asset('uploads/') }}{{ guide.imgCinFront }}\" alt=\"\" style=\"width: 30%; height: 150px; margin-left:4%;  border-radius:5px;\" data-toggle=\"modal\" data-bigimage=\"{{ asset('uploads/') }}{{ guide.imgCinFront }}\" data-target=\"#myModal\" class=\"img-fluid \">
            <img src=\"{{ asset('uploads/') }}{{ guide.imgCinBack }}\" alt=\"\" style=\"width: 30%; height: 150px; border-radius:5px;\" data-toggle=\"modal\" data-bigimage=\"{{ asset('uploads/') }}{{ guide.imgCinBack }}\"  data-target=\"#myModal\" class=\"img-fluid\">
            <img src=\"{{ asset('uploads/') }}{{ guide.verifPhoto }}\" alt=\"\" style=\"width: 30%; height: 150px; margin-right:4%;  border-radius:5px;\" data-toggle=\"modal\" data-bigimage=\"{{ asset('uploads/') }}{{ guide.verifPhoto }}\"  data-target=\"#myModal\" class=\"img-fluid \">
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">


                    <div class=\"modal-body\">

                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>

                        <img src=\"//media.tenor.com/images/556e9ff845b7dd0c62dcdbbb00babb4b/tenor.gif\" alt=\"\" id=\"image\" class=\"img-fluid\">



                    </div>

                </div>
            </div>
        </div>



    </div>

    <!---->



            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src=\"{{ asset('front/assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/jquery.dropotron.min.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/jquery.scrolly.min.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/jquery.scrollex.min.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/browser.min.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/breakpoints.min.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/util.js') }}\"></script>
    <script src=\"{{ asset('front/assets/js/main.js') }}\"></script>
    <script>
        \$(document).ready(function() {

// Gets the video src from the data-src on each button
            var \$imageSrc;
            \$('.gallery img').click(function() {
                \$imageSrc = \$(this).data('bigimage');
            });
            console.log(\$imageSrc);



// when the modal is opened autoplay it
            \$('#myModal').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

                \$(\"#image\").attr('src', \$imageSrc  );
            })


// reset the modal image
            \$('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                \$(\"#image\").attr('src','');
            })






// document ready
        });

    </script>

{% endblock %}
", "admin/showguide.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\admin\\showguide.html.twig");
    }
}
