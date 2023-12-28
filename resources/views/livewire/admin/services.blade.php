@section('title', 'Servicios')

<div>
    <div class="container mt-4">

        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Servicios</h3>
            </div>
            <div class="col-md-4 text-right">
                <button wire:click="create" class="btn btn-success" data-toggle="modal" data-target="#roleModal"><i
                        class="fas fa-plus-circle mr-2" style="color: white;"></i>Agregar</button>
            </div>
        </div>
        <table class="table table-hover table-bordered mt-3 datatable" id="myTable">
            <thead>
                <tr>
                    <th class="text-center">
                        COD
                    </th>
                    <th>
                        Imagen
                    </th>
                    <th class="text-center">
                        Titulo
                    </th>
                    <th class="text-center">
                        Descripción </th>
                    <th class="text-center">
                        Orden
                    </th>
                    <th class="text-center">
                        Estado
                    </th>
                    <th class="text-center" style="width: 15%">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $key => $service)
                    <tr>
                        <td class="align-middle text-center">{{ $service->id }}</td>
                        <td class="text-center align-middle" style="cursor: pointer"
                            wire:click="openModalImage({{ $service->id }})"><img
                                src="{{ asset('storage/servicios/' . $service->image) }}" alt="{{ $service->title }}"
                                width="40" height="40" />
                        </td>
                        <td class="align-middle">{{ $service->title }}</td>
                        <td class="align-middle">{{ $service->description }}</td>
                        <td class="align-middle text-center">{{ $service->order }}</td>
                        <td class="align-middle text-center">
                            <div class="mt-1">
                                <livewire:toggle-button :model="$service" field="status" key="{{ $service->id }}" />
                            </div>
                        </td>
                        <td class="p-1 text-center align-middle">
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
                    @if ($showModalImage)
                        {{-- Mostrar modal de imagén amliada --}}
                        <x-modal-image image="{{ asset('storage/servicios/' . $currentImage) }}"
                            title="{{ $currentTitle }}" imageId="{{ $key }}" />
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>


    @if ($showModal === 'block')
        {{-- Servicios Modal Form   --}}
        @include('livewire.admin.services-form');
    @endif
</div>
