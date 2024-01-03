<div class="modal fade show" id="roleModalRole" tabindex="-1" role="dialog" aria-labelledby="roleModalRoleLabel"
    aria-hidden="true" style="display: {{ $muestraModalRole }}; background-color:rgba(51,51,51,0.9);">
    {{-- <div class="modal" tabindex="-1" role="dialog" wire:ignore.self> --}}

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3332;">
                <h5 class="modal-title" id="roleModalLabel">
                    Crear Nuevo Role
                </h5>
            </div>
            <div class="modal-body">

                <label>Role <span class="text-danger">*</span></label>
                <select class="form-control" id="user_rol_id" wire:model="user_rol_id">
                    <option value="0">
                        Seleccione un Role
                    </option>
                    @if ($roles)
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('user_rol_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModalRole" class="btn btn-secondary"
                    data-dismiss="modal">Cerrar</button>
                <button wire:click="storeRole" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
