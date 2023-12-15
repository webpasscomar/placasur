@section('title', 'Novedades')

<div>
    <h1>Novedades</h1>
    <div class="row">
        <div class="col-md-12 text-right">
            <button class="btn btn-success" wire:click="create"><i class="fas fa-plus-circle mr-2"
                    style="color: white;"></i>Agregar Novedad</button>
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
                        @foreach ($novelties as $key => $novelty)
                            <tr>
                                <td class="align-middle text-center" scope="row">{{ $novelty->id }}</td>
                                <td class="align-middle text-center" style="cursor: pointer"
                                    wire:click="openModalImage({{ $novelty->id }})"><img
                                        src="{{ asset('storage/servicios/' . $novelty->image) }}"
                                        alt="{{ $novelty->title }}" width="30" height="40" />
                                </td>
                                <td>{{ $novelty->title }}</td>
                                <td>@php echo $novelty->description @endphp </td>
                                <td>{{ $novelty->order }}</td>
                                <td class="align-middle text-center"><livewire:toggle-button :model="$novelty"
                                        field="status" key="{{ $novelty->id }}">
                                </td>
                                <td class="d-flex justify-content-end gap-2">
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
                                <x-modal-image image="{{ asset('storage/servicios/' . $currentImage) }}"
                                    title="{{ $novelty->title }}" imageId="{{ $key }}" />
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @if ($showModal === 'block')
        {{-- Novedades Modal Form   --}}
        @include('livewire.admin.novelties-form');
    @endif
</div>
