<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/activite' => [[['_route' => 'activite_list', '_controller' => 'App\\Controller\\Admin\\ActiviteAdminController::index'], null, null, null, true, false, null]],
        '/admin/activite/fetch-activites' => [[['_route' => 'activite_fetching', '_controller' => 'App\\Controller\\Admin\\ActiviteAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/activite/new' => [[['_route' => 'admin_activite_new', '_controller' => 'App\\Controller\\Admin\\ActiviteAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/adresse' => [[['_route' => 'adresse_list', '_controller' => 'App\\Controller\\Admin\\AdresseAdminController::index'], null, null, null, true, false, null]],
        '/admin/adresse/fetch-adresses' => [[['_route' => 'adresse_fetching', '_controller' => 'App\\Controller\\Admin\\AdresseAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/adresse/new' => [[['_route' => 'admin_adresse_new', '_controller' => 'App\\Controller\\Admin\\AdresseAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/info_pratiques' => [[['_route' => 'info_pr_list', '_controller' => 'App\\Controller\\Admin\\InfoPrAdminController::index'], null, null, null, true, false, null]],
        '/admin/info_pratiques/fetch-info-pr' => [[['_route' => 'info_pr_fetching', '_controller' => 'App\\Controller\\Admin\\InfoPrAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/info_pratiques/new' => [[['_route' => 'info_pr_new', '_controller' => 'App\\Controller\\Admin\\InfoPrAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/pays' => [[['_route' => 'pays_list', '_controller' => 'App\\Controller\\Admin\\PaysAdminController::index'], null, null, null, true, false, null]],
        '/admin/pays/fetch-pays' => [[['_route' => 'pays_fetching', '_controller' => 'App\\Controller\\Admin\\PaysAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/pays/new' => [[['_route' => 'admin_pays_new', '_controller' => 'App\\Controller\\Admin\\PaysAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/programme' => [[['_route' => 'programme_list', '_controller' => 'App\\Controller\\Admin\\ProgrammeAdminController::index'], null, null, null, true, false, null]],
        '/admin/programme/fetch-programmes' => [[['_route' => 'programme_fetching', '_controller' => 'App\\Controller\\Admin\\ProgrammeAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/programme/new' => [[['_route' => 'admin_programme_new', '_controller' => 'App\\Controller\\Admin\\ProgrammeAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/saison' => [[['_route' => 'saison_list', '_controller' => 'App\\Controller\\Admin\\SaisonAdminController::index'], null, null, null, true, false, null]],
        '/admin/saison/fetch-saisons' => [[['_route' => 'saison_fetching', '_controller' => 'App\\Controller\\Admin\\SaisonAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tarif' => [[['_route' => 'tarif_list', '_controller' => 'App\\Controller\\Admin\\TarifAdminController::index'], null, null, null, true, false, null]],
        '/admin/tarif/fetch-tarifs' => [[['_route' => 'tarif_fetching', '_controller' => 'App\\Controller\\Admin\\TarifAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tarif/new' => [[['_route' => 'admin_tarif_new', '_controller' => 'App\\Controller\\Admin\\TarifAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'users_list', '_controller' => 'App\\Controller\\Admin\\UserAdminController::index'], null, null, null, true, false, null]],
        '/admin/users/fetch-users' => [[['_route' => 'users_fetching', '_controller' => 'App\\Controller\\Admin\\UserAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'new_user', '_controller' => 'App\\Controller\\Admin\\UserAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ville' => [[['_route' => 'ville_list', '_controller' => 'App\\Controller\\Admin\\VilleAdminController::index'], null, null, null, true, false, null]],
        '/admin/ville/fetch-villes' => [[['_route' => 'ville_fetching', '_controller' => 'App\\Controller\\Admin\\VilleAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ville/new' => [[['_route' => 'admin_ville_new', '_controller' => 'App\\Controller\\Admin\\VilleAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/voyages' => [[['_route' => 'voyage_list', '_controller' => 'App\\Controller\\Admin\\VoyageAdminController::index'], null, null, null, true, false, null]],
        '/admin/voyages/fetch-voyages' => [[['_route' => 'voyage_fetching', '_controller' => 'App\\Controller\\Admin\\VoyageAdminController::getJson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/voyages/new' => [[['_route' => 'admin_voyage_new', '_controller' => 'App\\Controller\\Admin\\VoyageAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agence' => [
            [['_route' => 'agence_index', '_controller' => 'App\\Controller\\Agence\\AgenceController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'Agence_agence_index', '_controller' => 'App\\Controller\\Agence\\AgenceController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/agence/new' => [
            [['_route' => 'voyage_new', '_controller' => 'App\\Controller\\Agence\\AgenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'Agence_voyage_new', '_controller' => 'App\\Controller\\Agence\\AgenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/activite' => [
            [['_route' => 'activite_index', '_controller' => 'App\\Controller\\Front\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'front_activite_index', '_controller' => 'App\\Controller\\Front\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/activite/new' => [[['_route' => 'activite_new', '_controller' => 'App\\Controller\\Front\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favorie' => [
            [['_route' => 'favorie_index', '_controller' => 'App\\Controller\\Front\\FavorieController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'front_favorie_index', '_controller' => 'App\\Controller\\Front\\FavorieController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/' => [
            [['_route' => 'navigation', '_controller' => 'App\\Controller\\Front\\NavigationController::index'], null, null, null, false, false, null],
            [['_route' => 'front_navigation', '_controller' => 'App\\Controller\\Front\\NavigationController::index'], null, null, null, false, false, null],
        ],
        '/panier' => [
            [['_route' => 'panier_index', '_controller' => 'App\\Controller\\Front\\PanierController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
            [['_route' => 'front_panier_index', '_controller' => 'App\\Controller\\Front\\PanierController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/panier/validation/create-checkout-session' => [
            [['_route' => 'panier_validation', '_controller' => 'App\\Controller\\Front\\PanierController::validate'], null, ['POST' => 0, 'GET' => 1], null, false, false, null],
            [['_route' => 'front_panier_validation', '_controller' => 'App\\Controller\\Front\\PanierController::validate'], null, ['POST' => 0, 'GET' => 1], null, false, false, null],
        ],
        '/panier/payement/success' => [
            [['_route' => 'panier_success', '_controller' => 'App\\Controller\\Front\\PanierController::success'], null, ['POST' => 0, 'GET' => 1], null, false, false, null],
            [['_route' => 'front_panier_success', '_controller' => 'App\\Controller\\Front\\PanierController::success'], null, ['POST' => 0, 'GET' => 1], null, false, false, null],
        ],
        '/pays' => [
            [['_route' => 'pays_index', '_controller' => 'App\\Controller\\Front\\PaysController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'front_pays_index', '_controller' => 'App\\Controller\\Front\\PaysController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/pays/new' => [[['_route' => 'pays_new', '_controller' => 'App\\Controller\\Front\\PaysController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/purchase' => [
            [['_route' => 'purchase_index', '_controller' => 'App\\Controller\\Front\\PurchaseController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'front_purchase_index', '_controller' => 'App\\Controller\\Front\\PurchaseController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/saison' => [
            [['_route' => 'saison_index', '_controller' => 'App\\Controller\\Front\\SaisonController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'front_saison_index', '_controller' => 'App\\Controller\\Front\\SaisonController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/search' => [
            [['_route' => 'search', '_controller' => 'App\\Controller\\Front\\SearchController::index'], null, null, null, false, false, null],
            [['_route' => 'front_search', '_controller' => 'App\\Controller\\Front\\SearchController::index'], null, null, null, false, false, null],
        ],
        '/handleSearch' => [
            [['_route' => 'handleSearch', '_controller' => 'App\\Controller\\Front\\SearchController::handleSearch'], null, null, null, false, false, null],
            [['_route' => 'front_handleSearch', '_controller' => 'App\\Controller\\Front\\SearchController::handleSearch'], null, null, null, false, false, null],
        ],
        '/voyage' => [
            [['_route' => 'voyage_index', '_controller' => 'App\\Controller\\Front\\VoyageController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'front_voyage_index', '_controller' => 'App\\Controller\\Front\\VoyageController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/voyage/pays' => [[['_route' => 'trips_by_pays', '_controller' => 'App\\Controller\\Front\\VoyageController::tripsByPays'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [
            [['_route' => 'user_registration', '_controller' => 'App\\Controller\\Security\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'security_user_registration', '_controller' => 'App\\Controller\\Security\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'security_app_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'security_app_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|a(?'
                            .'|ctivite/(?'
                                .'|(\\d+|rowId)(*:208)'
                                .'|([^/]++)/edit(*:229)'
                                .'|delete/([^/]++)(*:252)'
                            .')'
                            .'|dresse/(?'
                                .'|(\\d+|rowId)(*:282)'
                                .'|([^/]++)/edit(*:303)'
                                .'|delete/([^/]++)(*:326)'
                            .')'
                        .')'
                        .'|info_pratiques/(?'
                            .'|(\\d+|rowId)(*:365)'
                            .'|([^/]++)/edit(*:386)'
                            .'|delete/([^/]++)(*:409)'
                        .')'
                        .'|p(?'
                            .'|ays/(?'
                                .'|(\\d+|rowId)(*:440)'
                                .'|([^/]++)/edit(*:461)'
                                .'|delete/([^/]++)(*:484)'
                            .')'
                            .'|rogramme/(?'
                                .'|(\\d+|rowId)(*:516)'
                                .'|([^/]++)/edit(*:537)'
                                .'|delete/([^/]++)(*:560)'
                            .')'
                        .')'
                        .'|saison/(\\d+|rowId)(*:588)'
                        .'|tarif/(?'
                            .'|(\\d+|rowId)(*:616)'
                            .'|([^/]++)/edit(*:637)'
                            .'|delete/([^/]++)(*:660)'
                        .')'
                        .'|users/(?'
                            .'|(\\d+|rowId)(*:689)'
                            .'|([^/]++)/edit(*:710)'
                            .'|delete/([^/]++)(*:733)'
                        .')'
                        .'|v(?'
                            .'|ille/(?'
                                .'|(\\d+|rowId)(*:765)'
                                .'|([^/]++)/edit(*:786)'
                                .'|delete/([^/]++)(*:809)'
                            .')'
                            .'|oyages/(?'
                                .'|(\\d+|rowId)(*:839)'
                                .'|([^/]++)/edit(*:860)'
                                .'|delete/([^/]++)(*:883)'
                            .')'
                        .')'
                    .')'
                    .'|gence/user/([^/]++)(?'
                        .'|(*:916)'
                        .'|/participates(*:937)'
                    .')'
                .')'
                .'|/([^/]++)/edit(*:961)'
                .'|/a(?'
                    .'|gence/(?'
                        .'|voyage/delete/([^/]++)(*:1005)'
                        .'|user/([^/]++)(?'
                            .'|(*:1030)'
                            .'|/participates(*:1052)'
                        .')'
                    .')'
                    .'|ctivite/(?'
                        .'|([^/]++)(?'
                            .'|(*:1085)'
                            .'|/edit(*:1099)'
                            .'|(*:1108)'
                        .')'
                        .'|new(*:1121)'
                        .'|([^/]++)(?'
                            .'|(*:1141)'
                            .'|/edit(*:1155)'
                            .'|(*:1164)'
                        .')'
                    .')'
                .')'
                .'|/favorie/(?'
                    .'|new/([^/]++)(*:1200)'
                    .'|([^/]++)(*:1217)'
                    .'|new/([^/]++)(*:1238)'
                    .'|([^/]++)(*:1255)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|new/([^/]++)(*:1294)'
                            .'|([^/]++)(*:1311)'
                            .'|new/([^/]++)(*:1332)'
                            .'|([^/]++)(*:1349)'
                        .')'
                        .'|ys/(?'
                            .'|([^/]++)(?'
                                .'|(*:1376)'
                                .'|/edit(*:1390)'
                                .'|(*:1399)'
                            .')'
                            .'|new(*:1412)'
                            .'|([^/]++)(?'
                                .'|(*:1432)'
                                .'|/edit(*:1446)'
                                .'|(*:1455)'
                            .')'
                        .')'
                    .')'
                    .'|rofile/([^/]++)(?'
                        .'|(*:1485)'
                        .'|/edit(?'
                            .'|(*:1502)'
                        .')'
                        .'|(*:1512)'
                    .')'
                .')'
                .'|/saison/([^/]++)(?'
                    .'|(*:1542)'
                .')'
                .'|/voyage/(?'
                    .'|pays/([^/]++)(*:1576)'
                    .'|activite/([^/]++)(*:1602)'
                    .'|saison/([^/]++)(*:1626)'
                    .'|([^/]++)(*:1643)'
                    .'|pays(?'
                        .'|(*:1659)'
                        .'|/([^/]++)(*:1677)'
                    .')'
                    .'|activite/([^/]++)(*:1704)'
                    .'|saison/([^/]++)(*:1728)'
                    .'|([^/]++)(*:1745)'
                .')'
                .'|/([^/]++)/edit(*:1769)'
                .'|/agence/voyage/delete/([^/]++)(*:1808)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'show_activite', '_controller' => 'App\\Controller\\Admin\\ActiviteAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'admin_activite_edit', '_controller' => 'App\\Controller\\Admin\\ActiviteAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'delete_activite', '_controller' => 'App\\Controller\\Admin\\ActiviteAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        282 => [[['_route' => 'show_adresse', '_controller' => 'App\\Controller\\Admin\\AdresseAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'admin_adresse_edit', '_controller' => 'App\\Controller\\Admin\\AdresseAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [[['_route' => 'delete_adresse', '_controller' => 'App\\Controller\\Admin\\AdresseAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        365 => [[['_route' => 'show_info_pr', '_controller' => 'App\\Controller\\Admin\\InfoPrAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        386 => [[['_route' => 'edit_info_pr', '_controller' => 'App\\Controller\\Admin\\InfoPrAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        409 => [[['_route' => 'delete_info_pr', '_controller' => 'App\\Controller\\Admin\\InfoPrAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        440 => [[['_route' => 'show_pays', '_controller' => 'App\\Controller\\Admin\\PaysAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'admin_pays_edit', '_controller' => 'App\\Controller\\Admin\\PaysAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        484 => [[['_route' => 'delete_pays', '_controller' => 'App\\Controller\\Admin\\PaysAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        516 => [[['_route' => 'show_programme', '_controller' => 'App\\Controller\\Admin\\ProgrammeAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        537 => [[['_route' => 'admin_programme_edit', '_controller' => 'App\\Controller\\Admin\\ProgrammeAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        560 => [[['_route' => 'delete_programme', '_controller' => 'App\\Controller\\Admin\\ProgrammeAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        588 => [[['_route' => 'show_saison', '_controller' => 'App\\Controller\\Admin\\SaisonAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        616 => [[['_route' => 'show_tarif', '_controller' => 'App\\Controller\\Admin\\TarifAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        637 => [[['_route' => 'admin_tarif_edit', '_controller' => 'App\\Controller\\Admin\\TarifAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [[['_route' => 'delete_tarif', '_controller' => 'App\\Controller\\Admin\\TarifAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        689 => [[['_route' => 'show_user', '_controller' => 'App\\Controller\\Admin\\UserAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        710 => [[['_route' => 'edit_user', '_controller' => 'App\\Controller\\Admin\\UserAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        733 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Admin\\UserAdminController::deleteUser'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        765 => [[['_route' => 'show_ville', '_controller' => 'App\\Controller\\Admin\\VilleAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        786 => [[['_route' => 'admin_ville_edit', '_controller' => 'App\\Controller\\Admin\\VilleAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        809 => [[['_route' => 'delete_ville', '_controller' => 'App\\Controller\\Admin\\VilleAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        839 => [[['_route' => 'show_voyage', '_controller' => 'App\\Controller\\Admin\\VoyageAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        860 => [[['_route' => 'edit_voyage', '_controller' => 'App\\Controller\\Admin\\VoyageAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        883 => [[['_route' => 'delete_voyage', '_controller' => 'App\\Controller\\Admin\\VoyageAdminController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1, 'POST' => 2], null, false, true, null]],
        916 => [[['_route' => 'agence_voyage_show', '_controller' => 'App\\Controller\\Agence\\AgenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        937 => [[['_route' => 'agence_voyage_show_participate', '_controller' => 'App\\Controller\\Agence\\AgenceController::show_participate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        961 => [[['_route' => 'trip_edit', '_controller' => 'App\\Controller\\Agence\\AgenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1005 => [[['_route' => 'trip_delete', '_controller' => 'App\\Controller\\Agence\\AgenceController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        1030 => [[['_route' => 'Agence_agence_voyage_show', '_controller' => 'App\\Controller\\Agence\\AgenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1052 => [[['_route' => 'Agence_agence_voyage_show_participate', '_controller' => 'App\\Controller\\Agence\\AgenceController::show_participate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1085 => [[['_route' => 'activite_show', '_controller' => 'App\\Controller\\Front\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1099 => [[['_route' => 'activite_edit', '_controller' => 'App\\Controller\\Front\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1108 => [[['_route' => 'activite_delete', '_controller' => 'App\\Controller\\Front\\ActiviteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1121 => [[['_route' => 'front_activite_new', '_controller' => 'App\\Controller\\Front\\ActiviteController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1141 => [[['_route' => 'front_activite_show', '_controller' => 'App\\Controller\\Front\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1155 => [[['_route' => 'front_activite_edit', '_controller' => 'App\\Controller\\Front\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1164 => [[['_route' => 'front_activite_delete', '_controller' => 'App\\Controller\\Front\\ActiviteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1200 => [[['_route' => 'favorie_new', '_controller' => 'App\\Controller\\Front\\FavorieController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1217 => [[['_route' => 'favorie_delete', '_controller' => 'App\\Controller\\Front\\FavorieController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        1238 => [[['_route' => 'front_favorie_new', '_controller' => 'App\\Controller\\Front\\FavorieController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1255 => [[['_route' => 'front_favorie_delete', '_controller' => 'App\\Controller\\Front\\FavorieController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        1294 => [[['_route' => 'panier_new', '_controller' => 'App\\Controller\\Front\\PanierController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1311 => [[['_route' => 'panier_delete', '_controller' => 'App\\Controller\\Front\\PanierController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        1332 => [[['_route' => 'front_panier_new', '_controller' => 'App\\Controller\\Front\\PanierController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1349 => [[['_route' => 'front_panier_delete', '_controller' => 'App\\Controller\\Front\\PanierController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        1376 => [[['_route' => 'pays_show', '_controller' => 'App\\Controller\\Front\\PaysController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1390 => [[['_route' => 'pays_edit', '_controller' => 'App\\Controller\\Front\\PaysController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1399 => [[['_route' => 'pays_delete', '_controller' => 'App\\Controller\\Front\\PaysController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1412 => [[['_route' => 'front_pays_new', '_controller' => 'App\\Controller\\Front\\PaysController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1432 => [[['_route' => 'front_pays_show', '_controller' => 'App\\Controller\\Front\\PaysController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1446 => [[['_route' => 'front_pays_edit', '_controller' => 'App\\Controller\\Front\\PaysController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1455 => [[['_route' => 'front_pays_delete', '_controller' => 'App\\Controller\\Front\\PaysController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1485 => [[['_route' => 'show_front_user', '_controller' => 'App\\Controller\\Front\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1502 => [
            [['_route' => 'edit_front_user', '_controller' => 'App\\Controller\\Front\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'front_edit_front_user', '_controller' => 'App\\Controller\\Front\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        1512 => [[['_route' => 'front_show_front_user', '_controller' => 'App\\Controller\\Front\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1542 => [
            [['_route' => 'saison_show', '_controller' => 'App\\Controller\\Front\\SaisonController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'front_saison_show', '_controller' => 'App\\Controller\\Front\\SaisonController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1576 => [[['_route' => 'pays_name', '_controller' => 'App\\Controller\\Front\\VoyageController::paysById'], ['id'], ['GET' => 0], null, false, true, null]],
        1602 => [[['_route' => 'activite_name', '_controller' => 'App\\Controller\\Front\\VoyageController::activiteById'], ['id'], ['GET' => 0], null, false, true, null]],
        1626 => [[['_route' => 'saison_name', '_controller' => 'App\\Controller\\Front\\VoyageController::saisonById'], ['id'], ['GET' => 0], null, false, true, null]],
        1643 => [[['_route' => 'voyage_show', '_controller' => 'App\\Controller\\Front\\VoyageController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1659 => [[['_route' => 'front_trips_by_pays', '_controller' => 'App\\Controller\\Front\\VoyageController::tripsByPays'], [], ['GET' => 0], null, false, false, null]],
        1677 => [[['_route' => 'front_pays_name', '_controller' => 'App\\Controller\\Front\\VoyageController::paysById'], ['id'], ['GET' => 0], null, false, true, null]],
        1704 => [[['_route' => 'front_activite_name', '_controller' => 'App\\Controller\\Front\\VoyageController::activiteById'], ['id'], ['GET' => 0], null, false, true, null]],
        1728 => [[['_route' => 'front_saison_name', '_controller' => 'App\\Controller\\Front\\VoyageController::saisonById'], ['id'], ['GET' => 0], null, false, true, null]],
        1745 => [[['_route' => 'front_voyage_show', '_controller' => 'App\\Controller\\Front\\VoyageController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1769 => [[['_route' => 'Agence_trip_edit', '_controller' => 'App\\Controller\\Agence\\AgenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1808 => [
            [['_route' => 'Agence_trip_delete', '_controller' => 'App\\Controller\\Agence\\AgenceController::delete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
