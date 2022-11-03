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
            'password'=>bcrypt('123Fincre'),
            'idempleado'=>1,
        ]);
    }
}
