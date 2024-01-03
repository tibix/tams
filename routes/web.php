<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');

//Show register create form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');

// logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// authenticate and login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Create new user
Route::post('/users', [UserController::class, 'store']);

Route::get('/home', [UserController::class,'home'])->name('home')->middleware('auth');

