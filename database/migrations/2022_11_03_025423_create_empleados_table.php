<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblempleados', function (Blueprint $table) {
            $table->id();
            $table->string('primernombre_empleado',30);
            $table->string('segundonombre_empleado',30);
            $table->string('apellidopaterno_empleado',30);
            $table->string('apellidomaterno__empleado',30);
            $table->string('telefono_empleado',10);
            $table->string('correo_empleado',50);
            $table->unsignedBigInteger('idpuesto'); 
            $table->unsignedBigInteger('idsucursal'); 
            $table->unsignedBigInteger('idciudad'); 
            $table->string('calle_empleado',60);
            $table->string('colonia_empleado',60);
            $table->string('numerointerior_empleado',10);
            $table->string('numeroexterior_empleado',10);
            $table->string('codigopostal_empleado',6);
            $table->string('sexo_empleado',1);
            $table->string('fechanacimiento_empleado',10);
            $table->integer('idnomina'); 
            $table->timestamps();
            $table->foreign('idpuesto')->references('id')
                ->on('tblpuestos');
            $table->foreign('idsucursal')->references('id')
                ->on('tblsucursales');
            $table->foreign('idciudad')->references('id')
                ->on('tblciudades');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblempleados');
    }
}
