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

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}"  >
                                    <i class="fa fa-user-circle" aria-hidden="true" ></i>  {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>

                        </ul>

                    @else

                            <a href="{{route('login')}}" > <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>


                        @if (Route::has('register'))
                                <a href="{{route('register')}}" ><i class="fa fa-user-circle-o" aria-hidden="true" ></i> Sing up</a>


                        @endif
                    @endauth
                </div>
            @endif
        </ul>
    </div>
</nav>