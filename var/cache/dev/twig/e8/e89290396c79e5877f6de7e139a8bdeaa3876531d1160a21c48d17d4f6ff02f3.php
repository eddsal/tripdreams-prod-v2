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

/* Front/panier/index.html.twig */
class __TwigTemplate_3bfa4d8671e6d8499357a0a1d46b4700832696541205d0b83eca131501f3b775 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "Front/panier/index.html.twig", 1);
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

        echo "Panier";
        
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

        // line 17
        echo "
<input type=\"hidden\" id=\"currentTotal\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", [0 => "total"], "method", false, false, false, 18), "html", null, true);
        echo "\" />
<input type=\"hidden\" id=\"setTotal\" value=\"\" />

<div class=\"container\">
    <div class=\"section\">
        ";
        // line 23
        if ( !twig_test_empty((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "            <div class=\"box\">
                <h1 class=\"has-text-centered\">
                    Mon panier
                </h1>
            </div>
            <div class=\"columns is-multiline\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                // line 31
                echo "                <div class=\"column is-one-third\">
                    <div class=\"card is-shady\">
                        <div class=\"card-image\">
                            <a class=\"image is-16by9\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["panier"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "\" />
                            </a>
                        </div>
                        <div class=\"v-card-content\">
                            <p class=\"title is-6\" align=\"center\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</p>
                            <p>";
                // line 40
                echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["panier"], "description", [], "any", false, false, false, 40))), 100))) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["panier"], "description", [], "any", false, false, false, 40)), 0, 100) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["panier"], "description", [], "any", false, false, false, 40)))), "html", null, true);
                echo "</p>

                            <form method=\"post\" class=\"mt-5 mb-3\">
                                <div class=\"control has-icons-left\">
                                    <div class=\"select is-info\">
                                        <select name='chosen_price' onchange=\"updatePanier(event)\"> 
                                            <option value=\"\" data-id=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "\" data-prix=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "tarif", [], "any", false, false, false, 46), 0, [], "array", false, false, false, 46), "prix", [], "any", false, false, false, 46), "html", null, true);
                echo "\" data-capacite=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "tarif", [], "any", false, false, false, 46), 0, [], "array", false, false, false, 46), "capacite", [], "any", false, false, false, 46), "html", null, true);
                echo "\">Choisissez votre option de voyage</option>
                                            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["panier"], "tarif", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
                    // line 48
                    echo "                                                ";
                    // line 50
                    echo "                                                <option value=\"\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" data-prix=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" data-capacite=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 50), "html", null, true);
                    echo "\">
                                                    ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "depart", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "retour", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
                    echo ", prix: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 51), "html", null, true);
                    echo " €
                                                </options>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                        </select>
                                    </div>
                                    <span class=\"icon is-small is-left\">
                                        <i class=\"bi bi-globe\"></i>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\">
                                <a data-urlDelBtn='";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "' data-bs-toggle='modal' data-bs-target='#dangerModal' onclick=\"myFunction(this)\">
                                    <button class=\"button is-small is-danger\"><i class='bi bi-x-square'></i></button>
                                </a>
                            </span>
                            ";
                // line 69
                echo "                            <span class=\"card-footer-item\"><input name=\"input-prices\" id=\"voyage-price";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" style='width:100%;' value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "tarif", [], "any", false, false, false, 69), 0, [], "array", false, false, false, 69), "prix", [], "any", false, false, false, 69), "html", null, true);
                echo "' disabled>&nbsp;€</input></span>
                            <span class=\"card-footer-item\"><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"><button class=\"button is-small is-success\"><i class='bi bi-eye'></i></button></a></span>
                        </footer>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "            </div>

            <div class=\"pagination justify-content-center\">
                ";
            // line 78
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 78, $this->source); })()));
            echo "
            </div>

            <div class=\"card\">
                <div class=\"v-card-content\">
                    <p><b>Total:</b> <label id=\"labelTotal\" value='";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "get", [0 => "total"], "method", false, false, false, 83), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "get", [0 => "total"], "method", false, false, false, 83), "html", null, true);
            echo "</label>€</p>
                </div>
                <footer class=\"card-footer\">
                    <span class=\"card-footer-item\"><span><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_validation");
            echo "\"><button class=\"button is-info\">Passer la commande</button></a></span></span>
                </footer>
            </div>

            <div class=\"modal fade\" id=\"dangerModal\" style='z-index:2000' tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmez-vous la suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                    <div class=\"modal-body\">
                        Êtes-vous sûr de vouloir supprimer définitivement l'élément sélectionné ?
                    </div>
                    <div class=\"modal-footer\">
                        <a><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button></a>
                        <a href=\"\" class='confirm'><button type=\"button\" class=\"btn btn-danger\">Confirmer</button></a>
                    </div>
                </div>
            </div>

            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script>
                function myFunction(e) {
                    urlDelBtn = \$(e).attr('data-urlDelBtn');
                    modalId = \$(e).attr(\"data-bs-target\")
                    modal = \$(modalId);
                    
                    \$(modalId+ ' .modal-footer a.confirm').attr(\"href\", urlDelBtn)
                };
            </script>
        ";
        } else {
            // line 118
            echo "            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    Le panier est vide
                </p>
            </div>
        ";
        }
        // line 124
        echo "    </div>
</div>

<script>

    \$( document ).ready(function() {
    });

    function updatePanier(e) {
        id = event.target.options[event.target.selectedIndex].dataset.id;
        newPrice = event.target.options[event.target.selectedIndex].dataset.prix;
        capacite = event.target.options[event.target.selectedIndex].dataset.capacite;

        oldPrice = parseInt(document.getElementById(\"voyage-price\"+id).value);
        document.getElementById(\"voyage-price\"+id).value = newPrice;

        currentTotal = parseInt(\$(\"#currentTotal\").val());
        newTotal = currentTotal - oldPrice + parseInt(newPrice);

        //console.log(\"oldTotal => \", currentTotal);
        //console.log(\"newTotal => \", newTotal);
        
        session = \"{\"+\"{\" + \" app\" + \".session.set(\" + \"'total', \" + newTotal + \") }}\";
        \$(\"#currentTotal\").val(newTotal);
        \$(\"#setTotal\").val(session);
        \$(\"#labelTotal\").html(newTotal);
        \$(\"#labelTotal\").val(newTotal);
        //getAllTripPrices();

        \$.ajax({
            url: ";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo ",
            type: \"POST\",
            data: {\"newTotal\": newTotal},
            success: function(data, textStatus, jqXHR) {
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    }

    // TO-DO
    /*
    function getAllTripPrices() {
        inputs = \$(\"[name='input-prices']\");
        prices = [];

        \$('input[name=\"input-prices\"]').each(function(){
            console.log(this);
        });

        for (input in inputs) {
        }

        return prices;
    }
    */

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 154,  281 => 124,  273 => 118,  238 => 86,  230 => 83,  222 => 78,  217 => 75,  206 => 70,  199 => 69,  192 => 64,  180 => 54,  167 => 51,  158 => 50,  156 => 48,  152 => 47,  144 => 46,  135 => 40,  131 => 39,  122 => 35,  118 => 34,  113 => 31,  109 => 30,  101 => 24,  99 => 23,  91 => 18,  88 => 17,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
{# {% set totale = 0 %}
{% set tarifs = [] %}

{% for panier in paniers %}
    {% set tarifs = tarifs|merge([panier.tarif|first.prix]) %}
    <input type=\"hidden\" data-id=\"{{ panier.id }}\" id=\"{{ loop.index0 }}\" value=\"{{ panier.tarif[loop.index0].prix }}\" />
{% endfor %}

{% for i in tarifs %}
    {% set totale = totale + i %}
{% endfor %} #}

<input type=\"hidden\" id=\"currentTotal\" value=\"{{ app.session.get('total') }}\" />
<input type=\"hidden\" id=\"setTotal\" value=\"\" />

<div class=\"container\">
    <div class=\"section\">
        {% if paniers is not empty %}
            <div class=\"box\">
                <h1 class=\"has-text-centered\">
                    Mon panier
                </h1>
            </div>
            <div class=\"columns is-multiline\">
            {% for panier in paniers %}
                <div class=\"column is-one-third\">
                    <div class=\"card is-shady\">
                        <div class=\"card-image\">
                            <a class=\"image is-16by9\" href=\"{{ path('voyage_show', {'id': panier.id}) }}\">
                                <img src=\"{{ vich_uploader_asset(panier) }}\" alt=\"{{ panier.name }}\" />
                            </a>
                        </div>
                        <div class=\"v-card-content\">
                            <p class=\"title is-6\" align=\"center\">{{ panier.name }}</p>
                            <p>{{ panier.description|striptags|length > 100 ? panier.description|striptags|slice(0, 100) ~ '...' : panier.description|striptags }}</p>

                            <form method=\"post\" class=\"mt-5 mb-3\">
                                <div class=\"control has-icons-left\">
                                    <div class=\"select is-info\">
                                        <select name='chosen_price' onchange=\"updatePanier(event)\"> 
                                            <option value=\"\" data-id=\"{{ panier.id }}\" data-prix=\"{{ panier.tarif[0].prix }}\" data-capacite=\"{{ panier.tarif[0].capacite }}\">Choisissez votre option de voyage</option>
                                            {% for tarif in panier.tarif %}
                                                {# <optgroup label=\"{{ tarif.depart|date(\"d/m/Y\") }} - {{ tarif.retour|date(\"d/m/Y\") }}\">
                                                </optgroup> #}
                                                <option value=\"\" data-id=\"{{ panier.id }}\" data-prix=\"{{ tarif.prix }}\" data-capacite=\"{{ tarif.capacite }}\">
                                                    {{ tarif.depart|date(\"d/m/Y\") }} - {{ tarif.retour|date(\"d/m/Y\") }}, prix: {{ tarif.prix }} €
                                                </options>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <span class=\"icon is-small is-left\">
                                        <i class=\"bi bi-globe\"></i>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\">
                                <a data-urlDelBtn='{{ path('panier_delete', {'id': panier.id})}}' data-bs-toggle='modal' data-bs-target='#dangerModal' onclick=\"myFunction(this)\">
                                    <button class=\"button is-small is-danger\"><i class='bi bi-x-square'></i></button>
                                </a>
                            </span>
                            {# <span class=\"card-footer-item\"><a href=\"{{ path('panier_delete', {'id': panier.id}) }}\"><button class=\"button is-small is-danger\">Supprimer</button></a></span> #}
                            <span class=\"card-footer-item\"><input name=\"input-prices\" id=\"voyage-price{{ panier.id }}\" style='width:100%;' value='{{ panier.tarif[0].prix }}' disabled>&nbsp;€</input></span>
                            <span class=\"card-footer-item\"><a href=\"{{ path('voyage_show', {'id': panier.id}) }}\"><button class=\"button is-small is-success\"><i class='bi bi-eye'></i></button></a></span>
                        </footer>
                    </div>
                </div>
            {% endfor %}
            </div>

            <div class=\"pagination justify-content-center\">
                {{ knp_pagination_render(paniers) }}
            </div>

            <div class=\"card\">
                <div class=\"v-card-content\">
                    <p><b>Total:</b> <label id=\"labelTotal\" value='{{ app.session.get('total') }}'>{{ app.session.get('total') }}</label>€</p>
                </div>
                <footer class=\"card-footer\">
                    <span class=\"card-footer-item\"><span><a href=\"{{ path('panier_validation')}}\"><button class=\"button is-info\">Passer la commande</button></a></span></span>
                </footer>
            </div>

            <div class=\"modal fade\" id=\"dangerModal\" style='z-index:2000' tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmez-vous la suppression</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                    <div class=\"modal-body\">
                        Êtes-vous sûr de vouloir supprimer définitivement l'élément sélectionné ?
                    </div>
                    <div class=\"modal-footer\">
                        <a><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button></a>
                        <a href=\"\" class='confirm'><button type=\"button\" class=\"btn btn-danger\">Confirmer</button></a>
                    </div>
                </div>
            </div>

            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script>
                function myFunction(e) {
                    urlDelBtn = \$(e).attr('data-urlDelBtn');
                    modalId = \$(e).attr(\"data-bs-target\")
                    modal = \$(modalId);
                    
                    \$(modalId+ ' .modal-footer a.confirm').attr(\"href\", urlDelBtn)
                };
            </script>
        {% else %}
            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    Le panier est vide
                </p>
            </div>
        {% endif %}
    </div>
</div>

<script>

    \$( document ).ready(function() {
    });

    function updatePanier(e) {
        id = event.target.options[event.target.selectedIndex].dataset.id;
        newPrice = event.target.options[event.target.selectedIndex].dataset.prix;
        capacite = event.target.options[event.target.selectedIndex].dataset.capacite;

        oldPrice = parseInt(document.getElementById(\"voyage-price\"+id).value);
        document.getElementById(\"voyage-price\"+id).value = newPrice;

        currentTotal = parseInt(\$(\"#currentTotal\").val());
        newTotal = currentTotal - oldPrice + parseInt(newPrice);

        //console.log(\"oldTotal => \", currentTotal);
        //console.log(\"newTotal => \", newTotal);
        
        session = \"{\"+\"{\" + \" app\" + \".session.set(\" + \"'total', \" + newTotal + \") }}\";
        \$(\"#currentTotal\").val(newTotal);
        \$(\"#setTotal\").val(session);
        \$(\"#labelTotal\").html(newTotal);
        \$(\"#labelTotal\").val(newTotal);
        //getAllTripPrices();

        \$.ajax({
            url: {{ path('panier_index') }},
            type: \"POST\",
            data: {\"newTotal\": newTotal},
            success: function(data, textStatus, jqXHR) {
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Erreur AJAXs!');
            }
        });
    }

    // TO-DO
    /*
    function getAllTripPrices() {
        inputs = \$(\"[name='input-prices']\");
        prices = [];

        \$('input[name=\"input-prices\"]').each(function(){
            console.log(this);
        });

        for (input in inputs) {
        }

        return prices;
    }
    */

</script>

{% endblock %}
", "Front/panier/index.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/panier/index.html.twig");
    }
}
