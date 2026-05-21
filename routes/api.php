<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\ClientsController;

Route::apiResource('clients', ClientsController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('products', ProductsController::class);
Route::apiResource('categories', CategoriesController::class);
Route::apiResource('orders', OrdersController::class);
Route::apiResource('clients', ClientsController::class);