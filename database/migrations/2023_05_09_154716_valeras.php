<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Valeras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblvaleras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idsucursal');
            $table->unsignedBigInteger('idusuario');
            $table->string('status_valera',100)->default('A');
            $table->integer('folio_inicio');
            $table->integer('folio_fin');
            $table->foreign('idsucursal')->references('id')->on('tblsucursales');
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
