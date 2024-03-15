@extends('layouts.app')
@section('title', 'A definir')
{{--  $categoriaPadre->categoria --}}
{{-- {{ dd($categoria['categoria']) }} --}}
@section('content')
  <div>
    <!-- jumbotrob / título productos -->
    <div class="container-fluid p-0 mb-3">
      <div class="bg-opacity-10 bg-black d-none d-lg-block d-sm-none">
        <div class="container mt-md-n5 pt-1">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent px-0 py-2">
              <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Inicio</a>
              </li>
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


    <!-- card productos -->
    <div class="container-md mt-5">
      <div class="row">

        @foreach ($categoriasHijas as $categoriaHija)
          <div class="col-sm-12 col-md-3 mb-5">
            <div class="card shadow info-box__shadow h-100 pb-1">
              <a href="{{ route('productos.mostrar', $categoriaHija->slug) }}" class="text-decoration-none stretched-link"
                title="Ver todos los Productos de placas">
                <img
                  src="{{ file_exists(asset('storage/categorias/' . $categoriaHija->imagen)) ? asset('storage/categorias/' . $categoria->imagen) : asset('img/no_disponible.png') }}"
                  class="card-img-top d-none d-sm-none d-md-block" alt="{{ $categoriaHija->categoria }}">
                <div class="card-header border-0 border-top border-5 border-primary">
                  <p class="card-title h5 mb-0 fw-semibold link-secondary">{{ $categoriaHija->categoria }}
                  </p>
                </div>
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-0 border-0">
                    @foreach ($subcategoriasPorCategoria[$categoriaHija->id] as $subcategoria)
                      <li class="list-group-item border-0" aria-current="true"><i
                          class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i>
                        {{ $subcategoria }}</li>
                    @endforeach

                  </ul>
                </div>
              </a>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>
  <!-- fin card productos -->
@endsection
