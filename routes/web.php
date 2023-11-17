<?php

use App\Http\Controllers\ProfileController;
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

// Login With Google
Route::middleware('guest')->group(function () {
    Route::get('social/google', [\App\Http\Controllers\Auth\GoogleAuthController::class, 'index'])->name('auth.google');
    Route::get('social/google/callback', [\App\Http\Controllers\Auth\GoogleAuthController::class, 'callback']);
});

// Landing Page
Route::get('/', function () {
    return view('contents.frontend.welcome');
});


// Member
Route::group(['prefix' => 'member', 'middleware' => ['auth', 'verified', 'role:Member'], 'as' => 'member.'], function () {
    Route::get('home', [\App\Http\Controllers\Member\Home\HomeController::class, 'index'])->name('home');
});









// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'role:Administrator'], 'as' => 'admin.'], function () {
    Route::get('home', [\App\Http\Controllers\Admin\Home\HomeController::class, 'index'])->name('home');
});

require __DIR__ . '/auth.php';
