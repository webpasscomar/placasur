<div class="modal fade show" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true"
    style="display: {{ $muestraModal }}; background-color:rgba(51,51,51,0.9);">
    {{-- <div class="modal" tabindex="-1" role="dialog" wire:ignore.self> --}}

    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3332;">
                <h5 class="modal-title" id="roleModalLabel">
                    @if ($user_id)
                        Editar usuario
                    @else
                        Crear usuario
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label class="sr-only" for="lastname">Apellido <small class="text-danger">
                                    *</small></label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Apellido <span class="text-danger"> *</span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="lastname" id="lastname"
                                    wire:model="lastname">

                            </div>
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 mb-2">
                            <label class="sr-only" for="name">Nombre <small class="text-danger">
                                    *</small></label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Nombre <span class="text-danger"> *</span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="name" id="name"
                                    wire:model="name">

                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 mb-2">
                            <label class="sr-only" for="email">E-mail <small class="text-danger">
                                    *</small></label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">E-mail <span class="text-danger"> *</span>
                                    </div>
                                </div>
                                <input type="mail" class="form-control" name="email" id="email"
                                    wire:model="email">

                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="col-6 mb-2">
                            <label class="sr-only" for="rol">Rol</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rol
                                    </div>
                                </div>
                                <select class="form-control" id="rol" aria-label="Default select example"
                                    name="rol" wire:model="rol">
                                    <option selected>Seleccione un rol</option>
                                    @foreach ($roles as $rol)
                                        <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            @error('rol')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>




                        <div class="col-6 mb-2">
                            <label class="sr-only" for="password">Contraseña</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Contraseña <span class="text-danger">
                                            *</span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" name="password" wire:model="password">
                            </div>
                            @error('repassword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-6 mb-2">
                            <label class="sr-only" for="repassword">Repetir contraseña</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Repetir contraseña <span class="text-danger"> *</span>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="repassword" name="repassword"
                                    wire:model="password">
                            </div>
                            @error('repassword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary"
                    data-dismiss="modal">Cerrar</button>
                @if ($user_id !== 0)
                    <button wire:click="store" class="btn btn-primary">Actualizar</button>
                @else
                    <button wire:click="store" class="btn btn-primary">Guardar</button>
                @endif
            </div>
        </div>
    </div>
</div>
