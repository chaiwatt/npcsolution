<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaceBookLikeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('getlist', [FaceBookLikeController::class, 'getlist'])->name('getlist');
Route::get('setcookie', [FaceBookLikeController::class, 'setcookie'])->name('setcookie');
Route::get('getcookie', [FaceBookLikeController::class, 'getcookie'])->name('getcookie');
Route::get('userlogin', [FaceBookLikeController::class, 'userlogin'])->name('userlogin');
Route::get('usersignup', [FaceBookLikeController::class, 'usersignup'])->name('usersignup');
