<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AccountController;

Route::get('/',[PageController::class,'index'])->name('homepage');

Route::resource('/books',BookController::class);
Route::get('/books/{book}/manage',[BookController::class, 'manage'])->name('books.manage');
Route::post('/books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');

Route::get('/home', [AccountController::class,'index'])->name('index.account');