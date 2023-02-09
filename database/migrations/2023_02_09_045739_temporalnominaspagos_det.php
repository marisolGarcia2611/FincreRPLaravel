<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TemporalnominaspagosDet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temptblnominas_pagodet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpagonomina');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idnomina');
            $table->decimal('faltas_reta_aus',10,2)->default(0); 
            $table->decimal('dias_laborados',10,2)->default(0); 
            $table->decimal('sueldo_fiscal',10,2)->default(0); 
            $table->decimal('sueldo_excedente',10,2)->default(0);
            $table->decimal('total_sueldo',10,2)->default(0); 
            $table->decimal('deudores_fiscal',10,2)->default(0); 
            $table->decimal('deudores_no_fiscal',10,2)->default(0); 
            $table->decimal('total_deudores',10,2)->default(0); 
            $table->decimal('pago_infonavit',10,2)->default(0); 
            $table->decimal('pago_imss',10,2)->default(0); 
            $table->decimal('pago_isr',10,2)->default(0); 
            $table->decimal('pago_subsidio',10,2)->default(0); 
            $table->decimal('pago_prima_vacacional',10,2)->default(0); 
            $table->decimal('dias_pendiente',10,2)->default(0); 
            $table->decimal('bono',10,2)->default(0); 
            $table->decimal('transporte',10,2)->default(0); 
            $table->decimal('total_nomina_fiscal',10,2)->default(0); 
            $table->decimal('total_apagar_excedente',10,2)->default(0); 
            $table->decimal('total_efectivo',10,2)->default(0); 
            $table->decimal('pago_nomina_fiscal_global',10,2)->default(0); 
            $table->decimal('pago_nomina_excedente_global',10,2)->default(0); 
            $table->decimal('pago_efectivo_cajas',10,2)->default(0); 
            $table->decimal('total_apagar',10,2)->default(0); 
            $table->foreign('idpagonomina')->references('id')->on('tblnominas_pagoenc');
            $table->foreign('idempleado')->references('id')->on('tblempleados');
            $table->foreign('idnomina')->references('id')->on('tblnominas');
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
