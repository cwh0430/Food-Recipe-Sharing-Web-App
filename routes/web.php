<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FavouriteController;
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



//for all logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//for admin page
Route::get('/home/admin', [RecipeController::class, 'adminIndex'])->middleware('protectedPage');

//for default home page and auth home page
Route::get('/', [RecipeController::class, 'index']);
Route::get('/home', [RecipeController::class, 'index'])->name('home');

//state what is this for?
Route::get('/recipes', [RecipeController::class, 'recipes'])->name('recipes');
Route::get('/placeholder', [RecipeController::class, 'placeholder'])->name('placeholder');

//favourites
Route::get('/favourites', [FavouriteController::class, 'favourites'])->name('favourites');
Route::post('favorite-add/{id}', [FavouriteController::class, 'favoriteAdd'])->name('favorite.add');
Route::delete('favorite-remove/{id}', [FavouriteController::class, 'favoriteRemove'])->name('favorite.remove');

//filter
Route::get('/recipes/filter', [RecipeController::class, 'filter'])->name('recipes.filter');

//recommendation
Route::get('/recipes/recommendations', [RecipeController::class, 'recommendations'])->name('recommendations');


//about and contact us
Route::get('/team', [AboutController::class, 'team'])->name('team');
Route::get('/company', [AboutController::class, 'company'])->name('company');
Route::get('/feedback', [AboutController::class, 'feedback'])->name('feedback');
Route::get('/faq', [AboutController::class, 'faq'])->name('faq');


//for recipe policy (C Read detail UD)
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/create', [RecipeController::class, 'store']);