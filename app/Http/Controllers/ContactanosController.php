<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactanosMilable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //Método para mostrar el formulario
    public function index(){
        return view('contactanos.index');
    }

    //Procesar el formulario y enviar el correo electronico 
    public function store(Request $request){
    //Validación
    $request->validate([
        'name' => 'required',
        'correo' => 'required|email',
        'mensaje' => 'required',
    ]);
    //Instancia de la clase ContactanosMilable
    //Pasar información al contructor
    $correo = new ContactanosMilable($request->all());
    //Llamar a la clase Mail, acceder al metodo to, por ultimo se pasa una nueva clase llamada Send
    //A la clase send se le pasa el onjeto $correo
    Mail::to('glocoral21@gmail.com')->send($correo);
    //-> with(Nombre de variable de sesión, la información)   - mensaje de sesión
    return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
