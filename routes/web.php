<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FaceBookLikeController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'customer'], function(){
    Route::get('', [CustomerController::class, 'index'])->name('customer');
    Route::get('create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('createsave', [CustomerController::class, 'createsave'])->name('customer.createsave');
    Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('editsave/{id}', [CustomerController::class, 'editsave'])->name('customer.editsave');
    Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
});
