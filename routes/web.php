<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;


Route::get('/', function () {
    return view('welcome');
})->name('create.payment');

Route::get('handle-payment', [PaypalController::class,'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [PaypalController::class,'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [PaypalController::class,'paymentSuccess'])->name('success.payment');
