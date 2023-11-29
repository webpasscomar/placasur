<?php

namespace App\Http\Livewire\Admin;

use App\Models\Producto;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Productos extends Component
{
    public $categoriaPadre_id, $categoria, $descripcion, $slug, $imagen, $menu, $orden, $estado, $id_categoria, $categoriasAnt;

    public $modal = 'none';
    public $search;
    public $sort = 'id';
    public $order = 'desc';
    public $accion;
    public $cambioImg = false;
    public $title = 'Productos';

    protected $productos;

    protected $listeners = ['delete'];

    use WithPagination;
    use WithFileUploads;

    public function render()
    {
        $this->productos = Producto::get();
        return view('livewire.admin.productos', ['filas' => $this->productos])->layout('layouts.adminlte');
    }

    public function abrirModal()
    {
        $this->modal = 'block';
        $this->dispatchBrowserEvent('actualizarDataTable');
    }

    public function cerrarModal()
    {
        $this->modal = 'none';
        $this->cambioImg = false;
        $this->dispatchBrowserEvent('actualizarDataTable');
    }
}
