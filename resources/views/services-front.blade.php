@extends('layouts.app')
@section('title', 'Servicios')

@section('content')

    <!-- jumbotrob / título productos -->
    <div class="container-fluid p-0">
        <div class="bg-light bg-gradient d-none d-lg-block d-sm-none">
            <div class="container pt-1">
                <nav class="mt-2" aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent px-0 py-2">
                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none link-primary">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Servicios</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>



    <!-- card servicios -->
    <div class="container-md mt-5 mb-3">
        <div class="row">
            @if (count($services) == 0)
                <div class="col-md-12 text-center mt-5">
                    <h3>Servicios no disponibles</h3>
                </div>
            @endif
            @foreach ($services as $service)
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="slide-up">
                        <div class="boxhover shadow">
                            <img src="{{ file_exists(public_path('storage/servicios/' . $service->image)) ? asset('storage/servicios/' . $service->image) : asset('img/no_disponible.png') }}"
                                class="card-img-top" height="180" alt="{{ $service->title }}">
                            <div class="overlay bg-gradient">
                                {{ $service->description }}
                            </div>
                        </div>
                    </div>
                    <div class="border-0 border-top border-5 border-primary py-2">
                        <p class="h5 fw-semibold">{{ $service->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- fin card servicios -->

@endsection
