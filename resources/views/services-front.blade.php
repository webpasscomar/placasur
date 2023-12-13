@section('title', 'Servicios')
@extends('layouts.canvas')

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
            <!-- estacionamiento -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/estacionamiento.jpg" class="card-img-top" alt="Estacionamiento">                        
                        <div class="overlay bg-gradient">
                        Contamos con amplio estacionamiento y seguridad privada
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Estacionamiento</p>
                </div>
            </div>            
            <!-- cotizaciones -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/asistencia.jpg" class="card-img-top" alt="Cotizaciones y pedidos">                        
                        <div class="overlay bg-gradient">
                        Realizamos cotizaciones sin costo de todos tus proyectos
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Cotizaciones y pedidos</p>
                </div>
            </div>            
            <!-- showroom -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/showroom.jpg" class="card-img-top" alt="Nuestro showroom">                        
                        <div class="overlay bg-gradient">
                        Nuestro showroom cuenta con una gran variedad de marcas y productos
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Showroom</p>
                </div>
            </div>
            <!-- asistencia -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/asistencia.jpg" class="card-img-top" alt="Asistencia técnica">                        
                        <div class="overlay bg-gradient">
                        Contamos con personal capacitado para asesorarte en cada rubro
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Asistencia técnica</p>
                </div>
            </div>     
            <!-- cortes -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/cortes.jpg" class="card-img-top" alt="Cortes a medida">                        
                        <div class="overlay bg-gradient">
                        Maquinas de última generación y un sistema que optimiza los cortes aseguran el mejor resultado en tus cortes
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Cortes a medida</p>
                </div>
            </div>       
            <!-- pegado cantos -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/pegado.jpg" class="card-img-top" alt="Pegado de cantos">                        
                        <div class="overlay bg-gradient">
                        Variedad de cantos y pegado. Te llevas tus placas listas para armar
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Pegado de cantos</p>
                </div>
            </div>               
            <!-- entregas -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/entregas.jpg" class="card-img-top" alt="Entregas sin cargo">                        
                        <div class="overlay bg-gradient">
                        Contamos con amplia flota de vehículos para facilitar tu trabajo y optimizar tus tiempos
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Entregas sin cargo</p>
                </div>
            </div>               
            <!-- stock -->
            <div class="col-sm-12 col-md-3 mb-3"> 
                <div class="slide-up">
                    <div class="boxhover shadow">                    
                    <img src="imagenes/servicios/stock.jpg" class="card-img-top" alt="Stock permanente">                        
                        <div class="overlay bg-gradient">
                        Contamos con stock y variedad p/ abastecer la distribución
                        </div>
                    </div>
                </div>
                <div class="border-0 border-top border-5 border-primary py-2">
                    <p class="h5 fw-semibold">Stock permanente</p>
                </div>
            </div>                  
        </div>
    </div>
    <!-- fin card servicios -->
@endsection
