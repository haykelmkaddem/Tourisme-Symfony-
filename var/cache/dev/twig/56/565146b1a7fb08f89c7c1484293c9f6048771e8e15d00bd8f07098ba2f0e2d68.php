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

/* baseSyrine.html.twig */
class __TwigTemplate_4c60618361c89ca4fa15d911d9d1a158a8ca25b6aacfdd89b1b0e7b8c118daf0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseSyrine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseSyrine.html.twig"));

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


    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
          integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
          crossorigin=\"\"/>


    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
    <style>
        #map{
            height: 68vh;
            margin-top: 93px;
            width: 100%;
        }
        .contact-form input{
            height: 20px !important;
        }
        .contact-form textarea{
            min-height: 4em !important;
        }
    </style>
    ";
        // line 49
        $this->displayBlock('style', $context, $blocks);
        // line 51
        echo "</head>

<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1><a href=\"#\" id=\"logo\">Helios</a></h1>
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
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide_index");
        echo "\">Guides</a></li>
                <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index");
        echo "\">Locations</a></li>
                <li><a href=\"/even/approuve/listeEvent\">Evenements</a></li>


                ";
        // line 80
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 81
            echo "                    <li class=\"dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDarkDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Profile
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-dark\" aria-labelledby=\"navbarDarkDropdownMenuLink\">
                            ";
            // line 86
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 87
                echo "                                <li><a class=\"dropdown-item\" href=\"/dashboard\">Dashboard</a></li>

                            ";
            }
            // line 90
            echo "                            <li><a class=\"dropdown-item\" href=\"/utilisateur/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\">Profile</a></li>

                            ";
            // line 92
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
                // line 93
                echo "                                <li><a class=\"dropdown-item\" href=\"/disponibilite\">Disponibilité</a></li>
                            ";
            } else {
                // line 95
                echo "                                <li><a class=\"dropdown-item\" href=\"/guide/new\">Devenir Guide</a></li>
                            ";
            }
            // line 97
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROP")) {
                // line 98
                echo "                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_index_user");
                echo "\">Mes Locations</a></li>
                            ";
            } else {
                // line 100
                echo "                                <li><a class=\"dropdown-item\" href=\"prop/maison/new\">Devenir Prop Maison</a></li>
                            ";
            }
            // line 102
            echo "                            <li><a class=\"dropdown-item\" href=\"/logout\">Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 106
            echo "                    <li><a href=\"/login\">Login <i class=\"fas fa-sign-in-alt\"></i></a></li>
                ";
        }
        // line 108
        echo "
            </ul>
        </nav>
    </div>
    ";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 284
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

<!-- Scripts
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/jquery.dropotron.min.js\"></script>
<script src=\"assets/js/jquery.scrolly.min.js\"></script>
<script src=\"assets/js/jquery.scrollex.min.js\"></script>
<script src=\"assets/js/browser.min.js\"></script>
<script src=\"assets/js/breakpoints.min.js\"></script>
<script src=\"assets/js/util.js\"></script>
<script src=\"assets/js/main.js\"></script>
-->
<script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>

<script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
        integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
        crossorigin=\"\"></script>

<script type=\"text/javascript\">
    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat =  36.89885;
    var lon =  10.18992;
    var macarte = null;
    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
        macarte = L.map('map').setView([lat , lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien  vers la source des données
            attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);
    }
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();

// Nous ajoutons un marqueur
        var marker = L.marker([lat, lon]).addTo(macarte);


        marker.bindPopup('<h3>Bios Travel Agency </h3> <p>Rue Fatma Ezzahra, La Petite Ariana, Jaafar, Délégation Raoued, Gouvernorat Ariana, 2088, Tunisie </p>') ;
    };
</script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 50
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 113
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
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pic01.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseSyrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 129,  471 => 113,  461 => 112,  451 => 50,  441 => 49,  392 => 438,  388 => 437,  384 => 436,  230 => 284,  228 => 112,  222 => 108,  218 => 106,  212 => 102,  208 => 100,  202 => 98,  199 => 97,  195 => 95,  191 => 93,  189 => 92,  183 => 90,  178 => 87,  176 => 86,  169 => 81,  167 => 80,  160 => 76,  156 => 75,  130 => 51,  128 => 49,  111 => 35,  107 => 34,  102 => 32,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  69 => 20,  65 => 19,  45 => 1,);
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


    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
          integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
          crossorigin=\"\"/>


    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    <link href=\"{{ asset('back/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"{{ asset('back/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('back/vendor/datatables/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/main.css') }}\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>
    <noscript><link rel=\"stylesheet\" href=\"{{ asset ('assets/css/noscript.css')}}\" /></noscript>
    <style>
        #map{
            height: 68vh;
            margin-top: 93px;
            width: 100%;
        }
        .contact-form input{
            height: 20px !important;
        }
        .contact-form textarea{
            min-height: 4em !important;
        }
    </style>
    {% block style %}
    {% endblock %}
</head>

<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>
                <h1><a href=\"#\" id=\"logo\">Helios</a></h1>
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
                <li><a href=\"/\">Acceuil</a></li>
                <li><a href=\"{{ path('guide_index') }}\">Guides</a></li>
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
    {%block body%}
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
                <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('images/pic01.jpg') }}\" alt=\"\" /></a>
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
    {%endblock%}
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

<!-- Scripts
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/jquery.dropotron.min.js\"></script>
<script src=\"assets/js/jquery.scrolly.min.js\"></script>
<script src=\"assets/js/jquery.scrollex.min.js\"></script>
<script src=\"assets/js/browser.min.js\"></script>
<script src=\"assets/js/breakpoints.min.js\"></script>
<script src=\"assets/js/util.js\"></script>
<script src=\"assets/js/main.js\"></script>
-->
<script src=\"{{ asset('back/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>

<script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
        integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
        crossorigin=\"\"></script>

<script type=\"text/javascript\">
    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat =  36.89885;
    var lon =  10.18992;
    var macarte = null;
    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
        macarte = L.map('map').setView([lat , lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien  vers la source des données
            attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);
    }
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();

// Nous ajoutons un marqueur
        var marker = L.marker([lat, lon]).addTo(macarte);


        marker.bindPopup('<h3>Bios Travel Agency </h3> <p>Rue Fatma Ezzahra, La Petite Ariana, Jaafar, Délégation Raoued, Gouvernorat Ariana, 2088, Tunisie </p>') ;
    };
</script>


</body>
</html>
", "baseSyrine.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\baseSyrine.html.twig");
    }
}
