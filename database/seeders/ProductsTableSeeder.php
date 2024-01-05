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

        // placas - EGGER - MATERIA
        $prod = new Product();
        $prod->id     = 79;
        $prod->title = "Diseño: CARRARA";
        $prod->category_id = 44;
        $prod->image = "prod0079.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 80;
        $prod->title = "Diseño: CONCRETO METROPOLITANO";
        $prod->category_id = 44;
        $prod->image = "prod0080.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 81;
        $prod->title = "Diseño: LINO";
        $prod->category_id = 44;
        $prod->image = "prod0081.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 82;
        $prod->title = "Diseño: NEBRASKA";
        $prod->category_id = 44;
        $prod->image = "prod0082.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 83;
        $prod->title = "Diseño: OXIDO";
        $prod->category_id = 44;
        $prod->image = "prod0083.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 84;
        $prod->title = "Diseño: RAMIO CAFÉ";
        $prod->category_id = 44;
        $prod->image = "prod0084.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 85;
        $prod->title = "Diseño: RAMIO PLATA";
        $prod->category_id = 44;
        $prod->image = "prod0085.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 86;
        $prod->title = "Diseño: RAMIO SEPIA";
        $prod->category_id = 44;
        $prod->image = "prod0086.jpg";
        $prod->order = 8;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 87;
        $prod->title = "Diseño: ROBLE MIEL";
        $prod->category_id = 44;
        $prod->image = "prod0087.jpg";
        $prod->order = 9;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 88;
        $prod->title = "Diseño: SANTORINI";
        $prod->category_id = 44;
        $prod->image = "prod0088.jpg";
        $prod->order = 10;
        $prod->status = 1;
        $prod->save();

        // placas - EGGER - CLASICA
        $prod = new Product();
        $prod->id     = 89;
        $prod->title = "Diseño: CEDRO";
        $prod->category_id = 45;
        $prod->image = "prod0089.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 90;
        $prod->title = "Diseño: CEREJEIRA";
        $prod->category_id = 45;
        $prod->image = "prod0090.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 91;
        $prod->title = "Diseño: GUINDO";
        $prod->category_id = 45;
        $prod->image = "prod0091.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 92;
        $prod->title = "Diseño: HAYA";
        $prod->category_id = 45;
        $prod->image = "prod0092.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 93;
        $prod->title = "Diseño: ROBLE MORO";
        $prod->category_id = 45;
        $prod->image = "prod0093.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 94;
        $prod->title = "Diseño: TECA";
        $prod->category_id = 45;
        $prod->image = "prod0094.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 95;
        $prod->title = "Diseño: WENGUE";
        $prod->category_id = 45;
        $prod->image = "prod0095.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        // placas - REHAU
        $prod = new Product();
        $prod->id     = 96;
        $prod->title = "Cantos UNICOLOR";
        $prod->category_id = 46;
        $prod->image = "prod0096.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 97;
        $prod->title = "Cantos DEKOR";
        $prod->category_id = 46;
        $prod->image = "prod0097.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 98;
        $prod->title = "Cantos MIRROR GLOSS";
        $prod->category_id = 46;
        $prod->image = "prod0098.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 99;
        $prod->title = "Cantos VISIONS";
        $prod->category_id = 46;
        $prod->image = "prod0099.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 100;
        $prod->title = "Rauvisio RADIANT";
        $prod->category_id = 46;
        $prod->image = "prod0100.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 101;
        $prod->title = "Rauvisio CRISTAL";
        $prod->category_id = 46;
        $prod->image = "prod0101.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 102;
        $prod->title = "Rauvisio BRILLANT";
        $prod->category_id = 46;
        $prod->image = "prod0102.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 103;
        $prod->title = "Rauvisio SKY";
        $prod->category_id = 46;
        $prod->image = "prod0103.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        // placas - SADEPAN SIMPLECE
        $prod = new Product();
        $prod->id     = 104;
        $prod->title = "Color: VERDE";
        $prod->category_id = 47;
        $prod->image = "prod0104.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 105;
        $prod->title = "Color: PANNA";
        $prod->category_id = 47;
        $prod->image = "prod0105.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 106;
        $prod->title = "Color: NERO";
        $prod->category_id = 47;
        $prod->image = "prod0106.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 107;
        $prod->title = "Color: GRIGIO 251";
        $prod->category_id = 47;
        $prod->image = "prod0107.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 108;
        $prod->title = "Color: GRIGIO 068";
        $prod->category_id = 47;
        $prod->image = "prod0108.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 109;
        $prod->title = "Color: BLU";
        $prod->category_id = 47;
        $prod->image = "prod0109.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        // placas - SADEPAN REGAZZI
        $prod = new Product();
        $prod->id     = 110;
        $prod->title = "Color: VERDE ALPI";
        $prod->category_id = 48;
        $prod->image = "prod0110.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 111;
        $prod->title = "Color: ROSSO";
        $prod->category_id = 48;
        $prod->image = "prod0111.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 112;
        $prod->title = "Color: LILLA";
        $prod->category_id = 48;
        $prod->image = "prod0112.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 113;
        $prod->title = "Color: ARANCIO";
        $prod->category_id = 48;
        $prod->image = "prod0113.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        // placas - SADEPAN PIACERE
        $prod = new Product();
        $prod->id     = 114;
        $prod->title = "Diseño TEAK";
        $prod->category_id = 49;
        $prod->image = "prod0114.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 115;
        $prod->title = "Diseño ROVERE";
        $prod->category_id = 49;
        $prod->image = "prod0115.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 116;
        $prod->title = "Diseño ROVERE FOSCARI";
        $prod->category_id = 49;
        $prod->image = "prod0116.png";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 117;
        $prod->title = "Diseño NOCE GUARNIERI";
        $prod->category_id = 49;
        $prod->image = "prod0117.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 118;
        $prod->title = "Diseño NOCE FARNESE";
        $prod->category_id = 49;
        $prod->image = "prod0118.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 119;
        $prod->title = "Diseño NOCE DOMINO";
        $prod->category_id = 49;
        $prod->image = "prod0119.jpg";
        $prod->order = 6;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 120;
        $prod->title = "Diseño MELO";
        $prod->category_id = 49;
        $prod->image = "prod0120.jpg";
        $prod->order = 7;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 121;
        $prod->title = "Diseño FAGGIO";
        $prod->category_id = 49;
        $prod->image = "prod0121.jpg";
        $prod->order = 8;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 122;
        $prod->title = "Diseño CILIEGIO EUROPEO";
        $prod->category_id = 49;
        $prod->image = "prod0122.jpg";
        $prod->order = 9;
        $prod->status = 1;
        $prod->save();

        // placas - SADEPAN SENSAZIONI
        $prod = new Product();
        $prod->id     = 123;
        $prod->title = "Diseño CILIEGIO";
        $prod->category_id = 50;
        $prod->image = "prod0123.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 124;
        $prod->title = "Diseño NOCE";
        $prod->category_id = 50;
        $prod->image = "prod0124.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 125;
        $prod->title = "Diseño OLMO";
        $prod->category_id = 50;
        $prod->image = "prod0125.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 126;
        $prod->title = "Diseño RIGOLETTO";
        $prod->category_id = 50;
        $prod->image = "prod0126.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 127;
        $prod->title = "Diseño ZEBRANO";
        $prod->category_id = 50;
        $prod->image = "prod0127.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();

        // placas - SADEPAN POTENZA
        $prod = new Product();
        $prod->id     = 128;
        $prod->title = "Diseño ATAKAMA";
        $prod->category_id = 51;
        $prod->image = "prod0128.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 129;
        $prod->title = "Diseño LARICE SCURO";
        $prod->category_id = 51;
        $prod->image = "prod0129.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 130;
        $prod->title = "Diseño OLMO FIDIA";
        $prod->category_id = 51;
        $prod->image = "prod0130.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 131;
        $prod->title = "Diseño ORINOCO";
        $prod->category_id = 51;
        $prod->image = "prod0131.jpg";
        $prod->order = 4;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 132;
        $prod->title = "Diseño WALNUT";
        $prod->category_id = 51;
        $prod->image = "prod0132.jpg";
        $prod->order = 5;
        $prod->status = 1;
        $prod->save();
     // barnices
        $prod = new Product();
        $prod->id     = 133;
        $prod->title = "Protector para Decks PETRILAC";
        $prod->category_id = 15;
        $prod->image = "prod0133.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 134;
        $prod->title = "Diluyente PETRILAC";
        $prod->category_id = 15;
        $prod->image = "prod0134.jpeg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        // adhesivos
        $prod = new Product();
        $prod->id     = 135;
        $prod->title = "Adhesivos Vinílico para Carpintería K-990";
        $prod->category_id = 14;
        $prod->image = "prod0135.jpg";
        $prod->order = 1;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 136;
        $prod->title = "Adhesivos Vinílico para Carpintería D2 K-1000";
        $prod->category_id = 14;
        $prod->image = "prod0136.jpg";
        $prod->order = 2;
        $prod->status = 1;
        $prod->save();

        $prod = new Product();
        $prod->id     = 137;
        $prod->title = "Adhesivos Monocomponente para Carpintería K-1030";
        $prod->category_id = 14;
        $prod->image = "prod0137.jpg";
        $prod->order = 3;
        $prod->status = 1;
        $prod->save();


    }
}
