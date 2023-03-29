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
        '/Accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::accueil'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/etudiant' => [[['_route' => 'etudiant', '_controller' => 'App\\Controller\\AdminController::etudiant'], null, null, null, false, false, null]],
        '/commentaires/admin' => [[['_route' => 'commentaires_index', '_controller' => 'App\\Controller\\CommentairesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commentaires/new' => [[['_route' => 'commentaires_new', '_controller' => 'App\\Controller\\CommentairesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formateurs' => [[['_route' => 'formateurs_index', '_controller' => 'App\\Controller\\FormateursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formateurs/new' => [[['_route' => 'formateurs_new', '_controller' => 'App\\Controller\\FormateursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formations/calendar' => [[['_route' => 'formations_calendar', '_controller' => 'App\\Controller\\FormationsController::calendar'], null, ['GET' => 0], null, false, false, null]],
        '/formations/admin' => [[['_route' => 'formations_index1', '_controller' => 'App\\Controller\\FormationsController::index1'], null, ['GET' => 0], null, false, false, null]],
        '/formations/calendrier' => [[['_route' => 'formations_Calendrier', '_controller' => 'App\\Controller\\FormationsController::indexcalendar'], null, ['GET' => 0], null, false, false, null]],
        '/formations/etudiant' => [[['_route' => 'formations_index2', '_controller' => 'App\\Controller\\FormationsController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/formations/admin/new' => [[['_route' => 'formations_new', '_controller' => 'App\\Controller\\FormationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Hello' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::home'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription_index', '_controller' => 'App\\Controller\\InscriptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/inscription/new' => [[['_route' => 'inscription_new', '_controller' => 'App\\Controller\\InscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages' => [[['_route' => 'messages_index', '_controller' => 'App\\Controller\\MessagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/messages/new' => [[['_route' => 'messages_new', '_controller' => 'App\\Controller\\MessagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/new2' => [[['_route' => 'messages_new2', '_controller' => 'App\\Controller\\MessagesController::new2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formations/recherche' => [[['_route' => 'recherche_form', '_controller' => 'App\\Controller\\RechercheController::searchFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registration' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/suggestions' => [[['_route' => 'suggestions_index', '_controller' => 'App\\Controller\\SuggestionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/suggestions/new' => [[['_route' => 'suggestions_new', '_controller' => 'App\\Controller\\SuggestionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/suggestions/new2' => [[['_route' => 'suggestions_new2', '_controller' => 'App\\Controller\\SuggestionsController::new2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/commentaires/([^/]++)(?'
                    .'|(*:194)'
                    .'|/(?'
                        .'|edit(*:210)'
                        .'|admin(*:223)'
                    .')'
                .')'
                .'|/format(?'
                    .'|eurs/([^/]++)(?'
                        .'|(*:259)'
                        .'|/edit(*:272)'
                        .'|(*:280)'
                    .')'
                    .'|ions/([^/]++)/(?'
                        .'|e(?'
                            .'|tudiant(*:317)'
                            .'|dit/admin(*:334)'
                        .')'
                        .'|admin(*:348)'
                        .'|inscription/etudiant(*:376)'
                    .')'
                .')'
                .'|/inscription/([^/]++)(?'
                    .'|(*:410)'
                    .'|/edit(*:423)'
                    .'|(*:431)'
                .')'
                .'|/messages/([^/]++)(?'
                    .'|(*:461)'
                .')'
                .'|/suggestions/([^/]++)(?'
                    .'|(*:494)'
                .')'
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
        194 => [[['_route' => 'commentaires_show', '_controller' => 'App\\Controller\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'commentaires_edit', '_controller' => 'App\\Controller\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'commentaires_delete', '_controller' => 'App\\Controller\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        259 => [[['_route' => 'formateurs_show', '_controller' => 'App\\Controller\\FormateursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'formateurs_edit', '_controller' => 'App\\Controller\\FormateursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'formateurs_delete', '_controller' => 'App\\Controller\\FormateursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        317 => [[['_route' => 'formations_show', '_controller' => 'App\\Controller\\FormationsController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        334 => [[['_route' => 'formations_edit', '_controller' => 'App\\Controller\\FormationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        348 => [[['_route' => 'formations_delete', '_controller' => 'App\\Controller\\FormationsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        376 => [[['_route' => 'inscription_form', '_controller' => 'App\\Controller\\FormationsController::inscription'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'inscription_show', '_controller' => 'App\\Controller\\InscriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'inscription_edit', '_controller' => 'App\\Controller\\InscriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'inscription_delete', '_controller' => 'App\\Controller\\InscriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        461 => [
            [['_route' => 'messages_show', '_controller' => 'App\\Controller\\MessagesController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'messages_delete', '_controller' => 'App\\Controller\\MessagesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        494 => [
            [['_route' => 'suggestions_show', '_controller' => 'App\\Controller\\SuggestionsController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'suggestions_delete', '_controller' => 'App\\Controller\\SuggestionsController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
