<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::post('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
