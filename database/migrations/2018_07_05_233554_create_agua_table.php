<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAguaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agua', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tipo');
            $table->float('coste_agricola');
            $table->float('coste_ganadero');
            $table->float('coste_urbano');
            $table->float('coste_industrial');
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
        Schema::dropIfExists('agua');
    }
}
