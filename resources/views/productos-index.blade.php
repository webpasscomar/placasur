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
      @foreach ($categorias as $categoria)
        <!-- placas -->
        <div class="col-sm-12 col-md-3 mb-5">
          <div class="card shadow info-box__shadow h-100 pb-1">
            <a href="./productos/<?php echo $categoria->slug; ?>" class="text-decoration-none stretched-link"
              title="Ver todos los Productos de placas">
              <img src="{{ asset('storage/categorias/' . $categoria->imagen) }}"
                class="card-img-top d-none d-sm-none d-md-block" alt="{{ $categoria->categoria }}">
              <div class="card-header border-0 border-top border-5 border-primary">
                <p class="card-title h5 mb-0 fw-semibold link-secondary">{{ $categoria->categoria }}</p>
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
      @endforeach


    </div>
  </div>
  <!-- fin card productos -->
@endsection
