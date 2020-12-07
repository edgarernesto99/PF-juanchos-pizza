@extends('Layouts.tema')
@section('content')
    <div class="menu">
        <div class="container">
            <div class="menu-tag">
                <h3 class="title">Menú</h3>
            </div>
            <div class="load_more">
                <ul id="myList">
                    <li>
                        <div class="l_g">
                            <div class="l_g_r">
                                <div class="col-md-6 menu-grids">
                                    <h2 class="title">PIZZAS</h2>
                                    @foreach ($productos as $producto)
                                        @if ($producto->tipo == 'Pizza')
                                            <div class="menu-text">
                                                <div class="menu-text-left">
                                                    <a href="{{ route('productos.show', [$producto->id]) }}">
                                                        <h4>{{ $producto->nombre }}</h4>
                                                    </a>
                                                    <h6>{{ $producto->descripcion }}</h6>
                                                    <h6>Tamaño->{{ $producto->tamanio }}</h6>
                                                </div>
                                                <div class="menu-text-midle">
                                                    <span class="line"> </span>
                                                </div>
                                                <div class="menu-text-right">
                                                    <h4>$ {{ $producto->precio }}</h4>
                                                </div>
                                                <div class="clearfix"> </div>
                                                <div class="text-align-center ">
                                                    <img width="100%" src="{{ Storage::url($producto->imagen) }}" alt=" ">
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                                <div class="col-md-6 menu-grids">
                                    <h2 class="title">COMPLEMENTOS</h2>
                                    @foreach ($productos as $producto)
                                        @if ($producto->tipo == 'Complemento')
                                            <div class="menu-text">
                                                <div class="menu-text-left">
                                                    <a href="{{ route('productos.show', [$producto->id]) }}">
                                                        <h4>{{ $producto->nombre }}</h4>
                                                    </a>
                                                    <h6>{{ $producto->descripcion }}</h6>
                                                    <h6>Tamaño->{{ $producto->tamanio }}</h6>
                                                </div>
                                                <div class="menu-text-midle">
                                                    <span class="line"> </span>
                                                </div>
                                                <div class="menu-text-right">
                                                    <h4>$ {{ $producto->precio }}</h4>
                                                </div>
                                                <div class="clearfix"> </div>
                                                <img width="100%" src="{{ Storage::url($producto->imagen) }}" alt=" ">

                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </li>
            </div>
            @if (\Auth::user()->tipo == 'administrador')
                <div class="flex-left boton">
                    <a href="productos/create" class="boton btn btn-primary">Crear Producto</a>
                </div>
            @endif
        </div>
    </div>
@endsection
