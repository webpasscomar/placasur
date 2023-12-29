    <div>
        {{-- The Master doesn't talk, he acts. --}}
        <div class="container mt-4">
            <div class="row mb-3">
                <div class="col-md-8">
                    <h3>Categorías</h3>
                </div>
                <div class="col-md-4 text-right">
                    <button wire:click="create" class="btn btn-success" data-toggle="modal" data-target="#roleModal"><i
                            class="fas fa-plus-circle mr-2" style="color: white;"></i>Agregar</button>
                </div>
            </div>

            <!-- Roles Table -->
            {{-- <h1>Cantidad {{ $cantidad }}</h1> --}}
            <table class="table table-hover table-bordered mt-3 datatable" id="myTable">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>
                            Imagen
                        </th>
                        <th>Categoria</th>
                        <th>Slug</th>
                        <th>
                            Orden
                        </th>
                        <th class="text-center" style="width: 15%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($filas as $key => $fila)
                        <tr>
                            <td class="align-middle">{{ $fila->id }}</td>
                            <td class="align-middle" style="cursor: pointer"
                                wire:click="openModalImage({{ $fila->id }})"><img
                                    src="{{ asset('storage/categorias/' . $fila->imagen) }}"
                                    alt="{{ $fila->categoria }}" width="40" height="40" />
                            </td>
                            <td class="align-middle">{{ $fila->categoria }}</td>
                            <td class="align-middle">{{ $fila->slug }}</td>
                            <td class="align-middle">{{ $fila->orden }}</td>
                            <td class="align-middle">
                                <div class="d-flex justify-content-evenly">
                                    <div class="mt-2">
                                        <livewire:toggle-button :model="$fila" field="estado"
                                            key="{{ $fila->id }}" />
                                    </div>
                                    <button wire:click="edit({{ $fila->id }})" class="btn btn-sm btn-primary"
                                        data-toggle="modal" data-target="#roleModal" title="Editar"><i
                                            class="fa fa-edit"></i></button>
                                    <button wire:click="$emit('alertDelete',{{ $fila->id }})"
                                        class="btn btn-sm btn-danger" title="Eliminar"><i class="fas fa-trash-alt"
                                            style="color: white "></i></button>
                                </div>
                            </td>
                        </tr>
                        @if ($showModalImage)
                            {{-- Mostrar modal de imagén amliada --}}
                            <x-modal-image image="{{ asset('storage/categorias/' . $currentImage) }}"
                                title="{{ $currentTitle }}" imageId="{{ $key }}" />
                        @endif
                    @endforeach
                </tbody>
            </table>

        </div>

        @if ($modal == 'block')
            <!-- Role Form Modal -->
            @include('livewire.admin.categorias-form')
        @endif
    </div>
