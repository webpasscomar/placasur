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
    }
}
