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
        $subcategoriasPorCategoria = [];
        foreach ($categorias as $categoria) {
            $subcategorias = Categoria::where('categoriaPadre_id', $categoria->id)->pluck('categoria');
            $subcategoriasPorCategoria[$categoria->id] = $subcategorias;
        }

        return view('productos-index', compact('categorias', 'subcategoriasPorCategoria'));
    }

    public function subcategorias($slugCategoria)
    {
        $subcategoriasPorCategoria = [];
        $categoriaPadre = Categoria::where('slug', $slugCategoria)->firstOrFail();
        // dd($categoria);
        // dd($categoria->id);
        $categoriasHijas = Categoria::where('categoriaPadre_id', $categoriaPadre->id)->get();


        foreach ($categoriasHijas as $categoriaHija) {
            $subcategorias = Categoria::where('categoriaPadre_id', $categoriaHija->id)->pluck('categoria');
            $subcategoriasPorCategoria[$categoriaHija->id] = $subcategorias;
        }
        // dd($categorias);
        return view('productos-subcategorias', compact('categoriasHijas', 'categoriaPadre', 'subcategoriasPorCategoria'));
    }

    public function productos()
    {
        $categorias = Categoria::get();
        $productos = Product::get();
        return view('productos-productos', compact('categorias', 'productos'));
    }
}
