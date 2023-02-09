<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TarifasSubsidio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltarifas_subsidio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idsubdet');
            $table->decimal('pago_ingreso_de',8,2);
            $table->decimal('pago_ingreso_hasta',8,2);
            $table->decimal('cantidad_subsidio_empleo_act',8,2);
            $table->foreign('idsubdet')->references('id')->on('tbltipo_nominas');
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
