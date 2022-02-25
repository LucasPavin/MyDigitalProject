<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// 'App\Http\Controllers\PostController@index'

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PostController::class, 'home']);
Route::get('/deposer-annonce', [PostController::class, 'deposerannonce']);
Route::get('/consulter-annonce', [PostController::class, 'consulterannonce']);
Route::get('/a-propos', [PostController::class,'apropos']);
Route::get('/contact', [PostController::class, 'contacter']);
Route::get('/connexion', [PostController::class, 'connexion']);
Route::get('/inscription', [PostController::class, 'inscription']);
Route::get('/publication/{id}', [PostController::class, 'publication']);
Route::post('/sauverproduit', [PostController::class, 'sauverproduit']);
Route::get('/modifier/{id}', [PostController::class, 'modifier']);
Route::post('/modifierproduit', [PostController::class, 'modifierproduit']);
