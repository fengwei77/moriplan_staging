<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
//    return view('coming_soon');
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/learn', [\App\Http\Controllers\LearnController::class, 'index']);
Route::get('/plan', [\App\Http\Controllers\PlanController::class, 'index']);
Route::get('/space', [\App\Http\Controllers\SpaceController::class, 'index']);
Route::get('/work', [\App\Http\Controllers\WorkController::class, 'index']);
Route::get('/work5', [\App\Http\Controllers\Work5Controller::class, 'index']);


//dev

Route::get('/home_dev', [\App\Http\Controllers\HomeController::class, 'home_dev']);
