@extends('Layouts.tema')
@section('content')
<div class="menu">
    <div class="container">
        <div class="menu-tag">
            <h3 class="title">Personas</h3>
        </div>
        <div class="load_more">
            <div>
                <table class= "table" border="2">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                    </tr>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>
                                <a href="{{route('personas.show',[$persona->id])}}"><h4>{{$persona->nombre}}</h4></a>
                            </td>
                            <td>{{$persona->apellidos}}</td>
                            <td>{{$persona->telefono}}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
