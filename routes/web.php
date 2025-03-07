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


//                 PDO::MYSQL_ATTR_SSL_CA => env('DB_SSL_PEM'),
//             'host' => env('DB_HOST', 'localhost'),
//             'port' => env('DB_PORT', '1433'),
//             'database' => env('DB_DATABASE', 'laravel'),
//             'username' => env('DB_USERNAME', 'root'),
//             'password' => env('DB_PASSWORD', ''),
//             'charset' => env('DB_CHARSET', 'utf8'),
//             'prefix' => '',
//             'prefix_indexes' => true,
//             'encrypt' => true,
//             'trust_server_certificate' => true,
//             'options' => [
//                 PDO::SQLSRV_ATTR_ENCODING => PDO::SQLSRV_ENCODING_UTF8,
//             ],
//         ],
//     ],
//
//     'migrations' => 'migrations',
//
//     'redis' => [
//         'client' => 'phpredis',
//         'default' => [
//             'host' => env('REDIS_HOST', '
//             'password' => env('REDIS_PASSWORD', null),
//             'port' => env('REDIS_PORT', 6379),
//             'database' => 0,
//         ],
//         'cache' => [
//             'host' => env('REDIS_HOST', '
//             'password' => env('REDIS_PASSWORD', null),
//             'port' => env('REDIS_PORT', 6379),
//             'database' => 1,
//         ],
//     ],
//
//     'default' => env('DB_CONNECTION', 'mysql'),
//     'fetch' => PDO::FETCH_CLASS,