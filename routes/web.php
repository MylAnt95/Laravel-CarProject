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

Route::view('/', 'index')->name('login');

Route::post('login', LoginController::class)->middleware('guest');

Route::get('dashboard', DashboardController::class, '__invoke')->name('dashboard')->middleware('auth');

Route::get('logout', LogoutController::class);

Route::get('dashboard/create-post', [DashboardController::class, 'createPost'])->name('dashboard.create-post')->middleware('auth');
Route::post('dashboard/store-post', [DashboardController::class, 'store'])->name('dashboard.store-post')->middleware('auth');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
