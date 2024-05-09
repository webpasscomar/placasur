{{-- Altura de textarea ckEditor 5 --}}
<style>
    .ck-editor__editable {
        min-height: 120px;
    }
</style>


<div class="modal fade show" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel"
    aria-hidden="true" style="display: {{ $showModal }}; background-color:rgba(51,51,51,0.9);">

    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3332;">
                <h5 class="modal-title" id="roleModalLabel">
                    Novedades
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Mostar spinner mientras carga la imagen --}}

                <div class="d-flex justify-content-center">
                    <div class="spinner-border text-primary" role="status" wire:loading wire:target='image'>
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

                {{-- ******************************* --}}
                <div class="form-group">
                    @if ($changeImg)
                    @if (gettype($image) === 'object')
                    @if ($image->extension() == 'png' || $image->extension() == 'jpg' || $image->extension() == 'jpeg')
                    <img class="img-fluid img-thumbnail" src="{{ $image->temporaryUrl() }}">
                    @endif
                    @endif
                    @else
                    @if ($action === 'edit')
                    <img class="img-fluid img-thumbnail"
                        src="{{ file_exists(public_path('storage/novedades/' . $image)) ? asset('storage/novedades/' . $image) : asset('img/no_disponible.png') }}"
                        alt="">
                    @endif
                    @endif
                </div>


                <div class="form-group">
                    <label for="name">Título</label><span class="ms-1 text-danger fs-6 fw-semibold">*</span>
                    <input type="text" class="form-control" wire:model="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" wire:ignore>
                    <label for="description">Descripción</label><span class="ms-1 text-danger fs-6 fw-semibold">*</span>
                    <textarea class="ckeditor" wire:model="description" id="edit"></textarea>
                </div>
                @error('description')
                <span class="text-danger d-block mb-2">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="category_id">Categoria</label><span class="ms-1 text-danger fs-6 fw-semibold">*</span>
                    <select wire:model="category_id" id="category_id" class="form-select">
                        <option value="">Seleccione una categoria</option>
                        @foreach ($novelties_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="order">Orden</label>
                        <input type="number" class="form-control" min="0" wire:model="order"
                            value="{{ old('order') }}" />
                        @error('order')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-10">
                        <label for="image" class="custom-file-upload">Imágen</label><span
                            class="ms-1 text-danger fs-6 fw-semibold">*</span>
                        <span id="file-name"></span>
                        <input type="file" id="image" class="form-control" wire:model="image"
                            wire:change="cambioImagen" />
                        <p class="fw-normal text-secondary text-right text_recommended-img me-1">se recomienda imágen
                            jpg ó
                            png
                            de (300px x 200px)
                        </p>
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-dismiss="modal">Cerrar
                </button>
                @if ($action == 'create')
                <button wire:click="store" class="btn btn-primary">Guardar</button>
                @elseif($action == 'edit')
                <button wire:click="store" class="btn btn-primary">Actualizar</button>
                @endif
            </div>
        </div>
    </div>

    {{-- Para utilizar CK Editor en descripción --}}

    <script>
        ClassicEditor
            .create(document.querySelector('#edit'), {
                toolbar: {
                    items: [
                        'undo', 'redo',
                        '|', 'heading',
                        '|', 'bold', 'italic',
                        '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
                    ],
                    shouldNotGroupWhenFull: false,
                }
            })
            .then((editor) => {
                editor.model.document.on('change:data', () => {
                    @this.
                    set('description', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        {{-- document.addEventListener('ckEditor', () => { --}}
        {{--    ClassicEditor --}}
        {{--        .create(document.querySelector('#edit'), { --}}
        {{--            toolbar: { --}}
        {{--                items: [ --}}
        {{--                    'undo', 'redo', --}}
        {{--                    '|', 'heading', --}}
        {{--                    '|', 'bold', 'italic', --}}
        {{--                    '|', 'bulletedList', 'numberedList', 'outdent', 'indent' --}}
        {{--                ], --}}
        {{--                shouldNotGroupWhenFull: false, --}}
        {{--            } --}}
        {{--        }) --}}
        {{--        .then((editor) => { --}}
        {{--            editor.model.document.on('change:data', () => { --}}
        {{--                @this. --}}
        {{--                set('description', editor.getData()) --}}
        {{--            }) --}}
        {{--        }) --}}
        {{--        .catch(error => { --}}
        {{--            console.error(error); --}}
        {{--        }); --}}
        {{-- }); --}}
    </script>

</div>