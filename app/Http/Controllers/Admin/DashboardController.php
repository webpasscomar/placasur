<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Novelty;
use App\Models\Product;
use App\Models\Service;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /* Se Traen los datos de categorias, productos, servicios,novedades y marcas para mostrar la cantidad
        total de cada uno en la página principal del dashboard */
        $categorias = Categoria::all();
        $productos = Product::all();
        $servicios = Service::all();
        $novedades = Novelty::all();
        $marcas = Marca::all();

        return view('admin.dashboard', [
            'categorias' => $categorias,
            'productos' => $productos,
            'servicios' => $servicios,
            'novedades' => $novedades,
            'marcas' => $marcas,
        ]);
    }
}
