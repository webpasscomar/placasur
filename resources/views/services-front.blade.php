@section('title', 'Servicios')
@extends('layouts.app')

@section('content')
    <!-- jumbotrob / título servicios -->
    <div class="container-fluid p-0 mb-3">
        <div class="jumbotron jumbotron-fluid imagencover px-4 mb-0 d-flex align-items-center text-center mt-md-n2">
            <div class="container">
                <p class="text-black-50 display-5">Servicios</p>
            </div>
        </div>
        <div class="bg-opacity-10 bg-black d-none d-lg-block d-sm-none">
            <div class="container mt-md-n5 pt-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent px-0 py-2">
                        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Inicio</a></li>
                        <li class="breadcrumb-item active text-black" aria-current="page">Servicios</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- card servicios -->
    <div class="container-md mt-5">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="slide-up">
                        <div class="boxhover shadow">
                            <img src="{{ asset('img/services/' . $service->image) }}" class="card-img-top"
                                alt="{{ $service->title }}">
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
