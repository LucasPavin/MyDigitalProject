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
Route::resource('/annonce', ProductController::class);
Route::get('/deposer-annonce', [PostController::class, 'deposerannonce']);
Route::get('/nos-tarifs', [PostController::class, 'nostarifs']);
Route::get('/a-propos', [PostController::class,'apropos']);
Route::get('/contact', [PostController::class, 'contacter']);
Route::get('/favoris', [PostController::class, 'favoris']);

// Annonce
Route::get('/filtrer', 'App\Http\Controllers\ProductController@filtrer')->name('product.filtrer');
Route::get('/recherche', 'App\Http\Controllers\ProductController@recherche')->name('product.recherche');

//LOGIN
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

// Chat
Route::resource('/chat', 'App\Http\Controllers\ChatController');
Route::post('/chat', [ChatController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';














// TEST


// Route::get('/consulter-annonce', [PostController::class, 'consulterannonce']);

// Route::get('/publication/{id}', [PostController::class, 'publication']);
// Route::post('/sauverproduit', [PostController::class, 'sauverproduit']);


// //Modifier une annonce
// Route::get('/modifier/{id}', [PostController::class, 'modifier']);
// Route::post('/modifierproduit', [PostController::class, 'modifierproduit']);
// //Supprimer une annonce
// Route::get('/supprimer/{id}', [PostController::class, 'supprimer']);



// Route::get('/', function () {
//     return view('welcome');
// });
