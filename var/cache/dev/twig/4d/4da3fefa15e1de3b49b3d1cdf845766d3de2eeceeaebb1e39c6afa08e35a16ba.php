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

/* agence/form/_form.html.twig */
class __TwigTemplate_9c12789a5af39e7c199247c45ea30ed204fd676640b0a8bd25ee9ff98694b2e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/form/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/form/_form.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3>Ajouter ou modifier un voyage</h3>
        </div>
           ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <div class=\"card-body\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            <div class=\"my-custom-class-for-errors\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
        echo "
            </div>

            <div class=\"row\">
                <div class=\"col-3 border-right\">
                    <h4>Voyage</h4>
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'row');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "pointFort", [], "any", false, false, false, 22), 'row');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "ville", [], "any", false, false, false, 23), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "pays", [], "any", false, false, false, 24), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "saison", [], "any", false, false, false, 25), 'row');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "activity", [], "any", false, false, false, 26), 'row');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "imageFile", [], "any", false, false, false, 27), 'row');
        echo "
                </div>

                <div class=\"programme col-3 mb-5 border-right\"
                    data-prototype=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "programme", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "prototype", [], "any", false, false, false, 31), 'row'), "html_attr");
        echo "\">
                    <h4>Programmes</h4>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "programme", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 34
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["programme"], "jour", [], "any", false, false, false, 34), 'row');
            echo "
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 35), 'row');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    <button type=\"button\" class=\" btn btn-info mb-2 add_item_link\"
                        data-collection-holder-class=\"programme\">Ajouter un programme</button>
                </div>

                <div class=\"tarif col-3 mb-5 border-right\"
                    data-prototype=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "tarif", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "prototype", [], "any", false, false, false, 42), 'row'), "html_attr");
        echo "\">
                    <h4>Tarifs</h4>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "tarif", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["tarif"]) {
            // line 45
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "prix", [], "any", false, false, false, 45), 'row');
            echo "
                    ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "depart", [], "any", false, false, false, 46), 'row');
            echo "
                    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "retour", [], "any", false, false, false, 47), 'row');
            echo "
                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["tarif"], "capacite", [], "any", false, false, false, 48), 'row');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    <button type=\"button\" class=\" btn btn-info mb-2 add_item_link\" data-collection-holder-class=\"tarif\">Ajouter un tarif</button>
                </div>

                <div class=\"col-3 border-right\">
                    <h4>Informations pratiques</h4>
                    ";
        // line 57
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "infoPratique", [], "any", false, false, false, 57), "hebergement", [], "any", false, false, false, 57), 'row');
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "infoPratique", [], "any", false, false, false, 58), "repas", [], "any", false, false, false, 58), 'row');
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "infoPratique", [], "any", false, false, false, 59), "covid19", [], "any", false, false, false, 59), 'row');
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "infoPratique", [], "any", false, false, false, 60), "duree", [], "any", false, false, false, 60), 'row');
        echo "
                </div>

            </div>


        </div>

        <div class=\"card-footer\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "submit", [], "any", false, false, false, 69), 'row');
        echo "
        </div>
        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "agence/form/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 71,  209 => 69,  197 => 60,  193 => 59,  189 => 58,  184 => 57,  177 => 50,  169 => 48,  165 => 47,  161 => 46,  156 => 45,  152 => 44,  147 => 42,  140 => 37,  132 => 35,  127 => 34,  123 => 33,  118 => 31,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  74 => 14,  69 => 12,  66 => 11,  57 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h3>Ajouter ou modifier un voyage</h3>
        </div>
           {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"card-body\">
            {{ form_start(form) }}
            <div class=\"my-custom-class-for-errors\">
                {{ form_errors(form) }}
            </div>

            <div class=\"row\">
                <div class=\"col-3 border-right\">
                    <h4>Voyage</h4>
                    {{ form_row(form.name) }}
                    {{ form_row(form.description) }}
                    {{ form_row(form.pointFort) }}
                    {{ form_row(form.ville) }}
                    {{ form_row(form.pays) }}
                    {{ form_row(form.saison) }}
                    {{ form_row(form.activity) }}
                    {{ form_row(form.imageFile) }}
                </div>

                <div class=\"programme col-3 mb-5 border-right\"
                    data-prototype=\"{{ form_row(form.programme.vars.prototype)|e('html_attr') }}\">
                    <h4>Programmes</h4>
                    {% for programme in form.programme %}
                    {{ form_row(programme.jour) }}
                    {{ form_row(programme.description) }}
                    {% endfor %}
                    <button type=\"button\" class=\" btn btn-info mb-2 add_item_link\"
                        data-collection-holder-class=\"programme\">Ajouter un programme</button>
                </div>

                <div class=\"tarif col-3 mb-5 border-right\"
                    data-prototype=\"{{ form_row(form.tarif.vars.prototype)|e('html_attr') }}\">
                    <h4>Tarifs</h4>
                    {% for tarif in form.tarif %}
                    {{ form_row(tarif.prix) }}
                    {{ form_row(tarif.depart) }}
                    {{ form_row(tarif.retour) }}
                    {{ form_row(tarif.capacite) }}
                    {% endfor %}
                    <button type=\"button\" class=\" btn btn-info mb-2 add_item_link\" data-collection-holder-class=\"tarif\">Ajouter un tarif</button>
                </div>

                <div class=\"col-3 border-right\">
                    <h4>Informations pratiques</h4>
                    {# {{ form_row(form.infoPratique.depart) }}
                    {{ form_row(form.infoPratique.retour) }} #}
                    {{ form_row(form.infoPratique.hebergement) }}
                    {{ form_row(form.infoPratique.repas) }}
                    {{ form_row(form.infoPratique.covid19) }}
                    {{ form_row(form.infoPratique.duree) }}
                </div>

            </div>


        </div>

        <div class=\"card-footer\">
            {{ form_row(form.submit) }}
        </div>
        {{form_end(form) }}

</script>", "agence/form/_form.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/agence/form/_form.html.twig");
    }
}
