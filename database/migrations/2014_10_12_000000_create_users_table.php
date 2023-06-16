<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Se crea la tabla user con todas las columnas
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned Increment
            $table->string('name'); //varchar (Maximo 255 caracteres) Más de 255 carácteres es de tipo -> text
            $table->string('email')->unique(); // Propiedad unique, protege a nivel de datos de datos, y debe ser único
            $table->timestamp('email_verified_at')->nullable();//La propiedad timestamp se usa par almacenar fechas, se usa para la verificación de correos eléctronicos. 
            //El usuario se registra y si vertifica el correo se verifica la fecha en que se verifico el correo 
            //nullable -> A la hora de realizar el registro este campo quedara vacio  y si no le pasamos el campo nullable nos daria un error.
            $table->string('password'); // Contraseñas
            $table->rememberToken(); //Crea una columna de tipo varchar de tamaño 100, se almacena un token, cada vez que el usuario inicie sesión
            //Y marque la opción de "Mantener la sesión iniciada."
            $table->timestamps(); //Crea dos columnas de su mismo tipo. Cada vez que introduzcamos un nuevo registro
            //create_at -> fecha y hora en la que se creo el registro
            //updated-at -> Si actualizamos un registro, fecha y hora de ese registro.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //dropIfExists -> Elimina la tabla user
    {
        Schema::dropIfExists('users');
    }
};
