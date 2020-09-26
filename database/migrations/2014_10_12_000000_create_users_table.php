<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


/**
 * No link abaixo encontrei a solução para o erro que 
 * estava ocorrendo para: $table->string('email')->unique(); 
 */
//https://laravel-news.com/laravel-5-4-key-too-long-error

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_usuario')->create('users', function (Blueprint $table) {
            
            $table->id();
            
            $table->string('name');
            
            $table->string('email')->unique();
            
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('password');
            
            $table->rememberToken();

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
        Schema::connection('mysql_usuario')->dropIfExists('users');
    }
}
