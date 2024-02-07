@extends('layouts.app')

@section('content')
  <!-- SHOP BLOCK -->
  <section>

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
              <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Inicio</a></li>
              <li class="breadcrumb-item"><a href="{{ route('productos') }}" class="text-decoration-none">Productos</a>
              </li>
              <li class="breadcrumb-item active text-black" aria-current="page">
                {{ $categoriaActual->categoria }}
              </li>

            </ol>
          </nav>
        </div>
      </div>
    </div>

    <!-- CONTAINER -->
    <div class="container mb-5">

      <!-- ROW -->
      <div class="row">

        <div class="col-md-2 mt-2 px-3">
          {{-- {{ dd($categoriasNivelSuperior) }} --}}
          <h2 class="text-secondary">{{ $categoriaPadre->categoria }}</h2>
          <ul class="mt-2">
            @foreach ($categoriasNivelSuperior as $categoria)
              <li class="fs-5"><a href="./productos/<?php echo $categoria->slug; ?>"
                  class="text-decoration-none stretched-link">{{ $categoria->categoria }}</a></li>
            @endforeach
            <li class="fs-5 text-primary">Nature</li>

          </ul>
        </div>

        <div class="col-md-10 mt-5">
          <div class="row gap-3 ms-5">

            {{-- Si tengo productos los muestro --}}

            @foreach ($productos as $producto)
              <div class="col-md-3 mx-1 mb-4 p-3 shadow">
                {{-- <img src="{{ asset('img/prod0078.jpg') }}" style="max-width:100%"> --}}
                <img src="{{ asset('storage/productos/' . $producto->image) }}"
                  class="card-img-top d-none d-sm-none d-md-block" alt="{{ $producto->title }}">
                <h3 class="mt-3 text-center">{{ $producto->title }}</h3>
              </div>
            @endforeach

            {{-- Sino, mensaje de que no hay --}}

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
