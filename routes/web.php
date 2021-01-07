<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\contactanosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // // Route::get('/', function () {
// // //     return view('welcome');
// // // });

Route::get('/',HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

//cambiar nombre de ruta  existentes y parametros
// Route::resource('Asignaturas', CursoController::class)->parameters(['Asignaturas'=>'curso'])->names('cursos');
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos',[contactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos',[contactanosController::class, 'store'])->name('contactanos.store');

//prueba de los filtros o middleware de age
//http://localhost/laravel1/public/prueba?age=15
Route::get('prueba', function () {
    return "Has entrado a esta ructa correctamenete...";
})->middleware('age');

// Route::get('prueba', function () {
//     return "Has entrado a esta ructa correctamenete...";
// })->middleware(['auth:santum','age']);

Route::get('NoAutorizado', function () {
    return "NO AUTORIZADO";
});


// // // Route::get('cursos', function () {
// // //     return "Bienvenido a los cursos";
// // // });
// Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');

// // // Route::get('cursos/create', function () {
// // //     return "create curso";
// // // });
// Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');

// // // Route::get('cursos/{curso}', function ($curso) {
// // //     return "welcome a curos: $curso";
// // // });
// Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');

// // // Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
// // //     if($categoria){
// // //         return "welcome a curos: $curso, de la categoria  $categoria";
// // //     }else{
// // //         return "welcome a curos: $curso";
// // //     }
// // // });

// Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');

