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

/* Front/voyage/info.html.twig */
class __TwigTemplate_fbb6b57a0012d48a096c3b29446eabbf4c4ac401774e4d8c1e5e8e007be75301 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/info.html.twig"));

        // line 1
        echo "  <div class=\"nav flex-row justify-content-between nav-pills\" id=\"v-pills-tab\" role=\"tablist\"
      aria-orientation=\"vertical\">
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link active text-white w-25\"
          id=\"v-pills-programme-tab\" data-toggle=\"pill\" href=\"#v-pills-programme\" role=\"tab\" aria-controls=\"v-pills-home\"
          aria-selected=\"true\">Programme</a>
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link  text-white w-25\"
          id=\"v-pills-pratique-tab\" data-toggle=\"pill\" href=\"#v-pills-pratique\" role=\"tab\" aria-controls=\"v-pills-pratique\"
          aria-selected=\"false\">Infos pratiques</a>
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link text-white w-25\"
          id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\"
          aria-controls=\"v-pills-messages\" aria-selected=\"false\">Tarifs</a>
          
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link text-white w-25\"
          id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\"
          aria-controls=\"v-pills-settings\" aria-selected=\"false\">Avis</a>
  </div> 


  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <div class=\"nav flex-row justify-content-between nav-pills\" id=\"v-pills-tab\" role=\"tablist\"
      aria-orientation=\"vertical\">
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link active text-white w-25\"
          id=\"v-pills-programme-tab\" data-toggle=\"pill\" href=\"#v-pills-programme\" role=\"tab\" aria-controls=\"v-pills-home\"
          aria-selected=\"true\">Programme</a>
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link  text-white w-25\"
          id=\"v-pills-pratique-tab\" data-toggle=\"pill\" href=\"#v-pills-pratique\" role=\"tab\" aria-controls=\"v-pills-pratique\"
          aria-selected=\"false\">Infos pratiques</a>
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link text-white w-25\"
          id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\"
          aria-controls=\"v-pills-messages\" aria-selected=\"false\">Tarifs</a>
          
      <a style=\"background:#ff7e00; border-right:1px solid #fff;\" class=\"nav-link text-white w-25\"
          id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\"
          aria-controls=\"v-pills-settings\" aria-selected=\"false\">Avis</a>
  </div> 


  ", "Front/voyage/info.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/info.html.twig");
    }
}
