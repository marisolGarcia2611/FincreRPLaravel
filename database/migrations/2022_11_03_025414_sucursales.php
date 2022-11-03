<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sucursales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblsucursales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_sucursal',60);
            $table->string('telefono_sucursal',10);
            $table->unsignedBigInteger('idciudad');
            $table->string('calle_sucursal',60);
            $table->string('colonia_sucursal',60);
            $table->string('numero_interior_sucursal',10);
            $table->string('numero_exterior_sucursal',10);
            $table->string('codigo_postal_sucursal',6);
            $table->timestamps();
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
        Schema::dropIfExists('tblsucursales');
    }
}
