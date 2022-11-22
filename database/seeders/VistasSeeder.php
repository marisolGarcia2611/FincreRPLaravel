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
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'1',
        ],
        [
            'nombre_vista' => 'Recursos',
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'1',
        ],
        [
            'nombre_vista' => 'Sistemas',
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'2',
        ],
        [
            'nombre_vista' => 'Prestamo_suc',
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'3',
        ],
        [
            'nombre_vista' => 'Reportes conta',
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'4',
        ],
        [
            'nombre_vista' => 'Alta usuarios',
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'2',
        ],
        [
            'nombre_vista' => 'Sistemas tickets',
            'descripcion_vista'=>'...',
            'estado_vista'=>'1',
            'iddepartamento'=>'2',
        ]
        );
    }
}
