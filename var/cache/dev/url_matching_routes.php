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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/blessure' => [[['_route' => 'app_blessure_index', '_controller' => 'App\\Controller\\BlessureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/blessure/new' => [[['_route' => 'app_blessure_new', '_controller' => 'App\\Controller\\BlessureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dossiermedical' => [[['_route' => 'app_dossiermedical_index', '_controller' => 'App\\Controller\\DossiermedicalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dossiermedical/new' => [[['_route' => 'app_dossiermedical_new', '_controller' => 'App\\Controller\\DossiermedicalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entrainment' => [[['_route' => 'app_entrainment_index', '_controller' => 'App\\Controller\\EntrainmentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/entrainment/new' => [[['_route' => 'app_entrainment_new', '_controller' => 'App\\Controller\\EntrainmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipement' => [[['_route' => 'app_equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/equipement/new' => [[['_route' => 'app_equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/exercice' => [[['_route' => 'app_exercice_index', '_controller' => 'App\\Controller\\ExerciceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/exercice/new' => [[['_route' => 'app_exercice_new', '_controller' => 'App\\Controller\\ExerciceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/installationsportive' => [[['_route' => 'app_installationsportive_index', '_controller' => 'App\\Controller\\InstallationsportiveController::index'], null, ['GET' => 0], null, false, false, null]],
        '/installationsportive/new' => [[['_route' => 'app_installationsportive_new', '_controller' => 'App\\Controller\\InstallationsportiveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\LandingController::index'], null, null, null, false, false, null]],
        '/matchsportif' => [[['_route' => 'app_matchsportif_index', '_controller' => 'App\\Controller\\MatchsportifController::index'], null, ['GET' => 0], null, false, false, null]],
        '/matchsportif/new' => [[['_route' => 'app_matchsportif_new', '_controller' => 'App\\Controller\\MatchsportifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/performanceathlete' => [[['_route' => 'app_performanceathlete_index', '_controller' => 'App\\Controller\\PerformanceathleteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/performanceathlete/new' => [[['_route' => 'app_performanceathlete_new', '_controller' => 'App\\Controller\\PerformanceathleteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/performanceequipe' => [[['_route' => 'app_performanceequipe_index', '_controller' => 'App\\Controller\\PerformanceequipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/performanceequipe/new' => [[['_route' => 'app_performanceequipe_new', '_controller' => 'App\\Controller\\PerformanceequipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tournois' => [[['_route' => 'app_tournois_index', '_controller' => 'App\\Controller\\TournoisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tournois/new' => [[['_route' => 'app_tournois_new', '_controller' => 'App\\Controller\\TournoisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tournois/calendar' => [[['_route' => 'app_tournois_calendar', '_controller' => 'App\\Controller\\TournoisController::calendar'], null, null, null, false, false, null]],
        '/tournois/calendar/events' => [[['_route' => 'fc_load_events', '_controller' => 'App\\Controller\\TournoisController::loadCalendarEvents'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/blessure/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/dossiermedical/([^/]++)(?'
                    .'|(*:280)'
                    .'|/edit(*:293)'
                    .'|(*:301)'
                .')'
                .'|/e(?'
                    .'|ntrainment/([^/]++)(?'
                        .'|(*:337)'
                        .'|/edit(*:350)'
                        .'|(*:358)'
                    .')'
                    .'|quipe(?'
                        .'|/([^/]++)(?'
                            .'|(*:387)'
                            .'|/edit(*:400)'
                            .'|(*:408)'
                        .')'
                        .'|ment/([^/]++)(?'
                            .'|(*:433)'
                            .'|/edit(*:446)'
                            .'|(*:454)'
                        .')'
                    .')'
                    .'|xercice/([^/]++)(?'
                        .'|(*:483)'
                        .'|/edit(*:496)'
                        .'|(*:504)'
                    .')'
                .')'
                .'|/installationsportive/([^/]++)(?'
                    .'|(*:547)'
                    .'|/edit(*:560)'
                    .'|(*:568)'
                .')'
                .'|/matchsportif/([^/]++)(?'
                    .'|(*:602)'
                    .'|/edit(*:615)'
                    .'|(*:623)'
                .')'
                .'|/performance(?'
                    .'|athlete/([^/]++)(?'
                        .'|(*:666)'
                        .'|/edit(*:679)'
                        .'|(*:687)'
                    .')'
                    .'|equipe/([^/]++)(?'
                        .'|(*:714)'
                        .'|/edit(*:727)'
                        .'|(*:735)'
                    .')'
                .')'
                .'|/tournois/([^/]++)/(?'
                    .'|edit(*:771)'
                    .'|delete(*:785)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:818)'
                    .'|/edit(*:831)'
                    .'|(*:839)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_blessure_show', '_controller' => 'App\\Controller\\BlessureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_blessure_edit', '_controller' => 'App\\Controller\\BlessureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'app_blessure_delete', '_controller' => 'App\\Controller\\BlessureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_dossiermedical_show', '_controller' => 'App\\Controller\\DossiermedicalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_dossiermedical_edit', '_controller' => 'App\\Controller\\DossiermedicalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'app_dossiermedical_delete', '_controller' => 'App\\Controller\\DossiermedicalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_entrainment_show', '_controller' => 'App\\Controller\\EntrainmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_entrainment_edit', '_controller' => 'App\\Controller\\EntrainmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'app_entrainment_delete', '_controller' => 'App\\Controller\\EntrainmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        408 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        454 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        483 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        496 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        504 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        547 => [[['_route' => 'app_installationsportive_show', '_controller' => 'App\\Controller\\InstallationsportiveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'app_installationsportive_edit', '_controller' => 'App\\Controller\\InstallationsportiveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        568 => [[['_route' => 'app_installationsportive_delete', '_controller' => 'App\\Controller\\InstallationsportiveController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        602 => [[['_route' => 'app_matchsportif_show', '_controller' => 'App\\Controller\\MatchsportifController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        615 => [[['_route' => 'app_matchsportif_edit', '_controller' => 'App\\Controller\\MatchsportifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        623 => [[['_route' => 'app_matchsportif_delete', '_controller' => 'App\\Controller\\MatchsportifController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        666 => [[['_route' => 'app_performanceathlete_show', '_controller' => 'App\\Controller\\PerformanceathleteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        679 => [[['_route' => 'app_performanceathlete_edit', '_controller' => 'App\\Controller\\PerformanceathleteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        687 => [[['_route' => 'app_performanceathlete_delete', '_controller' => 'App\\Controller\\PerformanceathleteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        714 => [[['_route' => 'app_performanceequipe_show', '_controller' => 'App\\Controller\\PerformanceequipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'app_performanceequipe_edit', '_controller' => 'App\\Controller\\PerformanceequipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'app_performanceequipe_delete', '_controller' => 'App\\Controller\\PerformanceequipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        771 => [[['_route' => 'app_tournois_edit', '_controller' => 'App\\Controller\\TournoisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        785 => [[['_route' => 'app_tournois_delete', '_controller' => 'App\\Controller\\TournoisController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        818 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        831 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        839 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
