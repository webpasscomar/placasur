<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // placas - FAPLAC - NATURE
        $prod = new Product();
        $prod->id     = 1;
        $prod->title = "Diseño: VENEZIA";
        $prod->category_id = 34;
        $prod->image = "prod0001.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 2;
        $prod->title = "Diseño: TERRARUM";
        $prod->category_id = 34;
        $prod->image = "prod0002.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 3;
        $prod->title = "Diseño: TEKA ÁRTICO";
        $prod->category_id = 34;
        $prod->image = "prod0003.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 4;
        $prod->title = "Diseño: ROBLE DAKAR";
        $prod->category_id = 34;
        $prod->image = "prod0004.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 5;
        $prod->title = "Diseño: ROBLE AMERICANO";
        $prod->category_id = 34;
        $prod->image = "prod0005.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 6;
        $prod->title = "Diseño: NOGAL TERRACOTA";
        $prod->category_id = 34;
        $prod->image = "prod0006.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 7;
        $prod->title = "Diseño: NOCCE MILANO";
        $prod->category_id = 34;
        $prod->image = "prod0007.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 8;
        $prod->title = "Diseño: MONT BLANC";
        $prod->category_id = 34;
        $prod->image = "prod0008.jpg";
        $prod->order = 8;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 9;
        $prod->title = "Diseño: LINOSA";
        $prod->category_id = 34;
        $prod->image = "prod0009.jpg";
        $prod->order = 9;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 10;
        $prod->title = "Diseño: GAUDÍ";
        $prod->category_id = 34;
        $prod->image = "prod0010.jpg";
        $prod->order = 10;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 11;
        $prod->title = "Diseño: CEDRO";
        $prod->category_id = 34;
        $prod->image = "prod0011.jpg";
        $prod->order = 11;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 12;
        $prod->title = "Diseño: CARVALHO MEZZO";
        $prod->category_id = 34;
        $prod->image = "prod0012.jpg";
        $prod->order = 12;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 13;
        $prod->title = "Diseño: CARVALHO ASERRADO";
        $prod->category_id = 34;
        $prod->image = "prod0013.jpg";
        $prod->order = 13;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 14;
        $prod->title = "Diseño: CAJU";
        $prod->category_id = 34;
        $prod->image = "prod0014.jpg";
        $prod->order = 14;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 15;
        $prod->title = "Diseño: BLANCO NATURE";
        $prod->category_id = 34;
        $prod->image = "prod0015.jpg";
        $prod->order = 15;
        $prod->status = 1;
        $prod->save();

        // placas - FAPLAC - NORDICA
        $prod = new Product();
        $prod->id     = 16;
        $prod->title = "Diseño: TEKA OSLO";
        $prod->category_id = 35;
        $prod->image = "prod0016.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 17;
        $prod->title = "Diseño: ROBLE ESCANDINAVO";
        $prod->category_id = 35;
        $prod->image = "prod0017.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 18;
        $prod->title = "Diseño: OLMO FINLANDÉS";
        $prod->category_id = 35;
        $prod->image = "prod0018.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 19;
        $prod->title = "Diseño: BÁLTICO";
        $prod->category_id = 35;
        $prod->image = "prod0019.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 20;
        $prod->title = "Diseño: HELSINKI";
        $prod->category_id = 35;
        $prod->image = "prod0020.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        // placas - FAPLAC - ETNICA
        $prod = new Product();
        $prod->id     = 21;
        $prod->title = "Diseño: TUAREG Azul Noche";
        $prod->category_id = 36;
        $prod->image = "prod0021.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 22;
        $prod->title = "Diseño: TRIBAL Tierra Nativa";
        $prod->category_id = 36;
        $prod->image = "prod0022.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 23;
        $prod->title = "Diseño: SAHARA Nube de Arena";
        $prod->category_id = 36;
        $prod->image = "prod0023.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 24;
        $prod->title = "Diseño: SAFARI Verde Pantano";
        $prod->category_id = 36;
        $prod->image = "prod0024.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 25;
        $prod->title = "Diseño: HIMALAYA Sal Rosa";
        $prod->category_id = 36;
        $prod->image = "prod0025.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 26;
        $prod->title = "Diseño: EVEREST Blanco Nieve";
        $prod->category_id = 36;
        $prod->image = "prod0026.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        // placas - FAPLAC - URBAN
        $prod = new Product();
        $prod->id     = 27;
        $prod->title = "Diseño: VIENA";
        $prod->category_id = 37;
        $prod->image = "prod0027.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 28;
        $prod->title = "Diseño: PRAGA";
        $prod->category_id = 37;
        $prod->image = "prod0028.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 29;
        $prod->title = "Diseño: MOSCU";
        $prod->category_id = 37;
        $prod->image = "prod0029.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 30;
        $prod->title = "Diseño: AMBERES";
        $prod->category_id = 37;
        $prod->image = "prod0030.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 31;
        $prod->title = "Diseño:  VIENA TEXTURADO";
        $prod->category_id = 37;
        $prod->image = "prod0031.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 32;
        $prod->title = "Diseño:  STREET TEXTURADO";
        $prod->category_id = 37;
        $prod->image = "prod0032.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 33;
        $prod->title = "Diseño:  HOME TEXTURADO";
        $prod->category_id = 37;
        $prod->image = "prod0033.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        // placas - FAPLAC - HILADOS
        $prod = new Product();
        $prod->id     = 34;
        $prod->title = "Diseño: SEDA NOTTE";
        $prod->category_id = 38;
        $prod->image = "prod0034.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 35;
        $prod->title = "Diseño: SEDA GIORNO";
        $prod->category_id = 38;
        $prod->image = "prod0035.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 36;
        $prod->title = "Diseño: LINO TERRA";
        $prod->category_id = 38;
        $prod->image = "prod0036.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 37;
        $prod->title = "Diseño: LINO NEGRO";
        $prod->category_id = 38;
        $prod->image = "prod0037.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 38;
        $prod->title = "Diseño: LINO CHIARO";
        $prod->category_id = 38;
        $prod->image = "prod0038.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 39;
        $prod->title = "Diseño: LINO BLANCO";
        $prod->category_id = 38;
        $prod->image = "prod0039.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        // placas - FAPLAC - CLASICA
        $prod = new Product();
        $prod->id     = 40;
        $prod->title = "Diseño: TANGANICA TABACO";
        $prod->category_id = 39;
        $prod->image = "prod0040.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 41;
        $prod->title = "Diseño: ROBLE ESPAÑOL";
        $prod->category_id = 39;
        $prod->image = "prod0041.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 42;
        $prod->title = "Diseño: ROBLE DÁKAR";
        $prod->category_id = 39;
        $prod->image = "prod0042.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 43;
        $prod->title = "Diseño: HAYA";
        $prod->category_id = 39;
        $prod->image = "prod0043.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 44;
        $prod->title = "Diseño: ÉBANO NEGRO";
        $prod->category_id = 39;
        $prod->image = "prod0044.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 45;
        $prod->title = "Diseño: CEREZO";
        $prod->category_id = 39;
        $prod->image = "prod0045.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 46;
        $prod->title = "Diseño: CEDRO";
        $prod->category_id = 39;
        $prod->image = "prod0046.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 47;
        $prod->title = "Diseño: ABEDUL";
        $prod->category_id = 39;
        $prod->image = "prod0047.jpg";
        $prod->order = 8;
        $prod->status = 1;
        $prod->save();

        // placas - FAPLAC - COLORES LISOS
        $prod = new Product();
        $prod->id     = 48;
        $prod->title = "Color: ROJO";
        $prod->category_id = 40;
        $prod->image = "prod0048.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 49;
        $prod->title = "Color: NEGRO";
        $prod->category_id = 40;
        $prod->image = "prod0049.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 50;
        $prod->title = "Color: litio";
        $prod->category_id = 40;
        $prod->image = "prod0050.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 51;
        $prod->title = "Color: GRIS HUMO";
        $prod->category_id = 40;
        $prod->image = "prod0051.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 52;
        $prod->title = "Color: GRAFITO";
        $prod->category_id = 40;
        $prod->image = "prod0052.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 53;
        $prod->title = "Color: CENIZA";
        $prod->category_id = 40;
        $prod->image = "prod0053.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 54;
        $prod->title = "Color: BLANCO";
        $prod->category_id = 40;
        $prod->image = "prod0054.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 55;
        $prod->title = "Color: AZUL LAGO";
        $prod->category_id = 40;
        $prod->image = "prod0055.jpg";
        $prod->order = 8;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 56;
        $prod->title = "Color: ALUMINIO";
        $prod->category_id = 40;
        $prod->image = "prod0056.jpg";
        $prod->order = 9;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 57;
        $prod->title = "Color: ALMENDRA";
        $prod->category_id = 40;
        $prod->image = "prod0057.jpg";
        $prod->order = 10;
        $prod->status = 1;
        $prod->save();
    
        // placas - EGGER - FEELWOOD
        $prod = new Product();
        $prod->id     = 58;
        $prod->title = "Diseño: ALERCE BLANCO";
        $prod->category_id = 41;
        $prod->image = "prod0058.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 59;
        $prod->title = "Diseño: ALERCE MARRÓN";
        $prod->category_id = 41;
        $prod->image = "prod0059.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 60;
        $prod->title = "Diseño: ROBLE HALIFIX NATURAL";
        $prod->category_id = 41;
        $prod->image = "prod0060.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 61;
        $prod->title = "Diseño: ROBLE HALIFIX TABACO";
        $prod->category_id = 41;
        $prod->image = "prod0061.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        // placas - EGGER - TOUCH
        $prod = new Product();
        $prod->id     = 62;
        $prod->title = "Diseño: KENIA";
        $prod->category_id = 42;
        $prod->image = "prod0062.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 63;
        $prod->title = "Diseño: LARICINA";
        $prod->category_id = 42;
        $prod->image = "prod0063.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 64;
        $prod->title = "Diseño: OLMO ALPINO";
        $prod->category_id = 42;
        $prod->image = "prod0064.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 65;
        $prod->title = "Diseño: ROBLE MORO";
        $prod->category_id = 42;
        $prod->image = "prod0065.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 66;
        $prod->title = "Diseño: SIBERIA";
        $prod->category_id = 42;
        $prod->image = "prod0066.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 67;
        $prod->title = "Diseño: TECA TOUCH";
        $prod->category_id = 42;
        $prod->image = "prod0067.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 68;
        $prod->title = "Diseño: TOLEDO";
        $prod->category_id = 42;
        $prod->image = "prod0068.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        // placas - EGGER - ESENCIA
        $prod = new Product();
        $prod->id     = 69;
        $prod->title = "Diseño: ENCHAPADO WENGUE";
        $prod->category_id = 43;
        $prod->image = "prod0069.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 70;
        $prod->title = "Diseño: ENIGMA";
        $prod->category_id = 43;
        $prod->image = "prod0070.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 71;
        $prod->title = "Diseño: FRESNO ABEDUL";
        $prod->category_id = 43;
        $prod->image = "prod0071.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();  
        
        $prod = new Product();
        $prod->id     = 72;
        $prod->title = "Diseño: FRESNO NEGRO";
        $prod->category_id = 43;
        $prod->image = "prod0072.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 73;
        $prod->title = "Diseño: NOGAL HABANO";
        $prod->category_id = 43;
        $prod->image = "prod0073.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 74;
        $prod->title = "Diseño: ROBLE AMERICANO";
        $prod->category_id = 43;
        $prod->image = "prod0074.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 75;
        $prod->title = "Diseño: ROBLE BLANCO";
        $prod->category_id = 43;
        $prod->image = "prod0075.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();  
        
        $prod = new Product();
        $prod->id     = 76;
        $prod->title = "Diseño: ROBLE NATURAL";
        $prod->category_id = 43;
        $prod->image = "prod0076.jpg";
        $prod->order = 8;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 77;
        $prod->title = "Diseño: TECA LIMO";
        $prod->category_id = 43;
        $prod->image = "prod0077.jpg";
        $prod->order = 9;
        $prod->status = 1;
        $prod->save();    

        $prod = new Product();
        $prod->id     = 78;
        $prod->title = "Diseño: TORTONA";
        $prod->category_id = 43;
        $prod->image = "prod0078.jpg";
        $prod->order = 10;
        $prod->status = 1;
        $prod->save();    

    }
}
