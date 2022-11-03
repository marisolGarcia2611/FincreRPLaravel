<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosPermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuarios_permisos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->unsignedBigInteger('idvista');
            $table->unsignedBigInteger('idaccion');
            $table->string('estado_usuario_permiso',1)->default(0); ;
            $table->timestamps();
            $table->foreign('idusuario')->references('id')
                ->on('users');
            $table->foreign('idvista')->references('id')
                ->on('tblvistas');
            $table->foreign('idaccion')->references('id')
                ->on('tblacciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblusuarios_permisos');
    }
}
