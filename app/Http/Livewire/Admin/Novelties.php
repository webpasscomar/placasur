<?php

    namespace App\Http\Livewire\Admin;

    use App\Models\Novelty;
    use App\Models\NoveltyCategory;
    use Livewire\Component;
    use Livewire\WithFileUploads;
    use Mews\Purifier\Facades\Purifier;

    class Novelties extends Component
    {

        protected $novelties;
        protected $novelties_categories;
        protected $listeners = ['delete', 'updateTable'];

        public $showModal = 'none';
        public $showModalImage = false;
        public
            $novelty_id,
            $novelty,
            $currentImage,
            $currentTitle,
            $action,
            $title,
            $description,
            $status,
            $image,
            $image_name,
            $category_id;
        public $changeImg = false;
        public $order = 0;
        use WithFileUploads;

        public function updateTable()
        {
            $this->emit('table');
        }

        public function render()
        {
            $this->novelties = Novelty::all();
            $this->novelties_categories = NoveltyCategory::all();
            return view('livewire.admin.novelties', [
                'novelties' => $this->novelties,
                'novelties_categories' => $this->novelties_categories,
            ])->layout('layouts.adminlte');
        }

        protected function rules()
        {
            if ($this->action == 'create') {
                return [
                    'title' => 'required|min:3',
                    'image' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'description' => 'required',
                    'category_id' => 'required',
                    'order' => 'min:0'
                ];
            } else {
                return [
                    'title' => 'required',
                    'image' => $this->changeImg ? 'required|mimes:jpg,png,jpeg|max:2048' : '',
                    'description' => 'required',
                    'category_id' => 'required',
                    'order' => 'numeric|min:0'
                ];
            }

            if (($this->changeImg === true && $this->action === 'edit') ||
                $this->action === 'create'
            ) {
                return [
                    'image' => 'required|mimes:jpg,png,jpeg|max:2048'
                ];
            }
        }

        protected function messages()
        {
            if ($this->action == 'create') {
                return [
                    'title.required' => 'Ingrese el título',
                    'title.min' => 'Ingrese un mínimo de 3 caracteres',
                    'description.required' => 'Ingrese la descripción',
                    'category_id' => 'Ingrese la categoria',
                    'image.required' => 'La imágen es requerida',
                    'image.mimes' => 'Ingrese imágenes de tipo: jpg, png, jpeg',
                    'image.max' => 'La imagen no debe ser mayor a 2MB',
                    'order.min' => 'Valor incorrecto'
                ];
            } else {
                return [
                    'title.required' => 'Ingrese el título',
                    'title.min' => 'Ingrese un mínimo de 3 caracteres',
                    'description.required' => 'Ingrese la descripción',
                    'category_id' => 'Ingrese la categoria',
                    'image.required' => 'La imágen es requerida',
                    'image.mimes' => 'Ingrese imágenes de tipo: jpg, png, jpeg',
                    'image.max' => 'La imagen no debe ser mayor a 2MB',
                    'order.min' => 'Valor incorrecto'
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
            $this->category_id = $novelty->category_id;
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
                    'description' => Purifier::clean($this->description), //con Purifier limpiamos el html del texto enriquecido por seguridad
                    'category_id' => $this->category_id,
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
            $this->category_id = '';
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
