<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BajasEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblempleado_bajas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idempleado');
            $table->string('tipo_baja',50); 
            $table->string('descripcion',250)->default(0); 
            $table->string('fecha_baja',10); 
            $table->string('dias_gratificacion',5)->default(0); 
            $table->string('dias_aguinaldo',5)->default(0);
            $table->string('dias_sueldo_a_deber',5)->default(0);
            $table->string('dias_vacaciones',5)->default(0);
            
            $table->decimal('cantidad_gratificacion',8,2)->default(0);
            $table->decimal('cantidad_aguinaldo',8,2)->default(0);
            $table->decimal('cantidad_sueldo',8,2)->default(0);
            $table->decimal('cantidad_vacaciones',8,2)->default(0);


            $table->decimal('cantidaddeduccion_imms',8,2)->default(0);
            $table->decimal('cantidaddeduccion_infonavit',8,2)->default(0);
            $table->decimal('cantidaddeduccion_transporte',8,2)->default(0);
            $table->decimal('cantidaddeduccion_prestamo',8,2)->default(0);
            $table->decimal('cantidaddeduccion_otros',8,2)->default(0);

            $table->decimal('cantidadtotal_entregada',8,2)->default(0);

            $table->timestamps();
            $table->foreign('idempleado')->references('id')->on('tblempleados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblempleado_bajas');
    }
}
