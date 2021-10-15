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

/* agence/tableVoyages.html.twig */
class __TwigTemplate_e56ab75e4a69172fee382c35301c19e7797b8b1cd11bdcf740ff215cd0dd4ed7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/tableVoyages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/tableVoyages.html.twig"));

        $this->parent = $this->loadTemplate("agence/index.html.twig", "agence/tableVoyages.html.twig", 1);
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

        echo "Mes voyages";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core"));

        // line 6
        echo "
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">Mes voyages</div>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <div class=\"card-body\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th class=\"text-center\" scope=\"col\">Name</th>
                        <th class=\"text-center\" scope=\"col\">Description</th>
                        <th class=\"text-center\" scope=\"col\">Aperçu</th>
                        <th class=\"text-center\" scope=\"col\">Participations</th>
                        <th class=\"text-center\" scope=\"col\">Opérations</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 28
            echo "                        <tr>
                            <th class=\"text-center\" style=\"max-width:181px;\" scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
                            <td class=\"text-center\" style=\"max-width:181px;\">";
            // line 30
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 30))), 50))) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 30)), 0, 50) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 30)))), "html", null, true);
            echo "</td>
                            <td class=\"text-center\"> <img style=\"width:90px;height:50px\" class=\"mr-3\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["voyage"]), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" /></td>
                            <td class=\"text-center\">
                               <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agence_voyage_show_participate", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"  class=\"btn btn-link btn-xs\">
                                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "usersParticipat", [], "any", false, false, false, 34)), "html", null, true);
            echo "
                                </a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\">
                                    <i class=\"bi bi-eye\"></i>
                                </a>&nbsp;
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">
                                    <i class=\"bi bi-pencil-square\"></i>
                                </a>&nbsp;
                                <a data-urlDelBtn=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" href=\"\" onclick=\"myFunction(this)\" data-toggle='modal' data-target='#dangerModal' class=\"btn btn-danger btn-xs\">
                                    <i class=\"bi bi-x-square\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>
        </div>
        <div>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agence/tableVoyages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 50,  169 => 44,  163 => 41,  157 => 38,  150 => 34,  146 => 33,  139 => 31,  135 => 30,  131 => 29,  128 => 28,  124 => 27,  110 => 15,  101 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'agence/index.html.twig' %}

{% block title %}Mes voyages{% endblock %}

{% block core %}

<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">Mes voyages</div>
        {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
        {% endfor %}
        <div class=\"card-body\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th class=\"text-center\" scope=\"col\">Name</th>
                        <th class=\"text-center\" scope=\"col\">Description</th>
                        <th class=\"text-center\" scope=\"col\">Aperçu</th>
                        <th class=\"text-center\" scope=\"col\">Participations</th>
                        <th class=\"text-center\" scope=\"col\">Opérations</th>
                    </tr>
                </thead>
                <tbody>
                    {% for voyage in voyages %}
                        <tr>
                            <th class=\"text-center\" style=\"max-width:181px;\" scope=\"row\">{{voyage.name}}</th>
                            <td class=\"text-center\" style=\"max-width:181px;\">{{ voyage.description|striptags|length > 50 ? voyage.description|striptags|slice(0, 50) ~ '...' : voyage.description|striptags }}</td>
                            <td class=\"text-center\"> <img style=\"width:90px;height:50px\" class=\"mr-3\" src=\"{{ vich_uploader_asset(voyage) }}\" alt=\"{{ voyage.name }}\" /></td>
                            <td class=\"text-center\">
                               <a href=\"{{path('agence_voyage_show_participate', {'id': voyage.id})}}\"  class=\"btn btn-link btn-xs\">
                                    {{voyage.usersParticipat|length}}
                                </a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"{{path('voyage_show', {'id': voyage.id})}}\" class=\"btn btn-info btn-xs\">
                                    <i class=\"bi bi-eye\"></i>
                                </a>&nbsp;
                                <a href=\"{{path('trip_edit', {'id': voyage.id})}}\" class=\"btn btn-warning btn-xs\">
                                    <i class=\"bi bi-pencil-square\"></i>
                                </a>&nbsp;
                                <a data-urlDelBtn=\"{{path('trip_delete', {'id': voyage.id})}}\" href=\"\" onclick=\"myFunction(this)\" data-toggle='modal' data-target='#dangerModal' class=\"btn btn-danger btn-xs\">
                                    <i class=\"bi bi-x-square\"></i>
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div>
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

{% endblock %}", "agence/tableVoyages.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/agence/tableVoyages.html.twig");
    }
}
