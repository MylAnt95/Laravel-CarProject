<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;
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
Route::get('categories/{category}', [DashboardController::class, 'showCategory'])->name('categories_show');

// Guest users
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', LoginController::class);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

// Authenticated users
Route::middleware('auth')->group(function () {
    Route::get('logout', LogoutController::class);
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('dashboard/create-post', [DashboardController::class, 'createPost'])->name('dashboard.create-post');
    Route::post('dashboard/store-post', [DashboardController::class, 'store'])->name('dashboard.store-post');
    Route::delete('dashboard/delete-post/{post}', [DashboardController::class, 'deletePost'])->name('dashboard.delete-post');
});
