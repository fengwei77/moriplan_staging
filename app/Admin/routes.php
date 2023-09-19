<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('web_menus', WebMenuController::class);
    $router->resource('banners', BannerController::class);
    $router->resource('inner_banners', InnerBannerController::class);
    $router->resource('space_works', SpaceWorkController::class);
    $router->resource('space_news', SpaceNewsController::class);
    $router->resource('space_infos', SpaceInfoController::class);
    $router->resource('contact_uses', ContactUsController::class);
    $router->resource('space_contact_infos', SpaceContactInfoController::class);
    $router->resource('space_pocket_banners', SpacePocketBannerController::class);
    $router->resource('space_boven_banners', SpaceBovenBannerController::class);
    $router->resource('space_jodie_banners', SpaceJodieBannerController::class);
    $router->resource('consultation_list', ConsultationListController::class);

});

