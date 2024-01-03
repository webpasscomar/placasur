<?php

namespace Database\Seeders;

use App\Models\Galeria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galery = new Galeria();
        $galery->id = 1;
        $galery->galeria = 'Slide1';
        $galery->imagen = 'foto-carousel-1.jpg';
        $galery->estado = 1;
        $galery->created_at = now();
        $galery->updated_at = now();
        $galery->save();

        $galery = new Galeria();
        $galery->id = 2;
        $galery->galeria = 'Slide2';
        $galery->imagen = 'foto-carousel-2.jpg';
        $galery->estado = 1;
        $galery->created_at = now();
        $galery->updated_at = now();
        $galery->save();

        $galery = new Galeria();
        $galery->id = 3;
        $galery->galeria = 'Slide3';
        $galery->imagen = 'foto-carousel-3.jpg';
        $galery->estado = 1;
        $galery->created_at = now();
        $galery->updated_at = now();
        $galery->save();

        $galery = new Galeria();
        $galery->id = 4;
        $galery->galeria = 'Slide4';
        $galery->imagen = 'foto-carousel-4.jpg';
        $galery->estado = 1;
        $galery->created_at = now();
        $galery->updated_at = now();
        $galery->save();
    }
}
