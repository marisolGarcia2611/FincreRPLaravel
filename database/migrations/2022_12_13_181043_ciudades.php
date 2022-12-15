<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ciudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('descripcion',45);
            $table->unsignedBigInteger('idestado'); 
            $table->foreign('idestado')->references('id')
            ->on('tblestados');
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
        Schema::dropIfExists('tblciudades'); 
    }
}
