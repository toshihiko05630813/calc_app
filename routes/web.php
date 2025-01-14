<?php

use App\Http\Controllers\CalcController;
use Brick\Math\Internal\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcs/{value1}/{operator}/{value2}', [CalcController::class, 'result']);
