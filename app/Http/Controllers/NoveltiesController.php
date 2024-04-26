<?php

namespace App\Http\Controllers;

use App\Models\Novelty;
use App\Models\NoveltyCategory;
use Illuminate\Http\Request;

class NoveltiesController extends Controller
{
    protected $novelties;
    protected $categories;


    public function index()
    {
        $this->categories = NoveltyCategory::all(); //traemos todas las categorias de novedades
        $this->novelties = Novelty::where('status', 1) //Buscamos todas las novedades publicadas y ordenadas por fecha desde la mas reciente
            ->orderby('category_id', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        // Agrupo la primer novedad de cada categoria
        $firstNoveltiesCategories = $this->novelties
            ->groupBy('category_id')
            ->map(function ($novelties) {
                return $novelties->first();
            });

        // Agrupo el resto de la novedades de cada categoria
        $otherNoveltiesCategories = $this->novelties
            ->groupBy('category_id')
            ->map(function ($novelties) {
                return $novelties->slice(1);
            });

        return view(
            'novelties',
            [
                'novelties' => $this->novelties,
                'categories' => $this->categories,
                'firstNoveltiesCategories' => $firstNoveltiesCategories,
                'otherNoveltiesCategories' => $otherNoveltiesCategories,
            ]
        );
    }
}