<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideosController;

Route::get("/", [HomeController::class, "index"]);

Route::get("categories", [CategoriesController::class, "index"])->name("categories.index");
Route::get("categories/{id}/edit", [CategoriesController::class, "edit"])->name("categories.edit");
Route::get("categories/create", [CategoriesController::class, "create"]);
Route::delete('categories/{id}', [CategoriesController::class, "destroy"]);
Route::post("categories", [CategoriesController::class, "store"]);
Route::post("categories/{id}", [CategoriesController::class, "update"]);

Route::resource('videos', VideosController::class)->name(
    'index',
    'admin.videos.index'
);
Route::resource('users', UserController::class)->name('index', 'admin.users.index');
