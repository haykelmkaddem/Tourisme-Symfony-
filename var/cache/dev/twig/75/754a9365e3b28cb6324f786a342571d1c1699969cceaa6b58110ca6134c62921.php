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

/* maison/index.html.twig */
class __TwigTemplate_b7652ecccf89f5ed04bc4ca02d7c32b5a17791cd614b3e2924a2b2ad976afc81 extends Template
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
        return "baseAziz.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAziz.html.twig", "maison/index.html.twig", 1);
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

        echo "Maison index";
        
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
        echo "    <head>
        <meta charset=\"UTF-8\" />
        <!-- style CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/style.css"), "html", null, true);
        echo "\" >
        <style>
            body {
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
                line-height: 1.42em;
                color:#A7A1AE;
                background-color:#1F2739;
            }

            .popUpUpdateClass{
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .popupContent{
                background-color: #fefefe;
                margin: 15% auto; /* 15% from the top and centered */
                padding: 20px;
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }
            #sidebar{
                height: 100vh;

            }
            .page-content{
                margin-left: 25%;
            }
        </style>
    </head>
    <body>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            echo "            <div class=\"alert alert-success\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        <div class=\"page-wrapper\">
            <nav id=\"sidebar\" class=\"sidebar w-25 float-left pt-5 pl-2\">

                <div class=\"select_option\">
                    <div class=\"select_option_list\" style=\"width: 350px; margin-bottom: 2rem;\">Lieux <i class=\"float-right fas fa-caret-down\"></i></div>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 59
            echo "                        <div class=\"select_option_dropdown\">
                            <p><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maisonLieu", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "lieu", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    <div>
                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
                    </div>




                    <br>

                    <!-- start: page -->
                    ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
            // line 74
            echo "                    <center><button type=\"button\" class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#exampleModal\" style=\"margin-bottom: 30px\">Ajouter Une location</button></center>

                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog \" style=\"max-width:660px\" role=\"document\">
                            <div class=\"modal-content \">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter Une location</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                   <div class=\"mt-1\">
                                       ";
            // line 86
            echo twig_include($this->env, $context, "maison/_form.html.twig");
            echo "
                                   </div>


                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 94
        echo "                    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new RuntimeError('Variable "maisons" does not exist.', 94, $this->source); })()));
        echo "
                </div>
            </nav>
            <div class=\"page-content w-75\">
                <h1 style=\"font-weight: bold;
                                font-size: 2.5em;
                                text-align: center;
                                color: #185875;
                                margin-top: 30px;\">List des Locations</h1>


                <div id=\"all\">
                    ";
        // line 106
        $this->loadTemplate("maison/ajax.html.twig", "maison/index.html.twig", 106)->display($context);
        // line 107
        echo "                </div>

                <div class=\"row\" id=\"search\"></div>
            </div>
        </div>




                            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.js"), "html", null, true);
        echo "\"></script>
                            <script
                                    src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
                            </script>
                            <script>
                                \$( document ).ready(function() {
                                    var currentRequest = null;
                                    \$(\"#search\").keyup(function(e){
                                        /* La variable value va prendre la valeur insérer dans le champ de texte
                                        afin d’effectuer la recherche */
                                        var value = \$(this).val();
                                        if(currentRequest != null) {
                                            currentRequest.abort();
                                        }

                                        /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                                        « search » pour faire la recherche */
                                        currentRequest = \$.ajax({

                                            url : \"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxsearch");
        echo "\",
                                            type : 'GET',
                                            data: {
                                                'searchValue' : value
                                            },

                                            success : function(retour)
                                            {
                                                \$('#all').html(retour);

                                            },
                                        });
                                        return false;
                                    });
                                });
                            </script>


                            <script>
                                function required()
                                {
                                    var empt = document.form1.min.value;
                                    var empt1 = document.form1.max.value;
                                    if (empt === \"\")
                                    {
                                        document.form1.min.value=0;
                                        return false;
                                    }
                                    if (empt1 === \"\")
                                    {
                                        document.form1.max.value=99999;
                                        return false;
                                    }

                                }
                            </script>
                            <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
                            <!-- popper js -->
                            <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/popper.min.js"), "html", null, true);
        echo "\" ></script>
                            <!-- bootstrap js -->
                            <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
                            <!-- magnific popup js -->
                            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" ></script>
                            <!-- carousel js -->
                            <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/owl.carousel.min.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\" ></script>
                            <!-- slick js -->
                            <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/slick.min.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/waypoints.min.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/contact.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.form.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.validate.min.js"), "html", null, true);
        echo "\" ></script>
                            <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/mail-script.js"), "html", null, true);
        echo "\" ></script>
                            <!-- custom js -->
                            <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/custom.js"), "html", null, true);
        echo "\" ></script>

    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maison/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 191,  365 => 189,  361 => 188,  357 => 187,  353 => 186,  349 => 185,  345 => 184,  341 => 183,  337 => 182,  332 => 180,  328 => 179,  323 => 177,  318 => 175,  313 => 173,  308 => 171,  269 => 135,  249 => 118,  244 => 116,  233 => 107,  231 => 106,  215 => 94,  204 => 86,  190 => 74,  188 => 73,  176 => 63,  165 => 60,  162 => 59,  158 => 58,  151 => 53,  142 => 50,  139 => 49,  135 => 48,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAziz.html.twig' %}

{% block title %}Maison index{% endblock %}

{% block body %}
    <head>
        <meta charset=\"UTF-8\" />
        <!-- style CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('theme/css/style.css') }}\" >
        <style>
            body {
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
                line-height: 1.42em;
                color:#A7A1AE;
                background-color:#1F2739;
            }

            .popUpUpdateClass{
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .popupContent{
                background-color: #fefefe;
                margin: 15% auto; /* 15% from the top and centered */
                padding: 20px;
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }
            #sidebar{
                height: 100vh;

            }
            .page-content{
                margin-left: 25%;
            }
        </style>
    </head>
    <body>
        {% for message in app.flashes('message') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"page-wrapper\">
            <nav id=\"sidebar\" class=\"sidebar w-25 float-left pt-5 pl-2\">

                <div class=\"select_option\">
                    <div class=\"select_option_list\" style=\"width: 350px; margin-bottom: 2rem;\">Lieux <i class=\"float-right fas fa-caret-down\"></i></div>
                    {% for lieu in lieux  %}
                        <div class=\"select_option_dropdown\">
                            <p><a href=\"{{ path('maisonLieu', {'id':lieu.id}) }}\">{{ lieu.lieu }}</a></p>
                        </div>
                    {% endfor %}
                    <div>
                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
                    </div>




                    <br>

                    <!-- start: page -->
                    {% if is_granted('ROLE_PROP') %}
                    <center><button type=\"button\" class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#exampleModal\" style=\"margin-bottom: 30px\">Ajouter Une location</button></center>

                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog \" style=\"max-width:660px\" role=\"document\">
                            <div class=\"modal-content \">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter Une location</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                   <div class=\"mt-1\">
                                       {{ include('maison/_form.html.twig') }}
                                   </div>


                            </div>
                        </div>
                    </div>
                    {% endif %}
                    {{ knp_pagination_render(maisons) }}
                </div>
            </nav>
            <div class=\"page-content w-75\">
                <h1 style=\"font-weight: bold;
                                font-size: 2.5em;
                                text-align: center;
                                color: #185875;
                                margin-top: 30px;\">List des Locations</h1>


                <div id=\"all\">
                    {% include 'maison/ajax.html.twig' %}
                </div>

                <div class=\"row\" id=\"search\"></div>
            </div>
        </div>




                            <script src=\"{{ asset('theme/js/jquery.js') }}\"></script>
                            <script
                                    src=\"{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
                            </script>
                            <script>
                                \$( document ).ready(function() {
                                    var currentRequest = null;
                                    \$(\"#search\").keyup(function(e){
                                        /* La variable value va prendre la valeur insérer dans le champ de texte
                                        afin d’effectuer la recherche */
                                        var value = \$(this).val();
                                        if(currentRequest != null) {
                                            currentRequest.abort();
                                        }

                                        /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                                        « search » pour faire la recherche */
                                        currentRequest = \$.ajax({

                                            url : \"{{ path('ajaxsearch') }}\",
                                            type : 'GET',
                                            data: {
                                                'searchValue' : value
                                            },

                                            success : function(retour)
                                            {
                                                \$('#all').html(retour);

                                            },
                                        });
                                        return false;
                                    });
                                });
                            </script>


                            <script>
                                function required()
                                {
                                    var empt = document.form1.min.value;
                                    var empt1 = document.form1.max.value;
                                    if (empt === \"\")
                                    {
                                        document.form1.min.value=0;
                                        return false;
                                    }
                                    if (empt1 === \"\")
                                    {
                                        document.form1.max.value=99999;
                                        return false;
                                    }

                                }
                            </script>
                            <script src=\"{{ asset('theme/js/jquery-1.12.1.min.js') }}\"></script>
                            <!-- popper js -->
                            <script src=\"{{ asset('theme/js/popper.min.js') }}\" ></script>
                            <!-- bootstrap js -->
                            <script src=\"{{ asset('theme/js/bootstrap.min.js') }}\" ></script>
                            <!-- magnific popup js -->
                            <script src=\"{{ asset('theme/js/jquery.magnific-popup.js') }}\" ></script>
                            <!-- carousel js -->
                            <script src=\"{{ asset('theme/js/owl.carousel.min.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/jquery.nice-select.min.js') }}\" ></script>
                            <!-- slick js -->
                            <script src=\"{{ asset('theme/js/slick.min.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/jquery.counterup.min.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/waypoints.min.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/contact.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/jquery.ajaxchimp.min.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/jquery.form.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/jquery.validate.min.js') }}\" ></script>
                            <script src=\"{{ asset('theme/js/mail-script.js') }}\" ></script>
                            <!-- custom js -->
                            <script src=\"{{ asset('theme/js/custom.js') }}\" ></script>

    </body>
{% endblock %}

", "maison/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\maison\\index.html.twig");
    }
}
