<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Services extends Component
{
    protected $services;
    protected $listeners = ['delete', 'updateTable'];

    public $showModal = 'none';
    public $showModalImage = false;
    public $service_id, $service, $currentImage, $currentTitle, $action, $title, $description, $status, $image, $image_name;
    public $order = 0;
    public $changeImg = false;

    use WithFileUploads;


    public function updateTable()
    {
        $this->emit('table');
    }
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
            ];
        } else {
            return [
                'title' => 'required',
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
            ];
        } else {
            return [
                'title.required' => 'El título del servicio es necesario',
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
        $this->emit('mensajePositivo', ['mensaje' => 'Operación exitosa']);
        $this->resetInputField();
        $this->closeModal();
    }


    public function delete($id)
    {
        Service::find($id)->delete();
        $this->emit('mensajePositivo', ['mensaje' => 'Servicio eliminado correctamente']);
        $this->emit('table');
    }

    public function openModal()
    {
        $this->emit('table');
        $this->showModal = 'block';
    }

    public function closeModal()
    {
        $this->emit('table');
        $this->showModal = 'none';
        $this->changeImg = false;
        $this->resetInputField();
    }

    public function cambioImagen()
    {
        $this->changeImg = true;
    }

    private function resetInputField()
    {
        $this->title = '';
        $this->description = '';
        $this->order = 0;
        $this->status = '';
        $this->image = '';
        $this->service_id = 0;
        $this->resetErrorBag();
    }

    public function openModalImage($id)
    {
        $this->currentImage = Service::find($id)->image;
        $this->currentTitle = Service::find($id)->title;

        $this->emit('table');
        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->emit('table');
        $this->showModalImage = false;
    }
}
