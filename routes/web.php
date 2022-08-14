<?php

use App\Http\Controllers\SearchController;
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

Route::get('/', function () {
    return view('index');
});

Route::resource('/videos', \App\Http\Controllers\VideosController::class)
    ->middleware('auth');
Route::resource('/categorias', \App\Http\Controllers\CategoriesController::class)
    ->middleware('auth');

/*
* Search
*/
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])
    ->middleware('auth');
Route::post('/search', [\App\Http\Controllers\SearchController::class, 'search'])
    ->middleware('auth');


Route::get("/videos/category/{cat}", [\App\Http\Controllers\VideosController::class, 'listForCat'])
    ->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
