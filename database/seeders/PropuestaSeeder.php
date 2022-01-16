<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propuestas')->insert(
            [
                'id' => 1,
                'pro_title' => "Propuesta 1",
                'pro_description' => "Descripcion de la propuesta 1",
                'pro_image' => "https://img.interempresas.net/fotos/2517054.jpeg",
                'use_id' => 5
            ],



        );
        DB::table('propuestas')->insert(
            [
                'id' => 2,
                'pro_title' => "Propuesta 2",
                'pro_description' => "Descripcion de la propuesta 2",
                'pro_image' => "https://img.interempresas.net/fotos/2517054.jpeg",
                'use_id' => 5
            ]     
        );
   
    }
}
