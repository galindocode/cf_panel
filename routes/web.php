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

Route::get('/', function () {
    return view('index');
}); 

Route::resource('/videos', \App\Http\Controllers\VideosController::class);
Route::resource('/categories', \App\Http\Controllers\CategoriesController::class);
Route::get("/videos/category/{cat}", [\App\Http\Controllers\VideosController::class, 'listForCat']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
