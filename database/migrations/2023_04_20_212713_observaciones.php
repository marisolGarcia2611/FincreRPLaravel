<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Observaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblhistorial', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iddistribuidor');
            $table->string('status',100);
            $table->string('descripcion_status',100);
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
        
    }
}
