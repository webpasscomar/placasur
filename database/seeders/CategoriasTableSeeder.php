<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasTableSeeder extends Seeder
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

        $cat = new Categoria();
        $cat->id     = 2;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Adhesivos y barnices";
        $cat->slug = "adhesivos";
        $cat->imagen = "cat02.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 3;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Molduras";
        $cat->slug = "molduras";
        $cat->imagen = "cat03.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 4;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Enchapados";
        $cat->slug = "enchapados";
        $cat->imagen = "cat04.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 5;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Construcción";
        $cat->slug = "construcción";
        $cat->imagen = "cat05.jpg";
        $cat->menu = 0;
        $cat->orden = 5;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 6;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Tapacantos";
        $cat->slug = "tapacantos";
        $cat->imagen = "cat06.jpg";
        $cat->menu = 0;
        $cat->orden = 6;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 7;
        $cat->categoriaPadre_id = 0;
        $cat->categoria = "Herrajes para muebles y cocinas";
        $cat->slug = "herrajes";
        $cat->imagen = "cat07.jpg";
        $cat->menu = 0;
        $cat->orden = 7;
        $cat->estado = 1;
        $cat->save();
        //  subcategoria placas   
        $cat = new Categoria();
        $cat->id     = 8;
        $cat->categoriaPadre_id = 1;
        $cat->categoria = "Faplac";
        $cat->slug = "faplac";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 9;
        $cat->categoriaPadre_id = 1;
        $cat->categoria = "Egger";
        $cat->slug = "egger";
        $cat->imagen = "cat12.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 10;
        $cat->categoriaPadre_id = 1;
        $cat->categoria = "Rehau";
        $cat->slug = "rehau";
        $cat->imagen = "cat13.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 11;
        $cat->categoriaPadre_id = 1;
        $cat->categoria = "Sadepam";
        $cat->slug = "sadepam";
        $cat->imagen = "cat14.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 12;
        $cat->categoriaPadre_id = 1;
        $cat->categoria = "Rauvisio";
        $cat->slug = "reuvisio";
        $cat->imagen = "cat15.jpg";
        $cat->menu = 0;
        $cat->orden = 5;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 13;
        $cat->categoriaPadre_id = 1;
        $cat->categoria = "Guillermina";
        $cat->slug = "guillermina";
        $cat->imagen = "cat16.jpg";
        $cat->menu = 0;
        $cat->orden = 6;
        $cat->estado = 1;
        $cat->save();
        // adhesivos y barnices
        $cat = new Categoria();
        $cat->id     = 14;
        $cat->categoriaPadre_id = 2;
        $cat->categoria = "Adhesivos";
        $cat->slug = "adhesivo";
        $cat->imagen = "cat21.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 15;
        $cat->categoriaPadre_id = 2;
        $cat->categoria = "Barnices";
        $cat->slug = "barnices";
        $cat->imagen = "cat22.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        // molduras
        $cat = new Categoria();
        $cat->id     = 16;
        $cat->categoriaPadre_id = 3;
        $cat->categoria = "Decoforma";
        $cat->slug = "decoforma";
        $cat->imagen = "cat31.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 17;
        $cat->categoriaPadre_id = 3;
        $cat->categoria = "Construcción en Seco";
        $cat->slug = "enseco";
        $cat->imagen = "cat32.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 18;
        $cat->categoriaPadre_id = 3;
        $cat->categoria = "Pisos flotantes";
        $cat->slug = "flotantes";
        $cat->imagen = "cat33.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 19;
        $cat->categoriaPadre_id = 3;
        $cat->categoria = "Aislante";
        $cat->slug = "aislante";
        $cat->imagen = "cat34.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        // enchapados
        $cat = new Categoria();
        $cat->id     = 20;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Cantochap";
        $cat->slug = "cantochap";
        $cat->imagen = "cat41.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 21;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Fórmica";
        $cat->slug = "formica";
        $cat->imagen = "cat42.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 22;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Chapadur";
        $cat->slug = "chapadur";
        $cat->imagen = "cat43.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 23;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Rerciado";
        $cat->slug = "terciado";
        $cat->imagen = "cat44.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 24;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Terciado de pino";
        $cat->slug = "pino";
        $cat->imagen = "cat45.jpg";
        $cat->menu = 0;
        $cat->orden = 5;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 25;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Terciado Guatambú";
        $cat->slug = "guatambu";
        $cat->imagen = "cat46.jpg";
        $cat->menu = 0;
        $cat->orden = 6;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 26;
        $cat->categoriaPadre_id = 4;
        $cat->categoria = "Terciado Fenólico Plastificado";
        $cat->slug = "fenolico";
        $cat->imagen = "cat47.jpg";
        $cat->menu = 0;
        $cat->orden = 7;
        $cat->estado = 1;
        $cat->save();

        // construcción
        $cat = new Categoria();
        $cat->id     = 27;
        $cat->categoriaPadre_id = 5;
        $cat->categoria = "Aislante";
        $cat->slug = "aisante";
        $cat->imagen = "cat51.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 28;
        $cat->categoriaPadre_id = 5;
        $cat->categoria = "Estisol";
        $cat->slug = "estisol";
        $cat->imagen = "cat52.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 29;
        $cat->categoriaPadre_id = 5;
        $cat->categoria = "Moduras";
        $cat->slug = "moldura";
        $cat->imagen = "cat53.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        // tapacantos
        $cat = new Categoria();
        $cat->id     = 30;
        $cat->categoriaPadre_id = 6;
        $cat->categoria = "Rehau";
        $cat->slug = "mrehau";
        $cat->imagen = "cat61.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 31;
        $cat->categoriaPadre_id = 6;
        $cat->categoria = "Egger";
        $cat->slug = "megger";
        $cat->imagen = "cat62.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        // herrajes
        $cat = new Categoria();
        $cat->id     = 32;
        $cat->categoriaPadre_id = 7;
        $cat->categoria = "Eurohard";
        $cat->slug = "eurohard";
        $cat->imagen = "cat71.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 33;
        $cat->categoriaPadre_id = 7;
        $cat->categoria = "Otros";
        $cat->slug = "otros";
        $cat->imagen = "cat72.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 2;
        $cat->save();

        // placas - FAPLAC
        $cat = new Categoria();
        $cat->id     = 34;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Nature";
        $cat->slug = "nature";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 35;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Nórdica";
        $cat->slug = "nordica";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 36;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Etnica";
        $cat->slug = "etnica";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 37;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Urban Concept";
        $cat->slug = "urban";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 38;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Hilados";
        $cat->slug = "hilados";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 5;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 39;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Clásica";
        $cat->slug = "clasica";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 6;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 40;
        $cat->categoriaPadre_id = 8;
        $cat->categoria = "Colores Lisos";
        $cat->slug = "lisos";
        $cat->imagen = "cat11.jpg";
        $cat->menu = 0;
        $cat->orden = 7;
        $cat->estado = 1;
        $cat->save();

        // placas - EGGER
        $cat = new Categoria();
        $cat->id     = 41;
        $cat->categoriaPadre_id = 9;
        $cat->categoria = "Feelwood";
        $cat->slug = "feelwood";
        $cat->imagen = "cat12.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 42;
        $cat->categoriaPadre_id = 9;
        $cat->categoria = "Touch";
        $cat->slug = "touch";
        $cat->imagen = "cat12.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 43;
        $cat->categoriaPadre_id = 9;
        $cat->categoria = "Esencia";
        $cat->slug = "esencia";
        $cat->imagen = "cat12.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 44;
        $cat->categoriaPadre_id = 9;
        $cat->categoria = "Materia";
        $cat->slug = "materia";
        $cat->imagen = "cat12.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 45;
        $cat->categoriaPadre_id = 9;
        $cat->categoria = "Clásica";
        $cat->slug = "egger_clasica";
        $cat->imagen = "cat12.jpg";
        $cat->menu = 0;
        $cat->orden = 5;
        $cat->estado = 1;
        $cat->save();

        // placas - REHAU
        $cat = new Categoria();
        $cat->id     = 46;
        $cat->categoriaPadre_id = 10;
        $cat->categoria = "Rehau";
        $cat->slug = "rehau2";
        $cat->imagen = "cat13.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        // placas - SADEPAN
        $cat = new Categoria();
        $cat->id     = 47;
        $cat->categoriaPadre_id = 11;
        $cat->categoria = "Simplece";
        $cat->slug = "simplece";
        $cat->imagen = "cat14.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 48;
        $cat->categoriaPadre_id = 11;
        $cat->categoria = "Regazzi";
        $cat->slug = "regazzi";
        $cat->imagen = "cat14.jpg";
        $cat->menu = 0;
        $cat->orden = 2;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 49;
        $cat->categoriaPadre_id = 11;
        $cat->categoria = "Piacere";
        $cat->slug = "piacere";
        $cat->imagen = "cat14.jpg";
        $cat->menu = 0;
        $cat->orden = 3;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 50;
        $cat->categoriaPadre_id = 11;
        $cat->categoria = "Sensazioni";
        $cat->slug = "sensazioni";
        $cat->imagen = "cat14.jpg";
        $cat->menu = 0;
        $cat->orden = 4;
        $cat->estado = 1;
        $cat->save();

        $cat = new Categoria();
        $cat->id     = 51;
        $cat->categoriaPadre_id = 11;
        $cat->categoria = "Potenza";
        $cat->slug = "potenza";
        $cat->imagen = "cat14.jpg";
        $cat->menu = 0;
        $cat->orden = 5;
        $cat->estado = 1;
        $cat->save();

        // placas - RAUVISIO
        $cat = new Categoria();
        $cat->id     = 52;
        $cat->categoriaPadre_id = 12;
        $cat->categoria = "Rauvisio";
        $cat->slug = "rauvisio2";
        $cat->imagen = "cat15.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();

        // placas - GUILLERMINA
        $cat = new Categoria();
        $cat->id     = 53;
        $cat->categoriaPadre_id = 13;
        $cat->categoria = "Guillermina";
        $cat->slug = "guillermina2";
        $cat->imagen = "cat16.jpg";
        $cat->menu = 0;
        $cat->orden = 1;
        $cat->estado = 1;
        $cat->save();
    }
}
