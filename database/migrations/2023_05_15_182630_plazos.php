<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plazos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblplazos_vales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->decimal('plazos',10,2);
            $table->string('tipo',20);
            $table->foreign('idusuario')->references('id')->on('users');
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
        //
    }
}
