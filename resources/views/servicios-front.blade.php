@section('title', 'Servicios')
@extends('layouts.canvas')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            @foreach ($servicios as $servicio)
                <div class="col-md-4">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="imagen servicio">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servicio->title }}</h5>
                            <p class="card-text">{{ $servicio->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
