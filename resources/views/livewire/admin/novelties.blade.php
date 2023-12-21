@section('title', 'Novedades')

<div>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Novedades</h3>
            </div>
            <div class="col-md-4 text-right">
                <button wire:click="create" class="btn btn-success" data-toggle="modal" data-target="#roleModal"><i
                        class="fas fa-plus-circle mr-2" style="color: white;"></i>Agregar</button>
            </div>
        </div>

        <table class="table table-hover table-bordered mt-3 datatable" id="noveltiesTable">
            <thead>
                <tr class="text-center">
                    <th>
                        COD
                    </th>
                    <th>
                        Imagen
                    </th>
                    <th>
                        Titulo
                    </th>
                    <th>
                        Descripción </th>
                    <th>
                        Orden
                    </th>
                    <th>
                        Estado
                    </th>
                    <th style="width: 15%">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($novelties as $key => $novelty)
                    <tr>
                        <td class="align-middle text-center" scope="row">{{ $novelty->id }}</td>
                        <td class="align-middle text-center" style="cursor: pointer"
                            wire:click="openModalImage({{ $novelty->id }})"><img
                                src="{{ asset('storage/novedades/' . $novelty->image) }}" alt="{{ $novelty->title }}"
                                width="30" height="40" />
                        </td>
                        <td class="align-middle">{{ $novelty->title }}</td>
                        <td class="align-middle">@php echo $novelty->description @endphp</td>
                        <td class="align-middle text-center">{{ $novelty->order }}</td>
                        <td class="align-middle text-center">
                            <div class="mt-1">
                                <livewire:toggle-button :model="$novelty" field="status" key="{{ $novelty->id }}" />
                            </div>
                        </td>
                        <td class="p-1 text-center align-middle">
                            <button class="btn btn-sm btn-primary" title="Editar"
                                wire:click="edit({{ $novelty->id }})">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" title="Eliminar"
                                wire:click="$emit('alertDelete',{{ $novelty->id }})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @if ($showModalImage)
                        {{-- Mostrar modal de imagén amliada --}}
                        <x-modal-image image="{{ asset('storage/novedades/' . $currentImage) }}"
                            title="{{ $novelty->title }}" imageId="{{ $key }}" />
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>


    @if ($showModal === 'block')
        {{-- Novedades Modal Form   --}}
        @include('livewire.admin.novelties-form');
    @endif
</div>
