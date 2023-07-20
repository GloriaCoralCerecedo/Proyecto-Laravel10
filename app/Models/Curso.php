<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Cuando intente agregar un registro por asignación masiva, solo se cree el registro con los campos especificados.
    //Fillable, coloca los campos que debemos permitir que se guarden e ignorar los campos protegidos
    // protected $fillable = ['name', 'description', 'category'];

    //Hace lo msimo que fillable, colocamos los campos protegidos e ignoramos los campos permitidos
    // Array vacio, porque no tenemos campo protegido
    protected $guarded = [];

    //El modelo Curso administra la tabla users
    //Sin utilizar la conveción
    //protected $table = "users";
}
