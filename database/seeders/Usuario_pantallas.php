<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Usuario_pantallas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblusuario_pantallas')->insert([
            'idusuario' => 1,
            'idvista'=>1,
            'iddepartamento'=>1,
            'estado'=>'A',
        ],
        [
            'idusuario' => 1,
            'idvista'=>2,
            'iddepartamento'=>1,
            'estado'=>'A',
        ],
        [
            'idusuario' => 1,
            'idvista'=>7,
            'iddepartamento'=>2,
            'estado'=>'A',
        ],
        [
            'idusuario' => 2,
            'idvista'=>1,
            'iddepartamento'=>1,
            'estado'=>'A',
        ],
        [
            'idusuario' => 2,
            'idvista'=>2,
            'iddepartamento'=>1,
            'estado'=>'A',
        ],
        [
            'idusuario' => 2,
            'idvista'=>3,
            'iddepartamento'=>2,
            'estado'=>'A',
        ],
        [
            'idusuario' => 2,
            'idvista'=>4,
            'iddepartamento'=>3,
            'estado'=>'A',
        ],
        [
            'idusuario' => 2,
            'idvista'=>5,
            'iddepartamento'=>4,
            'estado'=>'A',
        ],
        [
            'idusuario' => 2,
            'idvista'=>6,
            'iddepartamento'=>2,
            'estado'=>'A',
        ],
        [
            'idusuario' => 3,
            'idvista'=>1,
            'iddepartamento'=>1,
            'estado'=>'A',
        ],
        [
            'idusuario' => 3,
            'idvista'=>2,
            'iddepartamento'=>1,
            'estado'=>'A',
        ],
        [
            'idusuario' => 3,
            'idvista'=>3,
            'iddepartamento'=>2,
            'estado'=>'A',
        ],
        [
            'idusuario' => 3,
            'idvista'=>4,
            'iddepartamento'=>3,
            'estado'=>'A',
        ],
        [
            'idusuario' => 3,
            'idvista'=>5,
            'iddepartamento'=>4,
            'estado'=>'A',
        ],
        [
            'idusuario' => 3,
            'idvista'=>6,
            'iddepartamento'=>2,
            'estado'=>'A',
        ]
    );
    }
}
