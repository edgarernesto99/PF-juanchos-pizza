@extends('Layouts.Productos')
@section('menu-productos')
<div class="menu">
    <div class="menu-tag">
        <h3 class="title">Buena elección!!</h3>
    </div>
    <!--Aqui va una sentencia para ver si mostrar o no las opciones de eliminar y editar registro a un usuario(lo haremos cuando tengamos el login)-->
    @if (!Auth::guest() && Auth::user()->tipo == 'administrador')
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
    @endif
    <div class="producto-description container">
        <div class="col-md-6">
            <img class="img-producto" src="{{Storage::url($producto->imagen)}}" alt=" ">
        </div>
        <div class="col-md-6 contenido-producto">
            <h2>{{$producto->nombre}}</h2>
            <p><span>Descripción: </span>{{$producto->descripcion}}</p>
            <p><span>Tamaño: </span> {{$producto->tamanio}}</p>
            <p><span>Precio: </span> $ {{$producto->precio}}</p>
            <p class="ordenar-producto">Ordena sin costo al número <span>33 3792 9225</span></p>
            @if (!Auth::guest())
                <form action="{{ route('productos.addToCart', [$producto]) }}" method="POST" role="form" class="col-md-6">
                    @csrf

                    <div class="form-group">
                        <br><label for="number" class="col-md-6">Cantidad: </label>
                        <input type="number" min="1" max="9" step="1" class="form-control" value="1" name="cantidad">
                    </div>

                    <input type="submit" value="Añadir al pedido actual" class="btn btn-primary btn-block">
                </form>
            @endif
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
