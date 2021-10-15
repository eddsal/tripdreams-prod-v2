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

/* admin/breadcrumb.html.twig */
class __TwigTemplate_3165bcf9965adcfca4d0f88e3d309159a0a675be4aabcd306521e57940e7b2f4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"c-subheader px-3\">
    <ol class=\"breadcrumb border-0 m-0\">
        ";
        // line 3
        $context["full_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "getpathinfo", [], "any", false, false, false, 3);
        // line 4
        echo "        ";
        $context["urls"] = twig_trim_filter((isset($context["full_path"]) || array_key_exists("full_path", $context) ? $context["full_path"] : (function () { throw new RuntimeError('Variable "full_path" does not exist.', 4, $this->source); })()), "/");
        // line 5
        echo "        ";
        $context["urls"] = twig_split_filter($this->env, (isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 5, $this->source); })()), "/");
        // line 6
        echo "        ";
        $context["base_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "getBaseURL", [], "method", false, false, false, 6);
        // line 7
        echo "
        ";
        // line 8
        $context["current"] = "";
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 9, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 10
            echo "            ";
            $context["url"] = twig_replace_filter($context["url"], ["_" => " "]);
            // line 11
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) {
                // line 12
                echo "                <li class=\"breadcrumb-item active\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["url"]), "html", null, true);
                echo "</li>
            ";
            } else {
                // line 14
                echo "                ";
                $context["current"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 14, $this->source); })()) . twig_replace_filter($context["url"], [" " => "_"])) . "/");
                // line 15
                echo "                <li class=\"breadcrumb-item\"><a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["base_url"]) || array_key_exists("base_url", $context) ? $context["base_url"] : (function () { throw new RuntimeError('Variable "base_url" does not exist.', 15, $this->source); })()) . "/") . (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 15, $this->source); })())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["url"]), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 17
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ol>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  104 => 17,  96 => 15,  93 => 14,  87 => 12,  84 => 11,  81 => 10,  63 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"c-subheader px-3\">
    <ol class=\"breadcrumb border-0 m-0\">
        {% set full_path = app.request.getpathinfo %}
        {% set urls = full_path|trim('/') %}
        {% set urls = urls|split('/') %}
        {% set base_url = app.request.getBaseURL() %}

        {% set current = '' %}
        {% for url in urls %}
            {% set url = url|replace({'_': \" \"}) %}
            {% if loop.last %}
                <li class=\"breadcrumb-item active\">{{ url|title }}</li>
            {% else %}
                {% set current = current ~ url|replace({' ': \"_\"}) ~ '/' %}
                <li class=\"breadcrumb-item\"><a href=\"{{ base_url ~ '/' ~ current }}\">{{ url|title }}</a></li>
            {% endif %}
        {% endfor %}
    </ol>
</div>", "admin/breadcrumb.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/breadcrumb.html.twig");
    }
}
