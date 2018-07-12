<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->integer('enero');
            $table->integer('febrero');
            $table->integer('marzo');
            $table->integer('abril');
            $table->integer('mayo');
            $table->integer('junio');
            $table->integer('julio');
            $table->integer('agosto');
            $table->integer('setiembre');
            $table->integer('octubre');
            $table->integer('noviembre');
            $table->integer('diciembre');
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
        Schema::dropIfExists('formula');
    }
}
