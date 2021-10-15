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

/* admin/welcome.html.twig */
class __TwigTemplate_fea8b39b6eaf93c9e33c0b8b23dba844f4f37fb29caafda030a400768942dd1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contentpage' => [$this, 'block_contentpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/welcome.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/welcome.html.twig", 1);
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

        echo "Dahboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contentpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentpage"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"fade-in\">
            ";
        // line 98
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">Derniers utilisateurs connectés</div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table table-responsive-sm table-hover table-outline mb-0\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th>Nom d'utilisateur</th>
                                        <th class=\"text-center\">E-mail</th>
                                        <th class=\"text-center\">Rôle</th>
                                        ";
        // line 112
        echo "                                        <th>Activité</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recent_logged_users"]) || array_key_exists("recent_logged_users", $context) ? $context["recent_logged_users"] : (function () { throw new RuntimeError('Variable "recent_logged_users" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 117
            echo "                                        <tr>
                                            <td>
                                                <div>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 119), "html", null, true);
            echo "</div>
                                                ";
            // line 121
            echo "                                            </td>
                                            <td class=\"text-center\">
                                                <div>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 123), "html", null, true);
            echo "</div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 126), 0, [], "array", false, false, false, 126), "html", null, true);
            echo "</div>
                                            </td>
                                            ";
            // line 137
            echo "                                            <td>
                                                <div class=\"small text-muted\">Dernier accès</div><strong>";
            // line 138
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 138));
            echo "</strong>
                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 400
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 400,  153 => 142,  143 => 138,  140 => 137,  135 => 126,  129 => 123,  125 => 121,  121 => 119,  117 => 117,  113 => 116,  107 => 112,  92 => 98,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block title %}Dahboard{% endblock %}

{% block contentpage %}
    <div class=\"container-fluid\">
        <div class=\"fade-in\">
            {# <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-primary\">
                        <div class=\"card-body card-body pb-0 d-flex justify-content-between align-items-start\">
                            <div>
                                <div class=\"text-value-lg\">9.823</div>
                                <div>Members online</div>
                            </div>
                            <div class=\"btn-group\">
                                <button class=\"btn btn-transparent dropdown-toggle p-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <svg class=\"c-icon\">
                                        <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-settings\"></use>
                                    </svg>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\" style=\"margin: 0px;\"><a class=\"dropdown-item\" href=\"#\">Action</a><a class=\"dropdown-item\" href=\"#\">Another action</a><a class=\"dropdown-item\" href=\"#\">Something else here</a></div>
                            </div>
                        </div>
                        <div class=\"c-chart-wrapper mt-3 mx-3\" style=\"height:70px;\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                            <canvas class=\"chart chartjs-render-monitor\" id=\"card-chart1\" height=\"70\" style=\"display: block; width: 143px; height: 70px;\" width=\"143\"></canvas>
                            <div id=\"card-chart1-tooltip\" class=\"c-chartjs-tooltip top bottom\" style=\"opacity: 0; left: 66.5931px; top: 123.662px;\"><div class=\"c-tooltip-header\"><div class=\"c-tooltip-header-item\">June</div></div><div class=\"c-tooltip-body\"><div class=\"c-tooltip-body-item\"><span class=\"c-tooltip-body-item-color\" style=\"background-color: rgb(50, 31, 219);\"></span><span class=\"c-tooltip-body-item-label\">My First dataset</span><span class=\"c-tooltip-body-item-value\">55</span></div></div></div></div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-info\">
                        <div class=\"card-body card-body pb-0 d-flex justify-content-between align-items-start\">
                            <div>
                                <div class=\"text-value-lg\">9.823</div>
                                <div>Members online</div>
                            </div>
                            <div class=\"btn-group\">
                                <button class=\"btn btn-transparent dropdown-toggle p-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <svg class=\"c-icon\">
                                        <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-settings\"></use>
                                    </svg>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\"><a class=\"dropdown-item\" href=\"#\">Action</a><a class=\"dropdown-item\" href=\"#\">Another action</a><a class=\"dropdown-item\" href=\"#\">Something else here</a></div>
                            </div>
                        </div>
                        <div class=\"c-chart-wrapper mt-3 mx-3\" style=\"height:70px;\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                            <canvas class=\"chart chartjs-render-monitor\" id=\"card-chart2\" height=\"70\" width=\"143\" style=\"display: block; width: 143px; height: 70px;\"></canvas>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-warning\">
                        <div class=\"card-body card-body pb-0 d-flex justify-content-between align-items-start\">
                            <div>
                                <div class=\"text-value-lg\">9.823</div>
                                <div>Members online</div>
                            </div>
                            <div class=\"btn-group\">
                                <button class=\"btn btn-transparent dropdown-toggle p-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <svg class=\"c-icon\">
                                        <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-settings\"></use>
                                    </svg>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\"><a class=\"dropdown-item\" href=\"#\">Action</a><a class=\"dropdown-item\" href=\"#\">Another action</a><a class=\"dropdown-item\" href=\"#\">Something else here</a></div>
                            </div>
                        </div>
                        <div class=\"c-chart-wrapper mt-3\" style=\"height:70px;\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                            <canvas class=\"chart chartjs-render-monitor\" id=\"card-chart3\" height=\"70\" width=\"175\" style=\"display: block; width: 175px; height: 70px;\"></canvas>
                            <div id=\"card-chart3-tooltip\" class=\"c-chartjs-tooltip bottom\" style=\"opacity: 0; left: 50.9821px; top: 134.2px;\"><div class=\"c-tooltip-header\"><div class=\"c-tooltip-header-item\">May</div></div><div class=\"c-tooltip-body\"><div class=\"c-tooltip-body-item\"><span class=\"c-tooltip-body-item-color\" style=\"background-color: rgba(255, 255, 255, 0.2);\"></span><span class=\"c-tooltip-body-item-label\">My First dataset</span><span class=\"c-tooltip-body-item-value\">34</span></div></div></div></div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"card text-white bg-danger\">
                        <div class=\"card-body card-body pb-0 d-flex justify-content-between align-items-start\">
                            <div>
                                <div class=\"text-value-lg\">9.823</div>
                                <div>Members online</div>
                            </div>
                            <div class=\"btn-group\">
                                <button class=\"btn btn-transparent dropdown-toggle p-0\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <svg class=\"c-icon\">
                                        <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-settings\"></use>
                                    </svg>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\"><a class=\"dropdown-item\" href=\"#\">Action</a><a class=\"dropdown-item\" href=\"#\">Another action</a><a class=\"dropdown-item\" href=\"#\">Something else here</a></div>
                            </div>
                        </div>
                        <div class=\"c-chart-wrapper mt-3 mx-3\" style=\"height:70px;\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div>
                            <canvas class=\"chart chartjs-render-monitor\" id=\"card-chart4\" height=\"70\" width=\"143\" style=\"display: block; width: 143px; height: 70px;\"></canvas>
                            <div id=\"card-chart4-tooltip\" class=\"c-chartjs-tooltip bottom top\" style=\"opacity: 0; left: 88.8467px; top: 100.645px;\"><div class=\"c-tooltip-header\"><div class=\"c-tooltip-header-item\">April</div></div><div class=\"c-tooltip-body\"><div class=\"c-tooltip-body-item\"><span class=\"c-tooltip-body-item-color\" style=\"background-color: rgba(255, 255, 255, 0.2);\"></span><span class=\"c-tooltip-body-item-label\">My First dataset</span><span class=\"c-tooltip-body-item-value\">82</span></div></div></div></div>
                    </div>
                </div>

            </div> #}

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">Derniers utilisateurs connectés</div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <table class=\"table table-responsive-sm table-hover table-outline mb-0\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th>Nom d'utilisateur</th>
                                        <th class=\"text-center\">E-mail</th>
                                        <th class=\"text-center\">Rôle</th>
                                        {# <th>Usage</th> #}
                                        <th>Activité</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        {% for user in recent_logged_users %}
                                        <tr>
                                            <td>
                                                <div>{{ user.username }}</div>
                                                {# <div class=\"small text-muted\"><span>Nouveau</span> | Inscrit le 01/01/2015</div> #}
                                            </td>
                                            <td class=\"text-center\">
                                                <div>{{ user.email }}</div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div>{{ user.roles[0] }}</div>
                                            </td>
                                            {# <td>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-left\"><strong>50%</strong></div>
                                                    <div class=\"float-right\"><small class=\"text-muted\">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                </div>
                                                <div class=\"progress progress-xs\">
                                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </td> #}
                                            <td>
                                                <div class=\"small text-muted\">Dernier accès</div><strong>{{ user.lastLogin|ago }}</strong>
                                            </td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {# <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">Traffic &amp; Sales</div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"c-callout c-callout-info\"><small class=\"text-muted\">New Clients</small>
                                                <div class=\"text-value-lg\">9,123</div>
                                            </div>
                                        </div>

                                        <div class=\"col-6\">
                                            <div class=\"c-callout c-callout-danger\"><small class=\"text-muted\">Recuring Clients</small>
                                                <div class=\"text-value-lg\">22,643</div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class=\"mt-0\">
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Monday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 34%\" aria-valuenow=\"34\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 78%\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Tuesday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 56%\" aria-valuenow=\"56\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 94%\" aria-valuenow=\"94\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Wednesday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 12%\" aria-valuenow=\"12\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 67%\" aria-valuenow=\"67\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Thursday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 43%\" aria-valuenow=\"43\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 91%\" aria-valuenow=\"91\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Friday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 22%\" aria-valuenow=\"22\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 73%\" aria-valuenow=\"73\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Saturday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 53%\" aria-valuenow=\"53\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 82%\" aria-valuenow=\"82\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-4\">
                                        <div class=\"progress-group-prepend\"><span class=\"progress-group-text\">Sunday</span></div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 9%\" aria-valuenow=\"9\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 69%\" aria-valuenow=\"69\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-sm-6\">
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"c-callout c-callout-warning\"><small class=\"text-muted\">Pageviews</small>
                                                <div class=\"text-value-lg\">78,623</div>
                                            </div>
                                        </div>

                                        <div class=\"col-6\">
                                            <div class=\"c-callout c-callout-success\"><small class=\"text-muted\">Organic</small>
                                                <div class=\"text-value-lg\">49,123</div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class=\"mt-0\">
                                    <div class=\"progress-group\">
                                        <div class=\"progress-group-header\">
                                            <svg class=\"c-icon progress-group-icon\">
                                                <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-user\"></use>
                                            </svg>
                                            <div>Male</div>
                                            <div class=\"mfs-auto font-weight-bold\">43%</div>
                                        </div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 43%\" aria-valuenow=\"43\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group mb-5\">
                                        <div class=\"progress-group-header\">
                                            <svg class=\"c-icon progress-group-icon\">
                                                <use xlink:href=\"vendors/@coreui/icons/svg/free.svg#cil-user-female\"></use>
                                            </svg>
                                            <div>Female</div>
                                            <div class=\"mfs-auto font-weight-bold\">37%</div>
                                        </div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 43%\" aria-valuenow=\"43\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group\">
                                        <div class=\"progress-group-header align-items-end\">
                                            <svg class=\"c-icon progress-group-icon\">
                                                <use xlink:href=\"vendors/@coreui/icons/svg/brand.svg#cib-google\"></use>
                                            </svg>
                                            <div>Organic Search</div>
                                            <div class=\"mfs-auto font-weight-bold mfe-2\">191.235</div>
                                            <div class=\"text-muted small\">(56%)</div>
                                        </div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 56%\" aria-valuenow=\"56\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group\">
                                        <div class=\"progress-group-header align-items-end\">
                                            <svg class=\"c-icon progress-group-icon\">
                                                <use xlink:href=\"vendors/@coreui/icons/svg/brand.svg#cib-facebook-f\"></use>
                                            </svg>
                                            <div>Facebook</div>
                                            <div class=\"mfs-auto font-weight-bold mfe-2\">51.223</div>
                                            <div class=\"text-muted small\">(15%)</div>
                                        </div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group\">
                                        <div class=\"progress-group-header align-items-end\">
                                            <svg class=\"c-icon progress-group-icon\">
                                                <use xlink:href=\"vendors/@coreui/icons/svg/brand.svg#cib-twitter\"></use>
                                            </svg>
                                            <div>Twitter</div>
                                            <div class=\"mfs-auto font-weight-bold mfe-2\">37.564</div>
                                            <div class=\"text-muted small\">(11%)</div>
                                        </div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 11%\" aria-valuenow=\"11\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-group\">
                                        <div class=\"progress-group-header align-items-end\">
                                            <svg class=\"c-icon progress-group-icon\">
                                                <use xlink:href=\"vendors/@coreui/icons/svg/brand.svg#cib-linkedin\"></use>
                                            </svg>
                                            <div>LinkedIn</div>
                                            <div class=\"mfs-auto font-weight-bold mfe-2\">27.319</div>
                                            <div class=\"text-muted small\">(8%)</div>
                                        </div>
                                        <div class=\"progress-group-bars\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 8%\" aria-valuenow=\"8\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=\"card-footer\">
                                <div class=\"row text-center\">
                                    <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                        <div class=\"text-muted\">Visits</div><strong>29.703 Users (40%)</strong>
                                        <div class=\"progress progress-xs mt-2\">
                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                        <div class=\"text-muted\">Unique</div><strong>24.093 Users (20%)</strong>
                                        <div class=\"progress progress-xs mt-2\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                        <div class=\"text-muted\">Pageviews</div><strong>78.706 Views (60%)</strong>
                                        <div class=\"progress progress-xs mt-2\">
                                            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                        <div class=\"text-muted\">New Users</div><strong>22.123 Users (80%)</strong>
                                        <div class=\"progress progress-xs mt-2\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                        <div class=\"text-muted\">Bounce Rate</div><strong>40.15%</strong>
                                        <div class=\"progress progress-xs mt-2\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> #}

        </div>
    </div>
{% endblock %}", "admin/welcome.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/welcome.html.twig");
    }
}
