<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;



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

Route::get('/giris', [AuthController::class, 'login'])->name('login');
Route::post('/giris', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/cikis', [AuthController::class, 'logOut'])->name('logOut');
Route::middleware('isAdmin')->group(function () {
    Route::get('/', [MessageController::class, 'index'])->name('index');
    Route::post('/', [MessageController::class, 'create'])->name('create');
});

