@section('title', 'Servicios')

<div>
    <h1>Servicios</h1>
    <div class="row">
        <div class="col-md-12 text-right">
            <button class="btn btn-success" wire:click="create"><i class="fas fa-plus-circle mr-2"
                    style="color: white;"></i>Agregar Servicio</button>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-bordered" id="servicesTable">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">
                                Id
                            </th>
                            <th scope="col">
                                Titulo
                            </th>
                            <th scope="col">
                                Descripción </th>
                            <th scope="col">
                                Orden
                            </th>
                            <th scope="col">
                                Estado
                            </th>
                            <th scope="col">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <th scope="row">{{ $service->id }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->order }}</td>
                                <td>{{ $service->status }}</td>
                                <td class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-primary" title="Editar"
                                        wire:click="edit({{ $service->id }})">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Eliminar"
                                        wire:click="$emit('alertDelete',{{ $service->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @if ($mostrarModal === 'block')
        <div class="modal fade show" id="serviceModalLabel" tabindex="-1" role="dialog"
            aria-labelledby="serviceModalLabel" aria-hidden="true" style="display: {{ $mostrarModal }}">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="roleModalLabel">
                            Nuevo
                        </h5>
                        <button type="button" class="close" data-dismiss="serviceModalLabel" aria-label="Close"
                            wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            @if ($cambioImg)
                              @if (gettype($image) === 'object')
                                @if ($image->extension() == 'png' || $image->extension() == 'jpg' || $image->extension() == 'jpeg')
                                  <img class="img-fluid img-thumbnail" src="{{ $image->temporaryUrl() }}">
                                @endif
                              @endif
                            @else
                              @if ($accion === 'editar')
                                <img class="img-fluid img-thumbnail" src="{{ asset('storage/servicios/' . $image) }}"
                                  alt="">
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
                            <label for="order">Orden</label>
                            <input type="number" class="form-control" wire:model="order" />
                            @error('order')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="statusS">Estado</label>
                            <input type="number" class="form-control" wire:model="status" />
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Imágen</label>
                            <input type="file" id="image"  class="form-control" wire:model="image" wire:change="cambioImagen" />
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
    @endif
</div>
