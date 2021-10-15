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

/* Front/navigation/avis.html.twig */
class __TwigTemplate_674c934fd479fe15ab5824c99379efbfe3d889e7157006878d7ff1f26b18c700 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/avis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/avis.html.twig"));

        // line 1
        echo "<section style=\" box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14)\" class=\"mb-5 bg-light\" style=\"padding:100px;\">

    <div class=\" container  d-flex flex-column justify-content-center align-items-center mt-4 mb-5\">
        <div>
            <h2 class=\" text-dark\">Avis De Voyageur</h2>
        </div>

        <div>
            <p>Les avis de voyageurs sont publiés immédiatement, en toute transparence</p>
        </div>
        <div class=\"row align-items-center justify-content-center\">
            <div class=\" col-md-4 col-sm-6 col-lg-4 mb-3\" style=\"width: 18rem;\">
                <img src=\"https://preview.colorlib.com/theme/travelo/img/place/1.png\" class=\"card-img-top\" alt=\"...\">
                <div class=\"card card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>


            <div class=\" col-md-4 col-sm-6 col-lg-4 mb-3\" style=\"width: 18rem;\">
                <img src=\"https://preview.colorlib.com/theme/travelo/img/place/x4.png.pagespeed.ic.06-m2kwAgz.webp\"
                    class=\"card-img-top\" alt=\"...\">
                <div class=\"card card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>

            <div class=\" col-md-4 col-sm-6 col-lg-4 mb-3\" style=\"width: 18rem;\">
                <img src=\"https://preview.colorlib.com/theme/travelo/img/place/x6.png.pagespeed.ic.fa-tLZWwUw.webp\"
                    class=\"card-img-top\" alt=\"...\">
                <div class=\"card card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/navigation/avis.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section style=\" box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.14)\" class=\"mb-5 bg-light\" style=\"padding:100px;\">

    <div class=\" container  d-flex flex-column justify-content-center align-items-center mt-4 mb-5\">
        <div>
            <h2 class=\" text-dark\">Avis De Voyageur</h2>
        </div>

        <div>
            <p>Les avis de voyageurs sont publiés immédiatement, en toute transparence</p>
        </div>
        <div class=\"row align-items-center justify-content-center\">
            <div class=\" col-md-4 col-sm-6 col-lg-4 mb-3\" style=\"width: 18rem;\">
                <img src=\"https://preview.colorlib.com/theme/travelo/img/place/1.png\" class=\"card-img-top\" alt=\"...\">
                <div class=\"card card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>


            <div class=\" col-md-4 col-sm-6 col-lg-4 mb-3\" style=\"width: 18rem;\">
                <img src=\"https://preview.colorlib.com/theme/travelo/img/place/x4.png.pagespeed.ic.06-m2kwAgz.webp\"
                    class=\"card-img-top\" alt=\"...\">
                <div class=\"card card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>

            <div class=\" col-md-4 col-sm-6 col-lg-4 mb-3\" style=\"width: 18rem;\">
                <img src=\"https://preview.colorlib.com/theme/travelo/img/place/x6.png.pagespeed.ic.fa-tLZWwUw.webp\"
                    class=\"card-img-top\" alt=\"...\">
                <div class=\"card card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>", "Front/navigation/avis.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/Front/navigation/avis.html.twig");
    }
}
