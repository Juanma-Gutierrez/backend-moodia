<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\CivilStatusController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\ExtendedUserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\InspiringPhraseController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
  Route::post('/{id}', [ExtendedUserController::class, 'show'])->middleware('auth:api')->name('extended_user.show');
  Route::post('/getRole/{id}', [ExtendedUserController::class, 'getRole'])->name('extended_user.getRole');
});

// Rutas para Genre
Route::group([
  'middleware' => 'api',
  'prefix' => 'genre'
], function ($router) {
  Route::post('/get', [GenreController::class, 'getAllGenres'])->name('genre.get');
});

// Rutas para CivilStatus
Route::group([
  'middleware' => 'api',
  'prefix' => 'civil_status'
], function ($router) {
  Route::post('/get', [CivilStatusController::class, 'getAllCivilStatus'])->name('civilStatus.get');
});

// Rutas para Employment
Route::group([
  'middleware' => 'api',
  'prefix' => 'employment'
], function ($router) {
  Route::post('/get', [EmploymentController::class, 'getAllEmployments'])->name('employment.get');
});

// Rutas para Category
Route::group([
  'middleware' => 'api',
  'prefix' => 'category'
], function ($router) {
  Route::post('/get', [CategoryController::class, 'getAllCategories'])->name('category.get');
});

// Rutas para Challenge
Route::group([
  'prefix' => 'challenge'
], function ($router) {
  Route::post('/get', [ChallengeController::class, 'getAllChallenges'])->name('challenge.get');
});

// Rutas para InspiringPhrase
Route::group([
  'prefix' => 'inspiring_phrase'
], function ($router) {
  Route::post('/get', [InspiringPhraseController::class, 'getAllInspiringPhrases'])->name('inspiringPhrase.all');
  Route::post('/get/{id}', [InspiringPhraseController::class, 'get'])->name('inspiringPhrase.get');
});


// Rutas para Post
Route::group([
  'middleware' => 'auth:api',
  'prefix' => 'post'
], function ($router) {
  Route::get('/list', [PostController::class, 'list'])->name('post.list');
  Route::post('/create', [PostController::class, 'store'])->name('post.create');
  Route::get('/get/{id}', [PostController::class, 'get'])->name('post.get');
  Route::put('/update/{id}', [PostController::class, 'update'])->name('post.update');
  Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
});

// Rutas para Post - Solo para Administradores // TODO PENDIENTE DE IMPLEMENTAR
// Este era el código con el que obtenía todos los posts
//     $posts = Post::all();
// return response()->json($posts);

Route::group([
  'middleware' => ['auth:api', 'role:Administrador'],
  'prefix' => 'post'
], function ($router) {
  Route::get('/admin/all', [PostController::class, 'getAllPosts'])->name('post.admin.all');
});
