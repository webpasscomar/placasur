    <header class="sticky-md-top border-top border-5 border-primary">
      <nav class="container-fluid navbar navbar-expand-lg bg-light py-0 menutop shadow">
        <div class="container-md">
          <a class="navbar-brand col-6 col-md-3 col-lg-3" href="/" title="Inicio Placa Sur">
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
              <li class="nav-item active">
                <a href="{{ route('empresa') }}" title="Página principal" class="nav-link">Empresa <span
                    class="visually-hidden">(Home)</span></a>
              </li>
              <li class="nav-item">
                <a href="{{ route('servicios-front') }}" title="Nuestras actividades" class="nav-link">Servicios</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Productos
                </a>
                <div class="dropdown-menu bg-light mt-1 shadow-sm" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('empresa') }}">Productos varios</a>
                  <a class="dropdown-item" href="{{ route('empresa') }}">Another action</a>
                </div>
              </li>
              <li class="nav-item">
                <a href="{{ route('presupuestos') }}" title="Nuestras actividades" class="nav-link">Presupuestos</a>
              </li>
              <li class="nav-item">
                <a href="faq.html" title="Nuestras actividades" class="nav-link">Novedades</a>
              </li>
              <!-- contacto -->
              <li class="nav-item">
                <a href="{{ route('contacto') }}" title="Contactanos" class="nav-link">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
