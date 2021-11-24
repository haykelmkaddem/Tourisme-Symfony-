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

/* utilisateur/show.html.twig */
class __TwigTemplate_7f10f28ef2dc230b07e4af02c5f611c040e5d66686608a4ddba9f8b5c038af24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "utilisateur/show.html.twig", 1);
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

        echo "Utilisateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "          <style>
              body.homepage #header {
                  height: 50px;
                  min-height: 50px;
              }
          </style>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>

            </header>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    <div class=\"container\">
        <div class=\"main-body mt-5\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 69, $this->source); })()), "nom", [], "any", false, false, false, 69), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 69, $this->source); })()), "prenom", [], "any", false, false, false, 69), "html", null, true);
        echo "</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 71, $this->source); })()), "roles", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 72
            echo "                                            ";
            if ((0 === twig_compare($context["role"], "ROLE_ADMIN"))) {
                // line 73
                echo "                                                Administrateur,
                                            ";
            } elseif ((0 === twig_compare(            // line 74
$context["role"], "ROLE_GUIDE"))) {
                // line 75
                echo "                                                Guide touristique,
                                            ";
            } elseif ((0 === twig_compare(            // line 76
$context["role"], "ROLE_USER"))) {
                // line 77
                echo "                                                Membre

                                            ";
            }
            // line 80
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                                    <p class=\"text-muted font-size-sm text-center\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 81, $this->source); })()), "pays", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>
                                    <button class=\"btn btn-primary\">Follow</button>
                                    <button class=\"btn btn-outline-primary\">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe mr-2 icon-inline\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>Website</h6>
                                <span class=\"text-secondary\">https://bootdey.com</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-github mr-2 icon-inline\"><path d=\"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22\"></path></svg>Github</h6>
                                <span class=\"text-secondary\">bootdey</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-twitter mr-2 icon-inline text-info\"><path d=\"M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z\"></path></svg>Twitter</h6>
                                <span class=\"text-secondary\">@bootdey</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">bootdey</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">bootdey</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <a class=\"float-right\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\">editer mon profile <i class=\"fas fa-edit\"></i></a>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 122, $this->source); })()), "nom", [], "any", false, false, false, 122), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 126, $this->source); })()), "prenom", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 130, $this->source); })()), "email", [], "any", false, false, false, 130), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Datenaissance</th>
                                    <td>";
        // line 134
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 134, $this->source); })()), "datenaissance", [], "any", false, false, false, 134)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 134, $this->source); })()), "datenaissance", [], "any", false, false, false, 134), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Numtel</th>
                                    <td>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 138, $this->source); })()), "numtel", [], "any", false, false, false, 138), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 142, $this->source); })()), "pays", [], "any", false, false, false, 142), "html", null, true);
        echo "</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

    </script>
    <h1>Utilisateur</h1>



    <a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\">back to list</a>



    ";
        // line 222
        echo twig_include($this->env, $context, "utilisateur/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 222,  389 => 218,  310 => 142,  303 => 138,  296 => 134,  289 => 130,  282 => 126,  275 => 122,  266 => 116,  228 => 81,  220 => 80,  215 => 77,  213 => 76,  210 => 75,  208 => 74,  205 => 73,  202 => 72,  198 => 71,  191 => 69,  175 => 55,  165 => 54,  116 => 14,  106 => 13,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Utilisateur{% endblock %}

      {% block style %}
          <style>
              body.homepage #header {
                  height: 50px;
                  min-height: 50px;
              }
          </style>
      {% endblock %}
{% block header %}
    <!-- Header -->
    <div id=\"header\">

        <!-- Inner -->
        <div class=\"inner\">
            <header>

            </header>
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
{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"main-body mt-5\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                                <div class=\"mt-3 \">
                                    <h4>{{ utilisateur.nom }} {{ utilisateur.prenom }}</h4>
                                    <p class=\"text-secondary mb-1 text-center\">
                                        {% for role in utilisateur.roles  %}
                                            {% if role == \"ROLE_ADMIN\" %}
                                                Administrateur,
                                            {% elseif role == \"ROLE_GUIDE\" %}
                                                Guide touristique,
                                            {% elseif role == \"ROLE_USER\" %}
                                                Membre

                                            {% endif %}
                                        {% endfor %}</p>
                                    <p class=\"text-muted font-size-sm text-center\">{{ utilisateur.pays }}</p>
                                    <button class=\"btn btn-primary\">Follow</button>
                                    <button class=\"btn btn-outline-primary\">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe mr-2 icon-inline\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>Website</h6>
                                <span class=\"text-secondary\">https://bootdey.com</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-github mr-2 icon-inline\"><path d=\"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22\"></path></svg>Github</h6>
                                <span class=\"text-secondary\">bootdey</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-twitter mr-2 icon-inline text-info\"><path d=\"M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z\"></path></svg>Twitter</h6>
                                <span class=\"text-secondary\">@bootdey</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">bootdey</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">bootdey</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <a class=\"float-right\" href=\"{{ path('utilisateur_edit', {'id': utilisateur.id}) }}\">editer mon profile <i class=\"fas fa-edit\"></i></a>

                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ utilisateur.nom }}</td>
                                </tr>
                                <tr>
                                    <th>Prenom</th>
                                    <td>{{ utilisateur.prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ utilisateur.email }}</td>
                                </tr>
                                <tr>
                                    <th>Datenaissance</th>
                                    <td>{{ utilisateur.datenaissance ? utilisateur.datenaissance|date('Y-m-d') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Numtel</th>
                                    <td>{{ utilisateur.numtel }}</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>{{ utilisateur.pays }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">

    </script>
    <h1>Utilisateur</h1>



    <a href=\"{{ path('utilisateur_index') }}\">back to list</a>



    {{ include('utilisateur/_delete_form.html.twig') }}
{% endblock %}
", "utilisateur/show.html.twig", "C:\\wamp64\\www\\TourismWeb\\templates\\utilisateur\\show.html.twig");
    }
}
