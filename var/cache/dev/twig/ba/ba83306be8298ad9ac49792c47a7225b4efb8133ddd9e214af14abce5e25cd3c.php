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

/* Front/favorie/index.html.twig */
class __TwigTemplate_70326e64b959ac4f9a5647ce209e641223d9d4003c19809510024846dbd3b59d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/favorie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/favorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "Front/favorie/index.html.twig", 1);
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

        echo "Favoris";
        
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
        if ( !twig_test_empty((isset($context["favories"]) || array_key_exists("favories", $context) ? $context["favories"] : (function () { throw new RuntimeError('Variable "favories" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <div class=\"box\">
                <p class=\"has-text-centered\">
                    Mes favoris
                </p>
            </div>
            
            <div class=\"columns is-multiline\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favories"]) || array_key_exists("favories", $context) ? $context["favories"] : (function () { throw new RuntimeError('Variable "favories" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favorie"]) {
                // line 18
                echo "                <div class=\"column is-one-third\">
                    <div class=\"card is-shady\">
                        <div class=\"card-image\">
                            <a class=\"image is-16by9\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["favorie"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["favorie"]), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorie"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "\" />
                            </a>
                        </div>
                        <div class=\"v-card-content\">
                            <p class=\"title is-6\" align=\"center\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorie"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
                            <p>";
                // line 27
                echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["favorie"], "description", [], "any", false, false, false, 27))), 100))) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["favorie"], "description", [], "any", false, false, false, 27)), 0, 100) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["favorie"], "description", [], "any", false, false, false, 27)))), "html", null, true);
                echo "</p>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorie"], "user", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
                echo "</span>
                            <span class=\"card-footer-item\">
                                <a data-urlDelBtn='";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["favorie"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "' data-bs-toggle='modal' data-bs-target='#dangerModal' onclick=\"myFunction(this)\">
                                    <button class=\"button is-small is-danger\">Supprimer</button>
                                </a>
                            </span>
                            <span class=\"card-footer-item\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["favorie"], "tarif", [], "any", false, false, false, 36)), "prix", [], "any", false, false, false, 36), "html", null, true);
                echo " €</span>
                        </footer>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </div>

            <div class=\"pagination justify-content-center\">
                ";
            // line 44
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["favories"]) || array_key_exists("favories", $context) ? $context["favories"] : (function () { throw new RuntimeError('Variable "favories" does not exist.', 44, $this->source); })()));
            echo "
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
            // line 75
            echo "            <div class=\"box\">
                <p class=\"has-text-centered has-text-danger-dark\">
                    La liste de favoris est vide
                </p>
            </div>
        ";
        }
        // line 81
        echo "    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/favorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  198 => 75,  164 => 44,  159 => 41,  148 => 36,  141 => 32,  136 => 30,  130 => 27,  126 => 26,  117 => 22,  113 => 21,  108 => 18,  104 => 17,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Favoris{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"section\">
        {% if favories is not empty %}
            <div class=\"box\">
                <p class=\"has-text-centered\">
                    Mes favoris
                </p>
            </div>
            
            <div class=\"columns is-multiline\">
            {% for favorie in favories %}
                <div class=\"column is-one-third\">
                    <div class=\"card is-shady\">
                        <div class=\"card-image\">
                            <a class=\"image is-16by9\" href=\"{{ path('voyage_show', {'id': favorie.id}) }}\">
                                <img src=\"{{ vich_uploader_asset(favorie) }}\" alt=\"{{ favorie.name }}\" />
                            </a>
                        </div>
                        <div class=\"v-card-content\">
                            <p class=\"title is-6\" align=\"center\">{{ favorie.name }}</p>
                            <p>{{ favorie.description|striptags|length > 100 ? favorie.description|striptags|slice(0, 100) ~ '...' : favorie.description|striptags }}</p>
                        </div>
                        <footer class=\"card-footer\">
                            <span class=\"card-footer-item\">{{ favorie.user.username }}</span>
                            <span class=\"card-footer-item\">
                                <a data-urlDelBtn='{{ path('favorie_delete', {'id': favorie.id})}}' data-bs-toggle='modal' data-bs-target='#dangerModal' onclick=\"myFunction(this)\">
                                    <button class=\"button is-small is-danger\">Supprimer</button>
                                </a>
                            </span>
                            <span class=\"card-footer-item\">{{ favorie.tarif|first.prix }} €</span>
                        </footer>
                    </div>
                </div>
            {% endfor %}
            </div>

            <div class=\"pagination justify-content-center\">
                {{ knp_pagination_render(favories) }}
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
                    La liste de favoris est vide
                </p>
            </div>
        {% endif %}
    </div>
</div>

{% endblock %}", "Front/favorie/index.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/favorie/index.html.twig");
    }
}
