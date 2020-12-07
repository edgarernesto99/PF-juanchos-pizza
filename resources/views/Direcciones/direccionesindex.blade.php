@extends('Layouts.tema')
@section('content')
<div class="menu">
    <div class="container">
        <div class="menu-tag">
            <h3 class="title">Direcciones</h3>
        </div>
        <div class="load_more">
            <div>
                <table class= "table" border="2">
                    <tr>
                        <th>Calle y número</th>
                        <th>Colonia</th>
                        <th>Ciudad</th>
                        <th>Referencias</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    @foreach ($direcciones as $direccion)
                        <tr>
                            <td>{{ $direccion->calle_numero }}</td>
                            <td>{{ $direccion->colonia}}</td>
                            <td>{{ $direccion->ciudad}}</td>
                            <td>{{ $direccion->referencias}}</td>

                            <td><a href="{{route('direcciones.edit', [$direccion])}}" class="btn btn-primary active">Editar direccion</a></td>
                            <td>
                                <div class="col-md-4">
                                    <form action="{{ route('direcciones.destroy', [$direccion]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="flex-left boton">
                <a href="{{ route('direcciones.create') }}" class="boton btn btn-primary">Agregar dirección</a>
            </div>
        </div>
    </div>
</div>
@endsection
