<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return ('Hi Guys!');
});

Route::get('/greet', [GreetController::class, 'Home']);