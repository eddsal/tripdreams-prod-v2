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

/* Front/navigation/menu.html.twig */
class __TwigTemplate_534174ca0111aa1fafbd90d5afdaa30dcf7e76a0bab51e85067667409bf49162 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/menu.html.twig"));

        // line 1
        echo "
<nav class=\"navbar is-light\" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navigation");
        echo "\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo4.png"), "html", null, true);
        echo "\" alt=\"TripDream: Trouvez et réservez des voyages en 1 clic\" height=\"100\" width=\"50\">
            </a>
            <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            </a>
        </div>
        <div id=\"navbarBasicExample\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                ";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), null)))) {
            // line 17
            echo "                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navigation");
            echo "\">
                        Accueil
                        </a>
                    </span>
                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
            echo "\">
                        Voyages
                        </a>
                    </span>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <span class=\"navbar-item\">
                            <a class=\"button is-white is-outlined\">
                            Pays
                            </a>
                        </span>
                        <div class=\"navbar-dropdown\">
                            <form class=\"px-4 py-2\">
                                <input class=\"input is-rounded ds-input\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"search\" onKeyUp='filterSearch(this)'>
                            </form>
                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $context["pays"], 0, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 38
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays_name", ["id" => twig_get_attribute($this->env, $this->source, $context["pays"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class='navbar-item dataSearch' data-search='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pays"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pays"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            <hr class=\"navbar-divider\">
                            <a class=\"navbar-item read-more\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trips_by_pays");
            echo "\">Voir plus...</a>
                        </div>
                    </div>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <span class=\"navbar-item\">
                            <a class=\"button is-white is-outlined\">
                            Activités
                            </a>
                        </span>
                        <div class=\"navbar-dropdown\">
                            <form class=\"px-4 py-2\">
                                <input class=\"input is-rounded ds-input\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"search\" onKeyUp='filterSearch(this)'>
                            </form>
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 54, $this->source); })()), 0, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 55
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_name", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" class='navbar-item dataSearch' data-search='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "name", [], "any", false, false, false, 55), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            <hr class=\"navbar-divider\">
                            <a class=\"navbar-item read-more\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
            echo "\">Voir plus...</a>
                        </div>
                    </div>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <span class=\"navbar-item\">
                            <a class=\"button is-white is-outlined\">
                            Saisons
                            </a>
                        </span>
                        <div class=\"navbar-dropdown\">
                            <form class=\"px-4 py-2\">
                                <input class=\"input is-rounded ds-input\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"search\" onKeyUp='filterSearch(this)'>
                            </form>
                            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["saison"]);
            foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
                // line 72
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saison_name", ["id" => twig_get_attribute($this->env, $this->source, $context["saison"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" class='navbar-item dataSearch' data-search='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["saison"], "name", [], "any", false, false, false, 72), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["saison"], "name", [], "any", false, false, false, 72), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saison'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                            <hr class=\"navbar-divider\">
                        </div>
                    </div>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENCE")) {
            // line 78
            echo "                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agence_index");
            echo "\">
                        Mes voyages
                        </a>
                    </span>
                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
            echo "\">
                        Créer un voyage
                        </a>
                    </span>
                ";
        }
        // line 89
        echo "            </div>
            <div class=\"navbar-end\">
                ";
        // line 94
        echo "
                ";
        // line 95
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENCE"))) {
            // line 96
            echo "         
                <div class=\"navbar-item has-dropdown is-hoverable\"   >
                     
                    <span class=\"navbar-item\">
                        <div class=\"button is-white is-outlined\">
                            <span class=\"mr-2\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "username", [], "any", false, false, false, 101), "html", null, true);
            echo "</span>
                            <i class=\"bi bi-person-circle\"></i>
                        </div>
                    </span>
                    <div class=\"navbar-dropdown is-right\">
                            <a  class=\"navbar-item\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_front_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">
                                <i class=\"bi bi-person-circle\"></i>
                                <span class=\"ml-2\">Mon compte</span>
                            </a>
                            ";
            // line 110
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 111
                echo "                            <a class=\"navbar-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favorie_index");
                echo "\">
                                <i class=\"bi bi-heart\"></i>
                                <span class=\"ml-2\">Mes favoris</span>
                                <span class=\"badge badge-danger ml-auto\" style=\"background: red\">";
                // line 114
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "favorie", [], "any", false, false, false, 114)), "html", null, true);
                echo "</span>
                            </a>
                            <a class=\"navbar-item\" href=\"";
                // line 116
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
                echo "\">
                                <i class=\"bi bi-pen\"></i>
                                <span class=\"ml-2\">Mon panier</span>
                                <span class=\"badge badge-warning ml-auto\" style=\"background: red\">";
                // line 119
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "paniers", [], "any", false, false, false, 119)), "html", null, true);
                echo "</span>
                            </a>
                            <a class=\"navbar-item\" href=\"";
                // line 121
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
                echo "\">
                                <i class=\"bi bi-credit-card-2-back\"></i>
                                <span class=\"ml-2\">Mon historique</span>
                            </a>
                            <hr class=\"navbar-divider\">
                            ";
            }
            // line 127
            echo "                        <a class=\"navbar-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            <i class=\"bi bi-box-arrow-left\"></i>
                            <span class=\"ml-2\">Déconnexion</span>
                        </a>
                    </div>
                </div>
                ";
        } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 133
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "attributes", [], "any", false, false, false, 133), "get", [0 => "_route"], "method", false, false, false, 133), "app_login"))) {
            // line 134
            echo "                    <div class=\"navbar-item\">
                        <div class=\"buttons\">
                            ";
            // line 136
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", [0 => "_route"], "method", false, false, false, 136), "user_registration"))) {
                // line 137
                echo "                                <a class=\"button is-primary\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
                echo "\">
                                    <strong>Inscription</strong>
                                </a>
                            ";
            }
            // line 141
            echo "                            <a class=\"button is-light\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            Connexion
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 147
        echo "            </div>
        </div>
    </div>
</nav>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
  function filterSearch(input){
    let text = \$(input).val().toLowerCase();
    \$(document).find(\".navbar-dropdown > a\").filter(function () {
      if(\$(this).attr('data-search') !== undefined){
        \$(this).toggle(\$(this).attr('data-search').toLowerCase().indexOf(text) > -1);
      }
    });
  }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 147,  301 => 141,  293 => 137,  291 => 136,  287 => 134,  285 => 133,  275 => 127,  266 => 121,  261 => 119,  255 => 116,  250 => 114,  243 => 111,  241 => 110,  234 => 106,  226 => 101,  219 => 96,  217 => 95,  214 => 94,  210 => 89,  202 => 84,  194 => 79,  191 => 78,  185 => 74,  172 => 72,  168 => 71,  152 => 58,  149 => 57,  136 => 55,  132 => 54,  116 => 41,  113 => 40,  100 => 38,  96 => 37,  79 => 23,  71 => 18,  68 => 17,  66 => 16,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar is-light\" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <a href=\"{{ path('navigation') }}\">
                <img src=\"{{ asset('build/images/logo4.png') }}\" alt=\"TripDream: Trouvez et réservez des voyages en 1 clic\" height=\"100\" width=\"50\">
            </a>
            <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            </a>
        </div>
        <div id=\"navbarBasicExample\" class=\"navbar-menu\">
            <div class=\"navbar-start\">
                {% if (is_granted('ROLE_USER') or app.user == null) %}
                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"{{ path('navigation') }}\">
                        Accueil
                        </a>
                    </span>
                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"{{ path('voyage_index') }}\">
                        Voyages
                        </a>
                    </span>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <span class=\"navbar-item\">
                            <a class=\"button is-white is-outlined\">
                            Pays
                            </a>
                        </span>
                        <div class=\"navbar-dropdown\">
                            <form class=\"px-4 py-2\">
                                <input class=\"input is-rounded ds-input\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"search\" onKeyUp='filterSearch(this)'>
                            </form>
                            {% for pays in pays|slice(0, 20) %}
                                <a href=\"{{ path('pays_name',{'id': pays.id}) }}\" class='navbar-item dataSearch' data-search='{{pays.name}}'>{{pays.name}}</a>
                            {% endfor %}
                            <hr class=\"navbar-divider\">
                            <a class=\"navbar-item read-more\" href=\"{{ path('trips_by_pays') }}\">Voir plus...</a>
                        </div>
                    </div>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <span class=\"navbar-item\">
                            <a class=\"button is-white is-outlined\">
                            Activités
                            </a>
                        </span>
                        <div class=\"navbar-dropdown\">
                            <form class=\"px-4 py-2\">
                                <input class=\"input is-rounded ds-input\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"search\" onKeyUp='filterSearch(this)'>
                            </form>
                            {% for activite in activites|slice(0, 20) %}
                                <a href=\"{{ path('activite_name',{'id': activite.id}) }}\" class='navbar-item dataSearch' data-search='{{activite.name}}'>{{activite.name}}</a>
                            {% endfor %}
                            <hr class=\"navbar-divider\">
                            <a class=\"navbar-item read-more\" href=\"{{ path('voyage_index') }}\">Voir plus...</a>
                        </div>
                    </div>
                    <div class=\"navbar-item has-dropdown is-hoverable\">
                        <span class=\"navbar-item\">
                            <a class=\"button is-white is-outlined\">
                            Saisons
                            </a>
                        </span>
                        <div class=\"navbar-dropdown\">
                            <form class=\"px-4 py-2\">
                                <input class=\"input is-rounded ds-input\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"search\" onKeyUp='filterSearch(this)'>
                            </form>
                            {% for saison in saison %}
                                <a href=\"{{ path('saison_name',{'id': saison.id}) }}\" class='navbar-item dataSearch' data-search='{{saison.name}}'>{{saison.name}}</a>
                            {% endfor %}
                            <hr class=\"navbar-divider\">
                        </div>
                    </div>
                {% elseif (is_granted('ROLE_AGENCE')) %}
                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"{{ path('agence_index') }}\">
                        Mes voyages
                        </a>
                    </span>
                    <span class=\"navbar-item\">
                        <a class=\"button is-white is-outlined\" href=\"{{ path('voyage_new') }}\">
                        Créer un voyage
                        </a>
                    </span>
                {% endif %}
            </div>
            <div class=\"navbar-end\">
                {# <a class=\"navbar-item is-hidden-desktop-only\" href=\"https://github.com/kilwa95/tripeDream.github.io\" target=\"_blank\" onmouseover=\"this.style.background='initial'\">
                    <i class=\"bi bi-github\"></i>
                </a> #}

                {% if is_granted(\"ROLE_USER\") or is_granted(\"ROLE_AGENCE\") %}
         
                <div class=\"navbar-item has-dropdown is-hoverable\"   >
                     
                    <span class=\"navbar-item\">
                        <div class=\"button is-white is-outlined\">
                            <span class=\"mr-2\">{{ app.user.username }}</span>
                            <i class=\"bi bi-person-circle\"></i>
                        </div>
                    </span>
                    <div class=\"navbar-dropdown is-right\">
                            <a  class=\"navbar-item\" href=\"{{ path('show_front_user', {'id': app.user.id}) }}\">
                                <i class=\"bi bi-person-circle\"></i>
                                <span class=\"ml-2\">Mon compte</span>
                            </a>
                            {% if is_granted(\"ROLE_USER\") %}
                            <a class=\"navbar-item\" href=\"{{path('favorie_index')}}\">
                                <i class=\"bi bi-heart\"></i>
                                <span class=\"ml-2\">Mes favoris</span>
                                <span class=\"badge badge-danger ml-auto\" style=\"background: red\">{{ app.user.favorie|length }}</span>
                            </a>
                            <a class=\"navbar-item\" href=\"{{path('panier_index')}}\">
                                <i class=\"bi bi-pen\"></i>
                                <span class=\"ml-2\">Mon panier</span>
                                <span class=\"badge badge-warning ml-auto\" style=\"background: red\">{{ app.user.paniers|length }}</span>
                            </a>
                            <a class=\"navbar-item\" href=\"{{path('purchase_index')}}\">
                                <i class=\"bi bi-credit-card-2-back\"></i>
                                <span class=\"ml-2\">Mon historique</span>
                            </a>
                            <hr class=\"navbar-divider\">
                            {% endif %}
                        <a class=\"navbar-item\" href=\"{{path('app_logout')}}\">
                            <i class=\"bi bi-box-arrow-left\"></i>
                            <span class=\"ml-2\">Déconnexion</span>
                        </a>
                    </div>
                </div>
                {% elseif (app.request.attributes.get('_route') != 'app_login') %}
                    <div class=\"navbar-item\">
                        <div class=\"buttons\">
                            {% if (app.request.attributes.get('_route') != 'user_registration') %}
                                <a class=\"button is-primary\" href=\"{{path('user_registration')}}\">
                                    <strong>Inscription</strong>
                                </a>
                            {% endif %}
                            <a class=\"button is-light\" href=\"{{path('app_login')}}\">
                            Connexion
                            </a>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</nav>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
  function filterSearch(input){
    let text = \$(input).val().toLowerCase();
    \$(document).find(\".navbar-dropdown > a\").filter(function () {
      if(\$(this).attr('data-search') !== undefined){
        \$(this).toggle(\$(this).attr('data-search').toLowerCase().indexOf(text) > -1);
      }
    });
  }
</script>", "Front/navigation/menu.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/navigation/menu.html.twig");
    }
}
