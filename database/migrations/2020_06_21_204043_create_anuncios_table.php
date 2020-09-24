<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_anuncio')->create('anuncios', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('imovel_id')->unsigned()->index()
            ->foreign('imovel_id')->references('id')
            ->on('imovels')->onUpdate('cascade');

            $table->integer('tipoQuarto_id')->unsigned()->index()
            ->foreign('tipoQuarto_id')->references('id')
            ->on('tipo_quartos')->onUpdate('cascade');

            $table->string('titulo',120);
            
            $table->string('descricao',350);

            $table->float('valorAluguel',8,2);

            $table->date('dataDisponivel');

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
        Schema::connection('mysql_anuncio')->dropIfExists('anuncios');
    }
}
