<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tblsucursales')->insert([
            'nombre_sucursal' => 'Principal',
            'telefono_sucursal'=>'871111',
            'idciudad'=>1,
            'calle_sucursal'=>'Madrid',
            'colonia_sucursal'=>'Paris',
            'numero_interior_sucursal'=>'1',
            'numero_exterior_sucursal'=>'1',
            'codigo_postal_sucursal'=>'1',
        ]);
    }
}
