<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conyuges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblconyuges', function (Blueprint $table) {
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
            $table->string('telefono',10)->default(0);
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
        Schema::dropIfExists('tblconyuges');
    }
}
