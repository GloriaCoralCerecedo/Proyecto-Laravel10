@extends('layouts.plantilla')  <!--directiva de blade-->

@section('title', 'Contactanos')   <!--solo una cadena-->

@section('content')  <!--sección más grande-->
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">

        @csrf

        <label>
            Nombre
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error('name')
        <p><strong>{{$message}}</strong></p>
            
        @enderror

        <label>
            Correo
            <br>
            <input type="text" name="correo">
        </label>
        <br>

        @error('correo')
        <p><strong>{{$message}}</strong></p>

        @enderror

        <label>
            Mensaje
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>

        @error('mensaje')
        <p><strong>{{$message}}</strong></p>

        @enderror

        <button type="submit">Enviar mensaje</button>

    </form>

    {{-- Si existe la variable de sesión llamada info --}}
    @if (session('info')))
        {{-- Imprime una alerta --}}
        <script>
            alert("{{session('info')}}");
        </script>
        {{-- De lo contrario lo ignora --}}
    @endif
@endsection()