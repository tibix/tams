<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FavoriteController;

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
Route::get('/info', function () {
		return phpinfo();
});
//Show register create form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::get('/users/gestiune/', [UserController::class, 'gestiune'])->name('users.gestiune')->middleware('auth');
Route::get('/users/{user}/profile', [UserController::class, 'edit'])->name('users.profile')->middleware('auth');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::post('/users', [UserController::class, 'store']);
Route::get('/home', [UserController::class,'home'])->name('home')->middleware('auth');
Route::get('/forgot-password', [UserController::class, 'forgot_password_view']);
Route::post('/forgot-password', [UserController::class, 'forgot_password']);
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');
Route::post('/reset-password', [UserController::class, 'reset_password'])->name('password.update');

// Article routes
Route::get('/articles/gestiune', [ArticleController::class, 'gestiune'])->name('articles.gestiune')->middleware('auth');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');
Route::post('/articles/search', [ArticleController::class, 'search'])->name('articles.search');
Route::get('/articles/user/{user}', [ArticleController::class, 'user'])->name('articles.user')->middleware('auth');
Route::get('/articles/category/{category}', [ArticleController::class, 'category'])->name('articles.category');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update')->middleware('auth');
Route::put('/articles/publish/{article}', [ArticleController::class, 'publish'])->name('articles.publish')->middleware('auth');
Route::delete('/articles/{article}', [ArticleController::class, 'delete'])->name('articles.delete')->middleware('auth');
Route::post('/articles/{article}/aproba', [ArticleController::class, 'aproba'])->name('articles.aproba')->middleware('auth');
Route::post('/articles/{article}/respinge', [ArticleController::class, 'respinge'])->name('articles.aproba')->middleware('auth');


// Favorite routes
Route::post('/favorites', [FavoriteController::class, 'store'])->name('favorites.store')->middleware('auth');
Route::delete('/favorites', [FavoriteController::class, 'destroy'])->name('favorites.delete')->middleware('auth');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index')->middleware('auth');
