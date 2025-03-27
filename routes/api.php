<?php

use App\Http\Controllers\Api\PruebaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatalogoProductos;

Route::apiResource('catalogoProductos', CatalogoProductos::class);
Route::apiResource('prueba', PruebaController::class);

