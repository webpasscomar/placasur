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

        <table class="table table-hover table-striped table-bordered mt-3 datatable" id="miTabla">
            <thead>
                <tr class="text-center">
                    <th>COD</th>
                    <th>Título</th>
                    <th>Imágen</th>
                    <th>Estado</th>
                    <th style="width: 15%">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filas as $key => $fila)
                    <tr>
                        <td class="align-middle text-center">{{ $fila->id }}</td>
                        <td class="align-middle">{{ $fila->galeria }}</td>
                        <td class="text-center align-middle" style="cursor: pointer"
                            wire:click="openModalImage({{ $fila->id }})"><img
                                src="{{ asset('storage/galerias/' . $fila->imagen) }}" alt="{{ $fila->galeria }}"
                                width="30" height="40" />
                        </td>
                        <td class="align-middle text-center">
                            <div class="mt-1">
                                <livewire:toggle-button :model="$fila" field="estado" key="{{ $fila->id }}" />
                            </div>
                        </td>
                        <td class="p-1 text-center align-middle">
                            <button wire:click="edit({{ $fila->id }})" class="btn btn-sm btn-primary"
                                data-toggle="modal" data-target="#roleModal" title="Editar"><i
                                    class="fa fa-edit"></i></button>
                            <button wire:click="$emit('alertDelete',{{ $fila->id }})" class="btn btn-sm btn-danger"
                                title="Eliminar"><i class="fas fa-trash-alt" style="color: white "></i></button>
                        </td>
                    </tr>
                    @if ($showModalImage)
                        {{-- Mostrar modal de imagén amliada --}}
                        <x-modal-image image="{{ asset('storage/galerias/' . $currentImage) }}"
                            title="{{ $fila->galeria }}" imageId="{{ $key }}" />
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>

    @if ($modal == 'block')
        <!-- Role Form Modal -->
        @include('livewire.admin.galerias-form')
    @endif

</div>
