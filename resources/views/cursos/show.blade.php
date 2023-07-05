@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)
    
@section('content')
    <h1>Bienvenido al curso de {{$curso->name}} </h1> 
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Categoria: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection