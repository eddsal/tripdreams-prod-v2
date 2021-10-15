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

/* admin/datatable.html.twig */
class __TwigTemplate_039fe46f338399630c14061c2a6b4202b8fde9e893274b48aa8a149e5279932b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/datatable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/datatable.html.twig"));

        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js\"></script>
<script>
    \$(document).ready(function() {
        //\$('.alert-success').delay(2000).hide(0);
        //\$('.alert-danger').delay(2000).hide(0);

        var entity =  \$('#entity').val();
        var url =  \$('#url').val();

        var table = \$('#table_data').bootgrid({
            ajax: true,
            rowSelect: true,
            url: url,
            formatters: {
                \"infoPrId\": function(column, row) {
                    var url = \"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_info_pr", ["id" => "rowId"]);
        echo "\".replace(\"rowId\", row[column.id]);

                    return \"<a target='_blank' href='\"+ url +\"'>\"+ row[column.id] +\"</a>\";
                },
                \"userId\": function(column, row) {
                    var url = \"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_user", ["id" => "rowId"]);
        echo "\".replace(\"rowId\", row[column.id]);

                    return \"<a target='_blank' href='\"+ url +\"'>\"+ row[column.id] +\"</a>\";
                },
                \"voyageId\": function(column, row) {
                    var url = \"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_voyage", ["id" => "rowId"]);
        echo "\".replace(\"rowId\", row[column.id]);

                    return \"<a target='_blank' href='\"+ url +\"'>\"+ row[column.id] +\"</a>\";
                },
                \"commands\": function(column, row) {
                    var urlShowBtn;
                    var urlEditBtn;
                    var urlDelBtn;

                    switch (entity) {
                        case 'user':
                            urlShowBtn = \"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_user", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'info_pr':
                            urlShowBtn = \"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_info_pr", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_info_pr", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_info_pr", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'voyage':
                            urlShowBtn = \"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_voyage", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_voyage", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_voyage", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'programme':
                            urlShowBtn = \"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_programme", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_edit", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_programme", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'tarif':
                            urlShowBtn = \"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_tarif", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tarif_edit", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_tarif", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'activite':
                            urlShowBtn = \"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_activite", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activite_edit", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_activite", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'saison':
                            urlShowBtn = \"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_saison", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"\";
                            urlDelBtn = \"\";
                            break;
                        case 'pays':
                            urlShowBtn = \"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_pays", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pays_edit", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_pays", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'ville':
                            urlShowBtn = \"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_ville", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ville_edit", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ville", ["id" => "rowId"]);
        echo "\";
                            break;
                        case 'adresse':
                            urlShowBtn = \"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_adresse", ["id" => "rowId"]);
        echo "\";
                            urlEditBtn = \"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_adresse_edit", ["id" => "rowId"]);
        echo "\";
                            urlDelBtn = \"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_adresse", ["id" => "rowId"]);
        echo "\";
                            break;
                    }

                    urlShowBtn = urlShowBtn.replace(\"rowId\", row.id);
                    urlEditBtn = urlEditBtn.replace(\"rowId\", row.id);
                    urlDelBtn = urlDelBtn.replace(\"rowId\", row.id);

                    if (entity === \"saison\")
                        return \"<div class='text-center'><a href='\"+urlShowBtn+\"' class='btn btn-info btn-xs update'><i class='bi bi-eye'></i></a></div>\";

                    return \"<div class='text-center'><a href='\"+urlShowBtn+\"' class='btn btn-info btn-xs update'><i class='bi bi-eye'></i></a>\" +
                        \"&nbsp; <a href='\"+urlEditBtn+\"' class='btn btn-warning btn-xs update'><i class='bi bi-pencil-square'></i></a>\" +
                        \"&nbsp; <a data-urlDelBtn='\"+urlDelBtn+\"' href='' class='btn btn-danger btn-xs delete' data-toggle='modal' data-target='#dangerModal'><i class='bi bi-x-square'></i></a></div>\";
                }
            },
            labels: {
                loading: \"Chargement\",
                noResults: \"Aucun résultat trouvé !\",
                refresh: \"Actualiser\",
                search: \"Rechercher\",
            },
            /**
            * Contains all css classes.
            *
            * @property css
            * @type Object
            * @for defaults
            **/
            css: {
                actions: \"actions btn-group\", // must be a unique class name or constellation of class names within the header and footer
                center: \"text-center\",
                columnHeaderAnchor: \"column-header-anchor\", // must be a unique class name or constellation of class names within the column header cell
                columnHeaderText: \"text\",
                dropDownItem: \"dropdown-item\", // must be a unique class name or constellation of class names within the actionDropDown,
                dropDownItemButton: \"dropdown-item-button\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownItemCheckbox: \"dropdown-item-checkbox\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownMenu: \"dropdown btn-group\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownMenuItems: \"dropdown-menu pull-right\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownMenuText: \"dropdown-text\", // must be a unique class name or constellation of class names within the actionDropDown
                footer: \"bootgrid-footer container-fluid\",
                header: \"bootgrid-header container-fluid\",
                icon: \"icon glyphicon\",
                iconColumns: \"bi bi-check2-square\",
                iconDown: \"bi bi-sort-down\",
                iconRefresh: \"bi bi-arrow-repeat\",
                iconUp: \"bi bi-sort-up\",
                infos: \"infos\", // must be a unique class name or constellation of class names within the header and footer,
                left: \"\",
                pagination: \"pagination\", // must be a unique class name or constellation of class names within the header and footer
                paginationButton: \"page-link\", // must be a unique class name or constellation of class names within the pagination

                /**
                * CSS class to select the parent div which activates responsive mode.
                *
                * @property responsiveTable
                * @type String
                * @default \"table-responsive\"
                * @for css
                * @since 1.1.0
                **/
                responsiveTable: \"table-responsive\",

                right: \"text-right\",
                search: \"search form-group\", // must be a unique class name or constellation of class names within the header and footer
                selectBox: \"select-box\", // must be a unique class name or constellation of class names within the entire table
                selectCell: \"select-cell\", // must be a unique class name or constellation of class names within the entire table

                /**
                * CSS class to highlight selected rows.
                *
                * @property selected
                * @type String
                * @default \"active\"
                * @for css
                * @since 1.1.0
                **/
                selected: \"active\",

                sortable: \"sortable\",
            },
            /**
            * Contains all templates.
            *
            * @property templates
            * @type Object
            * @for defaults
            **/
            templates: {
                
            }
        });

        table.on(\"loaded.rs.jquery.bootgrid\", function () {
            /* Executes after data is loaded and rendered */
            \$(this).find(\".delete\").click(function (e) {
                urlDelBtn = \$(this).attr('data-urlDelBtn');

                modalId = \$(this).attr(\"data-target\")
                modal = \$(modalId);
                
                \$(modalId+ ' .modal-footer a').attr(\"href\", urlDelBtn)
                modal.modal(\"show\");

                \$(\"button[data-dismiss=modal]\").click(function() {
                    modal.modal('hide');
                });
            });
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/datatable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 85,  215 => 84,  211 => 83,  205 => 80,  201 => 79,  197 => 78,  191 => 75,  187 => 74,  183 => 73,  175 => 68,  169 => 65,  165 => 64,  161 => 63,  155 => 60,  151 => 59,  147 => 58,  141 => 55,  137 => 54,  133 => 53,  127 => 50,  123 => 49,  119 => 48,  113 => 45,  109 => 44,  105 => 43,  99 => 40,  95 => 39,  91 => 38,  77 => 27,  69 => 22,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js\"></script>
<script>
    \$(document).ready(function() {
        //\$('.alert-success').delay(2000).hide(0);
        //\$('.alert-danger').delay(2000).hide(0);

        var entity =  \$('#entity').val();
        var url =  \$('#url').val();

        var table = \$('#table_data').bootgrid({
            ajax: true,
            rowSelect: true,
            url: url,
            formatters: {
                \"infoPrId\": function(column, row) {
                    var url = \"{{ path('show_info_pr', {'id': 'rowId'}) }}\".replace(\"rowId\", row[column.id]);

                    return \"<a target='_blank' href='\"+ url +\"'>\"+ row[column.id] +\"</a>\";
                },
                \"userId\": function(column, row) {
                    var url = \"{{ path('show_user', {'id': 'rowId'}) }}\".replace(\"rowId\", row[column.id]);

                    return \"<a target='_blank' href='\"+ url +\"'>\"+ row[column.id] +\"</a>\";
                },
                \"voyageId\": function(column, row) {
                    var url = \"{{ path('show_voyage', {'id': 'rowId'}) }}\".replace(\"rowId\", row[column.id]);

                    return \"<a target='_blank' href='\"+ url +\"'>\"+ row[column.id] +\"</a>\";
                },
                \"commands\": function(column, row) {
                    var urlShowBtn;
                    var urlEditBtn;
                    var urlDelBtn;

                    switch (entity) {
                        case 'user':
                            urlShowBtn = \"{{ path('show_user', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('edit_user', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_user', {'id': 'rowId'}) }}\";
                            break;
                        case 'info_pr':
                            urlShowBtn = \"{{ path('show_info_pr', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('edit_info_pr', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_info_pr', {'id': 'rowId'}) }}\";
                            break;
                        case 'voyage':
                            urlShowBtn = \"{{ path('show_voyage', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('edit_voyage', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_voyage', {'id': 'rowId'}) }}\";
                            break;
                        case 'programme':
                            urlShowBtn = \"{{ path('show_programme', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('admin_programme_edit', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_programme', {'id': 'rowId'}) }}\";
                            break;
                        case 'tarif':
                            urlShowBtn = \"{{ path('show_tarif', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('admin_tarif_edit', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_tarif', {'id': 'rowId'}) }}\";
                            break;
                        case 'activite':
                            urlShowBtn = \"{{ path('show_activite', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('admin_activite_edit', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_activite', {'id': 'rowId'}) }}\";
                            break;
                        case 'saison':
                            urlShowBtn = \"{{ path('show_saison', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"\";
                            urlDelBtn = \"\";
                            break;
                        case 'pays':
                            urlShowBtn = \"{{ path('show_pays', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('admin_pays_edit', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_pays', {'id': 'rowId'}) }}\";
                            break;
                        case 'ville':
                            urlShowBtn = \"{{ path('show_ville', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('admin_ville_edit', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_ville', {'id': 'rowId'}) }}\";
                            break;
                        case 'adresse':
                            urlShowBtn = \"{{ path('show_adresse', {'id': 'rowId'}) }}\";
                            urlEditBtn = \"{{ path('admin_adresse_edit', {'id': 'rowId'}) }}\";
                            urlDelBtn = \"{{ path('delete_adresse', {'id': 'rowId'}) }}\";
                            break;
                    }

                    urlShowBtn = urlShowBtn.replace(\"rowId\", row.id);
                    urlEditBtn = urlEditBtn.replace(\"rowId\", row.id);
                    urlDelBtn = urlDelBtn.replace(\"rowId\", row.id);

                    if (entity === \"saison\")
                        return \"<div class='text-center'><a href='\"+urlShowBtn+\"' class='btn btn-info btn-xs update'><i class='bi bi-eye'></i></a></div>\";

                    return \"<div class='text-center'><a href='\"+urlShowBtn+\"' class='btn btn-info btn-xs update'><i class='bi bi-eye'></i></a>\" +
                        \"&nbsp; <a href='\"+urlEditBtn+\"' class='btn btn-warning btn-xs update'><i class='bi bi-pencil-square'></i></a>\" +
                        \"&nbsp; <a data-urlDelBtn='\"+urlDelBtn+\"' href='' class='btn btn-danger btn-xs delete' data-toggle='modal' data-target='#dangerModal'><i class='bi bi-x-square'></i></a></div>\";
                }
            },
            labels: {
                loading: \"Chargement\",
                noResults: \"Aucun résultat trouvé !\",
                refresh: \"Actualiser\",
                search: \"Rechercher\",
            },
            /**
            * Contains all css classes.
            *
            * @property css
            * @type Object
            * @for defaults
            **/
            css: {
                actions: \"actions btn-group\", // must be a unique class name or constellation of class names within the header and footer
                center: \"text-center\",
                columnHeaderAnchor: \"column-header-anchor\", // must be a unique class name or constellation of class names within the column header cell
                columnHeaderText: \"text\",
                dropDownItem: \"dropdown-item\", // must be a unique class name or constellation of class names within the actionDropDown,
                dropDownItemButton: \"dropdown-item-button\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownItemCheckbox: \"dropdown-item-checkbox\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownMenu: \"dropdown btn-group\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownMenuItems: \"dropdown-menu pull-right\", // must be a unique class name or constellation of class names within the actionDropDown
                dropDownMenuText: \"dropdown-text\", // must be a unique class name or constellation of class names within the actionDropDown
                footer: \"bootgrid-footer container-fluid\",
                header: \"bootgrid-header container-fluid\",
                icon: \"icon glyphicon\",
                iconColumns: \"bi bi-check2-square\",
                iconDown: \"bi bi-sort-down\",
                iconRefresh: \"bi bi-arrow-repeat\",
                iconUp: \"bi bi-sort-up\",
                infos: \"infos\", // must be a unique class name or constellation of class names within the header and footer,
                left: \"\",
                pagination: \"pagination\", // must be a unique class name or constellation of class names within the header and footer
                paginationButton: \"page-link\", // must be a unique class name or constellation of class names within the pagination

                /**
                * CSS class to select the parent div which activates responsive mode.
                *
                * @property responsiveTable
                * @type String
                * @default \"table-responsive\"
                * @for css
                * @since 1.1.0
                **/
                responsiveTable: \"table-responsive\",

                right: \"text-right\",
                search: \"search form-group\", // must be a unique class name or constellation of class names within the header and footer
                selectBox: \"select-box\", // must be a unique class name or constellation of class names within the entire table
                selectCell: \"select-cell\", // must be a unique class name or constellation of class names within the entire table

                /**
                * CSS class to highlight selected rows.
                *
                * @property selected
                * @type String
                * @default \"active\"
                * @for css
                * @since 1.1.0
                **/
                selected: \"active\",

                sortable: \"sortable\",
            },
            /**
            * Contains all templates.
            *
            * @property templates
            * @type Object
            * @for defaults
            **/
            templates: {
                
            }
        });

        table.on(\"loaded.rs.jquery.bootgrid\", function () {
            /* Executes after data is loaded and rendered */
            \$(this).find(\".delete\").click(function (e) {
                urlDelBtn = \$(this).attr('data-urlDelBtn');

                modalId = \$(this).attr(\"data-target\")
                modal = \$(modalId);
                
                \$(modalId+ ' .modal-footer a').attr(\"href\", urlDelBtn)
                modal.modal(\"show\");

                \$(\"button[data-dismiss=modal]\").click(function() {
                    modal.modal('hide');
                });
            });
        });
    });
</script>", "admin/datatable.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/heroku/tripeDream.github.io/templates/admin/datatable.html.twig");
    }
}
