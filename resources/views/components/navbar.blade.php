{{-- <nav class="navbar navbar-dark bg-primary navbar-expand-lg ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        @guest
        <li class="nav-item dropdown ms-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Benevenuto ospite
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route ('register')}}">Registrati</a>
            <a class="dropdown-item" href="{{route ('login')}}">Accedi</a>
          </div>
        </li>    

      </ul>
    </div>  
        @endguest
       @auth
       <ul class="navbar-nav"> 
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Benevenuto {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="">Profilo</a>
          <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a>
          <form action="{{route ('logout')}}" method="POST" id="form-logout" class="d-none"></form>
        </div>
      </li>  
      </ul>
       @endauth
      </ul>
    </div>
  </nav> --}}


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <li class="nav-item list-unstyled fs-3">
            <a class="nav-link active " aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> --}}
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benevenuto ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>     
          @endguest  
          @auth
           {{-- DROPDOWN UTENTE LOGGATO --}}
          <li class="nav-item dropdown">
            <div class="d-flex ">
              <p class="nav-link">Benvenuto</p>
                  <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{Auth::user()->name}}
                  </a>        
           
            
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profilo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('article.create')}}">Inserisci un'articolo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('careers')}}">Lavora con noi</a></li>
                <li><hr class="dropdown-divider"></li>
                @if (Auth::user()->is_admin)
                  <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                  <li><hr class="dropdown-divider"></li>   
                @endif
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a></li>
                <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">@csrf</form>
              </ul> 
            </div>
          </li>   
          @endauth
          {{-- DROPDOWN OSPITE --}}
          
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
  