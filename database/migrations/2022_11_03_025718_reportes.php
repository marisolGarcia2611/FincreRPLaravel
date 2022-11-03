<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblreportes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('iddepartamento');
                $table->string('nombre_reporte',45);
                $table->string('stored_procedimiento_reporte',45);
                $table->string('estado_reporte',1)->default(0); ;
                $table->timestamps();
                $table->foreign('iddepartamento')->references('id')
                ->on('tbldepartamentos');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblreportes');
    }
}
