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
            <ul class="nav navbar-nav navbar-center cl-effect-14">
                <li><a href="inicio" class="active">Inicio</a></li>
                <li><a href="menu">Menu</a></li>
                <li><a href="about.html">Información</a></li>
                <li><a href="gallery.html">Galeria</a></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="dropdown">
            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown" aria-expanded="false">
                <span class="avatar"></span>
                <span class="ml-2 d-none d-lg-block">
                    <span class="text-default">{{ Auth::user()->name }}</span>
                    <small class="text-muted d-block mt-1">Administrator</small>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end"
                style="position: absolute; transform: translate3d(136px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-user"></i> Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                </a>
            </div>
        </div>
    </nav>
</div>
