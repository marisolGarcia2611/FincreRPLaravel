<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeudoresfiscalToNominas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblnominas', function (Blueprint $table) {
            $table->decimal('deudores_fiscal',8,2);
            $table->decimal('deudores_no_fiscal',8,2);
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
