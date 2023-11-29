<div class="modal fade show" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true"
  style="display: {{ $modal }}">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLabel">Productos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form>

          <div class="bg-white">

            <div class="form-group">
              @if ($cambioImg)
                @if (gettype($image) === 'object')
                  @if ($image->extension() == 'png' || $image->extension() == 'jpg' || $image->extension() == 'jpeg')
                    <img class="img-fluid img-thumbnail" src="{{ $image->temporaryUrl() }}">
                  @endif
                @endif
              @else
                @if ($accion === 'editar')
                  <img class="img-fluid img-thumbnail" src="{{ asset('storage/categorias/' . $image) }}" alt="">
                @endif
              @endif
            </div>


            {{-- <div class="form-group">
              <label for="categoriaPadre_id">Categoría
                padre:</label>
              <select class="form-control" wire:model="categoriaPadre_id">

                <option value="0">Sin categoría padre</option>
                @foreach ($categoriasAnt as $item)
                  <option value="{{ $item->id }}">{{ $item->categoria }}</option>
                @endforeach
              </select>
            </div> --}}

            <div class="row">
              <div class="form-group col">
                <label for="title">Nombre:</label>
                <input type="text" class="form-control" id="title" wire:model="title">

                @error('title')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group col">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" wire:model="slug">
              </div>
            </div>

            <div class="form-group">
              <label for="description">Descripción:</label>
              <textarea rows="2" class="form-control" id="description" wire:model="description"></textarea>
            </div>

            <div class="row">

              <div class="form-group col">
                <label for="order">Orden:</label>
                <input type="number" class="form-control" id="order" wire:model="order">
              </div>

            </div>

            <div class="form-group">
              <label for="image">Foto:</label>
              <input type="file" id="image" wire:model="image" wire:change="changeImage">
              @error('image')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>


          </div>
        </form>

      </div>

      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button wire:click="store" class="btn btn-primary">Guardar</button>
      </div>

    </div>

  </div>

</div>
