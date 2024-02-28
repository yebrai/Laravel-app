<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {

    Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

    Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

    Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

    //normal
    Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

    //usando instancia Curso en controller.
    Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

    Route::put('cursos/{curso}', [CursoController::class, 'update'] )->name('cursos.update');

});

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso: $curso, de la categoría $categoria";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }
// });
