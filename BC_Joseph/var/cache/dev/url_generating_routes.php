<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'address_index' => [[], ['_controller' => 'App\\Controller\\AddressController::index'], [], [['text', '/address/']], [], []],
    'address_new' => [[], ['_controller' => 'App\\Controller\\AddressController::new'], [], [['text', '/address/new']], [], []],
    'address_show' => [['id'], ['_controller' => 'App\\Controller\\AddressController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/address']], [], []],
    'address_edit' => [['id'], ['_controller' => 'App\\Controller\\AddressController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/address']], [], []],
    'address_delete' => [['id'], ['_controller' => 'App\\Controller\\AddressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/address']], [], []],
    'admin_announcement_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AnnouncementController::index'], [], [['text', '/admin/announcement/']], [], []],
    'admin_announcement_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AnnouncementController::new'], [], [['text', '/admin/announcement/new']], [], []],
    'admin_announcement_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AnnouncementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/announcement']], [], []],
    'admin_announcement_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AnnouncementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/announcement']], [], []],
    'admin_announcement_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AnnouncementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/announcement']], [], []],
    'admin_garage_index' => [[], ['_controller' => 'App\\Controller\\Admin\\GarageController::index'], [], [['text', '/admin/garage/']], [], []],
    'admin_garage_new' => [[], ['_controller' => 'App\\Controller\\Admin\\GarageController::new'], [], [['text', '/admin/garage/new']], [], []],
    'admin_garage_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GarageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/garage']], [], []],
    'admin_garage_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GarageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/garage']], [], []],
    'admin_garage_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GarageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/garage']], [], []],
    'admin_professionnal_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfessionnalController::index'], [], [['text', '/admin/professionnal/']], [], []],
    'admin_professionnal_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ProfessionnalController::new'], [], [['text', '/admin/professionnal/new']], [], []],
    'admin_professionnal_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProfessionnalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/professionnal']], [], []],
    'admin_professionnal_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProfessionnalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/professionnal']], [], []],
    'admin_professionnal_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProfessionnalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/professionnal']], [], []],
    'announcement_index' => [[], ['_controller' => 'App\\Controller\\AnnouncementController::index'], [], [['text', '/']], [], []],
    'announcement_new' => [[], ['_controller' => 'App\\Controller\\AnnouncementController::new'], [], [['text', '/new']], [], []],
    'announcement_show' => [[], ['_controller' => 'App\\Controller\\AnnouncementController::show'], [], [['text', '/app_login']], [], []],
    'announcement_edit' => [['id'], ['_controller' => 'App\\Controller\\AnnouncementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], []],
    'announcement_delete' => [['id'], ['_controller' => 'App\\Controller\\AnnouncementController::delete'], [], [['variable', '/', '[^/]++', 'id', true]], [], []],
    'garage_index' => [[], ['_controller' => 'App\\Controller\\GarageController::index'], [], [['text', '/garage/']], [], []],
    'garage_new' => [[], ['_controller' => 'App\\Controller\\GarageController::new'], [], [['text', '/garage/new']], [], []],
    'garage_show' => [['id'], ['_controller' => 'App\\Controller\\GarageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/garage']], [], []],
    'garage_edit' => [['id'], ['_controller' => 'App\\Controller\\GarageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/garage']], [], []],
    'garage_delete' => [['id'], ['_controller' => 'App\\Controller\\GarageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/garage']], [], []],
    'professionnal_index' => [[], ['_controller' => 'App\\Controller\\ProfessionnalController::index'], [], [['text', '/professionnal/']], [], []],
    'professionnal_new' => [[], ['_controller' => 'App\\Controller\\ProfessionnalController::new'], [], [['text', '/professionnal/new']], [], []],
    'professionnal_show' => [['id'], ['_controller' => 'App\\Controller\\ProfessionnalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professionnal']], [], []],
    'professionnal_edit' => [['id'], ['_controller' => 'App\\Controller\\ProfessionnalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/professionnal']], [], []],
    'professionnal_delete' => [['id'], ['_controller' => 'App\\Controller\\ProfessionnalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professionnal']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/profile']], [], []],
];