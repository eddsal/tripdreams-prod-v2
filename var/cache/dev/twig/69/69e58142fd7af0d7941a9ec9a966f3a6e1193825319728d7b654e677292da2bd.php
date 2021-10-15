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

/* Front/search/index.html.twig */
class __TwigTemplate_97dc1d512bc4a8df125b7617048a7f7c439fd03cc3ce4f952f52e1522852948d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/search/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "Front/search/index.html.twig", 1);
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

        echo "Résulat recherche";
        
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
    ";
        // line 7
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "method", [], "any", false, false, false, 7), "POST"))) {
            // line 8
            echo "        <div class=\"container\">
            <div class=\"section\">
                ";
            // line 10
            if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 10, $this->source); })())), 0))) {
                // line 11
                echo "                    <h4>Aucun résulat pour votre recherche.</h4>
                ";
            } else {
                // line 13
                echo "
                    <h3 class=\"mt-3\">Vos résulats de recherche :</h3>
                    
                    <div class=\"columns is-multiline\">
                        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
                    // line 18
                    echo "
                            <div class=\"column is-one-third\">
                                <div class=\"card is-shady\">
                                    <div class=\"card-image\">
                                        <a class=\"image is-16by9\" href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                    echo "\">
                                            <img src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["voyage"]), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "name", [], "any", false, false, false, 23), "html", null, true);
                    echo "\" />
                                        </a>
                                    </div>
                                    <div class=\"v-card-content\">
                                        <p class=\"title is-6\" align=\"center\"><a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "name", [], "any", false, false, false, 27), "html", null, true);
                    echo "</a></p>
                                        <p>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 28), "html", null, true);
                    echo "</p>
                                    </div>
                                    <footer class=\"card-footer\">
                                        <span class=\"card-footer-item\">";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "tarif", [], "any", false, false, false, 31)), "prix", [], "any", false, false, false, 31), "html", null, true);
                    echo " €</span>
                                        <span class=\"card-footer-item\">";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voyage"], "infoPratique", [], "any", false, false, false, 32), "duree", [], "any", false, false, false, 32), "html", null, true);
                    echo " jours</span>
                                        <span class=\"card-footer-item\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voyage"], "infoPratique", [], "any", false, false, false, 33), "depart", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                    echo "</span>
                                    </footer>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                    </div>
                    

                ";
            }
            // line 42
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  163 => 38,  152 => 33,  148 => 32,  144 => 31,  138 => 28,  132 => 27,  123 => 23,  119 => 22,  113 => 18,  109 => 17,  103 => 13,  99 => 11,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Résulat recherche{% endblock %}

{% block body %}

    {% if app.request.method == 'POST' %}
        <div class=\"container\">
            <div class=\"section\">
                {% if voyages | length == 0 %}
                    <h4>Aucun résulat pour votre recherche.</h4>
                {% else %}

                    <h3 class=\"mt-3\">Vos résulats de recherche :</h3>
                    
                    <div class=\"columns is-multiline\">
                        {% for voyage in voyages %}

                            <div class=\"column is-one-third\">
                                <div class=\"card is-shady\">
                                    <div class=\"card-image\">
                                        <a class=\"image is-16by9\" href=\"{{ path('voyage_show', {'id': voyage.id}) }}\">
                                            <img src=\"{{ vich_uploader_asset(voyage) }}\" alt=\"{{ voyage.name }}\" />
                                        </a>
                                    </div>
                                    <div class=\"v-card-content\">
                                        <p class=\"title is-6\" align=\"center\"><a href=\"{{ path('voyage_show', {'id': voyage.id}) }}\" >{{voyage.name}}</a></p>
                                        <p>{{voyage.description}}</p>
                                    </div>
                                    <footer class=\"card-footer\">
                                        <span class=\"card-footer-item\">{{ (voyage.tarif|first).prix }} €</span>
                                        <span class=\"card-footer-item\">{{ voyage.infoPratique.duree }} jours</span>
                                        <span class=\"card-footer-item\">{{ voyage.infoPratique.depart|date(\"d/m/Y\") }}</span>
                                    </footer>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    

                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}", "Front/search/index.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/search/index.html.twig");
    }
}
