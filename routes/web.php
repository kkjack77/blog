<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

URL::forceScheme('https');

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/image', [PostController::class, 'image']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::delete('/posts/{post}', [PostController::class,'delete']);