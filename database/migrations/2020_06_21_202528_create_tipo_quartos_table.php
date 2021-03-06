<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CreateTipoQuartosTable
 */
class CreateTipoQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_anuncio')->create('tipo_quartos', function (Blueprint $table) {

            $table->increments('id');

            $table->string('descricao',100);

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
        Schema::connection('mysql_anuncio')->dropIfExists('tipo_quartos');
    }
}
