<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/article/new' => [[['_route' => 'article_create', '_controller' => 'App\\Controller\\ArticleController::New'], null, ['POST' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/article' => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::New'], null, ['POST' => 0], null, false, false, null]],
        '/category' => [
            [['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'get_category', '_controller' => 'App\\Controller\\CategoryController::getCategories'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/chat' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/chat/send' => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/chat/mark-read' => [[['_route' => 'chat_mark_read', '_controller' => 'App\\Controller\\MessageController::markRead'], null, ['POST' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, ['POST' => 0], null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/api/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null]],
        '/api/search/live' => [[['_route' => 'app_search_live', '_controller' => 'App\\Controller\\SearchController::searchLive'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/profil' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mon-profil/modifier' => [[['_route' => 'app_user_profile_edit', '_controller' => 'App\\Controller\\UserProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-profil/avatar' => [[['_route' => 'app_user_avatar_upload', '_controller' => 'App\\Controller\\UserProfileController::uploadAvatar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-profil/supprimer-avatar' => [[['_route' => 'app_user_avatar_delete', '_controller' => 'App\\Controller\\UserProfileController::deleteAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'lexik_jwt_authentication.controllers.authentication:login'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|rticle/([^/]++)(?'
                        .'|(*:225)'
                    .')'
                    .'|pi/(?'
                        .'|article/([^/]++)(?'
                            .'|(*:259)'
                            .'|/(?'
                                .'|comment(*:278)'
                                .'|vote/([^/]++)(*:299)'
                            .')'
                        .')'
                        .'|chat/([^/]++)(*:322)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:356)'
                    .')'
                    .'|hat/([^/]++)(*:377)'
                .')'
                .'|/reset\\-password/reset/([^/]++)(*:417)'
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
        225 => [
            [['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        259 => [[['_route' => 'api_article_show', '_controller' => 'App\\Controller\\ArticleController::showOne'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'api_article_comment', '_controller' => 'App\\Controller\\ArticleController::comment'], ['id'], ['POST' => 0], null, false, false, null]],
        299 => [[['_route' => 'article_vote', '_controller' => 'App\\Controller\\VoteController::vote'], ['id', 'type'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'chat_with_user', '_controller' => 'App\\Controller\\MessageController::chatWithUser'], ['id'], null, null, false, true, null]],
        356 => [
            [['_route' => 'category_show_one', '_controller' => 'App\\Controller\\CategoryController::showCategory'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'category_update', '_controller' => 'App\\Controller\\CategoryController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        377 => [[['_route' => 'chat_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], null, null, false, true, null]],
        417 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
