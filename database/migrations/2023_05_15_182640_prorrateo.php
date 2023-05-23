<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prorrateo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblprorrateo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->string('concepto',20);
            $table->decimal('porciento_prorrateo',10,2);
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
