<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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

Route::get('/store-user', 
    [UserController::class, 'store']) ->name('user.store');

// Route::get('/show-user/{user}', 
//     [UserController::class, 'show']) ->name('user.show');   

Route::get('/edit-user/{user}',
    [UserController::class, 'edit']) ->name('user.edit');

Route::get('/update-user/{user}',
    [UserController::class, 'update']) ->name('user.update');

Route::get('/delete-user/{user}',
    [UserController::class, 'destroy']) ->name('user.destroy');

Route::get('/show', function (){
    return view('/users/show');
})->name('show');
    