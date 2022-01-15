<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>5,
            'email'=>"pedro@pedro.pedro",
            'password'=>bcrypt('pedro'),
            'use_name'=>"Pedro",
            'use_lastname'=>"Perez",
            'use_nick'=>"Pedro",
            'use_type'=>"Empresario",
            'use_age'=>"20",
            'use_cellphone'=>"82312323",
            'use_phone'=>"82312323",
            'use_gender'=>'Hombre',
            'use_address'=>'Las Palmeras Av.Moritonga',
            'use_birthday'=>"10/10/1990"
        ]);                
    }
}
