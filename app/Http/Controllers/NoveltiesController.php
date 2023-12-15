<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoveltiesController extends Controller
{
    public function index()
    {
        return view('novelties');
    }
}
