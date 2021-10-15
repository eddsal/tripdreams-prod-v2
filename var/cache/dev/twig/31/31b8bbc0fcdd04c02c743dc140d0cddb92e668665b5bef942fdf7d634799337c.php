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

/* Front/voyage/tarif.html.twig */
class __TwigTemplate_1c6defb7f72d6f3d81da9bb113db9edaeea6c3aaa221148d5d76c7908926dd3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/tarif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/tarif.html.twig"));

        // line 1
        echo "
<table class=\"table table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
  <thead>
    <tr>
      <th>Prix</th>
      <th>Date de départ</th>
      <th>Date de retour</th>
      <th>Capacité</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Prix</th>
      <th>Date de départ</th>
      <th>Date de retour</th>
      <th>Capacité</th>
    </tr>
  </tfoot>
  <tbody>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tarifs"]) || array_key_exists("tarifs", $context) ? $context["tarifs"] : (function () { throw new RuntimeError('Variable "tarifs" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
            // line 21
            echo "      <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 22), "html", null, true);
            echo " €</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "depart", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "retour", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/tarif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table class=\"table table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
  <thead>
    <tr>
      <th>Prix</th>
      <th>Date de départ</th>
      <th>Date de retour</th>
      <th>Capacité</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Prix</th>
      <th>Date de départ</th>
      <th>Date de retour</th>
      <th>Capacité</th>
    </tr>
  </tfoot>
  <tbody>
    {% for tarif in tarifs %}
      <tr>
        <td>{{tarif.prix}} €</td>
        <td>{{tarif.depart|date(\"d/m/Y\")}}</td>
        <td>{{tarif.retour|date(\"d/m/Y\")}}</td>
        <td>{{tarif.capacite}}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>", "Front/voyage/tarif.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/tarif.html.twig");
    }
}
