<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExtendedUserController;

// Rutas para Login y Registro
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});

// Rutas para ExtendedUser
Route::group([
  'middleware' => 'api',
  'prefix' => 'extended_user'
], function ($router) {
  Route::post('/create', [ExtendedUserController::class, 'create'])->name('extended_user.create');
  Route::post('/update', [ExtendedUserController::class, 'update'])->name('extended_user.update');
  Route::post('/{id}', [ExtendedUserController::class, 'show'])->name('extended_user.show');
  Route::post('/getRole/{id}', [ExtendedUserController::class, 'getRole'])->name('extended_user.getRole');
});