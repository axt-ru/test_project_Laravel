<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/newsCategory', [NewsCategoryController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::get('/news/newsCat/Sport', [NewsController::class, 'showSport']);
Route::get('/news/newsCat/Economy', [NewsController::class, 'showEconomy']);
Route::get('/news/newsCat/Society', [NewsController::class, 'showSociety']);
Route::get('/news/newsCat/Law', [NewsController::class, 'showLaw']);
Route::get('/news/newsCat/Weather', [NewsController::class, 'showWeather']);
Route::get('/auth', [NewsController::class, 'auth']);
Route::get('/addNews', [NewsController::class, 'addNews']);

