@extends('layouts.app')

@section('content')
  <!-- carousel - slide imagenes -->
  <!-- si no corre poner "false" ==> data-bs-ride="false" -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/slider/foto-carousel-1.jpg') }}" class="d-block w-100" alt="...">
        <div
          class="carousel-caption d-none d-md-block pt-2 pe-3 ps-3 pb-0 bg-primary text-start col-md-7 bg-opacity-75 shadow">
          <p class="lead mb-0">Lo que necesites para tus proyectos</p>
          <p class="h2 mt-0"><strong>Lo encontrás acá</strong></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/slider/foto-carousel-2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block pt-2 pe-3 ps-3 pb-0 bg-primary text-start col-md-7 bg-opacity-75">
          <p class="lead mb-0">Lo que necesites para tus proyectos</p>
          <p class="h2 mt-0"><strong>Lo encontrás acá</strong></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev ps-3" type="button" data-bs-target="#carouselExampleControls"
      data-bs-slide="prev">
      <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
      <img src="{{ asset('img/slider/anterior.png') }}" class="ms-2 d-none d-lg-block d-sm-none">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleControls"
      data-bs-slide="next">
      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
      <img src="{{ asset('img/slider/siguiente.png') }}" class="me-2 d-none d-lg-block d-sm-none">
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Principales servicios -->
  <div class="container-md mt-5">
    <div class="row">
      <!--productos-->
      <div class="col-sm-12 col-md-4 mb-5">
        <a href="{{ route('productos') }}" title="Catálogo de productos" class="box">
          <img src="{{ asset('img/home/productos.png') }}" alt="Productos Placa Sur" class="img-fluid shadow">
        </a>
      </div>
      <!--servicios-->
      <div class="col-sm-12 col-md-4 mb-5">
        <a href="{{ route('productos') }}" title="Servicios PlacaSur" class="box">
          <img src="{{ asset('img/home/servicios.png') }}" alt="Productos Placa Sur" class="img-fluid shadow">
        </a>
      </div>
      <!--novedades-->
      <div class="col-sm-12 col-md-4 mb-5">
        <a href="{{ route('productos') }}" title="Todas las novedades de PlacaSur" class="box">
          <img src="{{ asset('img/home/novedades.png') }}" alt="Productos Placa Sur" class="img-fluid shadow">
        </a>
        <!-- <a href="novedades.php" class="box link-light" target="_blank">
                                              <div class="card card-cover">
                                                  <img src="{{ asset('img/novedades.png" c') }}lass="card-img h-100" alt="...">
                                                  <div class="card-img-overlay d-flex justify-content-end align-items-end">
                                                      <span class="fs-4 fw-light pb-0">NOVEDADES</span>
                                                  </div>
                                              </div>
                                          </a>   -->
      </div>
    </div>
  </div>

  <!-- slide logos -->
  <!-- !!!! si es menor a 9 imagenes hay que repetir !!!! -->
  <div class="container">
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="{{ asset('img/logos/masisa.png') }}" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/faplac.png') }}" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/flipasto.p') }}ng" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/durlok.png') }}" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/sadepan.pn') }}g" class="mx-md-4 mx-0" alt="" />
        </div>

        <div class="slide">
          <img src="{{ asset('img/logos/masisa.png') }}" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/faplac.png') }}" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/flipasto.p') }}ng" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/durlok.png') }}" class="mx-md-4 mx-0" alt="" />
        </div>
        <div class="slide">
          <img src="{{ asset('img/logos/sadepan.pn') }}g" class="mx-md-4 mx-0" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!--FIN slide logos -->
@endsection
