<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioSucursales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuario_sucursales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idsucursal');
            $table->foreign('idusuario')->references('id')->on('users');
            $table->foreign('idsucursal')->references('id')->on('tblsucursales');
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
