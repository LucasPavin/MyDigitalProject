<?php

use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
Route::get('/consulter-annonce', [PostController::class, 'consulterannonce']);
Route::get('/deposer-annonce', [PostController::class, 'deposerannonce']);
Route::get('/nos-tarifs', [PostController::class, 'nostarifs']);
Route::get('/a-propos', [PostController::class,'apropos']);
Route::get('/contact', [PostController::class, 'contacter']);


Route::get('/publication/{id}', [PostController::class, 'publication']);
// Route::post('/sauverproduit', [PostController::class, 'sauverproduit']);


// //Modifier une annonce
// Route::get('/modifier/{id}', [PostController::class, 'modifier']);
// Route::post('/modifierproduit', [PostController::class, 'modifierproduit']);
// //Supprimer une annonce
// Route::get('/supprimer/{id}', [PostController::class, 'supprimer']);

Route::resource('/annonce', 'App\Http\Controllers\ProductController');

//LOGIN

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

Route::get('/connexion', [LoginController::class, 'connexion']);
Route::post('/connexion','LoginController@traitement');


// Route::get('/inscription', [LoginController::class, 'inscription']);
Route::get('/paiement', [LoginController::class, 'paiement']);

// Chat
Route::resource('/chat', 'App\Http\Controllers\ChatController');
Route::post('/chat', [ChatController::class, 'store']);

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
