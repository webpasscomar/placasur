@extends('layouts.app')

@section('title', 'Novedades')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($novelties as $novelty)
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 w-100">
                                <img src="{{ asset('storage/novedades/' . $novelty->image) }}" class="img-fluid rounded-start"
                                    alt="{{ $novelty->title }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $novelty->title }}</h5>
                                    <p class="card-text">@php echo $novelty->description  @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
