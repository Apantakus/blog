<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {return view('home');});
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');


Route::get('/categories-create', [CategoryController::class,'create'])->name('categories-create');
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::post('/categories-create', [CategoryController::class,'save_category'])->name('categories-create');


Route::post('/post-create', [PostController::class,'save_post'])->name('save-post');
Route::get('/delete-posts', [PostController::class,'delete_post'])->name('delete-posts');
Route::get('/post-create', [PostController::class,'post_create'])->name('post-create');
Route::get('/posts', [PostController::class,'index'])->name('posts');
