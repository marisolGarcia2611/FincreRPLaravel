<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartametosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tbldepartamentos')->insert([
            'nombre_departamento' => 'Recursos Humanos',
            'descripcion_departamento'=>'Area encargada de...'],
        [
            'nombre_departamento' => 'Sistemas',
            'descripcion_departamento'=>'Area encargada de...'],
        [
            'nombre_departamento' => 'Sucursales',
            'descripcion_departamento'=>'Area encargada de...'],
        [
            'nombre_departamento' => 'Contabilidad',
            'descripcion_departamento'=>'Area encargada de...'],);
    }
}
