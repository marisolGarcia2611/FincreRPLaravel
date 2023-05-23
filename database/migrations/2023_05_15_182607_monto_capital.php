<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MontoCapital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmontos_capital', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idusuario');
            $table->decimal('cantidad',10,2);
            $table->decimal('porciento_interes',10,2);
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
