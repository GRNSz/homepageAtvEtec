<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pcxp', function () {
    return view('pcxp');
}) ->name('pcxp');

Route::get('/usuario', function () {
    return view('usuario');
}) ->name('usuario');