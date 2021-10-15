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

/* agence/header.html.twig */
class __TwigTemplate_2e84a1033ecbda366cf6315bae1bda35d8cf31c8d3bc880cf9f18251572ae3bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/header.html.twig"));

        // line 1
        echo "<!-- START NAV -->
<nav class=\"navbar is-white\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agence_index");
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

        <div id=\"navMainMenuAgence\" class=\"navbar-menu\">

            <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agence_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Mes voyages</a>
                <a class=\"navbar-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_new");
        echo "\">Créer un voyage</a>
            </div>

        
            <div class=\"navbar-end\">
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <span class=\"navbar-item\">
                        <div class=\"button is-outlined\">
                            <span class=\"mr-2\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
                            <i class=\"bi bi-person-circle\"></i>
                        </div>
                    </span>
                    <div class=\"navbar-dropdown is-right\">
                        <a  class=\"navbar-item\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_front_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">
                            <i class=\"bi bi-person-circle\"></i>
                            <span class=\"ml-2\">Mon compte</span>
                        </a>
                        <a class=\"navbar-item\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                            <i class=\"bi bi-box-arrow-left\"></i>
                            <span class=\"ml-2\">Déconnexion</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- END NAV -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agence/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 32,  83 => 27,  72 => 19,  68 => 18,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- START NAV -->
<nav class=\"navbar is-white\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <a href=\"{{ path('agence_index') }}\">
                <img src=\"{{ asset('build/images/logo4.png') }}\" alt=\"TripDream: Trouvez et réservez des voyages en 1 clic\" height=\"100\" width=\"50\">
            </a>
            <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            </a>
        </div>

        <div id=\"navMainMenuAgence\" class=\"navbar-menu\">

            <div class=\"navbar-start\">
                <a class=\"navbar-item\" href=\"{{ path('agence_voyage_show', {'id': app.user.id}) }}\">Mes voyages</a>
                <a class=\"navbar-item\" href=\"{{path('voyage_new')}}\">Créer un voyage</a>
            </div>

        
            <div class=\"navbar-end\">
                <div class=\"navbar-item has-dropdown is-hoverable\">
                    <span class=\"navbar-item\">
                        <div class=\"button is-outlined\">
                            <span class=\"mr-2\">{{ app.user.username }}</span>
                            <i class=\"bi bi-person-circle\"></i>
                        </div>
                    </span>
                    <div class=\"navbar-dropdown is-right\">
                        <a  class=\"navbar-item\" href=\"{{ path('show_front_user', {'id': app.user.id}) }}\">
                            <i class=\"bi bi-person-circle\"></i>
                            <span class=\"ml-2\">Mon compte</span>
                        </a>
                        <a class=\"navbar-item\" href=\"{{path('app_logout')}}\">
                            <i class=\"bi bi-box-arrow-left\"></i>
                            <span class=\"ml-2\">Déconnexion</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- END NAV -->", "agence/header.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/agence/header.html.twig");
    }
}
