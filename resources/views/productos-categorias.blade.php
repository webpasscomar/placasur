@extends('layouts.app')

@section('content')
  <!-- jumbotrob / título productos -->
  <div class="container-fluid p-0 mb-3">
    <div class="jumbotron jumbotron-fluid imagencover px-4 mb-0 d-flex align-items-center text-center mt-md-n2">
      <div class="container">
        <p class="text-black-50 display-5">Productos</p>
      </div>
    </div>
    <div class="bg-opacity-10 bg-black d-none d-lg-block d-sm-none">
      <div class="container mt-md-n5 pt-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent px-0 py-2">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Inicio</a></li>
            <li class="breadcrumb-item active text-black" aria-current="page">Productos</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>


  <!-- card productos -->
  <div class="container-md mt-5">
    <div class="row">
      <!-- placas -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="placas.php" class="text-decoration-none stretched-link" title="Ver todos los Productos de placas">
            <img src="{{ asset('storage/productos/placas.jpg') }}" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold link-secondary">Placas</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Faplac</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Egger</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Rehau</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Sadepam</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Rauvisio</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Guillermina</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i> Obs</li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- Adhesivos y Barnices -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="" class="text-decoration-none stretched-link"
            title="Todos los Productos de Adhesivos y Barnices">
            <img src="imagenes/productos/adhesivos.jpg" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold link-secondary">Adhesivos y Barnices</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i>Barnices</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Adhesivos</li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- Molduras -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="" class="text-decoration-none stretched-link" title="Todos los Productos de molduras">
            <img src="imagenes/productos/molduras.jpg" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold link-secondary">Molduras</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Decoforma </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Construcción en sseco</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Pisos Flotantes </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Aislante </li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- Enchapados -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="" class="text-decoration-none stretched-link" title="Todos los Productos de Enchapados">
            <img src="imagenes/productos/enchapados.jpg" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold text-secondary">Enchapados</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Cantochap</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Formica</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Chapadur </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Terciado </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Terciado de Pino</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Terciado Guatambu</li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Terciado Fenolico Plastificado</li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- Construcción -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="" class="text-decoration-none stretched-link" title="Todos los Productos de Construcción">
            <img src="imagenes/productos/construccion.jpg" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold link-secondary">Construcción</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Aislante </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Estisol </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Molduras </li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- Tapacantos -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="" class="text-decoration-none stretched-link" title="Todos los Productos de Tapacantos">
            <img src="imagenes/productos/tapacantos.jpg" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold">Tapacantos</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Rehau </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Egger </li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <!-- Herrajes para mueble y concina -->
      <div class="col-sm-12 col-md-3 mb-5">
        <div class="card shadow info-box__shadow h-100 pb-1">
          <a href="" class="text-decoration-none stretched-link" title="Todos los Productos de Tapacantos">
            <img src="imagenes/productos/herrajes.jpg" class="card-img-top d-none d-sm-none d-md-block"
              alt="Detalle del producto">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold link-secondary">Herrajes para mueble y concina</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Eurohard </li>
                <li class="list-group-item border-0" aria-current="true"> <i
                    class="fa-solid fa-diamond pe-1 text-primary fa-2xs"></i> Otros </li>
              </ul>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
  <!-- fin card productos -->
@endsection
