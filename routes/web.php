<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

//for all logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//for admin page
Route::get('/manage', [RecipeController::class, 'adminIndex'])->middleware('protectedPage');

//for default home page and auth home page
Route::get('/', [RecipeController::class, 'index']);
Route::get('/home', [RecipeController::class, 'index'])->name('home');

//favourites
Route::get('/favourites', [FavouriteController::class, 'favourites'])->name('favourites');
Route::post('favorite-add/{id}', [FavouriteController::class, 'favoriteAdd'])->name('favorite.add');
Route::delete('favorite-remove/{id}', [FavouriteController::class, 'favoriteRemove'])->name('favorite.remove');

//filter
Route::get('/recipes/filter', [RecipeController::class, 'filter'])->name('recipes.filter');

//review and rating
Route::get('/review/{id}', [ReviewController::class, 'showReview'])->middleware('auth');
Route::post('/review/{id}', [ReviewController::class, 'review'])->name('review')->middleware('auth');

//about and contact us
Route::get('/team', [AboutController::class, 'team'])->name('team');
Route::get('/company', [AboutController::class, 'company'])->name('company');
Route::get('/feedback', [AboutController::class, 'feedback'])->name('feedback');
Route::get('/faq', [AboutController::class, 'faq'])->name('faq');

//CRUD (C)
Route::get('/create', [RecipeController::class, 'showStore'])->middleware('protectedPage');
Route::post('/create', [RecipeController::class, 'store']);

//CRUD (R)
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

//CRUD (U)
Route::get('/edit/{id}', [RecipeController::class, 'showEdit'])->middleware('protectedPage');
Route::post('/edit/{id}', [RecipeController::class, 'edit']);

//CRUD (D)
Route::get('/delete/{id}', [RecipeController::class, 'destroy']);

//search
Route::get('/search', [RecipeController::class, 'search'])->name('search');