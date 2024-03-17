<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;

Route::controller(PaypalController::class)->prefix('paypal')->group(function () {
    Route::view('payment-300', 'paypal.index-300')->name('create.payment');
    Route::view('payment-500', 'paypal.index-500')->name('create.payment');
    Route::view('payment-1000', 'paypal.index-1000')->name('create.payment');
    Route::view('payment-2000', 'paypal.index-2000')->name('create.payment');

    Route::get('handle-payment-300', 'handlePayment300')->name('make.payment-300');
    Route::get('handle-payment-500', 'handlePayment300')->name('make.payment-500');
    Route::get('handle-payment-1000', 'handlePayment1000')->name('make.payment-1000');
    Route::get('handle-payment-2000', 'handlePayment2000')->name('make.payment-2000');
    Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
    Route::get('payment-success', 'paymentSuccess')->name('success.payment');
});
