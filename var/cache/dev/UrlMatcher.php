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
        '/' => [[['_route' => 'companyCreate', '_controller' => 'App\\Controller\\CompanyController::createCustomer'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'show', '_controller' => 'App\\Controller\\CustomerController::show'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add_customer', '_controller' => 'App\\Controller\\CustomerController::addCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/customer' => [[['_route' => 'all_customer', '_controller' => 'App\\Controller\\CustomerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/addOrder' => [[['_route' => 'add_order', '_controller' => 'App\\Controller\\OrderController::addCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/order' => [[['_route' => 'all_orders', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/customer/(?'
                    .'|([^/]++)(*:190)'
                    .'|delete/([^/]++)(*:213)'
                .')'
                .'|/order/(?'
                    .'|([^/]++)(*:240)'
                    .'|delete/([^/]++)(*:263)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'customer_by_id', '_controller' => 'App\\Controller\\CustomerController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'delete_ustomer_by_id', '_controller' => 'App\\Controller\\CustomerController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        240 => [[['_route' => 'order_by_id', '_controller' => 'App\\Controller\\OrderController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [
            [['_route' => 'order_ustomer_by_id', '_controller' => 'App\\Controller\\OrderController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
