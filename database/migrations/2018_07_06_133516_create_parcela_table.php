<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcela', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parcela');
            $table->string('subparcela');
            $table->string('superficie_catastral');
            $table->string('superficie_riego');
            $table->string('riego_precario');
            $table->string('municipio');
            $table->string('sector');
            // $table->string('propietario');
            $table->unsignedInteger('id_usuario');            
            $table->string('cultivo');
            $table->string('sup_ag');
            $table->string('tipo_riego');
            $table->string('superficie');
            $table->string('amortizacion');
            
            $table->string('variedad');
            $table->string('arrendatario');
            $table->string('pagador_agua');
            $table->string('pagador_gastos');
            $table->string('hidrante');

            $table->string('codigo_catastro');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcela');
    }
}
