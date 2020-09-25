<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Anuncio;
use App\Model\Regra;

class AnuncioRegra extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_anuncio';
    
    //
    protected $fillable = array(
        'id','anuncio_id','regras_id','publicado','created_at','updated_at',
    );

    /**
     * produto
     *
     * @return void
     */
    public function anuncio()
    {
        $this->belongsTo(Anuncio::class);
    }

    /**
     * produto
     *
     * @return void
     */
    public function regra()
    {
        $this->belongsTo(Regra::class);
    }

}