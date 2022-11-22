<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'fincre',
            'email'=>'prueba@fincre.com',
            'password'=>bcrypt('12345678Fin'),
            'idempleado'=>1,
        ],
        [
            'name' => 'gmoreno',
            'email'=>'gilberto.moreno.orona@gmail.com',
            'password'=>bcrypt('12345678Gil'),
            'idempleado'=>2,
        ],
        [
            'name' => 'mgarcia',
            'email'=>'marisol@fincre.com',
            'password'=>bcrypt('12345678Mar'),
            'idempleado'=>3,
        ]
    );
    }
}
