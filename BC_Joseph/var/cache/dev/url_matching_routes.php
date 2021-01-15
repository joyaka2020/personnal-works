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
        '/address' => [[['_route' => 'address_index', '_controller' => 'App\\Controller\\AddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/address/new' => [[['_route' => 'address_new', '_controller' => 'App\\Controller\\AddressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/announcement' => [[['_route' => 'admin_announcement_index', '_controller' => 'App\\Controller\\Admin\\AnnouncementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/announcement/new' => [[['_route' => 'admin_announcement_new', '_controller' => 'App\\Controller\\Admin\\AnnouncementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/garage' => [[['_route' => 'admin_garage_index', '_controller' => 'App\\Controller\\Admin\\GarageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/garage/new' => [[['_route' => 'admin_garage_new', '_controller' => 'App\\Controller\\Admin\\GarageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/professionnal' => [[['_route' => 'admin_professionnal_index', '_controller' => 'App\\Controller\\Admin\\ProfessionnalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/professionnal/new' => [[['_route' => 'admin_professionnal_new', '_controller' => 'App\\Controller\\Admin\\ProfessionnalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'announcement_index', '_controller' => 'App\\Controller\\AnnouncementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'announcement_new', '_controller' => 'App\\Controller\\AnnouncementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/app_login' => [[['_route' => 'announcement_show', '_controller' => 'App\\Controller\\AnnouncementController::show'], null, ['GET' => 0], null, false, false, null]],
        '/garage/new' => [[['_route' => 'garage_new', '_controller' => 'App\\Controller\\GarageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/professionnal/new' => [[['_route' => 'professionnal_new', '_controller' => 'App\\Controller\\ProfessionnalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
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
                .'|/ad(?'
                    .'|dress/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|min/(?'
                        .'|announcement/([^/]++)(?'
                            .'|(*:253)'
                            .'|/edit(*:266)'
                            .'|(*:274)'
                        .')'
                        .'|garage/([^/]++)(?'
                            .'|(*:301)'
                            .'|/edit(*:314)'
                            .'|(*:322)'
                        .')'
                        .'|professionnal/([^/]++)(?'
                            .'|(*:356)'
                            .'|/edit(*:369)'
                            .'|(*:377)'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:405)'
                    .'|(*:413)'
                .')'
                .'|/garage(?'
                    .'|(*:432)'
                    .'|/([^/]++)(?'
                        .'|(*:452)'
                        .'|/edit(*:465)'
                        .'|(*:473)'
                    .')'
                .')'
                .'|/prof(?'
                    .'|essionnal(?'
                        .'|(*:503)'
                        .'|/([^/]++)(?'
                            .'|(*:523)'
                            .'|/edit(*:536)'
                            .'|(*:544)'
                        .')'
                    .')'
                    .'|ile(*:557)'
                .')'
                .'|/register(*:575)'
                .'|/log(?'
                    .'|in(*:592)'
                    .'|out(*:603)'
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
        192 => [[['_route' => 'address_show', '_controller' => 'App\\Controller\\AddressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'address_edit', '_controller' => 'App\\Controller\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        253 => [[['_route' => 'admin_announcement_show', '_controller' => 'App\\Controller\\Admin\\AnnouncementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'admin_announcement_edit', '_controller' => 'App\\Controller\\Admin\\AnnouncementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'admin_announcement_delete', '_controller' => 'App\\Controller\\Admin\\AnnouncementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        301 => [[['_route' => 'admin_garage_show', '_controller' => 'App\\Controller\\Admin\\GarageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'admin_garage_edit', '_controller' => 'App\\Controller\\Admin\\GarageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'admin_garage_delete', '_controller' => 'App\\Controller\\Admin\\GarageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        356 => [[['_route' => 'admin_professionnal_show', '_controller' => 'App\\Controller\\Admin\\ProfessionnalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'admin_professionnal_edit', '_controller' => 'App\\Controller\\Admin\\ProfessionnalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'admin_professionnal_delete', '_controller' => 'App\\Controller\\Admin\\ProfessionnalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        405 => [[['_route' => 'announcement_edit', '_controller' => 'App\\Controller\\AnnouncementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'announcement_delete', '_controller' => 'App\\Controller\\AnnouncementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        432 => [[['_route' => 'garage_index', '_controller' => 'App\\Controller\\GarageController::index'], [], ['GET' => 0], null, true, false, null]],
        452 => [[['_route' => 'garage_show', '_controller' => 'App\\Controller\\GarageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        465 => [[['_route' => 'garage_edit', '_controller' => 'App\\Controller\\GarageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [[['_route' => 'garage_delete', '_controller' => 'App\\Controller\\GarageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        503 => [[['_route' => 'professionnal_index', '_controller' => 'App\\Controller\\ProfessionnalController::index'], [], ['GET' => 0], null, true, false, null]],
        523 => [[['_route' => 'professionnal_show', '_controller' => 'App\\Controller\\ProfessionnalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'professionnal_edit', '_controller' => 'App\\Controller\\ProfessionnalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        544 => [[['_route' => 'professionnal_delete', '_controller' => 'App\\Controller\\ProfessionnalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        557 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], [], null, null, false, false, null]],
        575 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        592 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        603 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
