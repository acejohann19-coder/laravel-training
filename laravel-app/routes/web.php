<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/day2', function () {
	return 'Day 2 routing works!';
});

Route::get('/users', function () {
    return 'Users page';
});
