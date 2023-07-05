@extends('layouts.plantilla')

@section('title', 'Cursos Create')
    
@section('content')
    <h1>En esta página podrás crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        {{-- Token --}}
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Descripción:
            <br>
            <textarea type="text" name="description" rows="5"></textarea>
        </label>

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
