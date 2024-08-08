<?php


use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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

Route::view('/', 'home.home')->name('home');

Route::get('admin', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin');

Route::post('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('admin/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::view('admin/dashboard', 'admin.dashboard')->name('dashboard');
});

Route::prefix('dashboard')->group(function () {
    Route::resource('book', App\Http\Controllers\admin\AdminBookController::class);
    Route::resource('author', App\Http\Controllers\admin\AdminAuthorController::class);
});

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);

