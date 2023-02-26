<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes

Route::get('/', [App\Http\Controllers\Admin\LoginController::class, 'loginForm'])->name('admin.signin');
Route::post('/', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::group(['prefix' => 'admin'], function () {
Route::group(['middleware' => ['auth']], function () {
        Route::view('/fe', 'frontend/dashboard');
        Route::view('/', 'dashboard')->name('admin.dashboard');
        Route::resource('/testomonial', App\Http\Controllers\Admin\TestomonialController::class);
        Route::resource('/team', App\Http\Controllers\Admin\TeamsController::class);
        Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class);
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});

