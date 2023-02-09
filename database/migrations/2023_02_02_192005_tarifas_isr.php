<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TarifasIsr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltarifas_isr', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idtarifas_det');
            $table->decimal('limite_inferior',8,2);
            $table->decimal('limite_superior',8,2);
            $table->decimal('cuota_fija',8,2);
            $table->decimal('porc_aplicarse_exc_inf',8,2);
            $table->foreign('idtarifas_det')->references('id')->on('tbltipo_nominas');
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
