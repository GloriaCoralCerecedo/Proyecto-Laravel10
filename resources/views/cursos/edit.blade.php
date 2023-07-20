@extends('layouts.plantilla')

@section('title', 'Cursos Edit')
    
@section('content')
    <h1>En esta página podrás editar un curso</h1>

    {{-- Solo entiende dos métodos get y post --}}
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- Token --}}
        {{-- No solo crea el token, si no que lleva un registro de los token que se general, 
            solo se maneja en la ruta especifica que definimos --}}
        {{-- Si se manda el token de otra ruta o una ruta distinta pero propia va a salir el token caducado--}}
        {{-- Los Token tienen un tiempo de vida, despues de cierta cantidad de horas, 
            laravel elimina los registros del token (Token caducado)--}}
        @csrf

        {{-- Directiva del método PUT --}}
        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea type="text" name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>

        @error('description')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>

        @error('category')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
