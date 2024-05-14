<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
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
// ROTTA PER VISUALIZZARE TUTTI GLI ARTICOLI
Route::get('/articles/index', [ArticleController::class, 'index'])->name('article.index');
// SHOW ARTICOLI
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
//INDEX PER CATEGORIA
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
// INDEX PER SCRITTORE
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');
//DIVENTARE REVISOR, WRITER, ADMIN
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::post('careers/submit', [PageController::class, 'careerSubmit'])->name('careers.submit');
Route::get('/article/search', [ArticleController::class, 'articleSearch'])->name('article.search');


//GRUPPO ROTTE ADMIN
Route::middleware('admin')->group(function (){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::patch('admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::patch('admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::patch('admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
    Route::put('/admin/edit/{tag}/tag', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/{category}/category', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');

});
//GRUPPO ROTTE REVISOR
Route::middleware('revisor')->group(function (){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::post('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::post('/revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::post('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

Route::middleware('writer')->group(function (){
    // ROTTA FORM CREAZIONE ARTICOLI 
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
// ROTTA PER SALVATAGGIO NUOVO ARTICOLO
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
});