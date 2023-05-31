<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoOdp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltipo_odp', function (Blueprint $table) {

            $table->id();
            $table->Integer('tipo_odp');
            $table->string('descripcion',250);
            $table->string('convenio',20);
            $table->string('status',2);
            $table->string('cuenta',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbltipo_odp');  
    }
}
