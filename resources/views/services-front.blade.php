@section('title', 'Servicios')
@extends('layouts.canvas')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-between">
            @foreach ($services as $service)
                @if ($service->status === 1)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/servicios/' . $service->image) }}" class="card-img-top"
                                alt="imagen service" height="300px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
