<div class="top-nav">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav cl-effect-14">
                <li><a href="inicio" class="active">Inicio</a></li>
                <li><a href="menu">Menu</a></li>
                <li><a href="about.html">Información</a></li>
            </ul>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </button>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('personas') }}">Perfil</a></li>
                    <li><a href="#">Direcciones</a></li>
                    <li><a href="#">Pedidos</a></li>
                    <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        </div>
    </nav>
</div>
