<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pcxp', function () {
    return view('pcxp');
}) ->name('pcxp');

Route::get('/menudousuario', function () {
    return view('usuario');
}) ->name('usuario');

// Route::post('/store-user', 
//     [UserRequest::class, 'store']) ->name('user.store');

    Route::get('/usuario', [UserController::class, 'create'])->name('user.create');
    Route::post('/usuario', [UserController::class, 'store'])->name('user.store');    

// Route::get('/users', 
//     [UserController::class, 'index']) ->name('user.index');   

Route::resource('users', UserController::class);

// Route::get('/show-user/{user}', 
//     [UserController::class, 'show']) ->name('user.show');   

// Route::get('/edit-user/{user}',
//     [UserController::class, 'edit']) ->name('user.edit');

// Route::get('/update-user/{user}',
//     [UserController::class, 'update']) ->name('user.update');

// Route::get('/delete-user/{user}',
//     [UserController::class, 'destroy']) ->name('user.destroy');

// Route::get('/show', function (){
//     return view('/users/show');
// })->name('show');

Route::get('/cadastro', function () {
    return view('cadastrousr');
})->name('cadastrousr');