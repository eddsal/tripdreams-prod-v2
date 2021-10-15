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

/* agence/profile/show.html.twig */
class __TwigTemplate_44913be6603b674dc0b8b294189a973bb3e85acbdcebf458e13fc3416f40f45c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'core' => [$this, 'block_core'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "agence/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/profile/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/profile/show.html.twig"));

        $this->parent = $this->loadTemplate("agence/index.html.twig", "agence/profile/show.html.twig", 1);
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

        echo "Détails de mon compte";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        // line 5
        echo "
<div class=\"container\">
    <div class=\"section\">
        <div class=\"card\">
            <div class=\"card-header\">
                <p class=\"card-header-title is-size-5 is-centered\">
                    Détails de mon compte
                </p>
                <button class=\"card-header-icon\" aria-label=\"more options\">
                    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_front_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">
                        <span class=\"icon\">
                            <i class=\"bi bi-pencil-square\"></i>
                        </span>
                    </a>
                </button>
            </div>
            <div class=\"card-content\">
                <table class=\"table\">
                    <thead>
                        <tr>
                        <th>Nom d'utilisateur:</th>
                        <th>Adresse e-mail:</th>
                        <th>Rôle:</th>
                        <th>Nom de famille:</th>
                        </tr>
                    </thead>
                    ";
        // line 39
        echo "                    <tbody>
                        <tr>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "username", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "roles", [], "any", false, false, false, 43), 0, [], "array", false, false, false, 43), "html", null, true);
        echo "</td>
                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "lastName", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            ";
        // line 51
        echo "        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agence/profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 51,  135 => 44,  131 => 43,  127 => 42,  123 => 41,  119 => 39,  99 => 14,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'agence/index.html.twig' %}

{% block title %}Détails de mon compte{% endblock %}
{% block core %}

<div class=\"container\">
    <div class=\"section\">
        <div class=\"card\">
            <div class=\"card-header\">
                <p class=\"card-header-title is-size-5 is-centered\">
                    Détails de mon compte
                </p>
                <button class=\"card-header-icon\" aria-label=\"more options\">
                    <a href=\"{{ path('edit_front_user', {'id': app.user.id}) }}\">
                        <span class=\"icon\">
                            <i class=\"bi bi-pencil-square\"></i>
                        </span>
                    </a>
                </button>
            </div>
            <div class=\"card-content\">
                <table class=\"table\">
                    <thead>
                        <tr>
                        <th>Nom d'utilisateur:</th>
                        <th>Adresse e-mail:</th>
                        <th>Rôle:</th>
                        <th>Nom de famille:</th>
                        </tr>
                    </thead>
                    {# <tfoot>
                        <tr>
                        <th>Nom d'utilisateur:</th>
                        <th>Adresse e-mail:</th>
                        <th>Rôle:</th>
                        <th>Nom de famille:</th>
                        </tr>
                    </tfoot> #}
                    <tbody>
                        <tr>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.roles[0] }}</td>
                        <td>{{ user.lastName }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {# <footer class=\"card-footer\">
            </div> #}
        </div>
    </div>
</div>

{% endblock %}", "agence/profile/show.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/agence/profile/show.html.twig");
    }
}
