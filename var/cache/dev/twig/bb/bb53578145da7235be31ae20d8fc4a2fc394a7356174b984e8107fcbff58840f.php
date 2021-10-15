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

/* admin/left_menu.html.twig */
class __TwigTemplate_13c9c9365443d91aead70077f4570d9f8715723ec22b75699dd5425b318efbed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/left_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/left_menu.html.twig"));

        // line 1
        echo "
<div class=\"c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show\" id=\"sidebar\">
    <div class=\"c-sidebar-brand d-lg-down-none\">
        TripDream
    </div>
    <ul class=\"c-sidebar-nav\">
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">
                <i class=\"bi bi-speedometer\"></i>
                <span class=\"ml-2\">Dashboard</span><span class=\"badge badge-info\">NEW</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-title\">Utilisateurs</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_list");
        echo "\">
                <i class=\"bi bi-people\"></i>
                <span class=\"ml-2\">Tous les utilisateurs</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item c-sidebar-nav-dropdown\">
            <a class=\"c-sidebar-nav-link c-sidebar-nav-dropdown-toggle\" href=\"#\">
                <i class=\"bi bi-gear\"></i>
                <span class=\"ml-2\">Opérations</span>
            </a>
            <ul class=\"c-sidebar-nav-dropdown-items\">
                <li class=\"c-sidebar-nav-item\"><a class=\"c-sidebar-nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_user");
        echo "\"><span class=\"c-sidebar-nav-icon\"></span>Création</a></li>
            </ul>
        </li>
        <li class=\"c-sidebar-nav-title\">Voyages</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_list");
        echo "\">
                <i class=\"bi bi-list\"></i>
                <span class=\"ml-2\">Tous les voyages</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item c-sidebar-nav-dropdown\">
            <a class=\"c-sidebar-nav-link c-sidebar-nav-dropdown-toggle\" href=\"#\">
                <i class=\"bi bi-gear\"></i>
                <span class=\"ml-2\">Opérations</span>
            </a>
            <ul class=\"c-sidebar-nav-dropdown-items\">
                <li class=\"c-sidebar-nav-item\"><a class=\"c-sidebar-nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_new");
        echo "\"><span class=\"c-sidebar-nav-icon\"></span>Création</a></li>
            </ul>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_list");
        echo "\">
                <i class=\"bi bi-calendar-week\"></i>
                <span class=\"ml-2\">Programmes</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_list");
        echo "\">
                <i class=\"bi bi-currency-exchange\"></i>
                <span class=\"ml-2\">Tarifs</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-title\">Éléments supplémentaires</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_list");
        echo "\">
                <i class=\"bi bi-controller\"></i>
                <span class=\"ml-2\">Activités</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_pr_list");
        echo "\">
                <i class=\"bi bi-info-circle\"></i>
                <span class=\"ml-2\">Informations pratiques</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-title\">Général</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saison_list");
        echo "\">
                <i class=\"bi bi-umbrella\"></i>
                <span class=\"ml-2\">Saisons</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays_list");
        echo "\">
                <i class=\"bi bi-globe\"></i>
                <span class=\"ml-2\">Pays</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_list");
        echo "\">
                <i class=\"bi bi-building\"></i>
                <span class=\"ml-2\">Villes</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adresse_list");
        echo "\">
                <i class=\"bi bi-geo-alt\"></i>
                <span class=\"ml-2\">Adresses</span>
            </a>
        </li>
    </ul>
    <button class=\"c-sidebar-minimizer c-class-toggler\" type=\"button\" data-target=\"_parent\" data-class=\"c-sidebar-minimized\"></button>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/left_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 90,  161 => 84,  152 => 78,  143 => 72,  133 => 65,  124 => 59,  114 => 52,  105 => 46,  98 => 42,  84 => 31,  76 => 26,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show\" id=\"sidebar\">
    <div class=\"c-sidebar-brand d-lg-down-none\">
        TripDream
    </div>
    <ul class=\"c-sidebar-nav\">
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{path('admin_index')}}\">
                <i class=\"bi bi-speedometer\"></i>
                <span class=\"ml-2\">Dashboard</span><span class=\"badge badge-info\">NEW</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-title\">Utilisateurs</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('users_list') }}\">
                <i class=\"bi bi-people\"></i>
                <span class=\"ml-2\">Tous les utilisateurs</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item c-sidebar-nav-dropdown\">
            <a class=\"c-sidebar-nav-link c-sidebar-nav-dropdown-toggle\" href=\"#\">
                <i class=\"bi bi-gear\"></i>
                <span class=\"ml-2\">Opérations</span>
            </a>
            <ul class=\"c-sidebar-nav-dropdown-items\">
                <li class=\"c-sidebar-nav-item\"><a class=\"c-sidebar-nav-link\" href=\"{{ path('new_user') }}\"><span class=\"c-sidebar-nav-icon\"></span>Création</a></li>
            </ul>
        </li>
        <li class=\"c-sidebar-nav-title\">Voyages</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('voyage_list') }}\">
                <i class=\"bi bi-list\"></i>
                <span class=\"ml-2\">Tous les voyages</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item c-sidebar-nav-dropdown\">
            <a class=\"c-sidebar-nav-link c-sidebar-nav-dropdown-toggle\" href=\"#\">
                <i class=\"bi bi-gear\"></i>
                <span class=\"ml-2\">Opérations</span>
            </a>
            <ul class=\"c-sidebar-nav-dropdown-items\">
                <li class=\"c-sidebar-nav-item\"><a class=\"c-sidebar-nav-link\" href=\"{{ path('admin_voyage_new') }}\"><span class=\"c-sidebar-nav-icon\"></span>Création</a></li>
            </ul>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('programme_list') }}\">
                <i class=\"bi bi-calendar-week\"></i>
                <span class=\"ml-2\">Programmes</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('tarif_list') }}\">
                <i class=\"bi bi-currency-exchange\"></i>
                <span class=\"ml-2\">Tarifs</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-title\">Éléments supplémentaires</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('activite_list') }}\">
                <i class=\"bi bi-controller\"></i>
                <span class=\"ml-2\">Activités</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('info_pr_list') }}\">
                <i class=\"bi bi-info-circle\"></i>
                <span class=\"ml-2\">Informations pratiques</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-title\">Général</li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('saison_list') }}\">
                <i class=\"bi bi-umbrella\"></i>
                <span class=\"ml-2\">Saisons</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('pays_list') }}\">
                <i class=\"bi bi-globe\"></i>
                <span class=\"ml-2\">Pays</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('ville_list') }}\">
                <i class=\"bi bi-building\"></i>
                <span class=\"ml-2\">Villes</span>
            </a>
        </li>
        <li class=\"c-sidebar-nav-item\">
            <a class=\"c-sidebar-nav-link\" href=\"{{ path('adresse_list') }}\">
                <i class=\"bi bi-geo-alt\"></i>
                <span class=\"ml-2\">Adresses</span>
            </a>
        </li>
    </ul>
    <button class=\"c-sidebar-minimizer c-class-toggler\" type=\"button\" data-target=\"_parent\" data-class=\"c-sidebar-minimized\"></button>
</div>", "admin/left_menu.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/left_menu.html.twig");
    }
}
