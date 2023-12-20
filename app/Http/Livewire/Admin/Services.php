<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Services extends Component
{
    protected $services;
    protected $listeners = ['delete'];

    public $showModal = 'none';
    public $showModalImage = false;
    public $service_id, $service, $currentImage, $action, $title, $description, $status, $order, $image, $image_name;
    public $changeImg = false;

    use WithFileUploads;

    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.services', compact('services'))->layout('layouts.adminlte');
    }

    protected function rules()
    {
        if ($this->action == 'create') {
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

        if (($this->changeImg === true && $this->action === 'edit') ||
            $this->action === 'create'
        ) {
            return [
                'imagen' => 'required|mimes:jpg,png|max:1024'
            ];
        }
    }

    protected function messages()
    {
        if ($this->action == 'create') {
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
        $this->action = 'create';
        $this->resetInputField();
        $this->openModal();
    }

    public function edit($id)
    {
        $this->action = 'edit';

        $service = Service::findOrFail($id);
        $this->service_id = $service->id;
        $this->title = $service->title;
        $this->description = $service->description;
        $this->order = $service->order;
        $this->image = $service->image;

        $this->openModal();
    }

    public function store()
    {
        $this->validate();

        if ($this->changeImg) {
            ////
            //// borrar imagen anterior storage
            ////
            $image_name = $this->image->getClientOriginalName();
            $upload_imagen = $this->image->storeAs('servicios', $image_name);
            //dd($upload_imagen);

            $this->changeImg = false;
        } else {
            $image_name = $this->image;
        }

        Service::updateOrCreate(
            ['id' => $this->service_id],
            [
                'title' => $this->title,
                'image' => $image_name,
                'description' => $this->description,
                'order' => $this->order,
                'status' => 1
            ]
        );

        $this->closeModal();
        $this->resetInputField();
        $this->emit('mensajePositivo', ['mensaje' => 'Operación exitosa']);
    }


    public function delete($id)
    {
        Service::find($id)->delete();
        $this->emit('mensajePositivo', ['mensaje' => 'Servicio eliminado correctamente']);
    }

    public function openModal()
    {
        $this->showModal = 'block';
    }

    public function closeModal()
    {
        $this->showModal = 'none';
        $this->changeImg = false;
    }

    public function cambioImagen()
    {
        $this->changeImg = true;
    }

    private function resetInputField()
    {
        $this->title = '';
        $this->description = '';
        $this->order = '';
        $this->status = '';
        $this->image = '';
        $this->service_id = 0;
    }

    public function openModalImage($id)
    {
        $this->currentImage = Service::find($id)->image;

        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->showModalImage = false;
    }
}
