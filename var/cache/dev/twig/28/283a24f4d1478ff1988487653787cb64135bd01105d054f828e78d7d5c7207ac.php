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

/* even_approuve/listeEventsFront.html.twig */
class __TwigTemplate_dae184405da94a57d9e1c25eb03605d0de048568464671f1ce3af272be29f2d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/listeEventsFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/listeEventsFront.html.twig"));

        $this->parent = $this->loadTemplate("base1Front.html.twig", "even_approuve/listeEventsFront.html.twig", 1);
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

        echo "Liste des événements approuve index";
        
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
        echo "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/style.css"), "html", null, true);
        echo "\" >
</head>

    <body>
<br><br>

    <!-- product list part start-->
    <div class=\"right\" style=\"margin-top: 2rem;\">
        <table>
            <tr>
                <td>

                    <div class=\"select_option\">
                        <div class=\"select_option_list\" style=\"width: 350px; margin-bottom: 2rem; margin-left: 100px;\">Lieux <i class=\"right fas fa-caret-down\"></i>
                        </div>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) || array_key_exists("lieux", $context) ? $context["lieux"] : (function () { throw new RuntimeError('Variable "lieux" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 23
            echo "                            <div class=\"select_option_dropdown\" style=\"margin-left: 100px; width: 350px;\" >
                                <p><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("even_approuve_evenLieu", ["id" => twig_get_attribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lieu"], "titreLieu", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </div>


                </td>
                <td><p style=\" margin-left: 50px;\">Heure:</p></td>
                <td>
                    <form action=\"croissantHeure\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"margin-left: 00px; background-color: #F9966B;\" ><i class=\"fas fa-arrow-circle-up\"></i></button>
                    </form>
                </td>
                <td>

                    <form action=\"decroissantHeure\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"margin-left: 0px; background-color: #F9966B;\"><i class=\"fas fa-arrow-circle-down\"></i></button>
                    </form>
                </td>
                <td><p style=\" margin-left: 60px;\">Date:</p></td>
                <td>
                    <form action=\"croissant\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"background-color: #F9966B;\"><i class=\"fas fa-arrow-circle-up\"></i></button>
                    </form>
                </td>
                <td>

                    <form action=\"decroissant\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"background-color: #F9966B;\"  ><i class=\"fas fa-arrow-circle-down\"></i></button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 \">
            ";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 63
            echo "                <a href=\"/even/non/approuve/new\" >

                    <button class=\"btn btn-light\" style=\" height: 50px; width: 340px; background-color: #F9966B; color: #ffffff;\">Informer à propos un événement</button>


                </a>
                ";
        } else {
            // line 70
            echo "
                    <a href=\"/login\" >

                        <button class=\"btn btn-light\" style=\" height: 50px; width: 340px; background-color: #F9966B; color: #ffffff;\">Informer à propos un événement</button>


                    </a>
            ";
        }
        // line 78
        echo "
        </div>
        <div class=\"col-md-4\">
            <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meilleurPlan");
        echo "\">
                <button class=\"btn btn-light\" style=\"background-color: #27AE60; color: #ffffff; width: 120px; height: 47px;\">Meilleur plan</button>
            </a>
            <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aEviter");
        echo "\">
                <button class=\"btn btn-light\" style=\"background-color: #201C1C; color: #ffffff; width: 120px; height: 47px;\">A éviter</button>
            </a>

        </div>
        <div class=\"col-md-4\">

                <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">

        </div>
    </div>
</div>
<br><br>
            <div class=\"row\" id=\"all\" >
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["even_approuves"]) || array_key_exists("even_approuves", $context) ? $context["even_approuves"] : (function () { throw new RuntimeError('Variable "even_approuves" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["even_approuve"]) {
            // line 99
            echo "
                <div class=\"single-package-item\">
                    <div>
                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["even_approuve"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" >
                            <div class=\"col-md-3 \">
                                <div class=\"card\" style=\"width: 20rem; height: 28rem; margin-bottom: 20px\">
                                    <img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["even_approuve"], "image_filename", [], "any", false, false, false, 105))), "html", null, true);
            echo "\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "titre_even", [], "any", false, false, false, 107), "html", null, true);
            echo "</h5>
                                        <h6 class=\"card-title\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["even_approuve"], "description_even", [], "any", false, false, false, 108), "html", null, true);
            echo " </h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['even_approuve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    </div>
<div  id=\"search\">
</div>

    <!-- jquery plugins here-->

    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- bootstrap js -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- magnific popup js -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" ></script>
    <!-- carousel js -->
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/owl.carousel.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- slick js -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/contact.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.form.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.validate.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/mail-script.js"), "html", null, true);
        echo "\" ></script>
    <!-- custom js -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/custom.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/profile.js"), "html", null, true);
        echo "\" ></script>

<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script
        src=\"";
        // line 149
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
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxsearchE");
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

    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_approuve/listeEventsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 166,  337 => 149,  332 => 147,  327 => 145,  322 => 143,  317 => 141,  313 => 140,  309 => 139,  305 => 138,  301 => 137,  297 => 136,  293 => 135,  289 => 134,  284 => 132,  280 => 131,  275 => 129,  270 => 127,  265 => 125,  260 => 123,  252 => 117,  237 => 108,  233 => 107,  228 => 105,  222 => 102,  217 => 99,  213 => 98,  196 => 84,  190 => 81,  185 => 78,  175 => 70,  166 => 63,  164 => 62,  127 => 27,  116 => 24,  113 => 23,  109 => 22,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1Front.html.twig' %}

{% block title %}Liste des événements approuve index{% endblock %}

{% block body %}
<head>
    <link rel=\"stylesheet\" href=\"{{ asset('theme/css/style.css') }}\" >
</head>

    <body>
<br><br>

    <!-- product list part start-->
    <div class=\"right\" style=\"margin-top: 2rem;\">
        <table>
            <tr>
                <td>

                    <div class=\"select_option\">
                        <div class=\"select_option_list\" style=\"width: 350px; margin-bottom: 2rem; margin-left: 100px;\">Lieux <i class=\"right fas fa-caret-down\"></i>
                        </div>
                        {% for lieu in lieux  %}
                            <div class=\"select_option_dropdown\" style=\"margin-left: 100px; width: 350px;\" >
                                <p><a href=\"{{ path('even_approuve_evenLieu', {'id':lieu.id}) }}\">{{ lieu.titreLieu }}</a></p>
                            </div>
                        {% endfor %}
                    </div>


                </td>
                <td><p style=\" margin-left: 50px;\">Heure:</p></td>
                <td>
                    <form action=\"croissantHeure\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"margin-left: 00px; background-color: #F9966B;\" ><i class=\"fas fa-arrow-circle-up\"></i></button>
                    </form>
                </td>
                <td>

                    <form action=\"decroissantHeure\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"margin-left: 0px; background-color: #F9966B;\"><i class=\"fas fa-arrow-circle-down\"></i></button>
                    </form>
                </td>
                <td><p style=\" margin-left: 60px;\">Date:</p></td>
                <td>
                    <form action=\"croissant\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"background-color: #F9966B;\"><i class=\"fas fa-arrow-circle-up\"></i></button>
                    </form>
                </td>
                <td>

                    <form action=\"decroissant\" method=\"get\" >
                        <button class=\"btn btn-light\" type=\"submit\" style=\"background-color: #F9966B;\"  ><i class=\"fas fa-arrow-circle-down\"></i></button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 \">
            {% if is_granted('ROLE_USER') %}
                <a href=\"/even/non/approuve/new\" >

                    <button class=\"btn btn-light\" style=\" height: 50px; width: 340px; background-color: #F9966B; color: #ffffff;\">Informer à propos un événement</button>


                </a>
                {% else %}

                    <a href=\"/login\" >

                        <button class=\"btn btn-light\" style=\" height: 50px; width: 340px; background-color: #F9966B; color: #ffffff;\">Informer à propos un événement</button>


                    </a>
            {% endif %}

        </div>
        <div class=\"col-md-4\">
            <a href=\"{{ path('meilleurPlan') }}\">
                <button class=\"btn btn-light\" style=\"background-color: #27AE60; color: #ffffff; width: 120px; height: 47px;\">Meilleur plan</button>
            </a>
            <a href=\"{{ path('aEviter') }}\">
                <button class=\"btn btn-light\" style=\"background-color: #201C1C; color: #ffffff; width: 120px; height: 47px;\">A éviter</button>
            </a>

        </div>
        <div class=\"col-md-4\">

                <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">

        </div>
    </div>
</div>
<br><br>
            <div class=\"row\" id=\"all\" >
            {% for even_approuve in even_approuves %}

                <div class=\"single-package-item\">
                    <div>
                        <a href=\"{{ path('detail', {'id':even_approuve.id}) }}\" >
                            <div class=\"col-md-3 \">
                                <div class=\"card\" style=\"width: 20rem; height: 28rem; margin-bottom: 20px\">
                                    <img src=\"{{ asset('uploads/' ~ even_approuve.image_filename)}}\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">{{ even_approuve.titre_even }}</h5>
                                        <h6 class=\"card-title\">{{ even_approuve.description_even }} </h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>

                    {% endfor %}
                    </div>
<div  id=\"search\">
</div>

    <!-- jquery plugins here-->

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

    <script src=\"{{ asset('theme/js/profile.js') }}\" ></script>

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

                url : \"{{ path('ajaxsearchE') }}\",
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

    </body>
{% endblock %}
", "even_approuve/listeEventsFront.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_approuve\\listeEventsFront.html.twig");
    }
}
