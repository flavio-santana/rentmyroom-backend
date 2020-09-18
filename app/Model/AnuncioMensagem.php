<?php

namespace App\Model;
use App\Model\Anuncio;

use Illuminate\Database\Eloquent\Model;

/**
 * AnuncioMensagem
 */
class AnuncioMensagem extends Model
{
    //
    protected $fillable = array(
        'id', 'anuncio_id', 'usuario_id', 'mensagem', 'lida', 'created_at', 'updated_at',
    );
    
    /**
     * anuncio
     *
     * @return void
     */
    public function anuncio()
    {
        
        $this->belongsTo(Anuncio::class);
    }
    
}