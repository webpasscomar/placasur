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
        <p>La empresa cuenta con un Plantel de 10 Personas en el área de Calidad, Administración, Recepción, Despacho y
          Producción.</p>
        <p>Cuenta además con un personal Tercerizado Responsable del Mantenimiento del Sistema de Gestión Certificado y
          personal tercerizado responsable del mantenimiento Preventivo del Taller.</p>
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
        <small>Proveer al mercado nacional herrajes de la más alta calidad y mayor valor agregado posible para poder
          obtener la máxima satisfacción de nuestros clientes.</small>
      </div>

      <hr class="border border-primary my-4 w-75 mx-auto d-lg-none d-sm-block">
      <!-- <div class="vr border-end border-1 border-primary bg-white m-0 p-0 d-none d-sm-none d-md-block"></div> -->

      <div class="col-md-4 border-start border-end border-primary">
        <img src="{{ asset('img/empresa/vision.png') }}" class="mb-3 shadow rounded-circle" alt="Nuestra visión">
        <h4 class="h5 text-primary bold">Visión</h4>
        <small>Constituirnos en la empresa Líder del mercado del Herrajes Argentinos, estando siempre a la vanguardia de
          la moda en nuestros constantes desarrollos.</small>
      </div>

      <hr class="border border-primary my-4 w-75 mx-auto d-lg-none d-sm-block">
      <!-- <div class="vr border-end border-1 border-primary bg-white m-0 p-0 d-none d-sm-none d-md-block"></div> -->

      <div class="col-md-4">
        <img src="{{ asset('img/empresa/calidad.png') }}" class="mb-3 shadow rounded-circle"
          alt="Calidad de nuestros productos">
        <h4 class="h5 text-primary bold">Calidad</h4>
        <small>Realizamos trabajos de urgencia de ser necesario fines de semana o nocturnos para su mejor eficiencia en la
          producción.</small>
      </div>
    </div>
  </div>



@endsection
