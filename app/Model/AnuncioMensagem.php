<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnuncioMensagem extends Model
{
    //
    protected $fillable = array(
        'id', 'anuncio_id', 'usuario_id', 'mensagem', 'lida', 'created_at', 'updated_at',
    );
}
