@extends('layouts.plantilla')

@section('title', 'Cursos Edit')
    
@section('content')
    <h1>En esta página podrás editar un curso</h1>

    {{-- Solo entiende dos métodos get y post --}}
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- Token --}}
        @csrf

        {{-- Directiva del método PUT --}}
        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <br>
        <label>
            Descripción:
            <br>
            <textarea type="text" name="description" rows="5">{{$curso->description}}</textarea>
        </label>

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{$curso->category}}">
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
