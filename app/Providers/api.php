<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['throttle:web_api'])->group(function () {
});
    Route::resource('menu', \App\Http\Controllers\API\MenuController::class)->middleware(['throttle:web_api']);
    Route::apiResource('banners', \App\Http\Controllers\API\BannerController::class);
    Route::apiResource('inner_banners', \App\Http\Controllers\API\Inner_banner::class);
    Route::apiResource('works', \App\Http\Controllers\API\WorkController::class);
    Route::apiResource('infos', \App\Http\Controllers\API\InfoController::class);
    Route::apiResource('news', \App\Http\Controllers\API\NewsController::class);
    Route::apiResource('contact_infos', \App\Http\Controllers\API\ContactInfoController::class);

Route::apiResource('contact_us', \App\Http\Controllers\API\ContactUsController::class);

//for 後台
Route::apiResource('banner_position', \App\Http\Controllers\API\BannerPositionController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
