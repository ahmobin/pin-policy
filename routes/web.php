<?php

use Illuminate\Support\Facades\Route;
use AhMobin\PinPolicy\Http\Controllers\PinPolicyController;

Route::get('set-pin',[PinPolicyController::class,'setPin']);
Route::post('set-pin',[PinPolicyController::class,'storePin'])->name('pin_policy.store_pin');
