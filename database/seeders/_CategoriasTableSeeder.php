<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cat = new Categoria();
        $cat->id     = 1;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Placas";
        $cat->slug = "placas";
        $cat->imagen = "cat01.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();        
    }
}
