<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MagazineController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
// Prodotti
Route::get('/products/index', [PublicController::class, 'products_index'])->name('products_index');
Route::get('/products/create', [PublicController::class, 'products_create'])->name('products_create');

Route::post('/product/submit', [PublicController::class, 'product_submit'])->name('post_product_submit');

// Articoli

Route::get('/articles/index', [ArticleController::class, 'articles_index'])->name('articles_index');
Route::get('/articles/create', [ArticleController::class, 'articles_create'])->name('articles_create');


Route::post('/article/submit', [ArticleController::class, 'article_submit'])->name('article_submit');

// Magazine
Route::get('/magazines/index', [MagazineController::class, 'index'])->name('magazines_index');

Route::get('/magazines/create', [MagazineController::class, 'create'])->name('magazines_create');
Route::post('/magazine/store', [MagazineController::class, 'store'])->name('magazine_store');
Route::get('/magazine/detail/{magazine}', [MagazineController::class, 'show'])->name('magazine_show');
Route::get('/magazine/edit/{magazine}', [MagazineController::class, 'edit'])->name('magazine_edit');
Route::put('/magazine/update/{magazine}', [MagazineController::class, 'update'])->name('magazine_update');
Route::delete('/magazine/destroy/{magazine}', [MagazineController::class, 'destroy'])->name('magazine_destroy');