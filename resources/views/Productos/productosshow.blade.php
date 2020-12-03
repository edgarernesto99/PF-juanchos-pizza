@extends('Layouts.Productos')
@section('menu-productos')
<div class="menu">
    <div class="menu-tag">
        <h3 class="title">Buena elección!!</h3>
    </div>
    <!--Aqui va una sentencia para ver si mostrar o no las opciones de eliminar y editar registro a un usuario(lo haremos cuando tengamos el login)-->
    <div class="col-md-4">
        <a href="{{route('productos.edit',[$producto->id])}}" class="btn btn-primary btn-block">Editar Producto</a>
    </div>
    <div class="col-md-4">
        <a href="{{route('productos.index')}}" class="btn btn-success btn-block">Listado de Producto</a>
    </div>
    <div class="col-md-4">
        <form action="{{ route('productos.destroy', [$producto]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-block btn-warning">Eliminar</button>
        </form>
    </div>
    <div class="producto-description">
        <div class="col-md-6">
            <img class="img-producto" src="{{Storage::url($producto->imagen)}}" alt=" ">
        </div>
        <div class="col-md-6 contenido-producto">
            <h2>{{$producto->nombre}}</h2>
            <p><span>Descripción: </span>{{$producto->descripcion}}</p>
            <p><span>Tamaño: </span> {{$producto->tamanio}}</p>
            <p><span>Precio: </span> $ {{$producto->precio}}</p>
            <p class="ordenar-producto">Ordena sin costo al número <span>33 3792 9225</span></p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
