    <div>

        {{-- @section('title', $title) --}}

        {{-- Stop trying to control. --}}
        <div class="container mt-4">
            <div class="row mb-3">
                <div class="col-md-8">
                    <h3>Productos</h3>
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
                    <tr class="text-center">
                        <th>COD</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th style="width: 15%">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $key => $row)
                        <tr>
                            <td class="text-center align-middle">{{ $row->id }}</td>
                            <td class="text-center align-middle" style="cursor: pointer"
                                wire:click="openModalImage({{ $row->id }})"><img
                                    src="{{ asset('storage/productos/' . $row->image) }}" alt="{{ $row->title }}"
                                    width="30" height="40"></td>

                            <td class="align-middle">{{ $row->title }}</td>
                            <td class="align-middle">{{ $row->category->categoria }}</td>
                            <td class="align-middle">{{ $row->description }}</td>
                            <td class="align-middle text-center">
                                <div class="mt-1">
                                    <livewire:toggle-button :model="$row" field="status"
                                        key="{{ $row->id }}" />
                                </div>
                            </td>
                            <td class="p-1 text-center align-middle">
                                <button wire:click="edit({{ $row->id }})" class="btn btn-sm btn-primary"
                                    data-toggle="modal" data-target="#roleModal" title="Editar"><i
                                        class="fa fa-edit"></i></button>
                                <button wire:click="$emit('alertDelete',{{ $row->id }})"
                                    class="btn btn-sm btn-danger" title="Eliminar"><i class="fas fa-trash-alt"
                                        style="color: white "></i></button>
                            </td>
                        </tr>
                        @if ($showModalImage)
                            {{-- Mostrar modal de imagén amliada --}}
                            <x-modal-image image="{{ asset('storage/productos/' . $currentImage) }}"
                                title="{{ $row->title }}" imageId="{{ $key }}" />
                        @endif
                    @endforeach
                </tbody>
            </table>

        </div>

        @if ($modal == 'block')
            <!-- Role Form Modal -->
            @include('livewire.admin.products-form')
        @endif

    </div>
