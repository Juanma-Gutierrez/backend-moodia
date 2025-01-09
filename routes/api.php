<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CivilStatusController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\ExtendedUserController;
use App\Http\Controllers\GenreController;

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

// Rutas para Genre
Route::group([
  'middleware' => 'api',
  'prefix' => 'genre'
], function ($router) {
  Route::post('/get', [GenreController::class, 'getGenres'])->name('genre.get');
});

// Rutas para CivilStatus
Route::group([
  'middleware' => 'api',
  'prefix' => 'civil_status'
], function ($router) {
  Route::post('/get', [CivilStatusController::class, 'getCivilStatus'])->name('civilStatus.get');
});

// Rutas para Employment
Route::group([
  'middleware' => 'api',
  'prefix' => 'employment'
], function ($router) {
  Route::post('/get', [EmploymentController::class, 'getEmployment'])->name('employment.get');
});
