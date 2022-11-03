<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tblempleados')->insert([
            'primernombre_empleado'=>'Fincre',
            'segundonombre_empleado'=>'Laguna',
            'apellidopaterno_empleado'=>'Fincre',
            'apellidomaterno__empleado'=>'Laguna',
            'telefono_empleado'=>'111111',
            'correo_empleado'=>'fincre@gmail.com',
            'idpuesto'=>1,
            'idsucursal'=>1,
            'idciudad'=>1,
            'calle_empleado'=>'España',
            'colonia_empleado'=>'Madrid',
            'numerointerior_empleado'=>'1',
            'numeroexterior_empleado'=>'1',
            'codigopostal_empleado'=>'27054',
            'sexo_empleado'=>'F',
            'fechanacimiento_empleado'=>'10/10/2002',
            'idnomina'=>1,
        ]);
    }
}
