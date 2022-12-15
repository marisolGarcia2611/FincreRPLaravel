<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nominas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblnominas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idempresa');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idbancos');
            $table->decimal('salario_bruto',8,2);
            $table->decimal('salario_neto',8,2);
            $table->decimal('salario_fijo',8,2);
            $table->decimal('pago_imss',8,2);
            $table->decimal('excedente',8,2);
            $table->decimal('efectivo',58,2);
            $table->string('numero_tarjeta',16);
            $table->string('numero_cuenta',10);
           $table->timestamps();
           $table->foreign('idempresa')->references('id')->on('tblempresas');
           $table->foreign('idempleado')->references('id')->on('tblempleados');
           $table->foreign('idbancos')->references('id')->on('tblbancos');
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
