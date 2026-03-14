<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🚀 DEVolution</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
             href="{{ route('home') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('articles.*') ? 'active' : '' }}"
             href="{{ route('articles.index') }}">Articoli</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
             href="{{ route('contact') }}">Contattami</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('articles.create') ? 'active' : '' }}"
             href="{{ route('articles.create') }}">Inserisci articolo</a>
        </li>

      </ul>

      <ul class="navbar-nav">

        @auth
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{ Auth::user()->name }}
          </a>

          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                 class="dropdown-item">Logout</a>

              <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
              </form>
            </li>
          </ul>

        </li>
        @else

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, ospite!
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
          </ul>

        </li>

        @endauth

      </ul>

    </div>
  </div>
</nav>