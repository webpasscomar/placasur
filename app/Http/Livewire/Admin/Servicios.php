<?php

namespace App\Http\Livewire\Admin;

use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithFileUploads;

class Servicios extends Component
{
    protected $services;
    protected $listeners = ['delete'];

    public $mostrarModal = 'none';
    public $service_id;
    public $servicio;
    public $accion;
    public $title;
    public $description;
    public $status;
    public $order;
    public $image;
    public $image_name;
    public $cambioImg = false;

    use WithFileUploads;

    public function render()
    {
        $services = Servicio::all();
        return view('livewire.admin.servicios', compact('services'))->layout('layouts.adminlte');
    }

    protected function rules()
    {
        if ($this->accion == 'crear') {
            return [
                'title' => 'required',
                'order' => 'required',
            ];
        } else {
            return [
                'title' => 'required',
                'order' => 'required',
            ];
        }

        if (($this->cambioImg === true && $this->accion === 'editar') ||
        $this->accion === 'crear') {
        return [
            'categoria' => 'required|max:20',
            'imagen' => 'required|mimes:jpg,png|max:1024',
        ];
    } else {
        return [
            'categoria' => 'required|max:20',
        ];
    }
    }

    protected function messages()
    {
        if ($this->accion == 'crear') {
            return [
                'title.required' => 'El título del servicio es necesario',
                'order.required' => 'El orden del servicio es requerido'
            ];
        } else {
            return [
                'title.required' => 'El título del servicio es necesario',
                'order.required' => 'El orden del servicio es requerido'
            ];
        }
    }

    public function create()
    {
        $this->accion = 'crear';
        $this->resetInputField();
        $this->openModal();
    }

    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        $this->service_id = $servicio->id;
        $this->accion = 'editar';
        $this->title = $servicio->title;
        $this->description = $servicio->description;
        $this->order = $servicio->order;
        $this->status = $servicio->status;
        $this->image = $servicio->image;

        $this->openModal();
    }

    public function store()
    {
        $this->validate();
        
        if ($this->cambioImg) {
            ////
            //// borrar imagen anterior storage
            ////
            $image_name = $this->image->getClientOriginalName();
            $upload_imagen = $this->image->storeAs('servicios', $image_name);
            //dd($upload_imagen);

            $this->cambioImg = false;
        } else {
            $image_name = $this->image;
        }
        if ($this->status == null) {
            $this->status = 1;
        }

        Servicio::updateOrCreate(
            ['id' => $this->service_id],
            [
                'title' => $this->title,
                'description' => $this->description,
                'order' => $this->order,
                'status' => $this->status,
                'image'=> $this->image_name,
            ]
        );

        $this->closeModal();
        $this->resetInputField();
        $this->emit('mensajePositivo', ['mensaje' => 'Operación exitosa']);
    }


    public function delete($id)
    {
        Servicio::find($id)->delete();
    }

    public function openModal()
    {
        $this->mostrarModal = 'block';
    }

    public function closeModal()
    {
        $this->mostrarModal = 'none';
    }

    public function cambioImagen()
    {
        $this->cambioImg = true;
    }

    private function resetInputField()
    {
        $this->title = '';
        $this->description = '';
        $this->order = '';
        $this->status = '';
        $this->image = '';
    }
}
