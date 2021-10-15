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

/* Front/purchase/index.html.twig */
class __TwigTemplate_650557b10230ababb8052bfbed95f977f779244a365c09742304dad251acd452 extends Template
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
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/purchase/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/purchase/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "Front/purchase/index.html.twig", 1);
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

        echo "Historique d'achats";
        
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
        echo "
<div class=\"container\">
  <div class=\"section\">
    ";
        // line 9
        if ( !twig_test_empty((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "        <div class=\"card is-shady column is-offset-one-quarter\">
            <div class=\"card-header\">
                <p class=\"title is-6\">Votre historique d'achats</p>
            </div>
            <div class=\"v-card-content mt-5 mb-5\">
                <table class=\"table table is-striped is-narrow is-hoverable\">
                    <thead>
                        <tr>
                            <th>Aperçu</th>
                            <th>Dénomination</th>
                            ";
            // line 21
            echo "                            <th>Opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
                // line 26
                echo "                        <tr>
                            <td>
                                <a class=\"image is-16by9\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["purchase"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "\" />
                                </a>
                            </td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                            ";
                // line 34
                echo "                            <td>
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\"><button class=\"button is-small is-success\"><i class=\"bi bi-eye\"></i></button></a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        } else {
            // line 44
            echo "        <div class=\"box\">
            <p class=\"has-text-centered has-text-danger-dark\">
                Votre historique d'achats est vide
            </p>
        </div>
    ";
        }
        // line 50
        echo "  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/purchase/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  157 => 44,  150 => 39,  140 => 35,  137 => 34,  133 => 32,  125 => 29,  121 => 28,  117 => 26,  113 => 25,  107 => 21,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Historique d'achats{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"section\">
    {% if purchases is not empty %}
        <div class=\"card is-shady column is-offset-one-quarter\">
            <div class=\"card-header\">
                <p class=\"title is-6\">Votre historique d'achats</p>
            </div>
            <div class=\"v-card-content mt-5 mb-5\">
                <table class=\"table table is-striped is-narrow is-hoverable\">
                    <thead>
                        <tr>
                            <th>Aperçu</th>
                            <th>Dénomination</th>
                            {# <th>Prix</th> #}
                            <th>Opérations</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for purchase in purchases %}
                        <tr>
                            <td>
                                <a class=\"image is-16by9\" href=\"{{ path('voyage_show', {'id': purchase.id}) }}\">
                                    <img src=\"{{ vich_uploader_asset(purchase) }}\" alt=\"{{ purchase.name }}\" />
                                </a>
                            </td>
                            <td>{{ purchase.name }}</td>
                            {# <td>{{ purchase.tarif|first.prix }} €</td> #}
                            <td>
                                <a href=\"{{ path('voyage_show', {'id': purchase.id}) }}\"><button class=\"button is-small is-success\"><i class=\"bi bi-eye\"></i></button></a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% else %}
        <div class=\"box\">
            <p class=\"has-text-centered has-text-danger-dark\">
                Votre historique d'achats est vide
            </p>
        </div>
    {% endif %}
  </div>
</div>

{% endblock %}

", "Front/purchase/index.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/purchase/index.html.twig");
    }
}
