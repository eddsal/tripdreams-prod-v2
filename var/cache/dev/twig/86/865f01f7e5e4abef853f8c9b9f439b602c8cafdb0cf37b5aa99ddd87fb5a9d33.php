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

/* Front/voyage/programme.html.twig */
class __TwigTemplate_668e54fe483c1578a93ecd16a70b71f06894ecba1bf316d30023ddbc77da0c49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/programme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/programme.html.twig"));

        // line 1
        echo "<table class=\"table table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
    <thead>
        <tr>
            <th><abbr title=\"Jour #\">Jour</abbr></th>
            ";
        // line 6
        echo "            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th><abbr title=\"Jour #\">Jour</abbr></th>
            ";
        // line 13
        echo "            <th>Description</th>
        </tr>
    </tfoot>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["programme"]);
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "jour", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            ";
            // line 21
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/programme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  74 => 21,  70 => 19,  67 => 18,  63 => 17,  57 => 13,  49 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
    <thead>
        <tr>
            <th><abbr title=\"Jour #\">Jour</abbr></th>
            {# <th>Voyage</th> #}
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th><abbr title=\"Jour #\">Jour</abbr></th>
            {# <th>Voyage</th> #}
            <th>Description</th>
        </tr>
    </tfoot>
    <tbody>
        {% for programme in programme %}
        <tr>
            <td>{{programme.jour}}</td>
            {# <td><a href=\"{{ path('voyage_show', {'id': programme.voyage.id}) }}\" >{{programme.voyage.name}}</a></td> #}
            <td>{{programme.description}}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>", "Front/voyage/programme.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/programme.html.twig");
    }
}
