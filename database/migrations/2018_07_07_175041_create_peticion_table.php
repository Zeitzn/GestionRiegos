<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticion', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');
            // $table->unsignedInteger('id_parcela');
            // $table->foreign('id_parcela')->references('id')->on('parcela');            
            $table->string('linea_hidrante');
            $table->string('tipo');
            $table->string('caudal_peticion');
            $table->string('litros_segundo');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('consumo');
            $table->string('horas');
            $table->string('regante');
            $table->string('linea');
            $table->string('unidades');

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
        Schema::dropIfExists('peticion');
    }
}
