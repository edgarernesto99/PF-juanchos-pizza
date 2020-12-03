@extends('Layouts.Personas')
@section('menu-personas')
    <div>
        @if (isset($persona))
            <h3 class="title-form">EDITAR PERSONA</h3>
        @else
            <h3 class="title-form">AGREGAR PERSONA</h3>
        @endif
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="contact-form form-group">
            @if(isset($persona))
                <form action="{{ route('personas.update', [$persona]) }}" method="POST">
                @method('patch')
            @else
                <form action="{{ route('personas.store') }}" method="POST" >
            @endif
            @csrf
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" class= "form-control" id="nombre" value="{{ old('nombre') ?? $persona->nombre ?? '' }}"><br>

            <label for="apellidos">Apellidos:</label><br>
            <input type="text" name="apellidos" class= "form-control" id="apellidos" value="{{ old('apellidos') ?? $persona->apellidos ?? '' }}"><br>

            <label for="telefono">Telefono:</label><br>
            <input type="tel" name="telefono"  class= "form-control" id="telefono" value="{{ old('telefono') ?? $persona->telefono ?? '' }}"><br>

            <input type="submit" value="Enviar">
        </form>
    </div>
    @endsection
