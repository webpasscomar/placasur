@extends('layouts.app')
@section('title', 'Productos')

@section('content')

  <!-- jumbotrob / título productos -->
  <div class="container-fluid p-0">
    <div class="bg-light bg-gradient d-none d-lg-block d-sm-none">
      <div class="container pt-1">
        <nav class="mt-2" aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent px-0 py-2">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none link-primary">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Productos</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

  <!-- card productos -->
  <div class="container-md mt-5 mb-3">
    <div class="row">
      @foreach ($categorias as $categoria)
        <!-- placas -->
        <div class="col-sm-12 col-md-3 mb-5">
          <div class="card shadow info-box__shadow h-100 pb-1">
            @if ($categoria->slug == 'herrajes')
              <a href="https://eurohard.com.ar" target="blank" class="text-decoration-none stretched-link"
                title="Ver todos los Productos de placas">
              @else
                <a href="./productos/<?php echo $categoria->slug; ?>" class="text-decoration-none stretched-link"
                  title="Ver todos los Productos de placas">
            @endif

            <img
              src="{{ file_exists(public_path('storage/categorias/' . $categoria->imagen)) ? asset('storage/categorias/' . $categoria->imagen) : asset('img/no_disponible.png') }}"
              class="card-img-top d-block" alt="{{ $categoria->categoria }}">
            <div class="card-header border-0 border-top border-5 border-primary">
              <p class="card-title h5 mb-0 fw-semibold link-secondary">{{ $categoria->categoria }}</p>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-0 border-0">
                @foreach ($subcategoriasPorCategoria[$categoria->id] as $subcategorias)
                  <li class="list-group-item border-0" aria-current="true">
                    <i class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i>
                    {{ $subcategorias }}
                  </li>
                @endforeach
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
