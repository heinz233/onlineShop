<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// other routes
Route::get('/fetchAllProducts', [ProductController::class, 'index']);

//protected routes
Route::middleware('auth:sanctum')->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('Products', UserController::class);
    Route::resource('orders', UserController::class);
    Route::resource('Payments', UserController::class);
    Route::resource('roles', UserController::class);

    //custom routes

    Route::get('/orderssPerUser/{id}', [OrdersController::class, 'ordersPerUser']);

});

