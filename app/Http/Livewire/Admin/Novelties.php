<?php

namespace App\Http\Livewire\Admin;

use App\Models\Novelty;
use Livewire\Component;
use Livewire\WithFileUploads;

class Novelties extends Component
{

    protected $novelties;
    protected $listeners = ['delete', 'updateTable'];

    public $showModal = 'none';
    public $showModalImage = false;
    public $novelty_id, $novelty, $currentImage, $currentTitle, $action, $title, $description, $status, $image, $image_name;
    public $changeImg = false;
    public $order = 0;
    use WithFileUploads;


    public function updateTable()
    {
        $this->emit('table');
    }

    public function render()
    {
        $novelties = Novelty::all();
        return view('livewire.admin.novelties', compact('novelties'))->layout('layouts.adminlte');
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
                'title.required' => 'El título de la novedad es necesario',
                'order.required' => 'El orden de la novedad es requerido'
            ];
        } else {
            return [
                'title.required' => 'El título de la novedad es necesario',
                'order.required' => 'El orden de la novedad es requerido'
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

        $novelty = Novelty::findOrFail($id);
        $this->novelty_id = $novelty->id;
        $this->title = $novelty->title;
        $this->description = $novelty->description;
        $this->order = $novelty->order;
        $this->image = $novelty->image;

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
            $upload_imagen = $this->image->storeAs('novedades', $image_name);
            //dd($upload_imagen);

            $this->changeImg = false;
        } else {
            $image_name = $this->image;
        }

        Novelty::updateOrCreate(
            ['id' => $this->novelty_id],
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
        Novelty::find($id)->delete();
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
        $this->novelty_id = 0;
        $this->resetErrorBag();
    }

    public function openModalImage($id)
    {
        $this->emit('table');
        $this->currentImage = Novelty::find($id)->image;
        $this->currentTitle = Novelty::find($id)->title;
        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->emit('table');
        $this->showModalImage = false;
    }
}
