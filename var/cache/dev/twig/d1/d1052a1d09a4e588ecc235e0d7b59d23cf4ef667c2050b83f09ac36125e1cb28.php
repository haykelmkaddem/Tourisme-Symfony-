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

/* admin/index.html.twig */
class __TwigTemplate_cba05d82bdd9225ea234b8b9b387e554e25f77d761f8176d96d19fcf41409102 extends Template
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
            'notif' => [$this, 'block_notif'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        echo "    ";
        $this->displayBlock('notif', $context, $blocks);
        // line 43
        echo "    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                        class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
        </div>

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
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
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
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
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
                            <div id=\"div_chart\" style=\"margin: 0px;\"></div>

                            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                            <script type=\"text/javascript\">
                                ";
        // line 203
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new RuntimeError('Variable "piechart" does not exist.', 203, $this->source); })()), "div_chart");
        echo "
                            </script>
                        </div>
                        <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Tunisie
                                        </span>
                            <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-danger\"></i> Autre
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
    <script>
        // Area Chart Example
        var ctx = document.getElementById(\"myAreaChart\");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                datasets: [{
                    label: \"Earnings\",
                    lineTension: 0.3,
                    backgroundColor: \"rgba(78, 115, 223, 0.05)\",
                    borderColor: \"rgba(78, 115, 223, 1)\",
                    pointRadius: 3,
                    pointBackgroundColor: \"rgba(78, 115, 223, 1)\",
                    pointBorderColor: \"rgba(78, 115, 223, 1)\",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: \"rgba(78, 115, 223, 1)\",
                    pointHoverBorderColor: \"rgba(78, 115, 223, 1)\",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return '\$' + number_format(value);
                            }
                        },
                        gridLines: {
                            color: \"rgb(234, 236, 244)\",
                            zeroLineColor: \"rgb(234, 236, 244)\",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: \"rgb(255,255,255)\",
                    bodyFontColor: \"#858796\",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': \$' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 7
        echo "        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                    Alerts Center
                </h6>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifs"]) || array_key_exists("notifs", $context) ? $context["notifs"] : (function () { throw new RuntimeError('Variable "notifs" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 21
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["notif"], "titre", [], "any", false, false, false, 21), "Demande de guide"))) {
                // line 22
                echo "                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_utilisateurs", ["id" => twig_get_attribute($this->env, $this->source, $context["notif"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">

                    ";
            } else {
                // line 25
                echo "                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_guide", ["id" => twig_get_attribute($this->env, $this->source, $context["notif"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">

                    ";
            }
            // line 28
            echo "                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-warning\">
                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "titre", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                        ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "message", [], "any", false, false, false, 35), "html", null, true);
            echo "
                    </div>
                        </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
            </div>
        </li>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 39,  585 => 35,  581 => 34,  573 => 28,  566 => 25,  559 => 22,  556 => 21,  552 => 20,  537 => 7,  527 => 6,  254 => 203,  92 => 43,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
    {% block notif %}
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
               data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                 aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                    Alerts Center
                </h6>
                {% for notif in notifs %}
                    {% if notif.titre == \"Demande de guide\" %}
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('dashboard_utilisateurs', {'id': notif.id}) }}\">

                    {% else %}
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('dashboard_guide', {'id': notif.id}) }}\">

                    {% endif %}
                    <div class=\"mr-3\">
                        <div class=\"icon-circle bg-warning\">
                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                        </div>
                    </div>
                    <div>
                        <div class=\"small text-gray-500\">{{ notif.titre }}</div>
                        {{ notif.message }}
                    </div>
                        </a>
                {% endfor %}
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
            </div>
        </li>
    {% endblock %}
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                        class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
        </div>

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
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
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
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
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
                            <div id=\"div_chart\" style=\"margin: 0px;\"></div>

                            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                            <script type=\"text/javascript\">
                                {{ gc_draw(piechart, 'div_chart') }}
                            </script>
                        </div>
                        <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Tunisie
                                        </span>
                            <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-danger\"></i> Autre
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
    <script>
        // Area Chart Example
        var ctx = document.getElementById(\"myAreaChart\");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                datasets: [{
                    label: \"Earnings\",
                    lineTension: 0.3,
                    backgroundColor: \"rgba(78, 115, 223, 0.05)\",
                    borderColor: \"rgba(78, 115, 223, 1)\",
                    pointRadius: 3,
                    pointBackgroundColor: \"rgba(78, 115, 223, 1)\",
                    pointBorderColor: \"rgba(78, 115, 223, 1)\",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: \"rgba(78, 115, 223, 1)\",
                    pointHoverBorderColor: \"rgba(78, 115, 223, 1)\",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return '\$' + number_format(value);
                            }
                        },
                        gridLines: {
                            color: \"rgb(234, 236, 244)\",
                            zeroLineColor: \"rgb(234, 236, 244)\",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: \"rgb(255,255,255)\",
                    bodyFontColor: \"#858796\",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': \$' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    </script>
{% endblock %}
", "admin/index.html.twig", "C:\\wamp64\\www\\TourismWeb\\templates\\admin\\index.html.twig");
    }
}
