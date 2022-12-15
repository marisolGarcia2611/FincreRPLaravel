<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('users')->insert([
            'name' => 'fincre',
            'email'=>'fincre123@gmail.com',
            'password'=>bcrypt('gamo9403'),
            'idempleado' => '1',
            'estado_user'=>'A', ],);  
        
     
    }
}
