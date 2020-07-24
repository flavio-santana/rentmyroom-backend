<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('nome',60);

            $table->string('dataNascimento',10);

            $table->string('cpf',11);

            $table->string('telefone',15);

            $table->string('email',60);

            $table->string('senha',10);

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
        Schema::dropIfExists('usuarios');
    }
}
