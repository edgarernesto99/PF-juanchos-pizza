@extends('Layouts.tema')
@section('content')
<div class="container">
    <div>
        @if (isset($direccion))
            <h3 class="title-form">EDITAR DIRECCION</h3>
        @else
            <h3 class="title-form">AGREGAR DIRECCION</h3>
        @endif
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="contact-form form-group">
        @if (isset($direccion))
            <form action="{{ route('direcciones.update', [$direccion->id]) }}" method="POST" role="form">
                @method('patch')
            @else
                <form action="{{ route('direcciones.store') }}" method="POST" role="form">
        @endif
        @csrf
        <div class="form-group">
            <label for="calle_numero">Calle y número:</label>
            <input type="text" name="calle_numero" class="form-control" id="calle_numero"
                value="{{ old('calle_numero') ?? ($direccion->calle_numero ?? '') }}">
        </div>

        <div class="form-group">
            <label for="colonia">Colonia:</label>
            <input type="text" name="colonia" class="form-control" id="colonia"
                value="{{ old('colonia') ?? ($direccion->colonia ?? '') }}">
        </div>

        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" id="ciudad"
                value="{{ old('ciudad') ?? ($direccion->ciudad ?? '') }}">
        </div>

        <div class="form-group">
            <label for="referencias">Referencias (color de fachada, lugares de referencia, etc):</label>
            <textarea type="text" name="referencias" class="form-control" id="referencias">{{ old('referencias') ?? ($direccion->referencias ?? '') }}</textarea>
        </div>

        <input type="submit" class="btn btn-default" value="Enviar">
        </form>
    </div>
</div>
@endsection
