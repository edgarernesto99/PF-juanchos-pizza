@extends('Layouts.Pedidos')
@section('menu-pedidos')
<div class="menu">
    <div class="container">
        <div class="menu-tag">
            <h3 class="title">COMPLETAR PEDIDO</h3>
        </div>
        <div class="load_more">
            <div>
                <table class= "table" border="2">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Tamño</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion}}</td>
                            <td>{{ $producto->tamanio}}</td>
                            <td>{{ $producto->precio}}</td>
                            <td>{{ $producto->pivot->cantidad }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <form action="{{ route('pedidos.store') }}" method="POST" class="formulario-producto">
                @csrf
                <div class="campo">
                    <label for="direccion_id">Seleccione una dirección:</label><br>
                    <select name="direccion_id" id="tipo" value="Pizza">
                        @foreach ($direcciones as $direccion)
                            <option value="{{ $direccion->id }}">{{ $direccion->calle_numero }}</option>
                        @endforeach
                    </select><br>
                </div>
            <input type="hidden" name="productos" value="{{$productos}}">

                @if ($direcciones->isEmpty())
                    <div class="alert alert-danger">
                        Por favor, intrduzca una dirección
                    </div>
                    <div class="flex-left boton">
                        <a href="{{ route('direcciones.create') }}" class="boton btn btn-primary">Agregar dirección</a>
                    </div>
                @else
                    <div class="enviar">
                        <input type="submit" value="Realizar pedido" class="btn btn-primary boton">
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
