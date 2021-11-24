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

/* even_approuve/evenParLieu.html.twig */
class __TwigTemplate_6191de9a9cdffea164434c7c5d729c77bebc0faf797d10a985de9c130f850061 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/evenParLieu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "even_approuve/evenParLieu.html.twig"));

        $this->parent = $this->loadTemplate("base1Front.html.twig", "even_approuve/evenParLieu.html.twig", 1);
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
        echo "
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/css/style.css"), "html", null, true);
        echo "\" >
    </head>
<body>


<br><br><br><br>
<div class=\"container\">
    <div class=\"col-md-8\">
        <div class=\"product_list\">


            <div class=\"row\">

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["EvenLieus"]) || array_key_exists("EvenLieus", $context) ? $context["EvenLieus"] : (function () { throw new RuntimeError('Variable "EvenLieus" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["EvenLieu"]) {
            // line 22
            echo "                    <a href=\"#\" >
                        <div class=\"col-lg-3 col-sm-6 \">
                            <div class=\"card\" style=\"width: 10rem; height: 22rem; margin-bottom: 20px\">
                                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["EvenLieu"], "imageFilename", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["EvenLieu"], "titreEven", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>
                                    <h6 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["EvenLieu"], "descriptionEven", [], "any", false, false, false, 28), "html", null, true);
            echo " </h6>


                                </div>
                            </div>
                        </div></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['EvenLieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            </div>
        </div>
    </div>
</div>
    <!-- jquery plugins here-->

    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- bootstrap js -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- magnific popup js -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" ></script>
    <!-- carousel js -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/owl.carousel.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- slick js -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/contact.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.form.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/jquery.validate.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/mail-script.js"), "html", null, true);
        echo "\" ></script>
    <!-- custom js -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/custom.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("theme/js/profile.js"), "html", null, true);
        echo "\" ></script>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "even_approuve/evenParLieu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 64,  210 => 62,  205 => 60,  201 => 59,  197 => 58,  193 => 57,  189 => 56,  185 => 55,  181 => 54,  177 => 53,  172 => 51,  168 => 50,  163 => 48,  158 => 46,  153 => 44,  148 => 42,  139 => 35,  126 => 28,  122 => 27,  117 => 25,  112 => 22,  108 => 21,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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


<br><br><br><br>
<div class=\"container\">
    <div class=\"col-md-8\">
        <div class=\"product_list\">


            <div class=\"row\">

                {% for EvenLieu in EvenLieus %}
                    <a href=\"#\" >
                        <div class=\"col-lg-3 col-sm-6 \">
                            <div class=\"card\" style=\"width: 10rem; height: 22rem; margin-bottom: 20px\">
                                <img src=\"{{ asset('uploads/' ~ EvenLieu.imageFilename) }}\" class=\"card-img-top\" height=\"220\" alt=\"#\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ EvenLieu.titreEven }}</h5>
                                    <h6 class=\"card-title\">{{ EvenLieu.descriptionEven }} </h6>


                                </div>
                            </div>
                        </div></a>
                {% endfor %}

            </div>
        </div>
    </div>
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

</body>
{% endblock %}
", "even_approuve/evenParLieu.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\even_approuve\\evenParLieu.html.twig");
    }
}
