<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROTTA HOMEPAGE
Route::get('/', [PageController::class, 'home'])->name('home');


// ROTTA FORM CREAZIONE ARTICOLI 
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
// ROTTA PER SALVATAGGIO NUOVO ARTICOLO
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');


