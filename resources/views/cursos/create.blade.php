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
            {{-- Mantiene lo que el usuario escribio --}}
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        {{-- Directiva del blade --}}
        {{-- verifica si ha habido  algún error de validación en el campo name--}}
        {{-- Si ha habido imprime un mensaje de error--}}
        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
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
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
