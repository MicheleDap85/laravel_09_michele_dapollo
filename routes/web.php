<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/contattami', [BlogController::class, 'contact'])->name('contact');
Route::get('/articoli', [BlogController::class, 'index'])->name('articles.index');
Route::get('/articoli/{slug}', [BlogController::class, 'show'])->name('articles.show');
Route::get('/contattami', [BlogController::class, 'contact'])->name('contact');
Route::post('/contattami', [BlogController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/article/create', [BlogController::class, 'create'])->name('articles.create');
Route::post('/article/store', [BlogController::class, 'store'])->name('articles.store');