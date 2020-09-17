<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnuncioMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio_mensagems', function (Blueprint $table) {
           
            $table->increments('id');

            $table->integer('anuncio_id')->unsigned()->index()
            ->foreign('anuncio_id')->references('id')
            ->on('anuncios')->onUpdate('cascade');

            $table->integer('usuario_id')->unsigned()->index()
            ->foreign('usuario_id')->references('id')
            ->on('usuarios')->onUpdate('cascade');      

            $table->string('mensagem',350);

            $table->enum('lida', ['Nao', 'Sim'])->default('Nao');

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
        Schema::dropIfExists('anuncio_mensagems');
    }
}
