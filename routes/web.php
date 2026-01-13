<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
// Prodotti
Route::get('/products/index', [PublicController::class, 'products_index'])->name('products_index');
Route::get('/products/create', [PublicController::class, 'products_create'])->name('products_create');

Route::post('/product/submit', [PublicController::class, 'product_submit'])->name('post_product_submit');

// Articoli

Route::get('/articles/index', [ArticleController::class, 'articles_index'])->name('articles_index');
Route::get('/articles/create', [ArticleController::class, 'articles_create'])->name('articles_create');


Route::post('/article/submit', [ArticleController::class, 'article_submit'])->name('article_submit');