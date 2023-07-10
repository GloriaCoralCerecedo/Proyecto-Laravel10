@extends('layouts.plantilla')  <!--directiva de blade-->

@section('title', 'Home')   <!--solo una cadena-->

@section('content')  <!--sección más grande-->
    <h1>Bienvenido a la página principal</h1>
    <a href="{{route('cursos.index')}}">Ir a Cursos</a>
@endsection()