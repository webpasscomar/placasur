@extends('layouts.canvas')

@section('content')
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

              @foreach ($categorias as $categoria)
                <p>{{ $categoria->categoria }}</p>
                <p>{{ $categoria->descripcion }}</p>
                <p><img src="{{ asset('storage/categorias/' . $categoria->imagen) }}" alt="{{ $categoria->categoria }}"></p>
              @endforeach


              <div class="clear"></div>



            </div>
          </div><!-- .entry end -->



        </div>

      </div>

  </section><!-- #content end -->
@endsection
