<div class="modal fade show" id="roleModal" tabindex="-1" role="dialog"
aria-labelledby="roleModalLabel" aria-hidden="true" style="display: {{ $mostrarModal }}">

<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="roleModalLabel">
                Nuevo
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                wire:click="closeModal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                @if ($cambioImg)
                    @if (gettype($image) === 'object')
                        @if ($image->extension() == 'png' || $image->extension() == 'jpg' || $image->extension() == 'jpeg')
                            <img class="img-fluid img-thumbnail" src="{{ $image->temporaryUrl() }}"
                                width="200">
                        @endif
                    @endif
                @else
                    @if ($accion === 'editar')
                        <img class="img-fluid img-thumbnail"
                            src="{{ asset('storage/servicios/' . $image) }}" alt="">
                    @endif
                @endif
            </div>


            <div class="form-group">
                <label for="name">Título</label>
                <input type="text" class="form-control" wire:model="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" wire:model="description"></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="orden">Orden</label>
                <input type="number" class="form-control" wire:model="orden" />
                @error('orden')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Estado</label>
                <input type="number" class="form-control" wire:model="status" />
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="custom-file-upload">Imágen</label>
                <span id="file-name"></span>

                <input type="file" id="image" class="btn" wire:model="image"
                    wire:change="cambioImagen" />
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" wire:click="closeModal" class="btn btn-secondary"
                data-dismiss="modal">Cerrar</button>
            @if ($accion == 'crear')
                <button wire:click="store" class="btn btn-primary">Guardar</button>
            @elseif($accion == 'editar')
                <button wire:click="store" class="btn btn-primary">Actualizar</button>
            @endif
        </div>
    </div>
</div>

</div>