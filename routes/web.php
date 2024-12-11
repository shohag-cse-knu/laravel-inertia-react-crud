<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * route resource /posts
 */
Route::resource('/', \App\Http\Controllers\PostController::class);
Route::resource('/posts', \App\Http\Controllers\PostController::class);