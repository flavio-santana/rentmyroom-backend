<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnuncioComodidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio_comodidades', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('anuncio_id')->unsigned()->index()
                  ->foreign('anuncio_id')->references('id')
                  ->on('anuncios')->onUpdate('cascade');

            $table->integer('comodidade_id')->unsigned()->index()
            ->foreign('comodidade_id')->references('id')
            ->on('comodidades')->onUpdate('cascade');

            $table->enum('publicado', ['Nao', 'Sim'])->default('Sim');

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
        Schema::dropIfExists('anuncio_comodidades');
    }
}
