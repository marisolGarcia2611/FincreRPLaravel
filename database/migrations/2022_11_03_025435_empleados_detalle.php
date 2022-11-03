<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpleadosDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblempleados_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idempleado'); 
            $table->decimal('salario_bruto_empleados_det',8,2);
            $table->decimal('precio',8,2);
            $table->decimal('salario_neto_empleados_det',8,2);
            $table->integer('numero_tarjeta_empleados_det')->length(16)->unsigned();
            $table->string('cuenta_banco_empleados_det',10);
            $table->string('rfc_empleados_det',10);
            $table->string('nss_empleados_det',13);
            $table->string('tipo_sangre_empleados_det',2);
            $table->string('contacto_emergencia_empleados_det',10);
            $table->timestamps();
            $table->foreign('idempleado')->references('id')
                ->on('tblempleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblempleados_detalle');
    }
}
