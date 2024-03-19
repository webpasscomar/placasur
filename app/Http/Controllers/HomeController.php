<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Marca;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $slides;
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
        $slidesMarcas = Marca::where('estado',1)->get();
        $this->slides = Galeria::where('estado', 1)->get();
        return view('home', [
            'slides' => $this->slides,
            'slidesMarcas'=> $slidesMarcas,
        ]);
    }
}
