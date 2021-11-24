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

/* front.html.twig */
class __TwigTemplate_ffc2b7136b9444147fc66c3d145f137315b116388a70826e74bbbb043193047e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tHelios by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">
";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 257
        $this->displayBlock('footer', $context, $blocks);
        // line 398
        echo "
</div>

<!-- Scripts -->
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "        <title>Helios by HTML5 UP</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" />
        <noscript><link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
        ";
        // line 17
        $this->displayBlock('style', $context, $blocks);
        // line 20
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 18
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1><a href=\"/\" id=\"logo\">Best Trip Tunisia</a></h1>
                <hr />
                <p>Utilisez Best Trip Tunisia pour trouver ou offrir un logement
                    .</p>
            </header>
            <footer>
                <a href=\"#banner\" class=\"button circled scrolly\">Start</a>
            </footer>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"/guides\">Guides</a></li>
                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\">Locations</a></li>
                <li><a href=\"right-sidebar.html\">Evenements</a></li>


                ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 52
            echo "                        <li class=\"dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Profile
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                                ";
            // line 57
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                                    <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                                ";
            }
            // line 61
            echo "                                <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">Profile</a></li>

                                ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 64
                echo "                                    <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                                    ";
            } else {
                // line 66
                echo "                                        <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                                ";
            }
            // line 68
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
                // line 69
                echo "                                    <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_user");
                echo "\">Mes Locations</a></li>
                                ";
            } else {
                // line 71
                echo "                                    <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                                ";
            }
            // line 73
            echo "                                <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                            </ul>
                        </li>
                ";
        } else {
            // line 77
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 79
        echo "
            </ul>
        </nav>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "    <!-- Banner -->
    <section id=\"banner\">
        <header>
            <h2>Hi. You're looking at <strong>Helios</strong>.</h2>
            <p>
                A (free) responsive site template by <a href=\"http://html5up.net\">HTML5 UP</a>.
                Built with HTML5/CSS3 and released under the <a href=\"http://html5up.net/license\">CCA</a> license.
            </p>
        </header>
    </section>

    <!-- Carousel -->
    <section class=\"carousel\">
        <div class=\"reel\">

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/pic01.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/pic02.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Varius magnis sollicitudin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic01.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Varius magnis sollicitudin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

        </div>
    </section>

    <!-- Main -->
    <div class=\"wrapper style2\">

        <article id=\"main\" class=\"container special\">
            <a href=\"#\" class=\"image featured\"><img src=\"images/pic06.jpg\" alt=\"\" /></a>
            <header>
                <h2><a href=\"#\">Sed massa imperdiet magnis</a></h2>
                <p>
                    Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                    pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                </p>
            </header>
            <p>
                Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                natoque aenean scelerisque.
            </p>
            <footer>
                <a href=\"#\" class=\"button\">Continue Reading</a>
            </footer>
        </article>

    </div>

    <!-- Features -->
    <div class=\"wrapper style1\">

        <section id=\"features\" class=\"container special\">
            <header>
                <h2>Morbi ullamcorper et varius leo lacus</h2>
                <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
            </header>
            <div class=\"row\">
                <article class=\"col-4 col-12-mobile special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"images/pic07.jpg\" alt=\"\" /></a>
                    <header>
                        <h3><a href=\"#\">Gravida aliquam penatibus</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
                <article class=\"col-4 col-12-mobile special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"images/pic08.jpg\" alt=\"\" /></a>
                    <header>
                        <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
                <article class=\"col-4 col-12-mobile special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"images/pic09.jpg\" alt=\"\" /></a>
                    <header>
                        <h3><a href=\"#\">Magna laoreet et aliquam</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
            </div>
        </section>

    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 257
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 258
        echo "    <!-- Footer -->
    <div id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Tweets -->
                <section class=\"col-4 col-12-mobile\">
                    <header>
                        <h2 class=\"icon brands fa-twitter circled\"><span class=\"label\">Tweets</span></h2>
                    </header>
                    <ul class=\"divided\">
                        <li>
                            <article class=\"tweet\">
                                Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                <span class=\"timestamp\">5 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"tweet\">
                                Hendrerit rutrum quisque.
                                <span class=\"timestamp\">30 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"tweet\">
                                Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                <span class=\"timestamp\">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"tweet\">
                                Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                <span class=\"timestamp\">5 hours ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Posts -->
                <section class=\"col-4 col-12-mobile\">
                    <header>
                        <h2 class=\"icon solid fa-file circled\"><span class=\"label\">Posts</span></h2>
                    </header>
                    <ul class=\"divided\">
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Nisl fermentum integer</a></h3>
                                </header>
                                <span class=\"timestamp\">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Phasellus portitor lorem</a></h3>
                                </header>
                                <span class=\"timestamp\">6 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Magna tempus consequat</a></h3>
                                </header>
                                <span class=\"timestamp\">Yesterday</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Feugiat lorem ipsum</a></h3>
                                </header>
                                <span class=\"timestamp\">2 days ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Photos -->
                <section class=\"col-4 col-12-mobile\">
                    <header>
                        <h2 class=\"icon solid fa-camera circled\"><span class=\"label\">Photos</span></h2>
                    </header>
                    <div class=\"row gtr-25\">
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic10.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic11.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic12.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic13.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic14.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/pic15.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                    </div>
                </section>

            </div>
            <hr />
            <div class=\"row\">
                <div class=\"col-12\">

                    <!-- Contact -->
                    <section class=\"contact\">
                        <header>
                            <h3>Nisl turpis nascetur interdum?</h3>
                        </header>
                        <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                        <ul class=\"icons\">
                            <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-pinterest\"><span class=\"label\">Pinterest</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-linkedin-in\"><span class=\"label\">Linkedin</span></a></li>
                        </ul>
                    </section>

                    <!-- Copyright -->
                    <div class=\"copyright\">
                        <ul class=\"menu\">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
                        </ul>
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
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 359,  501 => 258,  491 => 257,  334 => 110,  323 => 102,  305 => 86,  295 => 85,  280 => 79,  276 => 77,  270 => 73,  266 => 71,  260 => 69,  257 => 68,  253 => 66,  249 => 64,  247 => 63,  241 => 61,  236 => 58,  234 => 57,  227 => 52,  225 => 51,  218 => 47,  195 => 26,  185 => 25,  174 => 18,  164 => 17,  154 => 20,  152 => 17,  148 => 16,  144 => 15,  140 => 14,  136 => 13,  131 => 10,  121 => 9,  106 => 409,  102 => 408,  98 => 407,  94 => 406,  90 => 405,  86 => 404,  82 => 403,  78 => 402,  72 => 398,  70 => 257,  68 => 85,  66 => 25,  60 => 21,  58 => 9,  48 => 1,);
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
    {% block head %}
        <title>Helios by HTML5 UP</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
        <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/main.css') }}\" />
        <noscript><link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/noscript.css') }}\" /></noscript>
        {% block style %}

        {% endblock %}
    {% endblock %}

</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">
{% block header %}
    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1><a href=\"/\" id=\"logo\">Best Trip Tunisia</a></h1>
                <hr />
                <p>Utilisez Best Trip Tunisia pour trouver ou offrir un logement
                    .</p>
            </header>
            <footer>
                <a href=\"#banner\" class=\"button circled scrolly\">Start</a>
            </footer>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"/guides\">Guides</a></li>
                <li><a href=\"{{ path('maison_index') }}\">Locations</a></li>
                <li><a href=\"right-sidebar.html\">Evenements</a></li>


                {% if is_granted('ROLE_USER') %}
                        <li class=\"dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Profile
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                                {% endif %}
                                <li><a class=\"dropdown-item\" href=\"/utilisateur/{{ app.user.id }}\">Profile</a></li>

                                {% if is_granted('ROLE_GUIDE') %}
                                    <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                                    {% else %}
                                        <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                                {% endif %}
                                {% if is_granted('ROLE_PROP') %}
                                    <li><a class=\"dropdown-item\" href=\"{{ path('maison_index_user') }}\">Mes Locations</a></li>
                                {% else %}
                                    <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                                {% endif %}
                                <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                            </ul>
                        </li>
                {% else %}
                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                {% endif %}

            </ul>
        </nav>

    </div>
{% endblock %}
{% block body %}
    <!-- Banner -->
    <section id=\"banner\">
        <header>
            <h2>Hi. You're looking at <strong>Helios</strong>.</h2>
            <p>
                A (free) responsive site template by <a href=\"http://html5up.net\">HTML5 UP</a>.
                Built with HTML5/CSS3 and released under the <a href=\"http://html5up.net/license\">CCA</a> license.
            </p>
        </header>
    </section>

    <!-- Carousel -->
    <section class=\"carousel\">
        <div class=\"reel\">

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('front/images/pic01.jpg') }}\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('front/images/pic02.jpg') }}\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Varius magnis sollicitudin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic01.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Pulvinar sagittis congue</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Fermentum sagittis proin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Ultrices urna sit lobortis</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
                <a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
                <header>
                    <h3><a href=\"#\">Varius magnis sollicitudin</a></h3>
                </header>
                <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

        </div>
    </section>

    <!-- Main -->
    <div class=\"wrapper style2\">

        <article id=\"main\" class=\"container special\">
            <a href=\"#\" class=\"image featured\"><img src=\"images/pic06.jpg\" alt=\"\" /></a>
            <header>
                <h2><a href=\"#\">Sed massa imperdiet magnis</a></h2>
                <p>
                    Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                    pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                </p>
            </header>
            <p>
                Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                natoque aenean scelerisque.
            </p>
            <footer>
                <a href=\"#\" class=\"button\">Continue Reading</a>
            </footer>
        </article>

    </div>

    <!-- Features -->
    <div class=\"wrapper style1\">

        <section id=\"features\" class=\"container special\">
            <header>
                <h2>Morbi ullamcorper et varius leo lacus</h2>
                <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
            </header>
            <div class=\"row\">
                <article class=\"col-4 col-12-mobile special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"images/pic07.jpg\" alt=\"\" /></a>
                    <header>
                        <h3><a href=\"#\">Gravida aliquam penatibus</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
                <article class=\"col-4 col-12-mobile special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"images/pic08.jpg\" alt=\"\" /></a>
                    <header>
                        <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
                <article class=\"col-4 col-12-mobile special\">
                    <a href=\"#\" class=\"image featured\"><img src=\"images/pic09.jpg\" alt=\"\" /></a>
                    <header>
                        <h3><a href=\"#\">Magna laoreet et aliquam</a></h3>
                    </header>
                    <p>
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                    </p>
                </article>
            </div>
        </section>

    </div>
    {% endblock %}
{% block footer %}
    <!-- Footer -->
    <div id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Tweets -->
                <section class=\"col-4 col-12-mobile\">
                    <header>
                        <h2 class=\"icon brands fa-twitter circled\"><span class=\"label\">Tweets</span></h2>
                    </header>
                    <ul class=\"divided\">
                        <li>
                            <article class=\"tweet\">
                                Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                <span class=\"timestamp\">5 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"tweet\">
                                Hendrerit rutrum quisque.
                                <span class=\"timestamp\">30 minutes ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"tweet\">
                                Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                <span class=\"timestamp\">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"tweet\">
                                Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                <span class=\"timestamp\">5 hours ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Posts -->
                <section class=\"col-4 col-12-mobile\">
                    <header>
                        <h2 class=\"icon solid fa-file circled\"><span class=\"label\">Posts</span></h2>
                    </header>
                    <ul class=\"divided\">
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Nisl fermentum integer</a></h3>
                                </header>
                                <span class=\"timestamp\">3 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Phasellus portitor lorem</a></h3>
                                </header>
                                <span class=\"timestamp\">6 hours ago</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Magna tempus consequat</a></h3>
                                </header>
                                <span class=\"timestamp\">Yesterday</span>
                            </article>
                        </li>
                        <li>
                            <article class=\"post stub\">
                                <header>
                                    <h3><a href=\"#\">Feugiat lorem ipsum</a></h3>
                                </header>
                                <span class=\"timestamp\">2 days ago</span>
                            </article>
                        </li>
                    </ul>
                </section>

                <!-- Photos -->
                <section class=\"col-4 col-12-mobile\">
                    <header>
                        <h2 class=\"icon solid fa-camera circled\"><span class=\"label\">Photos</span></h2>
                    </header>
                    <div class=\"row gtr-25\">
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic10.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic11.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic12.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic13.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic14.jpg\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('front/images/pic15.jpg') }}\" alt=\"\" /></a>
                        </div>
                    </div>
                </section>

            </div>
            <hr />
            <div class=\"row\">
                <div class=\"col-12\">

                    <!-- Contact -->
                    <section class=\"contact\">
                        <header>
                            <h3>Nisl turpis nascetur interdum?</h3>
                        </header>
                        <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                        <ul class=\"icons\">
                            <li><a href=\"#\" class=\"icon brands fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-facebook-f\"><span class=\"label\">Facebook</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-pinterest\"><span class=\"label\">Pinterest</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
                            <li><a href=\"#\" class=\"icon brands fa-linkedin-in\"><span class=\"label\">Linkedin</span></a></li>
                        </ul>
                    </section>

                    <!-- Copyright -->
                    <div class=\"copyright\">
                        <ul class=\"menu\">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {% endblock %}

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

</body>
</html>
", "front.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\front.html.twig");
    }
}
