<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

// Basic page routes
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pcxp', function () {
    return view('pcxp');
})->name('pcxp');

// User authentication & account routes
Route::get('/login', function () {
    return view('usuario');
})->name('usuario');

Route::get('/cadastro', function () {
    return view('cadastrousr');
})->name('cadastrousr');

Route::get('/minha-conta', [UserController::class, 'edit'])->name('menudousuario');

// User CRUD operations
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
Route::put('/users/{id}/password', [UserController::class, 'updatePassword'])->name('user.update-password');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// Other product routes
Route::get('/produtos', function () {
    return view('produtos');
})->name('produtos');

Route::get('/windows-xp', function () {
    return view('windows-xp');
})->name('windows-xp');

Route::get('/windows-vista', function () {
    return view('windows-vista');
})->name('windows-vista');

Route::get('/acessorios', function () {
    return view('acessorios');
})->name('acessorios');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');


Route::get('/meuusuario', function () {
    return view('crud');
})->name('crud');

Route::get('/usuarios/{id}', function ($id) {
    $usuario = User::find($id);
    return view('usuarios.show', compact('usuario'));
});
