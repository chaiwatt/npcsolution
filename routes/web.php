<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SubScriberController;
use App\Http\Controllers\FaceBookLikeController;
use App\Http\Controllers\LineSubcribeController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('', [HomeController::class, 'index'])->name('index');
Route::group(['prefix' => 'video'], function(){
    Route::get('', [VideoController::class, 'index'])->name('video');
});

Route::group(['prefix' => 'product'], function(){
    Route::get('', [ProductController::class, 'index'])->name('product');
    Route::get('detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    
});

Route::group(['prefix' => 'service'], function(){
    Route::get('que', [ServiceController::class, 'que'])->name('service.que');
    Route::get('ondemand', [ServiceController::class, 'ondemand'])->name('service.ondemand');
    Route::get('training', [ServiceController::class, 'training'])->name('service.training');
});

Route::group(['prefix' => 'customer'], function(){
    Route::get('', [CustomerController::class, 'index'])->name('customer');
    Route::get('create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('createsave', [CustomerController::class, 'createsave'])->name('customer.createsave');
    Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('editsave/{id}', [CustomerController::class, 'editsave'])->name('customer.editsave');
    Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
});

Route::group(['prefix' => 'contact'], function(){
    Route::post('createsave', [ContactController::class, 'createsave'])->name('contact.createsave');
});

Route::group(['prefix' => 'subscriber'], function(){
    Route::post('createsave', [SubScriberController::class, 'createsave'])->name('subscriber.createsave');
});

Route::group(['prefix' => 'line'], function(){
    Route::get('linesubscribe', [LineSubcribeController::class, 'LineSubcribe'])->name('line.subcribe');
    Route::get('linecallback', [LineSubcribeController::class, 'LineCallback'])->name('line.callback');
    Route::get('linesend', [LineSubcribeController::class, 'LineSend'])->name('line.send');
});


