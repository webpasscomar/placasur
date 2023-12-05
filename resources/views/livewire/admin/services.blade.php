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
                                Imagen
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
                        @foreach ($services as $key => $service)
                            <tr>
                                <td class="align-middle text-center" scope="row">{{ $service->id }}</td>
                                <td class="align-middle text-center" style="cursor: pointer"
                                    wire:click="openModalImage({{ $service->id }})"><img
                                        src="{{ asset('storage/servicios/' . $service->image) }}"
                                        alt="{{ $service->title }}" width="30" height="40" />
                                </td>
                                <td>{{ $key }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->order }}</td>
                                <td class="align-middle text-center"><livewire:toggle-button :model="$service"
                                        field="status" key="{{ $service->id }}">
                                </td>
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
                            @if ($showModalImage)
                                {{-- Mostrar modal de imagén amliada --}}
                                <x-modal-image image="{{ asset('storage/servicios/' . $currentImage) }}"
                                    title="{{ $service->title }}" imageId="{{ $key }}" />
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @if ($showModal === 'block')
        {{-- Servicios Modal Form   --}}
        @include('livewire.admin.services-form');
    @endif
</div>
