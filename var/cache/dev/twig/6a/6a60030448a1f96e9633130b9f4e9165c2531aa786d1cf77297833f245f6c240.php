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

/* baseAziz.html.twig */
class __TwigTemplate_a19798bf6520748576a89cb6e3feeaaedbb5af86fb5b95319d407b4654e6ff4f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAziz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAziz.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "        <style>
         tr.spaceUnder>td {
             padding-bottom: 0.5em;
         }
    </style>

</head>
<body class=\"left-sidebar is-preload\">

<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1 style=\"text-decoration: none;\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\" id=\"logo\" style=\"text-decoration: none;\">BIOS Travel</a></h1>
            </header>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"/guides\">Guides</a></li>
                <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\">Locations</a></li>
                <li><a href=\"right-sidebar.html\">Evenements</a></li>


                ";
        // line 71
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 72
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            ";
            // line 77
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 78
                echo "                                <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                            ";
            }
            // line 81
            echo "                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">Profile</a></li>

                            ";
            // line 83
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 84
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 86
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 88
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
                // line 89
                echo "                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_user");
                echo "\">Mes Locations</a></li>
                            ";
            } else {
                // line 91
                echo "                                <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                            ";
            }
            // line 93
            echo "                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 97
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 99
        echo "
            </ul>
        </nav>

    </div>
    ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 270
        echo "<br>
    <br><br>
    <br>
    ";
        // line 273
        $this->displayBlock('footer', $context, $blocks);
        // line 416
        echo "
<!-- Scripts -->
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/breakpoints.min.js"), "html", null, true);
        echo "'\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- Scripts -->
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendort/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" />
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" />
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://css.gg/arrow-top-right.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-up-o.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-down-o.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-left-o.css' rel='stylesheet'>
    <style>



        .right {
            position: absolute;
            right: 0px;
            width: 750px;


        }
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "        ";
        // line 40
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "        <!-- Main -->
        <div class=\"wrapper style1\">

            <div class=\"container\">
                <div class=\"row gtr-200\">
                    <div class=\"col-4 col-12-mobile\" id=\"sidebar\">
                        <hr class=\"first\" />
                        <section>
                            <header>
                                <h3><a href=\"#\">Accumsan sed penatibus</a></h3>
                            </header>
                            <p>
                                Dolor sed fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                porttitor phasellus tempus cubilia ultrices tempor sagittis  tellus ante diam nec penatibus dolor cras
                                magna tempus feugiat veroeros.
                            </p>
                            <footer>
                                <a href=\"#\" class=\"button\">Learn More</a>
                            </footer>
                        </section>
                        <hr />
                        <section>
                            <header>
                                <h3><a href=\"#\">Sed lorem etiam consequat</a></h3>
                            </header>
                            <p>
                                Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                            </p>
                            <div class=\"row gtr-50\">
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic10.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Nibh sed cubilia</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Proin sed adipiscing</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Lorem feugiat magna</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic13.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Sed tempus fringilla</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic14.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Malesuada fermentum</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                            </div>
                            <footer>
                                <a href=\"#\" class=\"button\">Magna Adipiscing</a>
                            </footer>
                        </section>
                    </div>
                    <div class=\"col-8 col-12-mobile imp-mobile\" id=\"content\">
                        <article id=\"main\">
                            <header>
                                <h2><a href=\"#\">Left Sidebar</a></h2>
                                <p>
                                    Morbi convallis lectus malesuada sed fermentum dolore amet
                                </p>
                            </header>
                            <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic06.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                            <p>
                                Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                                posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                                lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                                consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                                interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                                natoque aenean scelerisque vel lacinia mollis quam sodales congue.
                            </p>
                            <section>
                                <header>
                                    <h3>Ultrices tempor sagittis nisl</h3>
                                </header>
                                <p>
                                    Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
                                    at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
                                    feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
                                    fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
                                    egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
                                </p>
                                <p>
                                    Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient
                                    orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur
                                    ut penatibus fermentum nibh erat malesuada varius.
                                </p>
                            </section>
                            <section>
                                <header>
                                    <h3>Augue euismod feugiat tempus</h3>
                                </header>
                                <p>
                                    Pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
                                    feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
                                    ut nunc urna volutpat donec cubilia commodo risus morbi. Lobortis vestibulum velit malesuada ante
                                    egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
                                </p>
                            </section>
                        </article>
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <article class=\"col-4 col-12-mobile special\">
                        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic07.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        <header>
                            <h3><a href=\"#\">Gravida aliquam penatibus</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class=\"col-4 col-12-mobile special\">
                        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic08.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        <header>
                            <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class=\"col-4 col-12-mobile special\">
                        <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic09.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        <header>
                            <h3><a href=\"#\">Magna laoreet et aliquam</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                </div>
            </div>

        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 274
        echo "    <!-- Footer -->
    <div  id=\"footer\" class=\"w-100\">
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
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic10.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic13.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic14.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic15.jpg"), "html", null, true);
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

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAziz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 375,  712 => 372,  706 => 369,  700 => 366,  694 => 363,  688 => 360,  600 => 274,  590 => 273,  566 => 256,  553 => 246,  540 => 236,  494 => 193,  469 => 171,  457 => 162,  445 => 153,  433 => 144,  421 => 135,  389 => 105,  379 => 104,  369 => 40,  367 => 39,  357 => 38,  330 => 20,  326 => 19,  322 => 18,  318 => 17,  314 => 16,  310 => 15,  306 => 14,  302 => 13,  298 => 12,  294 => 11,  290 => 10,  287 => 9,  277 => 8,  258 => 5,  242 => 435,  238 => 434,  234 => 433,  230 => 432,  226 => 431,  222 => 430,  218 => 429,  214 => 428,  208 => 425,  204 => 424,  200 => 423,  196 => 422,  192 => 421,  188 => 420,  184 => 419,  180 => 418,  176 => 416,  174 => 273,  169 => 270,  167 => 104,  160 => 99,  156 => 97,  150 => 93,  146 => 91,  140 => 89,  137 => 88,  133 => 86,  129 => 84,  127 => 83,  121 => 81,  116 => 78,  114 => 77,  107 => 72,  105 => 71,  98 => 67,  86 => 58,  67 => 41,  65 => 38,  62 => 37,  60 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    {% block stylesheets %}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendort/bootstrap/css/bootstrap.css') }}\" />
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/main.css') }}\" />
    <noscript><link rel=\"stylesheet\" href=\"{{ asset('assets/css/noscript.css') }}\" /></noscript>
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/main.css') }}\" />
    <noscript><link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/noscript.css') }}\" /></noscript>
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://css.gg/arrow-top-right.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-up-o.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-down-o.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-left-o.css' rel='stylesheet'>
    <style>



        .right {
            position: absolute;
            right: 0px;
            width: 750px;


        }
        {% endblock %}

        {% block javascripts %}
        {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
        <style>
         tr.spaceUnder>td {
             padding-bottom: 0.5em;
         }
    </style>

</head>
<body class=\"left-sidebar is-preload\">

<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1 style=\"text-decoration: none;\"><a href=\"{{ path('maison_index') }}\" id=\"logo\" style=\"text-decoration: none;\">BIOS Travel</a></h1>
            </header>
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
    {% block body %}
        <!-- Main -->
        <div class=\"wrapper style1\">

            <div class=\"container\">
                <div class=\"row gtr-200\">
                    <div class=\"col-4 col-12-mobile\" id=\"sidebar\">
                        <hr class=\"first\" />
                        <section>
                            <header>
                                <h3><a href=\"#\">Accumsan sed penatibus</a></h3>
                            </header>
                            <p>
                                Dolor sed fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                porttitor phasellus tempus cubilia ultrices tempor sagittis  tellus ante diam nec penatibus dolor cras
                                magna tempus feugiat veroeros.
                            </p>
                            <footer>
                                <a href=\"#\" class=\"button\">Learn More</a>
                            </footer>
                        </section>
                        <hr />
                        <section>
                            <header>
                                <h3><a href=\"#\">Sed lorem etiam consequat</a></h3>
                            </header>
                            <p>
                                Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                            </p>
                            <div class=\"row gtr-50\">
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic10.jpg') }}\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Nibh sed cubilia</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic11.jpg') }}\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Proin sed adipiscing</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic12.jpg') }}\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Lorem feugiat magna</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic13.jpg') }}\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Sed tempus fringilla</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                                <div class=\"col-4\">
                                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic14.jpg') }}\" alt=\"\" /></a>
                                </div>
                                <div class=\"col-8\">
                                    <h4>Malesuada fermentum</h4>
                                    <p>
                                        Amet nullam fringilla nibh nulla convallis tique ante proin.
                                    </p>
                                </div>
                            </div>
                            <footer>
                                <a href=\"#\" class=\"button\">Magna Adipiscing</a>
                            </footer>
                        </section>
                    </div>
                    <div class=\"col-8 col-12-mobile imp-mobile\" id=\"content\">
                        <article id=\"main\">
                            <header>
                                <h2><a href=\"#\">Left Sidebar</a></h2>
                                <p>
                                    Morbi convallis lectus malesuada sed fermentum dolore amet
                                </p>
                            </header>
                            <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('images/pic06.jpg') }}\" alt=\"\" /></a>
                            <p>
                                Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                                posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                                lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                                consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                                interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                                natoque aenean scelerisque vel lacinia mollis quam sodales congue.
                            </p>
                            <section>
                                <header>
                                    <h3>Ultrices tempor sagittis nisl</h3>
                                </header>
                                <p>
                                    Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
                                    at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
                                    feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
                                    fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
                                    egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
                                </p>
                                <p>
                                    Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient
                                    orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur
                                    ut penatibus fermentum nibh erat malesuada varius.
                                </p>
                            </section>
                            <section>
                                <header>
                                    <h3>Augue euismod feugiat tempus</h3>
                                </header>
                                <p>
                                    Pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
                                    feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
                                    ut nunc urna volutpat donec cubilia commodo risus morbi. Lobortis vestibulum velit malesuada ante
                                    egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
                                </p>
                            </section>
                        </article>
                    </div>
                </div>
                <hr />
                <div class=\"row\">
                    <article class=\"col-4 col-12-mobile special\">
                        <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('images/pic07.jpg') }}\" alt=\"\" /></a>
                        <header>
                            <h3><a href=\"#\">Gravida aliquam penatibus</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class=\"col-4 col-12-mobile special\">
                        <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('images/pic08.jpg') }}\" alt=\"\" /></a>
                        <header>
                            <h3><a href=\"#\">Sed quis rhoncus placerat</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class=\"col-4 col-12-mobile special\">
                        <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('images/pic09.jpg') }}\" alt=\"\" /></a>
                        <header>
                            <h3><a href=\"#\">Magna laoreet et aliquam</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                </div>
            </div>

        </div>
    {% endblock %}
<br>
    <br><br>
    <br>
    {% block footer %}
    <!-- Footer -->
    <div  id=\"footer\" class=\"w-100\">
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
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic10.jpg') }}\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic11.jpg') }}\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic12.jpg') }}\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic13.jpg') }}\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic14.jpg') }}\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('images/pic15.jpg') }}\" alt=\"\" /></a>
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

</div>
{% endblock %}

<!-- Scripts -->
<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.dropotron.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.scrolly.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.scrollex.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/browser.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/breakpoints.min.js')}}'\"></script>
<script src=\"{{ asset('assets/js/util.js')}}\"></script>
<script src=\"{{ asset('assets/js/main.js')}}\"></script>

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
", "baseAziz.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\baseAziz.html.twig");
    }
}
