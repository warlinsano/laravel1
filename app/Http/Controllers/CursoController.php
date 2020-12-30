<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Curso;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreCurso;


class CursoController extends Controller
{
    //GET
    public function index(){
        // return "Bienvenido a los cursos";
        //el punto indica que esta en una carpeta

        // $cursos = curso::all();
        $cursos = curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    //GET
    public function create(){
        // return "create curso";
        return view('cursos.create');
    }
 
    //POST
    // public function store(Request $request){  // sin usar FormRequest
    public function store(StoreCurso $request){

        // $request->validate([
        //     'nameCouse'=>'required|max:10',
        //     'description'=>'required|min:5',
        // ]);

        // $curso = new curso();
        // $curso->name= $request->nameCouse;
        // $curso->description=$request->description;
        // $curso->save();

        // return $request->all();

        // $curso = curso::create($request->all());
        $curso = curso::create([
            'name' => $request->nameCouse,
            'description' => $request->description
        ]);

        //falta validar
        // return Redirect()->route('cursos.show', $curso);
         return Redirect()->route('cursos.show', $curso->id);
    }
    
    //GET
    public function show(curso $curso){
        // return "welcome a curos: $curso";
        // return view('cursos.show',['curso'=>$curso]);

        // $curso = curso::all();
        // $curso = curso::where('categoria','Diseño web')->get();
        // $curso = curso::where('categoria','Diseño web')->orderBy('id','desc')->get();
        // $curso = curso::select('id','name')->get();
        // $curso = curso::select('id','name')->orderBy('name','asc')->get();
        // $curso = curso::select('id','name as Nombre')->orderBy('name','asc')->get();
        // $curso = curso::select('id','name as Nombre')->orderBy('name','asc')->where('categoria','Diseño web')->take(10)->get();
        
        // $curso = curso::where('id',5)->first(); 
         //$Curso = Curso::find(2);
        //  $curso = curso::where('name','Accusamus nobis et quidem delectus quam.')->first();
        //$curso = curso::where('id','>','45')->get();
        //$curso = curso::where('name','like','% warlin %')->get();
        
        // $curso = Curso::find($id);
        return view('cursos.show',compact('curso'));
    }

    //GET
    public function edit(curso $curso){
        // $curso = Curso::find($id);
        // return  $curso;
        return view('cursos.edit',compact('curso'));

    }

    //PUT
     public function update(Request $request, curso $curso){
           
        // $curso->update($request->all()); //asignacion maxiva
            $request->validate([
                'nameCouse'=>'required|max:10',
                'description'=>'required|min:5',
            ]);
                // return  $request;
            $curso->name = $request->nameCouse;
            $curso->description = $request->description;
            $curso->save();
            return Redirect()->route('cursos.show', $curso);
    }
}
