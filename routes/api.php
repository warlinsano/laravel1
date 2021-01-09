<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoAPIController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Use App\Models\Curso;
Route::get('cursos',[CursoAPIController::class, 'index']);
Route::get('cursos/{curso}',[CursoAPIController::class, 'show']);
Route::post('cursos',[CursoAPIController::class, 'store']);
Route::put('cursos/{curso}',[CursoAPIController::class, 'update']);
Route::delete('cursos/{curso}',[CursoAPIController::class, 'delete']);

// Route::get('cursos', function() {
//     // If the Content-Type and Accept headers are set to 'application/json',
//     // this will return a JSON structure. This will be cleaned up later.
//     return Curso::all();
// });

// Route::get('cursos/{id}', function($id) {
//     return Curso::find($id);
// });

// Route::post('cursos', function(Request $request) {
//     return Curso::create($request->all);
// });

// Route::put('cursos/{id}', function(Request $request, $id) {
//     $article = Curso::findOrFail($id);
//     $article->update($request->all());
//     return $article;
// });

// Route::delete('cursos/{id}', function($id) {
//     Curso::find($id)->delete();
//     return 204;
// });