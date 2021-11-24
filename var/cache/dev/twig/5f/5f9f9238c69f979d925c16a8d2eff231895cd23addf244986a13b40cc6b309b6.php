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

/* base.html.twig */
class __TwigTemplate_677e587842816a67082744c969461ebe15d38a82f028ef91298b1b6df5a87d39 extends \Twig\Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'notif' => [$this, 'block_notif'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">
    ";
        // line 32
        $this->displayBlock('sidebar', $context, $blocks);
        // line 125
        echo "    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            ";
        // line 132
        $this->displayBlock('navbar', $context, $blocks);
        // line 287
        echo "            <!-- Begin Page Content -->
            ";
        // line 288
        $this->displayBlock('body', $context, $blocks);
        // line 612
        echo "        </div>
        <!-- End of Main Content -->
        ";
        // line 614
        $this->displayBlock('footer', $context, $blocks);
        // line 624
        echo "        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level plugins -->
<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->
<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>

<!-- datatable-->


<!-- Page level plugins -->
<script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo " - Dashboard</title>
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
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

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
            <!-- Custom fonts for this template-->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link
                    href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
                    rel=\"stylesheet\">
            <!-- Custom styles for this template-->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 33
        echo "        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/dashboard\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/dashboard\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseOne\"
                   aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Gestion Utilisateur</span>
                </a>
                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Gerer:</h6>
                        <a class=\"collapse-item\" href=\"/dashboard/utilisateur\">Utilisateur</a>
                        <a class=\"collapse-item\" href=\"/dashboard/guide\">Guides</a>
                        <a class=\"collapse-item\" href=\"/dashboard/prop/maison\">Prop Maison</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                   aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Avis</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Avis</h6>
                        <a class=\"collapse-item\" href=\"/avis/destination/\">Destination</a>
                        <a class=\"collapse-item\" href=\"/avis/evenement/\">Evenement</a>
                        <a class=\"collapse-item\" href=\"/avis/guide/\">Guide</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"/reclamation\" >

                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Reclamations</span>
                </a>
            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"/contactez/nous\" >

                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Contactez-nous</span>
                </a>
            </li>




            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 133
        echo "                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                            class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                   aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                 aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                               placeholder=\"Search for...\" aria-label=\"Search\"
                                               aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        ";
        // line 180
        $this->displayBlock('notif', $context, $blocks);
        // line 183
        echo "                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                 aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile_1.svg"), "html", null, true);
        echo "\"
                                             alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile_2.svg"), "html", null, true);
        echo "\"
                                             alt=\"\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_3.svg\"
                                             alt=\"\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                             alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                     src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile.svg"), "html", null, true);
        echo "\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                 aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 181
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 288
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 289
        echo "                <div class=\"container-fluid\">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Earnings (Annual)</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                             style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                             aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                Pending Requests</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                             aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                             aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Server Migration <span
                                                class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                             aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                                class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Customer Database <span
                                                class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                             aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Payout Details <span
                                                class=\"float-right\">80%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                             aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Account Setup <span
                                                class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                             aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-primary text-white shadow\">
                                        <div class=\"card-body\">
                                            Primary
                                            <div class=\"text-white-50 small\">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-success text-white shadow\">
                                        <div class=\"card-body\">
                                            Success
                                            <div class=\"text-white-50 small\">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-info text-white shadow\">
                                        <div class=\"card-body\">
                                            Info
                                            <div class=\"text-white-50 small\">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-warning text-white shadow\">
                                        <div class=\"card-body\">
                                            Warning
                                            <div class=\"text-white-50 small\">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-danger text-white shadow\">
                                        <div class=\"card-body\">
                                            Danger
                                            <div class=\"text-white-50 small\">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-secondary text-white shadow\">
                                        <div class=\"card-body\">
                                            Secondary
                                            <div class=\"text-white-50 small\">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-light text-black shadow\">
                                        <div class=\"card-body\">
                                            Light
                                            <div class=\"text-black-50 small\">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-dark text-white shadow\">
                                        <div class=\"card-body\">
                                            Dark
                                            <div class=\"text-white-50 small\">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                             src=\"img/undraw_posting_photo.svg\" alt=\"\">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                                target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 614
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 615
        echo "            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 615,  943 => 614,  611 => 289,  601 => 288,  590 => 181,  580 => 180,  540 => 257,  491 => 211,  476 => 199,  458 => 183,  456 => 180,  407 => 133,  397 => 132,  296 => 33,  286 => 32,  273 => 22,  269 => 21,  261 => 16,  257 => 14,  247 => 13,  228 => 12,  218 => 25,  216 => 13,  212 => 12,  204 => 6,  194 => 5,  178 => 682,  172 => 679,  168 => 678,  159 => 672,  155 => 671,  149 => 668,  143 => 665,  137 => 662,  131 => 659,  127 => 658,  91 => 624,  89 => 614,  85 => 612,  83 => 288,  80 => 287,  78 => 132,  69 => 125,  67 => 32,  59 => 26,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{% block title %}Welcome!{% endblock %} - Dashboard</title>
        {% block stylesheets %}

            <!-- Custom fonts for this template-->
            <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link
                    href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
                    rel=\"stylesheet\">
            <!-- Custom styles for this template-->
            <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">

        {% endblock %}
    {% endblock %}
</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">
    {% block sidebar %}
        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/dashboard\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/dashboard\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseOne\"
                   aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Gestion Utilisateur</span>
                </a>
                <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Gerer:</h6>
                        <a class=\"collapse-item\" href=\"/dashboard/utilisateur\">Utilisateur</a>
                        <a class=\"collapse-item\" href=\"/dashboard/guide\">Guides</a>
                        <a class=\"collapse-item\" href=\"/dashboard/prop/maison\">Prop Maison</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                   aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Avis</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Avis</h6>
                        <a class=\"collapse-item\" href=\"/avis/destination/\">Destination</a>
                        <a class=\"collapse-item\" href=\"/avis/evenement/\">Evenement</a>
                        <a class=\"collapse-item\" href=\"/avis/guide/\">Guide</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"/reclamation\" >

                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Reclamations</span>
                </a>
            </li>


            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"/contactez/nous\" >

                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Contactez-nous</span>
                </a>
            </li>




            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
    {% endblock %}
    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            {% block navbar %}
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                            class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                   aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                 aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                               placeholder=\"Search for...\" aria-label=\"Search\"
                                               aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        {% block notif %}

                        {% endblock %}
                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                 aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{ asset('img/undraw_profile_1.svg') }}\"
                                             alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{ asset('img/undraw_profile_2.svg') }}\"
                                             alt=\"\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_3.svg\"
                                             alt=\"\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                             alt=\"\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                     src=\"{{ asset('img/undraw_profile.svg') }}\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                 aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
            {% endblock %}
            <!-- Begin Page Content -->
            {% block body %}
                <div class=\"container-fluid\">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Earnings (Annual)</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                             style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                             aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                Pending Requests</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                             aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                             aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Server Migration <span
                                                class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                             aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                                class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Customer Database <span
                                                class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                             aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Payout Details <span
                                                class=\"float-right\">80%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                             aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Account Setup <span
                                                class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                             aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-primary text-white shadow\">
                                        <div class=\"card-body\">
                                            Primary
                                            <div class=\"text-white-50 small\">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-success text-white shadow\">
                                        <div class=\"card-body\">
                                            Success
                                            <div class=\"text-white-50 small\">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-info text-white shadow\">
                                        <div class=\"card-body\">
                                            Info
                                            <div class=\"text-white-50 small\">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-warning text-white shadow\">
                                        <div class=\"card-body\">
                                            Warning
                                            <div class=\"text-white-50 small\">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-danger text-white shadow\">
                                        <div class=\"card-body\">
                                            Danger
                                            <div class=\"text-white-50 small\">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-secondary text-white shadow\">
                                        <div class=\"card-body\">
                                            Secondary
                                            <div class=\"text-white-50 small\">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-light text-black shadow\">
                                        <div class=\"card-body\">
                                            Light
                                            <div class=\"text-black-50 small\">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-dark text-white shadow\">
                                        <div class=\"card-body\">
                                            Dark
                                            <div class=\"text-white-50 small\">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                             src=\"img/undraw_posting_photo.svg\" alt=\"\">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                                target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            {% endblock %}
        </div>
        <!-- End of Main Content -->
        {% block footer %}
            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
        {% endblock %}
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Core plugin JavaScript-->
<script src=\"{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

<!-- Custom scripts for all pages-->
<script src=\"{{ asset('js/sb-admin-2.min.js') }}\"></script>

<!-- Page level plugins -->
<script src=\"{{ asset('vendor/chart.js/Chart.min.js') }}\"></script>

<!-- Page level custom scripts -->
<script src=\"{{ asset('js/demo/chart-area-demo.js') }}\"></script>
<script src=\"{{ asset('js/demo/chart-pie-demo.js') }}\"></script>

<!-- datatable-->


<!-- Page level plugins -->
<script src=\"{{ asset('vendor/datatables/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}\"></script>

<!-- Page level custom scripts -->
<script src=\"{{ asset('js/demo/datatables-demo.js') }}\"></script>

</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\base.html.twig");
    }
}
