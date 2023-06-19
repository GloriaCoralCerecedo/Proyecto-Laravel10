<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //El modelo Curso administra la tabla users
    //Sin utilizar la conveción
    protected $table = "users";
}
