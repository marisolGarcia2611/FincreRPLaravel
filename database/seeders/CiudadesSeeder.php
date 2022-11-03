<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tblciudades')->insert([
            'nombre_ciudad' => 'Torreon',
        ]);
    }
}
