<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Idestado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbldistribuidores', function (Blueprint $table) {
            $table->unsignedBigInteger('idestado');
            $table->foreign('idestado')->references('id')->on('tblestados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbldistribuidores', function (Blueprint $table) {
            //
        });
    }
}
