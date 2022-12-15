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
            $table->string('nombre',60);
            $table->string('telefono',10);
            $table->unsignedBigInteger('idciudad');
            $table->string('calle',60);
            $table->string('colonia',60);
            $table->string('numero_interior',10);
            $table->string('numero_exterior',10);
            $table->string('codigo_postal',6);
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
