<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NominaspagosEnc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblnominas_pagoenc', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_inicio',12); 
            $table->string('fecha_fin',12); 
            $table->string('estado_nomina',12); 
            $table->string('nombre_nomina',50); 
            $table->string('comentarios',50); 
            $table->unsignedBigInteger('idtiponomina');
            $table->foreign('idtiponomina')->references('id')->on('tbltipo_nominas');
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
        Schema::dropIfExists('tblnominas_pagoenc');  
    }
}
