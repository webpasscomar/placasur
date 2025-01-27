<div>
  <!-- imagen enca top -->
  <div class="container-fluid overflow-hidden p-0">
    <img src="{{ asset('img/enca.jpg') }}" alt="Placa Sur" class="d-none d-lg-block d-sm-none w-full">
  </div>
  <!-- NAV / menú -->
  <header class="sticky-md-top border-top border-5 border-primary">

    <nav class="container-fluid navbar navbar-expand-lg bg-white py-0 menutop shadow">
      <div class="container-md">
        <a class="navbar-brand col-6 col-md-3 col-lg-3" href="{{ route('home') }}" title="Inicio Placa Sur">
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
            <li class="nav-item {{ request()->routeIS('novedades') ? 'active' : '' }}">
              <a href="{{ route('novedades') }}" title="Nuestras actividades" class="nav-link">Novedades</a>
            </li>
            <li class="nav-item {{ request()->routeIS('contacto') ? 'active' : '' }}">
              <a href="{{ route('contacto') }}" title="Contactanos" class="nav-link">Contacto</a>
            </li>
            <li lass="nav-item">
              <a href="https://euro-hard.com.ar" title="EuroHard" class="nav-link" target="_blank">
                <img src="{{ asset('img/eurohard-eh.jpeg') }}" width="40" alt="EuroHard"
                  class="img-fluid float-left">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</div>
