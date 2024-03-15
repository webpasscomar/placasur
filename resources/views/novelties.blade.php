@extends('layouts.app')

@section('title', 'Novedades')

@section('content')

    <div>

        <!-- jumbotrob / título productos -->
        <div class="container-fluid p-0 mb-3">
            <div class="jumbotron jumbotron-fluid imagencover px-4 mb-0 d-flex align-items-center text-center mt-md-n2">
                <div class="container">
                    <p class="text-black-50 display-5">Novedades</p>
                </div>
            </div>
            <div class="bg-opacity-10 bg-black d-none d-lg-block d-sm-none">
                <div class="container mt-md-n5 pt-1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0 py-2">
                            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Inicio</a></li>
                            <li class="breadcrumb-item active text-black" aria-current="page">Novedades</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- solapas novedades -->
        <div class="container-md pt-4">
            <div class="row">
                <div class="col-md-12">

                    <!-- solapas Productos / Promociones / Herrajes  - contenido dinamico , pueden ser mas categorias-->
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button
                                    class="btn btn-outline-primary rounded-top rounded-0 shadow-sm {{$loop->first ? 'active' :''}}"
                                    id="{{strtolower($category->name)}}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{strtolower($category->name)}}-tab-pane"
                                    type="button" role="tab" aria-controls="{{strtolower($category->name)}}-tab-pane"
                                    aria-selected="true">{{$category->name}}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <!-- contenidos productos / promociones / herrajes - contenido dinámico -->
                    <div class="tab-content mx-2 mt-0" id="myTabContent">
                        @foreach ($categories as $category)
                            <!-- NOVEDADES POR CATEGORIA -->
                            <div class="tab-pane fade {{$loop->first ? 'show active' : ''}}"
                                 id="{{strtolower($category->name)}}-tab-pane"
                                 role="tabpanel"
                                 aria-labelledby="{{strtolower($category->name)}}-tab" tabindex="0">
                                <!-- destacada / última -->
                                @foreach($firstNoveltiesCategories as $novelty)
                                    @if($category->id == $novelty->category_id)

                                        <div class="row py-3 px-2 shadow rounded-2">
                                            <div class="col-md-5 w-50">
                                                <img src="{{ asset('/storage/novedades/' . $novelty->image) }}"
                                                     class="d-block img-fluid rounded-2 object-contain"
                                                     alt="{{ $novelty->title }}">
                                            </div>
                                            <div class="col">
                                                <span
                                                    class="badge rounded-pill border border-primary text-primary mt-4 mt-md-0 mb-3 shadow-sm">{{ date('d M Y', strtotime($novelty->created_at)) }}</span>
                                                <h3 class="bold text-black-50">{{ $novelty->title }}</h3>
                                                <p>{!! $novelty->description !!}</p>
                                                <button
                                                    class="btn btn-sm btn-outline-primary" role="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$novelty->id}}"> Ver nota
                                                    <i class="fas fa-chevron-right ml-3"></i>
                                                </button>
                                                <x-modal-novelty
                                                    id="exampleModal{{$novelty->id}}"
                                                    title="{{$novelty->title}}"
                                                    date="{{$novelty->created_at}}"
                                                    description="{!!$novelty->description!!}"
                                                    image="{{$novelty->image}}"
                                                />
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                <!-- todas -->

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h3>{{ $category->name }}</h3>
                                    </div>
                                    <!-- contenido -->
                                    <div class="card-columns mt-3 px-0">
                                        @foreach ($otherNoveltiesCategories as $categoryNovelty)
                                            @foreach($categoryNovelty as $novelty)
                                                @if($category->id === $novelty->category_id)

                                                    <div class="card text-bg-light p-0 info-box__shadow h-100">
                                                        <div>
                                                            <img
                                                                src="{{ asset('/storage/novedades/' . $novelty->image) }}"
                                                                class="card-img-top" alt="{{ $novelty->title }}">
                                                        </div>
                                                        <div class="card-body">
                                                            <div
                                                                class="badge rounded-pill border border-primary text-primary mb-3 shadow-sm">
                                                                {{ date('d M Y', strtotime($novelty->created_at)) }}
                                                            </div>
                                                            <h2 class="card-title h5 text-primary bold">{{ $novelty->title }}</h2>
                                                            <p class="card-text">{!! $novelty->description !!}</p>
                                                            <button
                                                                class="btn btn-sm btn-outline-primary" role="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal{{$novelty->id}}"> Ver nota
                                                                <i class="fas fa-chevron-right ml-3"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <x-modal-novelty
                                                        id="exampleModal{{$novelty->id}}"
                                                        title="{{$novelty->title}}"
                                                        date="{{$novelty->created_at}}"
                                                        description="{!!$novelty->description!!}"
                                                        image="{{$novelty->image}}"
                                                    />
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
