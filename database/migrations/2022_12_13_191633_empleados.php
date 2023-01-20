<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
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
            $table->string('primer_nombre',20);
            $table->string('segundo_nombre',20);
            $table->string('apellido_paterno',20);
            $table->string('apellido_materno',20);
            $table->string('telefono',10);
            $table->string('correo',60);
            $table->unsignedBigInteger('idpuesto'); 
            $table->unsignedBigInteger('idsucursal'); 
            $table->unsignedBigInteger('idciudad'); 
            $table->unsignedBigInteger('idbanco'); 
            $table->string('calle',60);
            $table->string('colonia',60);
            $table->string('numero_interior',10);
            $table->string('numero_exterior',10);
            $table->string('codigo_postal',6);
            $table->string('sexo',1);
            $table->string('fecha_nacimiento',10);
            $table->string('foto',50);
            $table->string('rfc',13);
            $table->string('nss',12);
            $table->string('tipo_sangre',10);
            $table->string('contacto_emergencia',50);
            $table->string('telefono_emergencia',10);
            $table->string('estado',10);
            $table->string('descripcion_estado',100);
            $table->string('fecha_ingreso',12);
            $table->timestamps();
            $table->foreign('idpuesto')->references('id')
                ->on('tblpuestos');
            $table->foreign('idsucursal')->references('id')
                ->on('tblsucursales');
            $table->foreign('idciudad')->references('id')
                ->on('tblciudades');
                $table->foreign('idbanco')->references('id')
                ->on('tblbancos');
            
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


