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

/* admin/tarif/show.html.twig */
class __TwigTemplate_b7a49fd6643c0f18785e4688b5f9b658ab05c101e9b6b1a0493e6dd1fff38dde extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tarif/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tarif/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/tarif/show.html.twig", 1);
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

        echo "Détails tarif";
        
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
                    <div class=\"card-header\"><strong>Détails tarif</strong>
                        <div class=\"card-header-actions\">
                            <a type=\"button\" class=\"btn btn-outline-primary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">
                                <i class=\"bi bi-pencil-square\"></i>
                                Modifier
                            </a>
                            <a type=\"button\" class=\"btn btn-outline-danger\" data-urlDelBtn='";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_tarif", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "' href=\"\" data-toggle='modal' data-target='#dangerModal' onclick=\"myFunction(this)\">
                                <i class=\"bi bi-trash\"></i>
                                Supprimer
                            </a>
                        </div>
                    </div>
                    <div class=\"collapse show\" id=\"coll\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">ID:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Prix:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 40, $this->source); })()), "prix", [], "any", false, false, false, 40), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Date de départ:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 49, $this->source); })()), "depart", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Date de retour:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 58, $this->source); })()), "retour", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Capacité:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 67, $this->source); })()), "capacite", [], "any", false, false, false, 67), "html", null, true);
        echo "</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">ID voyage:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 76, $this->source); })()), "voyage", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
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
        // line 104
        $context["entity"] = "tarif";
        // line 105
        $this->loadTemplate("admin/back_to_list_card.html.twig", "admin/tarif/show.html.twig", 105)->display($context);
        // line 106
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/tarif/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 106,  214 => 105,  212 => 104,  181 => 76,  169 => 67,  157 => 58,  145 => 49,  133 => 40,  121 => 31,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block title %}Détails tarif{% endblock %}

{% block contentpage %}

<div class=\"container-fluid\">
    <div class=\"fade-in\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card card-accent-success\">
                    <div class=\"card-header\"><strong>Détails tarif</strong>
                        <div class=\"card-header-actions\">
                            <a type=\"button\" class=\"btn btn-outline-primary\" href=\"{{ path('admin_tarif_edit', {'id': tarif.id})}}\">
                                <i class=\"bi bi-pencil-square\"></i>
                                Modifier
                            </a>
                            <a type=\"button\" class=\"btn btn-outline-danger\" data-urlDelBtn='{{ path('delete_tarif', {'id': tarif.id})}}' href=\"\" data-toggle='modal' data-target='#dangerModal' onclick=\"myFunction(this)\">
                                <i class=\"bi bi-trash\"></i>
                                Supprimer
                            </a>
                        </div>
                    </div>
                    <div class=\"collapse show\" id=\"coll\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">ID:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ tarif.id }}</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Prix:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ tarif.prix }}</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Date de départ:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ tarif.depart|date('d/m/Y') }}</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Date de retour:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ tarif.retour|date('d/m/Y') }}</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Capacité:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ tarif.capacite }}</em>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">ID voyage:</h6>
                                </div>
                                <div class=\"col-sm-9\">
                                    <em>{{ tarif.voyage.id }}</em>
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

{% set entity = 'tarif' %}
{% include 'admin/back_to_list_card.html.twig' %}

{% endblock %}
", "admin/tarif/show.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/tarif/show.html.twig");
    }
}
