<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesefron
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('first');
Route::get('/home/{lan?}', [FrontendController::class, 'index'])->name('home');
Route::get('/about/{lan?}', [FrontendController::class, 'about'])->name('about');
Route::get('/resources', [FrontendController::class, 'resources'])->name('resources');
Route::get('/testimonials', [FrontendController::class, 'testimonials'])->name('testimonials');
Route::get('/review/{is?}', [FrontendController::class, 'review'])->name('review');
Route::get('/article/parents/{id?}', [FrontendController::class, 'articleParents'])->name('article.parents');
Route::get('/article/health/{id?}', [FrontendController::class, 'articleMentalHealth'])->name('article.health');
Route::get('/article/parents/islandic/{id?}', [FrontendController::class, 'articleIslandicParents'])->name('article.parents.is');
Route::get('/article/health/islandic/{id?}', [FrontendController::class, 'articleIslandicMentalHealth'])->name('article.health.is');
Route::get('/article/parents/polish/{id?}', [FrontendController::class, 'articlePolishParents'])->name('article.parents.po');
Route::get('/article/health/polish/{id?}', [FrontendController::class, 'articlePolishMentalHealth'])->name('article.health.po');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::post('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/blog/update', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/blog/create-polish/{id}', [BlogController::class, 'createPolishTranslation'])->name('blog.create.polish');
        Route::get('/blog/create-islandic/{id}', [BlogController::class, 'createIslandicTranslation'])->name('blog.create.islandic');
        Route::post('/blog/polish/store', [BlogController::class, 'storePolish'])->name('blog.polish.store');
        Route::post('/blog/islandic/store', [BlogController::class, 'storeIslandic'])->name('blog.islandic.store');
        Route::get('/blog/polish/edit/{id}', [BlogController::class, 'editPolish'])->name('blog.edit.polish');
        Route::post('/blog/polish/update', [BlogController::class, 'updatePolish'])->name('blog.update.polish');
        Route::get('/blog/islandic/edit/{id}', [BlogController::class, 'editIslandic'])->name('blog.edit.islandic');
        Route::post('/blog/islandic/update', [BlogController::class, 'updateIslandic'])->name('blog.update.islandic');
    });
});