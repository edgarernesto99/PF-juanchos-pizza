@extends('Layouts.Productos')
@section('menu-productos')
    <div class="menu">
        <div class="container">
            <div class="menu-tag">
                @if (isset($producto))
                    <h3 class="title-form">EDITAR PRODUCTO</h3>
                @else
                    <h3 class="title-form">AGREGAR PRODUCTO</h3>
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

            @if (isset($producto))
                <form role="form" action="{{ route('productos.update', [$producto]) }}" method="POST"
                    enctype="multipart/form-data" class="formulario-producto">
                    @method('patch')
                @else
                    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data"
                        class="formulario-producto">
            @endif
            @csrf
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? ($producto->nombre ?? '') }}">
            </div>

            <div class="campo">
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion"
                    value="{{ old('descripcion') ?? ($producto->descripcion ?? '') }}">
            </div>

            <div class="campo">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" min="0"
                    value="{{ old('precio') ?? ($producto->precio ?? '0.00') }}" step="any">
            </div>

            <div class="campo">
                <label for="tipo">Tipo:</label><br>
                <select name="tipo" id="tipo" value="Pizza">
                    @if ((old('tipo') ?? ($producto->tipo ?? ' ')) == 'Complemento')
                        <option value="Pizza">Pizza</option>
                        <option value="Complemento"
                            selected="{{ (old('tipo') ?? ($producto->tipo ?? '0.00')) == 'Complemento' }}">Complemento
                        </option>
                    @else
                        <option value="Pizza" selected>Pizza</option>
                        <option value="Complemento">Complemento</option>
                    @endif
                </select><br>
            </div>

            <div class="campo">
                <label for="tamanio">Tamaño:</label><br>
                <input type="text" name="tamanio" id="nombre" value="{{ old('tamanio') ?? ($producto->tamanio ?? '') }}"
                    step="0.01"><br>
            </div>
            <div class="campo">
                <label for="imagen">Imagen:</label><br>
                <input type="file" name="file-image" id="imagen" accept="image/*"><br>

                @if (isset($producto) and old('image') == null)
                    <img width="100px" src="{{ Storage::url($producto->imagen) }}" alt=""><br>
                @endif
            </div>

            <div class="enviar">
                <input type="submit" value="Enviar" class="btn btn-primary boton">
            </div>

            </form>
        </div>
    </div>
@endsection
