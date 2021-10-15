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

/* agence/index.html.twig */
class __TwigTemplate_41b3c2f971065666edbaedb7e0bb6084d734fd8ad8387cd9c8720f4aef5f1880 extends Template
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
            'core' => [$this, 'block_core'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_agence.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/index.html.twig"));

        $this->parent = $this->loadTemplate("base_agence.html.twig", "agence/index.html.twig", 1);
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

        echo "Espace agencier";
        
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
        $this->loadTemplate("agence/header.html.twig", "agence/index.html.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-3\">
                ";
        // line 12
        $this->loadTemplate("agence/sidebar.html.twig", "agence/index.html.twig", 12)->display($context);
        // line 13
        echo "            </div>
            <div class=\"column is-9\">
                <nav class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                    ";
        // line 16
        echo $this->extensions['SlopeIt\BreadcrumbBundle\Twig\BreadcrumbExtension']->renderBreadcrumb($this->env, $context);
        echo "
                </nav>
                ";
        // line 18
        $this->displayBlock('core', $context, $blocks);
        // line 19
        echo "            </div>
        </div>
    </div>

    <footer class=\"c-footer\">
        <div class=\"modal fade\" id=\"dangerModal\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-danger\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Confirmez-vous la suppression</h4>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sûr de vouloir supprimer définitivement l'élément sélectionné ?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" type=\"button\" data-backdrop=\"false\" data-dismiss=\"modal\">Annuler</button>
                        <a href=\"\"><button class=\"btn btn-danger\" type=\"button\">Confirmer</button></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 18,  114 => 19,  112 => 18,  107 => 16,  102 => 13,  100 => 12,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_agence.html.twig' %}

{% block title %}Espace agencier{% endblock %}

{% block body %}

    {% include 'agence/header.html.twig' %}

    <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-3\">
                {% include 'agence/sidebar.html.twig' %}
            </div>
            <div class=\"column is-9\">
                <nav class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                    {{ slope_it_breadcrumb() }}
                </nav>
                {% block core %}{% endblock %}
            </div>
        </div>
    </div>

    <footer class=\"c-footer\">
        <div class=\"modal fade\" id=\"dangerModal\" tabindex=\"-1\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-danger\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Confirmez-vous la suppression</h4>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sûr de vouloir supprimer définitivement l'élément sélectionné ?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" type=\"button\" data-backdrop=\"false\" data-dismiss=\"modal\">Annuler</button>
                        <a href=\"\"><button class=\"btn btn-danger\" type=\"button\">Confirmer</button></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

{% endblock %}", "agence/index.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/agence/index.html.twig");
    }
}
