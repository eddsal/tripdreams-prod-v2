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

/* security/register.html.twig */
class __TwigTemplate_b25ac25387af455aa3c0029090bb8c2ea5491748b8f3975cc1a088e551509e8d extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("base_security.html.twig", "security/register.html.twig", 1);
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

        echo "Inscription!";
        
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
<section class=\"hero is-primary\">
    <div class=\"hero-head\">
        ";
        // line 9
        echo $this->extensions['App\Twig\NavigationExtension']->displayMenu($this->env);
        echo "
    </div>
</section>

<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js\"></script>

<section class=\"hero is-primary is-fullheight\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <div class=\"columns is-centered\">
        <div class=\"column is-5\">
            <div class=\"box\">
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "

                  <div class=\"help is-danger\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
        echo "
                  </div>

                  <div class=\"field\">
                    <label class=\"label\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28), 'label');
        echo "</label>
                    <div class=\"control\">
                      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'widget');
        echo "
                    </div>
                  </div>

                  <div class=\"field\">
                    ";
        // line 36
        echo "                    <label class=\"label\">Mot de passe</label>
                    <div class=\"control\">
                      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "password", [], "any", false, false, false, 38), "first", [], "any", false, false, false, 38), 'widget');
        echo "
                      <div class=\"help is-danger\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'errors');
        echo "</div>
                    </div>
                    ";
        // line 42
        echo "                    <label class=\"label\">Répéter le mot de passe</label>
                    <div class=\"control\">
                      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), "second", [], "any", false, false, false, 44), 'widget');
        echo "
                      <div class=\"help is-danger\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), "second", [], "any", false, false, false, 45), 'errors');
        echo "</div>
                    </div>
                  </div>

                  <div class=\"field\">
                    <label class=\"label\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'label');
        echo "</label>
                    <div class=\"control\">
                      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'widget');
        echo "
                    </div>
                  </div>

                  <div class=\"field\">
                    <label class=\"label\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "lastname", [], "any", false, false, false, 57), 'label');
        echo "</label>
                    <div class=\"control\">
                      ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lastname", [], "any", false, false, false, 59), 'widget');
        echo "
                    </div>
                  </div>

                  <div class=\"field\">
                    <label class=\"label\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "roles", [], "any", false, false, false, 64), 'label');
        echo "</label>
                    <div class=\"control\">
                      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "roles", [], "any", false, false, false, 66), 'widget');
        echo "
                    </div>
                  </div>

                    ";
        // line 71
        echo "                    
                    <div class=\"field mt-5\" align=\"center\">
                        <p class=\"control\">
                            <button class=\"button is-success\">
                                ";
        // line 75
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 75, $this->source); })()), "Inscription")) : ("Inscription")), "html", null, true);
        echo "
                            </button>
                        </p>
                    </div>
                ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 79,  207 => 75,  201 => 71,  194 => 66,  189 => 64,  181 => 59,  176 => 57,  168 => 52,  163 => 50,  155 => 45,  151 => 44,  147 => 42,  142 => 39,  138 => 38,  134 => 36,  126 => 30,  121 => 28,  114 => 24,  108 => 21,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_security.html.twig' %}

{% block title %}Inscription!{% endblock %}

{% block body %}

<section class=\"hero is-primary\">
    <div class=\"hero-head\">
        {{ menu() }}
    </div>
</section>

<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js\"></script>

<section class=\"hero is-primary is-fullheight\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <div class=\"columns is-centered\">
        <div class=\"column is-5\">
            <div class=\"box\">
                {{ form_start(form) }}

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
                    <label class=\"label\">Mot de passe</label>
                    <div class=\"control\">
                      {{ form_widget(form.password.first) }}
                      <div class=\"help is-danger\">{{ form_errors(form.password.first) }}</div>
                    </div>
                    {# <label class=\"label\">{{ form_label(form.password.second) }}</label> #}
                    <label class=\"label\">Répéter le mot de passe</label>
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

                  <div class=\"field\">
                    <label class=\"label\">{{ form_label(form.roles) }}</label>
                    <div class=\"control\">
                      {{ form_widget(form.roles) }}
                    </div>
                  </div>

                    {# {{ form_widget(form) }} #}
                    
                    <div class=\"field mt-5\" align=\"center\">
                        <p class=\"control\">
                            <button class=\"button is-success\">
                                {{ button_label|default('Inscription') }}
                            </button>
                        </p>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

{% endblock %}", "security/register.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/security/register.html.twig");
    }
}
