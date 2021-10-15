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

/* Front/voyage/_form.html.twig */
class __TwigTemplate_5d939c6892049b394f33a9436d999b3bebf7f7cf739190fd6ef3659844d7046b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "pointFort", [], "any", false, false, false, 4), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "ville", [], "any", false, false, false, 5), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "pays", [], "any", false, false, false, 6), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "activity", [], "any", false, false, false, 7), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "saison", [], "any", false, false, false, 8), 'row');
        echo "

    <h3>Programmes</h3>
    <div class=\"col-sm-8 col-sm-offset-2\" ";
        // line 11
        if ((0 === twig_compare((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 11, $this->source); })()), "create"))) {
            echo " id=\"programmes\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "programme", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "prototype", [], "any", false, false, false, 11), 'widget'), "html_attr");
            echo "\" ";
        }
        echo ">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "programme", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 13
            echo "            <div class=\"panel panel-warning\">
                <div class=\"panel-body\">
                    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["programme"], "jour", [], "any", false, false, false, 15), 'row');
            echo "
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 16), 'row');
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

    <h3>Info pratique</h3>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "infoPratique", [], "any", false, false, false, 23), "depart", [], "any", false, false, false, 23), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "infoPratique", [], "any", false, false, false, 24), "retour", [], "any", false, false, false, 24), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "infoPratique", [], "any", false, false, false, 25), "hebergement", [], "any", false, false, false, 25), 'row');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "infoPratique", [], "any", false, false, false, 26), "repas", [], "any", false, false, false, 26), 'row');
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "infoPratique", [], "any", false, false, false, 27), "covid19", [], "any", false, false, false, 27), 'row');
        echo "

    <h3>Tarifs</h3>
    <div class=\"col-sm-8 col-sm-offset-2\" ";
        // line 30
        if ((0 === twig_compare((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 30, $this->source); })()), "create"))) {
            echo " id=\"tarifs\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "tarif", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "prototype", [], "any", false, false, false, 30), 'widget'), "html_attr");
            echo "\"";
        }
        echo ">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "tarif", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
            // line 32
            echo "            <div class=\"panel panel-warning\">
                <div class=\"panel-body\">
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 34), 'row');
            echo "
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "depart", [], "any", false, false, false, 35), 'row');
            echo "
                    ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "retour", [], "any", false, false, false, 36), 'row');
            echo "
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 37), 'row');
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 42,  172 => 41,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  146 => 32,  142 => 31,  134 => 30,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  107 => 20,  97 => 16,  93 => 15,  89 => 13,  85 => 12,  77 => 11,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {{ form_row(form.name) }}
    {{ form_row(form.description) }}
    {{ form_row(form.pointFort) }}
    {{ form_row(form.ville) }}
    {{ form_row(form.pays) }}
    {{ form_row(form.activity) }}
    {{ form_row(form.saison) }}

    <h3>Programmes</h3>
    <div class=\"col-sm-8 col-sm-offset-2\" {% if operation == \"create\" %} id=\"programmes\" data-prototype=\"{{ form_widget(form.programme.vars.prototype)|e('html_attr') }}\" {% endif %}>
        {% for programme in form.programme %}
            <div class=\"panel panel-warning\">
                <div class=\"panel-body\">
                    {{ form_row(programme.jour) }}
                    {{ form_row(programme.description) }}
                </div>
            </div>
        {% endfor %}
    </div>

    <h3>Info pratique</h3>
    {{ form_row(form.infoPratique.depart) }}
    {{ form_row(form.infoPratique.retour) }}
    {{ form_row(form.infoPratique.hebergement) }}
    {{ form_row(form.infoPratique.repas) }}
    {{ form_row(form.infoPratique.covid19) }}

    <h3>Tarifs</h3>
    <div class=\"col-sm-8 col-sm-offset-2\" {% if operation == \"create\" %} id=\"tarifs\" data-prototype=\"{{ form_widget(form.tarif.vars.prototype)|e('html_attr') }}\"{% endif %}>
        {% for tarif in form.tarif %}
            <div class=\"panel panel-warning\">
                <div class=\"panel-body\">
                    {{ form_row(tarif.prix) }}
                    {{ form_row(tarif.depart) }}
                    {{ form_row(tarif.retour) }}
                    {{ form_row(tarif.capacite) }}
                </div>
            </div>
        {% endfor %}
    </div>
{{ form_end(form) }}


", "Front/voyage/_form.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/_form.html.twig");
    }
}
