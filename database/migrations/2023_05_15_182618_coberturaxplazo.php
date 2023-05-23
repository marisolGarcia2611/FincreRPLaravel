<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Coberturaxplazo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tblcobertura_plazo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->decimal('cantidad_cobertura',10,2);
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
