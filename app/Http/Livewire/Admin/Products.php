<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categoria;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Products extends Component
{
    public $title, $description, $slug, $image, $order, $status, $product_id, $category_id, $currentImage, $currentTitle;
    public $showModalImage = false;

    public $categorias;
    public $rutaCompleta;
    public $modal = 'none';
    public $search;
    // public $sort = 'id';
    // public $order = 'desc';
    public $accion;
    public $cambioImg = false;
    // public $title = 'Productos';

    protected $products;

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
                'title' => 'required|max:50',
                'category_id' => 'required|not_in:0',
                // 'imagen' => 'required|mimes:jpg,png|max:1024',
            ];
        } else {
            return [
                'title' => 'required|max:50',
                'category_id' => 'required|not_in:0',
            ];
        }
    }

    protected function messages()
    {
        return [
            'title.required' => 'El título es obligatoio',
            'category_id.not_in' => 'Seleccione una categoria',
        ];
    }

    // Obtener el path de las categorias
    function obtenerRutaCompleta($id, $rutaParcial = [])
    {
        $categoria = DB::table('categorias')->find($id);

        if (!$categoria) {
            return [];
        }

        array_unshift($rutaParcial, $categoria->categoria);

        if ($categoria->categoriaPadre_id) {
            return $this->obtenerRutaCompleta($categoria->categoriaPadre_id, $rutaParcial);
        }

        return $rutaParcial;
    }

    public function render()
    {

        // Obtener la ultima categoría del arbol de categorías

        $this->categorias = DB::table('categorias as c1')
            ->leftJoin('categorias as c2', 'c1.id', '=', 'c2.categoriaPadre_id')
            ->select('c1.*')
            ->whereNull('c2.id') // Categorías que no tienen categoría padre
            ->orWhere('c1.categoriaPadre_id', '=', null) // Categorías sin categoría padre
            ->orWhereNotExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('categorias as c3')
                    ->where('c3.categoriaPadre_id', '=', DB::raw('c1.id'));
            })
            ->get();

        // Iterar las categorias y agregar division entre las mismas con el símbolo >
        foreach ($this->categorias as $categoria) {
            $this->rutaCompleta = $this->obtenerRutaCompleta($categoria->id);
            $categoria->rutaCompleta = implode(' > ', $this->rutaCompleta);
        }

        $this->products = Product::get();
        return view('livewire.admin.products', ['rows' => $this->products])->layout('layouts.adminlte');
    }


    public function openModal()
    {
        $this->resetErrorBag();
        $this->emit('table');
        $this->modal = 'block';
    }

    public function closeModal()
    {
        $this->emit('table');
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
        $this->resetErrorBag();
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
        $this->emit('table');
    }

    // Mostrar modal de imágenes
    public function openModalImage($id)
    {
        $this->emit('table');
        $this->currentImage = Product::find($id)->image;
        $this->currentTitle = Product::find($id)->title;

        $this->showModalImage = true;
    }

    public function closeModalImage()
    {
        $this->emit('table');
        $this->showModalImage = false;
    }
}
