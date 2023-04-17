<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Referencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblreferencias', function (Blueprint $table) {
            $table->id();
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
            $table->unsignedBigInteger('iddistribuidor');
            $table->foreign('idciudad')->references('id')->on('tblciudades');
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
        Schema::dropIfExists('tblreferencias');
    }
}
