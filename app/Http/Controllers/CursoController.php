<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Página principal (Conveciones)
    public function index(){

        // Actualmente en la variable -> $curso, tengo todos los registros de los cursos
        // Para pocos registros
        //$cursos = Curso::all();
        //Mostrar registros páginados
        $cursos = Curso::orderby('id', 'desc')->paginate();

        // return $curso;

        return view('cursos.index', compact('cursos'));
    }
    //Página que muestra un formulario, para crear un curso y demás (Conveciones)
    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){

        //Flujo del programa
        // Verifican que los campos tengan algún contenido
        // Si alguna de esas reglas de validación, no cumple, retorna al formulario
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        //return $request->all();

        //Se crea una nueva instancia del modelo curso
        $curso = new Curso();

        //Crea el objeto
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        //Lo guarda en la base de datos
        $curso->save();

        //Redireccionar al curso creado
        return redirect()->route('cursos.show', $curso);

        //return $curso;
    }
    //Página encargada de mostrar un curso en particular (Conveciones)
    //Llamar a la vista: 'cursos.show'
    //Pasarle el la variable a la vista: ['curso' => $curso]
    //compact('curso') = ['curso' => $curso]
    public function show(Curso $curso){

        //Recuperar un registro por si id
        //$curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        //$curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        //return $request->all();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        //Actualiza a nivel de ase de datos
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}