<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Auth::routes();
//FOR NORMAL USERS
// Authentication routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showUserLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'userLogin']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showUserRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'userRegister']);

// Password reset routes
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset']);


//FOR ADMIN
Route::get('/login/admin', [LoginController::class, 'showAdminLogin']);

Route::get('/register/admin', [RegisterController::class, 'showAdmin']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/login/admin', [LoginController::class, 'adminLogin']);

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);


Route::group(['middleware' => 'auth:admin'], function () {

    Route::view('/admin', 'admin');
});

Route::view('/', 'home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');