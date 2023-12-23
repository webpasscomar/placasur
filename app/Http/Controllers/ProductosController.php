<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorias = Categoria::where('categoriaPadre_id', 0)->get();
        return view('productos-index', compact('categorias'));
    }

    public function subcategorias($slugCategoria)
    {
        $categoria = Categoria::where('slug', $slugCategoria)->firstOrFail();
        // dd($categoria);
        // dd($categoria->id);
        $categorias = Categoria::where('categoriaPadre_id', $categoria->id)->get();
        // dd($categorias);
        return view('productos-subcategorias', compact('categorias'));
    }

    public function productos()
    {
        $categorias = Categoria::get();
        $productos = Product::get();
        return view('productos-productos', compact('categorias', 'productos'));
    }
}
