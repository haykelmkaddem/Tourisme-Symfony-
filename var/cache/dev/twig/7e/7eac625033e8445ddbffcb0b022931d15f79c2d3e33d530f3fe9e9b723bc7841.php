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

/* contactez_nous/index.html.twig */
class __TwigTemplate_6e597a1b51f30695b58819678c4e9b3f479884a6c5becd2f85abef5863a7894e extends \Twig\Template
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
        return "backSyrine.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contactez_nous/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contactez_nous/index.html.twig"));

        $this->parent = $this->loadTemplate("backSyrine.html.twig", "contactez_nous/index.html.twig", 1);
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

        echo "ContactezNous index";
        
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
        echo "   <div class=\"card m-5\">
       <div class=\"card-header py-3\">
           <h5 class=\"text-primary\">
                Les messages reçus
           </h5>
       </div>
       <div class=\"card-body\">


           <table class=\"table\">
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Email</th>
                   <th>Objet</th>
                   <th>Message</th>
                   <th>actions</th>
               </tr>
               </thead>
               <tbody>
               ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactez_nouses"]) || array_key_exists("contactez_nouses", $context) ? $context["contactez_nouses"] : (function () { throw new RuntimeError('Variable "contactez_nouses" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contactez_nou"]) {
            // line 29
            echo "                   <tr>
                       <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                       <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                       <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                       <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                       <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "objet", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                       <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "message", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                       <td>
                           <a class=\" text-primary w-100 text-center\" style=\"border: .5px solid #ccc; padding: 10px ; width: 100% ; display: inline-block\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactez_nous_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contactez_nou"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>

                       </td>
                   </tr>
               ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                   <tr>
                       <td colspan=\"7\">no records found</td>
                   </tr>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactez_nou'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "               </tbody>
           </table>


       </div>
   </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contactez_nous/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 46,  155 => 42,  145 => 37,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  117 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backSyrine.html.twig' %}

{% block title %}ContactezNous index{% endblock %}

{% block body %}
   <div class=\"card m-5\">
       <div class=\"card-header py-3\">
           <h5 class=\"text-primary\">
                Les messages reçus
           </h5>
       </div>
       <div class=\"card-body\">


           <table class=\"table\">
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Email</th>
                   <th>Objet</th>
                   <th>Message</th>
                   <th>actions</th>
               </tr>
               </thead>
               <tbody>
               {% for contactez_nou in contactez_nouses %}
                   <tr>
                       <td>{{ contactez_nou.id }}</td>
                       <td>{{ contactez_nou.nom }}</td>
                       <td>{{ contactez_nou.prenom }}</td>
                       <td>{{ contactez_nou.email }}</td>
                       <td>{{ contactez_nou.objet }}</td>
                       <td>{{ contactez_nou.message }}</td>
                       <td>
                           <a class=\" text-primary w-100 text-center\" style=\"border: .5px solid #ccc; padding: 10px ; width: 100% ; display: inline-block\" href=\"{{ path('contactez_nous_show', {'id': contactez_nou.id}) }}\"><i class=\"fas fa-eye\"></i></a>

                       </td>
                   </tr>
               {% else %}
                   <tr>
                       <td colspan=\"7\">no records found</td>
                   </tr>
               {% endfor %}
               </tbody>
           </table>


       </div>
   </div>
{% endblock %}
", "contactez_nous/index.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\contactez_nous\\index.html.twig");
    }
}
