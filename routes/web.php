<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Create User
Route::get('/users/create', [UserController::class, 'form']);
Route::post('/users/create', [UserController::class, 'create']);
// View All Users
Route::get('/users', [UserController::class, 'index']);
// View One User
Route::get('/users/{user}/view', [UserController::class, 'view']);
// Delete One User
Route::get('/users/{user}/delete', [UserController::class, 'delete']);

// Create Product
Route::get('/products/create', [ProductController::class, 'form']);
Route::post('/products/create', [ProductController::class, 'create']);
// View All Products
Route::get('/products', [ProductController::class, 'index']);
// Delete one Product
Route::get('/products/{product}/delete', [ProductController::class, 'delete']);
// Update one Product
Route::get('/products/{product}/update', [ProductController::class, 'form_update']);
Route::post('/products/{product}/update', [ProductController::class, 'update']);
