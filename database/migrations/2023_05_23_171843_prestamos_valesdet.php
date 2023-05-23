<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrestamosValesdet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblprestamos_valesdet', function (Blueprint $table) {
         
            $table->unsignedBigInteger('idprestamo_vales');
            $table->Integer('plazos');
            $table->string('fecha_pago',20);
            $table->decimal('pago_quincenal',10,2)->default(0);
            $table->decimal('coberturax_plazo',10,2)->default(0);
            $table->decimal('pago_total',10,2)->default(0);
            $table->decimal('otros1',10,2)->default(0);
            $table->decimal('otros2',10,2)->default(0);
            $table->decimal('saldo_nuevo',10,2)->default(0);
            $table->foreign('idprestamo_vales')->references('id')->on('tblprestamos_valesenc');
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
