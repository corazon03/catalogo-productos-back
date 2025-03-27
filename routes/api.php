<?php

use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\PruebaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;

Route::apiResource('prueba', PruebaController::class);
Route::apiResource('products', ProductsController::class);
Route::apiResource('categories', CategoriesController::class);

