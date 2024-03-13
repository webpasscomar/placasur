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
        {{--                                        @endforeach--}}
        {{-- <!-- 1 -->
    <div class="card text-bg-light p-0 info-box__shadow">
        <div class="card-body">
            <div
                class="badge rounded-pill border border-primary text-primary mb-3 shadow-sm">
                07 Ene 2024
            </div>
            <h2 class="card-title h5 text-primary bold">Aislantes para el hogar</h2>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                elit</p>
            <a href="novedades/consejo.php"
                class="btn btn-sm btn-outline-primary stretched-link"
                title="Detalle del consejo">
                Ver consejo <i class="fas fa-chevron-right ml-3"></i>
            </a>
            <div class="small text-muted mt-4 mb-0 pb-0"><i
                    class="fas fa-user-alt mr-2"></i> Fuente: <cite
                    title="Source Title">Isover Argentina</cite></div>
        </div>
    </div>
    <!-- 2 -->
    <div class="card text-bg-light p-0 info-box__shadow">
        <img src="{{ asset('/storage/novedades/construccion.jpg') }}" class="card-img-top"
            alt="producto para la construcción">
        <div class="card-body">
            <div
                class="badge rounded-0 rounded-pill rounded-end border border-primary text-primary mb-3 shadow-sm me-0">
                17 Ene 2024
            </div>
            <div
                class="badge rounded-0 rounded-pill rounded-start thin text-bg-warning mb-3 shadow-sm ms-n1">
                Construcción
            </div>
            <h2 class="card-title h5 text-primary bold">Aislantes</h2>
            <p class="card-text"> El desafío para los arquitectos, consultores acústicos
                y empresas
                constructoras
                de viviendas consiste en crear edificaciones más silenciosas. Placasur
                comercializa sistemas
                eficientes para el control acústico y la absorción de sonidos
            </p>
            <a href="novedades/novedad-1.php"
                class="btn btn-sm btn-outline-primary stretched-link"
                title="Producto egger">
                Más info <i class="fas fa-chevron-right ml-3"></i>
            </a>
        </div>
    </div>
    <!-- 3 -->
    <div class="card text-bg-light p-0 info-box__shadow">
        <img src="{{ asset('/storage/novedades/egger.jpg') }}" class="card-img-top"
            alt="producto egger">
        <div class="card-body">
            <div
                class="badge rounded-pill border border-primary text-primary mb-3 shadow-sm">
                27 Ene 2024
            </div>
            <h2 class="card-title h5 text-primary bold">Tapacantos Egger</h2>
            <p class="card-text">Detalle del producto Egger.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vero
                consectetur vel possimus.
            </p>
            <a href="novedades/novedad-1.php"
                class="btn btn-sm btn-outline-primary stretched-link"
                title="Producto egger">
                Ver tapacantos <i class="fas fa-chevron-right ml-3"></i>
            </a>
        </div>
    </div>
    <!-- 4 -->
    <div class="card text-bg-light p-0 info-box__shadow">
        <div class="card-body">
            <div
                class="badge rounded-pill border border-primary text-primary mb-3 shadow-sm">
                27 Ene 2024
            </div>
            <h2 class="card-title h5 text-primary bold">Pisos flotantes</h2>
            <p class="card-text">Para interiores:
                <br>
                Gustos personales, armonía con el resto de la decoración, tránsito, y
                agentes como la humedad o la
                incidencia del sol se encuentran enfrentados.
            </p>
            <a href="novedades/novedad-1.php"
                class="btn btn-sm btn-outline-primary stretched-link"
                title="Detalle de piezas"> Descargar
                instructivo <i class="fas fa-download ml-3"></i></a>
        </div>
    </div>
    <!-- 5 -->
    <div class="card text-bg-light p-0 info-box__shadow">
        <div class="card-body">
            <div
                class="badge rounded-0 rounded-pill rounded-end border border-primary text-primary mb-3 shadow-sm me-0">
                20 Dic 2023
            </div>
            <div
                class="badge rounded-0 rounded-pill rounded-start thin text-bg-success mb-3 shadow-sm ms-n1">
                Placas
            </div>
            <h5 class="card-title h5 text-primary bold">Lo ayudamos a construir con una
                sola placa</h5>
            <p class="card-text">Esto facilitará el correcto armado del mueble. Es
                recomendable además leer los
                pasos de ejecución antes de iniciar el trabajo.</p>
            <a href="novedades/novedad-1.php"
                class="btn btn-sm btn-outline-primary stretched-link"
                title="Detalle de piezas"> Descargar detalle
                de las piezas <i class="fas fa-download ml-3"></i></a>
        </div>
    </div>
    <!-- 6 -->
    <div class="card text-bg-light p-0 info-box__shadow">
        <img src="{{ asset('/storage/novedades/egger.jpg') }}" class="card-img-top"
            alt="producto egger">
        <div class="card-body">
            <div
                class="badge rounded-pill border border-primary text-primary mb-3 shadow-sm">
                27 Ene 2024
            </div>
            <h2 class="card-title h5 text-primary bold">Tapacantos Egger</h2>
            <p class="card-text">Detalle del producto Egger.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vero
                consectetur vel possimus.
            </p>
            <a href="novedades/novedad-1.php"
                class="btn btn-sm btn-outline-primary stretched-link"
                title="Producto egger">
                Ver tapacantos <i class="fas fa-chevron-right ml-3"></i>
            </a>
        </div>
{{--                                        </div> --}}
        {{--                                        </div>--}}
        {{--                                    </div> <!-- FIN todas -->--}}
        {{--                            </div> <!-- FIN Productos -->--}}
        {{--                        @endforeach--}}

        <!-- PROMOCIONES -->
        {{-- <div class="tab-pane fade " id="promociones-tab-pane" role="tabpanel"
            aria-labelledby="promociones-tab" tabindex="0">
            <!--destacado / último  -->
            <div class="row py-3 px-2 shadow rounded-2">
                <div class="col-md-5">
                    <img src="{{ asset('/storage/novedades/construccion.jpg') }}"
                        class="d-block img-fluid rounded-2" alt="Fachada Placasur">
                </div>
                <div class="col">
                    <span
                        class="badge rounded-pill border border-primary text-primary mt-4 mt-md-0 mb-3 shadow-sm">03
                        Ene
                        2024</span>
                    <!-- <br><small>15/01/2024</small> -->
                    <h3 class="bold text-black-50">Todo para la construcción</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, seddiam nonummy nibh
                        euismod tincidunt ut
                        laoreet dolore.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary" role="button"> Ver nota <i
                            class="fas fa-chevron-right ml-3"></i> </a>
                </div>
            </div>
            <!-- todas -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3>Promociones</h3>
                </div>
            </div>
        </div><!-- FIN Promociones --> --}}

        <!-- HERRAJES -->
        {{-- <div class="tab-pane fade" id="herrajes-tab-pane" role="tabpanel" aria-labelledby="herrajes-tab"
            tabindex="0">

            <!--destacado / último  -->
            <div class="row py-3 px-2 shadow rounded-2">
                <div class="col-md-5">
                    <img src="{{ asset('/storage/novedades/egger.jpg') }}"
                        class="d-block img-fluid rounded-2" alt="Fachada Placasur">
                </div>
                <div class="col">
                    <span
                        class="badge rounded-pill border border-primary text-primary mt-4 mt-md-0 mb-3 shadow-sm">03
                        Ene
                        2024</span>
                    <!-- <br><small>15/01/2024</small> -->
                    <h3 class="bold text-black-50">Destacado herrajes</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, seddiam nonummy nibh
                        euismod tincidunt ut
                        laoreet dolore.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary" role="button"> Ver nota <i
                            class="fas fa-chevron-right ml-3"></i> </a>
                </div>
            </div>
            <!-- todas -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3>Herrajes</h3>
                </div>
            </div>
        </div><!-- FIN Herrajes --> --}}


        <!-- Modal -->
        {{--        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
        {{--             aria-hidden="true">--}}
        {{--            <div class="modal-dialog modal-xl modal-dialog-centered">--}}
        {{--                <div class="modal-content">--}}
        {{--                    <div class="modal-header" style="background-color:rgba(51,51,51,0.1);">--}}
        {{--                        <h1 class="modal-title fs-5" id="exampleModalLabel">Bisagra Negra</h1>--}}
        {{--                        <span class="badge rounded-pill border border-primary text-primary ms-5 shadow-sm">15 Ene--}}
        {{--                            2024</span>--}}
        {{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
        {{--                    </div>--}}
        {{--                    <div class="modal-body">--}}
        {{--                        <div class="row">--}}
        {{--                            <div class="col-md-4">--}}
        {{--                                <img src="{{ asset('/storage/novedades/construccion.jpg') }}" class="w-100"--}}
        {{--                                     alt="imagen">--}}
        {{--                            </div>--}}
        {{--                            <div class="col-md-8">--}}
        {{--                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut dolore ea--}}
        {{--                                    inventore itaque libero nesciunt quae qui quis quos sint, totam velit voluptate.--}}
        {{--                                    Autem commodi dignissimos earum minus quisquam!--}}
        {{--                                </div>--}}
        {{--                                <div>Ab ad, aliquam autem beatae corporis dignissimos ea eaque eius error ex, fuga--}}
        {{--                                    fugit--}}
        {{--                                    minus nam nobis non nostrum, nulla omnis perferendis perspiciatis provident quas--}}
        {{--                                    quod recusandae rem similique voluptatem!--}}
        {{--                                </div>--}}
        {{--                                <div>Atque consectetur consequatur in laudantium molestiae molestias mollitia nihil--}}
        {{--                                    quas--}}
        {{--                                    quasi qui quia, quo rem saepe soluta suscipit velit veritatis. A aliquam dolor--}}
        {{--                                    eum--}}
        {{--                                    mollitia quae quibusdam reprehenderit repudiandae unde?--}}
        {{--                                </div>--}}
        {{--                                <div>Alias aliquam amet animi architecto beatae consectetur cum cumque dignissimos--}}
        {{--                                    doloremque dolores eos exercitationem facere facilis incidunt labore minus nisi--}}
        {{--                                    odit--}}
        {{--                                    perferendis quaerat quod, reiciendis sequi, unde velit voluptates voluptatibus!--}}
        {{--                                </div>--}}
        {{--                                <div>A ab alias aliquid animi aut, consectetur cumque debitis delectus, dolorem--}}
        {{--                                    dolores--}}
        {{--                                    doloribus eligendi esse ex, facere id laborum nesciunt numquam pariatur--}}
        {{--                                    provident--}}
        {{--                                    quis quod repellendus repudiandae similique tempora unde.--}}
        {{--                                </div>--}}
        {{--                                <div>Aliquid animi blanditiis eos ex in modi perferendis recusandae voluptas.--}}
        {{--                                    Adipisci--}}
        {{--                                    blanditiis cumque earum est id ipsa nisi quia! Enim facere illo libero magnam--}}
        {{--                                    molestias placeat quidem reiciendis tempora temporibus?--}}
        {{--                                </div>--}}
        {{--                                <div>Beatae dolorem earum fugiat inventore ipsam natus quidem! Assumenda dolor fuga--}}
        {{--                                    necessitatibus odit omnis repellendus! Ad aperiam at cum, dolore enim eveniet--}}
        {{--                                    exercitationem hic illum laboriosam minus officiis quia voluptatum?--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="modal-footer">--}}
        {{--                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cerrar--}}
        {{--                        </button>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </div>

@endsection
