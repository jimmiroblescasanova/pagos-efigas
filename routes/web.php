<?php

use App\Http\Controllers\PaymentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/payment', [PaymentsController::class, 'validatePayerData'])
    ->name('payments.validate');
Route::get('/document-to-pay/{document}', [PaymentsController::class, 'payDocument'])
    ->name('payments.pay');

Route::get('/reload-captcha', [PaymentsController::class, 'reloadCaptcha']);
