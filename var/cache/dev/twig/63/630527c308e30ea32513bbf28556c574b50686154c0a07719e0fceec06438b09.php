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

/* Front/profile/_form.html.twig */
class __TwigTemplate_24445a93b06238bf748e1d24de0bc689e93b7129152339696aff7989e04e1456 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/profile/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/profile/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"card-content\">
    <div class=\"help is-danger\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        echo "
    </div>

    <div class=\"field\">
        <label class=\"label\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), 'label');
        echo "</label>
        <div class=\"control\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10), 'widget');
        echo "
        </div>
    </div>

    <div class=\"field\">
        ";
        // line 16
        echo "        <label class=\"label\">Nouveau mot de passe</label>
        <div class=\"control\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "password", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), 'widget');
        echo "
            <div class=\"help is-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "password", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), 'errors');
        echo "</div>
        </div>
        ";
        // line 22
        echo "        <label class=\"label\">Répéter le nouveau mot de passe</label>
        <div class=\"control\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), "second", [], "any", false, false, false, 24), 'widget');
        echo "
            <div class=\"help is-danger\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'errors');
        echo "</div>
        </div>
    </div>

    <div class=\"field\">
        <label class=\"label\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'label');
        echo "</label>
        <div class=\"control\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget');
        echo "
        </div>
    </div>

    <div class=\"field\">
        <label class=\"label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37), 'label');
        echo "</label>
        <div class=\"control\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lastname", [], "any", false, false, false, 39), 'widget');
        echo "
        </div>
    </div>
</div>

<footer class=\"card-footer\">
    <div class=\"field mt-5 mb-4\" align=\"center\">
        <p class=\"control\">
            <button class=\"button is-normal is-primary\">
                ";
        // line 48
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 48, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "
            </button>
        </p>
    </div>

    ";
        // line 54
        echo "</footer>

";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/profile/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  136 => 54,  128 => 48,  116 => 39,  111 => 37,  103 => 32,  98 => 30,  90 => 25,  86 => 24,  82 => 22,  77 => 19,  73 => 18,  69 => 16,  61 => 10,  56 => 8,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"card-content\">
    <div class=\"help is-danger\">
        {{ form_errors(form) }}
    </div>

    <div class=\"field\">
        <label class=\"label\">{{ form_label(form.username) }}</label>
        <div class=\"control\">
            {{ form_widget(form.username) }}
        </div>
    </div>

    <div class=\"field\">
        {# <label class=\"label\">{{ form_label(form.password.first) }}</label> #}
        <label class=\"label\">Nouveau mot de passe</label>
        <div class=\"control\">
            {{ form_widget(form.password.first) }}
            <div class=\"help is-danger\">{{ form_errors(form.password.first) }}</div>
        </div>
        {# <label class=\"label\">{{ form_label(form.password.second) }}</label> #}
        <label class=\"label\">Répéter le nouveau mot de passe</label>
        <div class=\"control\">
            {{ form_widget(form.password.second) }}
            <div class=\"help is-danger\">{{ form_errors(form.password.second) }}</div>
        </div>
    </div>

    <div class=\"field\">
        <label class=\"label\">{{ form_label(form.email) }}</label>
        <div class=\"control\">
            {{ form_widget(form.email) }}
        </div>
    </div>

    <div class=\"field\">
        <label class=\"label\">{{ form_label(form.lastname) }}</label>
        <div class=\"control\">
            {{ form_widget(form.lastname) }}
        </div>
    </div>
</div>

<footer class=\"card-footer\">
    <div class=\"field mt-5 mb-4\" align=\"center\">
        <p class=\"control\">
            <button class=\"button is-normal is-primary\">
                {{ button_label|default('Envoyer') }}
            </button>
        </p>
    </div>

    {# {{ form_row(form.submit) }} #}
</footer>

{{form_end(form) }}", "Front/profile/_form.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/profile/_form.html.twig");
    }
}
