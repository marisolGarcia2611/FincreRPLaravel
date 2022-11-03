<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblvistas')->insert([
            'nombre_vista' => 'Principal',
            'descripcion_vista'=>'prueba',
            'estado_vista'=>'1',
        ]);
    }
}
