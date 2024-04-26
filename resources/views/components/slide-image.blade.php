<div class="container">
    <div class="slider">
        <div class="slide-track">
            @foreach ($images as $image)
                {{-- Mostrar solo las imagenes de marcas que existe el archivo --}}
                @if (file_exists(public_path('storage/marcas/' . $image->imagen)))
                    <div class="slide">
                        <img src="{{ asset('storage/marcas/' . $image->imagen) }}" class="mx-md-4 mx-0"
                            alt="{{ $image->marca }}" />
                    </div>
                @endif
            @endforeach

            @for ($i = count($images); $i < 15; $i++)
                <img src="{{ asset('storage/marcas/' . $images[$i % count($images)]->imagen) }}" class="mx-md-4 mx-0"
                    alt="{{ $images[$i % count($images)]->marca }}" />
            @endfor
        </div>
    </div>
</div>
