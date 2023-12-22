<?php

namespace App\Http\Controllers;

use App\Models\Novelty;
use Illuminate\Http\Request;

class NoveltiesController extends Controller
{
    public function index()
    {
        $novelties = Novelty::where('status', 1)->get();
        return view('novelties', compact('novelties'));
    }
}