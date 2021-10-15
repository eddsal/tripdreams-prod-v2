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

/* Front/voyage/infos_pratiques.html.twig */
class __TwigTemplate_bec5959f85225a7fa3a2ed43580e2e87c5a9cf2cc7320a298bc1fabd14f4931a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/infos_pratiques.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/infos_pratiques.html.twig"));

        // line 1
        echo "<table class=\"table table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
    <thead>
        <tr>
            <th>Date de départ</th>
            <th>Date de retour</th>
            <th>Durée</th>
            <th>Hébergement</th>
            <th>Repas</th>
            <th>Info COVID-19</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Date de départ</th>
            <th>Date de retour</th>
            <th>Durée</th>
            <th>Hébergement</th>
            <th>Repas</th>
            <th>Info COVID-19</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infosPratiques"]) || array_key_exists("infosPratiques", $context) ? $context["infosPratiques"] : (function () { throw new RuntimeError('Variable "infosPratiques" does not exist.', 24, $this->source); })()), "getDepart", [], "method", false, false, false, 24), "d/m/Y"), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infosPratiques"]) || array_key_exists("infosPratiques", $context) ? $context["infosPratiques"] : (function () { throw new RuntimeError('Variable "infosPratiques" does not exist.', 25, $this->source); })()), "getRetour", [], "method", false, false, false, 25), "d/m/Y"), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infosPratiques"]) || array_key_exists("infosPratiques", $context) ? $context["infosPratiques"] : (function () { throw new RuntimeError('Variable "infosPratiques" does not exist.', 26, $this->source); })()), "getDuree", [], "method", false, false, false, 26), "html", null, true);
        echo " jours</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infosPratiques"]) || array_key_exists("infosPratiques", $context) ? $context["infosPratiques"] : (function () { throw new RuntimeError('Variable "infosPratiques" does not exist.', 27, $this->source); })()), "getHebergement", [], "method", false, false, false, 27), "html", null, true);
        echo "</td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infosPratiques"]) || array_key_exists("infosPratiques", $context) ? $context["infosPratiques"] : (function () { throw new RuntimeError('Variable "infosPratiques" does not exist.', 28, $this->source); })()), "getRepas", [], "method", false, false, false, 28), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infosPratiques"]) || array_key_exists("infosPratiques", $context) ? $context["infosPratiques"] : (function () { throw new RuntimeError('Variable "infosPratiques" does not exist.', 29, $this->source); })()), "getCovid19", [], "method", false, false, false, 29), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/infos_pratiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
    <thead>
        <tr>
            <th>Date de départ</th>
            <th>Date de retour</th>
            <th>Durée</th>
            <th>Hébergement</th>
            <th>Repas</th>
            <th>Info COVID-19</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Date de départ</th>
            <th>Date de retour</th>
            <th>Durée</th>
            <th>Hébergement</th>
            <th>Repas</th>
            <th>Info COVID-19</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>{{infosPratiques.getDepart()|date(\"d/m/Y\")}}</td>
            <td>{{infosPratiques.getRetour()|date(\"d/m/Y\")}}</td>
            <td>{{infosPratiques.getDuree()}} jours</td>
            <td>{{infosPratiques.getHebergement()}}</td>
            <td>{{infosPratiques.getRepas()}}</td>
            <td>{{infosPratiques.getCovid19()}}</td>
        </tr>
    </tbody>
</table>", "Front/voyage/infos_pratiques.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/infos_pratiques.html.twig");
    }
}
