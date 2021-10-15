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

/* Front/voyage/avis.html.twig */
class __TwigTemplate_7d9c7be33785494aefb341568991ec55b949e227525d65b6281addec21b3e419 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/avis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/voyage/avis.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 2, $this->source); })()), "usersParticipat", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["participat"]) {
            // line 3
            echo "        ";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, $context["participat"], "id", [], "any", false, false, false, 3))))) {
                // line 4
                echo "        <div class=\"has-text-centered mb-5\">
            <span class=\"button is-warning modal-button is-medium\" id=\"leave-comm-btn\" data-target=\"modal-card\">Laisser un commentaire</span>
        </div>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <!-- START modal -->
    <div id=\"modal-card\" class=\"modal\">
        <div class=\"modal-background\"></div>
        <div class=\"modal-content\">
            ";
        // line 14
        $this->loadTemplate("Front/voyage/_form.avis.html.twig", "Front/voyage/avis.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
        <button class=\"modal-close is-large\" aria-label=\"close\"></button>
    </div>
    <!-- END modal -->

    ";
        // line 20
        $context["avisSort"] = [];
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 22
            echo "        ";
            $context["avisSort"] = twig_array_merge((isset($context["avisSort"]) || array_key_exists("avisSort", $context) ? $context["avisSort"] : (function () { throw new RuntimeError('Variable "avisSort" does not exist.', 22, $this->source); })()), [0 => $context["avi"]]);
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["msg_box_color"] = [0 => "", 1 => "is-dark", 2 => "is-warning", 3 => "is-link", 4 => "is-success", 5 => "is-info"];
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["avisSort"]) || array_key_exists("avisSort", $context) ? $context["avisSort"] : (function () { throw new RuntimeError('Variable "avisSort" does not exist.', 27, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 28
            echo "        <div class=\"card\">
            <div class=\"v-card-content\">
                <article class=\"message ";
            // line 30
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["msg_box_color"]) || array_key_exists("msg_box_color", $context) ? $context["msg_box_color"] : (function () { throw new RuntimeError('Variable "msg_box_color" does not exist.', 30, $this->source); })())), "html", null, true);
            echo "\" style=\"width: 100%;\">
                    <div class=\"message-body\">
                        <h3 style=\"text-transform:uppercase;\"><b>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "titre", [], "any", false, false, false, 32), "html", null, true);
            echo "</b></h3>
                        <br>
                        <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                    </div>
                </article>
            </div>
            <footer class=\"card-footer\">
                <span class=\"card-footer-item\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 39), "lastName", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                <span class=\"card-footer-item\">
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["avi"], "compteur", [], "any", false, false, false, 41)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 42
                echo "                        <i class=\"bi bi-star-fill\"></i>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</span>
                <span class=\"card-footer-item\">";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "date", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</span>
            </footer>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/voyage/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  150 => 44,  147 => 43,  140 => 42,  136 => 41,  131 => 39,  123 => 34,  118 => 32,  113 => 30,  109 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 24,  91 => 23,  88 => 22,  83 => 21,  81 => 20,  74 => 15,  72 => 14,  65 => 9,  59 => 8,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    {% for participat in voyage.usersParticipat %}
        {% if app.user != null and app.user.id == participat.id %}
        <div class=\"has-text-centered mb-5\">
            <span class=\"button is-warning modal-button is-medium\" id=\"leave-comm-btn\" data-target=\"modal-card\">Laisser un commentaire</span>
        </div>
        {% endif %}
    {% endfor %}

    <!-- START modal -->
    <div id=\"modal-card\" class=\"modal\">
        <div class=\"modal-background\"></div>
        <div class=\"modal-content\">
            {% include 'Front/voyage/_form.avis.html.twig' %}
        </div>
        <button class=\"modal-close is-large\" aria-label=\"close\"></button>
    </div>
    <!-- END modal -->

    {% set avisSort = [] %}
    {% for avi in avis %}
        {% set avisSort  = avisSort|merge([avi]) %}
    {% endfor %}

    {% set msg_box_color = [\"\", \"is-dark\", \"is-warning\", \"is-link\", \"is-success\", \"is-info\"] %}

    {% for avi in avisSort|sort((a, b) => a.date < b.date) %}
        <div class=\"card\">
            <div class=\"v-card-content\">
                <article class=\"message {{ random(msg_box_color) }}\" style=\"width: 100%;\">
                    <div class=\"message-body\">
                        <h3 style=\"text-transform:uppercase;\"><b>{{ avi.titre }}</b></h3>
                        <br>
                        <p>{{ avi.description }}</p>
                    </div>
                </article>
            </div>
            <footer class=\"card-footer\">
                <span class=\"card-footer-item\">{{ avi.user.lastName }}</span>
                <span class=\"card-footer-item\">
                    {% for i in 1..avi.compteur  %}
                        <i class=\"bi bi-star-fill\"></i>
                    {% endfor %}</span>
                <span class=\"card-footer-item\">{{ avi.date|date(\"d/m/Y\") }}</span>
            </footer>
        </div>
    {% endfor %}
</div>", "Front/voyage/avis.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/voyage/avis.html.twig");
    }
}
