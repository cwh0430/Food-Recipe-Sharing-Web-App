<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RecipeController;

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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();
// //FOR NORMAL USERS
// // Authentication routes
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showUserLogin'])->name('login');
// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'userLogin']);
// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// // Registration routes
// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showUserRegister'])->name('register');
// Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'userRegister']);

// // Password reset routes
// Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset']);




Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('/home/admin', [RecipeController::class, 'adminIndex'])->middleware('protectedPage');


Route::get('/', [RecipeController::class, 'index']);
Route::get('/home', [RecipeController::class, 'index'])->name('home');
Route::get('/recipes', [RecipeController::class, 'recipes'])->name('recipes');
Route::get('/favourites', [RecipeController::class, 'favourites'])->name('favourites');
Route::get('/faqs', [RecipeController::class, 'faqs'])->name('faqs');

//try define recipe index and put it as / route
//try define recipe create update and delete follow jason 
// then put can for admin
// try putting admin and user de home tgt