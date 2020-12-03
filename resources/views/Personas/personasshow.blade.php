@extends('Layouts.Personas')
@section('menu-personas')
<div class="show-people">
    <div class="col-md-4">
        <a href="{{route('personas.edit',[$persona->id])}}" class="btn btn-primary btn-block">Editar Persona</a>
    </div>
    <div class="col-md-4">
        <a href="{{route('personas.index')}}" class="btn btn-success btn-block">Listado de Personas</a>
    </div>
    <div class="col-md-4">
        <form action="{{ route('personas.destroy', [$persona]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-block btn-warning">Eliminar</button>
        </form>
    </div>

    <div class="show-people">
        <table class= "table" border="2">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
            </tr>
            <tr>
                <td>
                    <a href="{{route('personas.show',[$persona->id])}}"><h4>{{$persona->nombre}}</h4></a>
                </td>
                <td>{{$persona->apellidos}}</td>
                <td>{{$persona->correo}}</td>
                <td>{{$persona->telefono}}</td>
            </tr>
        </table>

    </div>
</div>
@endsection
