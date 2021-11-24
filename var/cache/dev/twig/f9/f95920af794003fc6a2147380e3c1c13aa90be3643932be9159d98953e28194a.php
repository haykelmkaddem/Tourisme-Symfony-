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

/* base1Front.html.twig */
class __TwigTemplate_bd5125ef2f354584906e6347bcf04c633d2d47350555d5e6426f5690ce643460 extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1Front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1Front.html.twig"));

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
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    <style>
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
                <h1><a href=\"#\" id=\"logo\">BIOS Travel</a></h1>
            </header>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"/guide\">Guides</a></li>
                <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\">Locations</a></li>
                <li><a href=\"/even/approuve/listeEvent\">Evenements</a></li>


                ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 68
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            ";
            // line 73
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 74
                echo "                                <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                            ";
            }
            // line 77
            echo "                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\">Profile</a></li>

                            ";
            // line 79
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 80
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 82
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 84
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
                // line 85
                echo "                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_user");
                echo "\">Mes Locations</a></li>
                            ";
            } else {
                // line 87
                echo "                                <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                            ";
            }
            // line 89
            echo "                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 93
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 95
        echo "
            </ul>
        </nav>

    </div>
    ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "
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
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic10.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic13.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic14.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 203
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

<!-- Scripts -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/breakpoints.min.js"), "html", null, true);
        echo "'\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
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
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css1/main.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css1/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css1/style2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css1/All.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css1/fontawesome-all.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css1/swiper.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/scss/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">  <!-- Google web font \"Open Sans\" -->

        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\"><!-- Font Awesome -->

        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick/slick.css"), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slick/slick-theme.css"), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" href=\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-style.css"), "html", null, true);
        echo "\">
       <!-- Templatemo style -->

        <noscript><link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "        ";
        // line 37
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
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

    public function getTemplateName()
    {
        return "base1Front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 100,  488 => 37,  486 => 36,  476 => 35,  464 => 32,  458 => 29,  453 => 27,  448 => 25,  443 => 23,  438 => 21,  433 => 19,  427 => 16,  423 => 15,  419 => 14,  415 => 13,  411 => 12,  407 => 11,  403 => 10,  400 => 9,  390 => 8,  371 => 5,  356 => 252,  352 => 251,  348 => 250,  344 => 249,  340 => 248,  336 => 247,  332 => 246,  328 => 245,  283 => 203,  277 => 200,  271 => 197,  265 => 194,  259 => 191,  253 => 188,  164 => 101,  162 => 100,  155 => 95,  151 => 93,  145 => 89,  141 => 87,  135 => 85,  132 => 84,  128 => 82,  124 => 80,  122 => 79,  116 => 77,  111 => 74,  109 => 73,  102 => 68,  100 => 67,  93 => 63,  66 => 38,  64 => 35,  61 => 34,  59 => 8,  53 => 5,  47 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css1/main.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css1/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css1/style2.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css1/All.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css1/fontawesome-all.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css1/swiper.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/scss/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">  <!-- Google web font \"Open Sans\" -->

        <link rel=\"stylesheet\" href=\"{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}\"><!-- Font Awesome -->

        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <!-- Bootstrap style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/datepicker.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick/slick.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick/slick-theme.css') }}\"/>

        <link rel=\"stylesheet\" href=\" {{ asset('css/templatemo-style.css') }}\">
       <!-- Templatemo style -->

        <noscript><link rel=\"stylesheet\" href=\"{{ asset('assets/css/noscript.css') }}\" /></noscript>
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
                <h1><a href=\"#\" id=\"logo\">BIOS Travel</a></h1>
            </header>
        </div>

        <!-- Nav -->
        <nav id=\"nav\">
            <ul>
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"/guide\">Guides</a></li>
                <li><a href=\"{{ path('maison_index') }}\">Locations</a></li>
                <li><a href=\"/even/approuve/listeEvent\">Evenements</a></li>


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
    {% block body %}{% endblock body %}

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

<!-- Scripts -->
<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.dropotron.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.scrolly.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.scrollex.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/browser.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/breakpoints.min.js')}}'\"></script>
<script src=\"{{ asset('assets/js/util.js')}}\"></script>
<script src=\"{{ asset('assets/js/main.js')}}\"></script>

</body>
</html>
", "base1Front.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\base1Front.html.twig");
    }
}
