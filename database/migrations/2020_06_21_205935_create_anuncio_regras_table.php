<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnuncioRegrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_anuncio')->create('anuncio_regras', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('anuncio_id')->unsigned()->index()
                  ->foreign('anuncio_id')->references('id')
                  ->on('anuncios')->onUpdate('cascade');

            $table->integer('regra_id')->unsigned()->index()
            ->foreign('regra_id')->references('id')
            ->on('regras')->onUpdate('cascade');

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
        Schema::connection('mysql_anuncio')->dropIfExists('anuncio_regras');
    }
}
