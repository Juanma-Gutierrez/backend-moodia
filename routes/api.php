<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CivilStatusController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\ExtendedUserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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

// Rutas para Category
Route::group([
  'middleware' => 'api',
  'prefix' => 'category'
], function ($router) {
  Route::post('/get', [CategoryController::class, 'getCategory'])->name('category.get');
});

// Rutas para Post
Route::group([
  'middleware' => 'auth:api',
  'prefix' => 'post'
], function ($router) {
  Route::get('/list', [PostController::class, 'index'])->name('post.list');
  Route::post('/create', [PostController::class, 'store'])->name('post.create');
  Route::get('/show/{id}', [PostController::class, 'show'])->name('post.show');
  Route::put('/update/{id}', [PostController::class, 'update'])->name('post.update');
  Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
});

// Rutas para Post - Solo para Administradores // TODO PENDIENTE DE IMPLEMENTAR
Route::group([
  'middleware' => ['auth:api', 'role:Administrador'],
  'prefix' => 'post'
], function ($router) {
  Route::get('/admin/all', [PostController::class, 'getAllPosts'])->name('post.admin.all');
});