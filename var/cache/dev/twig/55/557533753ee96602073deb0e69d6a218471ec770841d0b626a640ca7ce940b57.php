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

/* Emails/emailmaison.html.twig */
class __TwigTemplate_329e336493d536031d05bcb92136f2fba3c0a2e452a1ac1ed2d5c0765ca94508 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/emailmaison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/emailmaison.html.twig"));

        // line 1
        echo "<h1>L'ajout d'une nouvelle maison a été effectué avec succés</h1>
<h3>Bonjour Monsieur ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo "</h3>
<br>
<h4>Vous avez bien ajouté une maison à la liste des locations,
    un Email vous sera convoqué lors d'une réservation effectuée par l'un de nos client</h4>
<br>
<h4>Cordialement</h4>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/emailmaison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>L'ajout d'une nouvelle maison a été effectué avec succés</h1>
<h3>Bonjour Monsieur {{maison.nom}}</h3>
<br>
<h4>Vous avez bien ajouté une maison à la liste des locations,
    un Email vous sera convoqué lors d'une réservation effectuée par l'un de nos client</h4>
<br>
<h4>Cordialement</h4>
", "Emails/emailmaison.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\Emails\\emailmaison.html.twig");
    }
}
