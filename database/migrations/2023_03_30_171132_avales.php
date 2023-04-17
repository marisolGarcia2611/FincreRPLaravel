<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Avales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblavales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iddistribuidor');
            $table->string('primer_nombre',20);
            $table->string('segundo_nombre',20);
            $table->string('apellido_paterno',20);
            $table->string('apellido_materno',20);
            $table->date('fecha_nacimiento');
            $table->string('curp',18)->default(0);
            $table->string('rfc',13)->default(0);
            $table->string('sexo',1);
            $table->string('estado_civil',10)->default('SOLTERO');
            $table->string('telefono',10)->default(0);
            $table->string('calle',60);
            $table->string('colonia',60);
            $table->string('numero_interior',10);
            $table->string('numero_exterior',10);
            $table->string('codigo_postal',6);
            $table->unsignedBigInteger('idciudad');
            $table->string('lugar_empleo',45);
            $table->string('puesto_empleo',45)->default(0);
            $table->decimal('salario_mensual',8,2)->default(0);
            $table->string('antiguedad',10)->default(0);
            $table->string('telefono_empresa',10)->default(0);
            $table->string('direccion_empresa',100)->default(0);
            $table->decimal('egreso_fijomensual',8,2)->default(0);
            $table->foreign('iddistribuidor')->references('id')->on('tbldistribuidores');
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
        Schema::dropIfExists('tblavales');  
    }
}
