<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfonavitToTblempleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblnominas', function (Blueprint $table) {
      
            $table->unsignedBigInteger('id_tipoinfonavit');
            $table->foreign('id_tipoinfonavit')->references('id')->on('tbltipoinfonavit');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblnominas', function (Blueprint $table) {
            //
        });
    }
}
