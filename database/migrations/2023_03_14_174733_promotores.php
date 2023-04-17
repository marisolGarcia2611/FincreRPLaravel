<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Promotores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpromotores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idusuario');
             $table->foreign('idempleado')->references('id')->on('tblempleados');
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
        Schema::dropIfExists('tblpromotores'); 
    }
}
