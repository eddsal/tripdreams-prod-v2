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

/* admin/top_navigation.html.twig */
class __TwigTemplate_89a1368ba8e278fac80f2c7eb590ae11c1683c4f38ff0708f74b723078b06489 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/top_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/top_navigation.html.twig"));

        // line 1
        echo "<!-- top navigation -->
<header class=\"c-header c-header-light\">
    <button class=\"c-header-toggler c-class-toggler d-md-down-none\" type=\"button\" data-target=\"#sidebar\" data-class=\"c-sidebar-lg-show\" responsive=\"true\">
        <span class=\"c-header-toggler-icon\"></span>
    </button>
    <ul class=\"c-header-nav mr-auto\">
        <li class=\"c-header-nav-item active\">
            <a class=\"c-header-nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a>
        </li>
    </ul>
    ";
        // line 15
        echo "    <ul class=\"c-header-nav ml-auto mr-4\">
        <li class=\"c-header-nav-item d-md-down-none mx-2\"><a class=\"c-header-nav-link\" href=\"#\">
                <svg class=\"c-icon\">
                    <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-bell\"></use>
                </svg></a></li>
        <li class=\"c-header-nav-item d-md-down-none mx-2\"><a class=\"c-header-nav-link\" href=\"#\">
                <svg class=\"c-icon\">
                    <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-list-rich\"></use>
                </svg></a></li>
        <li class=\"c-header-nav-item d-md-down-none mx-2\"><a class=\"c-header-nav-link\" href=\"#\">
                <svg class=\"c-icon\">
                    <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-envelope-open\"></use>
                </svg></a></li>
        <li class=\"c-header-nav-item dropdown\">
            <a class=\"c-header-nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                </svg>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right pt-0\">
                <div class=\"dropdown-header bg-light py-2 text-center\"><h6><strong>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "username", [], "any", false, false, false, 36), "html", null, true);
        echo "</strong></h6></div>
                    ";
        // line 52
        echo "                <div class=\"dropdown-header bg-light py-2\"><strong>Réglages</strong></div>
                    <a class=\"dropdown-item\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">
                        <i class=\"bi bi-eye\"></i>
                        <span class=\"ml-2\">Voir mon profil</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">
                        <i class=\"bi bi-pencil\"></i>
                        <span class=\"ml-2\">Modifier mon profil</span>
                    </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <i class=\"bi bi-box-arrow-left\"></i>
                    <span class=\"ml-2\">Déconnexion</span>
                </a>
            </div>
        </li>
    </ul>
</header>
<!-- /top navigation -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/top_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 62,  95 => 57,  88 => 53,  85 => 52,  81 => 36,  58 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- top navigation -->
<header class=\"c-header c-header-light\">
    <button class=\"c-header-toggler c-class-toggler d-md-down-none\" type=\"button\" data-target=\"#sidebar\" data-class=\"c-sidebar-lg-show\" responsive=\"true\">
        <span class=\"c-header-toggler-icon\"></span>
    </button>
    <ul class=\"c-header-nav mr-auto\">
        <li class=\"c-header-nav-item active\">
            <a class=\"c-header-nav-link\" href=\"{{ path('admin_index') }}\">Accueil <span class=\"sr-only\">(current)</span></a>
        </li>
    </ul>
    {# <form class=\"form-inline my-2 my-lg-0 px-3\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form> #}
    <ul class=\"c-header-nav ml-auto mr-4\">
        <li class=\"c-header-nav-item d-md-down-none mx-2\"><a class=\"c-header-nav-link\" href=\"#\">
                <svg class=\"c-icon\">
                    <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-bell\"></use>
                </svg></a></li>
        <li class=\"c-header-nav-item d-md-down-none mx-2\"><a class=\"c-header-nav-link\" href=\"#\">
                <svg class=\"c-icon\">
                    <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-list-rich\"></use>
                </svg></a></li>
        <li class=\"c-header-nav-item d-md-down-none mx-2\"><a class=\"c-header-nav-link\" href=\"#\">
                <svg class=\"c-icon\">
                    <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-envelope-open\"></use>
                </svg></a></li>
        <li class=\"c-header-nav-item dropdown\">
            <a class=\"c-header-nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                    <path d=\"M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z\"/>
                    <path fill-rule=\"evenodd\" d=\"M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z\"/>
                </svg>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right pt-0\">
                <div class=\"dropdown-header bg-light py-2 text-center\"><h6><strong>{{ app.user.username }}</strong></h6></div>
                    {# <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bi bi-heart\"></i>
                        <span class=\"ml-2\">Mes favoris</span>
                        <span class=\"badge badge-danger ml-auto\">42</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bi bi-pen\"></i>
                        <span class=\"ml-2\">Mes avis</span>
                        <span class=\"badge badge-warning ml-auto\">42</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"#\">
                        <i class=\"bi bi-credit-card-2-back\"></i>
                        <span class=\"ml-2\">Mes transactions</span>
                        <span class=\"badge badge-info ml-auto\">42</span>
                    </a> #}
                <div class=\"dropdown-header bg-light py-2\"><strong>Réglages</strong></div>
                    <a class=\"dropdown-item\" href=\"{{ path('show_user', {'id': app.user.id})}}\">
                        <i class=\"bi bi-eye\"></i>
                        <span class=\"ml-2\">Voir mon profil</span>
                    </a>
                    <a class=\"dropdown-item\" href=\"{{ path('edit_user', {'id': app.user.id})}}\">
                        <i class=\"bi bi-pencil\"></i>
                        <span class=\"ml-2\">Modifier mon profil</span>
                    </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                    <i class=\"bi bi-box-arrow-left\"></i>
                    <span class=\"ml-2\">Déconnexion</span>
                </a>
            </div>
        </li>
    </ul>
</header>
<!-- /top navigation -->", "admin/top_navigation.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/top_navigation.html.twig");
    }
}
