<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblvistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_vista',50);
            $table->string('descripcion_vista',50);
            $table->string('estado_vista',1)->default(0); 
            $table->unsignedBigInteger('iddepartamento');
             $table->foreign('iddepartamento')->references('id')->on('tbldepartamentos');
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
        Schema::dropIfExists('tblvistas');
    }
}
