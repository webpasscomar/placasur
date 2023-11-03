@extends('layouts.canvas')

@section('content')
  <section class="page-title dark" data-bs-theme="dark">
    <div class="container">
      <div class="page-title-row">

        <div class="page-title-content">
          {{-- <h1>{{ ucfirst(Route::currentRouteName()) }}</h1> --}}
          <span>{{ ucfirst(Route::currentRouteName()) }}</span>
        </div>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#">Templates</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
          </ol>
        </nav>

      </div>
    </div>
  </section>


  <!-- Content
                                      ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="container">

        <div class="single-post mb-0">

          <!-- Single Post
                                          ============================================= -->
          <div class="entry">

            <!-- Entry Title
                                           ============================================= -->
            <div class="entry-title">
              <h2>{{ Route::current()->getName() }}</h2>
            </div><!-- .entry-title end -->



            <!-- Entry Content
                                           ============================================= -->
            <div class="entry-content mt-0">

              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>
              <p>...</p>


              <div class="clear"></div>



            </div>
          </div><!-- .entry end -->



        </div>

      </div>

  </section><!-- #content end -->
@endsection
