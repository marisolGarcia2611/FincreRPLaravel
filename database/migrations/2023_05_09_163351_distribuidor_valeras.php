<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DistribuidorValeras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldistribuidor_valeras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iddistribuidor');
            $table->unsignedBigInteger('idvalera');
            $table->unsignedBigInteger('idsucursal');
            $table->unsignedBigInteger('idpromotor');
            $table->foreign('iddistribuidor')->references('id')->on('tbldistribuidores');
            $table->foreign('idvalera')->references('id')->on('tblvaleras');
            $table->foreign('idsucursal')->references('id')->on('tblsucursales');
            $table->foreign('idpromotor')->references('id')->on('tblpromotores');
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