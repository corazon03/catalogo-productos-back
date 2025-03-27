<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatalogoProductos;

Route::apiResource('catalogoProductos', CatalogoProductos::class);
