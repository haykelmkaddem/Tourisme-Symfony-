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

/* test.html.twig */
class __TwigTemplate_e9da2b42eaced31217d453d6629a04466a96b63d8b3e847cfef9e46f2d95f492 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tHelios by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Helios by HTML5 UP</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1><a href=\"index.html\" id=\"logo\">Helios</a></h1>
                <hr />
                <p>Another fine freebie by HTML5 UP</p>
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
                    <a href=\"#\">Dropdown</a>
                    <ul>
                        <li><a href=\"#\">Lorem ipsum dolor</a></li>
                        <li><a href=\"#\">Magna phasellus</a></li>
                        <li><a href=\"#\">Etiam dolore nisl</a></li>
                        <li>
                            <a href=\"#\">And a submenu &hellip;</a>
                            <ul>
                                <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                <li><a href=\"#\">Phasellus consequat</a></li>
                                <li><a href=\"#\">Magna phasellus</a></li>
                                <li><a href=\"#\">Etiam dolore nisl</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
                <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
            </ul>
        </nav>

    </div>

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
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic15.jpg\" alt=\"\" /></a>
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
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollex.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/breakpoints.min.js"), "html", null, true);
        echo "'\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 384,  451 => 383,  447 => 382,  443 => 381,  439 => 380,  435 => 379,  431 => 378,  427 => 377,  60 => 13,  56 => 12,  43 => 1,);
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
    <title>Helios by HTML5 UP</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
    <noscript><link rel=\"stylesheet\" href=\"{{ asset('assets/css/noscript.css')}}\" /></noscript>
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1><a href=\"index.html\" id=\"logo\">Helios</a></h1>
                <hr />
                <p>Another fine freebie by HTML5 UP</p>
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
                    <a href=\"#\">Dropdown</a>
                    <ul>
                        <li><a href=\"#\">Lorem ipsum dolor</a></li>
                        <li><a href=\"#\">Magna phasellus</a></li>
                        <li><a href=\"#\">Etiam dolore nisl</a></li>
                        <li>
                            <a href=\"#\">And a submenu &hellip;</a>
                            <ul>
                                <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                <li><a href=\"#\">Phasellus consequat</a></li>
                                <li><a href=\"#\">Magna phasellus</a></li>
                                <li><a href=\"#\">Etiam dolore nisl</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
                <li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                <li><a href=\"no-sidebar.html\">No Sidebar</a></li>
            </ul>
        </nav>

    </div>

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
                            <a href=\"#\" class=\"image fit\"><img src=\"images/pic15.jpg\" alt=\"\" /></a>
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
</html>", "test.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\test.html.twig");
    }
}
