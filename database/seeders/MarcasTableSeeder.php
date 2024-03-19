<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Durlok
        $marca = new Marca();
        $marca->id = 1;
        $marca->marca = 'durlok';
        $marca->imagen = 'durlok.png';
        $marca->estado = 1;
        $marca->created_at = now();
        $marca->updated_at = now();

        $marca->save();

        // Faplac
        $marca = new Marca();
        $marca->id = 2;
        $marca->marca = 'faplac';
        $marca->imagen = 'faplac.png';
        $marca->estado = 1;
        $marca->created_at = now();
        $marca->updated_at = now();

        $marca->save();

        // Flipasto
        $marca = new Marca();
        $marca->id = 3;
        $marca->marca = 'flipasto';
        $marca->imagen = 'flipasto.png';
        $marca->estado = 1;
        $marca->created_at = now();
        $marca->updated_at = now();

        $marca->save();

        // Masisa

        $marca = new Marca();
        $marca->id = 4;
        $marca->marca = 'masisa';
        $marca->imagen = 'masisa.png';
        $marca->estado = 1;
        $marca->created_at = now();
        $marca->updated_at = now();

        $marca->save();

        // Sadepan

        $marca = new Marca();
        $marca->id = 5;
        $marca->marca = 'sadepan';
        $marca->imagen = 'sadepan.png';
        $marca->estado = 1;
        $marca->created_at = now();
        $marca->updated_at = now();

        $marca->save();
    }
}
