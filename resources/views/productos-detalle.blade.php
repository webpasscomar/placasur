@extends('layouts.app')
@section('title', 'Detalle')


@section('content')

    <!-- SHOP BLOCK -->
    <section>

        <!-- jumbotrob / título productos -->

        <div class="container-fluid p-0 mb-3">
            <div class="bg-opacity-10 bg-black d-none d-lg-block d-sm-none">
                <div class="container mt-md-n5 pt-1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0 py-2">
                            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('productos') }}"
                                    class="text-decoration-none">Productos</a></li>
                            <li class="breadcrumb-item"><a href="/productos/placas"
                                    class="text-decoration-none">Categoria</a></li>
                            <li class="breadcrumb-item active text-black" aria-current="page">
                                Faplac
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- CONTAINER -->
        <div class="container mb-5">
            {{-- SIDEBAR --}}
            <!-- ROW -->
            <div class="row">

                <div class="col-md-2 mt-2 w-auto">
                    <h2 class="text-secondary">FAPLAC</h2>
                    <ul class="mt-2">
                        <li class="fs-5 text-primary">Nature</li>
                        <li class="fs-5">Nórdica</li>
                        <li class="fs-5">Etnica</li>
                        <li class="fs-5">Urban Concept</li>
                        <li class="fs-5">Hilados</li>
                        <li class="fs-5">Clásica</li>
                        <li class="fs-5">Colores Lisos</li>
                    </ul>
                </div>

                <div class="col-md-10 mt-5 m-auto">
                    <div class="row ms-5">
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Terrarum</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Teka Artico</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Roble Dakar</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Nogal Terracota</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Nocce Milano</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Mont Blanc</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Linosa</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Gaudí</h3>
                        </div>
                        <div class="col-md-3 mb-4 p-3 shadow"><img src="{{ asset('img/prod0078.jpg') }}"
                                style="max-width:100%">
                            <h3 class="mt-3 text-center">Cedro</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
