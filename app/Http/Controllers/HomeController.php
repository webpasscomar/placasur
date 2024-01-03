<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
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
        $this->slides = Galeria::where('estado', 1)->get();
        return view('home', ['slides' => $this->slides]);
    }
}
