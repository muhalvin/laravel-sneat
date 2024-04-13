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

// Landing Page
Route::get('/', function () {
    return view('frontend.welcome');
})->name('/');

Route::group(['prefix' => 'home', 'middleware' => ['auth', 'verified'], 'as' => 'home.'], function () {
    Route::get('/', [\App\Http\Controllers\Member\Home\HomeController::class, 'index'])->name('index');
});

// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'role:Administrator'], 'as' => 'admin.'], function () {
    Route::get('users', [\App\Http\Controllers\Admin\User\UserController::class, 'index'])->name('users');
});








require __DIR__ . '/auth.php';
