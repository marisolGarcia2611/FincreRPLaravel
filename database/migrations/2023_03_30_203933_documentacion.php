<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documentacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldocumentacion', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo',50)->default('DISTRIBUIDOR');
            $table->Integer('id_tipo');
            $table->string('identificacion_oficial',100);
            $table->string('comprobante_domicilio',100);
            $table->string('comprobante_ingresos',100); 
            $table->string('solicitud_credito',100); 
            $table->string('autorizacion_buro',100); 
            $table->string('verificacion_domicilio',100); 
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
        Schema::dropIfExists('tbldocumentacion');  
    }
}
