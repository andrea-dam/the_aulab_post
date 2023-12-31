<nav class="navbar navbar-expand-lg bg-dark navbar-dark border-bottom sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">The Aulab Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                @endguest
                @if (Auth::user() && Auth::user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard Amministratore</a>
                </li>
                @elseif (Auth::user() && Auth::user()->is_writer)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.dashboard')}}">Crea Articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.dashboard')}}">Dashboard Articolista</a>
                </li>
                @elseif (Auth::user() && Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
                </li>
                @endif
                @auth
                <li class="nav-item">
                    <a class="nav-link">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item me-2">
                    <a onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="nav-link btn">Logout</a>
                    <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
                </li>
                @endauth
                <form action="{{route('search.article')}}" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="key" placeholder="Cerca" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </ul>
        </div>
    </div>
</nav>