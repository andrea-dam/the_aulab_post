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

// Rotte Middleware Admin
Route::middleware('admin')->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-admin', [AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');
    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'makeUserWriter'])->name('admin.makeUserWriter');
});

// Rotte Middleware Writer
Route::middleware('writer')->group(function() {
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
});

// Rotte Middleware Revisor
Route::middleware('revisor')->group(function() {
    Route::get('/revisor/dashboard', [RevisorController::class, 'revisorDashboard'])->name('revisor.dashboard');
    Route::get('/revisor/article/{article}/detail', [RevisorController::class, 'articleDetail'])->name('revisor.detail');
    Route::get('/revisor/article/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.accept');
    Route::get('/revisor/article/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.reject');
    
});