<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDistribuidor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltipo_distribuidor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100); 
            $table->string('descripcion',100); 
            $table->decimal('monto_minimo',10,2)->default(0); 
            $table->decimal('monto_maximo',10,2)->default(0); 
           $table->timestamps();
        }); 
       }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
