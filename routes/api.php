<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PruebaController;

Route::apiResource('prueba', PruebaController::class);