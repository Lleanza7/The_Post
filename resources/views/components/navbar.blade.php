<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="">Lavora con noi</a>
              </li>
              <li class="nav-item">
                <form action="{{route('logout')}}" id="logout-form" method="POST">
                  @csrf
                  <button type="submit" class="btn nav-link">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @endauth
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi/Registrati
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('register')}}" class="dropdown-item">Registrati</a></li>
              <li><a href="{{route('login')}}" class="dropdown-item">Accedi</a></li>
            </ul>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>