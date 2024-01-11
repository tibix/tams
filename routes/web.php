<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;

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

// Show index page
Route::get('/', [ArticleController::class, 'index']);
Route::get('/category/{category}', [ArticleController::class, 'category']);

//Show register create form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/home', [UserController::class,'home'])->name('home')->middleware('auth');

// Article routes
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update')->middleware('auth');
Route::delete('/articles/{article}', [ArticleController::class, 'delete'])->name('articles.delete')->middleware('auth');


// Testing
Route::get('/dashboard', [DashboardController::class, 'index']);