<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tblpuestos')->insert([
            'nombre_puesto' => 'Administrador',
            'descripcion_puesto'=>'prueba',
        ]);
    }
}
