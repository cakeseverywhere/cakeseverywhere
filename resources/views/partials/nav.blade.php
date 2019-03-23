<nav class="navbar navbar-dark navbar-expand-lg bg-primary navbar-red">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/icons/logo.png')}}"  width="60" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{request()->routeIs('inicio') ? 'active': ''}}">
                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{request()->routeIs('pasteles') ? 'active': ''}}">
                <a class="nav-link" href="{{route('pasteles')}}">Pasteles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Galeria</a>
            </li>
            <li class="nav-item {{request()->routeIs('nosotros') ? 'active': ''}}">
                <a class="nav-link " href="{{route('nosotros')}}">Nosotros</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item" style="padding-right: 5px">
                <a href="#" data-toggle="modal" data-target="#modal-sign"><i class="fa fa-user-circle-o" aria-hidden="true" ></i> Sign Up </a>
            </li>
            <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#modal-login"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
            </li>
        </ul>
    </div>
</nav>