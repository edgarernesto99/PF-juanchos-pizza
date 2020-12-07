@extends('Layouts.Pedidos')
@section('menu-pedidos')
<div class="menu">
    <div class="container">
        <div class="menu-tag">
            <h3 class="title">Historial de pedidos</h3>
        </div>
        <div class="load_more">
            <div>
                <table class= "table" border="2">
                    <tr>
                        <th>ID</th>
                        <th>Productos</th>
                        <th>Direccion</th>
                        <th>Total</th>
                    </tr>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>
                                @foreach ($pedido->productos as $producto)
                                    {{ $producto->nombre }}<br>
                                @endforeach
                            </td>
                            <td>{{ $pedido->direccion->calle_numero}}</td>
                            <td>{{ $pedido->total}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
