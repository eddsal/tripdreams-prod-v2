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

/* admin/back_to_list_card.html.twig */
class __TwigTemplate_b9880e2f43d922a9b14c101b6fafd4e1f05b002bcc3405de9c7c5310f853d581 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/back_to_list_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/back_to_list_card.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"fade-in\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">Actions
                        <div class=\"card-header-actions\">
                            <a class=\"card-header-action\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\"><small class=\"text-muted\">Accueil</small></a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 12
        if ((0 === twig_compare((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "user"))) {
            // line 13
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des utilisateurs</a>
                        ";
        } elseif ((0 === twig_compare(        // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "info_pr"))) {
            // line 15
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_pr_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des informations pratiques</a>
                        ";
        } elseif ((0 === twig_compare(        // line 16
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "voyage"))) {
            // line 17
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des voyages</a>
                        ";
        } elseif ((0 === twig_compare(        // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "programme"))) {
            // line 19
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des programmes</a>
                        ";
        } elseif ((0 === twig_compare(        // line 20
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "tarif"))) {
            // line 21
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des tarifs</a>
                        ";
        } elseif ((0 === twig_compare(        // line 22
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "activite"))) {
            // line 23
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des activités</a>
                        ";
        } elseif ((0 === twig_compare(        // line 24
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "saison"))) {
            // line 25
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saison_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des saisons</a>
                        ";
        } elseif ((0 === twig_compare(        // line 26
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "pays"))) {
            // line 27
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des pays</a>
                        ";
        } elseif ((0 === twig_compare(        // line 28
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "ville"))) {
            // line 29
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des villes</a>
                        ";
        } elseif ((0 === twig_compare(        // line 30
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "adresse"))) {
            // line 31
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adresse_list");
            echo "\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des adresses</a>
                        ";
        }
        // line 33
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/back_to_list_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  124 => 31,  122 => 30,  117 => 29,  115 => 28,  110 => 27,  108 => 26,  103 => 25,  101 => 24,  96 => 23,  94 => 22,  89 => 21,  87 => 20,  82 => 19,  80 => 18,  75 => 17,  73 => 16,  68 => 15,  66 => 14,  61 => 13,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"fade-in\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">Actions
                        <div class=\"card-header-actions\">
                            <a class=\"card-header-action\" href=\"{{path('admin_index')}}\"><small class=\"text-muted\">Accueil</small></a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        {% if entity == 'user' %}
                            <a href=\"{{path('users_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des utilisateurs</a>
                        {% elseif entity == 'info_pr' %}
                            <a href=\"{{path('info_pr_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des informations pratiques</a>
                        {% elseif entity == 'voyage' %}
                            <a href=\"{{path('voyage_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des voyages</a>
                        {% elseif entity == 'programme' %}
                            <a href=\"{{path('programme_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des programmes</a>
                        {% elseif entity == 'tarif' %}
                            <a href=\"{{path('tarif_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des tarifs</a>
                        {% elseif entity == 'activite' %}
                            <a href=\"{{path('activite_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des activités</a>
                        {% elseif entity == 'saison' %}
                            <a href=\"{{path('saison_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des saisons</a>
                        {% elseif entity == 'pays' %}
                            <a href=\"{{path('pays_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des pays</a>
                        {% elseif entity == 'ville' %}
                            <a href=\"{{path('ville_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des villes</a>
                        {% elseif entity == 'adresse' %}
                            <a href=\"{{path('adresse_list')}}\" class=\"btn btn-info btn-lg btn-block\" type=\"button\">Retour à la liste des adresses</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "admin/back_to_list_card.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/back_to_list_card.html.twig");
    }
}
