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

/* Front/navigation/idee-voyage.html.twig */
class __TwigTemplate_06b2fcafc0a9993e6fbc7fdbc915a89cf99cf92f319e5c4a609ebf5a4fc711dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/idee-voyage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/idee-voyage.html.twig"));

        // line 1
        echo "<section id=\"popular-destinations\" class=\"popular-destinations py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"is-size-4 mb-4 has-text-white text-center\">Destinations populaires</h2>
            </div>

            ";
        // line 9
        echo "
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyagesByPays"]) || array_key_exists("voyagesByPays", $context) ? $context["voyagesByPays"] : (function () { throw new RuntimeError('Variable "voyagesByPays" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 11
            echo "                <div class=\"col-12 col-sm-6 col-md-4\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" class=\"text-white\">
                        <figure class=\"position-relative overflow-hidden\">
                            <img class=\"\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["voyage"]), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voyage"], "pays", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "\" width=\"600px\" height=\"300px\">
                            <figcaption class=\"d-flex align-items-center justify-content-center position-absolute\">
                                <h3>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voyage"], "pays", [], "any", false, false, false, 16), 0, [], "array", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
            ";
        // line 69
        echo "        <div class=\"row\">
            <div class=\"col text-center\">
                <a class=\"button is-white is-outlined\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trips_by_pays");
        echo "\" role=\"button\">Voir plus ↓</a>
            </div>
        </div>

    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/navigation/idee-voyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 71,  89 => 69,  86 => 22,  74 => 16,  67 => 14,  62 => 12,  59 => 11,  55 => 10,  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"popular-destinations\" class=\"popular-destinations py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"is-size-4 mb-4 has-text-white text-center\">Destinations populaires</h2>
            </div>

            {# {{ dump(voyagesByPays) }} #}

            {% for voyage in voyagesByPays %}
                <div class=\"col-12 col-sm-6 col-md-4\">
                    <a href=\"{{ path('voyage_show', {'id': voyage.id}) }}\" class=\"text-white\">
                        <figure class=\"position-relative overflow-hidden\">
                            <img class=\"\" src=\"{{ vich_uploader_asset(voyage) }}\" alt=\"{{ voyage.pays[0].name }}\" width=\"600px\" height=\"300px\">
                            <figcaption class=\"d-flex align-items-center justify-content-center position-absolute\">
                                <h3>{{ voyage.pays[0].name }}</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            {% endfor %}

            {# <div class=\"col-12 col-sm-6 col-md-4\">
                <a href=\"\" class=\"text-white\">
                    <figure class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/Edinburgh.jpg\"
                            alt=\"Edinburgh\">
                        <figcaption class=\"d-flex align-items-center justify-content-center position-absolute\">
                            <h3>Edinburgh</h3>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class=\"col-12 col-sm-6 col-md-4\">
                <a href=\"\" class=\"text-white\">
                    <figure class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/new_york.jpg\"
                            alt=\"New York\">
                        <figcaption class=\"d-flex align-items-center justify-content-center position-absolute\">
                            <h3>New York</h3>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class=\"col-12 col-sm-6\">
                <a href=\"\" class=\"text-white\">
                    <figure class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/porto.jpg\"
                            alt=\"Porto\">
                        <figcaption class=\"d-flex align-items-center justify-content-center position-absolute\">
                            <h3>Porto</h3>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class=\"col-12 col-md-6\">
                <a href=\"\" class=\"text-white\">
                    <figure class=\"position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/manarola.jpg\"
                            alt=\"Manarola\">
                        <figcaption class=\"d-flex align-items-center justify-content-center position-absolute\">
                            <h3>Manarola</h3>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        #}
        <div class=\"row\">
            <div class=\"col text-center\">
                <a class=\"button is-white is-outlined\" href=\"{{ path('trips_by_pays') }}\" role=\"button\">Voir plus ↓</a>
            </div>
        </div>

    </div>
</section>", "Front/navigation/idee-voyage.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/navigation/idee-voyage.html.twig");
    }
}
