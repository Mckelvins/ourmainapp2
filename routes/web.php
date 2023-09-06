<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// User related routes
Route::get('/', [UserController::class, "showCorrectHomepage"]);
Route::post('/register', [UserController::class, "register"]);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

//Blog post related routes

Route::get('/create-post', [PostController::class, 'showCreateForm'])

/*
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/welcome', [ExampleController::class, "welcome"]);
//    1fE3z%tsp*J7

*/