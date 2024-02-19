<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "test";
});

Route::get('cursos', function () {
    return "welcomeewerwe";
});

Route::get('cursos/{curso}', function ($curso) {
    return "bienvenido al curso: $curso";
});

Route::get('users/create', function () {
    return "Creacion de cursos";
});
