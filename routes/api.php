<?php

use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\PruebaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;

Route::apiResource('prueba', PruebaController::class);
Route::get('products', [ProductsController::class, 'index']);
Route::get('products/{idProduct}', [ProductsController::class, 'show']);
Route::get('categories', [CategoriesController::class, 'index']);

