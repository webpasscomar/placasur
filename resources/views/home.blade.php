@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
    <!-- carousel - slide imagenes -->
    <!-- si no corre poner "false" ==> data-bs-ride="false" -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slides as $key => $slide)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/galerias/' . $slide->imagen) }}" class="d-block w-100"
                        alt="{{ $slide->galeria }}">
                    <div class="carousel-caption d-none d-md-block ms-3 pb-0">
                        <div class="col-md-6 text-start float-end py-2 pe-3 ps-3 bg-primary bg-opacity-75 shadow">
                            <p class="lead mb-0">Lo que necesites para tus proyectos</p>
                            <p class="h2 mt-0"><strong>Lo encontrás acá</strong></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <img src="{{ asset('img/slider/anterior.png') }}" class="ms-n1 w-25 carousel-item-prev">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <img src="{{ asset('img/slider/siguiente.png') }}" class="me-n1 w-25 carousel-item-next">
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
                <a href="{{ route('servicios') }}" title="Servicios de PlacaSur" class="box">
                    <img src="{{ asset('img/home/servicios.png') }}" alt="Servicios Placa Sur" class="img-fluid shadow">
                </a>
            </div>
            <!--novedades-->
            <div class="col-sm-12 col-md-4 mb-5">
                <a href="{{ route('novedades') }}" title="Novedades de PlacaSur" class="box">
                    <img src="{{ asset('img/home/novedades.png') }}" alt="Novedades Placa Sur" class="img-fluid shadow">
                </a>
            </div>
        </div>
    </div>

    <!-- slide logos -->
    {{-- Mostrar slide solo si existen imágenes --}}

    @if (!$slidesMarcas->isEmpty())
        <x-slide-image :images=$slidesMarcas />
    @endif
    <!--FIN slide logos -->
@endsection
