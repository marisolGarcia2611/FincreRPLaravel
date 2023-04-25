<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmensajes_interacciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iddistribuidor');
            $table->string('texto',500);
            $table->string('tipo_usuario',500);
            $table->string('turno',500);
            $table->foreign('iddistribuidor')->references('id')->on('tbldistribuidores');
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
