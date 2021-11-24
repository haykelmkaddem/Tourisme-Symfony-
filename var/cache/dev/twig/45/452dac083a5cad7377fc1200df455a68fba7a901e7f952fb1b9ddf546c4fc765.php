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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_3a8a89d88ec9945fe7697634bd0aa7baa847890c79dcb2813624d8290a7ee39b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<h1>Salut,</h1>

<p>
    Vous recevez cet e-mail car votre adresse e-mail a été utilisée pour enregistrer pour s'enregistrer à notre site web.

    Veuillez suivre ce lien pour confirmer que c'était bien vous  :<br><br>
    <a href=\"";
        // line 7
        echo (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 7, $this->source); })());
        echo "\">Confirmer mon Email</a>.

    Vous pouvezez utiliser ce compte aprés la confirmation.

    Si vous avez des questions, veuillez nous envoyer un e-mail - nous sommes toujours heureux de vous aider.
    Ce lien va expiré dans ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 12, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 12, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".

    Sincères amitiés,
    L'équipe B.I.O.S.

</p>

<p>
    Cheers!
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Salut,</h1>

<p>
    Vous recevez cet e-mail car votre adresse e-mail a été utilisée pour enregistrer pour s'enregistrer à notre site web.

    Veuillez suivre ce lien pour confirmer que c'était bien vous  :<br><br>
    <a href=\"{{ signedUrl|raw }}\">Confirmer mon Email</a>.

    Vous pouvezez utiliser ce compte aprés la confirmation.

    Si vous avez des questions, veuillez nous envoyer un e-mail - nous sommes toujours heureux de vous aider.
    Ce lien va expiré dans {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.

    Sincères amitiés,
    L'équipe B.I.O.S.

</p>

<p>
    Cheers!
</p>
", "registration/confirmation_email.html.twig", "C:\\wamp64\\www\\TourismWeb1\\TourismWeb\\templates\\registration\\confirmation_email.html.twig");
    }
}
