<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Curso;


class CursoAPIController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function show(Curso $curso)
    {
        return $curso;
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());
        return response()->json($curso, 200);
    }

    public function delete(Curso $curso)
    {
        //     Curso::find($id)->delete();
        $curso->delete();
        return response()->json(null, 204);
    }
}