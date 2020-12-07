<div class="top-nav">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav cl-effect-14">
                <li><a href="{{ route('inicio') }}" class="active">Inicio</a></li>
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="about.html">Información</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>{{ Auth::user()->name }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('personas.index') }}">Perfil</a></li>
                        <li><a href="{{ route('direcciones.index') }}">Direcciones</a></li>
                        <li><a href="{{ route('productos.showCart') }}">Carrito de compra</a></li>
                        <li><a href="{{ route('pedidos.index') }}">Pedidos</a></li>
                        <li><a href="{{ url('dashboard') }}">Dashboard</a></li>

                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</div>
