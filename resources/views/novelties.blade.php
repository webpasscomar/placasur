```blade
@extends('layouts.app')

@section('title', 'Novedades')

@section('content')

<div>

    <!-- jumbotron / título novedades -->
    <div class="container-fluid p-0">
        <div class="bg-light bg-gradient d-none d-lg-block d-sm-none">
            <div class="container pt-1">
                <nav class="mt-2" aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent px-0 py-2">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-decoration-none link-primary">
                                Inicio
                            </a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            Novedades
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- solapas novedades -->
    <div class="container-md pt-4">

        <div class="row">

            <div class="col-md-12">

                {{-- Si no hay ninguna novedad publicada --}}
                @if ($firstNoveltiesCategories->count() == 0)

                    <section class="d-flex flex-column justify-content-center align-items-center mt-5">

                        <h5 class="fs-5 text-secondary">
                            No hay novedades disponibles
                        </h5>

                        <h5 class="fs-5 text-secondary">
                            Puedes ver algunos de nuestros
                            <strong>
                                <a href="{{ route('productos') }}"
                                    class="novelties_go_products">
                                    productos
                                </a>
                            </strong>
                        </h5>

                    </section>

                @else

                    <!-- ============================= -->
                    <!-- SOLAPAS DE CATEGORÍAS -->
                    <!-- ============================= -->

                    <ul class="nav nav-pills justify-content-center"
                        id="pills-tab"
                        role="tablist">

                        @foreach ($categories as $category)

                            <li class="nav-item" role="presentation">

                                <button
                                    class="btn btn-outline-primary rounded-top rounded-0 shadow-sm {{ $loop->first ? 'active' : '' }}"
                                    id="{{ strtolower($category->name) }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ strtolower($category->name) }}-tab-pane"
                                    type="button"
                                    role="tab"
                                    aria-controls="{{ strtolower($category->name) }}-tab-pane"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">

                                    {{ $category->name }}

                                </button>

                            </li>

                        @endforeach

                    </ul>


                    <!-- ============================= -->
                    <!-- CONTENIDO DE LAS CATEGORÍAS -->
                    <!-- ============================= -->

                    <div class="tab-content mx-2 mt-3"
                        id="myTabContent">


                        @foreach ($categories as $category)

                            <!-- ============================= -->
                            <!-- TAB DE LA CATEGORÍA -->
                            <!-- ============================= -->

                            <div
                                class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="{{ strtolower($category->name) }}-tab-pane"
                                role="tabpanel"
                                aria-labelledby="{{ strtolower($category->name) }}-tab"
                                tabindex="0">


                                <!-- ================================= -->
                                <!-- NOVEDAD DESTACADA / MÁS RECIENTE -->
                                <!-- ================================= -->

                                @if ($firstNoveltiesCategories->has($category->id))

                                    @php
                                        $novelty = $firstNoveltiesCategories->get($category->id);
                                    @endphp


                                    <div class="row py-3 px-2 shadow rounded-2">

                                        <!-- imagen -->
                                        <div class="col-12 col-md w-auto">

                                            <img
                                                src="{{ asset('/storage/novedades/' . $novelty->image) }}"
                                                class="d-block img-fluid rounded-2 object-contain"
                                                alt="{{ $novelty->title }}">

                                        </div>


                                        <!-- información -->
                                        <div class="col">

                                            <span
                                                class="badge rounded-pill border border-primary text-primary mt-4 mt-md-0 mb-3 shadow-sm">

                                                {{ date('d M Y', strtotime($novelty->created_at)) }}

                                            </span>


                                            <h3 class="bold text-black-50">
                                                {{ $novelty->title }}
                                            </h3>


                                            <p>
                                                {!! $novelty->description !!}
                                            </p>


                                            <button
                                                class="btn btn-sm btn-outline-primary"
                                                role="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $novelty->id }}">

                                                Ver nota

                                                <i class="fas fa-chevron-right ml-3"></i>

                                            </button>


                                            <x-modal-novelty
                                                id="exampleModal{{ $novelty->id }}"
                                                title="{{ $novelty->title }}"
                                                date="{{ $novelty->created_at }}"
                                                description="{!! $novelty->description !!}"
                                                image="{{ $novelty->image }}" />

                                        </div>

                                    </div>


                                @else

                                    <!-- ================================= -->
                                    <!-- SIN NOVEDADES EN ESTA CATEGORÍA -->
                                    <!-- ================================= -->

                                    <section
                                        class="d-flex justify-content-start align-items-center mt-5">

                                        <h5 class="fs-6 text-secondary">

                                            No hay novedades de
                                            {{ $category->name }}
                                            disponibles

                                        </h5>

                                    </section>

                                @endif


                                <!-- ============================= -->
                                <!-- RESTO DE LAS NOVEDADES -->
                                <!-- ============================= -->

                                <div class="row mt-4">

                                    <div class="col-md-12">

                                        <h3>
                                            {{ $category->name }}
                                        </h3>

                                    </div>


                                    <!-- contenido -->
                                    <div class="card-columns mt-3 px-0">


                                        @foreach (
                                            $otherNoveltiesCategories->get($category->id, collect())
                                            as $novelty
                                        )


                                            <div
                                                class="card text-bg-light p-0 info-box__shadow h-100">


                                                <!-- imagen -->
                                                <div>

                                                    <img
                                                        src="{{ asset('/storage/novedades/' . $novelty->image) }}"
                                                        class="card-img-top"
                                                        alt="{{ $novelty->title }}">

                                                </div>


                                                <!-- contenido de la tarjeta -->
                                                <div class="card-body">


                                                    <!-- fecha -->
                                                    <div
                                                        class="badge rounded-pill border border-primary text-primary mb-3 shadow-sm">

                                                        {{ date('d M Y', strtotime($novelty->created_at)) }}

                                                    </div>


                                                    <!-- título -->
                                                    <h2
                                                        class="card-title h5 text-primary bold">

                                                        {{ $novelty->title }}

                                                    </h2>


                                                    <!-- descripción -->
                                                    <p class="card-text">

                                                        {!! $novelty->description !!}

                                                    </p>


                                                    <!-- botón -->
                                                    <button
                                                        class="btn btn-sm btn-outline-primary"
                                                        role="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $novelty->id }}">

                                                        Ver nota

                                                        <i class="fas fa-chevron-right ml-3"></i>

                                                    </button>


                                                </div>

                                            </div>


                                            <!-- modal -->
                                            <x-modal-novelty
                                                id="exampleModal{{ $novelty->id }}"
                                                title="{{ $novelty->title }}"
                                                date="{{ $novelty->created_at }}"
                                                description="{!! $novelty->description !!}"
                                                image="{{ $novelty->image }}" />


                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @endif

            </div>

        </div>

    </div>

</div>

@endsection