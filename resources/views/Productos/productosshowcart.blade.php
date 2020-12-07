@extends('Layouts.tema')
@section('content')
<div class="menu">
    <div class="container">
        <div class="menu-tag">
            <h3 class="title">Carrito de compras</h3>
        </div>
        <div class="load_more">
            <div>
                <table class= "table" border="2">
                    <tr>
                        <th>Descripción del producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Eliminar</th>
                    </tr>
                    @foreach ($contenido as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->precio}}</td>
                            <td>{{ $producto->pivot->cantidad}}</td>
                            <td>
                                <div class="col-md-4">
                                    <form action="{{ route('productos.removeFromCart', [$producto]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Quitar producto</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            @if (!$contenido->isEmpty())
                <div class="flex-left boton">
                    <a href="{{ route('pedidos.create') }}" class="boton btn btn-primary">Completar pedido</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
