<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = array(
        'id', 
        'nome', 
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
