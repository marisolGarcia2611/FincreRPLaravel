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
        ],
        [
            'primernombre_empleado'=>'Gilberto',
            'segundonombre_empleado'=>'Alejando',
            'apellidopaterno_empleado'=>'Moreno',
            'apellidomaterno__empleado'=>'Orona',
            'telefono_empleado'=>'8712598974',
            'correo_empleado'=>'gilberto.moreno.orona@gmail.com',
            'idpuesto'=>2,
            'idsucursal'=>1,
            'idciudad'=>1,
            'calle_empleado'=>'Torres',
            'colonia_empleado'=>'jacarandas',
            'numerointerior_empleado'=>'2',
            'numeroexterior_empleado'=>'2',
            'codigopostal_empleado'=>'27110',
            'sexo_empleado'=>'M',
            'fechanacimiento_empleado'=>'08/03/1999',
            'idnomina'=>2,
        ],
        [
            'primernombre_empleado'=>'Angelica',
            'segundonombre_empleado'=>'Marisol',
            'apellidopaterno_empleado'=>'Garcia',
            'apellidomaterno__empleado'=>'Gonzalez',
            'telefono_empleado'=>'8711248452',
            'correo_empleado'=>'marisol@gmail.com',
            'idpuesto'=>2,
            'idsucursal'=>1,
            'idciudad'=>1,
            'calle_empleado'=>'San buenaventura',
            'colonia_empleado'=>'Velle verde',
            'numerointerior_empleado'=>'402',
            'numeroexterior_empleado'=>'402',
            'codigopostal_empleado'=>'27055',
            'sexo_empleado'=>'F',
            'fechanacimiento_empleado'=>'18/8/2002',
            'idnomina'=>3,
        ]);
    }
}
