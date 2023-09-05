<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/welcome', [ExampleController::class, "welcome"]);
*/
//    1fE3z%tsp*J7

Route::get('/home', [ExampleController::class, "home"]);
Route::get('/', [UserController::class, "showCorrectHomepage"]);
Route::get('/about', [ExampleController::class, "aboutPage"]);

//Route::get('/about', [ExampleController::class, "aboutPage"]);

Route::post('/register', [UserController::class, "register"]);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

