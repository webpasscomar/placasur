<div class="modal fade show" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true"
  style="display: {{ $modal }}">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLabel">Categorías</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="cerrarModal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form>

          <div class="bg-white">


            <div class="form-group">
              <label for="categoriaPadre_id">Categoría
                padre:</label>
              <select class="form-control" wire:model="categoriaPadre_id">

                <option value="0">Sin categoría padre</option>
                @foreach ($categoriasAnt as $item)
                  <option value="{{ $item->id }}">{{ $item->categoria }}</option>
                @endforeach
              </select>
            </div>

            <div class="row">
              <div class="form-group col">
                <label for="categoria">Nombre:</label>
                <input type="text" class="form-control" id="categoria" wire:model="categoria">

                @error('categoria')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group col">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" wire:model="slug">
              </div>
            </div>

            <div class="form-group">
              <label for="descripcion">Descripción:</label>
              <textarea rows="2" class="form-control" id="descripcion" wire:model="descripcion"></textarea>
            </div>

            <div class="row">

              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="" id="menu" wire:model="menu">
                <label class="form-check-label" for="menu">
                  Menú principal
                </label>
              </div>

              <div class="form-group col">
                <label for="orden">Orden interno:</label>
                <input type="number" class="form-control" id="orden" wire:model="orden">
              </div>

            </div>

            <div class="form-group">
              <label for="imagen">Imagen:</label>
              <input type="file" id="imagen" wire:model="imagen" wire:change="cambioImagen">
              @error('imagen')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>


            <div class="form-group">
              @if ($cambioImg)
                @if (gettype($imagen) === 'object')
                  @if ($imagen->extension() == 'png' || $imagen->extension() == 'jpg' || $imagen->extension() == 'jpeg')
                    <img class="h-20 w-20" src="{{ $imagen->temporaryUrl() }}">
                  @endif
                @endif
              @else
                @if ($accion === 'editar')
                  <img class="h-20 w-20" src="{{ asset('storage/categorias/' . $imagen) }}" alt="">
                  <p>{{ asset('storage/categorias/' . $imagen) }}</p>
                  {{-- <img src="{{ asset('storage/categorias/' . $categoria->imagen) }}" alt="{{ $categoria->categoria }}" 
                    class="w-full h-64 object-cover"> --}}
                  <p>{{ var_dump($imagen_name) }}</p>
                @endif
              @endif
            </div>

          </div>
        </form>

      </div>

      <div class="modal-footer">
        <button type="button" wire:click="cerrarModal" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button wire:click="store" class="btn btn-primary">Guardar</button>
      </div>

    </div>

  </div>

</div>
