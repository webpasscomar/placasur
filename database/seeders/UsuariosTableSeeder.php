<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User_rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contrasenaHasheada = bcrypt('admin2023');

        //inserto usuario admin
        $user = new User();
        $user->name = "administrador";
        $user->email = "info@placasur.com.ar";
        $user->lastname = "administrador";
        $user->password = $contrasenaHasheada;
        $user->email_verified_at = now();
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        //inserto rol admin del usuario creado
        $user_rol = new User_rol();
        $user_rol->user_id = $user->id;
        $user_rol->rol_id = 1;
        $user_rol->created_at = now();
        $user_rol->updated_at = now();
        $user_rol->save();

        $contrasenaHasheada = bcrypt('Pl4c4sur');

        //inserto usuario admin
        $user = new User();
        $user->name = "administrador";
        $user->email = "admin@placasur.com.ar";
        $user->lastname = "administrador";
        $user->password = $contrasenaHasheada;
        $user->email_verified_at = now();
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        //inserto rol admin del usuario creado
        $user_rol = new User_rol();
        $user_rol->user_id = $user->id;
        $user_rol->rol_id = 1;
        $user_rol->created_at = now();
        $user_rol->updated_at = now();
        $user_rol->save();
    }
}
