<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;

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

// Rotte Public
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/work-with-us', [PublicController::class, 'workWithUs'])->name('work-with-us');
Route::post('/user/send-role-request', [PublicController::class, 'sendRoleRequest'])->name('user-role-request');

// Rotte Article
Route::get('/article/{article}/show', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/{category}/index', [ArticleController::class, 'articlesForCategory'])->name('article.category');
Route::get('/article/search', [PublicController::class, 'searchArticle'])->name('search.article');

// Rotte Middleware Admin
Route::middleware('admin')->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/{user}/set-admin', [AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');
    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'makeUserWriter'])->name('admin.makeUserWriter');

    Route::post('/tag/{tag}/update', [AdminController::class, 'editTag'])->name('tag.edit');
    Route::delete('/tag/{tag}/delete', [AdminController::class, 'deleteTag'])->name('tag.delete');
    Route::post('/tag/store', [AdminController::class, 'storeTag'])->name('tag.store');

    Route::post('/category/{category}/update', [AdminController::class, 'editCategory'])->name('category.edit');
    Route::delete('/category{category}/delete', [AdminController::class, 'deleteCategory'])->name('category.delete');
    Route::post('/category/store', [AdminController::class, 'storeCategory'])->name('category.store');
});

// Rotte Middleware Writer
Route::middleware('writer')->group(function() {
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/article/dashboard', [ArticleController::class, 'articleDashboard'])->name('article.dashboard');
    Route::get('article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}/delete', [ArticleController::class, 'destroy'])->name('article.delete');
});

// Rotte Middleware Revisor
Route::middleware('revisor')->group(function() {
    Route::get('/revisor/dashboard', [RevisorController::class, 'revisorDashboard'])->name('revisor.dashboard');
    Route::get('/revisor/article/{article}/detail', [RevisorController::class, 'articleDetail'])->name('revisor.detail');
    Route::get('/revisor/article/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.accept');
    Route::get('/revisor/article/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.reject');
});