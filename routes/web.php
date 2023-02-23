<?php

use App\Http\Controllers\Admin\ExportParticipantController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\PhaseController;
use App\Http\Controllers\Admin\PrizeController;
use App\Http\Controllers\Admin\UserLogController;
use App\Http\Controllers\StreamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/', [App\Http\Controllers\Admin\LoginController::class, 'loginForm'])->name('admin.signin')->middleware('guest:admin');
Route::post('/', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login')->middleware('guest:admin');
Route::group(['prefix' => 'admin'], function () {
Route::group(['middleware' => ['admin']], function () {
        Route::view('/pages/datatables', 'pages.datatables');
        Route::view('/', 'dashboard')->name('admin.dashboard');
        Route::resource('/testomonial', App\Http\Controllers\Admin\TestomonialController::class);
        Route::resource('/teams', App\Http\Controllers\Admin\TeamsController::class);
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::resource('participant', ParticipantController::class);
    });
});

