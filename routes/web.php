<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Request;
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

Route::get('/', [PageController::class,'homepage'])->name('homepage');


//articoli
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/new/announcement', [ArticleController::class,'create'])->name('articles.create');
Route::get('/new/show', [ArticleController::class,'show'])->name('articles.show');
Route::post('articles/store', [ArticleController::class, 'store'] )->name('articles.store');
