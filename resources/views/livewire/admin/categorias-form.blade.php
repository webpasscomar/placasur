<div class="modal fade show" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true"
  style="display: {{ $modal }}">

  <div class="modal-dialog modal-md" role="document">

    <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="roleModalLabel">Categorías</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="cerrarModal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form>

          <div class="bg-white">

            <div class="form-group">
              @if ($cambioImg)
                @if (gettype($imagen) === 'object')
                  @if ($imagen->extension() == 'png' || $imagen->extension() == 'jpg' || $imagen->extension() == 'jpeg')
                    <img class="img-fluid img-thumbnail" src="{{ $imagen->temporaryUrl() }}">
                  @endif
                @endif
              @else
                @if ($accion === 'editar')
                  <img class="img-fluid img-thumbnail" src="{{ asset('storage/categorias/' . $imagen) }}"
                    alt="">
                @endif
              @endif
            </div>


            <div class="row">

              <div class="form-group col">
                <label for="categoriaPadre_id">Categoría
                  padre:</label>
                <select class="form-control" wire:model="categoriaPadre_id">
                  <option value="0">Sin categoría padre</option>
                  @foreach ($categoriasAnt as $item)
                    <option value="{{ $item->id }}">{{ $item->categoria }}</option>
                  @endforeach
                </select>
              </div>


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

              <div class="form-group col-8">
                <label for="imagen" class="custom-file-upload ">
                  Imagen
                </label>

                <span id="file-name"></span>
                <input type="file" id="imagen" wire:model="imagen" wire:change="cambioImagen" class="btn">

                @error('imagen')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>


              <div class="form-group col-2">
                <label for="menu">Menú</label><br>
                <select class="form-control" wire:model="menu">
                  <option value="0">No</option>
                  <option value="1">Si</option>

                </select>
              </div>


              <div class="form-group col-2">
                <label for="orden">Orden:</label>
                <input type="number" class="form-control" id="orden" wire:model="orden">
              </div>

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
