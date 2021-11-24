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

/* basefrontJulia.html.twig */
class __TwigTemplate_ee84db2ac5a321ff575b3b1ccadd1b1722e8130c58c77e8fdf29aa274143fcdc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefrontJulia.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefrontJulia.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tHelios by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body class=\"homepage is-preload\">
    <div id=\"page-wrapper\">

        <!-- Header -->
        <div id=\"header\">

            <!-- Inner -->
            <div class=\"inner\">
                <header>
                    <h1><a href=\"index.html\" id=\"logo\">BIOS</a></h1>
                    <hr />
                </header>
                <footer>
                    <a href=\"#banner\" class=\"button circled scrolly\">Start</a>
                </footer>
            </div>

            <!-- Nav -->
            <nav id=\"nav\">
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li>
                        <a href=\"\">Reservation</a>
                        <ul>
                            <li><a href=\"\">Reservation Guide</a></li>
                            <li><a href=\"\">Reservation Maison</a></li>
";
        // line 55
        echo "                        </ul>
                    </li>
";
        // line 58
        echo "                    <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                    <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
                </ul>
            </nav>

        </div>
        <div class=\"container special\" id=\"main\">
            ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "        </div>


    </div>
";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Front BIOS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/css/main.css"), "html", null, true);
        echo "\" >
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "<!-- Scripts -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themeFrontEnd/assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basefrontJulia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  230 => 78,  226 => 77,  222 => 76,  218 => 75,  214 => 74,  210 => 73,  206 => 72,  203 => 71,  193 => 70,  175 => 65,  163 => 14,  158 => 13,  148 => 12,  129 => 9,  117 => 81,  115 => 70,  109 => 66,  107 => 65,  98 => 58,  94 => 55,  65 => 16,  63 => 12,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<!--
\tHelios by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>{% block title %}Front BIOS{% endblock %}</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('themeFrontEnd/assets/css/main.css')}}\" >
    <noscript><link rel=\"stylesheet\" href=\"{{ asset('themeFrontEnd/assets/css/noscript.css')}}\" /></noscript>
    {% endblock %}
</head>
<body class=\"homepage is-preload\">
    <div id=\"page-wrapper\">

        <!-- Header -->
        <div id=\"header\">

            <!-- Inner -->
            <div class=\"inner\">
                <header>
                    <h1><a href=\"index.html\" id=\"logo\">BIOS</a></h1>
                    <hr />
                </header>
                <footer>
                    <a href=\"#banner\" class=\"button circled scrolly\">Start</a>
                </footer>
            </div>

            <!-- Nav -->
            <nav id=\"nav\">
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li>
                        <a href=\"\">Reservation</a>
                        <ul>
                            <li><a href=\"\">Reservation Guide</a></li>
                            <li><a href=\"\">Reservation Maison</a></li>
{#                            <li><a href=\"#\">Magna phasellus</a></li>#}
{#                            <li><a href=\"#\">Etiam dolore nisl</a></li>#}
{#                            <li>#}
{#                                <a href=\"#\">And a submenu &hellip;</a>#}
{#                                <ul>#}
{#                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>#}
{#                                    <li><a href=\"#\">Phasellus consequat</a></li>#}
{#                                    <li><a href=\"#\">Magna phasellus</a></li>#}
{#                                    <li><a href=\"#\">Etiam dolore nisl</a></li>#}
{#                                </ul>#}
{#                            </li>#}
{#                            <li><a href=\"#\">Veroeros feugiat</a></li>#}
                        </ul>
                    </li>
{#                    <li><a href=\"\">Reservation</a></li>#}
                    <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                    <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
                </ul>
            </nav>

        </div>
        <div class=\"container special\" id=\"main\">
            {% block body %}{% endblock %}
        </div>


    </div>
{% block javascripts %}
<!-- Scripts -->
<script src=\"{{ asset('themeFrontEnd/assets/js/jquery.min.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/jquery.dropotron.min.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/jquery.scrolly.min.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/jquery.scrollex.min.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/browser.min.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/breakpoints.min.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/util.js')}}\"></script>
<script src=\"{{ asset('themeFrontEnd/assets/js/main.js')}}\"></script>
{% endblock %}

</body>
</html>", "basefrontJulia.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\basefrontJulia.html.twig");
    }
}
