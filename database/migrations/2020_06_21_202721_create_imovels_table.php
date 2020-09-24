<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_imovel')->create('imovels', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('tipoImovel_id')->unsigned()->index()
                  ->foreign('tipoImovel_id')->references('id')
                  ->on('tipo_imovels')->onUpdate('cascade');

            $table->integer('usuario_id')->unsigned()->index()
            ->foreign('usuario_id')->references('id')
            ->on('usuarios')->onUpdate('cascade');

            $table->string('cep',10);

            $table->string('endereco',100);

            $table->string('bairro',100);

            $table->string('cidade',100);

            $table->string('uf',2);

            $table->string('qtdeQuartos',3);

            $table->string('qtdeBanheiros',3);

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
        Schema::connection('mysql_imovel')->dropIfExists('imovels');
    }
}
