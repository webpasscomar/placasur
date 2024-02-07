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

    // Muestras las categorias o productos según sea el caso
    public function mostrar($slugCategoria)
    {

        $subcategoriasPorCategoria = [];
        $categoriaPadre = '';
        $categoriasNivelSuperior = '';

        $categoriaActual = Categoria::where('slug', $slugCategoria)->firstOrFail();
        // dd($categoriaActual['categoriaPadre_id']);
        // Traigo las categorias para el SIDEBAR

        if ($categoriaActual->categoriaPadre_id !== 0) {
            $categoriaPadre = Categoria::where('id', $categoriaActual->categoriaPadre_id)->firstOrFail();
            // dd($categoriaPadre);
            $categoriasNivelSuperior = Categoria::where('categoriaPadre_id', $categoriaPadre->id)->get();
        }

        // Traigo las categorias hijas de la actual para ver si muestro categorias o productos
        $categoriasHijas = Categoria::where('categoriaPadre_id', $categoriaActual->id)->get();

        // Si la categoria tiene hijos muestro categorias
        if (count($categoriasHijas) > 0) {
            // dd('Muestro categorias');
            foreach ($categoriasHijas as $categoriaHija) {
                $subcategorias = Categoria::where('categoriaPadre_id', $categoriaHija->id)->pluck('categoria');
                $subcategoriasPorCategoria[$categoriaHija->id] = $subcategorias;
            }

            return view('productos-subcategorias', compact('categoriaPadre', 'categoriaActual', 'categoriasHijas', 'subcategoriasPorCategoria', 'categoriasNivelSuperior'));
        } else {
            // dd('Muestro productos');
            // Muestro productos porque no tiene hijas
            // $productos = $categoriaActual->productos();
            $productos = Product::where('category_id', $categoriaActual->id)->get();
            // dd($productos);
            return view('productos-productos', compact('categoriaPadre', 'categoriaActual', 'productos', 'categoriasNivelSuperior'));
        }
    }
}
