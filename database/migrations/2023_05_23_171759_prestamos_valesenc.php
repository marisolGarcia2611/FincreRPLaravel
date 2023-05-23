<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrestamosValesenc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblprestamos_valesenc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idusuario_sistema');
            $table->decimal('capitalxplazo',10,2)->default(0); 
            $table->decimal('interesxquincenasiniva',10,2)->default(0); 
            $table->decimal('pagototalintereses',10,2)->default(0); 
            $table->decimal('pagoxplazointeresmascapital',10,2)->default(0); 
            $table->decimal('ivainteres',10,2)->default(0); 
            $table->decimal('ivainteresxplazo',10,2)->default(0); 
            $table->decimal('pagototalsiniva',10,2)->default(0); 
            $table->decimal('parcialidadantesredondeo',10,2)->default(0); 
            $table->decimal('parcialidadredondeada',10,2)->default(0); 

            $table->decimal('pago_totalantesredondeo',10,2)->default(0); 
            $table->decimal('pago_totalredondeado',10,2)->default(0); 

            $table->decimal('pagoxplazototalantesredondeo',10,2)->default(0); 
            $table->decimal('pagoxplazototalredondeado',10,2)->default(0); 

            $table->decimal('redondeocentavosxplazo',10,2)->default(0);
            $table->decimal('redondeototalcentavos',10,2)->default(0);

            $table->decimal('otrosconceptos1',10,2)->default(0);
            $table->decimal('otrosconceptos2',10,2)->default(0);
            $table->decimal('otrosconceptos3',10,2)->default(0);
 		$table->Integer('folio_vale');
            $table->foreign('idcliente')->references('id')->on('tblclientes_vales');
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
