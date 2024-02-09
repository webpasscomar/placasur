@extends('layouts.app')
@section('title', $categoriaActual->categoria)

@section('content')
    <!-- SHOP BLOCK -->
    <div>
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
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-decoration-none">Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('productos') }}" class="text-decoration-none">Productos
                                </a>
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
        <div class="container-md mb-5">

            <!-- ROW -->
            <div class="row">

                <div class="col-md-4 mt-2">
                    <h2 class="text-secondary">{{ $categoriaActual->categoria }}</h2>
                    <ul class="mt-3 ps-4">
                        @foreach ($categoriasNivelSuperior as $categoria)
                            <li class="fs-5 list-unstyled"><i class="fa-solid fa-diamond pe-1 fa-2xs text-primary"></i>
                                <a href="{{ route('productos.mostrar', $categoria->slug) }}"
                                    class="text-decoration-none {{ request()->segment(2) === $categoria->slug ? 'text-primary link-disabled' : 'text-black' }}">{{ $categoria->categoria }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-8 mt-5">
                    <div class="row mt-3 justify-content-start">

                        {{-- Si tengo productos los muestro --}}

                        @if ($productos->isNotEmpty())
                            @foreach ($productos as $producto)
                                <div class="col-md-3 mb-5">
                                    <div class="card shadow p-2 h-100">
                                        {{-- <img src="{{ asset('img/prod0078.jpg') }}" style="max-width:100%"> --}}
                                        <img src="{{ asset('storage/productos/' . $producto->image) }}"
                                            class="card-img-top d-none d-sm-none d-md-block" alt="{{ $producto->title }}">
                                        <h3 class="mt-3 text-center fs-5">{{ $producto->title }}</h3>

                                    </div>
                                </div>
                            @endforeach
                            {{-- Sino, mensaje de que no hay --}}
                        @else
                            <div class="container">
                                <h4><i class="fa-solid fa-triangle-exclamation me-2 text-secondary"></i>No existen
                                    productos
                                    disponibles para
                                    está categoría</h4>
                            </div>

                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
