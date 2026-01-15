<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('products_index')}}">Prodotti</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('products_create')}}">Crea Prodotto</a>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles_index')}}">Articoli</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles_create')}}">Crea Articolo</a>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="{{route('magazines_index')}}">Giornali</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('magazines_create')}}">Crea Giornale</a>
        </li>
        
        @auth
        {{-- se l'utente è autenticato --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-circle-user"></i>
            Benvenut* {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto utente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
          </ul>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>