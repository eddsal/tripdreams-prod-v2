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

/* admin/saison/show.html.twig */
class __TwigTemplate_271ef7b188b80263d5da52ea8f692847f6defd9c3a3e588b8e2fbd65b8462cfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contentpage' => [$this, 'block_contentpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/saison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/saison/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/saison/show.html.twig", 1);
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

        echo "Détails saison";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contentpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentpage"));

        // line 6
        echo "
<div class=\"container-fluid\">
    <div class=\"fade-in\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card card-accent-success\">
                    <div class=\"card-header\"><strong>Détails saison</strong>
                        ";
        // line 23
        echo "                    </div>
                    <div class=\"collapse show\" id=\"coll\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">ID:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Nom:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["saison"]) || array_key_exists("saison", $context) ? $context["saison"] : (function () { throw new RuntimeError('Variable "saison" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    function myFunction(e) {
        urlDelBtn = \$(e).attr('data-urlDelBtn');

        modalId = \$(e).attr(\"data-target\")
        modal = \$(modalId);
        
        \$(modalId+ ' .modal-footer a').attr(\"href\", urlDelBtn)
        modal.modal(\"show\");

        \$(\"button[data-dismiss=modal]\").click(function() {
            modal.modal('hide');
        });
    };
</script>

";
        // line 68
        $context["entity"] = "saison";
        // line 69
        $this->loadTemplate("admin/back_to_list_card.html.twig", "admin/saison/show.html.twig", 69)->display($context);
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/saison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 70,  152 => 69,  150 => 68,  119 => 40,  107 => 31,  97 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block title %}Détails saison{% endblock %}

{% block contentpage %}

<div class=\"container-fluid\">
    <div class=\"fade-in\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card card-accent-success\">
                    <div class=\"card-header\"><strong>Détails saison</strong>
                        {# <div class=\"card-header-actions\">
                            <a type=\"button\" class=\"btn btn-outline-primary\" href=\"{{ path('admin_saison_edit', {'id': saison.id})}}\">
                                <i class=\"bi bi-pencil-square\"></i>
                                Modifier
                            </a>
                            <a type=\"button\" class=\"btn btn-outline-danger\" data-urlDelBtn='{{ path('delete_saison', {'id': saison.id})}}' href=\"\" data-toggle='modal' data-target='#dangerModal' onclick=\"myFunction(this)\">
                                <i class=\"bi bi-trash\"></i>
                                Supprimer
                            </a>
                        </div> #}
                    </div>
                    <div class=\"collapse show\" id=\"coll\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">ID:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ saison.id }}</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Nom:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ saison.name }}</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    function myFunction(e) {
        urlDelBtn = \$(e).attr('data-urlDelBtn');

        modalId = \$(e).attr(\"data-target\")
        modal = \$(modalId);
        
        \$(modalId+ ' .modal-footer a').attr(\"href\", urlDelBtn)
        modal.modal(\"show\");

        \$(\"button[data-dismiss=modal]\").click(function() {
            modal.modal('hide');
        });
    };
</script>

{% set entity = 'saison' %}
{% include 'admin/back_to_list_card.html.twig' %}

{% endblock %}
", "admin/saison/show.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/saison/show.html.twig");
    }
}
