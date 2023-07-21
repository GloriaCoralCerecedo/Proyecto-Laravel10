<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Contracts\Pagination\CursorPaginator;

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

//Controlador HomeController
Route::get('/', HomeController::class)->name('home');

//Grupo de  rutas
//fuction - > función anónima
// ->name('') - Nombre de la ruta
// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/{curso}', 'show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
Route::resource('cursos', CursoController::class);

//view - esta forma de definir las rutas, solo debemos utilizar cuando queremos mostrar contenido estático.
//Porque solo queremos mostrar una vista
//nosotros -> nombre de la url, nombre de la vista 
Route::view('nosotros', 'nosotros')->name('nosotros');


// //? - variable opcional, = null - variable de la función
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoría $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
// });

