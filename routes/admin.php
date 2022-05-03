<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\VideosController;

Route::get("/", [HomeController::class, "index"]);

Route::get("categories", [CategoriesController::class, "index"]);
Route::get("categories/create", [CategoriesController::class, "create"]);
Route::delete('categories', [CategoriesController::class, "destroy"]);
Route::post("categories", [CategoriesController::class, "store"]);
Route::resource('videos', VideosController::class);
