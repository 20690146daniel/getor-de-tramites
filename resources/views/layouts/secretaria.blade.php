

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route ('home')}}">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tramites') }}">Trámites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('archivos')}}">Archivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('perfil')}}">Perfil</a>
                </li>
                </ul>
            
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            </nav>
    

        @yield('content')



</div>
