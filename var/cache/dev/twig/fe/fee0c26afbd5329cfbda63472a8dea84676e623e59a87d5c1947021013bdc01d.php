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

/* Front/voyage/info_buttom.html.twig */
class __TwigTemplate_15018b2b0289ea450aa37128b974060905651d8db9a17e81394e7d2b75618fb8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/info_buttom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/info_buttom.html.twig"));

        // line 1
        echo "<div class=\"tab-content\" id=\"v-pills-tabContent\">
  ";
        // line 2
        $this->loadTemplate("Front/voyage/programme.html.twig", "Front/voyage/info_buttom.html.twig", 2)->display($context);
        // line 3
        echo "  ";
        $this->loadTemplate("Front/voyage/infos_pratiques.html.twig", "Front/voyage/info_buttom.html.twig", 3)->display($context);
        // line 4
        echo "  ";
        $this->loadTemplate("Front/voyage/tarif.html.twig", "Front/voyage/info_buttom.html.twig", 4)->display($context);
        // line 5
        echo "  ";
        $this->loadTemplate("Front/voyage/avis.html.twig", "Front/voyage/info_buttom.html.twig", 5)->display($context);
        // line 6
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/info_buttom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab-content\" id=\"v-pills-tabContent\">
  {% include 'Front/voyage/programme.html.twig' %}
  {% include 'Front/voyage/infos_pratiques.html.twig' %}
  {% include 'Front/voyage/tarif.html.twig' %}
  {% include 'Front/voyage/avis.html.twig' %}
</div>", "Front/voyage/info_buttom.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/info_buttom.html.twig");
    }
}
