<?php

use App\Http\Controllers\Api\CurrencyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome');

Route::redirect('/home', '/')->name('home.redirect');

Route::get('test', TestController::class)->name('test');


Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [LoginController::class, 'store'])->name('login.store');


Route::get('blog', [BlogController::class, 'index'])->name('blog');

Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


Route::resource('/posts/{post}/comments', CommentController::class);

Route::resource('currency', CurrencyController::class
);


Route::fallback(function () {
    return 'Fallback';
});
