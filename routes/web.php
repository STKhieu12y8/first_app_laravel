<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;


Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/trangchu', [PagesController::class, 'trangchu']);

Route::get('/posts', [PostsController::class, 'index']);

Route::resource('foods', FoodsController::class);

