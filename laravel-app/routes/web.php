<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/day2', function () {
	return 'Day 2 routing works!';
});



Route::get('/hello', function () {
	return 'hello from day 3';
});


Route::get('/users', [UserController::class, 'index']);
