<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermisosSucursales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblsucursales_permisos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idsucursal');
            $table->unsignedBigInteger('idusuario');
            $table->timestamps();
            $table->foreign('idsucursal')->references('id')
                ->on('tblsucursales');
            $table->foreign('idusuario')->references('id')
                ->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsucursales_permisos');
    }
}
