
<!-- imagen enca top -->
<img src="imagenes/enca.jpg" alt="Placa Sur" class="d-none d-lg-block d-sm-none">
<!-- NAV / menú -->
<header class="sticky-md-top border-top border-5 border-primary">

  <div class="row bg-danger">
    <div class="col-md-12 pt-5 pb-3">
    </div>
  </div>

  <nav class="container-fluid navbar navbar-expand-lg bg-white py-0 menutop shadow">
    <div class="container-md">              
      <a class="navbar-brand col-6 col-md-3 col-lg-3" href="{{ route('home') }}" title="Inicio Placa Sur">
        <!-- logo -->
        <img src="{{ asset('img/placasur.png') }}" alt=" Placa Sur" class="img-fluid float-left">
        <h1 class="visually-hidden"> Placa Sur</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item {{ request()->routeIS('empresa') ? 'active' : '' }}">
            <a href="{{ route('empresa') }}" title="Página principal" class="nav-link">Empresa <span
                class="visually-hidden">(Home)</span></a>
          </li>
          <li class="nav-item {{ request()->routeIS('servicios') ? 'active' : '' }}">
            <a href="{{ route('servicios') }}" title="Nuestros servicios" class="nav-link">Servicios</a>
          </li>
          <li class="nav-item {{ request()->routeIS('productos') ? 'active' : '' }}">
            <a href="{{ route('productos') }}" title="Nuestros productos" class="nav-link">Productos</a>
          </li>
          {{-- <li class="nav-item dropdown {{ request()->routeIS('productos') ? 'active' : '' }}">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Productos
                      </a>
                      <div class="dropdown-menu bg-light mt-1 shadow-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('productos') }}">Placas</a>
                        <a class="dropdown-item" href="#">Adhesivos y Barnices</a>
                        <a class="dropdown-item" href="#">Molduras</a>
                        <a class="dropdown-item" href="#">Enchapados</a>
                        <a class="dropdown-item" href="#">Construcción</a>
                        <a class="dropdown-item" href="#">Tapacantos</a>
                        <a class="dropdown-item" href="#">Herrajes</a>
                      </div>
                    </li> --}}

          <li class="nav-item {{ request()->routeIS('novedades') ? 'active' : '' }}">
            <a href="{{ route('novedades') }}" title="Nuestras actividades" class="nav-link">Novedades</a>
          </li>
          <!-- contacto -->
          <li class="nav-item {{ request()->routeIS('contacto') ? 'active' : '' }}">
            <a href="{{ route('contacto') }}" title="Contactanos" class="nav-link">Contacto</a>
          </li>
          <!-- buscador -->
          <li class="nav-item search">
            <form>
              <div class="animated-search m-md-0 mb-sm-4">
                <input type="search" id="animated-input">
                <a href="#">
                  <i class="fas fa-search" id="searchBtn"></i>
                </a>
              </div>
            </form>
          </li>
        </ul>
      </div>
      <!-- </li>
      </ul>
    </div> -->
    </div>
  </nav>
</header>
