<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioPantallas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuario_pantallas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idvista');
            $table->unsignedBigInteger('iddepartamento');
            $table->string('estado',1)->default(0); 
            $table->timestamps();
            $table->foreign('idusuario')->references('id')->on('users');
            $table->foreign('idvista')->references('id')->on('tblvistas');
            $table->foreign('iddepartamento')->references('id')->on('tbldepartamentos');
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
