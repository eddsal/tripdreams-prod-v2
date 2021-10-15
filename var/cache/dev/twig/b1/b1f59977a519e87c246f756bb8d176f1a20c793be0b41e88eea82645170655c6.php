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

/* Front/navigation/best-voyage.html.twig */
class __TwigTemplate_f7cba408775256a3202d98474e0cb17614f8c83e4f8bda0959a26c69e28902fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/best-voyage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/best-voyage.html.twig"));

        // line 1
        echo "<section>
    <div class=\"container  d-flex flex-column justify-content-center align-items-center mt-5  mb-5\">
        <div>
            <h2 class=\"is-size-4 has-text-white\">Les meilleurs voyages</h2>
        </div>

            ";
        // line 8
        echo "        <main class=\"page-content\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 10
            echo "                <div class=\"card-voyage\" style=\"background: no-repeat url(";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["voyage"]), "html", null, true);
            echo ");background-size: cover;\">
                    <div class=\"content\">
                        <h2 class=\"has-text-white\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
                        <p class=\"copy\">";
            // line 13
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 13))), 80))) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 13)), 0, 80) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 13)))), "html", null, true);
            echo "</p>
                        <button class=\"button is-rounded\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" >Réservez</a></button>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </main>

    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/navigation/best-voyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  72 => 14,  68 => 13,  64 => 12,  58 => 10,  54 => 9,  51 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"container  d-flex flex-column justify-content-center align-items-center mt-5  mb-5\">
        <div>
            <h2 class=\"is-size-4 has-text-white\">Les meilleurs voyages</h2>
        </div>

            {# {{ dump(voyages) }} #}
        <main class=\"page-content\">
            {% for voyage in voyages %}
                <div class=\"card-voyage\" style=\"background: no-repeat url({{ vich_uploader_asset(voyage) }});background-size: cover;\">
                    <div class=\"content\">
                        <h2 class=\"has-text-white\">{{ voyage.name }}</h2>
                        <p class=\"copy\">{{ voyage.description|striptags|length > 80 ? voyage.description|striptags|slice(0, 80) ~ '...' : voyage.description|striptags }}</p>
                        <button class=\"button is-rounded\"><a href=\"{{ path('voyage_show', {'id': voyage.id}) }}\" >Réservez</a></button>
                    </div>
                </div>
            {% endfor %}
        </main>

    </div>
</section>", "Front/navigation/best-voyage.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/navigation/best-voyage.html.twig");
    }
}
