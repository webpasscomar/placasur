@section('title', 'Admin Marcas')
<div>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-8 col-6 mt-4">
                <h3>Marcas</h3>
            </div>
            <div class="col-md-4 col-6 mt-3 mt-md-4 text-right">
                <button wire:click="create" class="btn btn-success" data-toggle="modal" data-target="#roleModal"><i
                        class="fas fa-plus-circle mr-2" style="color: white;"></i>Agregar
                </button>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered mt-3 datatable" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">COD</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Marca</th>
                            <th scope="col" class="text-center" style="width: 15%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $key => $marca)
                            <tr>
                                <th scope="row" class="align-middle">{{ $marca->id }}</th>
                                <td class="align-middle" style="cursor: pointer"
                                    wire:click="openModalImage({{ $marca->id }})"><img
                                        src="{{ file_exists(public_path('storage/marcas/' . $marca->imagen)) ? asset('storage/marcas/' . $marca->imagen) : asset('img/no_disponible.png') }}"
                                        alt="{{ $marca->marca }}" width="40" height="40" />
                                </td>
                                <td class="align-middle">
                                    {{ strtoupper(substr($marca->marca, 0, 1)) . substr($marca->marca, 1) }}</td>
                                <td class="align-middle">
                                    <div class="d-flex flex-md-row gap-1 justify-content-evenly">
                                        <div class="m-1 mt-3">
                                            <livewire:toggle-button :model="$marca" field="estado"
                                                key="{{ $marca->id }}" />
                                        </div>
                                        <button wire:click="edit({{ $marca->id }})"
                                            class="btn btn-sm btn-primary m-1" data-toggle="modal"
                                            data-target="#roleModal" title="Editar"><i class="fa fa-edit"></i></button>
                                        <button wire:click="$emit('alertDelete',{{ $marca->id }})"
                                            class="btn btn-sm btn-danger m-1" title="Eliminar"><i
                                                class="fas fa-trash-alt" style="color: white "></i></button>
                                    </div>
                                </td>
                            </tr>
                            @if ($showModalImage)
                                {{-- Mostrar modal de imagén amliada --}}
                                <x-modal-image
                                    image="{{ file_exists(public_path('storage/marcas/' . $currentImage)) ? asset('storage/marcas/' . $currentImage) : asset('img/no_disponible.png') }}"
                                    title="{{ substr(strtoupper($currentTitle), 0, 1) . substr($currentTitle, 1) }}"
                                    imageId="{{ $key }}" />
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($modal == 'block')
        <!-- Role Form Modal -->
        @include('livewire.admin.marcas-form')
    @endif

</div>
