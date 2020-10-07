<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $connection = 'mysql_usuario';

    //
    protected $fillable = array(
        'id', 
        'nome', 
        'genero', 
        'dataNascimento', 
        'cpf', 
        'telefone', 
        'email',
        'senha',
        'publicado',
        'created_at',
        'updated_at',
    );

}
