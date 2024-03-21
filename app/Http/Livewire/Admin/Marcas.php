<?php

namespace App\Http\Livewire\Admin;


use App\Models\Marca;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Marcas extends Component
{
    public $marca, $imagen, $estado, $id_marca, $currentImage, $currentTitle;
    public $imagen_name;

    public $modal = 'none';
    public $accion;
    public $cambioImg = false;
    public $showModalImage = false;

    protected $marcas;

    protected $listeners = ['delete', 'updateTable'];

    use WithPagination;
    use WithFileUploads;


    public function updateTable()
    {
        $this->emit('table');
    }

    protected function rules()
    {
        if (($this->cambioImg === true && $this->accion === 'editar') ||
            $this->accion === 'crear'
        ) {
            return [
                'marca' => 'required|max:100',
                'imagen' => 'required|mimes:jpg,png,jpeg|max:1024',
            ];
        } else {
            return [
                'marca' => 'required|max:100',
            ];
        }
    }

    protected function messages()
    {
        if ($this->accion == 'create') {
            return [
                'marca.required' => 'El nombre es requerido',
                'marca.max' => 'Solo puede ingresar hasta 100 caracteres',
                'imagen.required' => 'La imágen es requerida',
                'imagen.mimes' => 'Formatos permitidos: JPEG, PNG, JPG '
            ];
        } else {
            return [
                'marca.required' => 'El nombre es requerido',
                'marca.max' => 'Solo puede ingresar hasta 100 caracteres',
                'imagen.required' => 'La imágen es requerida',
                'imagen.mimes' => 'Formatos permitidos: JPEG, PNG, JPG',
            ];
        }
    }

    public function render()
    {
        $this->marcas = Marca::all();
        return view('livewire.admin.marcas', ['marcas' => $this->marcas])->layout('layouts.adminlte');
    }

    public function create()
    {
        $this->accion = 'crear';
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->emit('table');
        $this->modal = 'block';
    }

    public function cerrarModal()
    {
        $this->emit('table');
        $this->modal = 'none';
        $this->cambioImg = false;
    }

    // Limpiar los campos del modal
    public function limpiarCampos()
    {
        $this->marca = '';
        $this->imagen = '';
        $this->estado = 0;
        $this->id_marca = 0;
        $this->resetErrorBag();
    }

    // Editar Marcas
    public function edit($id)
    {
        $this->accion = 'editar';

        $marca = Marca::findOrFail($id);
        $this->id_marca = $id;
        $this->marca = $marca->marca;
        $this->imagen = $marca->imagen;
        $this->abrirModal();
    }

// Eliminar marcas
    public function delete($id)
    {
        Marca::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
        $this->emit('table');
    }

    public function store()
    {
        $this->validate();

        if ($this->cambioImg) {
            $imagen_name = $this->imagen->getClientOriginalName();
            $upload_imagen = $this->imagen->storeAs('marcas', $imagen_name);

            $this->cambioImg = false;
        } else {
            $imagen_name = $this->imagen;
        }

        Marca::updateOrCreate(
            ['id' => $this->id_marca],
            [
                'marca' => strtolower($this->marca),
                'imagen' => $imagen_name,
                'estado' => 1
            ]
        );

        $this->emit('mensajePositivo', ['mensaje' => 'Operación exitosa']);

        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function cambioImagen()
    {
        $this->cambioImg = true;
    }

    public function openModalImage($id)
    {
        $this->emit('table');
        $this->currentImage = Marca::find($id)->imagen;
        $this->currentTitle = Marca::find($id)->marca;
        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->emit('table');
        $this->showModalImage = false;
    }
}
