<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Página principal (Conveciones)
    public function index(){
        return view('cursos.index');
    }
    //Página que muestra un formulario, para crear un curso y demás (Conveciones)
    public function create(){
        return view('cursos.create');
    }
    //Página encargada de mostrar un curso en particular (Conveciones)
    //Llamar a la vista: 'cursos.show'
    //Pasarle el la variable a la vista: ['curso' => $curso]
    //compact('curso') = ['curso' => $curso]
    public function show($curso){
        return view('cursos.show', compact('curso'));
    }
}