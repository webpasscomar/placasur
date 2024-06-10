@extends('layouts.app')

@section('title', 'Empresa')

@section('content')

  <!-- jumbotrob / título productos -->
  <div class="container-fluid p-0">
    <div class="bg-light bg-gradient d-none d-lg-block d-sm-none">
      <div class="container pt-1">
        <nav class="mt-2" aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent px-0 py-2">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none link-primary">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Empresa</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>



  <div class="container-md mt-5 mb-3">
    <div class="row d-flex justify-content-between">
      <!-- texto empresa -->
      <div class="col-md-6">
        <h3 class="h2 bold text-black-50">Nuestra empresa</h3>
        <p>Fundada en 1996 acompañada con 50 años de experiencia en el rubro y tras muchos años de
          trabajo y esfuerzo, nuestra empresa fue creciendo paso a paso y de manera constante.</p>
        <p>Ediliciamente contamos con un amplio salón de exposición, depósitos sectorizados para
          herrajes, placas y cortes. Sumamos recientemente un área cubierta de carga y descarga,
          nuevos sistemas de almacenamiento, equipos y maquinaria con el fin de mejorar nuestro
          servicio de entrega.</p>
        <p>Trabajamos en la formación de nuestro personal de ventas y nuestros asesores, para que
            nuestros clientes carpinteros, arquitectos, constructores, público en general cuenten con el
            mejor asesoramiento sobre productos, tendencias, tecnologías y todo aquello que colabore a
            la construcción de sus proyectos.</p>
        <p> Nuestra empresa esta posicionada como un referente del rubro. La atención, el servicio, el
            compromiso y por supuesto la calidad es NUESTRO sello.</p>
      </div>

      <!-- fotos -->
      <div class="col-md-5 p-0 m-0 d-none d-md-block">
        {{-- <img src="{{ asset('img/empresa/empresa.png') }}" class="w-100" alt=""> --}}
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/DGIy4iyT-Uk" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!-- fin card servicios -->

    <!-- misión / visión / objetivos -->
    <div class="row mt-5 text-center bg-light py-3 rounded-4">
      <div class="col-md-4">
        <img src="{{ asset('img/empresa/mision.png') }}" class="mb-3 shadow rounded-circle" alt="Nuestra misión">
        <h4 class="h5 text-primary bold">Misión</h4>
        <p><small>Proveer al mercado productos y servicios diferenciados que ayuden a alcanzar sus
              aspiraciones.</small></p>
        <p><small>Potenciar cada detalle para llevar el diseño de sus proyectos a su mejor nivel.</small></p>
        <small>Trabajamos para mejorar la tecnología, las herramientas y equipo de ventas para brindar la
            mejor experiencia a nuestros clientes.</small>
      </div>

      <hr class="border border-primary my-4 w-75 mx-auto d-lg-none d-sm-block">
      <!-- <div class="vr border-end border-1 border-primary bg-white m-0 p-0 d-none d-sm-none d-md-block"></div> -->

      <div class="col-md-4 border-start border-end border-primary">
        <img src="{{ asset('img/empresa/vision.png') }}" class="mb-3 shadow rounded-circle" alt="Nuestra visión">
        <h4 class="h5 text-primary bold">Visión</h4>
        <p><small>Constituirnos como una empresa destacada por la calidad, el servicio y la responsabilidad.</small></p>
        <p><small>En nuestra búsqueda privilegiar el compromiso hacia el entendimiento y la cooperación con los
          gremios asociados.</small></p>
        <small>Ser ese socio estratégico que acompaña el crecimiento de nuestros clientes.</small>      
      </div>

      <hr class="border border-primary my-4 w-75 mx-auto d-lg-none d-sm-block">
      <!-- <div class="vr border-end border-1 border-primary bg-white m-0 p-0 d-none d-sm-none d-md-block"></div> -->

      <div class="col-md-4">
        <img src="{{ asset('img/empresa/calidad.png') }}" class="mb-3 shadow rounded-circle"
          alt="Calidad de nuestros productos">
        <h4 class="h5 text-primary bold">Valores</h4>
        <p><small>Queremos destacar nuestra responsabilidad social y comercial.</small></p> 
        <p><small>La innovación y creatividad en
          nuestros productos. </small></p>
        <small>La calidad y honestidad en lo comercial, siempre con el compromiso ético
          que nos caracterizó a lo largo de nuestra historia.</small>
      </div>
    </div>
  </div>



@endsection
