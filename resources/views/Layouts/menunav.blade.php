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
                <li><a href="{{ route('nosotros') }}">Información</a></li>
            </ul>

            @if (\Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> 
                            <strong>{{ Auth::user()->name }}</strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            @can('administrador')
                            <li><a href="{{ route('personas.index') }}">Personas registradas</a></li>
                            @else
                                <li><a href="{{ route('personas.index') }}">Perfil</a></li>
                            @endcan
                            <li><a href="{{ route('profile.show') }}">Cuenta</a></li>
                            <li><a href="{{ route('direcciones.index') }}">Direcciones</a></li>
                            <li><a href="{{ route('productos.showCart') }}">Carrito de compra</a></li>
                            @can('administrador')
                                <li><a href="{{ route('pedidos.index') }}">Histoial de pedidos</a></li>
                            @else
                                <li><a href="{{ route('pedidos.index') }}">Pedidos</a></li>
                            @endcan
                            <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li>
                                <form class="text-center" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                        Cerrar sesión
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> 
                            <strong></strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div>

    </nav>
</div>
