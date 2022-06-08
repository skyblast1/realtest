<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');

Route::get('/articles/{slug}',[ArticlesController::class, 'oneArticle'])->name('articles.one');

Route::get('/articles/tags/{tag}',[ArticlesController::class, 'allByTag'])->name('articles.tag');
