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
// Route::get('setcookie', [FaceBookLikeController::class, 'setcookie'])->name('setcookie');
// Route::get('getcookie', [FaceBookLikeController::class, 'getcookie'])->name('getcookie');
Route::get('userlogin', [FaceBookLikeController::class, 'userlogin'])->name('userlogin');
Route::get('usersignup', [FaceBookLikeController::class, 'usersignup'])->name('usersignup');
Route::get('addpage', [FaceBookLikeController::class, 'addpage'])->name('addpage');
Route::get('editpage', [FaceBookLikeController::class, 'editpage'])->name('editpage');
Route::get('deletepage', [FaceBookLikeController::class, 'deletepage'])->name('deletepage');
Route::get('verified', [FaceBookLikeController::class, 'verified'])->name('verified');
Route::get('likedpage', [FaceBookLikeController::class, 'likedpage'])->name('likedpage');
Route::get('information', [FaceBookLikeController::class, 'information'])->name('information');
