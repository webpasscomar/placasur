<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new Service();
        $service->id = 1;
        $service->title = "Estacionamiento";
        $service->description = "Contamos con amplio estacionamiento y seguridad privada";
        $service->image = "estacionamiento.jpg";
        $service->order = 1;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 2;
        $service->title = "Cotizaciones y pedidos";
        $service->description = "Realizamos cotizaciones sin costo de todos tus proyectos";
        $service->image = "asistencia.jpg";
        $service->order = 2;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 3;
        $service->title = "Showroom";
        $service->description = "Nuestro showroom cuenta con una gran variedad de marcas y productos";
        $service->image = "showroom.jpg";
        $service->order = 3;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 4;
        $service->title = "Asistencia técnica<";
        $service->description = "Contamos con personal capacitado para asesorarte en cada rubro";
        $service->image = "asistencia.jpg";
        $service->order = 4;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 5;
        $service->title = "Cortes a medida";
        $service->description = "Maquinas de última generación y un sistema que optimiza los cortes aseguran el mejor resultado en tus cortes";
        $service->image = "estacionamiento.jpg";
        $service->order = 5;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 6;
        $service->title = "Pegado de cantos";
        $service->description = "Variedad de cantos y pegado. Te llevas tus placas listas para armar";
        $service->image = "pegado.jpg";
        $service->order = 6;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 7;
        $service->title = "Entregas sin cargo";
        $service->description = "Contamos con amplia flota de vehículos para facilitar tu trabajo y optimizar tus tiempos";
        $service->image = "entregas.jpg";
        $service->order = 7;
        $service->status = 1;
        $service->save();

        $service = new Service();
        $service->id = 8;
        $service->title = "Stock permanente";
        $service->description = "Contamos con stock y variedad p/ abastecer la distribución";
        $service->image = "stock.jpg";
        $service->order = 8;
        $service->status = 1;
        $service->save();
    }
}
