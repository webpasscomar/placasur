<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categoria;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Products extends Component
{
    public $title, $description, $slug, $image, $order, $status, $product_id, $category_id, $currentImage;
    public $showModalImage = false;

    public $categorias;

    public $modal = 'none';
    public $search;
    // public $sort = 'id';
    // public $order = 'desc';
    public $accion;
    public $cambioImg = false;
    // public $title = 'Productos';

    protected $products;

    protected $listeners = ['delete'];

    use WithPagination;
    use WithFileUploads;


    protected function rules()
    {
        if (($this->cambioImg === true && $this->accion === 'editar') ||
            $this->accion === 'crear'
        ) {
            return [
                'title' => 'required|max:50',
                // 'imagen' => 'required|mimes:jpg,png|max:1024',
            ];
        } else {
            return [
                'title' => 'required|max:50',
            ];
        }
    }

    public function render()
    {
        $this->categorias = Categoria::get();
        $this->products = Product::get();
        return view('livewire.admin.products', ['rows' => $this->products])->layout('layouts.adminlte');
    }


    public function openModal()
    {
        $this->modal = 'block';
    }

    public function closeModal()
    {
        $this->modal = 'none';

        $this->cambioImg = false;
    }

    public function create()
    {
        $this->accion = 'crear';
        $this->cleanFields();
        $this->openModal();
    }

    public function cleanFields()
    {
        $this->product_id = 0;
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->order = 0;
        $this->status = 0;
        $this->category_id = 0;
    }

    public function changeImage()
    {
        $this->cambioImg = true;
    }

    public function store()
    {
        $this->validate();

        if ($this->cambioImg) {
            $image_name = $this->image->getClientOriginalName();
            $upload_imagen = $this->image->storeAs('productos', $image_name);
            $this->cambioImg = false;
        } else {
            $image_name = $this->image;
        }

        Product::updateOrCreate(
            ['id' => $this->product_id],
            [
                'category_id' => $this->category_id,
                // 'categoriaPadre_id' => $this->categoriaPadre_id,
                'title' => $this->title,
                'description' => $this->description,
                'image' => $image_name,
                'order' => $this->order,
                'status' => 1
            ]
        );

        $this->emit('mensajePositivo', ['mensaje' => 'Operación exitosa']);

        $this->closeModal();
        $this->cleanFields();
    }

    public function edit($id)
    {
        $this->accion = 'edit';

        $product = Product::findOrFail($id);
        $this->product_id = $product->id;
        $this->category_id = $product->category_id;
        $this->title = $product->title;
        $this->description = $product->description;
        $this->order = $product->order;
        $this->image = $product->image;

        $this->openModal();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        $this->emit('mensajePositivo', ['mensaje' => 'Producto eliminado correctamente']);
    }

    // Mostrar modal de imágenes
    public function openModalImage($id)
    {
        $this->currentImage = Product::find($id)->image;

        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->showModalImage = false;
    }
}
