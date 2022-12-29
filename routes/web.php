<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

//Route::get('/login', [IndexController::class, 'login'])->name('login');

Route::get('/about', [IndexController::class, 'about'])->name('about');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('catalog.show');



Route::middleware('auth')->group(function(){

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/posts/comments/{id}', [catalogController::class, 'comment'])->name('comment');

});

Route::middleware('guest')->group(function(){

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

});
