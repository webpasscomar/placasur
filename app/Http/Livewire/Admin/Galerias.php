<?php

namespace App\Http\Livewire\Admin;

use App\Models\Galeria;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Galerias extends Component
{
    public $galeria, $imagen, $estado, $id_galeria, $currentImage, $currentTitle;
    public $imagen_name;

    public $modal = 'none';
    public $search;
    public $sort = 'id';
    public $order = 'desc';
    public $accion;
    public $cambioImg = false;
    public $showModalImage = false;

    protected $galerias;

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
                'galeria' => 'required',
                'imagen' => 'required|mimes:jpg,jpeg,png|max:1024',
            ];
        } else {
            return [
                'galeria' => 'required',
                'imagen' => $this->cambioImg ? 'mimes:jpg,jpeg,png|max:1024' : '',
            ];
        }
    }

    protected function messages()
    {
        return [
            'galeria.required' => 'El nombre de la galeria es requerido',
            'imagen.required' => 'La imagen es requerida',
        ];
    }

    public function render()
    {
        $this->galerias = Galeria::where('estado', 1)->get();
        return view('livewire.admin.galerias', ['filas' => $this->galerias])->layout('layouts.adminlte');
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
        $this->limpiarCampos();
        $this->modal = 'none';
        $this->cambioImg = false;
    }

    public function limpiarCampos()
    {
        $this->galeria = '';
        $this->imagen = '';
        $this->estado = 0;
        $this->id_galeria = 0;
        $this->resetErrorBag();
    }
    public function edit($id)
    {
        $this->accion = 'editar';

        $galeria = Galeria::findOrFail($id);
        $this->id_galeria = $id;
        $this->galeria = $galeria->galeria;
        $this->imagen = $galeria->imagen;
        $this->abrirModal();
    }
    public function borrar($id)
    {
        Galeria::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function delete($id)
    {
        Galeria::find($id)->delete();
        $this->emit('table');
    }

    public function store()
    {
        $this->validate();

        if ($this->cambioImg) {
            ////
            //// borrar imagen anterior storage
            ////
            $imagen_name = $this->imagen->getClientOriginalName();
            $upload_imagen = $this->imagen->storeAs('galerias', $imagen_name);
            //dd($upload_imagen);

            $this->cambioImg = false;
        } else {
            $imagen_name = $this->imagen;
        }

        Galeria::updateOrCreate(
            ['id' => $this->id_galeria],
            [
                'galeria' => $this->galeria,
                'imagen' => $imagen_name,
                'estado' => 1
            ]
        );

        $this->emit('mensajePositivo', ['mensaje' => 'Operación exitosa']);

        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function order($sort)
    {
        if ($this->sort == $sort) {

            if ($this->order == 'desc') {
                $this->order = 'asc';
            } else {
                $this->order = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->order = 'asc';
        }
    }
    public function cambioImagen()
    {
        $this->cambioImg = true;
    }

    public function openModalImage($id)
    {
        $this->emit('table');
        $this->currentImage = Galeria::find($id)->imagen;
        $this->currentTitle = Galeria::find($id)->galeria;
        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->emit('table');
        $this->showModalImage = false;
    }
}
