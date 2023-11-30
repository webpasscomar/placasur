<div>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Galeria - Slide de Imágenes</h3>
            </div>
            <div class="col-md-4 text-right">
                <button wire:click="create" class="btn btn-success" data-toggle="modal" data-target="#roleModal"><i
                        class="fas fa-plus-circle mr-2" style="color: white;"></i>Agregar</button>
            </div>
        </div>

        <table class="table table-hover table-striped  table-bordered mt-3 datatable" id="miTabla">
            <thead>
                <tr>
                    <th>COD</th>
                    <th>Título</th>
                    <th>Imágen</th>
                    <th style="width: 10%">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filas as $fila)
                    <tr>
                        <td>{{ $fila->id }}</td>
                        <td>{{ $fila->galeria }}</td>
                        <td>{{ $fila->imagen }}</td>
                        <td class="p-1 text-center">
                            <button wire:click="edit({{ $fila->id }})" class="btn btn-sm btn-primary"
                                data-toggle="modal" data-target="#roleModal" title="Editar"><i
                                    class="fa fa-edit"></i></button>
                            <button wire:click="$emit('alertDelete',{{ $fila->id }})" class="btn btn-sm btn-danger"
                                title="Eliminar"><i class="fas fa-trash-alt" style="color: white "></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    @if ($modal == 'block')
        <!-- Role Form Modal -->
        @include('livewire.admin.galerias-form')
    @endif

 </div>
