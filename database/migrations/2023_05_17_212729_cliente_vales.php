<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClienteVales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblclientes_vales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iddistribuidor');
            $table->unsignedBigInteger('idusuario_sistema');
            $table->string('Nombre_completo',250);
            $table->string('fecha_nacimiento',10);
            $table->string('curp',18);
            $table->string('rfc',13);
            $table->string('direccion',250);
            $table->string('telefono',10);
            $table->string('lugar_trabajo',250);
            $table->string('telefono_trabajo',10);
            $table->string('nombre_referencia',250);
            $table->string('direccion_referencia',250);
            $table->string('telefono_referencia',10);
            $table->string('ruta_comprobante_identificacion',250);
            $table->string('ruta_vale_escaneado',18);
            $table->foreign('iddistribuidor')->references('id')->on('tbldistribuidores');
            $table->foreign('idusuario_sistema')->references('id')->on('users');
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
