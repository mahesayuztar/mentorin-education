<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::post('/payment-callback', [OrderController::class, 'paymentCallback'])->name('payment-callback');
