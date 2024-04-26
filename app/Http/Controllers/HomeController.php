<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Marca;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $slidesMarcas = Marca::where('estado', 1)->get();
        $slides = Galeria::where('estado', 1)->get();
        // Directorio de las imagenes del carousel
        $directorio = public_path('storage/galerias/');
        // array de imagenes para mostrar en el carousel
        $imagenes = $slides->pluck('imagen')->toArray();
        // Comprobar que las imagenes existan para enviar a la vista lo que corresponda, en el caso de que no haya ninguna disponible no se motrara el carousel
        $imagenes = \array_filter(
            $imagenes,
            function ($imagen) use ($directorio) {
                $ruta = $directorio . $imagen;
                if (file_exists($ruta)) {
                    return true;
                } else {
                    return false;
                }
            }
        );

        $directorioMarcas = public_path('storage/marcas/');
        $marcas = $slidesMarcas->pluck('imagen')->toArray();
        $marcas = \array_filter(
            $marcas,
            function ($imagen) use ($directorioMarcas) {
                $ruta = $directorioMarcas . $imagen;
                if (file_exists($ruta)) {
                    return true;
                } else {
                    return false;
                }
            }
        );

        return view('home', [
            'slides' => $slides,
            'slidesMarcas' => $slidesMarcas,
            'imagenes' => $imagenes,
            'marcas' => $marcas
        ]);
    }
}